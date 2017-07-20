-- this is a comment in SQL (yes, the space is needed!)
-- these statements will drop the tables and re-add them
-- this is akin to reformatting and reinstalling Windows (OS X never needs a reinstall...) ;)
-- never ever ever ever ever ever ever ever ever ever ever ever ever ever ever ever ever ever ever ever
-- do this on live data!!!!
DROP TABLE IF EXISTS `website`;
DROP TABLE IF EXISTS user;

-- the CREATE TABLE function is a function that takes tons of arguments to layout the table's schema
CREATE TABLE user (
	-- this creates the attribute for the primary key
	-- auto_increment tells mySQL to number them {1, 2, 3, ...}
	-- not null means the attribute is required!
	userId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	userActivationToken CHAR(32),
	userAtHandle VARCHAR(32) NOT NULL,
	-- to make sure duplicate data cannot exist, create a unique index
	userEmail VARCHAR(128) NOT NULL,
	userHash	CHAR(128) NOT NULL,
	-- to make something optional, exclude the not null
	userPhone VARCHAR(32),
	userSalt CHAR(64) NOT NULL,
	UNIQUE(profileEmail),
	UNIQUE(profileAtHandle),
	-- this officiates the primary key for the entity
	PRIMARY KEY(profileId)
);

-- create the tweet entity
CREATE TABLE item (
	-- this is for yet another primary key...
	websiteId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	-- this is for a foreign key; auto_incremented is omitted by design
	websiteProfileId INT UNSIGNED NOT NULL,
	websiteContent VARCHAR(140) NOT NULL,
	websiteSignin DATETIME(6) NOT NULL,
	-- this creates an index before making a foreign key
	INDEX (websiteProfileId),
	-- this creates the actual foreign key relation
	FOREIGN KEY(websiteId) REFERENCES seller(profileId),
	-- and finally create the primary key
	PRIMARY KEY(itemProfileId)
);

-- c