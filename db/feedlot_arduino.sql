-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: feedlot
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `arduino`
--

DROP TABLE IF EXISTS `arduino`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `arduino` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha` int NOT NULL,
  `hora` int NOT NULL,
  `minuto` int NOT NULL,
  `valor` int NOT NULL,
  `unidadFisica` varchar(45) NOT NULL,
  `estadoTransductor` varchar(45) NOT NULL,
  `duracionMedicion` int NOT NULL,
  `estadoTransmision` varchar(45) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=632 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arduino`
--

LOCK TABLES `arduino` WRITE;
/*!40000 ALTER TABLE `arduino` DISABLE KEYS */;
INSERT INTO `arduino` VALUES (6,20,7,25,2,'ml','23',12,'Activo'),(7,20,7,25,2,'ml','23',12,'Activo'),(8,20,7,25,2,'ml','23',12,'Activo'),(9,20,7,25,2,'ml','23',12,'Activo'),(10,220,7,25,2,'ml','23',12,'Activo'),(11,220,7,25,2,'ml','23',12,'Activo'),(12,220,7,25,2,'ml','23',12,'Activo'),(13,220,7,25,2,'ml','23',12,'Activo'),(14,220,7,25,2,'ml','Falla',12,'Activo'),(15,220,7,25,2,'ml','Inactivo',12,'Activo'),(21,220,7,25,2,'ml','Inactivo',12,'Activo'),(31,22,12,25,2,'ml','5',12,'Activo'),(41,22,12,25,2,'ml','5',12,'Activo'),(51,22,12,25,2,'ml','5',12,'Activo'),(61,22,12,25,2,'ml','5',12,'Activo'),(71,22,12,25,2,'ml','5',12,'Activo'),(81,22,12,25,2,'ml','5',12,'Activo'),(91,22,12,25,2,'ml','5',12,'Activo'),(101,22,12,25,2,'ml','5',12,'Activo'),(111,22,12,25,2,'ml','5',12,'Activo'),(121,22,12,25,2,'ml','5',12,'Activo'),(131,22,12,25,2,'ml','5',12,'Activo'),(141,22,12,25,2,'ml','5',12,'Activo'),(151,22,12,25,2,'ml','5',12,'Activo'),(161,22,12,25,2,'ml','5',12,'Activo'),(171,22,12,25,2,'ml','5',12,'Activo'),(181,22,12,25,2,'ml','5',12,'Activo'),(191,22,12,25,2,'ml','5',12,'Activo'),(201,22,12,25,2,'ml','5',12,'Activo'),(211,22,12,25,2,'ml','5',12,'Activo'),(221,22,12,25,2,'ml','5',12,'Activo'),(231,22,12,25,2,'ml','5',12,'Activo'),(241,22,12,25,2,'ml','5',12,'Activo'),(251,22,12,25,2,'ml','5',12,'Activo'),(261,22,12,25,2,'ml','5',12,'Activo'),(271,22,12,25,2,'ml','5',12,'Activo'),(281,22,12,25,2,'ml','5',12,'Activo'),(291,22,12,25,2,'ml','5',12,'Activo'),(301,22,12,25,2,'ml','5',12,'Activo'),(311,22,12,25,2,'ml','5',12,'Activo'),(321,22,12,25,2,'ml','5',12,'Activo'),(331,22,12,25,2,'ml','5',12,'Activo'),(341,22,12,25,2,'ml','5',12,'Activo'),(351,22,12,25,2,'ml','5',12,'Activo'),(361,22,12,25,2,'ml','5',12,'Activo'),(371,22,12,25,2,'ml','5',12,'Activo'),(381,22,12,25,2,'ml','5',12,'Activo'),(391,22,12,25,2,'ml','5',12,'Activo'),(401,22,12,25,2,'ml','5',12,'Activo'),(411,22,12,25,2,'ml','5',12,'Activo'),(421,22,12,25,2,'ml','5',12,'Activo'),(431,22,12,25,2,'ml','5',12,'Activo'),(441,22,12,25,2,'ml','5',12,'Activo'),(451,22,12,25,2,'ml','5',12,'Activo'),(461,22,12,25,2,'ml','5',12,'Activo'),(471,22,12,25,2,'ml','5',12,'Activo'),(481,22,12,25,2,'ml','5',12,'Activo'),(491,22,12,25,2,'ml','5',12,'Activo'),(501,22,12,25,2,'ml','5',12,'Activo'),(511,22,12,25,2,'ml','5',12,'Activo'),(521,22,12,25,2,'ml','5',12,'Activo'),(531,23,12,25,2,'ml','5',12,'Activo'),(541,23,12,25,2,'ml','5',12,'Activo'),(551,23,12,25,2,'ml','5',12,'Activo'),(561,23,12,25,2,'ml','5',12,'Activo'),(571,23,12,25,2,'ml','5',12,'Activo'),(581,23,12,25,2,'ml','5',12,'Activo'),(591,23,12,25,2,'ml','5',12,'Activo'),(601,23,12,25,2,'ml','5',12,'Activo'),(611,23,12,25,2,'ml','5',12,'Activo'),(621,23,12,25,2,'ml','5',12,'Activo'),(631,10,32,15,2,'ml','5',12,'Activo');
/*!40000 ALTER TABLE `arduino` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-15 21:59:58
