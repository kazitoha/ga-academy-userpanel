
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
DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `banner_title` longtext COLLATE utf8mb4_unicode_ci,
  `banner_description` longtext COLLATE utf8mb4_unicode_ci,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `committees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `committees` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8mb4_unicode_ci,
  `email` longtext COLLATE utf8mb4_unicode_ci,
  `phone` longtext COLLATE utf8mb4_unicode_ci,
  `designation` longtext COLLATE utf8mb4_unicode_ci,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `committees` WRITE;
/*!40000 ALTER TABLE `committees` DISABLE KEYS */;
/*!40000 ALTER TABLE `committees` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `event_name` longtext COLLATE utf8mb4_unicode_ci,
  `event_date` longtext COLLATE utf8mb4_unicode_ci,
  `about_event` longtext COLLATE utf8mb4_unicode_ci,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'পহেলা বৈশাখ ১৪৩০ বাংলা নববর্ষ-বরণ অনুষ্ঠান ।','2023-04-14','ফেনী গিরিশ-অক্ষয় একাডেমি ( ফেনী জি. এ. একাডেমি), ফেনী সদর, ফেনী ।','[\"1_0.jpg\",\"1_1.jpg\",\"1_2.jpg\",\"1_3.jpg\"]','2023-06-08 08:41:35','2023-06-08 08:41:35');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;
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

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gallery` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,'3','প্রশাসনিক ভবন','1.jpg','2023-05-27 06:50:17','2023-05-27 06:56:15'),(2,'3','পহেলা বৈশাখ ১৪৩০ বাংলা নববর্ষ-বরণ অনুষ্ঠান ।','2.jpg','2023-06-08 08:47:01','2023-06-08 08:47:01');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2020_05_21_100000_create_teams_table',1),(7,'2020_05_21_200000_create_team_user_table',1),(8,'2020_05_21_300000_create_team_invitations_table',1),(9,'2022_12_04_130943_create_sessions_table',1),(10,'2022_12_08_130526_create_notices_table',1),(11,'2022_12_09_140105_create_office_staff_table',1),(12,'2022_12_09_164313_create_galleries_table',1),(13,'2022_12_14_144102_create_committees_table',1),(14,'2022_12_19_132049_create_events_table',1),(15,'2023_02_02_152740_create_banners_table',1),(16,'2023_08_04_233507_create_testimonials_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'১৫০টি___বানান____শুদ্ধিকরণ I','১৫০টি___বানান____শুদ্ধিকরণ\r\n  ->অশুদ্ধ______শুদ্ধ\r\n০১) শ্বাশত_______শাশ্বত\r\n০২) শশুর________শ্বশুর\r\n০৩) শাশুরি_______শাশুড়ি\r\n০৪) নূন্যতম_______ন্যূনতম\r\n০৫) স্বাস্থ_________স্বাস্থ্য\r\n০৬) মাহাত্ম_______মাহাত্ম্য\r\n০৭) দারিদ্র_______দারিদ্র্য\r\n০৮) প্রতিদ্বন্দ্বি_____প্রতিদ্বন্দ্বী \r\n০৯) প্রতিদ্বন্দ্বীতা___প্রতিদ্বন্দ্বিতা\r\n১০) প্রতিযোগীতা__প্রতিযোগিতা\r\n১১) উচ্ছাস_______উচ্ছ্বাস\r\n১২) অপরাহ্ন______অপরাহ্ণ\r\n১৩) নিশিথীনি_____নিশীথিনী\r\n১৪) মনকষ্ট_______মনঃকষ্ট\r\n১৫) দ্বন্দ_______দ্বন্দ্ব\r\n১৬) পিপিলিকা____পিপীলিকা \r\n১৭) মণিষী____মনীষী\r\n১৮) মূমূর্ষু_____মুমূর্ষু\r\n১৯) আমাবশ্যা____অমাবস্যা\r\n২০) অত্যাধিক____অত্যধিক\r\n২১) কটুক্তি_____কটূক্তি\r\n২২) ভূল________ভুল\r\n২৩) ভূবন_______ভুবন\r\n২৪) সান্তনা______সান্ত্বনা\r\n২৫) পক্ক______পক্ব\r\n২৬) বিদূষী_____বিদুষী\r\n২৭) সমীচিন____সমীচীন\r\n২৮) মূহুর্ত______মুহূর্ত\r\n২৯) ব্রাক্ষণ_____ব্রাহ্মণ\r\n৩০) প্রাণীবিদ্যা___প্রাণিবিদ্যা\r\nনোট___রমজান__\r\n৩১) ইতিপূর্বে____ইতঃপূর্বে\r\n৩২) ইতিমধ্যে____ইতোমধ্যে\r\n৩৩) ইংরেজী____ইংরেজি\r\n৩৪) ইষৎ______ঈষৎ\r\n৩৫) অহরাত্রি___অহোরাত্র\r\n৩৬) অপাঙতেয়____অপাঙ্ক্তেয়\r\n৩৭) অন্তঃস্বত্ত্বা_____অন্তঃসত্ত্বা\r\n৩৮) আদ্যক্ষর(কলকাতা)____আদ্যাক্ষর(বাংলা একাডেমি)\r\n৩৯) অনুসূয়া_____অনসূয়া\r\n৪০) আকাংখা____আকাঙ্ক্ষা\r\n৪১) আশ্বস্থ______আশ্বস্ত\r\n৪২) আত্বস্থ______আত্মস্থ\r\n৪৩) আশীষ_____আশিস্\r\n৪৪) আয়ত্ব_____আয়ত্ত\r\n৪৫) আত্মৎসর্গ___আত্মোৎসর্গ\r\n৪৬) উপরোক্ত____উপর্যুক্ত\r\n৪৭) উদ্বৃত______উদ্বৃত্ত\r\n৪৮) উপযোগীতা____উপযোগিতা\r\n৪৯) উর্ধ্বশ্বাস______ঊর্ধ্বশ্বাস\r\n৫০) উদিচী_______উদীচী\r\n৫১) উর্ধ্ব_______ঊর্ধ্ব\r\n৫২) ঐক্যতান____ঐকতান\r\n৫৩) কাংখিত____কাঙ্ক্ষিত\r\n৫৪) ক্ষীণজীবি____ক্ষীণজীবী\r\n৫৫) ক্ষুদপিপাসা____ক্ষুৎপিপাসা\r\n৫৬) কৌতূক______কৌতুক\r\n৫৭) কথপোকথন____কথোপকথন\r\n৫৮) কর্ণেল______কর্নেল\r\n৫৯) কুপমণ্ডুক_____কূপমণ্ডূক\r\n৬০) খোজাখোজি____খোঁজাখুঁজি\r\n৬১) গীতাঞ্জলী______গীতাঞ্জলি\r\n৬২) গ্রামীন_____গ্রামীণ\r\n৬৩) গড্ডালিকা____গড্ডলিকা\r\n৬৪)গার্হস্থ______গার্হস্থ্য\r\n৬৫) ঘূর্নিঝর_____ঘূর্ণিঝড়\r\n৬৬) চতুস্কোন____চতুষ্কোণ\r\n৬৭) জগত_____জগৎ\r\n৬৮) জেষ্ঠ_____জ্যেষ্ঠ\r\n৬৯) জোতিষ্ক____জ্যোতিষ্ক\r\n৭০) ঝরণা_____ঝরনা\r\n৭১) ডাষ্টবিন____ডাস্টবিন\r\n৭২) পোষ্ট______পোস্ট\r\n৭৩) ত্রিভূজ____ত্রিভুজ\r\n৭৪) ততক্ষণাত___তৎক্ষণাৎ\r\n৭৫) দূর্গাপূজা____দুর্গাপূজা\r\n৭৬) দূরাবস্থা_____দুরবস্থা\r\n৭৭) দুঃস্ত_______দুস্থ/দুঃস্থ\r\n৭৮) দীর্ঘজীবি____দীর্ঘজীবী\r\n৭৯) দূর্ঘটনা______দুর্ঘটনা\r\n৮০) দাসত্ত______দাসত্ব\r\n___রমজান___®\r\n৮১) শিরচ্ছেদ______শিরশ্ছেদ\r\n৮২) স্বরস্বতী______সরস্বতী\r\n৮৩) বিভিষিকা_____বিভীষিকা\r\n৮৪) দৈন্যতা_____দৈন্য/দীনতা\r\n৮৫) সন্যাসী_____সন্ন্যাসী\r\n৮৬) দুরুহ_____দুরূহ\r\n৮৭) দুর্বৃত্ত্ব____দুর্বৃত্ত\r\n৮৮) দৌরাত্ম____দৌরাত্ম্য\r\n৮৯) দধিচি_____দধীচি\r\n৯০) ধরনী_____ধরণি\r\n৯১) ধুলিসাৎ____ধূলিসাৎ\r\n৯২) ধারনা_____ধারণা\r\n৯৩) নূন্যতম____ন্যূনতম\r\n৯৪) নৈপুন্য____নৈপুণ্য\r\n৯৫) নিগুঢ়____নিগূঢ়\r\n৯৬) নিশিথিনি____নিশীথিনী\r\n৯৭) পিপিলিকা____পিপীলিকা\r\n৯৮) পোষ্টমাষ্টার____পোস্টমাস্টার\r\n৯৯) প্রাতঃরাশ_____প্রাতরাশ\r\n১০০) প্রোজ্জ্বলন____প্রজ্বলন\r\n১০১) প্রতিদন্দ্বি_____প্রতিদ্বন্দ্বী\r\n১০২) পানিনি______পাণিনি\r\n১০৩) ফটোষ্ট্যাট____ফটোস্ট্যাট\r\n১০৪) ব্রাহ্মন______ব্রাহ্মণ\r\n১০৫) ব্যাতিত_____ব্যতীত\r\n১০৬) ব্যাথা_____ব্যথা\r\n১০৭) বাল্মিকি_____বাল্মীকি\r\n১০৮) বশিভুত_____বশীভূত\r\n১০৯) বুৎপত্তি_____ব্যুৎপত্তি\r\n১১০) ভৌগলিক____ভৌগোলিক\r\n১১১) ভুমিষাৎ_____ভূমিসাৎ\r\n১১২) ভৎসনা_____ভর্ৎসনা\r\n১১৩) মূহুর্ত_______মুহূর্ত\r\n১১৪) মনিষি______মনীষী\r\n১১৫) মরীচীকা____মরীচিকা\r\n১১৬) মনযোগ_____মনোযোগ\r\n১১৭) মনুষ্যত্য_____মনুষ্যত্ব\r\n১১৮) যক্ষা_______যক্ষ্মা\r\n১১৯) লজ্জাস্কর____লজ্জাকর\r\n১২০) লক্ষ্যনীয়_____লক্ষণীয়\r\n১২১) শান্তনা______সান্ত্বনা\r\n১২২) শারিরীক____শারীরিক\r\n১২৩) শুভাশীষ____শুভাশিস\r\n১২৪) শায়ত্ত্বশাসন____স্বায়ত্তশাসন\r\n১২৫) শিরধার্য্য______শিরোধার্য\r\n১২৬) শশ্রূসা________শুশ্রূষা\r\n১২৭) ষাম্মাষিক_____ষাণ্মাসিক\r\n১২৮) সম্বর্ধনা______সংবর্ধনা\r\n১২৯) সহযোগীতা___সহযোগিতা\r\n১৩০) সুষ্ঠ________সুষ্ঠু\r\n১৩১) ব্যবহারিক____ব্যাবহারিক\r\n১৩২) পোষাক_____পোশাক\r\n১৩৩) ধরণ_____ধরন\r\n১৩৪) ধারণ____ধারণ\r\n১৩৫) উষা____ঊষা\r\n১৩৬) দুর্ণীতি____দুর্নীতি\r\n১৩৭) মধ্যাকর্ষণ ____মাধ্যাকর্ষণ\r\n১৩৮) শিহরণ_____শিহরন\r\n১৩৯) দধিচী_____দধীচি\r\n১৪০) ইদানিং______ইদানীং\r\n১৪১) জ্ঞানভুসিত____জ্ঞানভূষিত\r\n১৪২) সুসম_____সুষম\r\n১৪৩) কনিষ্ট_____কনিষ্ঠ\r\n১৪৪) দুষণীয়_____দূষণীয়\r\n১৪৫) পুণর্মিণনি____পুনর্মিলনী\r\n১৪৬) সুধি____সুধী\r\n১৪৭) বীবতস্য____বীভৎস\r\n১৪৮) অদ্ভূত____অদ্ভুত\r\n১৪৯) শ্বশ্রু_____শ্বশ্রূ\r\n১৫০) রূপালী_____রুপালি(ব্যাংকের ক্ষেত্রে রূপালী) \r\n(সংগৃহীত পোস্ট) \r\nSamir Kumar Bardhan',NULL,'2023-06-08 08:29:07','2023-06-08 08:30:49'),(2,'সরকারি মাধ্যমিক বিদ্যালয়ের সহকারী শিক্ষক নিয়োগের যোগ্যতা।','সরকারি মাধ্যমিক বিদ্যালয়ের সহকারী শিক্ষক নিয়োগের যোগ্যতা: \r\nমাধ্যমিক বিদ্যালয়ে পাঠদান করা বিষয়ে স্নাতক ডিগ্রী ( বিএড আবশ্যিক নয়)।\r\nনিয়োগ পদ্ধতি: পিএসসি\'র অধীনে ২০০ নম্বরের এমসিকিউ পরীক্ষা,  ভাইভা পরীক্ষা এবং সরকারি গোয়েন্দা সংস্থার ভেরিফিকেশন।\r\nগ্রেড: ১০ম\r\nমূল বেতন: ১৬০০০ টাকা।\r\nবাড়ি ভাড়া: মূল বেতনের ৪০%-৫০%\r\nবোনাস: মূল বেতনের সমান। \r\nচিকিৎসা ভাতা: মাসিক ১৫০০ টাকা।\r\nরাজস্বখাতের চাকরি বিধায় অন্যান্য সকল সুবিধা। \r\nপেনশন আছে,বদলি আছে।\r\nএমপিও ভুক্ত মাধ্যমিক বিদ্যালয়ের সহকারী শিক্ষক নিয়োগের যোগ্যতা: \r\nমাধ্যমিক বিদ্যালয়ে পাঠদান করা বিষয়ে স্নাতক ডিগ্রী( বিএড আবশ্যিক নয়) \r\nনিয়োগ পদ্ধতি: সরকারি সংস্থা এনটিআরসিএ অধীনে \r\n১০০ নম্বরের এমসিকিউ পরীক্ষা, ১০০নম্বরের বিষয় ভিত্তিক লিখিত পরীক্ষা ( সরকারি বিদ্যালয়ে লিখিত পরীক্ষা নেয় না), ভাইভা পরীক্ষা, জাতীয় মেধাতালিকায় অন্তর্ভুক্তি,গনবিজ্ঞপ্তিতে আবেদন, প্রাথমিক সুপারিশ, চূড়ান্ত সুপারিশ, সরকারি গোয়েন্দা সংস্থার ভেরিফিকেশন।\r\nগ্রেড: ১১তম \r\nমূল বেতন: ১২,৫০০ টাকা।\r\nবাড়ি ভাড়া: মাসিক ১০০০টাকা।\r\nবোনাস: মূল বেতনের ২৫%\r\nচিকিৎসা ভাতা: মাসিক ৫০০টাকা।\r\nপেনশন নাই,বদলি নাই, \r\nএতো,এতো বৈষম্য মেনে শ্রেণি কক্ষে সুস্থ মনে ও দেহে দীর্ঘ বছর পাঠদান সম্ভব নয়। \r\nফলে দাবি আদায়/ বৈষম্য দূরীকরণ করতে ঢাকা প্রেসক্লাবের সামনে এমপিও ভুক্ত মাধ্যমিক বিদ্যালয় জাতীয়করণ ( সরকারীকরণ) করতে শিক্ষক আন্দোলন যৌক্তিক এবং সংহতি প্রকাশ করছি।',NULL,'2023-07-26 16:49:08',NULL);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `notices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notices` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `file_path` longtext COLLATE utf8mb4_unicode_ci,
  `category` int DEFAULT '2',
  `file_sys_ver` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `notices` WRITE;
