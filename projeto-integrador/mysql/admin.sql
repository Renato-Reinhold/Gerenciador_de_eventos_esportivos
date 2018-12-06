CREATE DATABASE  IF NOT EXISTS `administrador` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `administrador`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: administrador
-- ------------------------------------------------------
-- Server version	5.7.20-log

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atletas`
--

LOCK TABLES `atletas` WRITE;
/*!40000 ALTER TABLE `atletas` DISABLE KEYS */;
INSERT INTO `atletas` VALUES (2,'dgbhdsggbd','2018-10-10','1341234','14234231','H',3,2),(4,'Roberto JÃ£o','2018-10-25','53453','35431','H',4,2),(5,'JoÃ£o Jesus','2018-10-24','5351','15412351','H',8,2),(6,'Roberto','1234-12-12','2342341','413412431','H',5,1),(7,'WEFWEFWEF','1233-12-13','1321514','4352435243','H',2,1),(8,'Mateus','2444-03-12','1341243','1432141311','M',5,1),(9,'José','3333-02-12','1123123','1431243431','M',4,1);
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
  PRIMARY KEY (`cha_equ_id`),
  KEY `FK_CHAVE_EQUIPE_idx` (`cha_equ_equipe`),
  KEY `FK_EQUIPE_CHAVE_idx` (`cha_equ_chave`),
  CONSTRAINT `FK_CHAVE_EQUIPE` FOREIGN KEY (`cha_equ_equipe`) REFERENCES `equipes` (`equ_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_EQUIPE_CHAVE` FOREIGN KEY (`cha_equ_chave`) REFERENCES `chaves` (`cha_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chave_equipes`
--

LOCK TABLES `chave_equipes` WRITE;
/*!40000 ALTER TABLE `chave_equipes` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chaves`
--

LOCK TABLES `chaves` WRITE;
/*!40000 ALTER TABLE `chaves` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipes_atletas`
--

LOCK TABLES `equipes_atletas` WRITE;
/*!40000 ALTER TABLE `equipes_atletas` DISABLE KEYS */;
INSERT INTO `equipes_atletas` VALUES (2,4,4),(3,2,5),(4,1,6),(5,3,7),(6,1,8),(8,3,9);
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
  KEY `FK_EQUIPES_DIRIGENTE_EQUIPE_idx` (`equ_dir_equipe`),
  CONSTRAINT `FK_DIRIGENTE_EQUIPE` FOREIGN KEY (`equ_dir_dirigente`) REFERENCES `dirigentes` (`dir_id`),
  CONSTRAINT `FK_EQUIPES_DIRIGENTE_EQUIPE` FOREIGN KEY (`equ_dir_equipe`) REFERENCES `equipes` (`equ_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
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
-- Table structure for table `estatisticas_atleta`
--

DROP TABLE IF EXISTS `estatisticas_atleta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estatisticas_atleta` (
  `est_atl_id` int(11) NOT NULL AUTO_INCREMENT,
  `est_atl_atleta` int(11) DEFAULT NULL,
  `est_atl_amarelo` int(11) DEFAULT NULL,
  `est_atl_vermelho` int(11) DEFAULT NULL,
  `est_atl_gols` int(11) DEFAULT NULL,
  PRIMARY KEY (`est_atl_id`),
  KEY `FK_ESTATISTICAS_ATLETA_idx` (`est_atl_atleta`),
  CONSTRAINT `FK_ESTATISTICAS_ATLETA` FOREIGN KEY (`est_atl_atleta`) REFERENCES `atletas` (`atl_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estatisticas_atleta`
--

LOCK TABLES `estatisticas_atleta` WRITE;
/*!40000 ALTER TABLE `estatisticas_atleta` DISABLE KEYS */;
INSERT INTO `estatisticas_atleta` VALUES (17,4,1,0,2),(18,4,0,0,1),(19,5,0,0,2),(20,4,0,0,0),(21,5,0,0,0),(22,4,0,0,0),(23,5,0,0,0),(24,4,0,0,0),(25,5,0,0,0),(26,4,0,0,0),(27,5,0,0,0),(28,4,0,0,0),(29,5,1,0,1),(30,4,0,0,0),(31,5,1,0,1),(32,4,0,0,0),(33,5,1,0,1),(34,4,0,0,0),(35,5,0,0,0),(36,4,0,0,0),(37,5,0,0,0),(38,4,0,0,0),(39,5,0,0,0),(40,4,0,0,0),(41,5,0,0,0),(42,4,0,0,0);
/*!40000 ALTER TABLE `estatisticas_atleta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estatisticas_equipe`
--

DROP TABLE IF EXISTS `estatisticas_equipe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estatisticas_equipe` (
  `est_equ_id` int(11) NOT NULL AUTO_INCREMENT,
  `est_equ_equipe` int(11) DEFAULT NULL,
  `est_equ_vitoria` int(11) DEFAULT NULL,
  `est_equ_derrota` int(11) DEFAULT NULL,
  `est_equ_empate` int(11) DEFAULT NULL,
  `est_equ_gols` int(11) DEFAULT NULL,
  `est_equ_evento` int(11) DEFAULT NULL,
  `est_equ_torneio` int(11) DEFAULT NULL,
  PRIMARY KEY (`est_equ_id`),
  KEY `FK_ESTATISTICA_EVENTO_idx` (`est_equ_evento`),
  KEY `FK_ESTATISTICAS_EQUIPE_idx` (`est_equ_equipe`),
  KEY `FK_ESTATISTICAS_TORNEIO_idx` (`est_equ_torneio`),
  CONSTRAINT `FK_ESTATISTICAS_EQUIPE` FOREIGN KEY (`est_equ_equipe`) REFERENCES `equipes` (`equ_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_ESTATISTICAS_EVENTO` FOREIGN KEY (`est_equ_evento`) REFERENCES `eventos` (`eve_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_ESTATISTICAS_TORNEIO` FOREIGN KEY (`est_equ_torneio`) REFERENCES `torneios` (`tor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estatisticas_equipe`
--

LOCK TABLES `estatisticas_equipe` WRITE;
/*!40000 ALTER TABLE `estatisticas_equipe` DISABLE KEYS */;
/*!40000 ALTER TABLE `estatisticas_equipe` ENABLE KEYS */;
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
-- Table structure for table `torneios`
--

DROP TABLE IF EXISTS `torneios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `torneios` (
  `tor_id` int(11) NOT NULL AUTO_INCREMENT,
  `tor_modalidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`tor_id`),
  KEY `FK_TORNEIO_MODALIDADE_idx` (`tor_modalidade`),
  CONSTRAINT `FK_TORNEIO_MODALIDADE` FOREIGN KEY (`tor_modalidade`) REFERENCES `modalidades` (`mod_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `torneios`
--

LOCK TABLES `torneios` WRITE;
/*!40000 ALTER TABLE `torneios` DISABLE KEYS */;
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

-- Dump completed on 2018-11-12 21:24:45
