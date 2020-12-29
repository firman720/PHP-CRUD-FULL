-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Des 2020 pada 19.32
-- Versi Server: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tutorial_crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `umur` varchar(2) NOT NULL,
  `kelas` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `umur`, `kelas`) VALUES
(1, ' DODIT WIDODO', '12', '5'),
(2, 'RIKA ANDINI', '12', '6'),
(3, 'Aldi', '12', '6'),
(4, 'Rika', '11', '5'),
(5, 'Aldo', '12', '6'),
(6, 'Fina', '7', '1'),
(7, 'Agus', '12', '6'),
(8, 'Risky', '8', '4'),
(9, 'Riyan', '8', '4'),
(10, 'Galih', '12', '6'),
(11, 'Gilang', '11', '5'),
(12, 'Susanti', '12', '6'),
(13, 'Aldi', '12', '6'),
(14, 'Rika', '11', '5'),
(15, 'Aldo', '12', '6'),
(16, 'Fina', '7', '1'),
(17, 'Agus', '12', '6'),
(18, 'Risky', '8', '4'),
(19, 'Riyan', '8', '4'),
(20, 'Galih', '12', '6'),
(21, 'Gilang', '11', '5'),
(22, 'Susanti', '12', '6');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
