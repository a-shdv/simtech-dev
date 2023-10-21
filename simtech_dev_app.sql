-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: simtech_dev_app
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `form_admin`
--

DROP TABLE IF EXISTS `form_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form_admin`
--

LOCK TABLES `form_admin` WRITE;
/*!40000 ALTER TABLE `form_admin` DISABLE KEYS */;
INSERT INTO `form_admin` VALUES (1,'test@gmail.com','$2y$10$KqE/oHT0TOld3Ad/TG6ZHukGzGXqXbTIkrO6njRe4splNJxQAhq5C'),(2,'test123@gmail.com','$2y$10$e7qLwcII.CbCjKOLyohmZO.rHTVTRwuXEbHy53kOk/UEM4flbBD6O'),(3,'shadaev2001@icloud.com','$2y$10$O0QQfklVPeMeVXyVFjHxbejceCyB5iiT3rBBiP/bw.Rsd6xzXXtBa');
/*!40000 ALTER TABLE `form_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form_message`
--

DROP TABLE IF EXISTS `form_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `problem_desc` text NOT NULL,
  `filename` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form_message`
--

LOCK TABLES `form_message` WRITE;
/*!40000 ALTER TABLE `form_message` DISABLE KEYS */;
INSERT INTO `form_message` VALUES (1,'shadaev2001@icloud.com','testse','+79876543210','Мужской','Ульяновск','dsadsadasdas','/../public/img/6533b6787bef8_9f746c200d8fcf8bddbebee9bab705d1.png'),(2,'test@gmail.com','Test','+79876543210','Мужской','Ульяновск','Testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest','/../public/img/6533fc69dc2fc_20c30ae754690098e67e0c6bf49d4826.png'),(3,'test@gmail.com','test','+79876543210','Мужской','Ульяновск','ggfdgfdgfdggzdg','/../public/img/653401b1db472_815b0fe17032a7094165b9c583ac1ae9.jpg'),(4,'test@gmail.com','test','888','Мужской','Ульяновск','sdfsdfsdfsfd','/../public/img/653401d1b907f_6c0bf7f20cd900e36e91c58d5d6c42ab.jpg'),(5,'test@gmail.com','asdas','+79876543210','Мужской','Ульяновск','sdfsdfsdfsd','/../public/img/653402027b238_c5a9a4cd4d9aeebab5580b5b8bbd80a5.png'),(6,'test@gmail.com','test','89876380847','Мужской','Ульяновск','fasfasfasf','/../public/img/6534021431414_ba1d283f7bcd10e82300e0ab5170fdc6.png'),(7,'shadaev2001@icloud.com','test','+79876543210','Мужской','Ульяновск','fsdfsdfsdfsd','/../public/img/653402226d246_f7422b8d4012edc549a205394550822c.png'),(8,'myname1234554324@gmail.com','Tony','888','Мужской','Ульяновск','fgdfdgfdgfdg','/../public/img/65340238b635e_7eeca45151b629033c5722ed5e148ee5.png'),(9,'test@gmail.com','uiu','+79876543210','Мужской','Ульяновск','sdfsdfs','/../public/img/653402515f77a_1091c70e07e26023854bc143e38ac951.png'),(10,'myname1234554324@gmail.com','$$$$','89876380847','Мужской','Ульяновск','sadasdasgfdx','/../public/img/65340266bd633_2f53e864a1d3a796db5be0726549d4ee.png'),(11,'t0ny73@mail.ru','Tony','89876380847','Мужской','Ульяновск','sadasdas','/../public/img/6534027d8421d_f0b02ad49699c9842906cf15c5628504.png');
/*!40000 ALTER TABLE `form_message` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-21 21:58:39
