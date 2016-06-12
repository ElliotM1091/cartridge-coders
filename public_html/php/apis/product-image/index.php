<?php
use Edu\Cnm\CartridgeCoders;

require_once dirname(__DIR__, 2) . "/classes/autoload.php";
require_once dirname(__DIR__, 2) . "/lib/xsrf.php";
require_once("/etc/apache2/capstone-mysql/encrypted-config.php");


/**
 * api for the product and image class combined
 *
 * @author Marlan Ball <wyndows@earthlink.net> parts of this code are modified from code that was modified from the original created by Derik Mauldin <derik.e.mauldin>
 **/

// verify the session, start if not active
if(session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}

// prepare an empty reply
$reply = new stdClass();
$reply->status = 200;
$reply->data = null;

try {
	// grab the mySQL connection
	$pdo = connectToEncryptedMySQL("/etc/apache2/capstone-mysql/cartridge.ini");

	// determine which HTTP method was used
	$method = array_key_exists("HTTP_X_HTT_METHOD", $_SERVER) ? $_SERVER["HTTP_X_HTTP_METHOD"] : $_SERVER["REQUEST_METHOD"];

	// handle GET request - all products are returned along with their respective images.
	if($method === "GET") {
		//set XSRF cookie
		setXsrfCookie();

//		$getProductsWithImages = function () {
		$products = CartridgeCoders\Product::getAllProducts($pdo);
		if($products !== null) {

			$index = json_encode($products);

			$imageData = json_decode($index);

			foreach($imageData as $key => $values) {
				$productImage = CartridgeCoders\Image::getImageFileNameByProductImageId($pdo, ($values->productImageId));

				$productImageJson = json_encode($productImage);
				$productImageUnJson = json_decode($productImageJson);

				$values->productImageId = $productImageUnJson->imageFileName;

			}
			$reply->data = $imageData;
		}
//		};


	} else {
		throw (new InvalidArgumentException("Invalid HTTP method request"));
	}
	// update reply with exception information
} catch(Exception $exception) {
	$reply->status = $exception->getCode();
	$reply->message = $exception->getMessage();
	$reply->trace = $exception->getTraceAsString();
} catch(TypeError $typeError) {
	$reply->status = $typeError->getCode();
	$reply->message = $typeError->getMessage();
}

header("Content-type: aplication/json");
if($reply->data === null) {
	unset($reply->data);
}

// encode and return reply to from end caller
header("Content-type: application/json");
echo json_encode($reply);
