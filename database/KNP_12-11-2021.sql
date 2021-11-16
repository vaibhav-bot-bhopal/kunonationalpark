-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: blueolz8_kuno_park
-- ------------------------------------------------------
-- Server version	8.0.26

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
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL,
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
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `info` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info`
--

LOCK TABLES `info` WRITE;
/*!40000 ALTER TABLE `info` DISABLE KEYS */;
INSERT INTO `info` VALUES (1,'PLAN YOUR VISIT','Kuno national Park is open to tourist throughout the year except for the monsoon period (1st July to 15th October). However, since the park falls in the tropical area and according to its vegetation and geographical conditions the best time to visit Kuno is October to March, with pleasant weather & comfortable stay.','fa fa-book'),(2,'HOW TO REACH','Kuno National park has three different entrance gates, Ahera, Peepalbawadi and Tiktoli. Tourists can take a flight to Gwalior which is the nearest Airport to any of these gates. Gwalior,Sawai Madhopur, Kota, Jaipur and Jhansi are the nearest stations which provide rail connectivity to Kuno National park.','fa fa-bus'),(3,'\r\nWHAT TO SEE','Kuno has some very interesting spots which will intrigue the tourists coming to this national park. Popularly referred as the Kuno Palpur among local people, Palpur refers to the first village relocated from inside the park which was habilitated near to a small fort know as Palpur Ki Gadhi. Other than this other points of instrests for tourists are Doab Kund, Kuno River, Kanji House, Khemcha Lake, Ker kho and Gravity Pipeline.','fa fa-binoculars'),(4,'STAY','Various kind of accommodation is available for tourist which can be currently booked through DFO Kuno Office. The Rights of reservation of rest houses remains with the CCF Lion Project and DFO Kuno ,Sheopur.  in special circumstances reservation of tourist can be canceled in the interest of Forest & Wildlife Protection & or in case of a tour of VIP like honorable Judges, Ministers, head of the department, etc.','fa fa-home');
/*!40000 ALTER TABLE `info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info_hindi`
--

DROP TABLE IF EXISTS `info_hindi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `info_hindi` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_hindi`
--

LOCK TABLES `info_hindi` WRITE;
/*!40000 ALTER TABLE `info_hindi` DISABLE KEYS */;
INSERT INTO `info_hindi` VALUES (1,'अपनी यात्रा की योजना बनाएं','कुनोराष्ट्रीय अभ्यारण मानसून ऋतु के अलावा पूरे साल पर्यटकों के लिए खुला रहता है | क्यूंकि अभ्यारण उश्नाकतिबंधीय वातावरण एवं जगह मैं स्थित है और उसके भूगोलिक स्थिति के कारण अभ्यारण मैं जाने के लिए अक्टूबर से मार्च महीने का समय सर्वोत्तम है ','fa fa-book'),(2,'कैसे पहुंचा जाये','कुनोराष्ट्रीय अभ्यारण मैंने तीन मुख्य प्रवेश \r\nद्वार हैं- अहेरा, पीपल बावड़ी और टिकटोली | पर्यटक ग्वालियर तक विमान के द्वारा पहुँच सकते हैं जो इन तीनो ही प्रवेश द्वार से निकटतम हवाई अड्डा है | ग्वालियर , सवाई माधोपुर, कोटा, जयपुर और झांसी रेल यात्रा हेतु निकट के शहर हैं ','fa fa-bus'),(3,'क्या देखें','कुनो में कुछ बहुत ही दिलचस्प जगह हैं जो इस राष्ट्रीय उद्यान में आने वाले पर्यटकों को अत्यंत आकर्षित करेंगे। यह अभ्यारण स्थानीय लोगों के बीच लोकप्रिय रूप से कुनो पालपुर के रूप से जाना जाता है| पालपुर दरअसल अभ्यारण के अंदर से स्थानांतरित पहला गाँव था जिसे पार्क से विस्थापित किया गया था और यह गाँव “पालपुर की गढ़ी” के नाम से प्रसिद्ध एक किले के आस पास बसा था | पर्यटकों के लिए डूब कुण्ड , कुनो नदी, कांजी घर, केर खो कुछ दुसरे रुचिकर स्थान भी हैं |','fa fa-binoculars'),(4,'रहना','पर्यटकों के लिए विभिन्न प्रकार के आवास उपलब्ध हैं जिन्हें वर्तमान में DFO कुनो कार्यालय के माध्यम से बुक किया जा सकता है। बाकी घरों के आरक्षण का अधिकार CCF लायन प्रोजेक्ट और DFO कुनो, श्योपुर के पास है। विशेष परिस्थितियों में पर्यटकों का आरक्षण वन और वन्यजीव संरक्षण के हित में रद्द किया जा सकता है या वीआईपी के दौरे जैसे माननीय न्यायाधीशों, मंत्रियों, विभाग के प्रमुख आदि के मामले में रद्द किया जा सकता है।','fa fa-home');
/*!40000 ALTER TABLE `info_hindi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2020_09_22_094736_create_newsenglish_table',2),(6,'2020_09_22_094956_create_newshindi_table',3),(14,'2021_03_15_083200_create_news_table',4),(17,'2021_03_15_084021_create_news_translations_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsenglish`
--

DROP TABLE IF EXISTS `newsenglish`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `newsenglish` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_news_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsenglish`
--

