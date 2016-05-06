<?php
namespace Edu\Cnm\CartridgeCoders;

/**
 * class for Account
 * @author Donald DeLeeuw <donald.deleeuw> based on code by Dylan McDonald <dmcdonad21@cnm.edu>
 */

class Account implements \JsonSerializable {

	/**
	 * id for account, this is the primary key
	 * @var int $accountId
	 */
	private $accountId;

	/**
	 * id for image id, this is a foreign key
	 * @var int $accountImageId
	 */
	private $accountImageId;

	/**
	 * id for account active
	 * @var int $accountActive
	 */
	private $accountActive;

	/** id for account admin
	 * @var int $accountAdmin
	 */
	private $accountAdmin;

	/**
	 * id for account name
	 * @var string $accountName
	 */
	private $accountName;

	/**
	 * id for PP email
	 * @var string $accountPpEmail
	 */
	private $accountPpEmail;

	/**
	 * id for user name
	 * @var string $accountUserName
	 */
	private $accountUserName;

	/**
	 * constructor for Account class
	 * @param int|null $newAccountId - id of account or null if new account - primary key
	 * @param int|null $newAccountImageId - id of image - this is a foreign key
	 * @param int|null $newAccountActive - flag for account active
	 * @param int|null $newAccountAdmin - flag for account admin
	 * @param string $newAccountName - user's name
	 * @param string $newAccountPpEmail - user's paypal email address
	 * @param string $newAccountUserName - user's chosen user name
	 * @throws \InvalidArgumentException - if data types are not valid
	 * @throws \RangeException - if values are out of range (strings too long, negative numbers, etc.)
	 * @throws \TypeError - if data types violate type hints
	 * @throws \Exception - catch all if another error occurs
	 */
	public function __construct(int $newAccountId = null, int $newAccountImageId = null, int $newAccountActive = null, int $newAccountAdmin = null, string $newAccountName, string $newAccountPpEmail, string $newAccountUserName) {
		try {
			$this->setAccountId($newAccountId);
			$this->setAccountImageId($newAccountImageId);
			$this->setAccountActive($newAccountActive);
			$this->setAccountAdmin($newAccountAdmin);
			$this->setAccountName($newAccountName);
			$this->setAccountPpEmail($newAccountPpEmail);
			$this->setAccountUserName($newAccountUserName);
		} catch(\InvalidArgumentException $invalidArgument) {
			// rethrow the exception to the caller
			throw(new \InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
		} catch(\RangeException $range) {
			// rethrow the exception to the caller
			throw (new \RangeException($range->getMessage(), 0, $range));
		} catch(\TypeError $typeError) {
			// rethrow the exception to the caller
			throw(new \TypeError($typeError->getMessage(), 0, $typeError));
		} catch(\Exception $exception) {
			// rethrow the exception to the caller
			throw(new \Exception($exception->getMessage(), 0, $exception));
		}
	}

	/**
	 * accessor method for account id
	 * @return int|null value of account id
	 */
	public function getAccountId(){
		return ($this->accountId);
	}

	/**
	 * mutator mothod 
	 */







}
