CREATE DATABASE  IF NOT EXISTS `HackU` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `HackU`;
-- MySQL dump 10.13  Distrib 5.6.17, for osx10.6 (i386)
--
-- Host: db.spartanhandshake.xyz    Database: HackU
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Table structure for table `ads`
--

DROP TABLE IF EXISTS `ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ads` (
  `Name` varchar(15) NOT NULL,
  `Product` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `picture` tinyint(1) DEFAULT NULL,
  `Contact` varchar(45) NOT NULL,
  `Amount` varchar(45) NOT NULL,
  `Expiry` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ads`
--

LOCK TABLES `ads` WRITE;
/*!40000 ALTER TABLE `ads` DISABLE KEYS */;
INSERT INTO `ads` VALUES ('Max','Operating System Book','Want to sell a Book',NULL,'3535357357','120','2016-02-17'),('Chris','iPhone 5s','Sell a Phone',NULL,'39729','380','2016-02-26'),('Scott','Lenovo','Sell a Laptop',NULL,'24242','410','2016-02-27');
/*!40000 ALTER TABLE `ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(100) NOT NULL,
  `content` mediumblob,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meetup`
--

DROP TABLE IF EXISTS `meetup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meetup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eventname` varchar(45) NOT NULL,
  `location` varchar(45) DEFAULT NULL,
  `space` varchar(45) DEFAULT NULL,
  `eventdescription` varchar(45) DEFAULT NULL,
  `startdate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meetup`
--

LOCK TABLES `meetup` WRITE;
/*!40000 ALTER TABLE `meetup` DISABLE KEYS */;
INSERT INTO `meetup` VALUES (13,'home','house','33','hpmw','03/21/2016 12:00 AM'),(14,'Soccer game','Virginia beach sports field','10','It\'s gonna be a great day lets go and have so','02/20/2016 1:00 PM'),(15,'Soccer game','Virginia beach sports field','10','It\'s gonna be a great day lets go and have so','02/20/2016 1:00 PM'),(16,'Soccer game','Virginia beach sports field','10','It\'s gonna be a great day lets go and have so','02/20/2016 1:00 PM'),(17,'Computer Workshop ','Battle field road','5','Fun way to learn technology. Don\'t miss!','02/06/2016 11:00 AM'),(18,'Study Group','Library','6','Come study for the new project in class.','02/10/2016 6:00 PM');
/*!40000 ALTER TABLE `meetup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payforward`
--

DROP TABLE IF EXISTS `payforward`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payforward` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `advice` text,
  `name` varchar(30) NOT NULL,
  `role` varchar(15) DEFAULT NULL,
  `affiliation` varchar(30) NOT NULL,
  `tags` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payforward`
--

LOCK TABLES `payforward` WRITE;
/*!40000 ALTER TABLE `payforward` DISABLE KEYS */;
INSERT INTO `payforward` VALUES (1,'Test Title','Some awesome','test','roles','affiliations','','categories',0),(2,'Acquire skills that are hard to get outs','Your first temptation will be to fill your schedule with courses on fascinating subjects. Do this, but don’t forget to also use university to tech up. For anyone interested in public policy or development, I suggest at two semesters of statistics and economics. Then pick a field of study in development (economics, politics, etc) and pick the hardest courses in each. Other technical skills may come in handy, depending on your interests: international law, political theory, tropical medicine, qualitative methods, finance & accounting, and so forth.','Chris Blattman','citizen','other','Life Lessons','lifestyle',0),(3,'Acquire skills that are hard to get outs','Your first temptation will be to fill your schedule with courses on fascinating subjects. Do this, but don’t forget to also use university to tech up. For anyone interested in public policy or development, I suggest at two semesters of statistics and economics. Then pick a field of study in development (economics, politics, etc) and pick the hardest courses in each. Other technical skills may come in handy, depending on your interests: international law, political theory, tropical medicine, qualitative methods, finance & accounting, and so forth.','Chris Blattman','citizen','other','Life Lessons','lifestyle',0),(4,'Acquire skills that are hard to get outside school.','Your first temptation will be to fill your schedule with courses on fascinating subjects. Do this, but don’t forget to also use university to tech up. For anyone interested in public policy or development, I suggest at two semesters of statistics and economics. Then pick a field of study in development (economics, politics, etc) and pick the hardest courses in each. Other technical skills may come in handy, depending on your interests: international law, political theory, tropical medicine, qualitative methods, finance & accounting, and so forth.','Chris Blattman','citizen','other','Life Lessons','lifestyle',0),(5,'If you don’t have to write a thesis, think twice',' An independent research project can be the perfect capstone to your college years. Sadly, I often see theses that weren’t worth the students’  investment of time and energy. Some people’s time would be better spent acquiring technical skills (see point 1). I used to advise students against a senior thesis if they had the choice. After getting lots of disagreement on my blog, I’ve revised that view; a senior thesis can be a great investment if you are dedicated to a question of interest, want to learn how to research, want to strengthen a relationship with a professor, want practice for graduate school, or want to try out research and writing as a career option. (If you do plan to write a senior essay, here are my advising requirements.)','Chris Blattman','citizen','other','Graduate School','academic',0),(6,'Dear Student: Don\'t Forget Where You Came From','Don’t forget about the city that raised you, the teachers that pushed you, the coaches that helped you grow as a person and the family that molded you. Think of home often, call your parents and keep in touch with your friends from high school. It’s OK to miss home and it’s OK to feel like you’ve out grown it, but have respect for the place that nurtured you.','Janeth Freidman','Alumni','Norfolk State','Life Lessons','General Advice',0),(7,'GPA Isn\'t Everything','You’re not going to graduate and say, “College was the best experience of my life. So glad I stayed inside and got a 4.0.” Work as hard as you can and do your absolute best, but know that that may mean a C or a B or an A-. It doesn’t matter if you tried as hard as you could and went to office hours and came out with a B over an A. Your GPA isn’t everything. You’ll remember your time with friends and the experience you gained through internships and working more than you’ll remember what you got in English II with Professor Whatshisname.','Sandhra Mardhesh','Current Student','Other','Look Around some','Academic',0);
/*!40000 ALTER TABLE `payforward` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_hacku`
--

DROP TABLE IF EXISTS `user_hacku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_hacku` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Major` varchar(50) NOT NULL,
  `FirstName` varchar(15) NOT NULL,
  `LastName` varchar(15) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_hacku`
--

LOCK TABLES `user_hacku` WRITE;
/*!40000 ALTER TABLE `user_hacku` DISABLE KEYS */;
INSERT INTO `user_hacku` VALUES (4,'jp','jp@test.com','81dc9bdb52d04dc20036dbd8313ed055','csc','jp','murray'),(5,'test','test','81dc9bdb52d04dc20036dbd8313ed055','csc','test','test'),(6,'singleemurray','singlee.murray@dominionmarinemedia.com','81dc9bdb52d04dc20036dbd8313ed055','CIS','JP','Murray'),(7,'aamcfall','aaron.mcfall@yahoo.com','81dc9bdb52d04dc20036dbd8313ed055','CSC','Aaron','McFall'),(8,'test','aaron@yah0o.com','81dc9bdb52d04dc20036dbd8313ed055','CSC','test','M.');
/*!40000 ALTER TABLE `user_hacku` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-12 16:29:32
