-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2012 at 05:18 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `facebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `mechal_job_fan_pages`
--

CREATE TABLE IF NOT EXISTS `mechal_job_fan_pages` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mechal_job_fan_pages`
--

INSERT INTO `mechal_job_fan_pages` (`id`, `name`, `url`) VALUES
('340594948486', '1-Production Notices', 'http://www.facebook.com/profile.php?id=340594948486'),
('10150099097035400', 'Los Angeles', 'http://www.facebook.com/profile.php?id=10150099097035394'),
('340393384294', 'New York', 'http://www.facebook.com/profile.php?id=340393384294'),
('341311581023', 'Canada', 'http://www.facebook.com/profile.php?id=341311581023'),
('344539093511', 'Atlanta', 'http://www.facebook.com/profile.php?id=344539093511'),
('241777164986', 'Chicago', 'http://www.facebook.com/profile.php?id=241777164986'),
('380195289539', 'Texas', 'http://www.facebook.com/profile.php?id=380195289539'),
('356936495352', 'Louisiana', 'http://www.facebook.com/profile.php?id=356936495352'),
('243411419980', 'Miami', 'http://www.facebook.com/profile.php?id=243411419980'),
('10150111739355500', 'Orlando', 'http://www.facebook.com/profile.php?id=10150111739355472'),
('366472118021', 'Carolinas', 'http://www.facebook.com/profile.php?id=366472118021'),
('10150124847730500', 'Detroit', 'http://www.facebook.com/profile.php?id=10150124847730478'),
('356899197093', 'San Francisco', 'http://www.facebook.com/profile.php?id=356899197093'),
('354558644019', 'Tennessee', 'http://www.facebook.com/profile.php?id=354558644019'),
('370373044454', 'UNPAID', 'http://www.facebook.com/profile.php?id=370373044454'),
('359610113596', 'New England', 'http://www.facebook.com/profile.php?id=359610113596'),
('370900258751', 'D.C.', 'http://www.facebook.com/profile.php?id=370900258751'),
('351608436432', 'Las Vegas', 'http://www.facebook.com/profile.php?id=351608436432'),
('112270522137736', 'Los Angeles LB', 'http://www.facebook.com/profile.php?id=112270522137736'),
('361966406147', 'Seattle', 'http://www.facebook.com/profile.php?id=361966406147'),
('369076353890', 'Arizona', 'http://www.facebook.com/profile.php?id=369076353890'),
('371454011916', 'Philadelphia', 'http://www.facebook.com/profile.php?id=371454011916'),
('345046473303', 'United Kingdom', 'http://www.facebook.com/profile.php?id=345046473303'),
('363249480495', 'Hawaii', 'http://www.facebook.com/profile.php?id=363249480495'),
('375154954904', 'Denver', 'http://www.facebook.com/profile.php?id=375154954904'),
('105375256164185', 'Kansas', 'http://www.facebook.com/profile.php?id=105375256164185'),
('109347409089512', 'Utah', 'http://www.facebook.com/profile.php?id=109347409089512'),
('113243222023540', 'Oregon', 'http://www.facebook.com/profile.php?id=113243222023540'),
('113251445354266', 'Ohio', 'http://www.facebook.com/profile.php?id=113251445354266'),
('136360553041607', 'Pennsylvania', 'http://www.facebook.com/profile.php?id=136360553041607'),
('126737917340063', 'Kentucky', 'http://www.facebook.com/profile.php?id=126737917340063'),
('380316564864', 'New Mexico', 'http://www.facebook.com/profile.php?id=380316564864'),
('103767399662515', 'Twin Cities', 'http://www.facebook.com/profile.php?id=103767399662515'),
('126669780703886', 'North Florida', 'http://www.facebook.com/profile.php?id=126669780703886'),
('101611819916179', 'Tampa', 'http://www.facebook.com/profile.php?id=101611819916179'),
('112223448823381', 'Missouri', 'http://www.facebook.com/profile.php?id=112223448823381'),
('115593771789291', 'Virginias', 'http://www.facebook.com/profile.php?id=115593771789291'),
('159459714077484', 'New York LB', 'http://www.facebook.com/profile.php?id=159459714077484'),
('143553375662894', 'Iowa', 'http://www.facebook.com/profile.php?id=143553375662894'),
('156651234354438', 'Indiana', 'http://www.facebook.com/profile.php?id=156651234354438'),
('162078140475117', 'Nebraska', 'http://www.facebook.com/profile.php?id=162078140475117'),
('168808186517200', 'Wisconsin', 'http://www.facebook.com/profile.php?id=168808186517200'),
('194258397284993', 'Oklahoma', 'http://www.facebook.com/profile.php?id=194258397284993'),
('279988305394373', 'Georgia', 'http://www.facebook.com/profile.php?id=279988305394373'),
('321316837890160', 'San Diego', 'http://www.facebook.com/profile.php?id=321316837890160'),
('130906080347044', 'Mississippi', 'http://www.facebook.com/profile.php?id=130906080347044'),
('112157215547961', 'Dakotas', 'http://www.facebook.com/profile.php?id=112157215547961'),
('200309883409917', 'New Jersey', 'http://www.facebook.com/profile.php?id=200309883409917'),
('121469234620569', 'Montana', 'https://www.facebook.com/pages/Production-Notices-Montana/121469234620569'),
('204280009604165', 'Idaho', 'http://www.facebook.com/profile.php?id=204280009604165'),
('101249296581487', '2-Casting Notices', 'http://www.facebook.com/profile.php?id=101249296581487'),
('132594570119089', 'Sandbox 2', 'http://www.facebook.com/profile.php?id=132594570119089'),
('111958325523939', 'Sandbox 3', 'http://www.facebook.com/profile.php?id=111958325523939');

