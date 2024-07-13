-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2024 at 04:24 AM
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
-- Database: `moviedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie_list`
--

CREATE TABLE `movie_list` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL DEFAULT '',
  `tahun` year(4) NOT NULL,
  `genre` varchar(50) NOT NULL DEFAULT '',
  `sutradara` varchar(50) NOT NULL DEFAULT '',
  `deskripsi` text NOT NULL,
  `poster` varchar(80) NOT NULL DEFAULT '',
  `backdrop` varchar(80) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_list`
--

INSERT INTO `movie_list` (`id`, `judul`, `tahun`, `genre`, `sutradara`, `deskripsi`, `poster`, `backdrop`) VALUES
(1, 'Interstellar', '2014', 'Sci-Fi', 'Christopher Nolan', 'Di masa depan dekat di sekitar Midwest Amerika, Cooper, seorang mantan insinyur sains dan pilot, terikat dengan lahan pertaniannya bersama putrinya Murph dan putranya Tom. Saat badai pasir yang menghancurkan merusak tanaman bumi, orang-orang di Bumi menyadari bahwa kehidupan mereka di sini akan segera berakhir karena makanan mulai habis. Akhirnya, setelah menemukan pangkalan NASA yang berjarak 6 jam dari rumah Cooper, dia diminta untuk melakukan misi berani bersama beberapa ilmuwan lainnya ke dalam lubang cacing karena kecerdasan ilmiah Cooper dan kemampuannya untuk menerbangkan pesawat yang berbeda dari anggota kru lainnya. Untuk menemukan rumah baru sementara Bumi membusuk, Cooper harus memutuskan untuk tetap tinggal, atau mempertaruhkan tidak pernah melihat anak-anaknya lagi demi menyelamatkan umat manusia dengan menemukan planet lain yang layak huni.', 'interstellar.jpg', 'interstellar.jpg'),
(2, 'Despicable Me 4', '2024', 'Comedy', 'Chris Renaud', 'Gru, Lucy, Margo, Edith, dan Agnes menyambut anggota keluarga baru, Gru Jr., yang berniat mengganggu ayahnya. Gru menghadapi musuh baru, Maxime Le Mal dan pacarnya Valentina, dan keluarga tersebut terpaksa melarikan diri.', 'despicable_me_4.jpg', 'despicable_me_4.jpg'),
(3, 'A Quiet Place: Day One', '2024', 'Thriller', 'Michael Sarnoski', 'Seorang wanita bernama Sam mendapati dirinya terjebak di Kota New York pada tahap awal invasi oleh makhluk asing yang memiliki pendengaran sangat sensitif.', 'a_quiet_place_day_one.jpg', 'a_quiet_place_day_one.jpg'),
(4, 'The Boy and the Heron', '2024', 'Fantasy', 'Hayao Miyazaki', 'Saat Perang Dunia Kedua berkecamuk, Mahito remaja, yang dihantui oleh kematian tragis ibunya, dipindahkan dari Tokyo ke rumah pedesaan yang tenang milik ibu tirinya yang baru, Natsuko, seorang wanita yang sangat mirip dengan ibu Mahito. Saat dia mencoba menyesuaikan diri, dunia baru yang aneh ini menjadi semakin aneh setelah munculnya bangau abu-abu yang gigih, yang membingungkan dan mengganggu Mahito, menyebutnya sebagai \"yang telah lama ditunggu-tunggu.\"', 'the_boy_and_the_heron.jpg', 'the_boy_and_the_heron.jpg'),
(5, 'KKN di Desa Penari', '2022', 'Horror', 'Awi Suryadi', 'Enam siswa diteror oleh seorang penari misterius saat menjalankan program layanan masyarakat di sebuah desa terpencil. Ternyata, salah satu dari mereka melanggar aturan paling fatal di desa tersebut.', 'kkn_di_desa_penari.jpg', 'kkn_di_desa_penari.jpg'),
(6, 'The Fall Guy', '2024', 'Comedy', 'David Leitch', 'Baru saja pulih dari kecelakaan yang hampir mengakhiri kariernya, stuntman Colt Seavers harus melacak seorang bintang film yang hilang, memecahkan sebuah konspirasi, dan berusaha mendapatkan kembali cinta sejatinya sambil tetap menjalankan pekerjaan hariannya.', 'the_fall_guy.jpg', 'the_fall_guy.jpg'),
(7, 'Kingdom of the Planet of the Apes', '2024', 'Action', 'Wes Ball', 'Beberapa generasi setelah pemerintahan Caesar, kera kini menjadi spesies dominan dan hidup harmonis sementara manusia telah dikurangi menjadi makhluk yang hidup dalam bayang-bayang. Saat seorang pemimpin kera yang tiranik membangun kekaisarannya, seorang kera muda memulai perjalanan yang menegangkan yang akan membuatnya mempertanyakan semua yang dia ketahui tentang masa lalu dan membuat keputusan yang akan menentukan masa depan bagi kera dan manusia.', 'kingdom_of_the_planet_of_the_apes.jpg', 'kingdom_of_the_planet_of_the_apes.jpg'),
(8, 'Oppenheimer', '2024', 'Biographical', 'Chirstopher Nolan', 'Kisah tentang peran J. Robert Oppenheimer dalam pengembangan bom atom selama Perang Dunia II.', 'oppenheimer.jpg', 'oppenheimer.jpg'),
(9, 'The Boys', '2019', 'Action', 'Eric Kripke', 'Sekelompok vigilante yang dikenal secara informal sebagai \"The Boys\" berusaha menjatuhkan pahlawan super yang korup dengan hanya mengandalkan keberanian kelas pekerja dan kesediaan untuk bertarung dengan cara kotor.', 'the_boys.jpg', 'the_boys.jpg'),
(10, 'Inside Out 2', '2024', 'Comedy', 'Kelsey Mann', 'Markas besar pikiran remaja Riley sedang mengalami pembongkaran mendadak untuk memberi ruang bagi sesuatu yang benar-benar tak terduga: Emosi baru! Joy, Sadness, Anger, Fear, dan Disgust, yang telah lama menjalankan operasi dengan sukses menurut semua pihak, tidak yakin bagaimana perasaan mereka ketika Anxiety muncul. Dan tampaknya dia tidak datang sendirian.', 'inside_out_2.jpg', 'inside_out_2.jpg'),
(11, 'My Boo', '2024', 'Comedy', 'Khomkrit Treewimol', 'Joe, seorang gamer muda, sedang mengalami nasib buruk. Dia menerima warisan sebuah rumah dengan hantu pemilik sebelumnya, Anong. Namun, orang-orang menolak untuk pergi dan hantu tersebut juga menolak untuk pergi. Jadi, orang-orang dan hantu itu bekerja sama dan membuka rumah berhantu tersebut agar orang-orang bisa datang dan bermain.', 'my_boo.jpg', 'my_boo.jpg'),
(12, 'The Exorcist', '1973', 'Horror', 'William Peter Blatty', 'Ketika seorang gadis berusia 12 tahun yang menawan mulai mengambil karakteristik dan suara orang lain, dokter mengatakan tidak ada yang bisa mereka lakukan. Saat orang-orang mulai mati, ibu gadis tersebut menyadari bahwa putrinya telah dirasuki oleh iblis—dan satu-satunya harapan bagi putrinya terletak pada dua pendeta dan ritus kuno pengusiran setan.', 'the_exorcist.jpg', 'the_exorcist.jpg'),
(13, 'Dilan 1983: Wo Ai Ni', '2024', 'Romance', 'Pidi Baiq', 'Ini mungkin tentang cinta anak anjing yang biasa, yang dialami oleh banyak orang normal di dunia. Tidak ada cinta karena dia masih di sekolah dasar, tetapi Mei Lien telah membuat Dilan belajar bahasa Mandarin dan tertarik membaca buku-buku yang membahas tentang Tiongkok.', 'dilan_wo_ai_ni.jpg', 'dilan_wo_ai_ni.jpg'),
(14, 'Sengkolo: Malam Satu Suro', '2024', 'Horror', 'Hanny R. Saputra', 'Kisah tentang seorang pria yang merasa terpuruk dan kehilangan kepercayaan setelah mengalami tragedi kehilangan istri dan anak-anaknya pada malam pertama Suro.', 'sengkolo.jpg', 'sengkolo.jpg'),
(15, 'Avatar', '2010', 'Fantasy', 'James Cameron', 'Pada abad ke-22, seorang Marinir paraplegik dikirim ke bulan Pandora untuk menjalankan misi unik, tetapi dia terjebak antara mengikuti perintah dan melindungi peradaban alien.', 'avatar.jpg', 'avatar.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie_list`
--
ALTER TABLE `movie_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie_list`
--
ALTER TABLE `movie_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
