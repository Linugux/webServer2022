-- MySQL dump 10.14  Distrib 5.5.64-MariaDB, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: empresaTest
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
-- Table structure for table `area`
--

DROP TABLE IF EXISTS `area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `area` (
  `id_area` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_area` varchar(20) NOT NULL,
  `id_puesto` int(11) NOT NULL,
  PRIMARY KEY (`id_area`),
  KEY `id_puesto` (`id_puesto`),
  CONSTRAINT `area_ibfk_1` FOREIGN KEY (`id_puesto`) REFERENCES `puesto` (`id_puesto`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `area`
--

LOCK TABLES `area` WRITE;
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
INSERT INTO `area` VALUES (1,'Programacion',1),(2,'Mantenimiento',5),(3,'Mantenimiento',7),(4,'Almacen',7),(5,'Ventas',6),(6,'Publicidad',9),(7,'Trascendenal',10),(8,'Administracion',10),(9,'Imagen',11),(10,'Director',12),(11,'Empresarial',13),(12,'Produccion',9),(13,'Realizacion-Producto',9);
/*!40000 ALTER TABLE `area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compras`
--

DROP TABLE IF EXISTS `compras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL AUTO_INCREMENT,
  `id_materia` int(11) NOT NULL,
  `fecha_compra` date DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  PRIMARY KEY (`id_compra`),
  KEY `compra_materal_id_fk` (`id_materia`),
  KEY `compras_proveedor_id_fk` (`id_proveedor`),
  CONSTRAINT `compras_proveedor_id_fk` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`),
  CONSTRAINT `compra_materal_id_fk` FOREIGN KEY (`id_materia`) REFERENCES `material` (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compras`
--

LOCK TABLES `compras` WRITE;
/*!40000 ALTER TABLE `compras` DISABLE KEYS */;
/*!40000 ALTER TABLE `compras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleado`
--

DROP TABLE IF EXISTS `empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_empleado` varchar(50) NOT NULL,
  `id_puesto` int(11) NOT NULL,
  `id_turno` int(11) NOT NULL,
  `telefono` double NOT NULL,
  `telefono2` double NOT NULL,
  `telefono3` double NOT NULL,
  `salario` double NOT NULL,
  `id_area` int(11) NOT NULL,
  `ingreso` date NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_empleado`),
  KEY `id_turno` (`id_turno`),
  KEY `id_puesto` (`id_puesto`),
  KEY `id_area` (`id_area`),
  CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`id_turno`) REFERENCES `turno` (`id_turno`),
  CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`id_puesto`) REFERENCES `puesto` (`id_puesto`),
  CONSTRAINT `empleado_ibfk_3` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleado`
--

LOCK TABLES `empleado` WRITE;
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
INSERT INTO `empleado` VALUES (1,'Linugux',1,3,525624600477,0,0,16000,1,'2022-04-28','linugux@gmail.com'),(2,'Jorge Contreras',5,1,525517734650,0,0,26000,2,'2022-05-03','jorge10@hotmail.com'),(3,'Nestor Garrido',9,2,525624600477,0,0,18000,1,'2022-04-27','Linugux@gmail.com'),(4,'Xugunil',2,2,525624600477,0,0,12000,1,'2022-04-26','xugunil@gmail.com'),(5,'Rafael Vega',7,1,525512887122,0,0,13000,3,'2021-12-26','xrv3@gmail.com'),(6,'Johann Cruz',8,1,525632620147,0,0,10000,1,'2019-12-10','Joh76a@hotmail.com'),(7,'Alexis Hernandez',9,1,525547175662,0,0,12000,9,'2022-04-26','alexishernandezcruz@gmail.com'),(8,'Cinthya Castaneda',9,1,525522632657,0,0,15000,6,'2022-05-04','@gmail.com'),(9,'Nancy Cabrera',9,1,525520957315,0,0,15000,5,'2022-05-04','cajudy77@gmail.com'),(10,'Jose Sixtos Garcia',9,1,525560313314,0,0,1000,13,'2022-05-09','sixto_aguilas@hotmail.com'),(11,'Monica Garcia',9,1,527222312555,527225954122,0,16000,5,'2022-05-04','monyke3828@gmail.com'),(13,'Enrique Santos',9,1,525520714189,0,0,17000,8,'2022-03-04','santosreyes@yahoo.com'),(14,'Liz Zenteno',13,1,5519672103,0,0,33000,11,'2022-05-10','??????@gmail.com'),(16,'Miguel Moreno Lahak Ahua',9,1,525539816825,0,0,10000,10,'2022-05-11','mmoreno390@msn.com');
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maquinaria`
--

DROP TABLE IF EXISTS `maquinaria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maquinaria` (
  `id_maquinaria` int(11) NOT NULL,
  `nombre_maquinaria` varchar(50) DEFAULT NULL,
  `area` varchar(59) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_maquinaria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maquinaria`
--

LOCK TABLES `maquinaria` WRITE;
/*!40000 ALTER TABLE `maquinaria` DISABLE KEYS */;
/*!40000 ALTER TABLE `maquinaria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `material` (
  `id_materia` int(11) NOT NULL,
  `nombre_materia` varchar(50) DEFAULT NULL,
  `precio_materia` double DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material`
--

LOCK TABLES `material` WRITE;
/*!40000 ALTER TABLE `material` DISABLE KEYS */;
/*!40000 ALTER TABLE `material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(50) DEFAULT NULL,
  `precio_producto` double DEFAULT NULL,
  `modelo_producto` double DEFAULT NULL,
  `descripcion_producto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_proveedor` varchar(50) DEFAULT NULL,
  `empresa_provedor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedor`
--

LOCK TABLES `proveedor` WRITE;
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `puesto`
--

DROP TABLE IF EXISTS `puesto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `puesto` (
  `id_puesto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_puesto` varchar(20) NOT NULL,
  `rango` int(11) NOT NULL,
  PRIMARY KEY (`id_puesto`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puesto`
--

LOCK TABLES `puesto` WRITE;
/*!40000 ALTER TABLE `puesto` DISABLE KEYS */;
INSERT INTO `puesto` VALUES (1,'root',111),(2,'BackEnd',101),(3,'Sys/Admin',110),(4,'Fresador',111),(5,'Mecanico',111),(6,'Aux.General',111),(7,'Director',0),(8,'SubDirector',11),(9,'Testlahak',110),(10,'Terapeuta',110),(11,'Psicologo',111),(12,'Ejecutivo',111),(13,'Sacerdote',111);
/*!40000 ALTER TABLE `puesto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `terapias`
--

DROP TABLE IF EXISTS `terapias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `terapias` (
  `id_terapia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_terapia` varchar(200) NOT NULL,
  `que_es_terapia` blob NOT NULL,
  `historia_terapia` text NOT NULL,
  `paraque_sirve_terapia` text NOT NULL,
  `origen_terapia` text NOT NULL,
  `tiempo_hrs_por_dia` time NOT NULL,
  `tiempo_dias_por_semana` date NOT NULL,
  `tiempo_semanas_por_mes` date NOT NULL,
  `tiempo_por_meses` date NOT NULL,
  `tiempo_creacion_terapia_inicio` date NOT NULL,
  PRIMARY KEY (`id_terapia`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terapias`
--

LOCK TABLES `terapias` WRITE;
/*!40000 ALTER TABLE `terapias` DISABLE KEYS */;
INSERT INTO `terapias` VALUES (1,'Depuraci??n de Emociones T??xicas.','','','','???','00:00:00','0000-00-00','0000-00-00','0000-00-00','0000-00-00'),(2,'Terapia Transpersonal.','Qu? es la psicolog?a transpersonal','','','???','00:00:00','0000-00-00','0000-00-00','0000-00-00','0000-00-00');
/*!40000 ALTER TABLE `terapias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `turno`
--

DROP TABLE IF EXISTS `turno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `turno` (
  `id_turno` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_turno` varchar(20) NOT NULL,
  `horario_inicial` datetime NOT NULL,
  `horario_terminal` datetime NOT NULL,
  PRIMARY KEY (`id_turno`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `turno`
--

LOCK TABLES `turno` WRITE;
/*!40000 ALTER TABLE `turno` DISABLE KEYS */;
INSERT INTO `turno` VALUES (1,'Matutino','0000-00-00 00:06:00','0000-00-00 00:14:00'),(2,'Vespertino','0000-00-00 00:14:00','0000-00-00 00:22:00'),(3,'Nocturno','0000-00-00 00:22:00','0000-00-00 00:06:00');
/*!40000 ALTER TABLE `turno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ventas` (
  `id_ventas` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `fecha_venta` date DEFAULT NULL,
  `nombre_comprador` varchar(50) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `telefono` double DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id_ventas`),
  KEY `venta_productos_id_fk` (`id_producto`),
  CONSTRAINT `venta_productos_id_fk` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-16  0:54:11
