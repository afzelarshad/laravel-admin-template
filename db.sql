-- MySQL dump 10.13  Distrib 8.0.37, for Linux (x86_64)
--
-- Host: localhost    Database: laravel_admin_panel_v2
-- ------------------------------------------------------
-- Server version	8.0.37-0ubuntu0.22.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `doctor_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` decimal(8,2) DEFAULT NULL,
  `commission_percentage` decimal(8,2) DEFAULT NULL,
  `total_commission` double DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctors`
--

LOCK TABLES `doctors` WRITE;
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
INSERT INTO `doctors` VALUES (1,'Paki Pickett','111111111111',112.00,122.12,14893.7452,'2024-07-24 04:01:18','2024-07-11 04:22:52','2024-07-24 04:01:18'),(2,'Bevis Guzman','11111111111111111',11.00,11.00,500.95,NULL,'2024-07-11 04:23:02','2024-07-24 07:10:32'),(3,'Herrod Moran','222222222222222',1.00,3.00,0,NULL,'2024-07-23 03:17:26','2024-07-23 03:17:26'),(4,'Afzel Arshad','3810189089111',3.50,15.00,2000.85,NULL,'2024-07-23 07:48:16','2024-07-24 04:00:02'),(5,'Arden Ferrell','33333333333333',2.00,22.00,0,NULL,'2024-07-24 07:29:14','2024-07-24 07:29:14');
/*!40000 ALTER TABLE `doctors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
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
-- Table structure for table `labtests`
--

DROP TABLE IF EXISTS `labtests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `labtests` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `test_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `labtests`
--

