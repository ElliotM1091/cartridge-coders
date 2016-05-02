DROP TABLE IF EXISTS productPurchase;
DROP TABLE IF EXISTS productCategory;
DROP TABLE IF EXISTS message;
DROP TABLE IF EXISTS feedback;
DROP TABLE IF EXISTS product;
DROP TABLE IF EXISTS purchase;
DROP TABLE IF EXISTS account;
DROP TABLE IF EXISTS image;
DROP TABLE IF EXISTS category;

CREATE TABLE category (
	categoryId      		INT UNSIGNED AUTO_INCREMENT NOT NULL,
	categoryName  			VARCHAR(50) NOT NULL,
	PRIMARY KEY (categoryId)
);

CREATE TABLE image (
	imageId     			INT UNSIGNED AUTO_INCREMENT NOT NULL,
	imageFileName  		VARCHAR(128) NOT NULL,
	imageType				VARCHAR(10) NOT NULL,
	UNIQUE (imageFileName),
	PRIMARY KEY (imageId)
);

CREATE TABLE account (
	accountId      		INT UNSIGNED AUTO_INCREMENT NOT NULL,
	accountImageId  		INT UNSIGNED,
	accountAdmin 			BOOLEAN DEFAULT 0,
	accountName 			VARCHAR(50) NOT NULL,
	accountPpEmail    	VARCHAR(75) NOT NULL,
	accountUserName   	VARCHAR(25) NOT NULL,
	UNIQUE (accountUserName),
	UNIQUE (accountPpEmail),
	INDEX (accountImageId),
	FOREIGN KEY (accountImageId) REFERENCES image(imageId),
	PRIMARY KEY (accountId)
);

CREATE TABLE purchase (
	purchaseId     					INT UNSIGNED AUTO_INCREMENT NOT NULL,
	purchaseBuyerId  					INT UNSIGNED NOT NULL,
	purchasePayPalTransactionId	INT UNSIGNED NOT NULL,
	purchaseCreateDate 				DATETIME NOT NULL,
	INDEX (purchaseBuyerId),
	FOREIGN KEY (purchaseBuyerId) REFERENCES account(accountId),
	PRIMARY KEY (purchaseId)
);

CREATE TABLE product (
	productId      		INT UNSIGNED AUTO_INCREMENT NOT NULL,
	productAccountId  	INT UNSIGNED NOT NULL,
	productImageId 		INT UNSIGNED,
	productAdminFee 		DECIMAL UNSIGNED NOT NULL,
	productDescription   VARCHAR(255) NOT NULL,
	productPrice			DECIMAL UNSIGNED NOT NULL,
	productShipping   	DECIMAL UNSIGNED NOT NULL,
	productSold				BOOLEAN DEFAULT 0,
	productTitle			VARCHAR(50) NOT NULL,
	INDEX (productAccountId),
	INDEX (productImageId),
	FOREIGN KEY (productAccountId) REFERENCES account(accountId),
	FOREIGN KEY (productImageId) REFERENCES image(imageId),
	PRIMARY KEY (productId)
);

CREATE TABLE feedback (
	feedbackId      		INT UNSIGNED AUTO_INCREMENT NOT NULL,
	feedbackBuyerId  		INT UNSIGNED NOT NULL,
	feedbackProductId 	INT UNSIGNED NOT NULL,
	feedbackSellerId   	INT UNSIGNED NOT NULL,
	feedbackContent		VARCHAR(255) NOT NULL,
	feedbackRating 		TINYINT UNSIGNED NOT NULL,
	INDEX (feedbackBuyerId),
	INDEX (feedbackProductId),
	INDEX (feedbackSellerId),
	FOREIGN KEY (feedbackBuyerId) REFERENCES account(accountId),
	FOREIGN KEY (feedbackProductId) REFERENCES product(productId),
	FOREIGN KEY (feedbackSellerId) REFERENCES account(accountId),
	PRIMARY KEY (feedbackId)
);

CREATE TABLE message (
	messageId      		INT UNSIGNED AUTO_INCREMENT NOT NULL,
	messageBuyerId  		INT UNSIGNED NOT NULL,
	messageProductId 		INT UNSIGNED NOT NULL,
	messageSellerId   	INT UNSIGNED NOT NULL,
	messageContent			VARCHAR(255) NOT NULL,
	messageMailGunId 		INT UNSIGNED NOT NULL,
	messageSubject   		VARCHAR(50) NOT NULL,
	INDEX (messageBuyerId),
	INDEX (messageProductId),
	INDEX (messageSellerId),
	FOREIGN KEY (messageBuyerId) REFERENCES account(accountId),
	FOREIGN KEY (messageProductId) REFERENCES product(productId),
	FOREIGN KEY (messageSellerId) REFERENCES account(accountId),
	PRIMARY KEY (messageId)
);

CREATE TABLE productCategory (
	productCategoryCategoryId     INT UNSIGNED NOT NULL,
	productCategoryProductId  		INT UNSIGNED NOT NULL,
	INDEX (productCategoryCategoryId),
	INDEX (productCategoryProductId),
	FOREIGN KEY (productCategoryCategoryId) REFERENCES category(categoryId),
	FOREIGN KEY (productCategoryProductId) REFERENCES product(productId),
	PRIMARY KEY (productCategoryProductId, productCategoryCategoryId)
);

CREATE TABLE productPurchase (
	productPurchaseProductId     	INT UNSIGNED NOT NULL,
	productPurchasePurchaseId  	INT UNSIGNED NOT NULL,
	INDEX (productPurchaseProductId),
	INDEX (productPurchasePurchaseId),
	FOREIGN KEY (productPurchaseProductId) REFERENCES product(productId),
	FOREIGN KEY (productPurchasePurchaseId) REFERENCES purchase(purchaseId),
	PRIMARY KEY (productPurchasePurchaseId, productPurchaseProductId)
);


