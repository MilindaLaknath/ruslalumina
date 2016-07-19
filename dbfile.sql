CREATE DATABASE  IF NOT EXISTS `aluma` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `aluma`;
-- MySQL dump 10.13  Distrib 5.7.13, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: aluma
-- ------------------------------------------------------
-- Server version	5.7.13

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
-- Table structure for table `stdDetails`
--

DROP TABLE IF EXISTS `stdDetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stdDetails` (
  `idstdDetails` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(45) DEFAULT NULL,
  `oname` varchar(240) DEFAULT NULL,
  `nameins` varchar(240) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` varchar(25) DEFAULT NULL,
  `regNo` varchar(25) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `degree` varchar(100) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `organization` varchar(200) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `orgAddress` text,
  `orgTpNo` varchar(20) DEFAULT NULL,
  `salaryStr` varchar(100) DEFAULT NULL,
  `salaryCur` varchar(100) DEFAULT NULL,
  `perAddress` text,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `checked` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idstdDetails`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stdDetails`
--

LOCK TABLES `stdDetails` WRITE;
/*!40000 ALTER TABLE `stdDetails` DISABLE KEYS */;
/*!40000 ALTER TABLE `stdDetails` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-19 23:58:51