LOCK TABLES `labtests` WRITE;
/*!40000 ALTER TABLE `labtests` DISABLE KEYS */;
INSERT INTO `labtests` VALUES (1,'Mikayla Ramsey',531.00,'2024-07-24 04:01:13','2024-07-11 04:32:55','2024-07-24 04:01:13'),(2,'Stone Pope',853.00,NULL,'2024-07-11 04:32:59','2024-07-11 04:32:59'),(3,'Hoyt Blackburn',26.00,NULL,'2024-07-22 04:14:38','2024-07-22 04:14:38'),(4,'Yoshio Sykes',626.00,NULL,'2024-07-22 04:14:43','2024-07-22 04:14:43'),(5,'Hollee Whitaker',961.00,NULL,'2024-07-22 04:14:49','2024-07-22 04:14:49'),(6,'Blood Test',115.00,NULL,'2024-07-23 07:47:32','2024-07-23 07:47:32'),(7,'Lungs Test',5000.00,NULL,'2024-07-23 07:47:51','2024-07-23 07:47:51');
/*!40000 ALTER TABLE `labtests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_04_04_103006_create_settings_table',1),(6,'2023_05_25_133107_create_permission_tables',1),(7,'2024_05_10_104041_create_modules_table',1),(8,'2024_05_10_104339_create_module_schemas_table',1),(9,'2024_05_11_213335_create_pages_table',1),(10,'2024_07_11_091920_create_testreports_table',2),(11,'2024_07_11_092210_create_doctors_table',3),(12,'2024_07_11_093225_create_labtests_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(2,'App\\Models\\User',2),(1,'App\\Models\\User',3);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `module_schemas`
--

DROP TABLE IF EXISTS `module_schemas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `module_schemas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `module_id` bigint unsigned NOT NULL,
  `col_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `col_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `col_length` int NOT NULL,
  `is_nullable` tinyint NOT NULL,
  `is_index` tinyint NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `module_schemas_module_id_foreign` (`module_id`),
  CONSTRAINT `module_schemas_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `module_schemas`
--

LOCK TABLES `module_schemas` WRITE;
/*!40000 ALTER TABLE `module_schemas` DISABLE KEYS */;
INSERT INTO `module_schemas` VALUES (3,2,'patient_name','string',40,1,0,NULL,'2024-07-11 04:19:20','2024-07-11 04:19:20'),(4,2,'lab_test','string',0,1,0,NULL,'2024-07-11 04:19:20','2024-07-11 04:19:20'),(5,2,'referral','string',0,1,0,NULL,'2024-07-11 04:19:20','2024-07-11 04:19:20'),(6,2,'telephone','string',0,1,0,NULL,'2024-07-11 04:19:20','2024-07-11 04:19:20'),(7,2,'total_price','integer',0,1,0,NULL,'2024-07-11 04:19:20','2024-07-11 04:19:20'),(8,3,'doctor_name','string',50,1,0,NULL,'2024-07-11 04:22:10','2024-07-11 04:22:10'),(9,3,'id_card','string',0,1,0,NULL,'2024-07-11 04:22:10','2024-07-11 04:22:10'),(10,3,'experience','decimal',0,1,0,NULL,'2024-07-11 04:22:10','2024-07-11 04:22:10'),(11,3,'commission_percentage','decimal',0,1,0,NULL,'2024-07-11 04:22:10','2024-07-11 04:22:10'),(12,3,'total_commission','double',0,1,0,NULL,'2024-07-11 04:22:10','2024-07-11 04:22:10'),(13,4,'test_name','string',40,1,0,NULL,'2024-07-11 04:32:25','2024-07-11 04:32:25'),(14,4,'price','decimal',0,1,0,NULL,'2024-07-11 04:32:25','2024-07-11 04:32:25');
/*!40000 ALTER TABLE `module_schemas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modules` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `controller_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `run_migration` tinyint NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modules`
--

LOCK TABLES `modules` WRITE;
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` VALUES (2,'testreports','testreport','Testreport','TestreportController',1,NULL,'2024-07-11 04:19:20','2024-07-11 04:19:20'),(3,'doctors','doctor','Doctor','DoctorController',1,NULL,'2024-07-11 04:22:10','2024-07-11 04:22:10'),(4,'labtests','labtest','Labtest','LabtestController',1,NULL,'2024-07-11 04:32:25','2024-07-11 04:32:25');
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'user-list','web','2023-05-25 09:04:28','2023-05-25 09:04:28'),(2,'user-update','web','2023-05-25 09:04:28','2023-05-25 09:04:28'),(3,'user-add','web','2023-05-25 09:04:28','2023-05-25 09:04:28'),(4,'role-list','web','2023-05-25 09:04:28','2023-05-25 09:04:28'),(5,'role-update','web','2023-05-25 09:04:28','2023-05-25 09:04:28'),(6,'role-add','web','2023-05-25 09:04:28','2023-05-25 09:04:28');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Admin','web','2024-07-11 03:22:43','2024-07-11 03:22:43'),(2,'User','web','2024-07-11 03:22:43','2024-07-11 03:22:43');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'SITE_NAME','Master Panel',NULL,'2024-07-11 03:22:43','2024-07-11 03:22:43'),(2,'SITE_URL','http://localhost',NULL,'2024-07-11 03:22:43','2024-07-11 03:22:43'),(3,'TAGLINE','Awesome tabline for your panel',NULL,'2024-07-11 03:22:43','2024-07-11 03:22:43');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testreports`
--

DROP TABLE IF EXISTS `testreports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testreports` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_test` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` int DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testreports`
--

LOCK TABLES `testreports` WRITE;
/*!40000 ALTER TABLE `testreports` DISABLE KEYS */;
INSERT INTO `testreports` VALUES (1,'Melyssa Stein','Dolor aut et ea nost','Modi ex voluptate od','+92 (306) 475-8254',904,'2024-07-24 01:57:57','2024-07-11 04:20:04','2024-07-24 01:57:57'),(2,'Emi Page','Duis sunt rerum irur','Dolorum voluptatem','+92 (306) 475-8254',436,'2024-07-22 08:16:13','2024-07-11 04:20:11','2024-07-22 08:16:13'),(3,'Ryder Mercado','Stone Pope','Paki Pickett','+92 (306) 475-8254',336,'2024-07-22 08:16:13','2024-07-22 02:52:35','2024-07-22 08:16:13'),(4,'Ria House','Mikayla Ramsey,Stone Pope','Paki Pickett','+92 (306) 475-8254',876,'2024-07-24 01:57:57','2024-07-22 02:52:45','2024-07-24 01:57:57'),(5,'Zelenia Peters','3,5','1','+92 (306) 475-8254',0,'2024-07-24 01:57:57','2024-07-22 08:07:32','2024-07-24 01:57:57'),(6,'Vaughan Tyler','3','4','+92 (306) 475-8254',0,NULL,'2024-07-22 08:08:16','2024-07-24 04:40:59'),(7,'Brody Payne','2,3','4','+92 (306) 475-8254',0,NULL,'2024-07-23 03:16:37','2024-07-24 02:45:31'),(8,'Alma Potts','2,3,4,5','2','+92 (306) 475-8254',0,NULL,'2024-07-23 03:17:07','2024-07-23 03:17:07'),(9,'September Morrison','3,4','3','+92 (306) 475-8254',0,NULL,'2024-07-23 03:17:55','2024-07-23 03:17:55'),(10,'Hyatt Middleton','2,4','2','+92 (306) 475-8254',0,NULL,'2024-07-23 07:47:08','2024-07-23 07:47:08'),(11,'Test Patient','6','4','03064758254',0,NULL,'2024-07-23 07:48:49','2024-07-23 07:48:49'),(12,'test patient','7','4','030647582544',0,NULL,'2024-07-23 07:49:23','2024-07-23 07:49:23'),(13,'Dean Dunn','[\"2\",\"4\",\"5\"]','2','+92 (306) 475-8254',0,'2024-07-24 02:19:04','2024-07-24 01:57:46','2024-07-24 02:19:04'),(14,'Upton Solomon','1,2','4','+92 (306) 475-8254',1384,NULL,'2024-07-24 02:20:27','2024-07-24 02:20:27'),(15,'Macy Cruz','3,5,6,7','1','+92 (306) 475-8254',6102,'2024-07-24 07:30:46','2024-07-24 03:59:53','2024-07-24 07:30:46'),(16,'Philip Rivas','2,3,6,7','1','+92 (306) 475-8254',5994,'2024-07-24 07:30:46','2024-07-24 03:59:57','2024-07-24 07:30:46'),(17,'Gil Chandler','2,3,5,7','4','+92 (306) 475-8254',6840,NULL,'2024-07-24 04:00:02','2024-07-24 04:00:02'),(18,'Lyle Herrera','4','2','+92 (306) 475-8254',626,NULL,'2024-07-24 07:10:32','2024-07-24 07:10:32');
/*!40000 ALTER TABLE `testreports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` int DEFAULT NULL,
  `two_factor_enable` tinyint NOT NULL DEFAULT '1',
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_expires_at` datetime DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrator','admin@gmail.com',NULL,'$2y$10$IW7inK6lDq7cIqWY84OHtOn8Ne4.sb7XQpQVHaHvYKXoCXauBw9DS',NULL,0,NULL,NULL,NULL,'WmZWCmNZduQYWIcTwp59ie0gALJL9iGZqboc72ZxX3Y57TSUVu7MaQqVkYcs',NULL,'2024-07-11 03:22:43','2024-07-11 03:22:43'),(2,'New User','new_user@gmail.com',NULL,'$2y$10$e6OY2b.Nt4KiSiA5FzU/ceRjjLBxIHhJhho5h..b2BHvgrS6zKDNa',NULL,0,NULL,NULL,NULL,NULL,NULL,'2024-07-11 03:22:43','2024-07-11 03:22:43'),(3,'Sloane Monroe','afzal.arshad@hellobizmia.com',NULL,'$2y$10$GSycTk45P8b5ttTK45pS0uKlb0kdtgxL1we3YTFk915rfLbtdGXo.',NULL,0,NULL,NULL,NULL,NULL,NULL,'2024-07-22 03:52:42','2024-07-22 03:52:42');
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

-- Dump completed on 2024-07-24 18:04:48
