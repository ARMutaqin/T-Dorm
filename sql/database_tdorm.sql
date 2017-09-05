-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 10:53 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_tdorm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `nim`, `jurusan`, `nohp`, `alamat`) VALUES
('adminsuper', 'haihaihai', 'Soekarno', '6706144188', 'D3 Teknik Informatika', '081345927628', 'Sukabumi, Jawa Barat');

-- --------------------------------------------------------

--
-- Table structure for table `cek_in_out_kamar`
--

CREATE TABLE IF NOT EXISTS `cek_in_out_kamar` (
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `lantai` varchar(10) NOT NULL,
  `kamar` varchar(10) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `aksi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cek_in_out_kamar`
--

INSERT INTO `cek_in_out_kamar` (`tanggal`, `jam`, `lantai`, `kamar`, `nama_mhs`, `aksi`) VALUES
('2017-04-28', '00:39:12', '4', '406', 'Irfan Sholeh Hermawan', 'masuk'),
('2017-04-29', '01:01:33', '2', '203', 'Lorenzo', 'keluar'),
('2017-05-05', '09:11:51', '1', '102', 'Deni Herryanto', 'masuk'),
('2017-04-28', '10:43:22', '1', '101', 'Andree Sulistya Saputra', 'masuk'),
('2017-04-28', '10:54:14', '1', '102', 'Cahyono Romadloni A', 'keluar'),
('2017-05-06', '11:21:34', '4', '401', 'Adnan Janujaz', 'masuk'),
('2017-05-06', '11:22:24', '2', '202', 'Yaya Sunarya', 'masuk'),
('2017-04-28', '13:49:13', '2', '201', 'Muhammad Ridho Suherman', 'masuk'),
('2017-05-05', '15:59:06', '1', '102', 'Deni Herryanto', 'masuk'),
('2017-05-05', '20:24:04', '4', '406', 'Aditya Rahmat Mutaqin', 'masuk'),
('2017-04-27', '22:13:15', '4', '406', 'Irfan Sholeh Hermawan', 'masuk'),
('2017-04-27', '22:13:45', '4', '406', 'Aditya Rahmat Mutaqin', 'keluar'),
('2017-04-27', '23:58:48', '4', '406', 'Sergio Suryawan P.', 'masuk');

-- --------------------------------------------------------

--
-- Table structure for table `jemuran`
--

CREATE TABLE IF NOT EXISTS `jemuran` (
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `lantai` varchar(20) NOT NULL,
  `kamar` varchar(20) NOT NULL,
  `mhs` varchar(50) NOT NULL,
  `aksi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jemuran`
--

INSERT INTO `jemuran` (`tanggal`, `jam`, `lantai`, `kamar`, `mhs`, `aksi`) VALUES
('2017-04-27', '00:25:25', '4', '406', 'Sergio Suryawan P.', 'pinjam'),
('2017-04-27', '00:33:03', '4', '406', 'Irfan Sholeh Hermawan', 'simpan'),
('2017-04-28', '00:38:20', '4', '406', 'Irfan Sholeh Hermawan', 'pinjam'),
('2017-04-29', '01:00:27', '1', '103', 'Anwar Choerussalam', 'pinjam'),
('2017-04-27', '21:09:03', '4', '406', 'Sergio Suryawan P.', 'pinjam'),
('2017-04-27', '22:07:43', '4', '406', 'Aditya Rahmat Mutaqin', 'simpan'),
('2017-04-27', '22:08:02', '4', '406', 'Irfan Sholeh Hermawan', 'pinjam'),
('2017-04-27', '22:08:16', '4', '406', 'Sergio Suryawan P.', 'simpan');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
  `idLantai` int(5) NOT NULL,
  `idKamar` int(5) NOT NULL,
  `namaKamar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`idLantai`, `idKamar`, `namaKamar`) VALUES
(1, 101, 'Kamar 101'),
(1, 102, 'Kamar 102'),
(1, 103, 'Kamar 103'),
(1, 104, 'Kamar 104'),
(1, 105, 'Kamar 105'),
(1, 106, 'Kamar 106'),
(1, 107, 'Kamar 107'),
(1, 108, 'Kamar 108'),
(1, 109, 'Kamar 109'),
(1, 110, 'Kamar 110'),
(2, 201, 'Kamar 201'),
(2, 202, 'Kamar 202'),
(2, 203, 'Kamar 203'),
(2, 204, 'Kamar 204'),
(2, 205, 'Kamar 205'),
(2, 206, 'Kamar 206'),
(2, 207, 'Kamar 207'),
(2, 208, 'Kamar 208'),
(2, 209, 'Kamar 209'),
(2, 210, 'Kamar 210'),
(3, 301, 'Kamar 301'),
(3, 302, 'Kamar 302'),
(3, 303, 'Kamar 303'),
(3, 304, 'Kamar 304'),
(3, 305, 'Kamar 305'),
(3, 306, 'Kamar 306'),
(3, 307, 'Kamar 307'),
(3, 308, 'Kamar 308'),
(3, 309, 'Kamar 309'),
(3, 310, 'Kamar 310'),
(4, 401, 'Kamar 401'),
(4, 402, 'Kamar 402'),
(4, 403, 'Kamar 403'),
(4, 404, 'Kamar 404'),
(4, 405, 'Kamar 405'),
(4, 406, 'Kamar 406'),
(4, 407, 'Kamar 407'),
(4, 408, 'Kamar 408'),
(4, 409, 'Kamar 409'),
(4, 410, 'Kamar 410');

-- --------------------------------------------------------

--
-- Table structure for table `lantai`
--

CREATE TABLE IF NOT EXISTS `lantai` (
  `idLantai` int(5) NOT NULL,
  `namaLantai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lantai`
--

INSERT INTO `lantai` (`idLantai`, `namaLantai`) VALUES
(1, 'Lantai 1'),
(2, 'Lantai 2'),
(3, 'Lantai 3'),
(4, 'Lantai 4');

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE IF NOT EXISTS `mhs` (
  `nama` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `goldar` varchar(5) NOT NULL,
  `alamat_asal` varchar(50) NOT NULL,
  `kamar` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`nama`, `ttl`, `agama`, `nim`, `jurusan`, `nohp`, `email`, `jeniskelamin`, `goldar`, `alamat_asal`, `kamar`) VALUES
('Sergio Suryawan P.', 'Medan, 28 Juli 1997', 'Kristen', '10111000', 'S1 MBTI', '0835678019', 'sergiosuryawan@gmail.com', 'laki-laki', 'AB', 'Medan, Sumatera Utara', 406),
('Adhi Satria', 'Surabaya, 14 Mei 1995', 'Islam', '1101133151', 'S1 Teknik Informatika', '081312386004', 'adhi@mail.com', 'laki-laki', 'A', 'Gg. Kelinci No. 52', 403),
('Supardi Nasir', 'Palembang, 25 Juli 1998', 'Islam', '1101163150', 'S1 Akuntansi', '081312286002', 'supardinasir@mail.com', 'laki-laki', 'B', 'Gang Senggol, Palembang', 303),
('Fakhri Fauzan', 'Tangerang, 12 Mei 1996', 'Islam', '1101163159', 'S1 Teknik Informatika', '081312287004', 'fazan@mail.com', 'laki-laki', 'B', 'Gg. Mawar, Tangerang Selatan', 402),
('Fajar Dwiki', 'Klaten, 9 April 1993', 'Islam', '110116319', 'S1 MBTI', '081312286099', 'fdwiki@mail.com', 'laki-laki', 'B', 'Mangga Dua, Sukapura, Bandung', 401),
('Giring Nidji', 'Palembang, 20 Juli 1998', 'Islam', '1101164150', 'S1 Teknik Industri', '081312286009', 'giring@mail.com', 'laki-laki', 'B', 'Perum Batucuri, Jakarta Barat', 302),
('Yogie Fajar', 'Medan, 27 Januari 1993', 'Islam', '1101164151', 'S1 Teknik Informatika', '081312266004', 'fajar@mail.com', 'laki-laki', 'B', 'Sukajadi, Medan', 402),
('Ahmad Hasanudin', 'Tasikmalaya, 25 September 1995', 'Islam', '1101164158', 'S1 Teknik Elektro', '081312286004', 'ahmadhasanudin@hotmal.com', 'laki-laki', 'O', 'Bubuay 2, Tasikmalaya', 202),
('Banyubiru', 'Majalengka, 20 April 1998', 'Islam', '1101164159', 'S1 Teknik Telekomunikasi', '083456018720', 'banyubiru.birubanget@gmail.com', 'laki-laki', 'B', 'Cililita No. 30, Majalengka, Jawa Barat', 102),
('Ari Lasso', 'Makasar, 23 Oktober', 'Islam', '1101164172', 'S1 Desain Interior', '081312286455', 'arilasso@gmail.com', 'laki-laki', 'AB', 'Makasar, Sulawesi', 401),
('Gigih Pandega', 'Jakarta, 15 April 1996', 'Islam', '1101164173', 'D3 Teknik Informatika', '081311226004', 'gigih@gmail.com', 'laki-laki', 'B', 'Sukabirus, Telkom University. Bandung', 302),
('Michael Essien', 'Garut, 30 November 1995', 'Kristen', '1101164176', 'S1 Teknik Elektro', '081312286001', 'thebison@mail.com', 'laki-laki', 'AB', 'Bojongasih, Garut', 301),
('Irpan Susanto', 'Tasikmalaya, 17 Agustus 1995', 'Islam', '1101164182', 'S1 Teknik Elektro', '081312286004', 'irpansusanto@gmail.com', 'laki-laki', 'B', 'DAM, Bubuay 2, Tasikmalaya', 203),
('Adryan Pratama', 'Bandung, 3 April 1996', 'Islam', '1101165150', 'Ciwastram, Bandung', '081312282004', 'adryan@mail.com', 'laki-laki', 'A', 'Ciwastra, Kabupaten Bandung', 403),
('Hendrawan', 'Purwakarta, 8 Juni 1996', 'Islam', '1101173151', 'S1 Teknik Informatika', '081312276004', 'hendra@mail.com', 'laki-laki', 'AB', 'Gg. Garuda No. 51, Bandung', 402),
('M. Naufal', 'Yogyakarta, 13 November 1996', 'Islam', '1101178151', 'S1 Desain Interior', '081312287004', 'mnaufal@mail.com', 'laki-laki', 'B', 'Jl. Malioboro No. 30, Yogyakarta', 403),
('Khairun Arkam', 'Boyolali, 18 Mei 1997', 'Islam', '11011937651', 'S1 Teknik Informatika', '081234957032', 'irun@mail.com', 'laki-laki', 'B', 'Jl. Riau Boyolali, Jawa Tengah', 403),
('Anif Rizky', 'Malang, 13 November 1996', 'Islam', '1101363151', 'S1 MBTI', '081312287004', 'anif@mail.com', 'laki-laki', 'B', 'Batu, Malang, Jawa Timur', 402),
('Deni Herryanto', 'Purwakarta, 30 Juni 1997', 'Islam', '1103164125', 'S1 Sistem Komputer', '081756453829', 'heryyanto@gmail.com', 'laki-laki', 'B', 'Darangdan, Purwakarta, Jawa Barat', 102),
('Adnan Janujaz', 'Klaten, 29 April 1998', 'Islam', '1103164129', 'S1 Desain Produk', '081312282205', 'adnanjanuzaj@mail.com', 'laki-laki', 'O', 'Manchester, Inggris', 401),
('Bondan', 'Semarang, 21 November 1996', 'Islam', '1108376425', 'S1 Desain Komunikasi Visual ', '081234882739', 'bondanpenyanyiteamantep@gmail.com', 'laki-laki', 'A', 'Surabaya, Jawa Timur', 301),
('Andra Ramadhan', 'Karawang, 19 April 1998', 'Islam', '110837649', 'D3 Teknik Informatika', '081312286092', 'andraramadhan@gmail.com', 'laki-laki', 'AB', 'Perumahan Bening Regency, Cikarang Pusat', 303),
('Yaya Sunarya', 'Tasikmalaya, 17 September 1995', 'Islam', '1301143582', 'S1  Ilmu Komputasi', '081312495345', 'yayasunarya@gmail.com', 'laki-laki', 'AB', 'Babakan 2, Tasikmalaya', 202),
('Cahyono Romadloni A', 'Ciamis, 23 April 1997', 'Islam', '1301164582', 'S1 Teknik Informatika', '089392640156', 'sunchynism@gmail.com', 'laki-laki', 'B', 'Alun-alun Ciamis No. 52, Ciamis, Jawa Barat', 102),
('Yabes Roni', 'Yogyakarta, 13 Oktober 1996', 'Islam', '1301187582', 'S1 Teknik Fisika', '081318265345', 'roni.yabes@gmail.com', 'laki-laki', 'AB', 'Bubuay 1, Tasikmalaya', 203),
('Ahmad Rasyid Nawawi Al Faqih', 'Medan, 17 Januari 1998', 'Islam', '1401164615', 'S1 MBTI', '082280537385', '15alfaqih@gmail.com', 'laki-laki', 'A', 'Medan, Sumatera Utawa', 101),
('Pasha Ungu', 'Riau, 20 Januari 1994', 'Islam', '6705122104', 'D3 Teknik Komputer', '081456029300', 'pashaungupenyanyitea@gmail.com', 'laki-laki', 'AB', 'Pasar Senen, Jakarta Barat', 301),
('Once Maulana', 'Garut, 30 September', 'Islam', '6705122123', 'S1 Teknik Telekomunikasi', '081234857092', 'oncevokalis@gmail.com', 'laki-laki', 'AB', 'Sukamaju, Garut', 301),
('Hasanudin', 'Tasikmalaya, 137Juli 1995', 'Islam', '6705163539', 'S1 Teknik Industri', '0812348570399392', 'hasanudin@yahoo.co.id', 'laki-laki', 'B', 'Babakan 2, Tasikmalaya', 202),
('Amri Khurniawan', 'Semarang, 14 Juli 1997', 'Islam', '6705164104', 'D3 Teknik Telekomunikasi ', '081312456734', 'amrikhurniawan@yahoo.com', 'laki-laki', 'O', 'Jl. Tikus No. 81, Semarang, Jawa Tengah', 101),
('Adnan Yakub', 'Banyumas, 18 Juli 1997', 'Islam', '6705173539', 'D3 Teknik Komputer', '081234858031', 'ayakub@mail.com', 'laki-laki', 'B', 'Pakuan, Banyumas, Jawa Tengah', 401),
('Ahmad Dhani', 'Jombang, 31 April 1994', 'Islam', '6705984104', 'S1 Desain Interior', '081312948005', 'ahmaddhanirepublikcinta@gmail.com', 'laki-laki', 'A', 'Sukapura, Jakarta Selatan', 303),
('Miftah Farid', 'Tasikmalaya, 13 Juli 1992', 'Islam', '6706099283', 'S1 Teknik Elektro', '0857263467938', 'miftahfaridun@gmail.com', 'laki-laki', 'B', 'Padahayu, Tasikmalaya', 103),
('Andri Salam', 'Tasikmalaya, 28 Januari 1993', 'Islam', '6706112013', 'D3 Teknik Komputer', '081375839740', 'andrimsalam@yahoo.co.id', 'laki-laki', 'B', 'Kaum, Pamijahan. Tasikmalaya', 103),
('Lorenzo', 'Bandung, 24 Juni1995', 'Kristen', '67061482276', 'D3 Teknik Informatika', '081312286006', 'lorenzo@mail.com', 'laki-laki', 'O', 'Baleendah, Kabupaten Bandung', 203),
('Ridho Maulana', 'Sukabumi, 16 Agustus 1997', 'Islam', '6706152037', 'D3 Teknik Informatika', '081234948039', 'ridho@mail.com', 'laki-laki', 'AB', 'Kosan Umayah, Sukabirus, Telkom University, Kabupa', 103),
('Arsyan Qashari', 'Medan, 17 November 1997', 'Islam', '6706152088', 'D3 Teknik Informatika', '081312286994', 'arysan@mail.com', 'laki-laki', 'A', 'Gg. Bapa Ali, Sukapura, Bandung', 302),
('Andree Sulistya Saputra', 'Lampung, 28 April 1996', 'Islam', '6706154104', 'D3 Teknik Informatika', '087564123986', 'sulistyasaputra@yahoo.co.id', 'laki-laki', 'AB', 'Desa Merto Jaya, Kecamatan Bojongasih, Lampung', 101),
('Irfan Sholeh Hermawan', 'Klaten, 24 April 1997', 'Islam', '6706154184', 'D3 Teknik Informatika', '0878176581', 'irfansholeh@gmail.com', 'laki-laki', 'O', 'Klaten, Jawa Tengah', 406),
('Aditya Rahmat Mutaqin', 'Purwakarta, 13 Juni 1997', 'Islam', '6706154188', 'D3 Teknik Informatika', '081312286097', 'adityarahmatmutaqin@startupnya.com', 'laki-laki', 'o', 'Pamijahan, Tasikmalaya', 406),
('Faiz Dil Haz', 'Tasikmalaya, 10 Agustus 2005', 'Islam', '6706154982', 'D3 Teknik Informatika', '081312495802', 'faizdilhaz@gmail.com', 'laki-laki', 'B', 'Kampung Bubuay, Pamijahan, Tasikmalaya', 201),
('Andy Maulana Yusuf', 'Pangkal Pinang, 27 Januari 1997', 'Islam', '6706164071', 'D3 Teknik Informatika', '089356862287', 'andy.maulana@yahoo.com', 'laki-laki', 'B', 'Gang Serabut, Kp. Banjaran, Desa Banjarsari, Kecam', 102),
('Abid Hanifussafly', 'Magelang, 28 April 1998', 'Islam', '6706164101', '6706164101', '081312657834', 'Hanifussafly@gmail.com', 'laki-laki', 'B', 'Purwokerto, Jawa Tengah', 101),
('Anwar Choerussalam', 'Tasikmalaya, 10 November 1995', 'Islam', '6706172098', 'S1 Teknik Elektro', '081234857039', 'anwarchoerussalam@yahoo.co.id', 'laki-laki', 'A', 'Kampung Bubuay, Wangunsari, Bantarkalong, Tasikmal', 103),
('Syahrul Fauzi Rahmatillah', 'Tasikmalaya, 6 Agustus 2005', 'Islam', '6706204188', 'S1 Teknik Informatika', '081312286005', 'syahrulfauzi@gmail.com', 'laki-laki', 'O', 'Pamijahan, Tasikmalaya', 201),
('Jajang Sukmara', 'Bandung, 21 Agustus 1997', 'Islam', '6706254188', 'D3 Teknik Komputer', '081312286003', 'jajang@mail.com', 'laki-laki', 'B', 'Bojongsoang, Bandung', 303),
('Muhammad Himni Abdillah', 'Tasikmalaya, 18 Feburari 2009', 'Islam', '6706274088', 'S1 Teknik Telekomunikasi', '089746128736', 'mhimniabdillah@gmail.com', 'laki-laki', 'A', 'Bubuay 2, Wangunsari, Bantarkalong, Tasikmalaya', 201),
('Muhammad Ridho Suherman', 'Tasikmalaya, 25 April 2009', 'Islam', '6706274188', 'S1 Teknik Telekomunikasi', '081312286005', 'ridhosuherman@gmail.com', 'laki-laki', 'A', 'Eureupalay, Tasikmalaya', 201),
('Arman Maulana', 'Bandung, 23 Juli 1997', 'Islam', '6706274189', 'D3 Teknik Informatika', '081312286044', 'armandmaulana@gmail.com', 'laki-laki', 'AB', 'Sukajadi, Bandung', 302),
('Dede Khaeruman', 'Tasikmalaya, 20 April 1997', 'Islam', '6706287188', 'D3 Teknik Telekomunikasi ', '081312289804', 'dedekhaeruman@gmail.com', 'laki-laki', 'B', 'Parakanhonje, Tasikmalaya', 203),
('Dede Mulyana', 'Bandung, 23 April 1995', 'Islam', '6706857813', 'S1 Teknik Fisika', '081312765458', 'dedemulyana@hotmail.com', 'laki-laki', 'B', 'Pangalengan, Kabupaten Bandung', 202);

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE IF NOT EXISTS `tamu` (
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `tamu1` varchar(50) NOT NULL,
  `tamu2` varchar(50) NOT NULL,
  `tamu3` varchar(50) NOT NULL,
  `lantai` varchar(20) NOT NULL,
  `kamar` varchar(20) NOT NULL,
  `mhs` varchar(50) NOT NULL,
  `tujuan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`tanggal`, `jam`, `tamu1`, `tamu2`, `tamu3`, `lantai`, `kamar`, `mhs`, `tujuan`) VALUES
('2017-04-28', '00:42:16', 'Adit', 'Rahmat', 'Mutaqin', '4', '406', 'Aditya Rahmat Mutaqin', 'Hai Adit'),
('2017-04-29', '00:59:25', 'Ridho', 'Arsyan', '', '4', '406', 'Aditya Rahmat Mutaqin', 'Menjenguk dan Silaturrahmi ke Temen'),
('2017-04-27', '21:08:19', 'Robi', 'Asep', 'Ahmad', '4', '406', 'Aditya Rahmat Mutaqin', 'Mau menjenguk teman saja dan bersilaturrahmi'),
('2017-04-27', '22:10:35', 'AyauhH', '', '', '4', '406', 'Aditya Rahmat Mutaqin', ''),
('2017-04-27', '22:11:46', 'A', '', '', '4', '406', 'Sergio Suryawan P.', 'Menjenguk doang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `cek_in_out_kamar`
--
ALTER TABLE `cek_in_out_kamar`
  ADD PRIMARY KEY (`jam`);

--
-- Indexes for table `jemuran`
--
ALTER TABLE `jemuran`
  ADD PRIMARY KEY (`jam`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`idKamar`),
  ADD KEY `idLantai` (`idLantai`,`idKamar`,`namaKamar`),
  ADD KEY `idLantai_2` (`idLantai`);

--
-- Indexes for table `lantai`
--
ALTER TABLE `lantai`
  ADD PRIMARY KEY (`idLantai`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `FOREIGN` (`kamar`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`jam`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`idLantai`) REFERENCES `lantai` (`idLantai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mhs`
--
ALTER TABLE `mhs`
  ADD CONSTRAINT `mhs_ibfk_1` FOREIGN KEY (`kamar`) REFERENCES `kamar` (`idKamar`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
