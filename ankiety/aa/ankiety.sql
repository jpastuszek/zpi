-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 17, 2012 at 10:03 PM
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
  `od` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `do` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT 'Robocza',
  `id_uzytkownik` int(11) NOT NULL,
  PRIMARY KEY (`id_ankieta`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ankieta`
--

INSERT INTO `ankieta` (`id_ankieta`, `nazwa`, `od`, `do`, `status`, `id_uzytkownik`) VALUES
(1, 'Ankieta testowa 1', '2012-05-17 19:55:39', '0000-00-00 00:00:00', 'Robocza', 1);

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
  `id_ankieta_element` int(11) NOT NULL,
  `id_ankieta` int(11) NOT NULL,
  `odp` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_ankieta_odp`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=127 ;

--
-- Dumping data for table `ankieta_odp`
--

INSERT INTO `ankieta_odp` (`id_ankieta_odp`, `id_ankieta_element`, `id_ankieta`, `odp`) VALUES
(84, 4, 1, 'domyslna wartosc odpowiedzi'),
(82, 5, 1, 'ActionScript'),
(83, 4, 1, 'domyslna wartosc odpowiedzi'),
(81, 4, 1, 'domyslna wartosc odpowiedzi'),
(80, 3, 1, '3'),
(79, 2, 1, '3'),
(77, 5, 1, ''),
(78, 1, 1, '3'),
(76, 4, 1, 'domyslna wartosc odpowiedzi'),
(75, 5, 1, ''),
(74, 4, 1, 'domyslna wartosc odpowiedzi'),
(73, 5, 1, ''),
(71, 3, 1, '3'),
(72, 4, 1, 'domyslna wartosc odpowiedzi'),
(70, 2, 1, '4'),
(69, 1, 1, '4'),
(68, 5, 1, ''),
(67, 4, 1, 'domyslna wartosc odpowiedzi'),
(85, 5, 1, ''),
(86, 5, 1, ''),
(87, 4, 1, 'domyslna wartosc odpowiedzi'),
(88, 4, 1, 'domyslna wartosc odpowiedzi'),
(89, 5, 1, ''),
(90, 5, 1, ''),
(91, 3, 1, '4'),
(92, 3, 1, '4'),
(93, 4, 1, 'domyslna wartosc odpowiedzi'),
(94, 4, 1, 'domyslna wartosc odpowiedzi'),
(95, 5, 1, ''),
(96, 5, 1, ''),
(97, 4, 1, 'domyslna wartosc odpowiedzi'),
(98, 4, 1, 'domyslna wartosc odpowiedzi'),
(99, 5, 1, ''),
(100, 5, 1, ''),
(101, 4, 1, 'domyslna wartosc odpowiedzi'),
(102, 4, 1, 'domyslna wartosc odpowiedzi'),
(103, 5, 1, ''),
(104, 5, 1, ''),
(105, 4, 1, 'domyslna wartosc odpowiedzi'),
(106, 5, 1, ''),
(107, 4, 1, 'domyslna wartosc odpowiedzi'),
(108, 5, 1, ''),
(109, 4, 1, 'domyslna wartosc odpowiedzi'),
(110, 5, 1, ''),
(111, 4, 1, 'domyslna wartosc odpowiedzi'),
(112, 5, 1, ''),
(113, 4, 1, 'domyslna wartosc odpowiedzi'),
(114, 5, 1, ''),
(115, 4, 1, 'domyslna wartosc odpowiedzi'),
(116, 5, 1, ''),
(117, 4, 1, 'domyslna wartosc odpowiedzi'),
(118, 5, 1, ''),
(119, 2, 1, ''),
(120, 4, 1, 'domyslna wartosc odpowiedzi'),
(121, 5, 1, ''),
(122, 1, 1, 'Przedmiot 1'),
(123, 2, 1, 'wykladowca 1'),
(124, 3, 1, '4'),
(125, 4, 1, '3'),
(126, 5, 1, 'brak');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hash`
--

INSERT INTO `hash` (`id_hash`, `id_ankieta`, `hash`) VALUES
(4, 1, '2'),
(5, 1, '3'),
(6, 1, '4');

-- --------------------------------------------------------

--
-- Table structure for table `kierunek`
--

CREATE TABLE IF NOT EXISTS `kierunek` (
  `id_kierunek` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_kierunek`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- Dumping data for table `kierunek`
--

INSERT INTO `kierunek` (`id_kierunek`, `nazwa`) VALUES
(1, 'Informatyka 2011/2012'),
(2, 'Informatyka 2010/2011'),
(3, 'Informatyka 2009/2010'),
(10, 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id_mail` int(11) NOT NULL AUTO_INCREMENT,
  `id_kierunek` int(11) NOT NULL,
  `mail` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_mail`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `przedmiot`
--

CREATE TABLE IF NOT EXISTS `przedmiot` (
  `id_przedmiot` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_przedmiot`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

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
(7, 'Å¼');

-- --------------------------------------------------------

--
-- Table structure for table `uzytkownik`
--

CREATE TABLE IF NOT EXISTS `uzytkownik` (
  `id_uzytkownik` int(11) NOT NULL AUTO_INCREMENT,
  `login` text COLLATE utf8_bin NOT NULL,
  `haslo` text COLLATE utf8_bin NOT NULL,
  `ostatnio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_uzytkownik`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `uzytkownik`
--

INSERT INTO `uzytkownik` (`id_uzytkownik`, `login`, `haslo`, `ostatnio`) VALUES
(1, 'a', '0cc175b9c0f1b6a831c399e269772661', '2012-05-17 13:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `wykladowca`
--

CREATE TABLE IF NOT EXISTS `wykladowca` (
  `id_wykladowca` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_wykladowca`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Dumping data for table `wykladowca`
--

INSERT INTO `wykladowca` (`id_wykladowca`, `nazwa`) VALUES
(1, 'wykladowca 1'),
(2, 'wyk 2'),
(3, 'wyk 3'),
(4, 'wyk 4'),
(5, 'wyk 5'),
(6, 'wyk 6'),
(7, 'dr. S. G');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
