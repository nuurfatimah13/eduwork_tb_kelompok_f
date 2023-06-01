-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2023 at 07:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduwork_tb_kelompok_f`
--

-- --------------------------------------------------------

--
-- Table structure for table `cast`
--

CREATE TABLE `cast` (
  `id` int(11) NOT NULL,
  `nama` varchar(65) NOT NULL,
  `umur` int(11) NOT NULL,
  `bio` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cast`
--

INSERT INTO `cast` (`id`, `nama`, `umur`, `bio`) VALUES
(1, 'Arifin Putra', 30, 'Aktor terbaik Indonesian movie awards 2010'),
(2, 'Alex Abbad', 31, 'penyair, pembawa acara, musisi, seniman visual, dan produser musik.'),
(3, 'Christine Hakim', 40, 'aktris, produser film, dan aktivis Indonesia.'),
(4, 'Cinta Laura', 29, 'Penyayi dan Aktris'),
(5, 'Tania Gunadi', 39, 'Aktris Muslim Film Disney'),
(6, 'Kiki Narendra', 43, 'Aktor dan Musisi'),
(7, 'Jackie Chan', 50, 'aktor, sutradara, pemeran pengganti, produser film, aktor bela diri, aktor komedi, penulis naskah layar lebar dan penyanyi dari Hong Kong'),
(8, 'Joseph Mazzello', 34, 'Aktor Amerika');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `poster` varchar(60) DEFAULT NULL,
  `judul` varchar(65) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `ringkasan` text NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `poster`, `judul`, `genre_id`, `ringkasan`, `tahun`) VALUES
(1, 'image.jpg', 'sengkuni', 3, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam tempore eveniet, non, dolorum blanditiis eos voluptas quae maxime doloribus dicta, facilis consectetur? Dicta fugit, molestias possimus ullam eum omnis provident?', 2023),
(2, '1.jpg', 'Who Am I?', 2, 'A Secret Agent loses his memory after falling from a crashing helicopter. He is then chased by several other agency operatives, but he has no idea why.', 1998),
(24, 'theraid.jpg', 'The Raid', 2, 'Di Jakarta, Indonesia, Letnan Wahyu mengorganisir invasi ke sebuah gedung apartemen yang merupakan rumah persembunyian dari gembong narkoba yang kuat dan kejam Tama dan kelompoknya. Tim SWAT masuk ke dalam gedung tetapi seorang pengawas melihat dan memperingatkan para gangster dan pasukan polisi terjebak di lantai tujuh. Mereka mengetahui bahwa Lt. Wahyu belum memberi tahu atasannya tentang operasi tersebut. Sekarang petugas polisi harus bertarung dengan amunisi terbatas melawan gangster bersenjata dan berbahaya.', 2011);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `nama`) VALUES
(1, 'Adventure'),
(2, 'Action'),
(3, 'Comedy'),
(4, 'Drama'),
(5, 'History'),
(6, 'Documentary'),
(7, 'Fantasy'),
(8, 'Science-Fiction'),
(10, 'Sport'),
(11, 'Horror');

-- --------------------------------------------------------

--
-- Table structure for table `kritik`
--

CREATE TABLE `kritik` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `content` text DEFAULT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peran`
--

CREATE TABLE `peran` (
  `id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `cast_id` int(11) NOT NULL,
  `peran` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `photo` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cast`
--
ALTER TABLE `cast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_film_genre` (`genre_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kritik_users1` (`users_id`),
  ADD KEY `fk_kritik_film1` (`film_id`);

--
-- Indexes for table `peran`
--
ALTER TABLE `peran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_peran_film1` (`film_id`),
  ADD KEY `fk_peran_cast1` (`cast_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cast`
--
ALTER TABLE `cast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peran`
--
ALTER TABLE `peran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `fk_film_genre` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kritik`
--
ALTER TABLE `kritik`
  ADD CONSTRAINT `fk_kritik_film1` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kritik_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `peran`
--
ALTER TABLE `peran`
  ADD CONSTRAINT `fk_peran_cast1` FOREIGN KEY (`cast_id`) REFERENCES `cast` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peran_film1` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
