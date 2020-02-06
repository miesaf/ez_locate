-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 10.4.1.136:3306
-- Generation Time: Feb 06, 2020 at 08:52 AM
-- Server version: 10.2.24-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezloc`
--

-- --------------------------------------------------------

--
-- Table structure for table `BENGKEL`
--

CREATE TABLE `BENGKEL` (
  `ID_BEN` int(5) NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `ALAMAT` text NOT NULL,
  `NEGERI` varchar(4) NOT NULL,
  `SEKTOR` varchar(15) NOT NULL,
  `INDUS` varchar(4) NOT NULL,
  `PENCERAMAH` text NOT NULL,
  `JAWATAN` varchar(50) NOT NULL,
  `KELAYAKAN` varchar(4) NOT NULL,
  `KEMAHIRAN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BENGKEL`
--

INSERT INTO `BENGKEL` (`ID_BEN`, `NAMA`, `ALAMAT`, `NEGERI`, `SEKTOR`, `INDUS`, `PENCERAMAH`, `JAWATAN`, `KELAYAKAN`, `KEMAHIRAN`) VALUES
(1, 'Perpustakaan Negara Malaysia', '232, Jalan Tun Razak,\r\n50572 Kuala Lumpur', 'KLUM', 'Kerajaan', 'KHID', 'Shamsul Kamariah binti Hamzah', 'Timbalan Pengarah Pemuliharaan', 'ISMA', 'Bukan Perakaunan'),
(2, 'UiTM Cawangan Johor', 'KM 12 Jalan Muar,\r\n85009 Segamat', 'JOHO', 'Kerajaan', 'KHID', 'Azura binti Abdul Jamil @ Kamarudzzaman', 'Pensyarah Kanan', 'ISMA', 'Bukan Perakaunan'),
(3, 'Biro Tatanegara', 'Kem Bina Negara Ulu Sepri,\r\nJabatan Perdana Menteri,\r\n71300 Rembau', 'NEGS', 'Kerajaan', 'KHID', '06-6996679 (P)', '', 'TDKT', 'Bukan Perakaunan'),
(4, 'Universiti Teknologi Malaysia', 'School of Graduate Studies,\r\n81310 Johor Bharu', 'JOHO', 'Kerajaan', 'KHID', 'Nor Haniza binti Sarmin (Prof Madya Dr)', 'Timbalan Dekan (Admission & Customer Relation)', 'DRFL', 'Bukan Perakaunan'),
(6, 'UiTM Cawangan Johor', 'KM 12 Jalan Muar,\r\n85009 Segamat', 'JOHO', 'Kerajaan', 'KHID', 'Nor Diana binti Abd Rahman', 'Pensyarah Kanan', 'ISMA', 'Bukan Perakaunan'),
(7, 'UiTM Cawangan Johor', 'KM 12 Jalan Muar,\r\n85009 Segamat', 'JOHO', 'Kerajaan', 'KHID', 'Mawar Noor binti Abdullah', 'Pustakawan', 'ISMA', 'Bukan Perakaunan'),
(8, 'UiTM Cawangan Johor', 'KM 12 Jalan Muar,\r\n85009 Segamat', 'JOHO', 'Kerajaan', 'KHID', 'Ruziah binti A.Latif', 'Pensyarah Kanan', 'ISMA', 'Bukan Perakaunan'),
(9, 'Perbadanan Nasional Berhad', 'No. 65 Jalan Padi Ria 2, Bandar Baru Uda,\r\n81200 Johor Bahru', 'JOHO', 'Swasta', 'KHID', 'Muhamad Hafizi Sulaiman', 'Ketua Wilayah Koridor Selatan', 'ISMA', 'Bukan Perakaunan'),
(10, 'Unit Peneraju Agenda Bumiputera (TERAJU) Johor', 'c/o IRDA Main Office, G01 Block 8,\r\nDanga Bay, Jalan Skudai,\r\n80200 Johor Bahru', 'JOHO', 'Swasta', 'KHID', 'Mohd Nazib bin Sulaiman', 'Eksekutif Kewangan', 'ISMA', 'Bukan Perakaunan'),
(11, 'UiTM Cawangan Johor', 'KM 12 Jalan Muar,\r\n85009 Segamat', 'JOHO', 'Kerajaan', 'KHID', 'Mohd Lezam bin Lehat', 'Pensyarah Kanan', 'ISMA', 'Bukan Perakaunan'),
(12, 'Yayasan Dakwah Islam Malaysia', 'Kompleks Islam Putrajaya, Aras 4 Blok D\r\nNo.3 Jalan Tun Razak, Presint 3,\r\n62100 Putrajaya', 'PUTR', 'Kerajaan', 'KHID', 'Y Bhg. Dato\' Dr Asyraf Wajdi bin Haji Dusuki\r\n03-88703870 (P)', 'Yang Di pertua YADIM', 'DRFL', 'Bukan Perakaunan'),
(14, 'Kumpulan Wang Simpanan Pekerja (KWSP)', 'No. 5 & 6 Jalan Genuang Perdana,\r\nTaman Genuang Perdana,\r\nSegamat', 'JOHO', 'Swasta', 'KHID', 'Melati binti Mohamed', 'Pengarah Cawangan Segamat', 'ISMA', 'Perakaunan'),
(15, 'Suruhanjaya Pencegahan Rasuah Malaysia (SPRM)', 'Pejabat SPRM Negeri Sembilan,\r\nJalan Dato\' Kelana Makmur,\r\nPeti Surat 6000', 'NEGS', 'Kerajaan', 'KHID', 'Ramzi Hannan bin M. Haroon Fahmie\r\n06-7625446 / 06-7620207 (P)', 'Penguasa', 'ISMA', 'Bukan Perakaunan'),
(16, 'General Agency Manager Unit Trust', 'Johor Bahru', 'JOHO', 'Swasta', 'KHID', 'Norlela Khalidah binti Darmin', '', 'ISMA', 'Bukan Perakaunan'),
(17, 'Bank Negara Malaysia', 'Jalan Dato\'Onn,\r\nP.O. Box 10922', 'KLUM', 'Kerajaan', 'KHID', 'Fatmah binti Faisol\r\n03-26988044 (p)', 'Senior Executive Banking Supervision', 'ISMA', 'Bukan Perakaunan'),
(18, 'Bursa Malaysia Derivative Berhad', '2nd floor Exchange Square,\r\nBukit Kewangan', 'KLUM', 'Swasta', 'KHID', 'Jamsyid bin Ramli\r\n03-20267408', 'Assisstant Vice President', 'TDKT', ''),
(19, 'RHB Bank Berhad', 'No. 110-111 Jalan Genuang,\r\n85000 Segamat', 'JOHO', 'Swasta', 'KHID', 'Sofyan bin Mustamim\r\n07-9317110 (p)', 'Pengurus Perhubungan Perakaunan', 'SARJ', 'Bukan Perakaunan'),
(20, 'Smart Excel Consultant', 'NLP & Hypnotherapy Clinical Office,\r\nN0.2-1A, Jalan TIB 1/1, Pusat Niaga Batu Caves,\r\n68100, Gombak', 'SELA', 'Swasta', 'KHID', 'Mohd Mustaqim bin Asmuji\r\n019-2044036 (P)', 'Professional Hipnoterapis', 'LAIN', 'Bukan Perakaunan'),
(21, 'UiTM Cawangan Johor', 'KM 12 Jalan Muar,\r\n85009 Segamat', 'JOHO', 'Kerajaan', 'KHID', 'Ismail bin Pahmi', 'Pensyarah Kanan', 'SARJ', 'Bukan Perakaunan'),
(22, 'UiTM Cawangan Johor', 'Fakulti Perakaunan,\r\nKM 12 Jalan Muar,\r\n85009 Segamat', 'JOHO', 'Kerajaan', 'KHID', 'Raja Adzrin binti Raja Ahmad', 'Pensyarah Kanan', 'DRFL', 'Perakaunan'),
(23, 'UiTM Cawangan Johor', 'Fakulti Perakaunan,\r\nKM 12 Jalan Muar,\r\n85009 Segamat', 'JOHO', 'Kerajaan', 'KHID', 'Zarina binti Abu Bakar', 'Pensyarah Kanan', 'SARJ', 'Perakaunan'),
(24, 'Perbadanan Harta Intelek Malaysia', 'Menara UOA Bangsar,\r\nNo. 5 Jalan Bangsar Utama 1', 'KLUM', 'Swasta', 'KHID', 'Redzuan bin Ali', 'Pricipal Patent examiner', 'SARJ', 'Bukan Perakaunan'),
(25, 'UiTM Pasir Gudang', 'Akademi Pusat Bahasa,\r\nPasir Gudang', 'JOHO', 'Kerajaan', 'KHID', 'Dr Normah binti Ismail', 'Pensyarah Kanan', 'DRFL', 'Bukan Perakaunan'),
(26, 'UiTM Cawangan Johor', 'Akademi Pusat Bahasa,\r\nKM 12 Jalan Muar\r\n85009 Segamat', 'JOHO', 'Kerajaan', 'KHID', 'Rafiaah binti Abu', 'Pensyarah Kanan', 'SARJ', 'Bukan Perakaunan'),
(27, 'Arkib Negara Malaysia', 'Jalan Duta,\r\n50568 Kuala Lumpur', 'KLUM', 'Kerajaan', 'KHID', 'Zaidin bin Mohd Noor', 'Ketua Seksyen Arkid Digital', 'ISMA', 'Bukan Perakaunan'),
(28, 'Kementerian Tenaga, Teknologi Hijau dan Air', 'Blok E4-5 Kompleks E,\r\n62668 Putrajaya', 'PUTR', 'Kerajaan', 'KHID', 'Alizah binti Mat Ali\r\n03-88836348', 'Akauntan Kanan', 'ISMA', 'Perakaunan'),
(29, 'Kabaz Financial Director', 'G-39 Blok 5,Laman Seri Business Park,\r\nNo. 7 Persiaran Sukan, Seksyen 13,\r\n40000 Shah Alam', 'SELA', 'Swasta', 'KHID', 'Kartini binti Kamarudin\r\n03-55107921 (p)', 'Group Financial Director', 'ISMA', 'Perakaunan'),
(30, 'Lembaga Hasil Dalam Negeri', 'LHDN Cawangan Melaka,\r\nMenara Hasil Tingkat 7,\r\n75450 Ayer Keroh', 'MELK', 'Swasta', 'KHID', 'Siti Salwah binti Jumali\r\n06-285888 (ext 160544)', 'Pegawai Eksekutif (Penaksiran)', 'ISMA', 'Perakaunan'),
(31, 'Maybank Berhad', '100, Jalan Tun Perak,\r\n50050 Kuala Lumpur', 'KLUM', 'Swasta', 'KHID', 'Khairul Anuar bin Samba (FACCA)', 'Head of Accounting Project, Group Financial Contro', 'LAIN', 'Perakaunan'),
(32, 'UEM Sunrise Berhad', 'No. 8 Ledang Heights,\r\n79250, Nusajaya', 'JOHO', 'Swasta', 'KHID', 'Muhamad Redzuan bin Muhamad Arif', 'Sales executive (Sales and Marketing Department)', 'ISMA', 'Bukan Perakaunan'),
(33, 'Hadi Sukses Consultancy & Services', 'No. 2 Jalan Kinabalu 6/1 Taman Koperasi,\r\n86000 Kluang', 'JOHO', 'Swasta', 'KHID', 'Mohammad Hadi bin Mohd Salleh', 'Managing Director', 'ISMA', 'Bukan Perakaunan'),
(34, 'Jabatan Kastam Diraja Muar', 'Jalan Maharani, Peti Surat No 1,\r\n84007, Muar', 'JOHO', 'Swasta', 'KHID', 'Mohd Hanaffi bin Harun', 'Penguasa Kastam', 'ISMA', 'Bukan Perakaunan'),
(35, 'R&K Partners Link', 'No. 9-01 Jalan setia Tropika 1/28,\r\nTaman Setia Tropika,\r\n81200 Johor bahru', 'JOHO', 'Swasta', 'KHID', 'Muhamad Aizam bin Hj Shufaat', 'Pengurus', 'LAIN', 'Bukan Perakaunan'),
(36, 'CIMB Group Islamic Banking Division', 'Level 13, Menara CIMB,\r\nJalan Stesen Sentral 2, KL Sentral\r\n50470', 'KLUM', 'Swasta', 'KHID', 'Ahmad Nazir bin Che Yem', 'Certified Corporate Trainer', 'ISMA', 'Bukan Perakaunan'),
(38, 'Perbadanan Insurans Pendeposit Malaysia (PIDM)', 'Level 12, Menara Axiata,\r\nJalan Stesen Sentral 2, KL Sentral,\r\n50470 Kuala Lumpur', 'KLUM', 'Swasta', 'KHID', 'Ridzuan bin Abdul Rahim\r\n03-21737476', 'Manager of Communications and Public Affairs Divis', 'TDKT', ''),
(39, 'Agensi Kaunseling & Pengurusan Kredit (AKPK)', 'Aras 8 Maju Junction Mall,\r\n1001 Jalan Sultan Ismail,\r\n50520 Kuala Lumpur', 'KLUM', 'Swasta', 'KHID', 'Osman bin Yusop\r\n03-26167761', 'Counselor', 'ISMA', 'Bukan Perakaunan'),
(40, 'Securities Commission Malaysia', '3 Persiaran Bukit Kiara,\r\nBukit Kiara,\r\n50490 Kuala Lumpur', 'KLUM', 'Swasta', 'KHID', 'Wan Abdul Rahim Kamil bin Wan Mohamed Ali\r\n03-62048777', 'Islamic Capital Market Consultant', 'SARJ', 'Bukan Perakaunan'),
(41, 'Jupiter Securities Sdn Bhd', 'Tingkat 8&9 Menara Olympia\r\nJalan Raja Chulan,\r\n50200 Kuala Lumpur', 'KLUM', 'Swasta', 'KHID', 'Nazarry bin Rosli\r\n017-3223718', 'Ketua Pengarah', 'ISMA', 'Bukan Perakaunan'),
(42, 'UiTM Cawangan Johor', 'KM 12 Jalan Muar,\r\n85009 Segamat', 'JOHO', 'Kerajaan', 'KHID', 'Muhammad Asyraf Wahi bin Anuar', 'Pensyarah Kanan', 'SARJ', 'Bukan Perakaunan'),
(43, 'UiTM Cawangan Johor', 'KM 12 Jalan Muar,\r\n85009 Segamat', 'JOHO', 'Kerajaan', 'KHID', 'Isma bin Ishak', 'Pensyarah Kanan', 'SARJ', 'Bukan Perakaunan'),
(44, 'Hospital Enche\' Besar Hajjah Khalsom', 'KM 5 Jalan Kota Tinggi,\r\n86000 Kluang', 'JOHO', 'Kerajaan', 'KHID', 'Rusli bin Mohamad\r\n', 'Penolong Pegawai Tadbir Rekod', 'LAIN', 'Bukan Perakaunan'),
(45, 'Lablink (M) Sdn Bhd', '14(129) Jalan Pahang Barat\r\nOff Jalan Pahang\r\n53000', 'KLUM', 'Swasta', 'KHID', 'Nora binti Buhari', 'General Manager', 'SARJ', 'Bukan Perakaunan'),
(46, 'Permodalan Nasional Berhad', 'Menara PNB, 201-A Jalan Tun Razak,\r\n50400 Kuala Lumpur', 'KLUM', 'Swasta', 'KHID', 'Adibah Khairiah binti Ismail @ Daud', 'Company Secretary', 'SARJ', 'Perakaunan'),
(47, 'Foresight Industries Sdn Bhd', 'Jalan Tiaj 2/6,\r\nBandar Puncak Alam,\r\n42300 Kuala Selangor', 'SELA', 'Swasta', 'KHID', 'Aidi Roslan bin Abu Bakar\r\n03-60388808 (P)', 'Director', 'DIPL', 'Perakaunan'),
(48, 'CIMB Islamic Bank Berhad', 'Level 19,  Menara Bumiputra -Commerce,\r\n11 Jalan Raja Laut,\r\n50350 Kuala Lumpur', 'KLUM', 'Swasta', 'KHID', 'Ahmad Nazir Che Yen', 'Director', 'SARJ', 'Bukan Perakaunan'),
(49, 'Jabatan Kastam DiRaja Malaysia', 'Jabatan Kastam DiRaja Malaysia Cawangan Muar,\r\n51, Jalan Muar,\r\n 84000 Muar', 'JOHO', 'Kerajaan', 'KHID', 'Mohd Hanaffi bin Harun\r\n06-986 4270 (P)', 'Penguasa Kastam', 'SARJ', 'Bukan Perakaunan'),
(50, 'R&K Lind and Partner', '9-01, Setia Tropika, 1/8 Taman Setia Tropika,\r\n 81200 Johor Bahru', 'JOHO', 'Swasta', 'KHID', 'Muhamad Aizam bin Hj Shufaat\r\n', 'Pengarah Urusan', 'LAIN', ''),
(51, 'Gerbang Nusajaya Sdn Bhd', 'No. 6 Jalan Kempas Utam 1/1,\r\nTaman Kempas Utama,\r\n 81300 Johor Bahru', 'JOHO', 'Swasta', 'KHID', 'Mohd Nadzri bin Ali\r\n', 'Corporate Planning Director', 'SPMA', ''),
(52, 'Cellnet Communication', 'Lot 745, Batu 19 1/2,\r\n 45800 Jeram', 'SELA', 'Swasta', 'KHID', 'Khaireel Azlee bin Abdul Aziz\r\n013-2917933 (P)', 'Marketing Manager', 'TDKT', 'Bukan Perakaunan'),
(53, 'UEM Sunrise Berhad', 'No. 1203 Blok 3 Peringkat 2,\r\nJalan Pulai Felda Bukit Easter,\r\n81907 Kota Tinggi', 'JOHO', 'Swasta', 'KHID', 'Muhamad Redzuan Muhamad Arif', 'Sales Executive', 'SARJ', 'Bukan Perakaunan'),
(54, 'F &N Malaysia Sdn Bhd', '456A Persiaran Merak\r\n Taman Paroi Jaya\r\n70400 Seremban', 'JOHO', 'Swasta', 'KHID', 'Yunus bin Abdul Wahab\r\n019-2411259 (P)', 'Senior executive', 'DIPL', 'Bukan Perakaunan'),
(55, 'The Strand', 'The Strand, Kota Damansara,\r\n47810 Petaling Jaya', 'SELA', 'Swasta', 'KHID', 'Mohd Anas Zahrin Atan\r\nannaseaskey@gmail.com', 'Fashion', 'SARJ', ''),
(56, 'Hadi Sukses Consultancy & Services', 'No. 2 Jalan Kinabalu 6/1 Taman Koperasi,\r\n86000 Kluang ', 'JOHO', 'Swasta', 'KHID', 'Mohammad Hadi Mohd Salleh\r\n013-3993202 (P)', '', 'SARJ', 'Bukan Perakaunan'),
(57, 'UiTM Cawangan Johor', 'KM 12 Jalan Muar\r\n85009 Segamat', 'JOHO', 'Kerajaan', 'KHID', 'Faridah Najuna binti Misman\r\n(Dr)\r\n012-6129619 (HP)', 'Pensyarah Kanan', 'DRFL', 'Bukan Perakaunan'),
(58, 'UiTM Cawangan Johor', 'KM 12 Jalan Muar\r\n85009 Segamat', 'JOHO', '', 'KHID', 'Syamsul bin Samsudin\r\n013-6028406  (HP)', 'Pensyarah Kanan', 'SARJ', 'Bukan Perakaunan'),
(59, 'PriceaterhouseCoopers', 'Level 10, 1 Sentral, Jalan Rakyat\r\nKuala Lumpur Sentral, PO Box 10192\r\n50760 Kuala Lumpur', 'KLUM', '', 'KHID', 'Nor Sherriza binti Nor Rashid\r\n03-21731188 (P)\r\n03-21731780 (F)\r\ncareer.enquiries@my.pwc.com', 'Senior Manager', 'PROF', 'Perakaunan'),
(60, 'Deloitte PLT', 'Level 16, Menard LGB\r\n1 Japan Wan Kadir\r\nTaman Tun Dr. Ismail\r\n60000 Kuala Lumpur', 'KLUM', 'Swasta', 'KHID', 'Tan Thing Hopi\r\n03-76108888 (P)\r\n03-77268986 (F)\r\n012-7822727 (HP)\r\ntanth@deloitte.com', 'Country Managing Partner (Deloitte)', 'PROF', 'Perakaunan'),
(61, 'Deloitte Touche Tohmatsu Tax Services Sdn Bhd', 'Level 16, Menara LGB\r\n1, Japan Wan Kadir\r\nTaman Tun Dr. Ismail\r\n60000 Kuala Lumpur\r\n', 'KLUM', '', 'KHID', 'Theresa Goh\r\n03-76108888 (P)\r\n03-77257768 (F)\r\n012-2200378 (HP\r\ntgoh@deloitte.com', 'Executive Director ', 'PROF', 'Perakaunan'),
(62, 'UiTM Cawangan Johor', 'Fakulti Perakaunan\r\nKM 12 Jalan Muar\r\n85009 Segamat', 'JOHO', 'Kerajaan', 'KHID', 'Mohd Halim bin Kadri\r\n(Prof Madya Dr)\r\n07-9352094 (P)\r\n012-7681226 (HP)', 'Pensyarah Kanan', 'DRFL', 'Perakaunan'),
(63, 'UiTM Cawangan Johor', 'Fakulti Perakaunan\r\nKM 12 Jalan Muar\r\n85009 Segamat', 'JOHO', 'Kerajaan', 'KHID', 'Norfizah binti Othman\r\n07-9352103 (P)\r\n013-7238854 (HP)', 'Pensyarah Kanan', 'SARJ', 'Perakaunan'),
(64, 'UiTM Cawangan Johor', 'Fakulti Perakaunan\r\nKM 12 Jalan Muar\r\n85009 Segamat', 'JOHO', 'Kerajaan', 'KHID', 'Nadzira binti Yahaya\r\n07-9352097 (P)\r\n0133401046 (HP)', 'Pensyarah Kanan', 'SARJ', 'Perakaunan'),
(65, 'The Malaysian Institute of Certified Public Accountants (CPA)', 'No. 15, Japan Medan Tuanku\r\n50300 Kuala Lumpur', 'KLUM', '', 'KHID', 'Eileen Grace Lee\r\n03--26989622 (P)\r\n03-26989403 (F)\r\neileen.mktg@mica.com.my', 'Senior Marketing Manager', 'PROF', 'Perakaunan'),
(66, 'UiTM Cawangan Johor', 'Fakulti Perakaunan\r\nKM 12 Jalan Muar\r\n85009 Segamat', 'JOHO', 'Kerajaan', 'KHID', 'Norhidayah binti Abdullah \r\n07-9352183 (P)\r\n013-3982484 (HP)\r\n', 'Pensyarah Kanan', 'SARJ', 'Perakaunan'),
(67, 'UiTM Cawangan Johor', 'Fakulti Perakaunan\r\nKM 12 Jalan Muar\r\n85009 Segamat', 'JOHO', 'Kerajaan', 'KHID', 'Ahmad Marzuki Amiruddin bin Othman\r\n07-9352816 (P)\r\n012-7999134 (HP)', 'Pensyarah ', 'SARJ', 'Perakaunan'),
(68, 'UiTM Cawangan Johor', 'Fakulti Perakaunan\r\nKM 12 Jalan Muar\r\n85009 Segamat', 'JOHO', 'Kerajaan', 'KHID', 'Mohamad Albar bin Bakar\r\n07-9352093 (P)\r\n012-7961014 (HP)\r\n', 'Pensyarah Kanan', 'SARJ', 'Perakaunan'),
(69, 'UiTM Cawangan Johor', 'Fakulti Perakaunan\r\nKM 12 Jalan Muar\r\n85009 Segamat', 'JOHO', 'Kerajaan', 'KHID', 'Nor Hafizah binti Abd Mansor\r\n019-7574206 (HP)', 'Pensyarah Kanan', 'SARJ', 'Perakaunan'),
(72, 'Dunia Susu Ibu Enterprise', 'No. 37, Lorong IS 89,\r\nPerkampungan Indera Sempurna,\r\nJalan Kuantan-Pekan,\r\n25150 Kuantan', 'PHNG', 'Swasta', 'KHID', 'Mardziah binti Mohd Lokoman', 'Pengarah', 'ISMA', 'Bukan Perakaunan');

-- --------------------------------------------------------

--
-- Table structure for table `CAD_BENGKEL`
--

CREATE TABLE `CAD_BENGKEL` (
  `ID_BEN` int(5) NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `ALAMAT` text NOT NULL,
  `NEGERI` varchar(4) NOT NULL,
  `SEKTOR` varchar(15) NOT NULL,
  `INDUS` varchar(4) NOT NULL,
  `PENCERAMAH` text NOT NULL,
  `JAWATAN` varchar(50) NOT NULL,
  `KELAYAKAN` varchar(4) NOT NULL,
  `KEMAHIRAN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `CAD_LAWATAN`
