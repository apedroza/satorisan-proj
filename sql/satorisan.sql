DROP TABLE IF EXISTS 'cart';
DROP TABLE IF EXISTS shoe;
DROP TABLE IF EXISTS customer;

CREATE TABLE customer (
-- This creates the attribute for the primary key
-- auto_increment tells mySQL to number them {1,2,3, ...}
-- not nullmeans the attribute is required!
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileEmail VARCHAR(128) NOT NULL,
	profileGender CHAR(1),
	-- to make something optional, exclude the not null
	profilePhone VARCHAR(32),
	profileAddress VARCHAR(120) NOT NULL,
	-- to make sure duplicate data cannot exist, create a unique index
	 UNIQUE(profileId),
	 UNIQUE(profileEmail),
	 -- this officiates the primary key for the entity
	PRIMARY KEY(profileId)
);

CREATE TABLE shoe (
	-- this is for yet another primary key...
	shoeId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	-- this is for another foreign key; auto_increment is ommited by design
	shoeProfileId INT UNSIGNED NOT NULL,
	shoeColor VARCHAR(32),
	shoeSize VARCHAR(3),
	shoePrice DECIMAL(6,2) NOT NULL,
	-- this creates an index before making a foreign key
	INDEX(shoeProfileId),
	-- this creates the actual foreign key relation
	FOREIGN KEY(shoeProfileId) REFERENCES customer(profileId),
	-- and finally create the primary key
	PRIMARY KEY(shoeId)

);

-- create the like entity (a weak entity from an m-to-n for profile - -> shoe)
CREATE TABLE 'cart'(
	-- these are not auto_increment because they're still foreign keys
	cartProfileId INT UNSIGNED NOT NULL,
	cartShoeId INT UNSIGNED NOT NULL,
	totalPrice DECIMAL (6,2) NOT NULL,
	orderId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	-- index the foreign keys
	INDEX(cartProfileId),
	INDEX(cartShoeId),
	-- create the foreign key relations
	FOREIGN KEY(cartProfileId) REFERENCES customer(profileId),
	FOREIGN KEY(cartShoeId) REFERENCES shoe(shoeId),
	-- finally create a composite foreign key with the two forign keys
	PRIMARY KEY(cartProfileId, cartShoeId)

);