/*!40000 ALTER TABLE `notices` DISABLE KEYS */;
INSERT INTO `notices` VALUES (2,'২০২৩ সনের এসএসসি পরীক্ষার্থীদের প্রবেশপত্র বিতরণ সংক্রান্ত','ফেনী গিরিশ-অক্ষয় একাডেমি ( ফেনী জি. এ. একাডেমি)\'র ২০২৩ সনের এসএসসি পরীক্ষার্থীদের প্রবেশপত্র আগামী ১৭ এপ্রিল ২০২৩ সোমবার সকাল ১১:০০ ঘটিকার সময় এতদসঙ্গে সংযুক্ত নির্দেশিকামোতাবেক বিতরণ করা হবে । পরীক্ষার্থীরা প্রবেশপত্র গ্রহণের পর তাতে  কোনো ভুলত্রুটি পরিলক্ষিত হলে সাথে সাথে যথাযথ কর্তৃপক্ষের মাধ্যমে সংশোধনের ব্যবস্থা নিতে হবে । নির্দিষ্ট সময়ে প্রবেশপত্র গ্রহণে ব্যর্থতায় সংশ্লিষ্টের প্রবেশপত্রে কোনো ভুলত্রুটি রয়ে গেলে তজ্জন্য স্কুল-কর্তৃপক্ষ দায়ী থাকবে না । বিষয়টি অতীব জরুরি । - প্রধান শিক্ষক ।','2.jpg',2,1,'2023-04-20 23:04:11','2023-04-20 23:04:11'),(3,'২০২৩ সনের এসএসসি পরীক্ষার্থীদের বিলম্বে প্রবেশপত্র বিতরণ সংক্রান্ত','ফেনী গিরিশ-অক্ষয় একাডেমির ২০২৩ সনের এসএসসি পরীক্ষার্থীদের মধ্যে যারা এখনও \"পরীক্ষার প্রবেশপত্র\" সংগ্রহ করেনি, তাদের আগামীকাল ১৮ এপ্রিল ২০২৩ সোমবার বেলা ১১টা হতে ১২টার মধ্যে স্কুলে উপস্থিত হয়ে সংশ্লিষ্ট শ্রেণি-শিক্ষকের নিকট হতে প্রবেশপত্র গ্রহণের জন্য পরামর্শ দেয়া যাচ্ছে । অতীব জরুরি এ বিষয়টি একে অপরকে জানিয়ে দেয়ার জন্য বিশেষভাবে অনুরোধ করা হলো ।','3.jpg',2,1,'2023-04-20 23:15:02','2023-04-20 23:15:03'),(4,'২০২৩ সনের এসএসসি পরীক্ষার্থীদের জ্ঞাতব্য','অতীব জরুরি নোটিশ\r\nএতদ্দ্বারা গিরিশ-অক্ষয় একাডেমি (ফেনী জি. এ. একাডেমি)\'র ২০২৩ সনের এসএসসি পরীক্ষার্থীদের মধ্যে যাদের \"রেজিস্ট্রেশন কার্ডে প্রধান শিক্ষকের স্বাক্ষর ও সীল\" দেয়া হয়নি, তাদের আগামী ২৬ এপ্রিল ২০২৩ বুধবার বেলা ১১টা হতে ১২টার মধ্যে স্কুলে উপস্থিত হয়ে  \"রেজিস্ট্রেশন কার্ডে প্রধান শিক্ষকের স্বাক্ষর ও সীল গ্রহণ\" করার জন্য পরামর্শ দেয়া যাচ্ছে । পরীক্ষা-কেন্দ্রে স্বাক্ষর ও সীল গ্রহণ/ প্রদান করার কোনো সুযোগ পাওয়া যাবে না । অতীব জরুরি এ বিষয়টি একে অপরকে জানিয়ে দেয়ার জন্য বিশেষভাবে অনুরোধ করা যাচ্ছে ।','4.jpg',2,1,'2023-04-20 23:59:58','2023-04-21 03:05:57'),(5,'ঈদ-শুভেচ্ছা','ফেনী গিরিশ-অক্ষয় একাডেমি (জি.এ একাডেমি)\'র পক্ষ থেকে সবাইকে পবিত্র ঈদ-উল-ফিতর্-এর শুভেচ্ছা জানাই','5.jpg',2,1,'2023-04-21 02:37:05','2023-04-21 02:37:05'),(8,'শৃঙ্খলা সংক্রান্ত','বিষয়টি অতীব জরুরি','8.jpg',2,1,'2023-05-08 21:23:27','2023-05-08 21:23:28'),(9,'\"শ্রেণি-কার্যক্রম\"-এর সময়সূচি সংক্রান্ত','এতদদ্বারা ফেনী-গিরিশ অক্ষয় একাডেমির ষষ্ঠ হতে দশম শ্রেণি পর্যন্ত সকল ছাত্র-ছাত্রীর জ্ঞাতার্থে  জানানো যাচ্ছে যে, আগামীকাল ২৫ মে ২০২৩ বৃহস্পতিবার  সকাল ১০টায়  শ্রেণি-কার্যক্রম শুরু হবে। সবাইকে যথাসময়ে উপস্থিত থাকার জন্য নির্দেশ দেয়া যাচ্ছে। বিষয়টি অতীব জরুরি।',NULL,2,1,'2023-05-25 00:08:58','2023-05-27 09:31:03'),(10,'Notice','Notice','10.jpg',1,1,'2023-05-26 23:35:11','2023-05-26 23:35:11'),(11,'বিতর্ক প্রতিযোগিতা ।','এতদ্দ্বারা ফেনী গিরিশ-অক্ষয় একাডেমির ৬ষ্ঠ হতে ১০ম শ্রেণি পর্যন্ত সকল ছাত্র-ছাত্রীর অবগতির জন্য জানানো যাচ্ছে যে, আগামী ৩১ মে ২০২৩ বুধবার সকাল ১০টা হতে মাননীয় \"উপজেলা নির্বাহী অফিসার\"\', ফেনী সদর-এর সম্মেলন কক্ষে শিক্ষা-প্রতিষ্ঠানসমূহের ছাত্র-ছাত্রীদের মধ্যে বিতর্ক প্রতিযোগিতা অনুষ্ঠিত হতে যাচ্ছে ।\r\nবিতর্কের বিষয় : দারিদ্র্যই দুর্নীতির একমাত্র কারণ\"\r\nফেনী গিরিশ-অক্ষয় একাডেমি বিতার্কিক দল ৩১ মে ২০২৩ বুধবার সকাল ১০ টায় উক্ত বিষয়ের \"বিপক্ষে\" বিতর্ক করবে ।\r\nপ্রত্যেক বিতর্ক-দলে সদস্যসংখ্যা : দলনেতাসহ ০৩ (তিন) ।\r\nএ স্কুলে বিতর্ক-দল গঠন, গাইড ও পরিচালনার দায়িত্বে থাকবেন : মিসেস খালেদা বেগম, সিনিয়র শিক্ষক (বাংলা) ।\r\nপ্রতিযোগিতায় আগ্রহী বিতার্কিকদের খালেদা ম্যা\'মসহ অন্যান্য শিক্ষকের সাথে যোগাযোগ করে বিতর্ক-বিষয়ের \"বিপক্ষে\" পয়েন্ট সংগ্রহ করার জন্য পরামর্শ দেয়া যাচ্ছে ।\r\n-প্রধান শিক্ষক ।',NULL,2,1,'2023-05-28 12:46:16',NULL),(12,'Notice',NULL,'12.jpg',2,1,'2023-06-08 08:12:19','2023-06-08 08:12:19'),(13,'অতি জরুরি বিজ্ঞপ্তি',NULL,'13.jpg',2,1,'2023-07-14 06:13:03','2023-07-14 06:13:04'),(14,'Class 8 Registration','জরুরি নোটিশ','14.jpg',2,1,'2023-07-18 08:06:48','2023-07-18 08:06:48'),(15,'SSC','২০২৩ সনের এসএসসি পরীক্ষার্থীদের ফল প্রকাশ','15.jpg',2,1,'2023-07-26 06:46:07','2023-07-26 12:57:19'),(20,'SSC- 2023 result',NULL,'20.pdf',2,1,'2023-07-28 05:22:03','2023-07-28 05:22:03'),(21,'২৯ জুলাই ২০২৩ বিশেষ জরুরি নোটিশ','২৯ জুলাই ২০২৩\r\n                         বিশেষ জরুরি নোটিশ\r\n                         -------------------------------\r\nএতদ্দ্বারা ফেনী গিরিশ-অক্ষয় একাডেমির ৬ষ্ঠ হতে ৮ম শ্রেণি পর্যন্ত \"বকুল\" ও \"ডালিয়া\" শাখার ছাত্রীদের জ্ঞাতার্থে জানানো যাচ্ছে যে, তাদেরকে বিশেষ জরুরি প্রয়োজনে আগামীকাল ৩০ জুলাই ২০২৩ রবিবার সকাল ৯টা ৩০ মিনিটের মধ্যে ইউনিফর্ম (নির্ধারিত পোশাক) পরিধান করে স্কুলে উপস্থিত হওয়ার জন্য নির্দেশ দেয়া যাচ্ছে ।\r\n                                                 নির্দেশনায় -\r\n                                               প্রধান শিক্ষক\r\n                                  ফেনী গিরিশ-অক্ষয় একাডেমি ।',NULL,2,1,'2023-07-29 07:13:06','2023-08-01 07:13:23'),(22,'২০২৩ সনের এসএসসি পরীক্ষায় অকৃতকার্য ছাত্র-ছাত্রীদের জন্য পুনঃভর্তি সংক্রান্ত নোটিশ।','২০২৩ সনের এসএসসি পরীক্ষায় অকৃতকার্য ছাত্র-ছাত্রীদের জন্য পুনঃভর্তি সংক্রান্ত নোটিশ।','22.jpg',2,1,'2023-08-02 09:28:29','2023-08-03 04:36:47'),(23,'Adipisicing esse irure omnis ea ex dolorem et vel veritatis molestias quo magni illum est aliquam eveniet delectus',NULL,'a:2:{i:0;a:1:{i:0;s:8:\"0_23.jpg\";}i:1;a:1:{i:0;s:8:\"1_23.jpg\";}}',2,2,'2023-08-05 18:48:57','2023-08-05 18:48:58');
/*!40000 ALTER TABLE `notices` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `oauth_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `client_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `oauth_access_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `oauth_auth_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `client_id` bigint unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `oauth_auth_codes` WRITE;
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `oauth_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `oauth_personal_access_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `oauth_personal_access_clients` WRITE;
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `oauth_refresh_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `oauth_refresh_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `office_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `office_staff` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8mb4_unicode_ci,
  `category` longtext COLLATE utf8mb4_unicode_ci,
  `designation` longtext COLLATE utf8mb4_unicode_ci,
  `email` longtext COLLATE utf8mb4_unicode_ci,
  `phone` longtext COLLATE utf8mb4_unicode_ci,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `office_staff` WRITE;
/*!40000 ALTER TABLE `office_staff` DISABLE KEYS */;
INSERT INTO `office_staff` VALUES (1,'MD. TAJUL ISLAM CHOWDHURY','1','Headteacher  (Administration)','chowdhurytajulislam@gmail.com','01818489920','1.jpg',NULL,'2023-05-05 23:51:51','2023-05-06 00:07:03'),(2,'AMAL CHANDRA BHOWMIK','1','Assistant Headteacher  (Administration)','amal.ga1965@gmail.com','01712756480','2.jpg',NULL,'2023-05-05 23:52:26','2023-05-06 00:07:33'),(3,'REHANA AKTER','1','Senior Teacher (Biology)','rehanaakther762@gmail.com','01816861229','3.jpg',NULL,'2023-05-05 23:53:33','2023-05-06 00:07:52'),(4,'KHALADA BEGUM','1','Senior Teacher (Bangla)','khaleda1974@gmail.com','01816358118','4.jpg',NULL,'2023-05-05 23:54:30','2023-05-06 00:08:13'),(5,'AYESHA ARA BEGUM','1','Senior Teacher (English)','ayeshaara1966@gmail.com','01825211600','5.jpg',NULL,'2023-05-05 23:55:08','2023-05-06 00:08:32'),(6,'HOSNA AKTER','1','Senior Teacher (ICT)','farhanajannatm123@gmail.com','01818980014','6.jpg',NULL,'2023-05-05 23:56:01','2023-05-06 00:09:35'),(7,'SUPARNA CHAKRABORTY','1','Senior Teacher (Hindu Religion)','suparna1143@gmail.com','01814931143','7.jpg',NULL,'2023-05-05 23:56:41','2023-05-06 00:09:57'),(8,'FEROZ ALAM','1','Senior Teacher (Physical Education)','ferozalam824@gmail.com','01816505824','8.jpg',NULL,'2023-05-05 23:57:59','2023-05-06 00:10:33'),(9,'KAZI NAZRUL ISLAM','1','Assistant Teacher (Library and Information Studies)','kazinazrul6602@gmail.com','01830006602','9.jpg',NULL,'2023-05-05 23:58:32','2023-05-06 00:10:56'),(10,'MD. MOSHARAF HOSSAIN','1','Assistant Teacher (ICT)','rasel2010feni@gmail.com','01916282910','10.jpg',NULL,'2023-05-05 23:59:07','2023-05-06 00:11:18'),(11,'MOHAMMED MOFIZUL ISLAM','1','Assistant Teacher (Math and G. Science)','misumon96@gmail.com','01716547099','11.jpg',NULL,'2023-05-05 23:59:42','2023-05-06 00:12:01'),(12,'SHAHIDUL ISLAM','1','Assistant Teacher (Business Studies)','sumonislam171@gmail.com','01812824242','12.jpg',NULL,'2023-05-06 00:00:14','2023-05-06 00:12:27'),(13,'LAYLA AFROZ','1','Assistant Teacher (Business Studies)','laylaafroz1990@gmail.com','01868983448','13.jpg',NULL,'2023-05-06 00:00:51','2023-05-06 00:12:47'),(14,'BIBI FATEMA SATHI','1','Assistant Teacher (Social Science)','ibrahim9789181@gmail.com','01636303688','14.jpg',NULL,'2023-05-06 00:01:28','2023-05-06 00:13:06'),(15,'TANJINA AKTER','1','Assistant Teacher (Bangla)','tanjinatazin20@gmail.com','01878534983','15.jpg',NULL,'2023-05-06 00:02:04','2023-05-06 00:13:31'),(16,'MD. JAHEDUL HOQUE SONET','1','Assistant Teacher (Math)','jahidulhoque382@gmail.com','01626706932',NULL,NULL,'2023-05-28 12:50:37','2023-05-28 12:51:57'),(17,'MD. AMINUL HOQUE','2','Computer Lab Operator','aminulimp@gmail.com','01830272919',NULL,NULL,'2023-05-28 12:51:15','2023-05-28 13:00:17'),(18,'MD. JAFOR ISLAM','2','MD. JAFOR ISLAM','jafor.perfect@gmail.com','01820401479','18.jpg',NULL,'2023-05-28 13:08:06','2023-05-28 13:08:07'),(19,'MD. AMDADUL HOQUE','1','Assistant Teacher (Islamic Education)','amdadrasel38@gmail.com','01814298738','19.jpg',NULL,'2023-05-28 13:08:55','2023-05-28 13:08:56'),(20,'ANKHI RANI DATTA','1','Assistant Teacher (Social Science)',NULL,'01721028457','20.jpg',NULL,'2023-05-28 13:09:31','2023-05-28 13:09:31'),(21,'JONY CHANDRA DEY','1','Assistant Teacher (Math)','jcdey.feni2020@gmail.com','01733773750','21.jpg',NULL,'2023-05-28 13:10:51','2023-05-28 13:10:51'),(22,'RANAJIT KUMAR NATH','1','Assistant Teacher (Math)','ranjit09101963@gmail.com','01718862173','22.jpg',NULL,'2023-05-28 13:11:52','2023-05-28 13:11:52'),(23,'SHAHADAT HOSSAIN','1','Assistant Teacher  (Math)','shahadat50311@gmail.com','01820736452','23.jpg',NULL,'2023-05-28 13:12:48','2023-05-28 13:12:48'),(24,'AHAMMED KARIM','1','Assistant Teacher  (Math)','ahammedkarim190@gmail.com',NULL,'24.jpg',NULL,'2023-05-28 13:13:33','2023-05-28 13:13:33'),(25,'JAHANGIR ALAM','1','Assistant Teacher (Math)','jahangirbokul90@gmail.com','01821971345','25.jpg',NULL,'2023-05-28 13:14:21','2023-05-28 13:14:21'),(26,'MOHAMMAD MUJIBUR RAHMAN','1','Assistant Teacher (Islamic Education)','md.mozibur.rahaman1962@gmail.com','01718133728','26.jpg',NULL,'2023-05-28 13:15:15','2023-05-28 13:15:15'),(27,'MD. LOKMAN','1','Assistant Teacher (English)','mdlokman222@gmail.com',NULL,'27.jpg',NULL,'2023-05-28 13:16:19','2023-05-28 13:16:19'),(28,'ALI NOMAN','1','Assistant Teacher (English)','ali96noman@gmail.com',NULL,'28.jpg',NULL,'2023-05-28 13:17:31','2023-05-28 13:17:31'),(29,'KAZAL CHOWDHURY','1','Assistant Teacher (Business Studies)','mbskazal@gmail.com','01676384585','29.jpg',NULL,'2023-05-28 13:18:08','2023-05-28 13:18:09'),(30,'ABDUS SALAM','1','Assistant Teacher (Business Studies)','ummaayimansabiha@gmail.com','01820141769','30.jpg',NULL,'2023-05-28 13:19:54','2023-05-28 13:19:54'),(31,'DIL AFROJE','1','Assistant Teacher (Business Studies)',NULL,'01830014883','31.jpg',NULL,'2023-05-28 13:20:45','2023-05-28 13:20:45'),(32,'BOLAI CHANDRA DAS','2','Cleaner',NULL,'01815352028','32.jpg',NULL,'2023-05-28 13:21:17','2023-05-28 13:21:17'),(33,'KHUKU RANI DEY','2','4th Class Employee',NULL,'01824549027',NULL,NULL,'2023-05-28 13:24:36',NULL),(34,'AWAL HOSSAIN','2','4th Class Employee',NULL,NULL,NULL,NULL,'2023-05-28 13:25:01',NULL);
/*!40000 ALTER TABLE `office_staff` ENABLE KEYS */;
UNLOCK TABLES;
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

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('1LSkVUZABK0JJBvHgVCNwyVEkRb0ul01BmpJFGFk',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoid1drb1VCMFp2SUVZVUZnUFlyYnlWUHpheHgyU0pNU09pYmY3ZlRGYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692458484),('1rXqPuCvnjQuNfVEcsw7vjvQszHH65Cy6Gzko66j',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTEFlQmZERXY4UExMNDBKTVlhRDh3c2FpZzdJQWtvRzk1TGpQYVFRWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692458535),('2SucB5pIKw7nEmoDzVbFd03uqQ3ptPjrs3S0Qn6N',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNHBkalhMMUZLc05adjR5NTRtaEk3OXVoTTFXVG50NVIxNjAzell2WiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692460496),('78K6ycMFM10clr1r2wGWvEMd5n4EgTLT8l0kO8Q2',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiajk0MDZtYWtWM0JDZHpmZk44MU90Nmpkd1VZbjY5R005QkVHQzc1YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692460442),('7FyKrxFeTNfrOjov9q8AwlbmUFg2xEBIbw9QywEe',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiUnJYRmtkVlgzTXpKSmxjR0JndjBuY1pwQWZWaHUxemg3c0pCRXZnRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692458706),('9p0rwtU1Y6ihpsB6wdpWXvuiHLQdQNTkXb7iPY8W',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVzFLZlVkNHk2NUNPNk4xMTFQQ0lkUTFiME0xME5wdzh0ZmFpREFMUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692459829),('9Wse0eUgdgBH6I3ulHj9U2YhPqTYUrjk6agJDS77',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVDFWVm5jSFp5cUJCVUNjSW9GdEVGYXBzMjdscGxSUnBDT3Q4UWZPMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692467709),('A30evJv5U7Q4AKoNbV48PAmtzlWLQNjUoJM6qxxu',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRjFIQkNHeTRycWxwdTMxNzJxNjVrdTNtSlJtdFF0dVY4bjVqNURORyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692460348),('ADAuKuxos6mVXALkfHeXH2VfZg8hZ0Fw9CBqy8gS',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRGhBSzdjbmthUzZBTzRTdDRoNzc5N0EyUkJETWdMbmVLUEZnQUpXTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692458523),('AUiuZ8Pmow7biLUVtNSos8t5uMDFKfKV8sW9OyXc',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMFExdVhuWmxHSFVvUHkycW1JU1dZdWYzV0hBZ1VQMllpVWxETnVpRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692460367),('BbMHgNeifkE55zDANL1JcqFqmSbfWLRXPtmEwhDm',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTXhFbldFeUhLZGpRbm1KTWFHanVtbzFKTEtna2VQMnRQZjN1MXFPVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692455234),('bhdKIQ0RJM7bzVqTa21fqGNOIBV7mAdoiDHB7kgf',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSG9yNUZZSncwNzUwTGV0Z3pqMThoUmI2ZlhpdGM5bWNyTnBmSzJJbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692460415),('cxpYIFocxR8bfDeGBjUwtOBJftwPvwxbe8csBFL0',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiYldWSXptWDdzZVZYbDc4eVJFckR4RERPcWhaWVY5V01iUlJsVmFjSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692458561),('Dpa4evJONuy34uG5br7L78KrG2hELyAKL2kkyVtR',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRzlCY1pxaUkzSnRCQTltVzc4S3o4VHI1c2d2MlBPUm9JdEY0bTQwbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692454656),('dsGlZoNhYnQYw3Q4SIqXJJJHYwm06MtZuLF3Pjeg',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSmNCSGJZcldWSU1QMWRrcXVwcHh4SlZXYVd5VmNOcEIyUGdxa1ZwSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692462657),('FVY4FOJ3t7FadraPc2tIHZsy249xhdQRNaCqCJee',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTExWZE1Qa3EzaTE2emtDYkthbHZlejJ4ODU4NnNJNVo3cng5bzkxTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692460592),('gfjz02vDzFeskNfmvJII9p3eOExMvscBVSoa7IQe',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiYXRvSFFUTEJQcndmNEQ2UzllaHRleVczQ3g0YTlTS2JtSVZOVFZ4ZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692458330),('GrurddvaJfevumMuSOodXIRTPKfxNhBF6OCvINg9',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoibHpvODFWQ2h3VG5rYlQ0TW1lMU9SWFhoTUNqYVdaNnFwMkt4dm5JWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692460584),('hA3ooj2fcVhvVsm9I6QRuJSjBRMa13U6NDGOzyZW',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoicEpTVEluRXZ5cFZLSmxKTkxYeXhCeUlCaXBOV0JsMVdZTVJualQ0ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9vZmZsaW5lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692467711),('iPBgXmkPgMtZ5zRlRBlPdKSxyPYPDxpavHcwRWcW',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZG9DQzUwaGthb0NzWHhKTTNYbG5kYmpaN2UwMFprSDA5ZncyeUZ2WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692460488),('j8iPkXFtd72nUYU4AXbug2VOgMvZJz4f12rrYIkn',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiM0FRcE91eEJvM3M1bWhGSzJPb1ZERk83ZmpSWDZYSVhnRDNxYmRnbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692460636),('jqzjbiLzqIs2YTXD9jRc7aXYyYVkljNNJ7BvAquW',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoidVZUT3E2U0FGNlJwYTNTY3BzWm5lRHR0bjBIZFF1c1hMSDZYT2VSMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692454432),('KcWq83rXWokZ6SHJJkOMsagGsD3xdVvAYfL2UAQU',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoidlhCZU9hczM1QklIVVBnWktqbGt5ODhqUmgxZkk4NEFmVWgzSXp4MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692458954),('LUZxAUJylOBJXV4pneoX4rI5j5KnjHcMXTq5Fuce',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiQWxBeGFpbXRPRGVxS2ZQY0JZQ1c3dXZRZzlCMkxkNnZaNXpOcHk3SCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692459010),('mKT5EZQkNpyYIj2l87L1qyEyXkjpRS8lYvSa645M',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNTVUUmZCUXBKSktESkZ2OGJFbHRTMXFFVnFuSWx1WG9jWmVIN3NhVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692460326),('oQXzCoFIZmHh5muVfSxfqf8aSCthjB9bhpVJiVs1',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoidE13M2ZIcjhsWEtPa0N3bUhvU2NzVm5JQnUwb2NoRmVVOGpLV0FjTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692454692),('qQc2ZJdD2RU97aHhBbvUdWXsK35NNU86CEhi40vW',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoidURHZjE1NE5SNUw1UFE4VU83Z2hNa3dOOElVOHBZQ3dOWkRPQ1FzTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692458754),('R7BApaYhRBDBj0oOQrHAdQaCwDHb2oToPz4s0rNd',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiOThDZVgzbWl1V0pkQ1M1VHlIR3NBcUN1aTZyTUNTd3p1N1BkWFdDdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692462700),('RA2I0Ty5hrSCXHayQOX14rR1IrWIxIQszMrK5unL',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoibGxZNGJPM1NNSDNmY2VzaXFmaHBxc0Jmb2NlZndheGo0VjBJZXVKRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692460512),('S0GtgKyhmvDJHR6mmYaVrCqLIr2qtFi2XwBHqDgR',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVEJJMEtQV1FnbFhlR3VXTGU3ZXc3eGhWNFdpZXEwdVEwNWJhTDJQcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692454647),('sQyavfWyRCBpmnsmmSYAzCrS9EX2VTIxQ3IggeHr',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiOTV2TTJKQXNWUEYzZXNMaldXdDZpRExqNzhnQlhqRDduRXVwalpxUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692461257),('tcSKWdOMx0pVl660V34GaOjoEHYjZFKYSuKT3qu4',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiN2FIMlpOV3hmWktCY3VLSkw5WlFLZ1pxbVJwWUU3OVZ2VlJDMVhJZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692454640),('TurMUagsSshnBgLRaObQoe4opU8NS3TibLXFNKtG',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZVZWelJqTW5hTkp0SlA3eEI3RFhUTWx0bmw5T1cxSHc5Vjcxc2I4aCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692455803),('u27rk2DoEJQfQfjWjlUUI9nqMVdMBeVTeV1i896d',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiYmhVdFo3OW1zNzVrbFE4VVVNWmIxT0huZm9STFpFQjdYTUgxYTlNVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692460301),('vwkg01zUk1t1JnMOBHCRhMnbq7nD0RGO6PFoCtJ3',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiOFk0V0NSVmVoNFN3eGRuQ1F2dWVjRmxYbFk1TTZZMWhEZUU4WUxFViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692462938),('wOPEFqVBMtcolUzt5itE1dL1BO7yC51rtIg9oroH',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoieU5iVnh3cUZsVDlRems2MkZGeVNqV2luNTdMNXB1Z3FnUUg4QlNzTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692460651),('xEADll8IBFLGRDe6i7YUkLinusqgVSYNhZ9Yfcpl',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiakNva0RNbjEzaEE0QVA0THlxSXR4NDUzUGRTcUM0OGlhYTNtT3VaayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692458508),('XoJUfYahRvzEjrGe7Evx2FlIZGRlhwFfXC9sMSrp',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoibm9CendVTXg3Nkc3SXd5V3AzMmg1dlRKQlBVMTlUSEtzTmd0WmRTcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692462758),('xV7R412r7stRsdbGh7pBy0OiHllok0pBTNq3HlHw',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVlFkdkRmT2RxZmpMZEQzdnk0QjZmbkVoQ3o5bDdsNFdvaXRNR2ozNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692460091),('XvQjW0KbRVLQ9qmxT9KmF6ALRlxtaH53eRclUMvQ',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiR0o1bEdkN0FteE9kblZnd2xSdDU1T2J5OVI1RDNFUHVsY2RIeUg5cyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692458487),('YxPQfriRK4Gs9q2sH4E9uqgyBxnSEDCmKG2fD1RL',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVE1NMXFlcUpWZ00zakFhQUFRQTRVMU5XYXdRaEVOc3JUb2o5OFF6cCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692460720),('yXXE7I6zdgaAqmYGEVc55Lkb2d6FhpaV8GCoCnT8',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiR0JyaDB6WUVzSDlqVFA5V2ZVYURWRElVakV6NjNQRTJwOTg3ZHRVQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692458570),('z56fyF1ehPQkuptBOqrTWJ7OddJVJjGSSlBTXUjS',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTTNUQU9WWFBKRGFQUFlDSkNWQnVjaWdTZEVyUzVRdzRiemFaVUtQdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692454623),('zsqXtweSXoiCTH7ZVyb35yEE4SwpLBX1RwvZcWLS',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoic1U1S2k0VUh1bk1UaThJcGxUNENYWmFsN1Jabk9PSVd1NzNHOW00ZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692455238),('ZvcUgNvFNzz6g1DDksofCTkAhok2EqK5F1DWstZV',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVzliNng0RWxURUx6eXhhOUxTMU5SeUY5UHdKZkRvYkc5ME9Vd3QxQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692458324),('ZVDnmxTGQTX1DCYd4M6za047D58s0yK0MynXByeM',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoiaDFIZnpaSkpNbWlJZXZacDJYbm93bWlaOHNmYjRoVkFhMGJjazZQRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692454198),('zxufanQOKMkUV6LXSb2eM5KPh2Pl04HGYTbMwwL7',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203','YTozOntzOjY6Il90b2tlbiI7czo0MDoicTFsdnFZZXE5d0I2dHcyQk9CdU5oWmNDZ2xCaVFFY3p4U0tTdm1PcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5pZmVzdC5qc29uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1692458575);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `team_invitations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `team_invitations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `team_id` bigint unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`),
  CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `team_invitations` WRITE;
/*!40000 ALTER TABLE `team_invitations` DISABLE KEYS */;
/*!40000 ALTER TABLE `team_invitations` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `team_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `team_user` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `team_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `team_user` WRITE;
/*!40000 ALTER TABLE `team_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `team_user` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teams` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teams_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES (1,1,'kazitoha\'s Team',1,'2023-03-12 22:55:45','2023-03-12 22:55:45'),(2,2,'Farhana\'s Team',1,'2023-04-19 11:48:02','2023-04-19 11:48:02'),(3,3,'Headteacher\'s Team',1,'2023-04-20 22:04:01','2023-04-20 22:04:01'),(4,4,'aminul\'s Team',1,'2023-05-26 23:26:21','2023-05-26 23:26:21');
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_name_bd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name_bd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name_bd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board_roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board_reg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_centre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_centre_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gpa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (5,'Larissa Guerrero','Winifred Mcmillan','Kelly Huffman','Phelan Whitney','Candice Cross','Savannah Terry','1','1978','3','89','2018','2','Feni-1','600','4','2011-12-16','2023-08-13 15:06:38','2023-08-13 15:06:38'),(6,'Leilani Snow','Keiko Garrett','John Palmer','Haviva Hayes','Kane Mcfarland','Martena Herman','2','1980','2','32','1991','2','Feni-1','600','1','1999-02-06','2023-08-13 15:06:48','2023-08-13 15:06:48'),(7,'Berk Lynn','Yvonne Sandoval','Cade Shaffer','Stewart Bird','Price Hudson','Danielle Pate','2','2011','3','20','1991','1','Feni-1','600','2','2017-02-28','2023-08-13 15:09:05','2023-08-13 15:09:05'),(8,'Jerry Leblanc','Christopher Vazquez','Paloma Larsen','Glenna Munoz','Claire Buckley','Geraldine Potter','2','1977','1','96','1987','1','Feni-1','600','5','2009-05-21','2023-08-13 15:09:30','2023-08-13 15:09:30'),(9,'Amanda Doyle','Venus Bryan','Sonya Neal','Arden Lee','Gemma Martin','Leigh Cortez','1','1979','2','38','2003','2','Feni-1','600','3','2003-08-29','2023-08-15 07:23:08','2023-08-15 07:23:08'),(10,'Tyrone Foster','Latifah Gallegos','Fallon Brown','Ian Potter','Rooney Craft','Olivia Blanchard','1','1977','2','26','2016','2','Feni-1','600','5','1975-02-04','2023-08-15 07:23:18','2023-08-15 07:23:18');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'kazitoha','kazitoha03@gmail.com',NULL,'$2y$10$mKPVFKRK9yY.4EZCLl6upe5KuJUvKzF02J50XrX6WbjRh9L6S.6rC',NULL,NULL,NULL,NULL,NULL,NULL,'2023-03-12 22:55:45','2023-03-12 22:55:45'),(2,'Farhana jannatm','Farhanajannatm123@gmail.com',NULL,'$2y$10$6ha5ocO3bQk9Ra/ZWOxd9.8uKVbMJzOBuC/SbplAn1CHgW7o0wa5W',NULL,NULL,NULL,NULL,NULL,NULL,'2023-04-19 11:48:02','2023-04-19 11:48:02'),(3,'Headteacher','gaa.feni@yahoo.com',NULL,'$2y$10$gxf9dofKsX4880JnoPtTR.iUKTs.Li2JzJ0iwm9Kf0anzQU2yCEPS',NULL,NULL,NULL,'gFItl9qsL0cavwZwJdAplP5WZmM7Ty2BUTRCgWJedX7ihSAjbRZg00PLJDdR',NULL,NULL,'2023-04-20 22:04:01','2023-04-20 22:04:01'),(4,'aminul','aminulimp@gmail.com',NULL,'$2y$10$Y/1Z33Qxj.Tc8bsWZxa2f.qs08dK4J8njeeL8RCIZ.d2GMTMA35de',NULL,NULL,NULL,'BSR8gQqu3EeEOdHb87nGh2czHD7u8hvB0oJLG6Fm0ap2eZQkWHV26CueaTw6',NULL,NULL,'2023-05-26 23:26:21','2023-05-26 23:26:21');
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

