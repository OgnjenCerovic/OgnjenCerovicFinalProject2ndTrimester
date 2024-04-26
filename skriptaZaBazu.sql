/*
SQLyog Community v13.2.1 (64 bit)
MySQL - 8.0.30 : Database - pizzeria
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pizzeria` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `pizzeria`;

/*Table structure for table `order` */

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `OrderID` int unsigned NOT NULL AUTO_INCREMENT,
  `OrderDate` datetime NOT NULL,
  `Note` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `Address` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `UserID` int unsigned NOT NULL,
  PRIMARY KEY (`OrderID`),
  KEY `FK_ORDER_USER` (`UserID`),
  CONSTRAINT `FK_ORDER_USER` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

/*Data for the table `order` */

/*Table structure for table `orderitem` */

DROP TABLE IF EXISTS `orderitem`;

CREATE TABLE `orderitem` (
  `OrderID` int unsigned NOT NULL,
  `ItemNumber` int unsigned NOT NULL,
  `Quantity` int NOT NULL,
  `ItemPrice` double(10,2) unsigned NOT NULL,
  `PizzaID` int unsigned NOT NULL,
  PRIMARY KEY (`OrderID`,`ItemNumber`),
  KEY `FK_ORDERITEM_PIZZA` (`PizzaID`),
  CONSTRAINT `FK_ORDER_ORDERITEM` FOREIGN KEY (`OrderID`) REFERENCES `order` (`OrderID`),
  CONSTRAINT `FK_ORDERITEM_PIZZA` FOREIGN KEY (`PizzaID`) REFERENCES `pizza` (`PizzaID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

/*Data for the table `orderitem` */

/*Table structure for table `pizza` */

DROP TABLE IF EXISTS `pizza`;

CREATE TABLE `pizza` (
  `PizzaID` int unsigned NOT NULL AUTO_INCREMENT,
  `PizzaName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Description` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Price` decimal(10,2) unsigned NOT NULL,
  `Picture` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`PizzaID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

/*Data for the table `pizza` */

insert  into `pizza`(`PizzaID`,`PizzaName`,`Description`,`Price`,`Picture`) values 
(1,'Margharita','A classic Italian pizza made with a simple yet delicious topping of tomato sauce, mozzarella cheese, fresh basil, and a drizzle of olive oil. It\'s celebrated for its fresh, light flavors.',4.99,'../assets/images/Pizzamain2.png'),
(2,'Saporita','This pizza is known for its flavorful combination of toppings which often includes spicy salami, mozzarella cheese, and sometimes other ingredients like olives and onions, all on a tomato base.',7.99,'../assets/images/MenuPizz3.gif'),
(3,'Tarantella','Named after the traditional Italian folk dance, this pizza usually features a lively mix of spicy ingredients like hot peppers and pepperoni, paired with tomato sauce and mozzarella cheese.',10.00,'../assets/images/MenuPizza1.gif'),
(4,'Pepperoni','A popular American-style pizza topped with slices of pepperoni sausage, mozzarella cheese, and a robust tomato sauce. It\'s loved for its spicy and tangy flavor profile.',5.99,'../assets/images/MenuPizza4.gif'),
(5,'Diablo','Aptly named for its heat, this \"devilish\" pizza typically comes loaded with hot spices and ingredients like jalapeños, spicy sausage, and sometimes chili oil on top of the usual tomato and cheese base.',6.99,'../assets/images/MenuPizza5.gif'),
(6,'Fortezza','This hearty pizza is often topped with a robust combination of strong flavors such as gorgonzola cheese, sausage, and sometimes roasted vegetables, making it both rich and satisfying.',7.99,'../assets/images/MenuPizza6.gif'),
(7,'Vincent','A gourmet pizza that might feature unique combinations such as blue cheese, walnuts, and pears, or another creative mix that deviates from traditional pizza toppings.',10.00,'../assets/images/Pizzamain1.png'),
(8,'Buffalina','A variant of the classic Margherita, this pizza uses buffalo mozzarella for a richer and creamier taste, often complemented by fresh basil and an exquisite tomato sauce.',8.99,'../assets/images/Pizzamain3.png');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `UserID` int unsigned NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `Password` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `FullName` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

/*Data for the table `user` */

insert  into `user`(`UserID`,`Username`,`Password`,`FullName`) values 
(1,'cikaceki','cikaceki','Ognjen Cerovic'),
(2,'lumi','lumi','Luka Kovacevic');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
