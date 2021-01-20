--
-- Current Database: `task`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `task` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `task`;

--
-- Table structure for table `my_secret_table`
--

DROP TABLE IF EXISTS `my_secret_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_secret_table` (
  `flag` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_secret_table`
--

LOCK TABLES `my_secret_table` WRITE;
/*!40000 ALTER TABLE `my_secret_table` DISABLE KEYS */;
INSERT INTO `my_secret_table` VALUES ('test');
INSERT INTO `my_secret_table` VALUES ('example');
INSERT INTO `my_secret_table` VALUES ('Empire{This_1s_a_Secr3t_T4bL3_:p}');
INSERT INTO `my_secret_table` VALUES ('dummy');
INSERT INTO `my_secret_table` VALUES ('nothing');
/*!40000 ALTER TABLE `my_secret_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ultra_secret_table_empire`
--

DROP TABLE IF EXISTS `ultra_secret_table_empire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ultra_secret_table_empire` (
  `flag` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ultra_secret_table_empire`
--

LOCK TABLES `ultra_secret_table_empire` WRITE;
/*!40000 ALTER TABLE `ultra_secret_table_empire` DISABLE KEYS */;
INSERT INTO `ultra_secret_table_empire` VALUES ('nope');
INSERT INTO `ultra_secret_table_empire` VALUES ('also_nope');
INSERT INTO `ultra_secret_table_empire` VALUES ('nope_nope');
INSERT INTO `ultra_secret_table_empire` VALUES ('nope_nope_nope');
INSERT INTO `ultra_secret_table_empire` VALUES ('whenever_nope');
INSERT INTO `ultra_secret_table_empire` VALUES ('Empire{My_uLTR4a_Secret_T4bLe_mouhahaHAHAHAHA_but_Great_J0b}');
INSERT INTO `ultra_secret_table_empire` VALUES ('wherever_nope');
INSERT INTO `ultra_secret_table_empire` VALUES ('forever_nope');
INSERT INTO `ultra_secret_table_empire` VALUES ('and_ever_nope');
/*!40000 ALTER TABLE `ultra_secret_table_empire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `us3rs`
--

DROP TABLE IF EXISTS `us3rs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `us3rs` (
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `is_admin` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `us3rs`
--

LOCK TABLES `us3rs` WRITE;
/*!40000 ALTER TABLE `us3rs` DISABLE KEYS */;
INSERT INTO `us3rs` VALUES ('simple_user','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('simple_us3r','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('simpl3_user','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('simpl3_us3r','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('5imple_user','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('5impl3_user','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('5imple_us3r','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('5impl3_us3r','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mpl3_us3r','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mpl3_user','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mple_us3r','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mple_user','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('simple_user2','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('simple_us3r2','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('simpl3_user2','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('simpl3_us3r2','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('5imple_user2','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('5impl3_user2','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('5imple_us3r2','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('5impl3_us3r2','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mpl3_us3r2','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mpl3_user2','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mple_us3r2','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mple_user2','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('simple_user3','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('simple_us3r3','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('simpl3_user3','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('simpl3_us3r3','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('5imple_user3','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('5impl3_user3','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('5imple_us3r3','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('5impl3_us3r3','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mpl3_us3r3','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mpl3_user3','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mple_us3r3','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mple_user3','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('secr3t_4dm1n','Empire{S3CR3t_4Dm1ns_P4ssw0rD_how_did_you_get_1t_awesome}','1');
INSERT INTO `us3rs` VALUES ('51mp1e_user','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mp1e_us3r','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mp13_user','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mp13_us3r','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mp1e_user2','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mp1e_us3r2','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mp13_user2','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mp13_us3r2','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mp1e_user3','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mp1e_us3r3','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mp13_user3','this is a very complexe password :)','0');
INSERT INTO `us3rs` VALUES ('51mp13_us3r3','this is a very complexe password :)','0');
/*!40000 ALTER TABLE `us3rs` ENABLE KEYS */;
UNLOCK TABLES;

