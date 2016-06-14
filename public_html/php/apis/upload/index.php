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

// verify the session, start if not active
if(session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}

//prepare an empty reply
$reply = new stdClass();
$reply->status = 200;
$reply->data = null;

try {

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
		// create an image object with a bad file name
		// insert the image into the database
		// rename the file name to be product-$productId
		// update the image in the database
		$saveto = "/var/www/html/public_html/cartridge-coders/product-$productId.jpg";


		list($w, $h) = getimagesize($saveto);

		$max = 100;
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
}

//showProfile($user);

echo <<<_END
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title></title>
  </head>
  <body>
   <form method='post' action='index.php' enctype='multipart/form-data'>
	<h3>Upload an Image</h3>
	<br> 
	Image: <input type='file' name='image' size='14'>
	<input type='submit' value='Save Image'>
</form>
  </body>
</html>
_END;
?>