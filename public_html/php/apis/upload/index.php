<?php
use Edu\Cnm\CartridgeCoders;

require_once dirname(__DIR__, 2) . "/classes/autoload.php";
require_once dirname(__DIR__, 2) . "/lib/xsrf.php";
require_once("/etc/apache2/capstone-mysql/encrypted-config.php");
/**
 * api for image uploading
 *
 * @author Marlan Ball <wyndows@earthlink.net> based on code by Robin Nixon
 **/


if(isset($_FILES['image']['name'])) {
	$tmpFileName = $_FILES['image']['tmp_name'];
//move_uploaded_file($_FILES['image']['tmp_name'], $saveto);
	$typeok = TRUE;

	switch($_FILES['image']['type']) {
		case "image/gif":
			$src = imagecreatefromgif($tmpFileName);
			break;
		case "image/jpeg":  // Both regular and progressive jpegs
		case "image/pjpeg":
			$src = imagecreatefromjpeg($tmpFileName);
			break;
		case "image/png":
			$src = imagecreatefrompng($tmpFileName);
			break;
		default:
			$typeok = FALSE;
			break;
	}

	if($typeok) {

		try {

			// verify the session, start if not active
			if(session_status() !== PHP_SESSION_ACTIVE) {
				session_start();
			}

//prepare an empty reply
			$reply = new stdClass();
			$reply->status = 200;
			$reply->data = null;

//set XSRF cookie
			setXsrfCookie();

			// grab the mySQL connection
			$pdo = connectToEncryptedMySQL("/etc/apache2/capstone-mysql/cartridge.ini");

			//determine which HTTP method was used
			$method = array_key_exists("HTTP_X_HTTP_METHOD", $_SERVER) ? $_SERVER["HTTP_X_HTTP_METHOD"] : $_SERVER["REQUEST_METHOD"];

			if($method === "POST") {
				verifyXsrf();

				// create new Image and insert into the database
				$image = new CartridgeCoders\Image(null, "temporaryFileName.jpg", "image/jpeg");
				$image->insert($pdo);

				// update reply
				$reply->message = "Image created ok";

				//update the null imageId with what mySQL just gave us
				$id = intval($pdo->lastInsertId());

				//make sure image content is available
				if(empty($id) === true) {
					throw(new \InvalidArgumentException ("no id for image.", 405));
				}

				// retrieve the Image to be deleted
				$image = CartridgeCoders\Image::getImageFileNameByImageId($pdo, $id);
				if($image === null) {
					throw(new RuntimeException("Image does not exist", 404));
				}

				// put the new image file name into the image and update
				$image->setImageFileName("product-$id");
				$image->update($pdo);

				$reply->data = $id;

				$saveto = "/var/www/html/public_html/cartridge-coders/product-" . "$id.jpg";
				move_uploaded_file($_FILES['image']['tmp_name'], $saveto);

				list($w, $h) = getimagesize($saveto);

				$max = 300;
				$tw = $w;
				$th = $h;

				if($w > $h && $max < $w) {
					$th = $max / $w * $h;
					$tw = $max;
				} elseif($h > $w && $max < $h) {
					$tw = $max / $h * $w;
					$th = $max;
				} elseif($max < $w) {
					$tw = $th = $max;
				}

				$tmp = imagecreatetruecolor($tw, $th);
				imagecopyresampled($tmp, $src, 0, 0, 0, 0, $tw, $th, $w, $h);
				imageconvolution($tmp, array(array(-1, -1, -1),
					array(-1, 16, -1), array(-1, -1, -1)), 8, 0);
				imagejpeg($tmp, $image->getImageFileName());
				imagedestroy($tmp);
				imagedestroy($src);
			}
		} catch(Exception $exception) {
			$reply->status = $exception->getCode();
			$reply->message = $exception->getMessage();
			$reply->trace = $exception->getTraceAsString();
		} catch(TypeError $typeError) {
			$reply->status = $typeError->getCode();
			$reply->message = $typeError->getMessage();
		}

		header("Content-type: application/json");
		if($reply->data === null) {
			unset($reply->data);
		}

// encode and return reply to front end caller
		echo json_encode($reply);
	} // update reply with exception information
}



?>