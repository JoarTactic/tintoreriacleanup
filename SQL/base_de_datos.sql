-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: lavanderiacleanup
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `catalogo_estatus`
--

DROP TABLE IF EXISTS `catalogo_estatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `catalogo_estatus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb3 COMMENT='Catálogo de estatus';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catalogo_estatus`
--

LOCK TABLES `catalogo_estatus` WRITE;
/*!40000 ALTER TABLE `catalogo_estatus` DISABLE KEYS */;
INSERT INTO `catalogo_estatus` VALUES (1,'Registrado'),(2,'Lavando'),(3,'Planchando'),(4,'Listo para entregar'),(5,'Entregado y cobrado'),(100,'Cancelado');
/*!40000 ALTER TABLE `catalogo_estatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Identificador',
  `nombreCompleto` varchar(200) NOT NULL COMMENT 'Nombre completo del cliente',
  `correo` varchar(320) NOT NULL COMMENT 'email',
  `telefono` varchar(10) NOT NULL COMMENT 'teléfono',
  `eliminado` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 activo, 0 es eliminado',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombreCompleto_UNIQUE` (`nombreCompleto`),
  UNIQUE KEY `correo_UNIQUE` (`correo`),
  UNIQUE KEY `telefono_UNIQUE` (`telefono`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COMMENT='Catálogo de clientes que llevan ropa a lavar o planchar';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Ismael López','ilopez@uaa.com','7441111111',0),(2,'Juan Peréz','jpineda.berrun@gmail.com','7441309271',0);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empleados` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Identificador',
  `nombreCompleto` varchar(200) NOT NULL COMMENT 'Nombre completo',
  `telefono` varchar(10) NOT NULL COMMENT 'Telefono',
  `correo` varchar(320) NOT NULL,
  `eliminado` tinyint(1) NOT NULL DEFAULT '1',
  `estatus` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombreCompleto_UNIQUE` (`nombreCompleto`),
  UNIQUE KEY `telefono_UNIQUE` (`telefono`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COMMENT='Catálogo de empleados';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES (1,'Benito H','7441819562','micorreo@micorreo.com',1,1),(2,'Ismael Castro','9584625184','micorreo@micorreo.mx',1,0);
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordenes`
--

DROP TABLE IF EXISTS `ordenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ordenes` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Identificador',
  `idEmpleado` int NOT NULL COMMENT 'Identificador del empleado que esta levantando la orden',
  `idCliente` int NOT NULL COMMENT 'Identificador del cliente',
  `idEstatus` int NOT NULL DEFAULT '1' COMMENT 'Estatus 1 es igual a registrado',
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de registro de la orden',
  `montoTotal` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT 'Monto total de lo que se cobrara al cliente',
  `observaciones` varchar(500) DEFAULT NULL COMMENT 'Observaciones generales',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `anticipo` decimal(12,2) DEFAULT '0.00',
  `fechaEntregado` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Guarda el encabezado de la orden';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordenes`
--

LOCK TABLES `ordenes` WRITE;
/*!40000 ALTER TABLE `ordenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `ordenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordenes_lavado`
--

DROP TABLE IF EXISTS `ordenes_lavado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ordenes_lavado` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Identificador',
  `idOrden` int NOT NULL COMMENT 'ID de la orden',
  `idPrenda` int NOT NULL COMMENT 'ID de la prenda',
  `aplicaLavado` tinyint(1) NOT NULL DEFAULT '0',
  `precioPorPrenda` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT 'Precio individual por prenda',
  `precioPorKilo` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT 'Precio por kilogramo',
  `piezas` varchar(45) NOT NULL DEFAULT '1' COMMENT 'Priezas lavadas',
  `kilos` varchar(45) NOT NULL DEFAULT '0.5' COMMENT 'Kilogramos de ropa que dejo el cliente',
  `tipoCobro` int NOT NULL DEFAULT '1' COMMENT '1 cobro por pieza, 2 cobro por kilogramo',
  `subTotalLavado` decimal(12,2) NOT NULL COMMENT 'Sub total de lo que se cobra por lavado',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Almacena las prendas que se lavaron en una orden';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordenes_lavado`
--

LOCK TABLES `ordenes_lavado` WRITE;
/*!40000 ALTER TABLE `ordenes_lavado` DISABLE KEYS */;
/*!40000 ALTER TABLE `ordenes_lavado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordenes_planchado`
--

DROP TABLE IF EXISTS `ordenes_planchado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ordenes_planchado` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idOrden` int NOT NULL COMMENT 'ID de la orden',
  `idPrenda` int DEFAULT NULL COMMENT 'ID de la prenda',
  `aplicaPlanchado` tinyint(1) NOT NULL DEFAULT '0',
  `precioPlanchado` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT 'Precio por pieza planchada',
  `piezasPlanchadas` varchar(45) NOT NULL DEFAULT '0' COMMENT 'Número de prendas planchadas',
  `tipoCobroPlanchado` int NOT NULL DEFAULT '1' COMMENT '1 Si se cobro normal, o 6 por media docena o 12 por docena',
  `subTotalPlanchado` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT 'Sub total del cuanto se cobro',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Almacena las prendas que se plancharon en una orden';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordenes_planchado`
--

LOCK TABLES `ordenes_planchado` WRITE;
/*!40000 ALTER TABLE `ordenes_planchado` DISABLE KEYS */;
/*!40000 ALTER TABLE `ordenes_planchado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('jpineda.berrun@uaa.edu.mx','$2y$10$gRjU8u7bSlows4IUo66fROv.rsJ2o6ZPFFNSQUzLfjnj6JIYMVcFu','2023-08-17 19:18:08');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prendas`
--

DROP TABLE IF EXISTS `prendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prendas` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'iDENTIFICADOR',
  `nombre` varchar(200) NOT NULL COMMENT 'Nombre de la prenda',
  `precioPorPrenda` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT 'Precio de lavado',
  `precioPorKilo` decimal(12,2) NOT NULL DEFAULT '0.00',
  `precioPlanchado` decimal(12,2) DEFAULT '0.00',
  `eliminado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COMMENT='Catálogo de prendas y sus precios';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prendas`
--

LOCK TABLES `prendas` WRITE;
/*!40000 ALTER TABLE `prendas` DISABLE KEYS */;
INSERT INTO `prendas` VALUES (1,'Pantalones de mezclilla de hombre',36.00,0.00,0.00,1),(2,'toallas',40.00,120.00,18.00,1),(3,'Vestidos cortos de mujer',28.00,70.00,0.00,1);
/*!40000 ALTER TABLE `prendas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Víctor Arroyo','vicjulian19@gmail.com',NULL,'$2y$10$kE3ajvIISQyA4vbkAERmDeUCORlzRONCgLeboUSJ8DKwiGuUGDNmy','W0yrpHx9cVnLCHdTE4SuJvgifdvgP4koVvQE7IcBjEc7I0kZGHm6fxRlPXBD','2024-12-05 12:08:43','2024-12-05 12:08:43');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-04  7:49:18
