<?php
namespace Edu\Cnm\CartridgeCoders;

require_once ("autoload.php");

/**
 * Product class for Cartridge Coders capstone project
 *
 * @author Marlan Ball <wyndows@earthlink.net>
 * @version 1.0.0
 */
class Product implements \JsonSerializable {
	// use ValidateDate;

	/**
	 * id for this product; this is the primary key
	 * @var int $productId
	 */
	private $productId;
	/**
	 * the account id of the product (foreign key)
	 * @var string $productAccountId
	 */
	private $productAccountId;
	/**
	 * the image id of the product (foreign key)
	 * @var string $productImageId
	 */
	private $productImageId;
	/**
	 * the admin fee of the product
	 * @var string $productAdminFee
	 */
	private $productAdminFee;
	/**
	 * the description of the product
	 * @var string $productDescription
	 */
	private $productDescription;
	/**
	 * the price of the product
	 * @var string $productPrice
	 */
	private $productPrice;
	/**
	 * the shipping of the product
	 * @var string $productShipping
	 */
	private $productShipping;
	/**
	 * the sold status of the product
	 * @var string $productSold
	 */
	private $productSold;
	/**
	 * the title of the product
	 * @var string $productTitle
	 */
	private $productTitle;
	
	// private $account;
	// private $image;

	/**
	 * constructor for this product
	 *
	 * @param int|null $newProductId id of this product or null if a new product
	 * @param int $newProductAccountId id of account holder selling product
	 * @param int $newProductImageId id of image attached to product
	 * @param float $newProductAdminFee percent of sale listing fee
	 * @param string $newProductDescription string containing description of the product
	 * @param float $newProductPrice cost of product
	 * @param float $newProductShipping shipping cost of product
	 * @param int $newProductSold sold status of product
	 * @param string $newProductTitle title of product listing
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds (e.g. strings too long, negative integers)
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if some other exception occurs
	 */
	public function __construct(int $newProductId = null, int $newProductAccountId, int $newProductImageId, float $newProductAdminFee, string $newProductDescription, float $newProductPrice, float $newProductShipping, int $newProductSold, string $newProductTitle) {
		try {
			$this->setProductId($newProductId);
			$this->setProductAccountId($newProductAccountId);
			$this->setProductImageId($newProductImageId);
			$this->setProductAdminFee($newProductAdminFee);
			$this->setProductDescription($newProductDescription);
			$this->setProductPrice($newProductPrice);
			$this->setProductShipping($newProductShipping);
			$this->setProductSold($newProductSold);
			$this->setProductTitle($newProductTitle);
		} catch(\InvalidArgumentException $invalidArgument) {
			//rethrow the exception to the caller
			throw(new \InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
		} catch(\RangeException $range) {
			//rethrow the exception to the caller
			throw(new \RangeException($range->getMessage(), 0, $range));
		} catch(\TypeError $typeError) {
			//rethrow the exception to the caller
			throw(new \TypeError($typeError->getMessage(), 0, $typeError));
		} catch(\Exception $exception) {
			//rethrow the exception to the caller
			throw(new \Exception($exception->getMessage(), 0, $exception));
		}
	}

	/**
	 * accessor method for product id
	 *
	 * @return int|null value of product id
	 */

	public function getProductId() {
		return ($this->productId);
	}

	/**
	 * mutator method for product id
	 *
	 * @param int|null $newProductId new value of product id
	 * @throws \RangeException if $newProductId is not positive
	 * @throws \TypeError if $newProductId is not an integer
	 */
	public function setProductId(int $newProductId = null) {
		// base case: if the product id is null, this is a new product without a mySQL assigned id
		if($newProductId === null) {
			$this->productId = null;
			return;
		}

		// verify the product id is positive
		if($newProductId <= 0) {
			throw(new \RangeException("product id is not positive"));
		}

		// store the product id
		$this->productId = $newProductId;

	}

	/**
	 * accessor method for product account id
	 *
	 * @return int value of product account id
	 */

	public function getProductAccountId() {
		return ($this->productAccountId);
	}

	/**
	 * mutator method for product account id
	 *
	 * @param int|null $newProductAccountId new value of product account id
	 * @throws \RangeException if $newProductAccountId is not positive
	 * @throws \TypeError if $newProductAccountId is not an integer
	 */
	public function setProductAccountId(int $newProductAccountId) {
		// verify the productAccountId is positive
		if($newProductAccountId <= 0) {
			throw(new \RangeException("productAccountId is not positive"));
		}

		// convert and store the account id
		$this->productAccountId = $newProductAccountId;
	}

	/**
	 * accessor method for product image id
	 *
	 * @return int value of product image id
	 */

	public function getProductImageId() {
		return ($this->productImageId);
	}

	/**
	 * mutator method for product image id
	 *
	 * @param int|null $newProductImageId new value of product image id
	 * @throws \RangeException if $newProductImageId is not positive
	 * @throws \TypeError if $newProductImageId is not an integer
	 */
	public function setProductImageId(int $newProductImageId) {
		// verify the productAccountId is positive
		if($newProductImageId <= 0) {
			throw(new \RangeException("productImageId is not positive"));
		}

		// convert and store the image id
		$this->productImageId = $newProductImageId;
	}

	/**
	 * accessor method for product admin fee
	 *
	 * @return float value of product admin fee
	 */
	public function getProductAdminFee() {
		return ($this->productAdminFee);
	}

	/**
	 * mutator method for product admin fee
	 *
	 * @param float $newProductAdminFee new value of product admin fee
	 * @throws \RangeException if $newProductAdminFee is not positive
	 * @throws \RangeException if $newProductAdminFee is too high
	 * @throws \TypeError if $newProductAdminFee is not a decimal
	 */
	public function setProductAdminFee(float $newProductAdminFee) {
		// verify the productAdminFee is positive and not too high
		if($newProductAdminFee < 0.00) {
			throw(new \RangeException("productAdminFee is not positive"));
		}
		if($newProductAdminFee >= 1000.00) {
			throw(new \RangeException("productAdminFee is too high"));
		}

		// convert and store the product admin fee
		$this->productAdminFee = $newProductAdminFee;
	}

	/**
	 * accessor method for product description
	 *
	 * @return string value of product description
	 */
	public function getProductDescription() {
		return ($this->productDescription);
	}

	/**
	 * mutator method for product description
	 *
	 * @param string $newProductDescription new value of product description
	 * @throws \InvalidArgumentException if $newProductDescription is not a string or insecure
	 * @throws \RangeException if $newProductDescription is > 255 characters
	 * @throws \TypeError if $newProductDescription is not a string
	 */
	public function setProductDescription(string $newProductDescription) {
		// verify the product description is secure
		$newProductDescription = trim($newProductDescription);
		$newProductDescription = filter_var($newProductDescription, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newProductDescription) === true) {
			throw(new \InvalidArgumentException("product description is empty or insecure"));
		}

		// verify the product description will fit in the database
		if(strlen($newProductDescription) > 255) {
			throw(new \RangeException("product description is too long"));
		}

		// store the product description
		$this->productDescription = $newProductDescription;
	}

