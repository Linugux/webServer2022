-- MySQL dump 10.14  Distrib 5.5.64-MariaDB, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: slimCompany
-- ------------------------------------------------------
-- Server version	5.5.64-MariaDB-1ubuntu0.14.04.1

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
-- Table structure for table `Inventario_Fisico`
--

DROP TABLE IF EXISTS `Inventario_Fisico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Inventario_Fisico` (
  `codigo_slim` int(11) NOT NULL,
  `unidades` int(11) NOT NULL,
  `apartado` tinyint(1) DEFAULT NULL,
  UNIQUE KEY `codigo_slim` (`codigo_slim`),
  KEY `codigo_slim_2` (`codigo_slim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Inventario_Fisico`
--

LOCK TABLES `Inventario_Fisico` WRITE;
/*!40000 ALTER TABLE `Inventario_Fisico` DISABLE KEYS */;
INSERT INTO `Inventario_Fisico` VALUES (912883,1300,1);
/*!40000 ALTER TABLE `Inventario_Fisico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Productos_Publicaciones`
--

DROP TABLE IF EXISTS `Productos_Publicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Productos_Publicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_slim` int(11) NOT NULL,
  `descripcion_corta` varchar(75) NOT NULL,
  `id_publicacion` varchar(15) NOT NULL,
  `title_publicaciones` varchar(125) NOT NULL,
  `sku_publicaciones` varchar(65) NOT NULL,
  `linea` smallint(6) NOT NULL,
  `sublinea` smallint(6) NOT NULL,
  `sublinea2` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `codigo_slim` (`codigo_slim`),
  CONSTRAINT `Productos_Publicaciones_ibfk_1` FOREIGN KEY (`codigo_slim`) REFERENCES `Inventario_Fisico` (`codigo_slim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Productos_Publicaciones`
--

LOCK TABLES `Productos_Publicaciones` WRITE;
/*!40000 ALTER TABLE `Productos_Publicaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `Productos_Publicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Publicaciones`
--

DROP TABLE IF EXISTS `Publicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Publicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_publicacion` varchar(15) NOT NULL,
  `title_publicaciones` varchar(125) NOT NULL,
  `sku_publicacion` varchar(65) NOT NULL,
  `attribute_conbinations` varchar(75) NOT NULL,
  `price` double NOT NULL,
  `category_id` varchar(20) NOT NULL,
  `avalible_quantity` int(11) NOT NULL,
  `status` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Publicaciones`
--

LOCK TABLES `Publicaciones` WRITE;
/*!40000 ALTER TABLE `Publicaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `Publicaciones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-03 23:53:38
