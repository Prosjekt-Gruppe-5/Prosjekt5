-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: Datasikkerhet
-- ------------------------------------------------------
-- Server version	5.7.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `emner`
--

DROP TABLE IF EXISTS `emner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emner` (
  `Emne_id` int(11) NOT NULL AUTO_INCREMENT,
  `Emnekode` varchar(45) NOT NULL,
  `Emnenavn` varchar(45) NOT NULL,
  `PIN` int(11) NOT NULL,
  `Foreleser_id` int(11) DEFAULT NULL,
  `Studieretning_id` int(11) NOT NULL,
  PRIMARY KEY (`Emne_id`),
  KEY `Studieretning_id` (`Studieretning_id`),
  KEY `Foreleser_id` (`Foreleser_id`),
  CONSTRAINT `emner_ibfk_1` FOREIGN KEY (`Studieretning_id`) REFERENCES `studieretning` (`Studieretning_id`),
  CONSTRAINT `emner_ibfk_2` FOREIGN KEY (`Foreleser_id`) REFERENCES `foreleser` (`Foreleser_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emner`
--

LOCK TABLES `emner` WRITE;
/*!40000 ALTER TABLE `emner` DISABLE KEYS */;
INSERT INTO `emner` VALUES (1,'ITM20817','Videoproduksjon',2341,NULL,1),(2,'ITM20718','Grafisk design',2314,NULL,1),(3,'ITM31519','Design av virtuelle miljoer',1231,NULL,1),(4,'ITF13019','Teknologi og samfunn',1514,NULL,2),(5,'ITM30617','Utvikling av interaktive nettsteder',5152,NULL,2),(6,'ITM31019','Digital markedsforing',9352,NULL,2),(7,'ITF10219','Programmering 1',4161,NULL,3),(8,'ITD15020','Kalkulus',7362,NULL,3),(9,'ITD20218','Statistikk og statistisk programmering',6214,NULL,3),(10,'ITF10511','Webutvikling',2314,NULL,4),(11,'ITF15019','Innforing i datasikkerhet',1234,NULL,4),(12,'ITF25019','Datasikkerhet i utvikling og drift',1251,NULL,4);
/*!40000 ALTER TABLE `emner` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-13 15:43:22
