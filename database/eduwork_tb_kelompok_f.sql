-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 01:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cast`
--

INSERT INTO `cast` (`id`, `nama`, `umur`, `bio`) VALUES
(1, 'Ernest Prakasa', 30, 'Aktor'),
(2, 'Dion Wiyoko', 31, 'Aktor'),
(3, 'Chew Kinwah', 40, 'Aktor'),
(4, 'Adinia Wirasti', 29, 'Aktris'),
(5, 'Gisella Anastasia', 29, 'Aktris'),
(6, 'Tora Sudiro', 30, 'Aktor'),
(7, 'Jackie Chan', 50, 'aktor, sutradara, pemeran pengganti, produser film, aktor bela diri, aktor komedi, penulis naskah layar lebar dan penyanyi dari Hong Kong'),
(8, 'Asri Welas', 34, 'Aktris'),
(9, 'Michelle Ferre', 30, 'Aktris'),
(10, 'Mirai Yamamoto', 31, 'Aktor'),
(11, 'Ron Smerczak', 39, 'Aktor'),
(12, 'Ed Nelson', 34, 'Aktor'),
(13, 'Iko Uwais', 30, 'Aktor'),
(14, 'Donny Alamsyah', 31, 'Aktor'),
(15, 'Pierre Gruno', 39, 'Aktor'),
(16, 'Ray Sahetapy', 34, 'Aktor'),
(17, 'Joe Taslim', 35, 'Aktor'),
(18, 'Yayan Ruhian', 36, 'Aktor'),
(19, 'Iqbaal Ramadhan', 29, 'Aktor'),
(20, 'Angga Yunanda', 29, 'Aktor'),
(21, 'Aghniny Haque', 28, 'Aktris'),
(22, 'Rachel Amanda', 25, 'Aktris'),
(23, 'Umay Shahab', 22, 'Aktor'),
(24, 'Ari Irham', 21, 'Aktor'),
(25, 'Chicco Jerikho', 38, 'Aktor, model'),
(26, 'Rio Dewanto', 35, 'Aktor, Model'),
(27, 'Hana Prinantina', 31, 'Aktris, Model'),
(28, 'Arswendy Beningswara Nasution', 65, 'Aktor, Pelatih Akting'),
(31, 'Luna Maya', 39, 'Aktris, Presenter, Model'),
(32, 'Adipati Dolken', 31, 'Aktor'),
(33, 'Aliando Syarief', 26, 'Aktor, penyanyi'),
(34, 'Tio Pakusadewo', 59, 'Aktor'),
(35, 'Jefri Nichol', 24, 'Aktor, Model'),
(36, 'Guilio Parengkuan', 23, 'Aktor, Model'),
(37, 'Widika Sidmore', 31, 'Aktris'),
(38, 'Vanesha Prescilla', 23, 'Aktris, Penyanyi'),
(39, 'Sissy Priscillia', 38, 'Aktris, Penyiar radio'),
(40, 'Debo Andryos', 26, 'Aktor, Penyanyi'),
(41, 'Omara Esteghlal', 23, 'Aktor, Penulis'),
(42, 'Yoriko Angeline', 20, 'Aktris, Presenter'),
(43, 'Zulfa Maharani', 23, 'Aktris, Model'),
(44, 'Caitlin Halderman', 22, 'Aktris, Model'),
(45, 'Salshabilla Adriani', 22, 'Aktris, Model'),
(46, 'Ricky Cuaca', 34, 'Aktor, komedian'),
(47, 'Teuku Ryzki', 25, 'Aktor, Penyanyi'),
(48, 'Kevin Royano', 26, 'Aktor, Model'),
(49, 'Meriam Bellina', 58, 'Aktris, Penyanyi'),
(50, 'Rianti Cartwright', 39, 'Aktris, VJ, Model'),
(51, 'Ramzi', 47, 'Aktor, Komedian'),
(52, 'Gading Marten', 41, 'Aktor, Fotografer'),
(53, 'Boris Bokir', 35, 'Aktor, Komedian'),
(54, 'Kevin Ardilova', 24, 'Aktor, Model'),
(55, 'Ibnu Jamil', 41, 'Aktor, Presenter'),
(56, 'Shakira Jasmine', 20, 'Aktris, Penyanyi'),
(57, 'Faradina Mufti', 33, 'Aktris, Model'),
(58, 'Dian Sastrowardoyo', 41, 'Model, Artis, Penyanyi'),
(60, 'Kiki Narendra', 43, 'Musisi'),
(61, 'Muryati', 30, 'Penduduk Desa Genikan'),
(62, 'Sudardi', 32, 'Penduduk Desa Genikan'),
(63, 'Arifin', 12, 'Anak Penduduk Desa Genikan'),
(64, 'Tom Holland', 27, 'Aktor'),
(65, 'Mark Wahlberg', 52, 'Aktor, Prouser, Pebisnis'),
(66, 'Sophia Taylor', 27, 'Aktris'),
(67, 'Tati Gabrielle', 27, 'Aktris'),
(68, 'Antonio Banderas', 62, 'Aktor'),
(69, 'Tom Blyth', 28, 'Aktor'),
(70, 'Rachel Zegler', 22, 'Aktris, Youtuber'),
(71, 'Peter Dinklage', 53, 'Aktor, Produser Film'),
(72, 'Hunter Schafer', 24, 'Aktris, Model, Aktivis'),
(73, 'Jason Schwartzman', 35, 'Aktor'),
(74, 'Viola Davis', 57, 'Produser, Aktris'),
(75, 'Ashley Liao', 21, 'Aktris'),
(76, 'Tom Cruise', 60, 'Aktor, Penulis, Sutradara'),
(77, 'Simon Pegg', 53, 'Aktor,Komedian, Penulis'),
(78, 'Ving Rhames', 64, 'Aktor'),
(79, 'Rebecca Ferguson', 39, 'Aktris'),
(80, 'Vanessa Kirby', 35, 'Aktris'),
(81, 'Hayley Atwell', 41, 'Aktris'),
(82, 'Shea Whigham', 54, 'Aktor'),
(83, 'Henry Czerny', 64, 'Aktor'),
(84, 'Harrison Ford', 80, 'Aktor'),
(85, 'Mads Mikkelsen', 41, 'Aktor'),
(86, 'Toby Jones', 56, 'Aktor'),
(87, 'Boyd Holbrook', 43, 'Aktor, Model'),
(88, 'Phoebe Waller-Bridge', 37, 'Aktris, Penulis'),
(89, 'John Rhys-Davies', 43, 'Aktor'),
(90, 'Grant Gustin', 28, 'Aktor'),
(91, 'Candice Patton', 30, 'Aktris'),
(92, 'Rick Cossnett', 35, 'Aktor'),
(93, 'Danielle Panabaker', 30, 'Aktris'),
(94, 'Carlos Veldes', 32, 'Aktor'),
(95, 'Tom Cavanagh', 39, 'Aktor'),
(96, 'Jesse L.Martin', 39, 'Aktor');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `poster` varchar(60) DEFAULT NULL,
  `judul` varchar(65) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `ringkasan` text NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
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
(39, 'uncharted.jpg', 'Uncharted', 1, 'https://youtu.be/eHp3MbsCbMg', 'Nathan Drake direkrut oleh pemburu harta karun berpengalaman Victor Sullivan (Sully) untuk mengembalikan kekayaan yang dikumpulkan oleh Ferdinand Magellan dan hilang 500 tahun yang lalu oleh House of Moncada.', 2022),
(40, 'hunger.jpeg', 'The Hunger Games : The Ballad Of SongsBirds And Snake', 1, 'https://youtu.be/RDE6Uz73A7g', 'Bertahun-tahun sebelum menjadi Presiden Panem yang keji, Coriolanus Snow adalah remaja 18 tahun yang harus mengubah takdir keluarganya. Lewat Hunger Games ke-10. Coriolanus harus menjadi mentor seorang peserta bernama Lucy Gray Baird dari Distrik 12. Mengetahui sifat pemberontak yang dimiliki muridnya, Coriolanus membangun rencana licik untuk mendapatkan keunggulan secara politis', 2024),
(43, 'mi.jpeg', 'MISSION IMPOSSIBLE : DEAD RECKONING', 1, 'https://youtu.be/avz06PDqDbM', 'Pada IMPOSSIBLE : DEAD RECKONING PART 1, Tom Cruise yang berperan sebagai Ethan Hunt masih melanjutkan misi sebagai agen Impossible Missions Force (IMF). Ethan Hunt dan agen IMF lainnya akan melakukan berbagai aksi berbahaya untuk menyelesaikan misinya.', 2024),
(44, 'jones.jpeg', 'Indiana Jones And The Dial Of Destiny 5', 1, 'https://youtu.be/eQfMbSe7F2g', 'Indiana Jones and The Dial of Destiny 5', 2024),
(46, 'flash.jpeg', 'The Flash', 1, 'https://youtu.be/hebWYacbdvc', 'The Flash (2023) masih berkisah tentang pahlawan super bernama Barry Allen yang dikenal dengan The Flash. Sebagai salah satu pahlawan super, kekuatan utama The Flash adalah kemampuannya memiliki kecepatan super secepat kilat. Barry Allen memanfaatkan kekuatan yang ia miliki untuk kembali ke masa lalu.  Tujuan perjalanan ke masa lalu yang ditempuh Barry Allen adalah untuk mencegah kematian ibu. Perjalanan menembus ruang dan waktu memiliki resiko besar dan Barry Allen pun sudah diperingati oleh Batman, tapi keputusan Barry Allen sudah bulat. Dalam perjalanannya The Flash menabrak garis waktu lain dan membawanya ke zaman di mana Jenderal Zod berkuasa.', 2024);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kritik`
--

