CREATE DATABASE  IF NOT EXISTS `GYM-Member-Relationship` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `GYM-Member-Relationship`;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `boats`
--
/*
DROP TABLE IF EXISTS `gym`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
/*
CREATE TABLE `gym` (
  `bid` int(10) NOT NULL AUTO_INCREMENT,
  `bname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'white',
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boats`
--

/*DROP TABLE IF EXISTS `Members`; */

CREATE TABLE IF NOT EXISTS login_data(
username varchar(40),
password varchar(40),
user_id INT PRIMARY KEY AUTO_INCREMENT
);


CREATE TABLE IF NOT EXISTS  Members(
name varchar(40),
age INT,
membership_id INT PRIMARY KEY AUTO_INCREMENT,
phone_number CHAR(20),
until DATE,
price INT);

DROP TABLE `GYM`;

CREATE TABLE IF NOT EXISTS GYM(
rating INT,
gym_name CHAR(30),
gym_id INT PRIMARY KEY AUTO_INCREMENT,
gym_address CHAR(50),
availability CHAR(40),
capacity INTEGER
);

DROP TABLE IF EXISTS `joined`;

CREATE TABLE IF NOT EXISTS joined(
gym_id INT,
membership_id INT,
since DATE,
FOREIGN KEY (membership_id) REFERENCES Members(membership_id),
FOREIGN KEY (gym_id) REFERENCES GYM(gym_id),
PRIMARY KEY (membership_id, gym_id)
);


DROP TABLE IF EXISTS `premium_members`;

CREATE TABLE premium_members (
premium_id INT,
name CHAR(40),
age INT,
PRIMARY KEY (premium_id),
phone_number CHAR(20),
price INT,
until DATE,
pool_use BOOLEAN,
personal_trainer CHAR(40),
FOREIGN KEY (premium_id)
    REFERENCES Members (membership_id)
    ON DELETE CASCADE ON UPDATE CASCADE
);

DROP TABLE IF EXISTS `standard_members`;

CREATE TABLE standard_members (
standard_id INT,
name CHAR(40),
age INT,
until DATE,
PRIMARY KEY (standard_id),
phone_number CHAR(20),
price INT,
time_limit INT,
FOREIGN KEY (standard_id)
    REFERENCES Members (membership_id)
    ON DELETE CASCADE ON UPDATE CASCADE
  );

DROP TABLE IF EXISTS `provides`;

CREATE TABLE provides (
gym_id INT,
membership_id INT,
health_care BOOLEAN,
gym_plan BOOLEAN,
dietitian BOOLEAN,
FOREIGN KEY (membership_id) REFERENCES Members(membership_id),
FOREIGN KEY (gym_id) REFERENCES GYM(gym_id),
PRIMARY KEY (membership_id, gym_id)
);

DROP TABLE IF EXISTS `uses`;

CREATE TABLE uses (
gym_id INT,
membership_id INT,
per_week INTEGER,
per_month INTEGER,
FOREIGN KEY (membership_id) REFERENCES Members(membership_id),
FOREIGN KEY (gym_id) REFERENCES GYM(gym_id),
PRIMARY KEY (membership_id, gym_id)
);

DROP TABLE IF EXISTS `works`;

CREATE TABLE works (
gym_id INT,
membership_id INT,
role CHAR(30),
wage INTEGER,
FOREIGN KEY (membership_id) REFERENCES Members(membership_id),
FOREIGN KEY (gym_id) REFERENCES GYM(gym_id),
PRIMARY KEY (membership_id, gym_id)
);


/*
LOCK TABLES `boats` WRITE;
/*!40000 ALTER TABLE `boats` DISABLE KEYS */;
/*
INSERT INTO `boats` VALUES (101,'Interlake','blue'),(102,'Interlake','red'),(103,'Clipper','green'),(104,'Marine','red'),(105,'Titanic','black');
/*!40000 ALTER TABLE `boats` ENABLE KEYS */;
/*
UNLOCK TABLES;

--
-- Table structure for table `reserves`
--

DROP TABLE IF EXISTS `reserves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
/*
CREATE TABLE `reserves` (
  `sid` int(10) NOT NULL,
  `bid` int(10) NOT NULL,
  `rdate` date NOT NULL,
  UNIQUE `sid` (`sid`,`bid`),
  CONSTRAINT `fk_boat` FOREIGN KEY (`bid`) REFERENCES `boats` (`bid`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_sailor` FOREIGN KEY (`sid`) REFERENCES `sailors` (`sid`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reserves`
--
/*
LOCK TABLES `reserves` WRITE;
/*!40000 ALTER TABLE `reserves` DISABLE KEYS */;
/*
INSERT INTO `reserves` VALUES (22,101,'2014-02-19'),(58,105,'2014-02-27'),(71,103,'2014-02-03'),(22,104,'2014-03-12'),(29,102,'2014-03-14');
/*!40000 ALTER TABLE `reserves` ENABLE KEYS */;
/*
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
/*
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER update_rating
AFTER INSERT ON reserves
FOR EACH ROW
UPDATE sailors SET rating = rating+0.1
WHERE sid = NEW.sid */;;
/*
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `sailors`
--
/*
DROP TABLE IF EXISTS `sailors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
/*
CREATE TABLE `sailors` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `sname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` double(3,1) NOT NULL DEFAULT '0.0',
  `age` double(3,1) NOT NULL DEFAULT '0.0',
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sailors`
--
/*
LOCK TABLES `sailors` WRITE;
/*!40000 ALTER TABLE `sailors` DISABLE KEYS */;
/*
INSERT INTO `sailors` VALUES (22,'Dustin',7.1,45.0),(29,'Brutus',1.1,33.0),(31,'Lubber',8.0,55.0),(32,'Andy',8.0,25.5),(58,'Rusty',10.0,35.0),(64,'Horatio',7.0,35.0),(71,'Zorba',10.0,16.0),(74,'Horatio',9.0,35.0),(85,'Art',3.0,25.5),(95,'Bob',3.0,63.5);
/*!40000 ALTER TABLE `sailors` ENABLE KEYS */;
/*
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-03-21 23:34:56
