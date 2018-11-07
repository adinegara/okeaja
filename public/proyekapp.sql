-- MySQL dump 10.16  Distrib 10.1.31-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: proyekapp
-- ------------------------------------------------------
-- Server version	10.1.31-MariaDB

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
-- Current Database: `proyekapp`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `proyekapp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `proyekapp`;

--
-- Table structure for table `accs`
--

DROP TABLE IF EXISTS `accs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accs` (
  `id_acc` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `submit_id` int(10) unsigned NOT NULL,
  `status_acc` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_acc`),
  KEY `accs_submit_id_foreign` (`submit_id`),
  CONSTRAINT `accs_submit_id_foreign` FOREIGN KEY (`submit_id`) REFERENCES `submits` (`id_submit`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accs`
--

LOCK TABLES `accs` WRITE;
/*!40000 ALTER TABLE `accs` DISABLE KEYS */;
INSERT INTO `accs` VALUES (1,1,'No','2018-11-03 06:48:12','2018-11-03 09:33:00'),(2,5,'Yes','2018-11-04 00:19:15','2018-11-04 00:19:15');
/*!40000 ALTER TABLE `accs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategoris`
--

DROP TABLE IF EXISTS `kategoris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategoris` (
  `id_kategori` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nama` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategoris`
--

LOCK TABLES `kategoris` WRITE;
/*!40000 ALTER TABLE `kategoris` DISABLE KEYS */;
INSERT INTO `kategoris` VALUES (1,'Pantai','2018-11-03 23:03:16','2018-11-03 23:03:16'),(2,'Gunung','2018-11-03 23:03:25','2018-11-03 23:03:25'),(3,'Bukit','2018-11-03 23:03:33','2018-11-03 23:03:33'),(4,'Hutan','2018-11-03 23:03:45','2018-11-03 23:03:45'),(5,'Situs Sejarah','2018-11-03 23:03:56','2018-11-03 23:03:56'),(6,'Air Terjun','2018-11-03 23:04:08','2018-11-03 23:04:08'),(7,'Desa Wisata','2018-11-03 23:04:19','2018-11-03 23:04:19'),(8,'Waduk','2018-11-03 23:04:29','2018-11-03 23:04:29'),(9,'Museums','2018-11-03 23:04:45','2018-11-04 11:46:19');
/*!40000 ALTER TABLE `kategoris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_10_30_171611_create_kategoris_table',1),(4,'2018_10_31_070526_create_wilayahs_table',1),(5,'2018_11_01_125212_drop_column_desa_from_wilayahs',1),(6,'2018_11_01_132759_create_roles_table',1),(7,'2018_11_01_133028_create_role_user_table',1),(9,'2018_11_03_044356_create_submits_table',2),(13,'2018_11_03_062323_add_nama_objek_to_submits',3),(15,'2018_11_03_101457_create_accs_table',4),(16,'2018_11_04_053433_create_objeks_table',5),(18,'2018_11_07_023430_create_table_role_user',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objeks`
--

DROP TABLE IF EXISTS `objeks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `objeks` (
  `id_objek` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `acc_id` int(10) unsigned NOT NULL,
  `nama_objek` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` int(10) unsigned NOT NULL,
  `wilayah_id` int(10) unsigned NOT NULL,
  `htm` int(11) NOT NULL,
  `jarakKm` int(11) NOT NULL,
  `buka` time NOT NULL,
  `tutup` time NOT NULL,
  `deskripsi` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_objek`),
  KEY `objeks_acc_id_foreign` (`acc_id`),
  KEY `objeks_kategori_id_foreign` (`kategori_id`),
  KEY `objeks_wilayah_id_foreign` (`wilayah_id`),
  CONSTRAINT `objeks_acc_id_foreign` FOREIGN KEY (`acc_id`) REFERENCES `accs` (`id_acc`),
  CONSTRAINT `objeks_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id_kategori`),
  CONSTRAINT `objeks_wilayah_id_foreign` FOREIGN KEY (`wilayah_id`) REFERENCES `wilayahs` (`id_wilayah`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objeks`
--

LOCK TABLES `objeks` WRITE;
/*!40000 ALTER TABLE `objeks` DISABLE KEYS */;
INSERT INTO `objeks` VALUES (1,2,'Pantai Jungwok',1,2,10000,75,'00:00:00','23:59:00','Dekat pantai nglambor','2018-11-04 00:21:49','2018-11-04 00:38:45');
/*!40000 ALTER TABLE `objeks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  KEY `role_user_user_id_foreign` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (1,2,7,NULL,NULL),(2,1,4,NULL,NULL),(3,1,12,NULL,NULL),(4,1,13,NULL,NULL);
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'user','Ordinary User','2018-11-01 07:02:09','2018-11-01 07:02:09'),(2,'admin','A Web Master','2018-11-01 07:02:09','2018-11-01 07:02:09');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `submits`
--

DROP TABLE IF EXISTS `submits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `submits` (
  `id_submit` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `nama_objek` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `htm` int(11) DEFAULT NULL,
  `buka` time DEFAULT NULL,
  `tutup` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_submit`),
  KEY `submits_user_id_foreign` (`user_id`),
  CONSTRAINT `submits_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `submits`
--

LOCK TABLES `submits` WRITE;
/*!40000 ALTER TABLE `submits` DISABLE KEYS */;
INSERT INTO `submits` VALUES (1,4,'The World Landmarks Merapi Park','kilometer 25 Jalan Kaliurang, Desa Pakembinagun, Kabupaten Sleman.',15000,'08:00:00','17:30:00','2018-11-03 00:01:13','2018-11-03 00:01:13'),(2,4,'Test Test','Test',0,'07:45:00','17:00:00','2018-11-03 00:46:25','2018-11-03 00:46:42'),(4,5,'Gagaga','Test',0,'08:00:00','20:12:00','2018-11-03 22:32:10','2018-11-03 22:32:10'),(5,6,'Pantai Jungwok','Desa Jepitu, Girisubo, Gunung Kidul',10000,'00:00:00','12:00:00','2018-11-04 00:18:26','2018-11-04 00:18:26'),(6,4,'guyon mas min hehe','nggak tau ah',0,'00:00:00','16:00:00','2018-11-04 02:01:09','2018-11-04 02:01:09'),(7,4,'guyon mas min hehe 2','nggak tau ah 2',5000,'05:00:00','17:00:00','2018-11-04 02:02:45','2018-11-04 02:02:45'),(8,7,'Testt','??',0,'05:00:00','19:00:00','2018-11-04 18:16:00','2018-11-04 18:16:00'),(9,7,'test 2','2',2,'11:11:00','23:22:00','2018-11-04 18:21:29','2018-11-04 18:21:29'),(11,4,'test3','3',3,'03:33:00','22:00:00','2018-11-04 18:23:38','2018-11-04 18:23:38'),(12,10,'Pantai Parangtritis','Bantul',5000,'00:00:00','12:00:00','2018-11-04 22:51:39','2018-11-04 22:51:39');
/*!40000 ALTER TABLE `submits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'user Name','user@example.com',NULL,'$2y$10$0goYiKBIVTDEFB3Cy8TyeunM0Pr59zZtMTehAIXMucomXZAhRj6le',NULL,'2018-11-01 07:02:09','2018-11-01 07:02:09'),(2,'admin Name','admin@example.com',NULL,'okeaja',NULL,'2018-11-01 07:02:09','2018-11-01 07:02:09'),(3,'Ziel','ziel@gmail.com',NULL,'$2y$10$OBL8FMZB8c13Klmhz4gWFudWvdPAqJk/Z5WhzuejsePNcrU9hb5fq','APmgtErZY8L3qKp48kwP0KAVIli7ccXTm9AHxAkMCJ5D120S0hZoGJledm00','2018-11-01 07:23:10','2018-11-01 10:15:56'),(4,'Arne','arne@mail.com',NULL,'$2y$10$6i/kaea2sMDtkLwBffCDg.5J9flZUPWZ.nhisJpW6GPWsQLeXv4HK','5UNuY6qZkwaDCFOM9DuJwSs3x7xrmKP5OjFKQDdKT49sOXtJ0RN3FXNL42ce','2018-11-01 10:15:03','2018-11-01 10:15:03'),(5,'bangros','bangros@mail.com',NULL,'$2y$10$4.4nsabbu0cmv2qSzOVjhO4tChaPp/S4Z94nEO97oRv1Ft05pYcxu','Upxpq9ez2o9lYOJegYt9ntFGTU3ilc5qfD7mURKhsDHNtl6AKQYmBb2mzhso','2018-11-03 21:30:06','2018-11-03 21:30:06'),(6,'Cupi','cupi.supriyati07@gmail.com',NULL,'$2y$10$XWrXGePq361hFwvgdQoWaunOec7WiCbMuBMsOt5JpTq/g6QFMrhx2','XwQyHya9E3x9K7YQssewBepl2PNimkQBfYv0g4jklLRDn2wpQkucmuHSgsnt','2018-11-03 23:38:06','2018-11-03 23:38:06'),(7,'okeaja','okeaja@mail.com',NULL,'$2y$10$4CpBx6RulhelUW/lDQYJiOPzCnzACL7B6kFv0dy/MXyorTi6pz2Dq','HavnWEZYWwCnulsVr3OxF62BRRCqIEgMWynv6jhHutXP2xVLHs1Th0WgRJ0k','2018-11-04 02:19:59','2018-11-04 02:19:59'),(8,'user1','user1@mail.com',NULL,'$2y$10$UsEgcEXeAeLeQmPRjh3NbOKIUaNlcvDdNXbELCYLN3YUgL1zDcpuS','CFeHm7gmPM3F8B4ZsC8HVlCw21313ge8XzzqDJIzjWftbKIo2jixFthWJO6x','2018-11-04 09:07:24','2018-11-04 09:07:24'),(10,'anisya','anisya@gmail.com',NULL,'$2y$10$.8IFWoZNXSvkwkChlQflv.UbSq57xtL.v4ndbSZ/RwhilbIJEuega','uQOwPnGdbzeVoeG7KZuKOwY3YBdeuqoAsLwqSdr6bO85TMAEJ4YHxwMDxbtR','2018-11-04 22:49:14','2018-11-04 22:49:14'),(11,'ro','ro@mail.com',NULL,'$2y$10$nf4zufR1iCP6alj46l58UusR2k3AFyR2jcFVrvuW3JZLD2o3F0DVG','5EGgB2dR8LmK5TcJLImIYSoq54kHCOsPgjXkfl33OfoIy7Ui51aviVZYXOM8','2018-11-06 02:06:48','2018-11-06 02:06:48'),(12,'user123','user123@mail.com',NULL,'$2y$10$zLnxi0iWcdfJq0ZNnSBRO.aEYbWKSjs14K4J8tskMJlLyvuY5Mkka','1HwjlQ1fy9sP7wc4hyb71jEnX2OnqTZU73UEHDQ0kfMpfBxvzxSNS83XQALH','2018-11-06 19:50:11','2018-11-06 19:50:11'),(13,'ro','ro@live.com',NULL,'$2y$10$W22mEI5b4CQHQElKcoqgoeRiISRtubFSCi3ZFdC6gKD391BdGmD/G','DqLNN2mZkpMbvod7JSxE9lkWtfixZoBOMILUTDXFbU0lp1CoSMGM9Wq1SJdr','2018-11-06 20:15:09','2018-11-06 20:15:09');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wilayahs`
--

DROP TABLE IF EXISTS `wilayahs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wilayahs` (
  `id_wilayah` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_wilayah`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wilayahs`
--

LOCK TABLES `wilayahs` WRITE;
/*!40000 ALTER TABLE `wilayahs` DISABLE KEYS */;
INSERT INTO `wilayahs` VALUES (1,'DIY','Gunung Kidul','Tepus','Terdapat pantai Nglambor','2018-11-03 23:07:31','2018-11-03 23:07:31'),(2,'DIY','Gunung Kidul','Girisubo','Pantai Jungwok','2018-11-03 23:08:20','2018-11-03 23:08:20'),(3,'DIY','Gunung Kidul','Saptosari','Pantai Widodaren','2018-11-03 23:08:50','2018-11-03 23:08:50');
/*!40000 ALTER TABLE `wilayahs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-07 17:20:40