	/**
	 * accessor method for product price
	 *
	 * @return float value of product price
	 */
	public function getProductPrice() {
		return ($this->productPrice);
	}

	/**
	 * mutator method for product price
	 *
	 * @param float $newProductPrice new value of product price
	 * @throws \RangeException if $newProductPrice is not positive
	 * @throws \RangeException if $newProductPrice is too high
	 * @throws \TypeError if $newProductPrice is not a decimal
	 */
	public function setProductPrice(float $newProductPrice) {
		// verify the productPrice is positive and not too high
		if($newProductPrice < 0) {
			throw(new \RangeException("productPrice is not positive"));
		}
		if($newProductPrice >= 10000.00) {
			throw(new \RangeException("productPrice is too high"));
		}

		// convert and store the product price
		$this->productPrice = $newProductPrice;
	}

	/**
	 * accessor method for product shipping
	 *
	 * @return float value of product shipping
	 */
	public function getProductShipping() {
		return ($this->productShipping);
	}

	/**
	 * mutator method for product shippping
	 *
	 * @param float $newProductShipping new value of product shipping
	 * @throws \RangeException if $newProductShipping is not positive
	 * @throws \RangeException if $newProductShipping is too high
	 * @throws \TypeError if $newProductShipping is not a decimal
	 */
	public function setProductShipping(float $newProductShipping) {
		// verify the productShipping is positive and not too high
		if($newProductShipping < 0) {
			throw(new \RangeException("productShipping is not positive"));
		}
		if($newProductShipping >= 1000.00) {
			throw(new \RangeException("productShipping is too high"));
		}

		// convert and store the product shipping
		$this->productShipping = $newProductShipping;
	}