INSERT INTO `kritik` (`id`, `users_id`, `film_id`, `content`, `point`) VALUES
(1, 1, 4, 'Filmnya Bagus Banget, Jarang banget Genre film Heist kaya gini di indonesiaa', 5),
(2, 1, 1, 'Film  Buatan Ernest sih Geprlu di Ragukan lagi ya Pokonya the best', 4),
(3, 1, 3, 'Gokillll', 5),
(4, 1, 9, 'Jalan cerita menyenangkan dan kadar komedinya pas, tidak berlebihan.', 4),
(5, 9, 9, 'Endingnya kurang mantepp, pemeran antagonis tiba-tiba melemah begitu saja.', 3),
(6, 3, 1, 'Brilliant script, and great ensemble cast. I love the soundtrack as well. Bravo', 5),
(7, 4, 1, 'film yang punya paket komplit, ga cuma lucu2an, tapi story n cast nya kuat banget. Apalagi koh afuk.', 5),
(8, 2, 1, 'Ampun dah, pertamanya gue kira ini film kgk seseru itu, tapi asli dari awal nonton ngakak teruss, satu studio rame. Ngeliat muka dodit aja udh kocak. Konyol bngt ni film, jadi pengen nonton lagi..', 5),
(9, 12, 1, '\"oey traktir pizza!!\" \"yeayyy!\" \"pizza, pizza, ini roti depan mata!\" \"oey traktir roti!!\" \"huuuuu\" Ngakak bett, dibagian ini..wkwkwk', 5),
(10, 5, 1, 'Suka sama akting pemeran Koh Afuk dan Dion Wiyoko juga Adinia Wirasti..dapet banget perannya.. Yang kurang, ane rasa si Gisel, agak berlebihan dan terasa mengganggu. Overall lebih bagus dari film Ernest yang pertama', 5),
(11, 6, 10, 'Saya sangat terharu melihat film ini, dan tak lupa apresiasi yang sangat bessar bagi tim pembuatnya.', 5),
(12, 7, 10, 'cuma lihat beberapa still photo aja, bikin mata berkaca-kaca.Bersyukur bisa nonton film ini di kineforum bulan lalu. Bravo Shalahuddin Siregar! Semoga film ini juga dirilis DVD nya..', 5),
(13, 2, 2, 'My fav movie', 5),
(14, 8, 2, 'Gilaa sihh ini film nya..keren kebangetan', 5),
(15, 9, 2, 'Gua udah nonton semua film yang diperankan jackie chan, walaupun di tonton berulang\" tetep seru', 5),
(16, 10, 2, 'Ane mah demen ama pelm\" nya kang Jeki, the best lah..banyakin plotnya kang..hehe', 5),
(17, 1, 2, 'Jackie Chen memang filmnya berkualitas..tanpa cgi', 5),
(18, 11, 5, 'film ini kayak film hantu aja, kok malam terus..wkwk', 3),
(19, 1, 5, 'ternyata ben & jody ngeprank judulnya, menit ght bus, terakhir baru tahu ini night bus, makanya gelap terus..', 4),
(20, 4, 5, 'Filmnya keren, logat medan banget. Tapi cover sama pemainnya zonk', 4),
(21, 2, 5, 'Film aneh, gelap2 mulu..apa yang diliat', 3),
(22, 12, 5, 'Lepas dari perkopian,langsung dibawa ke action,asli keren banget! Adegan action-nya bikin tegang dan ikut ngerasain sakitnya dihajar habis-habisan', 5),
(23, 6, 5, 'Seru banget! Sepanjang nonton gemes sama adegan fighting-nya. Terharu sama persahabatan Ben & Jody', 5),
(24, 13, 7, 'Mantep banget alur ceritanya..serasa nostalgia jaman sekolah..xixi', 5),
(25, 14, 7, 'Baperr.. :\')', 5),
(26, 15, 7, 'Ga suka film drama, tapi nyoba nonton film ini', 3),
(27, 5, 7, 'Jengkel sama Milea, curang sama Beni waktu LDR..kalu aku jadi Beni pasti ku cari tuu si Dilan, liat sapa yang kuat.', 4),
(28, 8, 7, 'Gak bosen nonton film Dilan, udh 5kali nonton..Cowok kek dilan ada dibelahan dunia mana ya?..wkwk', 5),
(29, 7, 7, 'Film ini slalu bikin aku salting', 5),
(30, 11, 7, 'Menurutku film dilan itu biasa saja. Cuman yang bikin orang kesemsem dan luar biasa itu karakter dilan-nya, sangat cocok dengan pemerannya si Iqbal', 3),
(31, 2, 7, 'Ada pak ridwan kamil..wkwkwk', 5),
(32, 4, 3, 'Film Indo terbaik, menurutku', 5),
(33, 16, 3, 'Film yang gw cari\"', 5),
(34, 1, 3, 'kereen bang Iko...Aktor laga terbaik', 5),
(35, 16, 3, 'Semoga masih bnyak Iko Uwais dan Joe Taslim berikutnya yg main film di luar negeri.. Indonesia semakin di depan', 5),
(36, 7, 4, 'Suka bangett sama film ini. Walau 2 jam nggak boring, karena plotnya fast paced dan banyak twist2 yang nggak terduga, tapi makes sense. Recomended', 5),
(37, 12, 4, 'Nahh..film Indonesia yang kayak gini yang gua idamkan dari dulu..jangan melulu tentang horror sm percintaan', 5),
(38, 10, 4, 'Pembuat film paling berani di Indonesia, siapa lagi kalau bukan Angga Sasongko', 5),
(39, 16, 4, 'Poin minus film ini, kurang memerhatikan pemeran pendukung yg harusnya sama pentingnya dgn aktor utama..seperti anaknya presiden, polisi\", pembantu,dll. seakan-akan asal comot aja \'tuk masuk film ini. Akting mereka yg kaku membuat film ini berasa jd ftv saat scene yang ada merekanya..mentah.', 3),
(40, 1, 6, 'Film tidak banyak efek, tidak banyak pemain.Namun tetap seru. 2x nonton tidak bosan', 5),
(41, 2, 6, 'Abah Tarzan emang pelawak legend. Liat beliau diam aja udah lucu dan bikin ngakak :D', 5),
(42, 12, 6, 'Gua nangis gara\" nonton film ini woy', 5),
(43, 5, 6, 'Kayaknya setiap laki\" punya adek laki, pasti gak pernah akur', 5),
(44, 6, 6, 'Perampokan yang sangat konyol', 4),
(45, 4, 6, 'Emang gila sii..si ibra ama si amar koplak..wkwkwk. ini gua dah terhitung 15kali nonton,gaa bosen', 5),
(46, 1, 8, 'Ini film kesukaan saya', 5),
(47, 11, 8, 'lebih cakep dulu mereka natural..', 4),
(48, 9, 8, 'Semnjak thu flm ini q jdi suka sma jefri nikol', 5),
(49, 8, 8, 'ga bisa move on dari film ini', 5),
(50, 5, 8, 'lumayan bagus', 5),
(51, 16, 8, 'suka sama lagunyaa..', 5),
(52, 2, 8, 'keren asli...mantul bgt asli...pantulkan', 5),
(53, 16, 9, 'Suka sama ceritanya, lucu, menghibur, tapi mirip film anime : Great Teacher Onizuka, recommended buat di tonton', 5),
(54, 11, 9, 'ini beneran guru gokilll', 5),
(55, 6, 10, 'ini istimewa.....film istimewa...', 5),
(56, 14, 10, 'Film yang sangat epic sekaligus menyentuh, belajar arti kerja keras dan kekeluargaan dr bapa Petani', 5),
(57, 10, 39, 'Wah seru juga', 4),
(58, 16, 39, 'aku lumayan ragu apakah Tom Holland sukses memerankan Nathan Drake atau tidak. Yang untungnya dia berhasil dan sangat karismatik!', 5),
(59, 20, 40, 'this is actually so good!', 5),
(60, 4, 43, 'Tidak suka awal filmnya', 3),
(61, 12, 40, 'Saya suka film ballad-hunger games, yang bercerita asal-usul hunger games itu sendiri.', 5),
(62, 3, 40, 'So excited!', 5),
(63, 2, 40, 'lumayan seru laah..', 4),
(64, 18, 40, 'this looks melodramatic, over the top and takes itself too serious. I love it.', 5),
(65, 7, 43, 'Tom Cruise ahlinya', 5),
(66, 1, 43, 'keren..full action', 5),
(67, 16, 44, 'aku sangat menyukai bagian saat Indy menggunakan Dial o Destiny untuk menyelamatkan rose dan jack.', 4),
(68, 19, 44, 'thank you Disney, for making the Original trilogy that much more exiciting to watch!', 5),
(69, 5, 44, 'adegan pertarungannya bikin merinding..', 5),
(70, 11, 46, 'keren..', 5),
(71, 12, 46, 'jadi inget kartunnya, flashpoint', 5),
(72, 17, 46, 'this movie have terrible cgi', 5),
(73, 20, 46, 'Hyped!!!!', 5),
(74, 2, 44, 'thanks MovApp, this is the best!', 5),
(75, 2, 43, 'the best ...', 5),
(76, 2, 39, 'movie paling bagus ....', 5),
(77, 2, 39, 'movie paling bagus ....', 4),
(78, 2, 43, 'all best', 5);

