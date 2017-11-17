CREATE DATABASE  IF NOT EXISTS `utile_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci */;
USE `utile_db`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: utile_db
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.28-MariaDB

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
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` VALUES (1,'pepe'),(2,'pepe');
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `apellido` varchar(100) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `avatar_id` int(10) unsigned DEFAULT NULL,
  `estado_civil` int(10) unsigned DEFAULT '0',
  `fecha_nacimiento` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'lala','lala@lala.com','$2y$10$PZuSW1cXU7TWBMwEa3mGcOEzvBJzqFLdXDzPB5gGvRO2vD.LqtRoC',NULL,NULL,NULL,0,'0000-00-00 00:00:00',NULL,NULL),(2,'lala','lala@lala.com','$2y$10$5CvKddfhkGRsXQe4QLxBkeYokhYCHovwVVHZjmIhWioOvigqV26PK','pepe','sarasa',NULL,0,'0000-00-00 00:00:00',NULL,NULL),(3,'pepe','pepe1@pepe.com','$2y$10$scEkgtjVJGu0NZIkEknt5.sz88ANZtygSH.QBn896o4Lxn/DoukA2','pepe','sarasa',NULL,0,'0000-00-00 00:00:00',NULL,NULL),(4,'miguel11','miguel11@mail.com','$2y$10$My1Jz8/N5srKP6iAriRWyeoXt1q4MUd13NIARqTdyD.mHNZTXxQXG','pepe','sarasa',NULL,0,'0000-00-00 00:00:00',NULL,NULL),(5,'nuevo01','nuevo@mail.com','$2y$10$UaLzT7vpLiIxPuZmqRaNZeW7RNx1iZz509kbjAQ/807MiwiHxBmMG','pepe','sarasa',NULL,0,'0000-00-00 00:00:00',NULL,NULL),(6,'nuevo01','nuevo@mail.com','$2y$10$4w4ysRUfWM4m/owCUuj0oeVOoYuq.DiRDBE/YUPKx.Ho4ACNzZ9pi','pepe','sarasa',1,0,'0000-00-00 00:00:00',NULL,NULL),(7,'carlitos','carlitos@mail.com','$2y$10$J5/LQfozhN28hcouMZMNQ.7H.oR1.UKcYqPloc6RHw9eEgZSXSFim','pepe','sarasa',1,1,'0000-00-00 00:00:00',NULL,NULL),(8,'otronuevo','otronuevo@mail.com','$2y$10$.FHVuZCloNCee3CpFluOKOOwVc3dC7Re35wdqEheMqGXG6OCTdEHO','pepe','sarasa',1,1,'0000-00-00 00:00:00',NULL,NULL),(9,'ultimo','ultimo@mail.com','$2y$10$ebPVDVsJ57rxio46ek0YKOHQsqkzh0/z4J4nf/Fqt/e21IZoxuemm','pepe','sarasa',1,1,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `avatar_id` int(10) unsigned DEFAULT NULL,
  `fecha_nacimiento` datetime NOT NULL,
  `estado_civil` int(10) unsigned DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'nicolas','Nicolas',NULL,'nicolasriccardi_94@hotmail.com','$2y$10$lBIglxwuz1EjrGHS1FuNqeDldM3gZzdIOKZD3YG7hyH.aN1c4277y',NULL,'0000-00-00 00:00:00',0,'2017-11-07 15:13:37','0000-00-00 00:00:00'),(2,'Gustavo','Gustavo',NULL,'gustavo@mail.com','$2y$10$yvqMjNhKcNB5LUhylXwEPOcAjdYu/0N4ukU6iawaANfoVQEKfbp22',NULL,'0000-00-00 00:00:00',0,'2017-11-07 15:13:37','0000-00-00 00:00:00'),(3,'Gaby','Gabriel',NULL,'gabriel@mail.com','$2y$10$EeWruAKuSBAk16gF.iPRk.zVwEzNNuY18QwzsuNm6SL8CsLud18eC',NULL,'0000-00-00 00:00:00',0,'2017-11-07 15:13:37','0000-00-00 00:00:00'),(5,'mriera','miguel riera',NULL,'miguel@mail.com','$2y$10$ZkbScEWMSrA.JdC2Ue.HTe1/BQsrZv.e6vbSjj/ekzmlXTEbMDxZu',NULL,'0000-00-00 00:00:00',0,'2017-11-07 15:13:37','0000-00-00 00:00:00'),(8,'ultimo','pepe','sarasa','ultimo@mail.com','$2y$10$QR.DbQCRt85/VPprfj3PS.CElw59MZStRtts9QYlbY2/L7D4l1EIu',1,'0000-00-00 00:00:00',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,'prueba01','pepe','sarasa','prueba01@mail.com','$2y$10$e3d2ZBNjRR0EGOh2zRUolempJ8Sv/tSd2RnA0zaJmZewqeQILbSym',1,'0000-00-00 00:00:00',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'utile_db'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-17 10:58:59
