-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: localhost    Database: bd_jovem_capacitado
-- ------------------------------------------------------
-- Server version	8.0.30-0ubuntu0.20.04.2

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
-- Table structure for table `tb_candidato`
--

DROP TABLE IF EXISTS `tb_candidato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_candidato` (
  `id_candidato` int NOT NULL AUTO_INCREMENT,
  `nome_candidato` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `cidade_candidato` varchar(60) COLLATE utf8mb3_unicode_ci NOT NULL,
  `telefone_candidato` varchar(45) COLLATE utf8mb3_unicode_ci NOT NULL,
  `whatsapp_candidato` varchar(15) COLLATE utf8mb3_unicode_ci NOT NULL,
  `situacao_emprego` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `idade_candidato` int DEFAULT NULL,
  PRIMARY KEY (`id_candidato`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_candidato`
--

LOCK TABLES `tb_candidato` WRITE;
/*!40000 ALTER TABLE `tb_candidato` DISABLE KEYS */;
INSERT INTO `tb_candidato` VALUES (1,'Luna Lannes Castro','Horizonte','85994235568','85994235568','1',22),(2,'Bruna Cardoso Silva','Horizonte','85994685522','85994685522','3',18),(3,'Luísa Melo Lopes','Horizonte','85992588876','85992588876','2',29),(4,'Renan Silva Freitas','Horizonte','85995658762','85992567717','3',16),(5,'Marinete Ramalho Cordeiro','Itaitinga','85996325568','85996325568','1',34),(6,'Mauro Lacerda ','Pacajus','85995658762','85996325568','2',22),(7,'Lúcia Hellen Almeida','Itaitinga','85992556879','85992556879','5',55),(8,'Carlos Lacerda','Chorozinho','85996365521','85996365521','4',22);
/*!40000 ALTER TABLE `tb_candidato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'bd_jovem_capacitado'
--

--
-- Dumping routines for database 'bd_jovem_capacitado'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-07 15:38:45
