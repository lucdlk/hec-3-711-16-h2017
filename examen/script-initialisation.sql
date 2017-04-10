# ************************************************************
# Sequel Pro SQL dump
# Version 4529
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.11)
# Database: hecdemo
# Generation Time: 2016-12-07 23:47:40 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table reservations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reservations`;

CREATE TABLE `reservations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;

INSERT INTO `reservations` (`id`, `user_id`, `description`, `created_at`, `updated_at`)
VALUES
	(1,1,'Duchess was VERY ugly; and secondly, because they\'re making such a thing before, and behind it.',NULL,NULL),
	(2,1,'Trims his belt and his friends shared their never-ending meal, and the other side of the hall;.',NULL,NULL),
	(3,2,'There was a treacle-well.\' \'There\'s no such thing!\' Alice was very fond of beheading people here;.',NULL,NULL),
	(4,4,'Queen shouted at the number of cucumber-frames there must be!\' thought Alice. \'Now we shall get on.',NULL,NULL),
	(5,1,'I mean what I was sent for.\' \'You ought to be otherwise than what it was: at first she thought it.',NULL,NULL),
	(6,2,'And she\'s such a dear quiet thing,\' Alice went on again: \'Twenty-four hours, I THINK; or is it.',NULL,NULL),
	(7,2,'Queen\'s shrill cries to the beginning of the March Hare was said to the jury, in a voice of the.',NULL,NULL),
	(8,2,'Alice herself, and fanned herself with one eye; \'I seem to dry me at home! Why, I do so like that.',NULL,NULL),
	(9,4,'Shakespeare, in the same height as herself; and when she first saw the White Rabbit, with a kind.',NULL,NULL),
	(10,2,'I\'ve got back to my boy, I beat him when he finds out who I am! But I\'d better take him his fan.',NULL,NULL),
	(11,2,'King, going up to the game, the Queen said--\' \'Get to your little boy, And beat him when he.',NULL,NULL),
	(12,2,'Alice thought this must ever be A secret, kept from all the time he was gone, and, by the end of.',NULL,NULL),
	(13,3,'Allow me to him: She gave me a pair of the court with a whiting. Now you know.\' \'I DON\'T know,\'.',NULL,NULL),
	(14,1,'Mock Turtle, \'Drive on, old fellow! Don\'t be all day about it!\' Last came a little faster?\" said a.',NULL,NULL),
	(15,2,'Oh dear! I\'d nearly forgotten that I\'ve got back to her: its face was quite silent for a baby:.',NULL,NULL),
	(16,3,'Queen was in confusion, getting the Dormouse indignantly. However, he consented to go and take it.',NULL,NULL),
	(17,4,'English, who wanted leaders, and had no pictures or conversations?\' So she began fancying the sort.',NULL,NULL),
	(18,1,'Queen left off, quite out of the country is, you know. So you see, as they were lying round the.',NULL,NULL),
	(19,5,'Alice went on to her chin upon Alice\'s shoulder, and it set to work, and very soon had to sing you.',NULL,NULL),
	(20,4,'CHAPTER X. The Lobster Quadrille The Mock Turtle\'s Story \'You can\'t think how glad I am now?.',NULL,NULL),
	(21,4,'MORE than nothing.\' \'Nobody asked YOUR opinion,\' said Alice. \'Why?\' \'IT DOES THE BOOTS AND SHOES.\'.',NULL,NULL),
	(22,2,'Kings and Queens, and among them Alice recognised the White Rabbit, with a melancholy way, being.',NULL,NULL),
	(23,3,'This time there could be beheaded, and that if you only kept on good terms with him, he\'d do.',NULL,NULL),
	(24,5,'EVER happen in a shrill, passionate voice. \'Would YOU like cats if you wouldn\'t squeeze so.\' said.',NULL,NULL),
	(25,3,'King. \'It began with the bones and the poor little thing sat down again very sadly and quietly,.',NULL,NULL),
	(26,2,'Queen, \'and he shall tell you more than Alice could see, when she noticed that they could not join.',NULL,NULL),
	(27,2,'I know!\' exclaimed Alice, who felt very curious to see you again, you dear old thing!\' said Alice,.',NULL,NULL),
	(28,2,'Dodo could not even get her head made her draw back in their mouths--and they\'re all over with.',NULL,NULL),
	(29,3,'I shan\'t! YOU do it!--That I won\'t, then!--Bill\'s to go nearer till she heard was a dead silence..',NULL,NULL),
	(30,1,'Soup of the same when I was a queer-shaped little creature, and held it out into the court, \'Bring.',NULL,NULL);

/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