-- --------------------------------------------------------

--
-- Table structure for table `peran`
--

CREATE TABLE `peran` (
  `id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `cast_id` int(11) NOT NULL,
  `peran` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peran`
--

INSERT INTO `peran` (`id`, `film_id`, `cast_id`, `peran`) VALUES
(10, 1, 1, 'Erwin'),
(11, 1, 2, 'Yohan'),
(12, 1, 3, 'Koh Afuk'),
(13, 1, 4, 'Ayu'),
(14, 1, 5, 'Natalie'),
(15, 1, 6, 'Robert'),
(16, 1, 8, 'Ibu Sonya'),
(17, 2, 7, 'WhoAmI'),
(18, 2, 9, 'Christine Stark'),
(19, 2, 10, 'Yuki'),
(20, 2, 11, 'Morgan'),
(21, 2, 12, 'General Sherman'),
(22, 3, 13, 'Rama'),
(23, 3, 17, 'Sersan Jaka'),
(24, 3, 18, 'Mad Dog'),
(25, 3, 15, 'Letnan Wahyu'),
(26, 3, 14, 'Andi'),
(27, 3, 16, 'Tama Riyadi'),
(28, 4, 19, 'Piko Subiakto'),
(29, 4, 20, 'Yusuf Hamdan'),
(30, 4, 21, 'Sarah \'the Brute\''),
(31, 4, 22, 'Fella \'the Negotiator\''),
(32, 4, 23, 'Gofar \'the Handyman\''),
(33, 4, 24, 'Tuktuk \'the Driver\''),
(34, 5, 25, 'Ben'),
(35, 5, 26, 'Jody'),
(36, 5, 18, 'Aa Tubir'),
(37, 5, 27, 'Rinjani'),
(38, 5, 28, 'Pak Hasan'),
(39, 5, 21, 'Tambora'),
(40, 5, 31, 'Tarra'),
(41, 6, 32, 'Ibra'),
(42, 6, 33, 'Amar'),
(43, 6, 34, 'Pak Musa'),
(44, 6, 35, 'Elzan'),
(45, 6, 36, 'Faisal'),
(46, 6, 37, 'Jamila'),
(47, 7, 19, 'Dilan'),
(48, 7, 38, 'Milea'),
(49, 7, 39, 'Milea(narator)'),
(50, 7, 40, 'Nandan'),
(51, 7, 36, 'Anhar'),
(52, 7, 41, 'Piyan'),
(53, 7, 42, 'Wati'),
(54, 7, 43, 'Rani'),
(55, 8, 35, 'Hema'),
(56, 8, 44, 'Starla'),
(57, 8, 45, 'Athena'),
(58, 8, 46, 'Romeo'),
(59, 8, 47, 'Kiki'),
(60, 8, 48, 'Bimo'),
(61, 8, 49, 'Gladys'),
(62, 8, 50, 'Bulan'),
(63, 8, 51, 'Polisi'),
(64, 9, 52, 'Taat Pribadi'),
(65, 9, 53, 'Nelson Manulang'),
(66, 9, 54, 'Ipang'),
(67, 9, 55, 'Gagah Perkasa'),
(68, 9, 56, 'Saulina'),
(69, 9, 57, 'Rahayu Paramitha'),
(70, 9, 58, 'Nirmala'),
(71, 9, 28, 'Purnama'),
(72, 9, 8, 'Indah'),
(73, 9, 60, 'Pak Le'),
(74, 10, 62, 'Tokoh Protagonis'),
(75, 10, 61, 'Tokoh Protagonis'),
(76, 10, 63, 'Tokoh Protagonis'),
(77, 39, 64, 'Nathan'),
(78, 39, 65, 'Victor'),
(79, 39, 66, 'Chloe Frazer'),
(80, 39, 67, 'Braddock'),
(81, 39, 68, 'Santiago Moncada'),
(82, 40, 69, 'Coriolanus\"Coryo\"'),
(83, 40, 70, 'Lucy Gray Baird'),
(84, 40, 71, 'Casca Highbootom'),
(85, 40, 72, 'Tigris Snow'),
(86, 40, 73, 'Lucretius\"Lucky\"'),
(87, 40, 74, 'Dr. Volumnia Gaul'),
(88, 43, 76, 'Ethan Hunt, agen IMF'),
(89, 43, 77, 'Benji Dunn, teknisi IMF'),
(90, 43, 78, 'Luther Stickell'),
(91, 43, 79, 'Ilsa Faust'),
(92, 43, 80, 'Alanna Mitsopolis'),
(93, 43, 81, 'Grace'),
(94, 43, 82, 'Jasper Briggs'),
(95, 43, 83, 'Eugene Kittridge'),
(96, 44, 84, 'Indiana Jones'),
(97, 44, 85, 'Jourgen Voller'),
(98, 44, 68, 'Renaldo'),
(99, 44, 86, 'Basil Shaw'),
(100, 44, 87, 'Klaber'),
(101, 44, 88, 'Helena Shaw'),
(102, 44, 89, 'Sallah'),
(103, 46, 90, 'Barry Allen \"Flash\"'),
(104, 46, 91, 'Iris Wess'),
(105, 46, 92, 'Eddle Thawn'),
(106, 46, 93, 'Dr. Caitlin Sno'),
(107, 46, 94, 'Cisco Ramo'),
(108, 46, 95, 'Dr. Harrison Well'),
(109, 46, 96, 'Detective Joe West');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `age` int(11) NOT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `photo` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `age`, `bio`, `address`, `photo`) VALUES
(1, 'Reza', 'expetasiagroup@gmail.com', '$2y$10$F0rs17efRhewRySlURh3uOwOO7rnZlW5ZTwK635qoKiVNFTRQsPQ2', 'admin', 20, 'Mahasiswa Semester 6', 'Jalan Sungai Bambu', '1867514920_reza.jpg'),
(2, 'entong', 'entonk@gmail.com', '$2y$10$EUKtISDJhDvLWaE1dxr0n.pqehA1gHCNrbJD1WwFbiR4oph1q00U6', 'user', 23, 'penulis', 'bandung', '1010644562_images2.jpg'),
(3, 'Morgan Alexander', 'morgan@gmail.com', '$2y$10$1ciRuSzA39hgTdr7dMMR8OJWPO/XQAr55F3FbTbTX8h3wmwRBJez.', 'admin', 25, 'photographer', '                                                                                                                                                                                                                                                                                                                                                England                                                                                                                                                                                                                                                                                                                        ', '76473446_images.jpg'),
(4, 'noe123', 'noe@gmail.com', '$2y$10$AlgRg0v6SlhIhw8L6Mg/EuOHE.jHEFae5uz9q21Az.BU4GYY.IEWm', 'user', 27, 'pebisnis', 'Semarang', 'pria.jpg'),
(5, 'nikprapur', 'nik11@gmail.com', '$2y$10$acjjn9PzOY5HCr/313Yxz.KKfYaeQgNS15ke52afxdykpWQBBpsF.', 'user', 25, 'Musisi', 'Gorontalo', 'pria.jpg'),
(6, 'Damar Arganta', 'dhamar123@gmail.com', '$2y$10$JnIHtSxpWMmpAmklxbQqc.HQ6hS2pmDNyDS4jJ3XqyXrpjJJ8vnsK', 'user', 30, 'Pengusaha Pertanian', '                                                                                                                Kalimantan                                                                                                        ', '2023381471_profil2.jpg'),
(7, 'thiya', 'thiaaa@gmail.com', '$2y$10$ryG5fxT0dwUruBvV3souueH/X2D9sDSwGoTjsn5RMexDbwSAqzHo2', 'user', 30, 'Penulis', 'Jakarta', 'wanita.jpg'),
(8, 'Lisa Anggraini', 'Liaini@gamil.com', '$2y$10$uaDTc10KaREZBAdJ1XScq.jYPgPWDaATAbRL2/v8rNz7f7Ccjee3S', 'user', 20, 'mhswi', 'Bogor', 'wanita.jpg'),
(9, 'ceper', 'ceper@gmail.com', '$2y$10$p..L9vUVqQwhkWYmlF.XH.Uk3vgN05rGCo7p6lyUmHpoKT1eZeeoa', 'user', 25, 'Pengusaha', 'Blitar', 'pria.jpg'),
(10, 'Susanto', 'santo@gmail.com', '$2y$10$k3qIe7cwjxrFN.TeBhUNUuT72rhLjLN5pfMg21bEuBeNceV8rSGpG', 'user', 27, 'Pedagang', 'Lampung', 'pria.jpg'),
(11, 'Sodikin', 'sodikin@gmail.com', '$2y$10$2q9u1d3zvvXh9Sl1/sB7XOR29JDGVhIq.kgXvgUBZJZuGkPtpZ8Yi', 'user', 25, 'designer', 'Makassar', 'pria.jpg'),
(12, 'Aje', 'aje@gmail.com', '$2y$10$VTaYFRVuO7oA/pLyeQnCCemIKElwV86xbIAjLgjSB.i5A8lCD04Gy', 'user', 27, 'Barista', 'Jakarta', 'pria.jpg'),
(13, 'Ahmad Sutopo', 'sutopo@gmail.com', '$2y$10$.EQknKA07GkLJWpkQZ.2J.XRq5mpK4ABH36qQvW3JvK4NEW0S7vV2', 'user', 32, 'Percetakan', 'Sidoarjo', 'pria.jpg'),
(14, 'Teressa', 'teressa@gmail.coom', '$2y$10$OXhui6au.G3jmybZkhozTuAE9OEzzKRFYqEiOn1/8y91FUmZXAi1O', 'user', 23, 'mhswi', 'Bandung', 'wanita.jpg'),
(15, 'Agus', 'agus@gamil.com', '$2y$10$9bgD4rCmEsAgd8nx5pb67uTB.vhdlgke55v2bpG4zSNz30GiD.RxC', 'user', 25, 'Kepsek', 'Cirebon', 'pria.jpg'),
(16, 'Zeakata', 'zieya@gmail.com', '$2y$10$sdaDckXD2/D83g9ypUsws.MQaEtZfhIqpeXe5OTx5TBLtDiuWLSxW', 'user', 25, 'penulis', 'Nganjuk', 'wanita.jpg'),
(17, 'Axel Foley', 'axel@gmail.com', '$2y$10$D2T4n0eW1sSgO5aoHwe9uOVZnqeeHTVZvQwoE1/Cbv52YdZTTUnni', 'user', 30, 'Architec', 'Germany', 'pria.jpg'),
(18, 'keimzelle', 'zell@gmail.com', '$2y$10$drfWUDlkA1t9f0bkGSGfFOlLL3/bxHWEbvwZcS1lREytgnJCvLHku', 'user', 25, 'ArtWork', 'Polandia', 'wanita.jpg'),
(19, 'josiahpayne', 'josi@gmailcom', '$2y$10$UH1agAkM73FmWp6VrlfEUexa1mpkMMJellxmfNLX4tdEHu10nv5t2', 'user', 33, 'Designer', 'Yaman', 'pria.jpg'),
(20, 'juliante', 'juli@gmail.com', '$2y$10$UH1agAkM73FmWp6VrlfEUexa1mpkMMJellxmfNLX4tdEHu10nv5t2', 'user', 27, 'CoffeeShop', 'Filipina', 'wanita.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `peran`
--
ALTER TABLE `peran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