	/**
	 * accessor method for product sold
	 *
	 * @return int value of product sold
	 */
	public function getProductSold() {
		return ($this->productSold);
	}

	/**
	 * mutator method for product sold
	 *
	 * @param int $newProductSold new value of product sold
	 * @throws \RangeException if $newProductSold is not positive
	 * @throws \RangeException if $newProductSold is too high
	 * @throws \TypeError if $newProductSold is not an int
	 */
	public function setProductSold(int $newProductSold) {
		// verify the productSold is positive and not too high
		if($newProductSold < 0) {
			throw(new \RangeException("productSold is not positive"));
		}
		if($newProductSold > 1) {
			throw(new \RangeException("productSold is too high"));
		}

		// convert and store the product sold
		$this->productSold = $newProductSold;
	}

	/**
	 * accessor method for product title
	 *
	 * @return string value of product title
	 */
	public function getProductTitle() {
		return ($this->productTitle);
	}

	/**
	 * mutator method for product title
	 *
	 * @param string $newProductTitle new value of product title
	 * @throws \InvalidArgumentException if $newProductTitle is not a string or insecure
	 * @throws \RangeException if $newProductTitle is > 64 characters
	 * @throws \TypeError if $newProductTitle is not a string
	 */
	public function setProductTitle(string $newProductTitle) {
		// verify the product title is secure
		$newProductTitle = trim($newProductTitle);
		$newProductTitle = filter_var($newProductTitle, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newProductTitle) === true) {
			throw(new \InvalidArgumentException("product title is empty or insecure"));
		}

		// verify the product title will fit in the database
		if(strlen($newProductTitle) > 64) {
			throw(new \RangeException("product title is too long"));
		}