-- --------------------------------------------------------

--
-- Table structure for table `mechal_job_jobs`
--

CREATE TABLE IF NOT EXISTS `mechal_job_jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `day` tinyint(4) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `link_to_apply` varchar(255) DEFAULT NULL,
  `fan_page_id` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `country_state` varchar(255) DEFAULT NULL,
  `month` tinyint(4) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `rate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `mechal_job_jobs`
--

INSERT INTO `mechal_job_jobs` (`id`, `title`, `day`, `duration`, `link_to_apply`, `fan_page_id`, `description`, `image`, `country_state`, `month`, `year`, `rate`) VALUES
(15, 'Work Alert ! This is another posting', 0, '', 'http://www.henoz.com', '111958325523939', '<p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">A quick brown fox jumbed over a lazy dog.&nbsp;A quick brown fox jumbed over a lazy dog.&nbsp;A quick brown fox jumbed over a lazy dog.&nbsp;A quick brown fox jumbed over a lazy dog.&nbsp;A quick brown fox jumbed over a lazy dog.</span></p>', 'thumb-small.jpg', '', 0, '', 'FULLY PAID'),
(16, 'Web Content Writer', 0, '', 'http://www.henoz.com', '111958325523939', '<p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Description of&nbsp;Web Content Writer&nbsp;Web Content Writer&nbsp;Web Content Writer&nbsp;Web Content Writer&nbsp;Web Content Writer&nbsp;Web Content Writer&nbsp;Web Content Writer&nbsp;Web Content Writer&nbsp;Web Content Writer&nbsp;Web Content Writer&nbsp;</span></p>', '', '', 0, '', 'FULLY PAID'),
(17, 'WORK ALERT! MIAMI, FL - PRODUCTION ASSISTANTS ', 0, '', 'http://bit.ly/IskQAo', '111958325523939', '<p>Job Description: Documentary Production looking for experienced Production Assistants for dates from 05/10/12 &ndash; 05/21/12. We are looking for local PA&rsquo;s that understand the Release process and can perform both in office and the field. We are looking for PA''s that love working in TV, have great attitudes, who want to work/learn with a great team. Pleas have your own car to get to work, a clean license and driving record and ready to work a standard production day. Please email your resume, you will be called</p>\n<p>Start Date (approx): 2012-05-10<br />Duration: 10 Days<br />Rate: Fully Paid</p>', '', '', 0, '', 'FULLY PAID'),
(18, 'Hello again', 0, '', 'http://asdf.d.d.f', '370900258751', '<p>dfefefeasdfsf</p>', 'tw-tacoma.csv', '', 0, '', 'FULLY PAID'),
(14, 'Show Runner/Supervising ep', 0, '', 'http://www.henoz.com', '111958325523939', '<p><span style="font-family: arial, helvetica, sans-serif; font-size: small;"><strong>If required, can bring</strong> my colleague in (who''s just as good as I am).Understand critical deadlines and specialize in saving</span></p>\n<ul>\n<li><span style="font-family: arial, helvetica, sans-serif; font-size: small;">employers'' I''ve been working as a lead developer for 6 years.</span></li>\n<li><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Have strong skills in all modern web technologies - top 10%</span></li>\n</ul>\n<p>&nbsp;</p>', 'cover_2.jpg', '', 0, '', 'FULLY PAID');

-- --------------------------------------------------------

--
-- Table structure for table `mechal_job_users`
--

CREATE TABLE IF NOT EXISTS `mechal_job_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mechal_job_users`
--

INSERT INTO `mechal_job_users` (`id`, `name`, `password`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');