--

CREATE TABLE `CAD_LAWATAN` (
  `ID_LAW` int(5) NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `ALAMAT` text NOT NULL,
  `NEGERI` varchar(4) NOT NULL,
  `SEKTOR` varchar(15) NOT NULL,
  `INDUS` varchar(4) NOT NULL,
  `PEGAWAI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CAD_LAWATAN`
--

INSERT INTO `CAD_LAWATAN` (`ID_LAW`, `NAMA`, `ALAMAT`, `NEGERI`, `SEKTOR`, `INDUS`, `PEGAWAI`) VALUES
(1, 'Les\' Copaque Production Sdn Bhd', 'No. 1, Jalan Boling Padang G13/G\r\nSection 13, 40100 Shah Alam', 'SELA', 'Swasta', 'LAIN', '03-55118089 (P)\r\n03-55118086 (F)\r\ninfo@lescopaque.com');

-- --------------------------------------------------------

--
-- Table structure for table `HIT_BENGKEL`
--

CREATE TABLE `HIT_BENGKEL` (
  `ID_BEN` int(5) NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `ALAMAT` text NOT NULL,
  `NEGERI` varchar(4) NOT NULL,
  `SEKTOR` varchar(15) NOT NULL,
  `INDUS` varchar(4) NOT NULL,
  `PENCERAMAH` text NOT NULL,
  `JAWATAN` varchar(50) NOT NULL,
  `KELAYAKAN` varchar(4) NOT NULL,
  `KEMAHIRAN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HIT_BENGKEL`
--

INSERT INTO `HIT_BENGKEL` (`ID_BEN`, `NAMA`, `ALAMAT`, `NEGERI`, `SEKTOR`, `INDUS`, `PENCERAMAH`, `JAWATAN`, `KELAYAKAN`, `KEMAHIRAN`) VALUES
(4, 'Amanah RAYA Berhad', 'Amanah RAYA Cawangan Muar,\r\nNo 208 Jalan Meriam,\r\n84000 Muar', 'JOHO', 'Swasta', 'KHID', 'Hamidon bin Amen', 'Ketua Cawangan', 'ISMA', 'Bukan Perakaunan');

-- --------------------------------------------------------

--
-- Table structure for table `HIT_LAWATAN`
--

CREATE TABLE `HIT_LAWATAN` (
  `ID_LAW` int(5) NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `ALAMAT` text NOT NULL,
  `NEGERI` varchar(4) NOT NULL,
  `SEKTOR` varchar(15) NOT NULL,
  `INDUS` varchar(4) NOT NULL,
  `PEGAWAI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `INDUS`
--

CREATE TABLE `INDUS` (
  `ID_INDUS` varchar(4) NOT NULL,
  `INDUSTRI` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `INDUS`
--

INSERT INTO `INDUS` (`ID_INDUS`, `INDUSTRI`) VALUES
('BUAT', 'Pembuatan'),
('DAGA', 'Perdagangan'),
('KHID', 'Perkhidmatan'),
('LAIN', 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `KELAYAKAN`
--

CREATE TABLE `KELAYAKAN` (
  `ID_KEL` varchar(4) NOT NULL,
  `KEL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `KELAYAKAN`
--

INSERT INTO `KELAYAKAN` (`ID_KEL`, `KEL`) VALUES
('DIPL', 'Diploma'),
('DRFL', 'Doktor Falsafah'),
('ISMA', 'Ijazah Sarjana Muda'),
('LAIN', 'Lain-lain'),
('PROF', 'Kelayakan Professional'),
('SARJ', 'Sarjana'),
('SPMA', 'Sijil Pelajaran Malaysia'),
('TDKT', 'Tidak Diketahui');

-- --------------------------------------------------------

--
-- Table structure for table `LAWATAN`
--

CREATE TABLE `LAWATAN` (
  `ID_LAW` int(5) NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `ALAMAT` text NOT NULL,
  `NEGERI` varchar(4) NOT NULL,
  `SEKTOR` varchar(15) NOT NULL,
  `INDUS` varchar(4) NOT NULL,
  `PEGAWAI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `LAWATAN`
--

INSERT INTO `LAWATAN` (`ID_LAW`, `NAMA`, `ALAMAT`, `NEGERI`, `SEKTOR`, `INDUS`, `PEGAWAI`) VALUES
(1, 'Gardenia Bakeries (KL)', 'Lot 3, Jalan Pelabur 23/1,\r\n40300 Shah Alam', 'SELA', 'Swasta', 'BUAT', '03-55423228 (P)\r\n03-55423213 (F)'),
(2, 'Brahim\'s Airline Catering Sdn Bhd', 'Ground Floor, LSGB Catering Building,\r\nMAS Complex, South Support Zone,\r\nKuala Lumpur International Airport\r\n64000 KLIA', 'SELA', 'Swasta', 'BUAT', '03-87771101 (P)'),
(3, 'MISC Integrated Logistics Sdn Bhd', 'PLO 137 & 138,\r\nJalan Angkasa Mas Utama,\r\nKawasan Perindustrian Tebrau II', 'JOHO', 'Swasta', 'KHID', '07-3575510 (P)\r\n07-3513557 (F)'),
(4, 'NIOSH Wilayah Selatan', 'No. 10, Jalan Persiaran Teknologi,\r\nTaman Teknologi Johor,\r\n81400 Senai', 'JOHO', 'Swasta', 'KHID', '07-5991200 (P)'),
(5, 'Yakult Malaysia', 'No. 276 Jalan Haruan 1,\r\nOakland Industrial Park,\r\n70300 Seremban', 'NEGS', 'Swasta', 'BUAT', '06-6012020 (P)'),
(6, 'Yamagata Malaysia Sdn Bhd', 'Lot P.T 1661 Nilai Industrial Estate,\r\nP.O Box 9,\r\n71809 Nilai,', 'NEGS', 'Swasta', 'BUAT', '06-67992814 (P)\r\n06-67998060 (F)'),
(7, 'Arkib Negara Malaysia', 'Jalan Tuanku Abdul Halim (Jalan Duta),\r\n50568 Kuala Lumpur', 'KLUM', 'Kerajaan', 'BUAT', '03-62090600 (P)\n03-62056800 (P)\n03-62015679 (F)'),
(8, 'Muzium Negara Malaysia', 'Jalan Damansara, Tasik Perdana,\r\n505660 Kuala Lumpur', 'KLUM', 'Kerajaan', 'BUAT', '03-22671111 (P)'),
(9, 'Noraini Cookies World Wide Sdn Bhd', 'No. 21,23,25,27, Jalan Marikh U5/174,\r\nSeksyen U5,\r\n40150 Shah Alam', 'SELA', 'Swasta', 'BUAT', '03-7841276 (P)\r\n03-7841423 (F)'),
(10, 'Cotra Enterprises Sdn Bhd', 'No. 7, Jalan 19/1,\r\nSeksyen 19,\r\n46300 Petaling Jaya', 'SELA', 'Swasta', 'BUAT', '03-79554388 (P)'),
(11, 'Suruhanjaya Pencegahan Rasuah Malaysia', 'Aras 4, Blok D6, Kompleks D,\r\nPusat Pentadbiran Kerajaan Persekutuan,\r\n62007 Putrajaya', 'PUTR', 'Kerajaan', 'KHID', '03-88867000 (P)'),
(12, 'Petrosains', 'Petronas Twin Towers,\r\nLevel 4, Suria KLCC,\r\n50088 Kuala Lumpur', 'KLUM', 'Swasta', 'KHID', '03-23318181 (P)'),
(13, 'Fitrah Food Sdn Bhd', 'No. 14, Jalan T5 6/9,\r\nTaman Industri Subang,\r\n47510 Subang Jaya', 'SELA', 'Swasta', 'BUAT', '03-562135596 (P)'),
(14, 'Jascon Food Sdn Bhd', 'Lot 1298, Batu 7, Jalan Bukit Kemuning,\r\nSeksyen 34,\r\n40470 Shah Alam', 'SELA', 'Swasta', 'BUAT', '03-51219504 (P)'),
(15, 'Farm\'s Best Sdn Bhd', 'Lot 37 & 38,\r\nMasjid Tanah Industrial Estate,\r\n78300 Masjid Tanah\r\n', 'MELK', 'Swasta', 'BUAT', '06-3847178 (P)'),
(16, 'KLN Timbercraft Sdn Bhd', 'Lot 8, Bukit Rambai Industrial Estate,\r\n75250 Melaka', 'MELK', 'Swasta', 'BUAT', '06-3517389 (P)'),
(18, 'Dodol Warisan Tradisional', '2763 Bazar Mara Umbai,\r\nTaman Dato Aziz,\r\nKM 16, Kampung Pulai,\r\n77300 Merlimau', 'MELK', 'Swasta', 'BUAT', '017-7202726 (P)'),
(19, 'Zaliza Food Industries', 'Kompleks Kilang SME Bank Telok Mas,\r\nLot B2 Kompleks Kilang SME Bank,\r\nKM 11, Telok Mas,\r\n75460  Melaka', 'MELK', 'Swasta', 'BUAT', '06-2683732 (P)'),
(20, 'Media Karangkfat Sdn Bhd', 'Lot No 25, Premis No 1,\r\nJalan Renggam 15/5 Off Persiaran Selangor,\r\nSeksyen 15,\r\n40200 Shah Alam', 'SELA', 'Swasta', 'DAGA', '03-51017388 (P)'),
(21, 'Toshiba Sales & Services Sdn Bhd', 'Ground Floor & Level 5,\r\nBangunan Palm Grove,\r\nNo 12, Jalan Glenmarie (Persiaran Kerjaya),\r\nSection U1,\r\n40150 Shah Alam', 'SELA', 'Swasta', 'DAGA', '1300887899 (P)'),
(22, 'Koko Minda Food Industries (M) Sdn Bhd', 'Lot 20 & 30 Jalan EP9,\r\nKawasan Industri IKS,\r\nMelaka Halal Hub Serkam,\r\n77300 Merlimau', 'MELK', 'Swasta', 'BUAT', '06-2633114 (P)'),
(23, 'Tropical Bioessense Sdn Bhd', 'No. ST 519, Jalan Tunas,\r\nSeksyen 1/4,\r\nKawasan Perindustrian Miel,\r\n78300 Masjid Tanah', 'MELK', 'Swasta', 'BUAT', '06-3842800 (P)\r\n06-3842900 (F)'),
(24, 'Kelab Adventure Camp', 'Kg. Kela, Ulu Sungai,\r\nRaub', 'PHNG', 'Swasta', 'KHID', 'Azmi Bedu \r\n09-2232275\r\n019-9551752'),
(25, 'Pusat Bahasa Arab Negeri Selangor', 'Jalan Bukit Jati,\r\nKampung Jawa,\r\n41000 Klang', 'SELA', 'Kerajaan', 'KHID', '03-33738654 (P)\r\n03-33738922 (F)'),
(26, 'Muzium Kesenian Islam Malaysia', 'Jalan Lembah Perdana, Tasik Perdana,\r\n50480 Kuala Lumpur', 'KLUM', 'Kerajaan', 'KHID', '03-20927070 (P)'),
(27, 'Penjara Sungai Buloh', 'Jalan Harapan,\r\n48020 Selangor', 'SELA', 'Kerajaan', 'KHID', '03-60384858 (P)'),
(28, 'Panasonic Manufacturing Malaysia Berhad', 'No. 3, Jalan Sesiku 15/2,\r\nShah Alam Industrial Site,\r\n47300 Shah Alam', 'SELA', 'Swasta', 'KHID', '03-58915000 (P)'),
(29, 'Petronas Petroleum Resources Center', 'PETRONAS Twin Towers', 'KLUM', 'Swasta', 'KHID', '03-20513807 (P)'),
(30, 'Perbadanan Perpustakaan Awam Selangor', 'Jalan Kelab Golf 13/6, Seksyen 13,\r\n40100 Shah Alam', 'SELA', 'Kerajaan', 'KHID', '03-55197667 (P)'),
(31, 'Ayamas Food Corporation Bhd', 'PTD 1384,\r\nKawasan Industri Bandar Tenggara,\r\n81440 Kulai', 'JOHO', 'Swasta', 'BUAT', '07-8964423 (P)'),
(32, 'New Straits Time Press (M) Bhd', 'Lot Plo 2,\r\nKawasan Perindustrian Senai,\r\n81400 Senai ', 'JOHO', 'Swasta', 'DAGA', '07-5991101 (P)'),
(33, 'Sek Henry Gurney', 'Kampung Jawa,\r\n75990 Telok Mas', 'MELK', 'Kerajaan', 'KHID', '07-2619284 (P)'),
(34, 'Oriental Food Industries', 'No 65, Jalan Usaha 7,\r\nAyer Keroh Industrial Estate,\r\n75450 Melaka', 'MELK', 'Swasta', 'BUAT', '06-2310333 (P)'),
(35, 'Penjara Agro Dusun Dato\' Murad', 'Dusun Dato\'s Murad,\r\n75450 Ayer Keroh', 'MELK', 'Kerajaan', 'LAIN', '06-2323428 (P)\r\n06-2325790 (F)'),
(36, 'Cerebos (M) Sdn Bhd', 'No. 5, Jalan Astaka, U8/88,\r\nBukit Jelutong,\r\n40150 Shah Alam', 'SELA', 'Swasta', 'BUAT', '03-78448630 (P)\r\n03-78448788 (F)\r\ncws@cerebos.com.my'),
(37, 'Royal Selangor Visitor Centre', 'No. 4, Jalan Usahawan 6,\r\nSetapak Jaya,\r\n53300 Kuala Lumpur', 'KLUM', 'Swasta', 'BUAT', '03-41456122 (P)\r\n03-40223000 (F)'),
(38, 'Sek. Keb. Bandar Putra Segamat', 'Jalan Putra 2/25,\r\nBandar Putra,\r\n85000 Segamat', 'JOHO', 'Kerajaan', 'KHID', '07-9432616 (P)'),
(39, 'Agensi Nuklear Malaysia', '43000 Kajang, Bangi', 'SELA', 'Kerajaan', 'KHID', '03-89112000 (P)'),
(40, 'Chocolate Museum by Fidani', 'DR Group Holdings Sdn Bhd,\r\nNo 2, Jalan Teknologi 3/4,\r\nSelangor Science Park 1,\r\nKota Damansara,\r\n47810 Petaling Jaya', 'SELA', 'Swasta', 'BUAT', '03-74904260 (P)\r\n03-61408825 (F)'),
(41, 'Zoo Negara', 'Hulu Kelang,\r\n68000 Ampang', 'SELA', 'Kerajaan', 'KHID', '03-41083422 (P)'),
(42, 'The News Straits Time Press (Malaysia) Berhad', 'Balai Berita Bangsar,\r\nJalan Riong,\r\n59100 Kuala Lumpur', 'KLUM', 'Swasta', 'DAGA', '03-22823131 (P)'),
(43, 'Delima Oil Products', 'PLO 238, Jalan Timah 1,\r\nKawasan Perindustrian Pasir Gudang,\r\n81700 Pasir Gudang', 'JOHO', 'Swasta', 'BUAT', '07-2511289 (P)'),
(44, 'Efficient Technology Sdn Bhd', 'PLO 232, Jalan Kencana Mas 1/5,\r\nKawasan Perindustrian Tebrau,\r\n81100 Johor Bahru', 'JOHO', 'Swasta', 'BUAT', '07-3578311 (P)\r\n07-35111312 (F)'),
(45, 'Mamee-Double Dacker (M) Berhad', 'Lot 1, Air Keroh Industrial Estate,\r\n75450 Ayer Keroh ', 'MELK', 'Swasta', 'BUAT', '06-2324466 (P)'),
(46, 'Central Sugar Refinery (CSR)', 'Batu 3,\r\n40000 Shah Alam', 'SELA', 'Swasta', 'BUAT', '03-55191414 - 17 (P)\r\n03-55198792 (F)'),
(47, 'Institute of Internal Auditors Malaysia', '1-17-07, Menara Bangkok Bank,\r\nBerjaya Central Park,\r\n105 Jalan Ampang,\r\n50450 Kuala Lumpur', 'KLUM', 'Swasta', 'KHID', '03-21818008 (P)\r\n03-21811717 (F)'),
(48, 'High 5 Bread Town', 'Lot 72, Persiaran Jubli Perak,\r\nSeksyen 21,\r\n40000 Shah Alam', 'SELA', 'Swasta', 'BUAT', '03-51922888 ext. 102'),
(49, 'Sek Keb Puteri', 'Jalan Labu Lama,\r\n70200 Seremban', 'NEGS', 'Kerajaan', 'KHID', '06-7624954'),
(50, 'Global Halal Support Centre', 'G.02, 1First Avenue,\r\nPersiaran Bandar Utama,\r\nBandar Utama,\r\n47800 Petaling Jaya', 'SELA', 'Swasta', 'KHID', '1-800-88-0555 (P)'),
(51, 'Jabatan Perangkaan Malaysia', 'Blok C6, Kompleks C,\r\nPusat Pentadbiran Kerajaan Persekutuan,\r\nLebuh Perdana Selatan, Persint 1,\r\n62514 Putrajaya', 'PUTR', 'Kerajaan', 'KHID', '03-88857000 (P)'),
(52, 'Bank Negara Malaysia Johor', 'Jalan Kuching,\r\n50480 Kuala Lumpur', 'KLUM', 'Swasta', 'KHID', '1-3000-88-5465 (P)'),
(53, 'Yakult', 'No. 276, Jalan Haruan 1,\r\nOakland Industrial Park,\r\n70300 Seremban', 'NEGS', 'Swasta', 'BUAT', '06-6012020 (P)\r\n06-6013939 (F)'),
(54, 'Sri Ani Premium', 'Bahagian Pengeluaran & Pemprosesan Makanan,\r\nPusat Pertanian, Batu 10, Labu,\r\n71900 Seremban', 'NEGS', 'Swasta', 'BUAT', '019-2326175 (P)'),
(55, 'Salleh Food Supplier & Marketing Agency', 'Kampung Parit Kemang Darat Senggarang,\r\nBatu Pahat,\r\n83200 Batu Pahat', 'JOHO', 'Swasta', 'BUAT', 'Salleh bin Surip\r\n07-4277600 (P)\r\n07-4277600 (F)'),
(56, 'Pusat Memproses Makanan FAMA Renggit', 'KM36, SG, Kluang Renggit,\r\n81300 Batu Pahat', 'JOHO', 'Swasta', 'BUAT', 'Mohd Aris bin Musa\r\n07-4241240 (P)\r\n07-4241230 (F)'),
(57, 'Nelson\'s Franchise (M) Sdn Bhd', 'No 7, Jalan Penyelenggaran,\r\nU1/77, Taman Perindustrian Batu Tiga,\r\n40150 Shah Alam', 'SELA', 'Swasta', 'BUAT', '03-55128228 (P)\r\n03-55126133 (F)\r\nfranchise@nelsons.com.my'),
(58, 'Silver Bird Group Berhad', 'Lot 72, Persiaran Jubli Perak Seksyen 21,\r\n40000 Shah Alam', 'SELA', 'Swasta', 'BUAT', '03-51922888 (P)\r\n03-51922266 (F)\r\nconsumer@stanson-high5.com'),
(59, 'Rumah Anak Yatim & Miskin Islam', 'KM18, Paya Rumput Jaya,\r\nSungai Udang,\r\n76300 Melaka', 'MELK', 'Kerajaan', 'KHID', '06-3512364 (P)'),
(60, 'Naza Italia Sdn Bhd', 'Lot 3, Jalan 51A/221,\r\n46100 Petaling Jaya', 'SELA', 'Swasta', 'DAGA', '03-79568599 (P)\r\n03-79603302 (F)'),
(61, 'Iskandar Regional Development Authority (IRDA)', 'G-02, Block 8, Danga Bay\r\nJalan Skudai\r\n80200 Johor Bahru', 'JOHO', 'Kerajaan', 'KHID', '07-23333000 (P)\r\n07-2333001 (F)\r\nnatasha@irda.com.my'),
(62, 'Johor Corporation', 'Level 11, Menara KOMTAR\r\n80000 Johor Bahru', 'JOHO', 'Swasta', 'KHID', '07-2232692/07-2192692 (P)\r\n07-2242692 (F)\r\npdnjohor@jcorp.com.my'),
(63, 'Hamidah Food Industries', '3537 KM 15, Jalan Melaka - Muar\r\nKg Umbai\r\n77300 Melaka', 'MELK', 'Swasta', 'BUAT', '06-2615652 (P)\r\n06-2615654 (F)'),
(64, 'SK Buloh Kasap', 'No. 165, Jalan Abdullah\r\n85010 Buloh Kasap', 'JOHO', 'Kerajaan', 'KHID', '07-9442543 (P)'),
(65, 'Rumah Ibuku Sayang Ar-Rayyan', 'Lot 875, Persiaran Semarak 2\r\nTaman Panchur Jaya\r\n70400m Seremban', 'NEGS', 'Swasta', 'KHID', 'Ustazah Rayah\r\n016-6019213 (HP)'),
(66, 'Sek Keb Bukit Tunggal', 'Kampung Batu Tunggal\r\n85100 Jementah', 'JOHO', 'Kerajaan', 'KHID', '07-9473962 (P)'),
(67, 'Sek Keb Teriang', 'No. 1, Jalan Petaling\r\n71600 Kuala Klawang', 'NEGS', 'Kerajaan', 'KHID', '06-6137432 (P)'),
(68, 'Sek Keb Dato\' Seri Maharajalela', 'Jalan Buloh Kasap\r\nKampung Tangga Batu\r\n85000 Segamat', 'JOHO', 'Kerajaan', 'KHID', '07-9312029 (P)'),
(69, 'Malaysia Milk Sdn Bhd', 'Lot 7, Jalan 19/1, Seksyen 19\r\n46300 Petaling Jaya', 'SELA', 'Swasta', 'BUAT', '03-79554388 (P)\r\n03-79577398 (F)\r\n'),
(70, 'Kewpie Malaysia Sdn Bhd', 'Plot 137-140\r\nSerkam Industrial Estate\r\n77300 Merlimau', 'MELK', 'Swasta', 'BUAT', '06-2636188 (P)\r\n06-2635595 (F)'),
(71, 'Sek Men Keb Dato\' Bentara Dalam ', 'Jalan Genuang\r\n85000 Segamat', 'JOHO', 'Kerajaan', 'KHID', '07-9433250 (P)'),
(72, 'Sek Men Agama Haji Mohd Yatim', 'Kampung Seberang Paya\r\n71350 Kota', 'NEGS', 'Swasta', 'KHID', '06-4381411 (P)'),
(73, 'Kulitkraf', 'No. 5, Jalan 19/1, Seksyen 19\r\n46300 Petaling Jaya', 'SELA', 'Swasta', 'BUAT', '03-79574633 (P)'),
(74, 'Institut Integriti Malaysia (IIM)', 'Menara Integriti \r\nPersiaran Duta Off Jalan Duta\r\n50480 Kuala Lumpur ', 'KLUM', 'Swasta', 'KHID', '03-62092000 (P)\r\n03-62031005 (F)\r\n'),
(75, 'Syarikat Grandeur Chocolate', '7, Jalan PS 9/1, Prima Selayang\r\n68100 Batu Caves', 'SELA', 'Swasta', 'BUAT', '012-3460916 (HP)'),
(76, 'Muzium dan Galeri Seni Bank Negara', 'Sasana Kijang, 2, Jalan Dato Onn\r\n50480 Kuala Lumpur', 'KLUM', 'Kerajaan', 'KHID', '03-91792784 (P)'),
(77, 'Jabatan Meteorologi Malaysia', 'Jalan Sultan\r\n46667 Petaling Jaya', 'SELA', '', 'KHID', '03-79678000 (P)\r\n03-79550964 (F)'),
(80, 'XYZ Sdn Bhd', 'No 25 Jalan Persiaran 4\r\n85000 Segamat', 'JOHO', 'Swasta', 'BUAT', '07-9876543 (P)\r\n07-9876544 (F)\r\nfina@xyz.com.my'),
(81, 'AH Kamisah Enterprise', 'KM 19, Kg. Tedong Pantai,\r\n77300 Merlimau', 'MELK', 'Swasta', 'BUAT', '06-2635193 (P)');

-- --------------------------------------------------------

--
-- Table structure for table `NEGERI`
--

CREATE TABLE `NEGERI` (
  `ID_NEGERI` varchar(4) NOT NULL,
  `NEGERI` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `NEGERI`
--

INSERT INTO `NEGERI` (`ID_NEGERI`, `NEGERI`) VALUES
('JOHO', 'Johor Darul Ta\'zim'),
('KLUM', 'Kuala Lumpur'),
('MELK', 'Melaka Bandar Bersejarah'),
('NEGS', 'Negeri Sembilan Darul Khusus'),
('PHNG', 'Pahang Darul Makmur'),
('PUTR', 'Putrajaya'),
('SELA', 'Selangor Darul Ehsan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BENGKEL`
--
ALTER TABLE `BENGKEL`
  ADD PRIMARY KEY (`ID_BEN`),
  ADD KEY `NEGERI` (`NEGERI`,`INDUS`,`KELAYAKAN`),
  ADD KEY `INDUS` (`INDUS`),
  ADD KEY `KELAYAKAN` (`KELAYAKAN`);

--
-- Indexes for table `CAD_BENGKEL`
--
ALTER TABLE `CAD_BENGKEL`
  ADD PRIMARY KEY (`ID_BEN`),
  ADD KEY `NEGERI` (`NEGERI`,`INDUS`,`KELAYAKAN`),
  ADD KEY `INDUS` (`INDUS`),
  ADD KEY `KELAYAKAN` (`KELAYAKAN`);

--
-- Indexes for table `CAD_LAWATAN`
--
ALTER TABLE `CAD_LAWATAN`
  ADD PRIMARY KEY (`ID_LAW`),
  ADD KEY `NEGERI` (`NEGERI`),
  ADD KEY `INDUS` (`INDUS`);

--
-- Indexes for table `HIT_BENGKEL`
--
ALTER TABLE `HIT_BENGKEL`
  ADD PRIMARY KEY (`ID_BEN`),
  ADD KEY `NEGERI` (`NEGERI`,`INDUS`,`KELAYAKAN`),
  ADD KEY `INDUS` (`INDUS`),
  ADD KEY `KELAYAKAN` (`KELAYAKAN`);

--
-- Indexes for table `HIT_LAWATAN`
--
ALTER TABLE `HIT_LAWATAN`
  ADD PRIMARY KEY (`ID_LAW`),
  ADD KEY `NEGERI` (`NEGERI`),
  ADD KEY `INDUS` (`INDUS`);

--
-- Indexes for table `INDUS`
--
ALTER TABLE `INDUS`
  ADD PRIMARY KEY (`ID_INDUS`);

--
-- Indexes for table `KELAYAKAN`
--
ALTER TABLE `KELAYAKAN`
  ADD PRIMARY KEY (`ID_KEL`);

--
-- Indexes for table `LAWATAN`
--
ALTER TABLE `LAWATAN`
  ADD PRIMARY KEY (`ID_LAW`),
  ADD KEY `NEGERI` (`NEGERI`),
  ADD KEY `INDUS` (`INDUS`);

--
-- Indexes for table `NEGERI`
--
ALTER TABLE `NEGERI`
  ADD PRIMARY KEY (`ID_NEGERI`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BENGKEL`
--
ALTER TABLE `BENGKEL`
  MODIFY `ID_BEN` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `CAD_BENGKEL`
--
ALTER TABLE `CAD_BENGKEL`
  MODIFY `ID_BEN` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `CAD_LAWATAN`
--
ALTER TABLE `CAD_LAWATAN`
  MODIFY `ID_LAW` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `HIT_BENGKEL`
--
ALTER TABLE `HIT_BENGKEL`
  MODIFY `ID_BEN` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `HIT_LAWATAN`
--
ALTER TABLE `HIT_LAWATAN`
  MODIFY `ID_LAW` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `LAWATAN`
--
ALTER TABLE `LAWATAN`
  MODIFY `ID_LAW` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `BENGKEL`
--
ALTER TABLE `BENGKEL`
  ADD CONSTRAINT `bengkel_ibfk_1` FOREIGN KEY (`NEGERI`) REFERENCES `NEGERI` (`ID_NEGERI`) ON UPDATE CASCADE,
  ADD CONSTRAINT `bengkel_ibfk_2` FOREIGN KEY (`INDUS`) REFERENCES `INDUS` (`ID_INDUS`) ON UPDATE CASCADE,
  ADD CONSTRAINT `bengkel_ibfk_3` FOREIGN KEY (`KELAYAKAN`) REFERENCES `KELAYAKAN` (`ID_KEL`) ON UPDATE CASCADE;

--
-- Constraints for table `CAD_BENGKEL`
--
ALTER TABLE `CAD_BENGKEL`
  ADD CONSTRAINT `CAD_BENGKEL_ibfk_1` FOREIGN KEY (`INDUS`) REFERENCES `INDUS` (`ID_INDUS`) ON UPDATE CASCADE,
  ADD CONSTRAINT `CAD_BENGKEL_ibfk_2` FOREIGN KEY (`KELAYAKAN`) REFERENCES `KELAYAKAN` (`ID_KEL`) ON UPDATE CASCADE,
  ADD CONSTRAINT `CAD_BENGKEL_ibfk_3` FOREIGN KEY (`NEGERI`) REFERENCES `NEGERI` (`ID_NEGERI`) ON UPDATE CASCADE;

--
-- Constraints for table `CAD_LAWATAN`
--
ALTER TABLE `CAD_LAWATAN`
  ADD CONSTRAINT `CAD_LAWATAN_ibfk_1` FOREIGN KEY (`INDUS`) REFERENCES `INDUS` (`ID_INDUS`) ON UPDATE CASCADE,
  ADD CONSTRAINT `CAD_LAWATAN_ibfk_2` FOREIGN KEY (`NEGERI`) REFERENCES `NEGERI` (`ID_NEGERI`) ON UPDATE CASCADE;

--
-- Constraints for table `HIT_BENGKEL`
--
ALTER TABLE `HIT_BENGKEL`
  ADD CONSTRAINT `HIT_BENGKEL_ibfk_1` FOREIGN KEY (`NEGERI`) REFERENCES `NEGERI` (`ID_NEGERI`) ON UPDATE CASCADE,
  ADD CONSTRAINT `HIT_BENGKEL_ibfk_2` FOREIGN KEY (`INDUS`) REFERENCES `INDUS` (`ID_INDUS`) ON UPDATE CASCADE,
  ADD CONSTRAINT `HIT_BENGKEL_ibfk_3` FOREIGN KEY (`KELAYAKAN`) REFERENCES `KELAYAKAN` (`ID_KEL`) ON UPDATE CASCADE;

--
-- Constraints for table `HIT_LAWATAN`
--
ALTER TABLE `HIT_LAWATAN`
  ADD CONSTRAINT `HIT_LAWATAN_ibfk_1` FOREIGN KEY (`NEGERI`) REFERENCES `NEGERI` (`ID_NEGERI`) ON UPDATE CASCADE,
  ADD CONSTRAINT `HIT_LAWATAN_ibfk_2` FOREIGN KEY (`INDUS`) REFERENCES `INDUS` (`ID_INDUS`) ON UPDATE CASCADE;

--
-- Constraints for table `LAWATAN`
--
ALTER TABLE `LAWATAN`
  ADD CONSTRAINT `lawatan_ibfk_1` FOREIGN KEY (`NEGERI`) REFERENCES `NEGERI` (`ID_NEGERI`) ON UPDATE CASCADE,
  ADD CONSTRAINT `lawatan_ibfk_2` FOREIGN KEY (`INDUS`) REFERENCES `INDUS` (`ID_INDUS`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