		// store the product title
		$this->productTitle = $newProductTitle;
	}

	/**
	 * inserts product information into mySQL
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 */
	public function insert(\PDO $pdo) {
		// enforce the productId is null (i.e., don't insert a product that already exists
		if($this->productId !== null) {
			throw(new \PDOException("not a new product"));
		}

		// create query template
		$query = "INSERT INTO product(productAccountId, productImageId, productAdminFee, productDescription, productPrice, productShipping, productSold, productTitle) VALUES(:productAccountId, :productImageId, :productAdminFee, :productDescription, :productPrice, :productShipping, :productSold, :productTitle)";
		$statement = $pdo->prepare($query);

		// bind the member variables to the place holders in the template
		$parameters = ["productAccountId" => $this->productAccountId, "productImageId" => $this->productImageId, "productAdminFee" => $this->productAdminFee, "productDescription" => $this->productDescription, "productPrice" => $this->productPrice, "productShipping" => $this->productShipping, "productSold" => $this->productSold, "productTitle" => $this->productTitle];
		$statement->execute($parameters);

		// update the null productId with what mySQL just gave us
		$this->productId = intval($pdo->lastInsertId());

	}

	/**
	 * deletes this product from mySQL
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 */
	public function delete(\PDO $pdo) {
		// enforce the productId is not null (don't delete a product that has just been inserted)
		if($this->productId === null) {
			throw(new \PDOException("unable to delete a product that does not exist"));
		}

		// create query template
		$query = "DELETE FROM product WHERE productId = :productId";
		$statement = $pdo->prepare($query);

		// bind the member variables to the place holder in the template
		$parameters = ["productId" => $this->productId];
		$statement->execute($parameters);
	}

	/**
	 * updates the product data in mySQL
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 */
	public function update(\PDO $pdo) {
		// enforce the productId is not null (don't update the product data that hasn't been inserted yet
		if($this->productId === null) {
			throw(new \PDOException("unable to update the product data that doesn't exist"));
		}

		// create query template
		$query = "UPDATE product SET productAccountId = :productAccountId, productImageId = :productImageId, productAdminFee = :productAdminFee, productDescription = :productDescription, productPrice = :productPrice, productShipping = :productShipping, productSold = :productSold, productTitle = :productTitle WHERE productId = :productId";
		$statement = $pdo->prepare($query);

		// bind the member variables to the place holders in the template
		$parameters = ["productAccountId" => $this->productAccountId, "productImageId" => $this->productImageId, "productAdminFee" => $this->productAdminFee, "productDescription" => $this->productDescription, "productPrice" => $this->productPrice, "productShipping" => $this->productShipping, "productSold" => $this->productSold, "productTitle" => $this->productTitle, "productId" => $this->productId];
		$statement->execute($parameters);
	}

	/**
	 * get the product by productId
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param int $productId product id to search for
	 * @return Product|null product found or null if not found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 */
	public static function getProductByProductId(\PDO $pdo, int $productId) {
		// sanitize the productId before searching
		if($productId <= 0) {
			throw(new \PDOException("product id is not positive"));
		}

		// create query template
		$query = "SELECT productId, productAccountId, productImageId, productAdminFee, productDescription, productPrice, productShipping, productSold, productTitle FROM product WHERE productId = :productId";
		$statement = $pdo->prepare($query);

		// bind the product id to the place holder in the template
		$parameters = array("productId" => $productId);
		$statement->execute($parameters);

		// grab the product from mySQL
		try {
			$product = null;
			$statement->setFetchMode(\PDO::FETCH_ASSOC);
			$row = $statement->fetch();
			if($row !== false) {
				$product = new Product($row["productId"], $row["productAccountId"], $row["productImageId"], $row["productAdminFee"], $row["productDescription"], $row["productPrice"], $row["productShipping"], $row["productSold"], $row["productTitle"]);
			}
		} catch(\Exception $exception) {
			// if the row couldn't be converted, rethrow it
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
		return ($product);
	}

	/**
	 * get the product by productAccountId
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param int $productAccountId product accountid to search for
	 * @return \SplFixedArray SplFixedArray of product found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 */
	public static function getProductByProductAccountId(\PDO $pdo, int $productAccountId) {
		// sanitize the productAccountId before searching
		if($productAccountId <= 0) {
			throw(new \PDOException("product accountid is not positive"));
		}

		// create query template
		$query = "SELECT productId, productAccountId, productImageId, productAdminFee, productDescription, productPrice, productShipping, productSold, productTitle FROM product WHERE productAccountId = :productAccountId";
		$statement = $pdo->prepare($query);

		// bind the product accountId to the place holder in the template
		$parameters = array("productAccountId" => $productAccountId);
		$statement->execute($parameters);

		// build an array of products
		$products = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false) {
			try {
				$product = new Product($row["productId"], $row["productAccountId"], $row["productImageId"], $row["productAdminFee"], $row["productDescription"], $row["productPrice"], $row["productShipping"], $row["productSold"], $row["productTitle"]);
				$products[$products->key()] = $product;
				$products->next();
			}
			catch
			(\Exception $exception) {
				// if the row couldn't be converted, rethrow it
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return ($products);
	}

	/**
	 * get the product by productImageId
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param int $productImageId product imageid to search for
	 * @return \SplFixedArray SplFixedArray of product found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 */
	public static function getProductByProductImageId(\PDO $pdo, int $productImageId) {
		// sanitize the productImageId before searching
		if($productImageId <= 0) {
			throw(new \PDOException("product imageid is not positive"));
		}

		// create query template
		$query = "SELECT productId, productAccountId, productImageId, productAdminFee, productDescription, productPrice, productShipping, productSold, productTitle FROM product WHERE productImageId = :productImageId";
		$statement = $pdo->prepare($query);

		// bind the product imageid to the place holder in the template
		$parameters = array("productImageId" => $productImageId);
		$statement->execute($parameters);

		// build an array of products
		$products = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false) {
			try {
				$product = new Product($row["productId"], $row["productAccountId"], $row["productImageId"], $row["productAdminFee"], $row["productDescription"], $row["productPrice"], $row["productShipping"], $row["productSold"], $row["productTitle"]);
				$products[$products->key()] = $product;
				$products->next();
			}
			catch
			(\Exception $exception) {
				// if the row couldn't be converted, rethrow it
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return ($products);
	}

	/**
	 * get the product by productAdminFee
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param float $productAdminFee product admin fee to search for
	 * @return \SplFixedArray SplFixedArray of product found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 */
	public static function getProductByProductAdminFee(\PDO $pdo, float $productAdminFee) {
		// sanitize the productAdminFee before searching
		if($productAdminFee < 0.00) {
			throw(new \PDOException("product admin fee is not positive"));
		}
		if($productAdminFee >= 1000.00) {
			throw(new \PDOException("product admin fee is too high"));
		}

		// create query template
		$query = "SELECT productId, productAccountId, productImageId, productAdminFee, productDescription, productPrice, productShipping, productSold, productTitle FROM product WHERE productAdminFee = :productAdminFee";
		$statement = $pdo->prepare($query);

		// bind the product admin fee to the place holder in the template
		$parameters = array("productAdminFee" => $productAdminFee);
		$statement->execute($parameters);

		// build an array of products
		$products = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false) {
			try {
				$product = new Product($row["productId"], $row["productAccountId"], $row["productImageId"], $row["productAdminFee"], $row["productDescription"], $row["productPrice"], $row["productShipping"], $row["productSold"], $row["productTitle"]);
				$products[$products->key()] = $product;
				$products->next();
			}
			catch
			(\Exception $exception) {
				// if the row couldn't be converted, rethrow it
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return ($products);
	}

	/**
 * get the product by productPrice
 *
 * @param \PDO $pdo PDO connection object
 * @param float $productPrice product price to search for
 * @return \SplFixedArray SplFixedArray of product found
 * @throws \PDOException when mySQL related errors occur
 * @throws \TypeError when variables are not the correct data type
 */
	public static function getProductByProductPrice(\PDO $pdo, float $productPrice) {
		// sanitize the productPrice before searching
		if($productPrice < 0) {
			throw(new \PDOException("product price is not positive"));
		}
		if($productPrice >= 100000) {
			throw(new \PDOException("product price is too high"));
		}

		// create query template
		$query = "SELECT productId, productAccountId, productImageId, productAdminFee, productDescription, productPrice, productShipping, productSold, productTitle FROM product WHERE productPrice = :productPrice";
		$statement = $pdo->prepare($query);

		// bind the product admin fee to the place holder in the template
		$parameters = array("productPrice" => $productPrice);
		$statement->execute($parameters);

		// build an array of products
		$products = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false) {
			try {
				$product = new Product($row["productId"], $row["productAccountId"], $row["productImageId"], $row["productAdminFee"], $row["productDescription"], $row["productPrice"], $row["productShipping"], $row["productSold"], $row["productTitle"]);
				$products[$products->key()] = $product;
				$products->next();
			}
			catch
			(\Exception $exception) {
				// if the row couldn't be converted, rethrow it
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return ($products);
	}

	/**
	 * get the product by productShipping
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param float $productShipping product shipping to search for
	 * @return \SplFixedArray SplFixedArray of product found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 */
	public static function getProductByProductShipping(\PDO $pdo, float $productShipping) {
		// sanitize the productShipping before searching
		if($productShipping < 0) {
			throw(new \PDOException("product shipping is not positive"));
		}
		if($productShipping >= 1000) {
			throw(new \PDOException("product shipping is too high"));
		}

		// create query template
		$query = "SELECT productId, productAccountId, productImageId, productAdminFee, productDescription, productPrice, productShipping, productSold, productTitle FROM product WHERE productShipping = :productShipping";
		$statement = $pdo->prepare($query);

		// bind the product admin fee to the place holder in the template
		$parameters = array("productShipping" => $productShipping);
		$statement->execute($parameters);

		// build an array of products
		$products = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false) {
			try {
				$product = new Product($row["productId"], $row["productAccountId"], $row["productImageId"], $row["productAdminFee"], $row["productDescription"], $row["productPrice"], $row["productShipping"], $row["productSold"], $row["productTitle"]);
				$products[$products->key()] = $product;
				$products->next();
			}
			catch
			(\Exception $exception) {
				// if the row couldn't be converted, rethrow it
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return ($products);
	}

	/**
	 * get the product by productSold
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param float $productSold product sold to search for
	 * @return \SplFixedArray SplFixedArray of product found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 */
	public static function getProductByProductSold(\PDO $pdo, float $productSold) {
		// sanitize the productSold before searching
		if($productSold < 0) {
			throw(new \PDOException("product sold is not positive"));
		}
		if($productSold > 1) {
			throw(new \PDOException("product sold is too high"));
		}

		// create query template
		$query = "SELECT productId, productAccountId, productImageId, productAdminFee, productDescription, productPrice, productShipping, productSold, productTitle FROM product WHERE productSold = :productSold";
		$statement = $pdo->prepare($query);

		// bind the product admin fee to the place holder in the template
		$parameters = array("productSold" => $productSold);
		$statement->execute($parameters);

		// build an array of products
		$products = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false) {
			try {
				$product = new Product($row["productId"], $row["productAccountId"], $row["productImageId"], $row["productAdminFee"], $row["productDescription"], $row["productPrice"], $row["productShipping"], $row["productSold"], $row["productTitle"]);
				$products[$products->key()] = $product;
				$products->next();
			}
			catch
			(\Exception $exception) {
				// if the row couldn't be converted, rethrow it
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return ($products);
	}

	/**
 * get the product by description
 *
 * @param \PDO $pdo PDO connection object
 * @param string $productDescription product description to search for
 * @return \SplFixedArray SplFixedArray of product found
 * @throws \PDOException when mySQL related errors occur
 * @throws \TypeError when variables are not the correct data type
 **/
	public static function getProductByProductDescription(\PDO $pdo, string $productDescription) {
		// sanitize the description before searching
		$productDescription = trim($productDescription);
		$productDescription = filter_var($productDescription, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($productDescription) === true) {
			throw(new \PDOException("product description is invalid"));
		}

		// create query template
		$query = "SELECT productId, productAccountId, productImageId, productAdminFee, productDescription, productPrice, productShipping, productSold, productTitle FROM product WHERE productDescription LIKE :productDescription";
		$statement = $pdo->prepare($query);

		// bind the product description to the place holder in the template
		$productDescription = "%$productDescription%";
		$parameters = array("productDescription" => $productDescription);
		$statement->execute($parameters);

		// build an array of products
		$products = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false) {
			try {
				$product = new Product($row["productId"], $row["productAccountId"], $row["productImageId"], $row["productAdminFee"], $row["productDescription"], $row["productPrice"], $row["productShipping"], $row["productSold"], $row["productTitle"]);
				$products[$products->key()] = $product;
				$products->next();
			} catch(\Exception $exception) {
				// if the row couldn't be converted, rethrow it
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return($products);
	}

	/**
	 * get the product by title
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param string $productTitle product title to search for
	 * @return \SplFixedArray SplFixedArray of product found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 **/
	public static function getProductByProductTitle(\PDO $pdo, string $productTitle) {
		// sanitize the title before searching
		$productTitle = trim($productTitle);
		$productTitle = filter_var($productTitle, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($productTitle) === true) {
			throw(new \PDOException("product title is invalid"));
		}

		// create query template
		$query = "SELECT productId, productAccountId, productImageId, productAdminFee, productDescription, productPrice, productShipping, productSold, productTitle FROM product WHERE productTitle LIKE :productTitle";
		$statement = $pdo->prepare($query);

		// bind the product title to the place holder in the template
		$productTitle = "%$productTitle%";
		$parameters = array("productTitle" => $productTitle);
		$statement->execute($parameters);

		// build an array of products
		$products = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false) {
			try {
				$product = new Product($row["productId"], $row["productAccountId"], $row["productImageId"], $row["productAdminFee"], $row["productDescription"], $row["productPrice"], $row["productShipping"], $row["productSold"], $row["productTitle"]);
				$products[$products->key()] = $product;
				$products->next();
			} catch(\Exception $exception) {
				// if the row couldn't be converted, rethrow it
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return($products);
	}

	/**
	 * gets all Product
	 *
	 * @param \PDO $pdo PDO connection object
	 * @return \SplFixedArray SplFixedArray of Products found or null if not found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 **/
	public static function getAllProducts(\PDO $pdo) {
		// create query template
		$query = "SELECT productId, productAccountId, productImageId, productAdminFee, productDescription, productPrice, productShipping, productSold, productTitle FROM product";
		$statement = $pdo->prepare($query);
		$statement->execute();

		// build an array of products
		$products = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false) {
			try {
				$product = new Product($row["productId"], $row["productAccountId"], $row["productImageId"], $row["productAdminFee"], $row["productDescription"], $row["productPrice"], $row["productShipping"], $row["productSold"], $row["productTitle"]);
				$products[$products->key()] = $product;
				$products->next();
			} catch(\Exception $exception) {
				// if the row couldn't be converted, rethrow it
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return ($products);
	}

	
	
	/**
	 * formats the state variables for JSON serialization
	 *
	 * @return array resulting state variables to serialize
	 */
	public function jsonSerialize() {
		$fields = get_object_vars($this);
		return ($fields);
	}
}
?>