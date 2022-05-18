-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: shop
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sku` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `type` varchar(20) NOT NULL,
  `weight` float DEFAULT NULL,
  `size` float DEFAULT NULL,
  `length` float DEFAULT NULL,
  `width` float DEFAULT NULL,
  `height` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (7,'1222','DVD-18',23,'DVD',NULL,128,NULL,NULL,NULL),(14,'12','Treasure Island',13.5,'Book',5,NULL,NULL,NULL,NULL),(16,'234','Chair',46,'Furniture',NULL,NULL,50,76,30),(19,'56789UUR55','DVD-988',17.8,'DVD',NULL,128,NULL,NULL,NULL),(20,'23BOJD0987','DVD-134',12.79,'DVD',NULL,64,NULL,NULL,NULL),(21,'FGHJ6789GH','Bed',113.9,'Furniture',NULL,NULL,300,180,200),(22,'GH234GHJK','Wardrobe',123.56,'Furniture',NULL,NULL,250,200,500),(25,'FGH2949FGH','Ready kitchen',1091.55,'Furniture',NULL,NULL,2700,1900,2600),(26,'HJ9002GHJ','Harry Potter And The Chamber of secrets',25.6,'Book',6.7,NULL,NULL,NULL,NULL),(27,'GHJK23GHJ0','flash drive-34',34.9,'DVD',NULL,256,NULL,NULL,NULL),(29,'FGHJK876FG','Red Ridding Hood',12.45,'Book',2.62,NULL,NULL,NULL,NULL),(30,'FGUIP29SBB','Сouch',318.32,'Furniture',NULL,NULL,1790,980,540),(31,'GHJ22GHJ01','Bedside table',71.85,'Furniture',NULL,NULL,50,50,120);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'shop'
--

--
-- Dumping routines for database 'shop'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-18 16:47:27
