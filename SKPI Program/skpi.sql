-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Feb 2018 pada 18.17
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skpi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `username`, `password`) VALUES
(3, 'Eko Febrianto Ramadhan', 'egansfebrianto78@gmail.com', '081331015', 'c30751a1402dd2662505de7512e6fd13'),
(6, 'rossa nur alfigus', 'rossanur.a@gmail.com', '081331006', '9aaede11df84572aa5db36606f6571e1'),
(7, 'maklin', 'linda.kreasi@yahoo.com', '081531002', '2658305406c30bd03a6b2bd6a41a4d5d'),
(8, 'nufriansyah', 'riangocek4@gmail.com', '081331028', '19eac84e1a5cc6d026147aae749a6897');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `sebagai` varchar(100) NOT NULL,
  `penyelenggara` varchar(100) NOT NULL,
  `sertifikat` varchar(100) NOT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_products_1` (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `tanggal`, `sebagai`, `penyelenggara`, `sertifikat`, `login_id`) VALUES
(5, 'seminar', '2018-02-13', 'peserta', 'SMFIK UNBOR', 'Array', 6),
(6, 'afsg', '2018-02-13', 'peserta', 'SMFIK UNBOR', 'Array', 6),
(7, 'ldkom', '2018-02-12', 'peserta', 'SMFIK UNBOR', 'Array', 7),
(9, 'workshop mobile legend of noob', '2018-02-07', 'peserta', 'asus rog', '', 8),
(10, 'Seminar Nasional Linux', '2018-02-07', 'Panitia Penyelengara', 'SMFIK UNBOR', '', 3);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_products_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
