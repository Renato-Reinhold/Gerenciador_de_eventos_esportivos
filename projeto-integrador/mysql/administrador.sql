-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: administrador
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

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
-- Table structure for table `atletas`
--

DROP TABLE IF EXISTS `atletas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atletas` (
  `atl_id` int(11) NOT NULL AUTO_INCREMENT,
  `atl_nome` varchar(300) NOT NULL,
  `atl_data_nascimento` date NOT NULL,
  `atl_rg` varchar(11) NOT NULL,
  `atl_num_inscricao` varchar(50) NOT NULL,
  `atl_sexo` char(1) DEFAULT NULL,
  `atl_cidade` int(11) NOT NULL,
  `atl_modalidade` int(11) NOT NULL,
  PRIMARY KEY (`atl_id`),
  UNIQUE KEY `atl_rg` (`atl_rg`),
  UNIQUE KEY `atl_num_inscricao` (`atl_num_inscricao`),
  KEY `FK_ATLETA_CIDADE` (`atl_cidade`),
  KEY `FK_ATLETA_MODALIDADE` (`atl_modalidade`),
  CONSTRAINT `FK_ATLETA_CIDADE` FOREIGN KEY (`atl_cidade`) REFERENCES `cidades` (`cid_id`),
  CONSTRAINT `FK_ATLETA_MODALIDADE` FOREIGN KEY (`atl_modalidade`) REFERENCES `modalidades` (`mod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atletas`
--

LOCK TABLES `atletas` WRITE;
/*!40000 ALTER TABLE `atletas` DISABLE KEYS */;
INSERT INTO `atletas` VALUES (2,'FÃ¡bio Felsky','2018-09-19','34556456','5416545646','H',7,1),(4,'FÃ¡bio Felsky','2018-09-14','13232','854681','H',15,1),(5,'FÃ¡bio Felsky','2018-09-11','534564','564121651','H',8,1),(6,'FÃ¡bio Felsky','2018-08-28','546564','156156156','H',4,2),(7,'fewfw','2018-09-03','wefw','wefw','H',4,2),(8,'JosÃ© Almeida','2018-09-09','541564','564165156','H',1,2),(9,'Vitor Paes','2018-09-04','6541561561','56156156165','H',4,2),(10,'AmÃ©lia Rodriguez','2018-09-12','45641','561651561','M',3,2),(11,'Renato Muller Reinhold','2018-09-04','123123','123123','H',4,2),(13,'Jair Mandes','2018-09-11','1513','54524','H',3,1),(14,'Gabriel kelvesys','2018-09-11','1234124','41234123','H',5,1);
/*!40000 ALTER TABLE `atletas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chave_equipes`
--

DROP TABLE IF EXISTS `chave_equipes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chave_equipes` (
  `cha_equ_id` int(11) NOT NULL AUTO_INCREMENT,
  `cha_equ_chave` int(11) DEFAULT NULL,
  `cha_equ_equipe` int(11) DEFAULT NULL,
  PRIMARY KEY (`cha_equ_id`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chave_equipes`
--

LOCK TABLES `chave_equipes` WRITE;
/*!40000 ALTER TABLE `chave_equipes` DISABLE KEYS */;
INSERT INTO `chave_equipes` VALUES (113,57,2),(114,57,4),(115,58,6),(116,58,7),(117,59,2),(118,59,4),(119,60,6),(120,60,7),(121,61,2),(122,61,4),(123,62,3),(124,62,0),(125,63,2),(126,63,4),(127,64,6),(128,64,7);
/*!40000 ALTER TABLE `chave_equipes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chaves`
--

DROP TABLE IF EXISTS `chaves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chaves` (
  `cha_id` int(11) NOT NULL AUTO_INCREMENT,
  `cha_torneio` int(11) DEFAULT NULL,
  PRIMARY KEY (`cha_id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chaves`
--

LOCK TABLES `chaves` WRITE;
/*!40000 ALTER TABLE `chaves` DISABLE KEYS */;
INSERT INTO `chaves` VALUES (57,62),(58,62),(59,63),(60,63),(61,64),(62,65),(63,66),(64,66);
/*!40000 ALTER TABLE `chaves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cidades`
--

DROP TABLE IF EXISTS `cidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cidades` (
  `cid_id` int(11) NOT NULL AUTO_INCREMENT,
  `cid_codigo` int(11) NOT NULL,
  `cid_nome` varchar(300) NOT NULL,
  PRIMARY KEY (`cid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cidades`
--

LOCK TABLES `cidades` WRITE;
/*!40000 ALTER TABLE `cidades` DISABLE KEYS */;
INSERT INTO `cidades` VALUES (1,4203006,'Caçador'),(2,4204202,'Chapecó'),(3,4204608,'Criciúma'),(4,4205407,'Florianópolis'),(5,4205407,'Florianópolis-continente'),(6,4205704,'Garopaba'),(7,4205902,'Gaspar'),(8,4208203,'Itajaí'),(9,4208906,'Jaraguá do Sul-Rau,'),(10,4208906,'Jaraguá do Sul-Centro'),(11,4209102,'Joinville'),(12,4209300,'Lages'),(13,4211900,'Palhoça-Bilíngue'),(14,4216008,'São Carlos'),(15,4216602,'São José'),(16,4216909,'São Lourenço do Oeste'),(17,4217204,'São Miguel do Oeste'),(18,4218707,'Tubarão'),(19,4218954,'Urupema'),(20,4219507,'Xanxerê');
/*!40000 ALTER TABLE `cidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dirigentes`
--

DROP TABLE IF EXISTS `dirigentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dirigentes` (
  `dir_id` int(11) NOT NULL AUTO_INCREMENT,
  `dir_nome` varchar(300) DEFAULT NULL,
  `dir_funcao` varchar(300) DEFAULT NULL,
  `dir_data_nascimento` date DEFAULT NULL,
  `dir_rg` varchar(300) NOT NULL,
  `dir_siagep` varchar(300) NOT NULL,
  PRIMARY KEY (`dir_id`),
  UNIQUE KEY `dir_rg` (`dir_rg`),
  UNIQUE KEY `dir_siagep` (`dir_siagep`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dirigentes`
--

LOCK TABLES `dirigentes` WRITE;
/*!40000 ALTER TABLE `dirigentes` DISABLE KEYS */;
INSERT INTO `dirigentes` VALUES (1,'gergegre','234234234234','2018-08-06','34234234','g23423423');
/*!40000 ALTER TABLE `dirigentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipes`
--

DROP TABLE IF EXISTS `equipes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipes` (
  `equ_id` int(11) NOT NULL AUTO_INCREMENT,
  `equ_nome` varchar(300) DEFAULT NULL,
  `equ_modalidade` int(11) NOT NULL,
  PRIMARY KEY (`equ_id`),
  KEY `FK_EQUIPE_MODALIDADE` (`equ_modalidade`),
  CONSTRAINT `FK_EQUIPE_MODALIDADE` FOREIGN KEY (`equ_modalidade`) REFERENCES `modalidades` (`mod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipes`
--

LOCK TABLES `equipes` WRITE;
/*!40000 ALTER TABLE `equipes` DISABLE KEYS */;
INSERT INTO `equipes` VALUES (1,'IFSC - campus Gaspar',1),(2,'IFSC - campus Gaspar',2),(3,'IFSC - campus Florianópolis',1),(4,'IFSC - campus Florianópolis',2),(5,'IFSC - campus São josé',1),(6,'IFSC - campus São josé',2),(7,'IFSC - São Garopaba',2),(8,'IFSC - São Itajaí',2);
/*!40000 ALTER TABLE `equipes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipes_atletas`
--

DROP TABLE IF EXISTS `equipes_atletas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipes_atletas` (
  `equ_atl_id` int(11) NOT NULL AUTO_INCREMENT,
  `equ_atl_equipe` int(11) NOT NULL,
  `equ_atl_atleta` int(11) NOT NULL,
  PRIMARY KEY (`equ_atl_id`),
  KEY `FK_EQUIPE_ATLETA` (`equ_atl_equipe`),
  KEY `FK_ATLETA_EQUIPE` (`equ_atl_atleta`),
  CONSTRAINT `FK_ATLETA_EQUIPE` FOREIGN KEY (`equ_atl_atleta`) REFERENCES `atletas` (`atl_id`),
  CONSTRAINT `FK_EQUIPE_ATLETA` FOREIGN KEY (`equ_atl_equipe`) REFERENCES `equipes` (`equ_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipes_atletas`
--

LOCK TABLES `equipes_atletas` WRITE;
/*!40000 ALTER TABLE `equipes_atletas` DISABLE KEYS */;
INSERT INTO `equipes_atletas` VALUES (1,1,2),(4,3,4),(5,5,5),(6,2,6),(7,4,7),(8,6,8),(9,7,9),(10,8,10),(11,2,11),(13,3,13),(14,3,14);
/*!40000 ALTER TABLE `equipes_atletas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipes_dirigentes`
--

DROP TABLE IF EXISTS `equipes_dirigentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipes_dirigentes` (
  `equ_dir_id` int(11) NOT NULL AUTO_INCREMENT,
  `equ_dir_equipe` int(11) NOT NULL,
  `equ_dir_dirigente` int(11) NOT NULL,
  PRIMARY KEY (`equ_dir_id`),
  KEY `FK_DIRIGENTE_EQUIPE` (`equ_dir_dirigente`),
  CONSTRAINT `FK_DIRIGENTE_EQUIPE` FOREIGN KEY (`equ_dir_dirigente`) REFERENCES `dirigentes` (`dir_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipes_dirigentes`
--

LOCK TABLES `equipes_dirigentes` WRITE;
/*!40000 ALTER TABLE `equipes_dirigentes` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipes_dirigentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estatisticas`
--

DROP TABLE IF EXISTS `estatisticas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estatisticas` (
  `adv_id` int(11) NOT NULL AUTO_INCREMENT,
  `adv_atleta` int(11) DEFAULT NULL,
  `adv_vermehlo` int(11) DEFAULT NULL,
  `adv_vermelho` int(11) DEFAULT NULL,
  `adv_gols` int(11) DEFAULT NULL,
  PRIMARY KEY (`adv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estatisticas`
--

LOCK TABLES `estatisticas` WRITE;
/*!40000 ALTER TABLE `estatisticas` DISABLE KEYS */;
/*!40000 ALTER TABLE `estatisticas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evento_torneios`
--

DROP TABLE IF EXISTS `evento_torneios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evento_torneios` (
  `eve_tor_id` int(11) NOT NULL AUTO_INCREMENT,
  `eve_tor_evento` int(11) DEFAULT NULL,
  `eve_tor_torneio` int(11) DEFAULT NULL,
  PRIMARY KEY (`eve_tor_id`),
  KEY `FK_EVENTO_TORNEIO` (`eve_tor_evento`),
  KEY `FK_TORNEIO_EVENTO` (`eve_tor_torneio`),
  CONSTRAINT `FK_EVENTO_TORNEIO` FOREIGN KEY (`eve_tor_evento`) REFERENCES `eventos` (`eve_id`),
  CONSTRAINT `FK_TORNEIO_EVENTO` FOREIGN KEY (`eve_tor_torneio`) REFERENCES `torneios` (`tor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evento_torneios`
--

LOCK TABLES `evento_torneios` WRITE;
/*!40000 ALTER TABLE `evento_torneios` DISABLE KEYS */;
INSERT INTO `evento_torneios` VALUES (41,34,62),(42,35,63),(43,36,64),(44,36,65),(45,37,66);
/*!40000 ALTER TABLE `evento_torneios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventos` (
  `eve_id` int(11) NOT NULL AUTO_INCREMENT,
  `eve_nome` varchar(300) DEFAULT NULL,
  `eve_local_torneios` varchar(300) DEFAULT NULL,
  `eve_data` date NOT NULL,
  PRIMARY KEY (`eve_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` VALUES (34,'Teste 1','','0000-00-00'),(35,'JIFSC','Gaspar','2018-09-12'),(36,'Teste 1','Gaspar','2018-09-07'),(37,'JIFSUL','Gaspar','2018-09-14');
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modalidades`
--

DROP TABLE IF EXISTS `modalidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modalidades` (
  `mod_id` int(11) NOT NULL AUTO_INCREMENT,
  `mod_nome` varchar(30) DEFAULT NULL,
  `mod_tipo` char(1) DEFAULT NULL,
  PRIMARY KEY (`mod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modalidades`
--

LOCK TABLES `modalidades` WRITE;
/*!40000 ALTER TABLE `modalidades` DISABLE KEYS */;
INSERT INTO `modalidades` VALUES (1,'Futebol','C'),(2,'Vôlei','C'),(3,'Basquete','C'),(4,'Handebol','C'),(5,'Xadrez','I'),(6,'Tênis de mesa','I'),(7,'Atletismo','I');
/*!40000 ALTER TABLE `modalidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `torneio_equipes`
--

DROP TABLE IF EXISTS `torneio_equipes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `torneio_equipes` (
  `tor_equ_id` int(11) NOT NULL AUTO_INCREMENT,
  `tor_equ_torneios` int(11) DEFAULT NULL,
  `tor_equ_equipe` int(11) DEFAULT NULL,
  PRIMARY KEY (`tor_equ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `torneio_equipes`
--

LOCK TABLES `torneio_equipes` WRITE;
/*!40000 ALTER TABLE `torneio_equipes` DISABLE KEYS */;
/*!40000 ALTER TABLE `torneio_equipes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `torneios`
--

DROP TABLE IF EXISTS `torneios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `torneios` (
  `tor_id` int(11) NOT NULL AUTO_INCREMENT,
  `tor_modalidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`tor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `torneios`
--

LOCK TABLES `torneios` WRITE;
/*!40000 ALTER TABLE `torneios` DISABLE KEYS */;
INSERT INTO `torneios` VALUES (62,2),(63,2),(64,2),(65,1),(66,2);
/*!40000 ALTER TABLE `torneios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_login` varchar(50) NOT NULL,
  `usu_senha` varchar(50) NOT NULL,
  PRIMARY KEY (`usu_id`),
  UNIQUE KEY `usu_login_UNIQUE` (`usu_login`),
  UNIQUE KEY `usu_senha_UNIQUE` (`usu_senha`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Renato','gestao');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-05 11:40:12
