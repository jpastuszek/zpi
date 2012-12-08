-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2012 at 03:51 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ankiety`
--

-- --------------------------------------------------------

--
-- Table structure for table `ankieta`
--

CREATE TABLE IF NOT EXISTS `ankieta` (
  `id_ankieta` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` text COLLATE utf8_bin NOT NULL,
  `od` date NOT NULL,
  `do` date NOT NULL,
  `status` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT 'Robocza',
  `id_uzytkownik` int(11) NOT NULL,
  `p1` int(11) NOT NULL DEFAULT '1',
  `p2` int(11) NOT NULL DEFAULT '2',
  `p3` int(11) NOT NULL DEFAULT '3',
  `p4` int(11) NOT NULL DEFAULT '3',
  `p5` int(11) NOT NULL DEFAULT '3',
  `p6` int(11) NOT NULL DEFAULT '3',
  `pt1` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT 'Nazwa przedmiotu',
  `pt2` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT 'Wykładowca',
  `pt3` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT 'Wiedza wykładowcy',
  `pt4` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT 'Ciekawość przedmiotu',
  `pt5` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT 'Obecność',
  `pt6` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT 'Jakość',
  `id_kierunek` int(11) NOT NULL,
  PRIMARY KEY (`id_ankieta`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ankieta`
--

INSERT INTO `ankieta` (`id_ankieta`, `nazwa`, `od`, `do`, `status`, `id_uzytkownik`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `pt1`, `pt2`, `pt3`, `pt4`, `pt5`, `pt6`, `id_kierunek`) VALUES
(1, 'Ankieta testowa 1', '2012-05-17', '2012-06-12', 'Zbieranie', 1, 1, 2, 3, 3, 3, 3, 'Nazwa przedmiotu', 'WykÅ‚adowca', 'Wiedza wykÅ‚adowcy', 'CiekawoÅ›Ä‡ przedmiotu', 'ObecnoÅ›Ä‡', 'JakoÅ›Ä‡', 11),
(3, 'Nowa ankieta', '2012-06-01', '0000-00-00', 'Zbieranie', 0, 1, 2, 3, 3, 3, 3, 'Nazwa przedmiotu', 'Wyk?adowca', 'Wiedza wyk?adowcy', 'Ciekawo?? przedmiotu', 'Obecno??', 'Jako??', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ankieta_element`
--

CREATE TABLE IF NOT EXISTS `ankieta_element` (
  `id_ankieta_element` int(11) NOT NULL AUTO_INCREMENT,
  `id_element` int(11) NOT NULL,
  `id_ankieta` int(11) NOT NULL,
  `wartosc` text COLLATE utf8_bin NOT NULL,
  `pytanie` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_ankieta_element`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ankieta_element`
--

INSERT INTO `ankieta_element` (`id_ankieta_element`, `id_element`, `id_ankieta`, `wartosc`, `pytanie`) VALUES
(1, 5, 1, '', 'Podaj nazwe przedmiotu:'),
(2, 4, 1, '', 'Podaj nazwe wykladowcy:'),
(3, 2, 1, '', 'Skutecznosc nauki:'),
(4, 2, 1, '', 'Zapoznanie z materialem:'),
(5, 4, 1, '', 'Uwagi:');

-- --------------------------------------------------------

--
-- Table structure for table `ankieta_odp`
--

CREATE TABLE IF NOT EXISTS `ankieta_odp` (
  `id_ankieta_odp` int(11) NOT NULL AUTO_INCREMENT,
  `id_ankieta` int(11) NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  `p5` int(11) NOT NULL,
  `p6` int(11) NOT NULL,
  PRIMARY KEY (`id_ankieta_odp`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=134 ;

--
-- Dumping data for table `ankieta_odp`
--

INSERT INTO `ankieta_odp` (`id_ankieta_odp`, `id_ankieta`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`) VALUES
(132, 1, 4, 4, 5, 1, 3, 3),
(133, 1, 1, 2, 1, 2, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `element`
--

CREATE TABLE IF NOT EXISTS `element` (
  `id_element` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` text COLLATE utf8_bin NOT NULL,
  `kod` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_element`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `element`
--

INSERT INTO `element` (`id_element`, `nazwa`, `kod`) VALUES
(1, 'checkBox - 1', '<input type="checkbox" value="1" name="XXXXX" />'),
(2, 'radioButton - 5', '<input type="radio" value="1" name="XXXXX" /><input type="radio" value="2" name="XXXXX" /><input type="radio" value="3" name="XXXXX" /><input type="radio" value="4" name="XXXXX" /><input type="radio" value="5" name="XXXXX" />'),
(3, 'textbox', '<input type="text" size="100" value="YYYYY" name="XXXXX" />'),
(4, 'textbox_autocomplite Wykladowca', '<label for="wykladowca_autocomplete"></label><input id="wykladowca_autocomplete" name="XXXXX" value="YYYYY"/>'),
(5, 'textbox_autocomplite Przedmioty', '<label for="przedmioty_autocomplete">YYYYY</label><input id="przedmioty_autocomplete" name="XXXXX "/>');

-- --------------------------------------------------------

--
-- Table structure for table `hash`
--

CREATE TABLE IF NOT EXISTS `hash` (
  `id_hash` int(11) NOT NULL AUTO_INCREMENT,
  `id_ankieta` int(11) NOT NULL,
  `hash` varchar(32) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_hash`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `kierunek`
--

CREATE TABLE IF NOT EXISTS `kierunek` (
  `id_kierunek` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_kierunek`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

--
-- Dumping data for table `kierunek`
--

INSERT INTO `kierunek` (`id_kierunek`, `nazwa`) VALUES
(1, 'Informatyka 2011/2012'),
(2, 'Informatyka 2010/2011'),
(3, 'Informatyka 2009/2010'),
(11, 'Informatyka 2012i'),
(13, ''),
(12, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id_mail` int(11) NOT NULL AUTO_INCREMENT,
  `id_kierunek` int(11) NOT NULL,
  `mail` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_mail`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id_mail`, `id_kierunek`, `mail`) VALUES
(1, 1, 'a@a.pl'),
(2, 1, 'asd@asd.pl'),
(3, 1, 'a@aa.pl'),
(4, 1, 'ss@a.pl'),
(5, 12, 'dfadsa'),
(6, 11, 'adsa');

-- --------------------------------------------------------

--
-- Table structure for table `przedmiot`
--

CREATE TABLE IF NOT EXISTS `przedmiot` (
  `id_przedmiot` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_przedmiot`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Dumping data for table `przedmiot`
--

INSERT INTO `przedmiot` (`id_przedmiot`, `nazwa`) VALUES
(1, 'Przedmiot 1'),
(2, 'Przedmiot 2'),
(3, 'Przedmiot 3'),
(4, 'Przedmiot 4'),
(5, 'Przedmiot 5'),
(6, 'dsadd'),
(7, 'Å¼a'),
(8, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `uzytkownik`
--

CREATE TABLE IF NOT EXISTS `uzytkownik` (
  `id_uzytkownik` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) COLLATE utf8_bin NOT NULL,
  `haslo` text COLLATE utf8_bin NOT NULL,
  `ostatnio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_uzytkownik`),
  UNIQUE KEY `login` (`login`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `uzytkownik`
--

INSERT INTO `uzytkownik` (`id_uzytkownik`, `login`, `haslo`, `ostatnio`) VALUES
(1, 'a', '0cc175b9c0f1b6a831c399e269772661', '2012-06-01 01:50:16'),
(2, 'b', '92eb5ffee6ae2fec3ad71c777531578f', '2012-05-31 20:44:07'),
(3, 'aa', 'd41d8cd98f00b204e9800998ecf8427e', '2012-05-31 21:04:21');

-- --------------------------------------------------------

--
-- Table structure for table `wykladowca`
--

CREATE TABLE IF NOT EXISTS `wykladowca` (
  `id_wykladowca` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_wykladowca`),
  UNIQUE KEY `nazwa` (`nazwa`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=16 ;

--
-- Dumping data for table `wykladowca`
--

INSERT INTO `wykladowca` (`id_wykladowca`, `nazwa`) VALUES
(2, 'wyk 2'),
(3, 'wyk 3'),
(4, 'wyk 4'),
(5, 'wyk 52'),
(8, 'aa'),
(9, 'bb'),
(10, 'cc'),
(11, 'fd'),
(12, 'fg'),
(13, 'asddas'),
(14, 'ddd'),
(15, 'aad');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
