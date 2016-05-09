<?php

/**
 * Formulating plan for unit testing of ProductPurchase class
 *
 * Class will consist of two foreign keys only, primary will be a compost of the two
 * 
 * Foreign keys:
 * ProductPurchaseProductId
 * ProductPurchasePurchaseId
 *
 * Testing will be on;
 * insert on productPurchase
 * update on productPurchase
 * delete on product Purchase
 * get of productPurchase by productId
 * get of productPurchase by purchaseId
 *
 * Testing will consist of;
 * test inserting valid ProductPurchase and verifying
 * test inserting invalid ProductPurchase (over limit) and verifying
 * test inserting ProductPurchase where already exist
 * test updating ProductPurchase where already exist
 * test getting ProductPurchase by productId where does not exist
 * test getting ProductPurchase by purchaseId where does not exist
 *
 * @author Donald DeLeeuw <donald.deleeuw@gmail.com> based on code by Dylan McDonald <dmcdonald21@cnm.edu>
 */

namespace Edu\Cnm\CartridgeCoders\Test;

use Edu\Cnm\CartridgeCoders\{ProductPurchase, Product, Purchase};


// grab  the project test parameters
require_once("CartridgeCodersTest.php");

//grab the class under scrutiny
require_once(dirname(__DIR__) . "/php/classes/autoload.php");

/**
 * Unit testing for the ProductPurchase class
 * @see ProductPurchase
 */
class ProductPurchaseTest extends CartridgeCodersTest{

	/**
	 * creating mock objects for foreign keys
	 * @var Product profile
	 * @var Purchase profile
	 */
	protected $product = null;
	protected $purchase = null;

	/**
	 * create dependent objects before running each test
	 */
	public final function setUp(){
		// run the default setUp() method first
		parent::setUp();
		
		// creare and insert a Product class
		$this->product = new Product(null, 11, 22, 33, "discription would be here", 44, 55, 0, "the title is here");
		$this->product->insert($this->getPDO());
		
		// create and insert Purchase class
		$this->purchase = new Purchase(null, 21, "transaction0123456789numbers", "2016-05-09 17:00:00");
	}














}

























