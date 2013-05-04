-- MySQL dump 10.13  Distrib 5.5.29, for Linux (x86_64)
--
-- Host: localhost    Database: db1
-- ------------------------------------------------------
-- Server version	5.5.29

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
-- Table structure for table `bio`
--

DROP TABLE IF EXISTS `bio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bio` (
  `band_id` int(11) NOT NULL,
  `band_name` varchar(100) NOT NULL,
  `band_members` varchar(1000) NOT NULL,
  `band_bio` varchar(10000) DEFAULT NULL,
  `band_location` varchar(100) NOT NULL,
  `band_email` varchar(100) DEFAULT NULL,
  `band_facebook` varchar(100) DEFAULT NULL,
  `band_myspace` varchar(100) DEFAULT NULL,
  `band_twitter` varchar(100) DEFAULT NULL,
  `band_picture` varchar(1000) DEFAULT NULL,
  `song_1` varchar(100) DEFAULT NULL,
  `song_2` varchar(100) DEFAULT NULL,
  `song_3` varchar(100) DEFAULT NULL,
  `song_4` varchar(100) DEFAULT NULL,
  `song_5` varchar(100) DEFAULT NULL,
  `song_6` varchar(100) DEFAULT NULL,
  `song_7` varchar(100) DEFAULT NULL,
  `song_8` varchar(100) DEFAULT NULL,
  `song_9` varchar(100) DEFAULT NULL,
  `song_10` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bio`
--

LOCK TABLES `bio` WRITE;
/*!40000 ALTER TABLE `bio` DISABLE KEYS */;
INSERT INTO `bio` VALUES (1,'Red Hot Chili Peppers','Anthony Kiedis, Flea, Josh Klinghoffer, Chad Smith','Bio goes here.','Los Angeles, CA','rhcp@gmail.com','http://www.facebook.com/ChiliPeppers','http://www.myspace.com/redhotchilipeppers','http://www.twitter.com/ChiliPeppers','http://images.wikia.com/music/images/3/3d/RHCP-logo.jpeg','http://www.youtube.com/watch?v=lwlogyj7nFE','http://www.youtube.com/watch?v=YlUKcNNmywk','http://www.youtube.com/watch?v=fmXLzY8kbYA',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `bio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_location` varchar(100) NOT NULL,
  `event_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `event_description` varchar(10000) DEFAULT NULL,
  `event_price` varchar(10) DEFAULT NULL,
  `band_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (13,'RHCP show @Lollapalooza','Chicago, Il','2012-08-03','12:30:00','RCHP performance at Lollapalooza','$50.00',1);
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `band_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'rhcp@gmail.com','rhcp4','california');
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

-- Dump completed on 2013-05-04 22:45:25