LOCK TABLES `newsenglish` WRITE;
/*!40000 ALTER TABLE `newsenglish` DISABLE KEYS */;
INSERT INTO `newsenglish` VALUES (49,'Oath Taking Ceremony','oath-taking-ceremony','2020-10-01','<p>Kuno Wildlife Division and Forest Division, Sheopur jointly held an Oath taking ceremony at Eco Centre, Sheopur. In this ceremony messages from Hon. Shri Prakash Javdekar, Minister of Environment, Forest and Climate Change, Minister of Information and Broadcasting and Ministry of Heavy Industries and Public Enterprises and Hon. Chief Minister of Madhya Pradesh , Hon. Forest Minister of Madhya Pradesh were read as well as the Oath for protection of forests and wildlife was taken up by the officials present at the ceremony.</p>','1603953563post1.PNG','','2020-10-29 01:09:23','2021-08-07 03:16:52'),(50,'Poem Recetation Competition','poem-recetation-competition','2020-10-02','<p>Taking into consideration all the guidelines issued by the State Government in relation to the ongoing pandemic of COVID-19 , this year Poem Recetation Competition was organized digitally through online Video medium. In this competition Ayati Dhakar of Mother&rsquo;s Pride School, Karahal won the first prize while Kanishka Pironia from Gwalior won the second prize.</p>','1603966425post2.PNG','','2020-10-29 04:43:45','2021-03-06 05:55:29'),(51,'Friends of Tiger Wall Painting Competition','friends-of-tiger-wall-painting-competition','2020-10-03','<p>In every forest range, a group of 7 members was formed for Wall Painting Competition which was held in all forest ranges. In this competition teams from Palpur East Forest Range stood first, Palpur West Forest Range stood second and Budhera Forest Range stood third.</p>','1603966541post3.PNG','','2020-10-29 04:45:41','2021-03-06 05:55:42'),(52,'Magic of Soil Sculpture Competition','magic-of-soil-sculpture-competition','2020-10-04','<p>In every forest range, a group of 5 members was formed for Magic of Soil Sculpture Competitionwhich was held in at forest range level. In this competition teams from Palpur East Forest Range stood first, Moravan West Forest Range stood second and Vijaypur East Forest Range stood third.</p>','1603966766post4.PNG','','2020-10-29 04:49:26','2021-03-06 05:56:25'),(53,'Closing Ceremony','closing-ceremony','2020-10-07','<p>Closing Ceremony for the Wildlife Week Celebrations which were jointly held by Kuno Wildlife Division and Forest Division Sheopur was held at the divisional level. Superintendent of Police, Sheopur were the Chief Guest in the Ceremony. In the ceremony the winners of various competitions held during the wildlife week 2020 were felicitated.</p>','1603966886post5.PNG','','2020-10-29 04:51:26','2021-03-06 05:52:14');
/*!40000 ALTER TABLE `newsenglish` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newshindi`
--

DROP TABLE IF EXISTS `newshindi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `newshindi` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_news_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newshindi`
--

LOCK TABLES `newshindi` WRITE;
/*!40000 ALTER TABLE `newshindi` DISABLE KEYS */;
INSERT INTO `newshindi` VALUES (2,'शपथ ग्रहण समारोह','shapatha-ga-rahanae-sama-ra-ha','2020-10-01','<p>वनमण्डल स्तर पर सामान्य वनमण्डल, श्योपुर एवं कूनो वन्यप्राणी वनमडल, श्योपुर द्वारा संयुक्त रूप से ईको सेन्टर, श्योपुर में शपथ ग्रहण कार्यक्रम का आयोजन किया गया। जिसमें माननीय प्रकाश जावडेकर, मंत्री पर्यावरण, वन एवं जलवायु परिवर्तन, सूचना एवं प्रसारण और भारी उद्योग एवं लोक उद्यम भारत सरकार एवं माननीय मुख्य मंत्री मध्यप्रदेश शासन, माननीय वन मंत्री मध्यप्रदेश शासन के संदेशों का वाचन तथा वन एवं वन्यप्राणी संरक्षण की शपथ ग्रहण की गई। उपवनमण्डल/वनपरिक्षेत्र स्तर पर प्रत्येक वनपरिक्षेत्र मेंवन एवं वन्यप्राणी संरक्षण की शपथ ग्रहण की गई एवं माननीय प्रकाश जावडेकर, मंत्री पर्यावरण, वन एवं जलवायु परिवर्तन, सूचना एवं प्रसारण और भारी उद्योग एवं लोक उद्यम भारत सरकार एवं माननीय मुख्य मंत्री मध्यप्रदेश शासन, माननीय वन मंत्री मध्यप्रदेश शासन के संदेशों का वाचन किया गया।</p>','1603962370post1.PNG','','2020-10-29 03:36:10','2021-08-07 03:12:57'),(3,'कविता पाठ प्रतियोगिता','kavata-patha-paratayagata','2020-10-02','<p>कोविड-19 महामारी के संबंध में राज्य शासन के दिशा-निर्देशों को ध्यान में रखते निर्देशानुसार विडियो के माध्यम से कविता पाठ प्रतियोगिता का आयोजन किया गया। जिसमें कुं. अयाति धाकड़, मदर्स प्राइड स्कूल, कराहल को प्रथम पुरूस्कार एवं कुं. कनिष्का पिरौनियां, ग्वालिर का द्वितीय पुरूस्कार प्रदान किया गया।</p>','1603962550post2.PNG','','2020-10-29 03:39:10','2021-03-07 03:49:50'),(5,'बघासखा दीवार चित्रकला प्रतियोगिता','bghasakha-thavara-catarakal-paratayagata','2020-10-03','<p>प्रत्येक वनपरिक्षेत्र में निर्देशानुसार चित्रकला बनाने हेतु 07 सदस्यों का दल गठित कर चित्रकला प्रतियोगिता का आयोजन वनपरिक्षेत्र स्तर पर किया गया। जिसमें वनपरिक्षेत्र पालपुर पूर्व प्रथम स्थान, वनपरिक्षेत्र पालपुर पश्चिम द्वितीय स्थान एवं वनपरिक्षेत्र बुढे़रा तृतीय स्थान पर रहे।</p>','1603967016post3.PNG','','2020-10-29 04:53:36','2021-03-07 03:49:57'),(6,'मिट्टी का जादू मूर्तिकला प्रतियोगिता','matata-ka-jatha-maratakal-paratayagata','2020-10-04','<p>प्रत्येक वनपरिक्षेत्र में निर्देशानुसार मिट्टी का जादू मूर्तिकला बनाने हेतु 05 सदस्यों का दल गठित कर मूर्तिकला प्रतियोगिता का आयोजन वनपरिक्षेत्र स्तर पर किया गया। जिसमें वनपरिक्षेत्र पालपुर पूर्व प्रथम स्थान, वनपरिक्षेत्र मोरावन पश्चिम द्वितीय स्थान एवं वनपरिक्षेत्र विजयपुर पूर्व तृतीय स्थान पर रहे।</p>','1603967110post4.PNG','','2020-10-29 04:55:10','2021-03-07 03:50:02'),(7,'समापन समारोह','samapana-samaraha','2020-10-07','<p>कूनो वन्यप्राणी वनमण्डल, श्योपुर एवं सामान्य वनमण्डल, श्योुपर द्वारा संयुक्त रूप से वनमण्डल स्तर पर वन्यप्राणी संरक्षण सप्ताह 2020 का समापन समारोह आयोजित किया गया है जिसमें मुख्य अतिथि के रूप में पुलिस अधीक्षक, जिला श्योपुर उपस्थित रहे। समापन समारोह में दोनो वनमण्डलों अन्तर्गत वन्यप्राणी संरक्षण सप्ताह 2020 में आयोजित विभिन्न प्रतियोगिताओं/खेलो में उत्कृष्ट प्रर्दशन करने वाले प्रतिभागियों को सम्मानित किया गया।</p>','1603967269post5.PNG','','2020-10-29 04:57:49','2021-03-07 03:50:07');
/*!40000 ALTER TABLE `newshindi` ENABLE KEYS */;
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
  KEY `password_resets_email_index` (`email`(191))
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
  `role_as` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `status` tinyint NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Blue Admin','super@kunonationalpark.org',NULL,'$2y$10$7g9xix2DdDa96efOmTA42uJgqA6HYM/Y6icvkY5Bwb01vtU62ZpGq','superadmin',0,NULL,'2021-01-17 11:30:56','2021-08-09 03:52:51'),(2,'admin','admin@gmail.com',NULL,'$2y$10$wrPQRcDpnUEBw.Ven6VpeuE6i9OUCWFhqXVyK9II1mHCdzcE3PbV2','admin',0,NULL,'2021-01-17 11:33:55','2021-08-09 03:09:38'),(6,'Admin','admin@kunonationalpark.org',NULL,'$2y$10$2e2RRD7bz/fzu7caylHQFuQg6WivPBOxf6BMHHNiD5X8Yjr2/dX36','admin',0,'eFtcDFQnjcO2CYUb8IUM0d71CctMyK2gq2TPNSNN23TosJxtCE1xFEOd4XRT','2021-01-18 01:38:45','2021-08-09 04:21:53');
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

-- Dump completed on 2021-11-12 15:42:08
