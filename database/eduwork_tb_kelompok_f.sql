-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 04, 2023 at 03:35 PM
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
(1, 'cek.jpg', 'Cek Toko Sebelah', 3, 'Erwin memiliki karir gemilang di usia muda, dan kekasih cantik yang tak kalah sukses, Natalie. Tapi semua jadi pelik saat Koh Afuk yang kesehatannya makin memburuk, ingin mewariskan toko sembakonya kepada Erwin. Hal ini menimbulkan kecemburuan Yohan dan Istrinya.', 2016),
(2, '1.jpg', 'Who Am I?', 2, 'A Secret Agent loses his memory after falling from a crashing helicopter. He is then chased by several other agency operatives, but he has no idea why.', 1998),
(3, 'theraid.jpg', 'The Raid', 2, 'Di Jakarta, Indonesia, Letnan Wahyu mengorganisir invasi ke sebuah gedung apartemen yang merupakan rumah persembunyian dari gembong narkoba yang kuat dan kejam Tama dan kelompoknya. Tim SWAT masuk ke dalam gedung tetapi seorang pengawas melihat dan memperingatkan para gangster dan pasukan polisi terjebak di lantai tujuh. Mereka mengetahui bahwa Lt. Wahyu belum memberi tahu atasannya tentang operasi tersebut. Sekarang petugas polisi harus bertarung dengan amunisi terbatas melawan gangster bersenjata dan berbahaya.', 2011),
(4, 'raden.jpg', 'Mencuri Raden Shaleh', 4, 'Sekelompok mahasiswa, Piko \"The Forger\" (Iqbaal Ramadhan), Ucup \"The Hacker\" (Angga Yunanda), Fella \"The Negotiator\" (Rachel Amanda Aurora), Gofar \"The Handyman\" (Umay Shahab), Sarah \"The Brute\" (Aghniny Haque), dan Tuktuk \"The Driver\" (Ari Irham) berencana untuk mencuri lukisan bersejarah. Lukisan tersebut adalah Penangkapan Pangeran Diponegoro karya Raden Saleh, yang berada di Istana Presiden dan tak ternilai harganya. Masing-masing memiliki peran dan tugas yang berbeda dalam menjalankan rencana pencurian ini. Aksi pencurian ini tentunya tidak akan berjalan mudah. Apalagi, lukisan itu disimpan di Istana Presiden yang tentunya memiliki sistem keamanan superketat.', 2022),
(5, 'ben.jpg', 'Ben & Jody', 4, 'Sejak keluar dari Filosofi Kopi, Ben (Chicco Jerikho) yang kini aktif membela kelompok petani untuk melawan perusahaan, kini menghilang. Jody (Rio Dewanto) sebagai sahabat setianya pun melakukan pencarian untuk menemukan keberadaan Ben.', 2022),
(6, 'perta.jpg', 'Pertaruhan', 2, 'Film Pertaruhan bercerita tentang kehidupan 4 orang saudara laki-laki, Ibra (Adipati Dolken), Elzan (Jefri Nichol), Amar (Aliando Syarief), dan si bungsu Ical (Giulio Parengkuan). Mereka hidup sederhana bersama Ayah mereka, Pak Musa (Tio Pakusadewo) yang bekerja sebagai satpam di sebuah Bank.', 2022),
(7, 'dilan.jpg', 'Dilan 1990', 4, 'Milea (Vanesha Prescilla) bertemu dengan Dilan (Iqbaal Ramadhan) di sebuah SMA di Bandung. Itu adalah tahun 1990, saat Milea pindah dari Jakarta ke Bandung. Perkenalan yang tidak biasa kemudian membawa Milea mulai mengenal keunikan Dilan lebih jauh. Dilan yang pintar, baik hati dan romantis... semua dengan caranya sendiri. Cara Dilan mendekati Milea tidak sama dengan teman-teman lelakinya yang lain, bahkan Beni, pacar Milea di Jakarta. Bahkan cara berbicara Dilan yang terdengar kaku, lambat laun justru membuat Milea kerap merindukannya jika sehari saja ia tak mendengar suara itu. Perjalanan hubungan mereka tak selalu mulus. Beni, gank motor, tawuran, Anhar, Kang Adi, semua mewarnai perjalanan itu. Dan Dilan... dengan caranya sendiri...selalu bisa membuat Milea percaya ia bisa tiba di tujuan dengan selamat. Tujuan dari perjalanan ini. Perjalanan mereka berdua. Katanya, dunia SMA adalah dunia paling indah. Dunia Milea dan Dilan satu tingkat lebih indah daripada itu.', 2022),
(8, 'surat.jpg', 'Surat Cinta Untuk Starla', 4, 'Hema cowok yang terobsesi dengan cintanya pada alam memiliki keunikan membuat surat cinta untuk alam. Dengan dibantu mesin tik tuanya peninggalan sang kakek mantan jurnalis, Hema membuat mural yang menunjukkan betapa cintanya Hema pada alam ini. Alam adalah satu satunya cinta yang Hema kenal.Hingga suatu saat Hema mengenal Starla. Gadis cantik dan mandiri yang selama 6 jam telah berhasil membuatnya jatuh cinta. Untuk pertama kalinya Hema menyadari ada surat cinta yang lebih indah daripada surat cinta untuk alam yaitu surat cinta untuk Starla.Namun di saat Hema dan Starla semakin dekat, tiba tiba sikap Starla berubah. Starla marah dan menjauhi Hema bahkan menyuruh Hema melupakan 6 jam kisah mereka yang menjadi viral di sosial media bahkan disiarkan di radio oleh Athena, sahabat Hema.Hingga suatu ketika Hema baru mengetahui penyebab perubahan sikap Starla padanya yang berhubungan dengan sebuah rahasia masa lalu keluarga Hema.', 2017),
(9, 'guru.jpeg', 'Guru Guru Gokil', 3, 'Sinopsis. Guru-Guru Gokil bercerita tentang Taat (Gading Marten) yang berambisi untuk sukses, tapi lebih sering menemui kegagalan dalam karier. Baginya, kesuksesan berarti memiliki uang banyak. Hingga suatu saat, keadaan mengharuskan Taat untuk bekerja menjadi guru di sebuah sekolah.', 2020),
(10, 'negeri.jpg', 'Negeri di Bawah Kabut', 6, 'Keluarga Sudardi (32 tahun) dan Muryati (30 tahun) beserta masyarakat lain Desa Genikan di lereng Gunung Merbabu heran mengapa tahun ini hujan turun lebih banyak. Sistem kalender Jawa yang selama ini menjadi rujukan kegiatan tanam masyarakat kini tak lagi relevan dengan perubahan musim, gagal panen dan nilai tukar yang kian tak sebanding dengan biaya produksi menambah kompleksitas permasalahan yang dihadapi masyarakat. Di sisi lain, Arifin (12 tahun) terpaksa mengubur mimpinya bersekolah di SMP negeri karena keterbatasan biaya keluarganya meski ia memiliki nilai kelulusan tertinggi di antara teman-temannya. Orang tua Arifin berusaha mencari pinjaman pada tetangga dan kerabatnya yang lain, namun sama-sama hidup dalam keterbatasan, Arifin harus rela sekolah di pesantren dengan biaya yang lebih terjangkau.', 2016);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
