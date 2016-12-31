
CREATE TABLE `mail`.`city` ( `ID` INT(11) NOT NULL AUTO_INCREMENT ,
`Name` CHAR(35) NOT NULL , `CountryCode` CHAR(3) NOT NULL ,
`District` CHAR(20) NOT NULL , `Population` INT(11) NOT NULL ,
PRIMARY KEY (`ID`)) ENGINE = MyISAM;



-- ORDER BY:  `ID`

INSERT INTO `City` VALUES (1,'Kabul','AFG','Kabol',1780000);
INSERT INTO `City` VALUES (2,'Qandahar','AFG','Qandahar',237500);
INSERT INTO `City` VALUES (3,'Herat','AFG','Herat',186800);
INSERT INTO `City` VALUES (4,'Mazar-e-Sharif','AFG','Balkh',127800);
INSERT INTO `City` VALUES (5,'Amsterdam','NLD','Noord-Holland',731200);
INSERT INTO `City` VALUES (6,'Rotterdam','NLD','Zuid-Holland',593321);
INSERT INTO `City` VALUES (7,'Haag','NLD','Zuid-Holland',440900);
INSERT INTO `City` VALUES (8,'Utrecht','NLD','Utrecht',234323);
INSERT INTO `City` VALUES (9,'Eindhoven','NLD','Noord-Brabant',201843);
INSERT INTO `City` VALUES (10,'Tilburg','NLD','Noord-Brabant',193238);
INSERT INTO `City` VALUES (11,'Groningen','NLD','Groningen',172701);
INSERT INTO `City` VALUES (12,'Breda','NLD','Noord-Brabant',160398);
INSERT INTO `City` VALUES (13,'Apeldoorn','NLD','Gelderland',153491);
INSERT INTO `City` VALUES (14,'Nijmegen','NLD','Gelderland',152463);
INSERT INTO `City` VALUES (15,'Enschede','NLD','Overijssel',149544);
INSERT INTO `City` VALUES (16,'Haarlem','NLD','Noord-Holland',148772);
INSERT INTO `City` VALUES (17,'Almere','NLD','Flevoland',142465);
INSERT INTO `City` VALUES (18,'Arnhem','NLD','Gelderland',138020);
INSERT INTO `City` VALUES (19,'Zaanstad','NLD','Noord-Holland',135621);
INSERT INTO `City` VALUES (20,'´s-Hertogenbosch','NLD','Noord-Brabant',129170);
INSERT INTO `City` VALUES (21,'Amersfoort','NLD','Utrecht',126270);
INSERT INTO `City` VALUES (22,'Maastricht','NLD','Limburg',122087);
INSERT INTO `City` VALUES (23,'Dordrecht','NLD','Zuid-Holland',119811);
INSERT INTO `City` VALUES (24,'Leiden','NLD','Zuid-Holland',117196);
INSERT INTO `City` VALUES (25,'Haarlemmermeer','NLD','Noord-Holland',110722);
INSERT INTO `City` VALUES (26,'Zoetermeer','NLD','Zuid-Holland',110214);
INSERT INTO `City` VALUES (27,'Emmen','NLD','Drenthe',105853);
INSERT INTO `City` VALUES (28,'Zwolle','NLD','Overijssel',105819);
INSERT INTO `City` VALUES (29,'Ede','NLD','Gelderland',101574);
INSERT INTO `City` VALUES (30,'Delft','NLD','Zuid-Holland',95268);
INSERT INTO `City` VALUES (31,'Heerlen','NLD','Limburg',95052);
INSERT INTO `City` VALUES (32,'Alkmaar','NLD','Noord-Holland',92713);
INSERT INTO `City` VALUES (33,'Willemstad','ANT','Curaçao',2345);
INSERT INTO `City` VALUES (34,'Tirana','ALB','Tirana',270000);
INSERT INTO `City` VALUES (35,'Alger','DZA','Alger',2168000);
