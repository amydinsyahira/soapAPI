-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 17. Agustus 2011 jam 16:11
-- Versi Server: 5.1.33
-- Versi PHP: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `api`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `weather`
--

CREATE TABLE IF NOT EXISTS `weather` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city` varchar(20) DEFAULT NULL,
  `degrees` float NOT NULL DEFAULT '0',
  `forecast` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `city` (`city`),
  KEY `city_2` (`city`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `weather`
--

INSERT INTO `weather` (`id`, `city`, `degrees`, `forecast`) VALUES
(1, 'Chicago', 5, 'Partly cloudy.'),
(2, 'London', 15, 'Sun along with patchy clouds.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `idmember` int(11) NOT NULL AUTO_INCREMENT,
  `member` varchar(30) NOT NULL,
  `api_key` varchar(100) NOT NULL,
  `api_token` varchar(100) NOT NULL,
  PRIMARY KEY (`idmember`),
  UNIQUE KEY `member` (`member`,`api_key`,`api_token`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`idmember`, `member`, `api_key`, `api_token`) VALUES
(1, 'Amydin', '1f23087e61073d855eb287142a14a41a', '699bac0da9e26c7f30b44869d6113fd0');
