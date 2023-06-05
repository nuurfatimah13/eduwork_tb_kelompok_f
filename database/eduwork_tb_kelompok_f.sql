-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2023 pada 07.35
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

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
-- Struktur dari tabel `cast`
--

CREATE TABLE `cast` (
  `id` int(11) NOT NULL,
  `nama` varchar(65) NOT NULL,
  `umur` int(11) NOT NULL,
  `bio` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `cast`
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
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `poster` varchar(60) DEFAULT NULL,
  `judul` varchar(65) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `ringkasan` text NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id`, `poster`, `judul`, `genre_id`, `trailer`, `ringkasan`, `tahun`) VALUES
(1, 'cek.jpg', 'Cek Toko Sebelah', 3, 'https://youtu.be/r9NJveLN3zI', 'Erwin memiliki karir gemilang di usia muda, dan kekasih cantik yang tak kalah sukses, Natalie. Tapi semua jadi pelik saat Koh Afuk yang kesehatannya makin memburuk, ingin mewariskan toko sembakonya kepada Erwin. Hal ini menimbulkan kecemburuan Yohan dan Istrinya.', 2016),
(2, '1.jpg', 'Who Am I?', 2, 'https://youtu.be/d5ejiic3db4', 'A Secret Agent loses his memory after falling from a crashing helicopter. He is then chased by several other agency operatives, but he has no idea why.', 1998),
(3, 'theraid.jpg', 'The Raid', 2, 'https://youtu.be/m6Q7KnXpNOg', 'Di Jakarta, Indonesia, Letnan Wahyu mengorganisir invasi ke sebuah gedung apartemen yang merupakan rumah persembunyian dari gembong narkoba yang kuat dan kejam Tama dan kelompoknya. Tim SWAT masuk ke dalam gedung tetapi seorang pengawas melihat dan memperingatkan para gangster dan pasukan polisi terjebak di lantai tujuh. Mereka mengetahui bahwa Lt. Wahyu belum memberi tahu atasannya tentang operasi tersebut. Sekarang petugas polisi harus bertarung dengan amunisi terbatas melawan gangster bersenjata dan berbahaya.', 2011),
(4, 'raden.jpg', 'Mencuri Raden Shaleh', 4, 'https://youtu.be/DN3sRz_veBU', 'Sekelompok mahasiswa, Piko \"The Forger\" (Iqbaal Ramadhan), Ucup \"The Hacker\" (Angga Yunanda), Fella \"The Negotiator\" (Rachel Amanda Aurora), Gofar \"The Handyman\" (Umay Shahab), Sarah \"The Brute\" (Aghniny Haque), dan Tuktuk \"The Driver\" (Ari Irham) berencana untuk mencuri lukisan bersejarah. Lukisan tersebut adalah Penangkapan Pangeran Diponegoro karya Raden Saleh, yang berada di Istana Presiden dan tak ternilai harganya. Masing-masing memiliki peran dan tugas yang berbeda dalam menjalankan rencana pencurian ini. Aksi pencurian ini tentunya tidak akan berjalan mudah. Apalagi, lukisan itu disimpan di Istana Presiden yang tentunya memiliki sistem keamanan superketat.', 2022),
(5, 'ben.jpg', 'Ben & Jody', 4, 'https://youtu.be/RHTrW0LN3E4', 'Sejak keluar dari Filosofi Kopi, Ben (Chicco Jerikho) yang kini aktif membela kelompok petani untuk melawan perusahaan, kini menghilang. Jody (Rio Dewanto) sebagai sahabat setianya pun melakukan pencarian untuk menemukan keberadaan Ben.', 2022),
(6, 'perta.jpg', 'Pertaruhan', 2, 'https://youtu.be/4F-GABByM6o', 'Film Pertaruhan bercerita tentang kehidupan 4 orang saudara laki-laki, Ibra (Adipati Dolken), Elzan (Jefri Nichol), Amar (Aliando Syarief), dan si bungsu Ical (Giulio Parengkuan). Mereka hidup sederhana bersama Ayah mereka, Pak Musa (Tio Pakusadewo) yang bekerja sebagai satpam di sebuah Bank.', 2022),
(7, 'dilan.jpg', 'Dilan 1990', 4, 'https://youtu.be/X_b-wNkz4DU', 'Milea (Vanesha Prescilla) bertemu dengan Dilan (Iqbaal Ramadhan) di sebuah SMA di Bandung. Itu adalah tahun 1990, saat Milea pindah dari Jakarta ke Bandung. Perkenalan yang tidak biasa kemudian membawa Milea mulai mengenal keunikan Dilan lebih jauh. Dilan yang pintar, baik hati dan romantis... semua dengan caranya sendiri. Cara Dilan mendekati Milea tidak sama dengan teman-teman lelakinya yang lain, bahkan Beni, pacar Milea di Jakarta. Bahkan cara berbicara Dilan yang terdengar kaku, lambat laun justru membuat Milea kerap merindukannya jika sehari saja ia tak mendengar suara itu. Perjalanan hubungan mereka tak selalu mulus. Beni, gank motor, tawuran, Anhar, Kang Adi, semua mewarnai perjalanan itu. Dan Dilan... dengan caranya sendiri...selalu bisa membuat Milea percaya ia bisa tiba di tujuan dengan selamat. Tujuan dari perjalanan ini. Perjalanan mereka berdua. Katanya, dunia SMA adalah dunia paling indah. Dunia Milea dan Dilan satu tingkat lebih indah daripada itu.', 2022),
(8, 'surat.jpg', 'Surat Cinta Untuk Starla', 4, 'https://youtu.be/CEwLJnrT3X0', 'Hema cowok yang terobsesi dengan cintanya pada alam memiliki keunikan membuat surat cinta untuk alam. Dengan dibantu mesin tik tuanya peninggalan sang kakek mantan jurnalis, Hema membuat mural yang menunjukkan betapa cintanya Hema pada alam ini. Alam adalah satu satunya cinta yang Hema kenal.Hingga suatu saat Hema mengenal Starla. Gadis cantik dan mandiri yang selama 6 jam telah berhasil membuatnya jatuh cinta. Untuk pertama kalinya Hema menyadari ada surat cinta yang lebih indah daripada surat cinta untuk alam yaitu surat cinta untuk Starla.Namun di saat Hema dan Starla semakin dekat, tiba tiba sikap Starla berubah. Starla marah dan menjauhi Hema bahkan menyuruh Hema melupakan 6 jam kisah mereka yang menjadi viral di sosial media bahkan disiarkan di radio oleh Athena, sahabat Hema.Hingga suatu ketika Hema baru mengetahui penyebab perubahan sikap Starla padanya yang berhubungan dengan sebuah rahasia masa lalu keluarga Hema.', 2017),
(9, 'guru.jpeg', 'Guru Guru Gokil', 3, 'https://youtu.be/Z7kRxHxJ4dQ', 'Sinopsis. Guru-Guru Gokil bercerita tentang Taat (Gading Marten) yang berambisi untuk sukses, tapi lebih sering menemui kegagalan dalam karier. Baginya, kesuksesan berarti memiliki uang banyak. Hingga suatu saat, keadaan mengharuskan Taat untuk bekerja menjadi guru di sebuah sekolah.', 2020),
(10, 'negeri.jpg', 'Negeri di Bawah Kabut', 6, 'https://youtu.be/fl7gB1LoBdM', 'Keluarga Sudardi (32 tahun) dan Muryati (30 tahun) beserta masyarakat lain Desa Genikan di lereng Gunung Merbabu heran mengapa tahun ini hujan turun lebih banyak. Sistem kalender Jawa yang selama ini menjadi rujukan kegiatan tanam masyarakat kini tak lagi relevan dengan perubahan musim, gagal panen dan nilai tukar yang kian tak sebanding dengan biaya produksi menambah kompleksitas permasalahan yang dihadapi masyarakat. Di sisi lain, Arifin (12 tahun) terpaksa mengubur mimpinya bersekolah di SMP negeri karena keterbatasan biaya keluarganya meski ia memiliki nilai kelulusan tertinggi di antara teman-temannya. Orang tua Arifin berusaha mencari pinjaman pada tetangga dan kerabatnya yang lain, namun sama-sama hidup dalam keterbatasan, Arifin harus rela sekolah di pesantren dengan biaya yang lebih terjangkau.', 2016),
(39, 'uncharted.jpg', 'Uncharted', 1,'', 'Nathan Drake direkrut oleh pemburu harta karun berpengalaman Victor Sullivan (Sully) untuk mengembalikan kekayaan yang dikumpulkan oleh Ferdinand Magellan dan hilang 500 tahun yang lalu oleh House of Moncada.', 2022),
(40, 'hunger.jpeg', 'The Hunger Games : The Ballad Of SongsBirds And Snake', 1, '', 'Bertahun-tahun sebelum menjadi Presiden Panem yang keji, Coriolanus Snow adalah remaja 18 tahun yang harus mengubah takdir keluarganya. Lewat Hunger Games ke-10. Coriolanus harus menjadi mentor seorang peserta bernama Lucy Gray Baird dari Distrik 12. Mengetahui sifat pemberontak yang dimiliki muridnya, Coriolanus membangun rencana licik untuk mendapatkan keunggulan secara politis', 2023),
(43, 'mi.jpeg', 'MISSION IMPOSSIBLE : DEAD RECKONING', 2, '', 'Pada IMPOSSIBLE : DEAD RECKONING PART 1, Tom Cruise yang berperan sebagai Ethan Hunt masih melanjutkan misi sebagai agen Impossible Missions Force (IMF). Ethan Hunt dan agen IMF lainnya akan melakukan berbagai aksi berbahaya untuk menyelesaikan misinya.', 2023),
(44, 'jones.jpeg', 'Indiana Jones And The Dial Of Destiny 5', 1, '', 'Indiana Jones and The Dial of Destiny 5', 2023),
(45, 'the nun 2.jpeg', 'The Nun 2', 11, '', 'Pada film The Nun 2 ini akan belatarkan cerita di Eropa tahun 1952, dimana terdapt banyak kejadian kejadian horror.  Kejadian horror tersebut banyak menimpa Suster Irene yang dipernakan oleh Taissa Farmiga. Film horror The Nun menjadi film urutan pertama yang ada di timeline The Conjuring. Maka dari itu cerita original Valak yang ada dari situ akan di bawa ke mana saja pastinya.', 2023),
(46, 'flash.jpeg', 'The Flash', 2, '', 'The Flash (2023) masih berkisah tentang pahlawan super bernama Barry Allen yang dikenal dengan The Flash. Sebagai salah satu pahlawan super, kekuatan utama The Flash adalah kemampuannya memiliki kecepatan super secepat kilat. Barry Allen memanfaatkan kekuatan yang ia miliki untuk kembali ke masa lalu.  Tujuan perjalanan ke masa lalu yang ditempuh Barry Allen adalah untuk mencegah kematian ibu. Perjalanan menembus ruang dan waktu memiliki resiko besar dan Barry Allen pun sudah diperingati oleh Batman, tapi keputusan Barry Allen sudah bulat. Dalam perjalanannya The Flash menabrak garis waktu lain dan membawanya ke zaman di mana Jenderal Zod berkuasa.', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `genre`
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
-- Struktur dari tabel `kritik`
--

CREATE TABLE `kritik` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `content` text DEFAULT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kritik`
--

INSERT INTO `kritik` (`id`, `users_id`, `film_id`, `content`, `point`) VALUES
(1, 1, 4, 'Filmnya Bagus Banget, Jarang banget Genre film Heist kaya gini di indonesiaa', 5),
(2, 1, 1, 'Film  Buatan Ernest sih Geprlu di Ragukan lagi ya Pokonya the best', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peran`
--

CREATE TABLE `peran` (
  `id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `cast_id` int(11) NOT NULL,
  `peran` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `age`, `bio`, `address`, `photo`) VALUES
(1, 'Reza', 'expetasiagroup@gmail.com', 'bangjali', 20, 'Mahasiswa Semester 6', 'Jalan Sungai Bambu', '1867514920_reza.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cast`
--
ALTER TABLE `cast`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_film_genre` (`genre_id`);

--
-- Indeks untuk tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kritik_users1` (`users_id`),
  ADD KEY `fk_kritik_film1` (`film_id`);

--
-- Indeks untuk tabel `peran`
--
ALTER TABLE `peran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_peran_film1` (`film_id`),
  ADD KEY `fk_peran_cast1` (`cast_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cast`
--
ALTER TABLE `cast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `peran`
--
ALTER TABLE `peran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `fk_film_genre` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `kritik`
--
ALTER TABLE `kritik`
  ADD CONSTRAINT `fk_kritik_film1` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kritik_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `peran`
--
ALTER TABLE `peran`
  ADD CONSTRAINT `fk_peran_cast1` FOREIGN KEY (`cast_id`) REFERENCES `cast` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peran_film1` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
