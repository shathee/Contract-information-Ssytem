-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2018 at 08:41 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contract_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bill_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_date` date NOT NULL,
  `net_payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ait` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gross_payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `circles`
--

CREATE TABLE `circles` (
  `id` int(10) UNSIGNED NOT NULL,
  `zone_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `district_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `circles`
--

INSERT INTO `circles` (`id`, `zone_id`, `name`, `address`, `district_id`, `phone`, `code`, `created_at`, `updated_at`) VALUES
(1, '7', 'Cox\'s Bazar WD Circle', 'COX\'S BAZAR', 'Cox\'s Bazar', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '2', 'Patuakhali WD Circle', '', 'Patuakhali', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '2', 'Bhola O&M Circle', 'BHOLA WAPDA COLONY, BHOLA', 'Bhola', '49161595', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '2', 'Barisal O&M Circle', 'SAGARDI BWDB COLONY, BARISAL', 'Barisal', '43172223', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '3', 'Jessore O&M Circle', 'NURNAGOR, BAYRA, KHULNA', 'Khulna', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '3', 'Khulna O&M Circle', 'NURNAGOR, BAYRA, KHULNA', 'Khulna', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '4', 'Thakurgaon O&M Circle', ' KALIBARI ROAD, THAKURGAON', 'Thakurgaon', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '4', 'Rangpur O&M Circle-2', 'ALAMNAGAR, RANGPUR', 'Rangpur', '52162720', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '4', 'Rangpur O&M Circle-1', 'ALAMNAGAR, RANGPUR', 'Rangpur', '52163565', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '5', 'Kushtia O&M Circle', 'THANAPARA, KUSHTIA', 'Kushtia', '7161908', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '5', 'Faridpur O&M Circle', 'GOALCHAMAT, FARIDPUR', 'Faridpur', '63162777', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '8', 'Pabna O&M Circle', 'CHAWK CHATIANI, PABNA', 'Pabna', '73165636', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '8', 'Bogra O&M Circle', 'ATPARA, BOGRA', 'Bogra', '5178643', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '9', 'Mymensingh O&M Circle', ' DOLADIA, MYMENSINGH', 'Mymensingh', '9164327', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '6', 'Feni O&M Circle', 'MAHIPAL, FENI', 'Feni', '33173542', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '6', 'Chandpur O&M Circle', 'SOLOGHAR BWDB COLONY, CHANDPUR', 'Chandpur', '84163433', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '6', 'Comilla O&M Circle', 'JAIL ROAD, COMILLA', 'Comilla', '8163412', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, '1', 'Moulvibazar O&M Circle', 'BWDB, MOULVIBAZAR', 'Moulvibazar', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '1', 'Sylhet O&M Circle,BWDB,Sylhet.', 'SHAHI EIDGHA ,SYLHET', 'Sylhet', '29551298', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '7', 'Chittagong O& M Circle', 'BAHADDERHAT, CHITTAGONG', 'Chittagong', '31657373', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '8', 'Rajshahi O& M Circle, Rajshahi', 'SOPURA, RAJSHAHI', 'Rajshahi', '721761844', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '9', 'Dhaka O&M Circle, BWDB', 'BWDB, RUPALI SADAN, 156-157, MOTIJHEEL, DHAKA', 'Dhaka', '27126130', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `commencements`
--

CREATE TABLE `commencements` (
  `id` int(10) UNSIGNED NOT NULL,
  `contract_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commencement_memo_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commencement_memo_date` date DEFAULT NULL,
  `contract_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_commencement_date` date DEFAULT NULL,
  `insurance_policy_date` date DEFAULT NULL,
  `programme_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` int(10) UNSIGNED NOT NULL,
  `office_memo` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `memo_date` date DEFAULT NULL,
  `project_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peoffice_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `circle_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zone_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others` text COLLATE utf8mb4_unicode_ci,
  `name_of_works` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `egp_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contractors_legal_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contractors_contact_details` text COLLATE utf8mb4_unicode_ci,
  `contractors_trade_license_details` text COLLATE utf8mb4_unicode_ci,
  `noa_reference` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noa_date` date DEFAULT NULL,
  `contract_date` date DEFAULT NULL,
  `original_contract_price` double(8,2) DEFAULT NULL,
  `executed_contract_price` double(8,2) DEFAULT NULL,
  `contract_date_of_commencement` date DEFAULT NULL,
  `contract_date_of_completion` date DEFAULT NULL,
  `actual_date_of_commencement` date DEFAULT NULL,
  `actual_contract_date_of_completion` date DEFAULT NULL,
  `days_contract_period_extended` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N/A',
  `amount_bonus_early_completion` double(8,2) DEFAULT NULL,
  `amount_ld_delayed_completion` double(8,2) DEFAULT NULL,
  `physical_progress` double(8,2) DEFAULT NULL,
  `financial_progress` double(8,2) DEFAULT NULL,
  `special_note` text COLLATE utf8mb4_unicode_ci,
  `commencement_id` text COLLATE utf8mb4_unicode_ci,
  `original_contract_completion_time` int(11) DEFAULT NULL,
  `certificate_issued` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `certificate_file_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `division_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `name`, `bn_name`, `lat`, `lon`, `website`) VALUES
(1, 3, 'Dhaka', 'ঢাকা', '23.7115253', '90.4111451', 'www.dhaka.gov.bd'),
(2, 3, 'Faridpur', 'ফরিদপুর', '23.6070822', '89.8429406', 'www.faridpur.gov.bd'),
(3, 3, 'Gazipur', 'গাজীপুর', '24.0022858', '90.4264283', 'www.gazipur.gov.bd'),
(4, 3, 'Gopalganj', 'গোপালগঞ্জ', '23.0050857', '89.8266059', 'www.gopalganj.gov.bd'),
(5, 3, 'Jamalpur', 'জামালপুর', '24.937533', '89.937775', 'www.jamalpur.gov.bd'),
(6, 3, 'Kishoreganj', 'কিশোরগঞ্জ', '24.444937', '90.776575', 'www.kishoreganj.gov.bd'),
(7, 3, 'Madaripur', 'মাদারীপুর', '23.164102', '90.1896805', 'www.madaripur.gov.bd'),
(8, 3, 'Manikganj', 'মানিকগঞ্জ', '0', '0', 'www.manikganj.gov.bd'),
(9, 3, 'Munshiganj', 'মুন্সিগঞ্জ', '0', '0', 'www.munshiganj.gov.bd'),
(10, 3, 'Mymensingh', 'ময়মনসিং', '0', '0', 'www.mymensingh.gov.bd'),
(11, 3, 'Narayanganj', 'নারায়াণগঞ্জ', '23.63366', '90.496482', 'www.narayanganj.gov.bd'),
(12, 3, 'Narsingdi', 'নরসিংদী', '23.932233', '90.71541', 'www.narsingdi.gov.bd'),
(13, 3, 'Netrokona', 'নেত্রকোনা', '24.870955', '90.727887', 'www.netrokona.gov.bd'),
(14, 3, 'Rajbari', 'রাজবাড়ি', '23.7574305', '89.6444665', 'www.rajbari.gov.bd'),
(15, 3, 'Shariatpur', 'শরীয়তপুর', '0', '0', 'www.shariatpur.gov.bd'),
(16, 3, 'Sherpur', 'শেরপুর', '25.0204933', '90.0152966', 'www.sherpur.gov.bd'),
(17, 3, 'Tangail', 'টাঙ্গাইল', '0', '0', 'www.tangail.gov.bd'),
(18, 5, 'Bogra', 'বগুড়া', '24.8465228', '89.377755', 'www.bogra.gov.bd'),
(19, 5, 'Joypurhat', 'জয়পুরহাট', '0', '0', 'www.joypurhat.gov.bd'),
(20, 5, 'Naogaon', 'নওগাঁ', '0', '0', 'www.naogaon.gov.bd'),
(21, 5, 'Natore', 'নাটোর', '24.420556', '89.000282', 'www.natore.gov.bd'),
(22, 5, 'Nawabganj', 'নবাবগঞ্জ', '24.5965034', '88.2775122', 'www.chapainawabganj.gov.bd'),
(23, 5, 'Pabna', 'পাবনা', '23.998524', '89.233645', 'www.pabna.gov.bd'),
(24, 5, 'Rajshahi', 'রাজশাহী', '0', '0', 'www.rajshahi.gov.bd'),
(25, 5, 'Sirajgonj', 'সিরাজগঞ্জ', '24.4533978', '89.7006815', 'www.sirajganj.gov.bd'),
(26, 6, 'Dinajpur', 'দিনাজপুর', '25.6217061', '88.6354504', 'www.dinajpur.gov.bd'),
(27, 6, 'Gaibandha', 'গাইবান্ধা', '25.328751', '89.528088', 'www.gaibandha.gov.bd'),
(28, 6, 'Kurigram', 'কুড়িগ্রাম', '25.805445', '89.636174', 'www.kurigram.gov.bd'),
(29, 6, 'Lalmonirhat', 'লালমনিরহাট', '0', '0', 'www.lalmonirhat.gov.bd'),
(30, 6, 'Nilphamari', 'নীলফামারী', '25.931794', '88.856006', 'www.nilphamari.gov.bd'),
(31, 6, 'Panchagarh', 'পঞ্চগড়', '26.3411', '88.5541606', 'www.panchagarh.gov.bd'),
(32, 6, 'Rangpur', 'রংপুর', '25.7558096', '89.244462', 'www.rangpur.gov.bd'),
(33, 6, 'Thakurgaon', 'ঠাকুরগাঁও', '26.0336945', '88.4616834', 'www.thakurgaon.gov.bd'),
(34, 1, 'Barguna', 'বরগুনা', '0', '0', 'www.barguna.gov.bd'),
(35, 1, 'Barisal', 'বরিশাল', '0', '0', 'www.barisal.gov.bd'),
(36, 1, 'Bhola', 'ভোলা', '22.685923', '90.648179', 'www.bhola.gov.bd'),
(37, 1, 'Jhalokati', 'ঝালকাঠি', '0', '0', 'www.jhalakathi.gov.bd'),
(38, 1, 'Patuakhali', 'পটুয়াখালী', '22.3596316', '90.3298712', 'www.patuakhali.gov.bd'),
(39, 1, 'Pirojpur', 'পিরোজপুর', '0', '0', 'www.pirojpur.gov.bd'),
(40, 2, 'Bandarban', 'বান্দরবান', '22.1953275', '92.2183773', 'www.bandarban.gov.bd'),
(41, 2, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', '23.9570904', '91.1119286', 'www.brahmanbaria.gov.bd'),
(42, 2, 'Chandpur', 'চাঁদপুর', '23.2332585', '90.6712912', 'www.chandpur.gov.bd'),
(43, 2, 'Chittagong', 'চট্টগ্রাম', '22.335109', '91.834073', 'www.chittagong.gov.bd'),
(44, 2, 'Comilla', 'কুমিল্লা', '23.4682747', '91.1788135', 'www.comilla.gov.bd'),
(45, 2, 'Cox\'s Bazar', 'কক্স বাজার', '0', '0', 'www.coxsbazar.gov.bd'),
(46, 2, 'Feni', 'ফেনী', '23.023231', '91.3840844', 'www.feni.gov.bd'),
(47, 2, 'Khagrachari', 'খাগড়াছড়ি', '23.119285', '91.984663', 'www.khagrachhari.gov.bd'),
(48, 2, 'Lakshmipur', 'লক্ষ্মীপুর', '22.942477', '90.841184', 'www.lakshmipur.gov.bd'),
(49, 2, 'Noakhali', 'নোয়াখালী', '22.869563', '91.099398', 'www.noakhali.gov.bd'),
(50, 2, 'Rangamati', 'রাঙ্গামাটি', '0', '0', 'www.rangamati.gov.bd'),
(51, 7, 'Habiganj', 'হবিগঞ্জ', '24.374945', '91.41553', 'www.habiganj.gov.bd'),
(52, 7, 'Maulvibazar', 'মৌলভীবাজার', '24.482934', '91.777417', 'www.moulvibazar.gov.bd'),
(53, 7, 'Sunamganj', 'সুনামগঞ্জ', '25.0658042', '91.3950115', 'www.sunamganj.gov.bd'),
(54, 7, 'Sylhet', 'সিলেট', '24.8897956', '91.8697894', 'www.sylhet.gov.bd'),
(55, 4, 'Bagerhat', 'বাগেরহাট', '22.651568', '89.785938', 'www.bagerhat.gov.bd'),
(56, 4, 'Chuadanga', 'চুয়াডাঙ্গা', '23.6401961', '88.841841', 'www.chuadanga.gov.bd'),
(57, 4, 'Jessore', 'যশোর', '23.16643', '89.2081126', 'www.jessore.gov.bd'),
(58, 4, 'Jhenaidah', 'ঝিনাইদহ', '23.5448176', '89.1539213', 'www.jhenaidah.gov.bd'),
(59, 4, 'Khulna', 'খুলনা', '22.815774', '89.568679', 'www.khulna.gov.bd'),
(60, 4, 'Kushtia', 'কুষ্টিয়া', '23.901258', '89.120482', 'www.kushtia.gov.bd'),
(61, 4, 'Magura', 'মাগুরা', '23.487337', '89.419956', 'www.magura.gov.bd'),
(62, 4, 'Meherpur', 'মেহেরপুর', '23.762213', '88.631821', 'www.meherpur.gov.bd'),
(63, 4, 'Narail', 'নড়াইল', '23.172534', '89.512672', 'www.narail.gov.bd'),
(64, 4, 'Satkhira', 'সাতক্ষীরা', '0', '0', 'www.satkhira.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `bn_name`) VALUES
(1, 'Barisal', 'বরিশাল'),
(2, 'Chittagong', 'চট্টগ্রাম'),
(3, 'Dhaka', 'ঢাকা'),
(4, 'Khulna', 'খুলনা'),
(5, 'Rajshahi', 'রাজশাহী'),
(6, 'Rangpur', 'রংপুর'),
(7, 'Sylhet', 'সিলেট');

-- --------------------------------------------------------

--
-- Table structure for table `gusers`
--

CREATE TABLE `gusers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peoffice_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gusers`
--

INSERT INTO `gusers` (`id`, `user_id`, `name`, `peoffice_id`, `designation`, `mobile`, `created_at`, `updated_at`) VALUES
(1, 2, 'A.B.M Khan Mozahedy', '41', 'xen', NULL, '0000-00-00 00:00:00', '2018-09-04 04:07:43'),
(2, 3, 'A.K.M. Shamsuzzoha', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 4, 'A.M. Aminul Haque', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 5, 'Ahammad Ullah', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 6, 'Apurbo Kumar Bhowmick', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 7, 'Arifuzzaman Khan', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 8, 'Arifuzzaman Khan', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 9, 'B. M. Abdul Momin', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 10, 'Bejoy Indra Sanker Chakraborty', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 11, 'Bidyut Kumar Saha', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 12, 'Dewan Ainul Haque', '77', 'xen', NULL, '0000-00-00 00:00:00', '2018-09-04 04:12:57'),
(12, 13, 'Dr. Zia Uddin Baig, PEng', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 14, 'Dr.Anwar Zahid', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 15, 'Hasan Mustafa Chowdhury', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 16, 'Hasan Mahmud', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 17, 'Hasan Mahmud', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 18, 'K M Zahurul Haque', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 19, 'K. M. Zahurul Haque', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 20, 'K.M. Julfikar Tareq', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 21, 'Kazi Tofail Hossain', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 22, 'Khushi Mohan Sarker', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 23, 'Krishnakamal Chandro Sarker', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 24, 'Krishnakamal Chandro Sarker', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 25, 'Maharaj Mondal PE', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 26, 'Mahbube Moula Md.Mehedy Hasan', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 27, 'Mahfuz Ahmed', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 28, 'Mahfuzul Haque', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 29, 'Mahmud Ilias', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 30, 'Mashiur Rahman', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 31, 'Md Abu Baker Siddique Bhuayan', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 32, 'Md Mujibur Rahman', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 33, 'Md. Abdul Awwal Miah', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 34, 'Md. Abdul Hamid', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 35, 'Md. Abdul Latif', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 36, 'Md. Abdul Latif', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 37, 'Md. Abdullah Al Mamun', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 38, 'Md. Abdus Salam Khan PE', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 39, 'Md. Abdus salam Khan PE', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 40, 'Md. Abu Rayhan', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 41, 'Md. Abu Rayhan (Addl. Ch.)', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 42, 'Md. Abu Taher', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 43, 'Md. Abu Taleb', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 44, 'Md. Abul Kalam Azad', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 45, 'Md. Abul Khaer', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 46, 'Md. Amirul Hossain', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 47, 'Md. Anisul Islam', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 48, 'MD. ANISUR RAHMAN', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 49, 'Md. Ariful Islam', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 50, 'MD. ASADUZZAMAN', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 51, 'Md. Babul Akhter', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 52, 'Md. Faizur Rahman', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 53, 'Md. Fakhrul Abedin', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 54, 'Md. Habibur Rahman', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 55, 'Md. Hosain Uddin Siddique', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 56, 'Md. Hosain Uddin Siddique', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 57, 'Md. Kaisar Alam', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 58, 'Md. Kamalur Rahman Talukdar', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 59, 'Md. Kohinoor Alam', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 60, 'Md. Mahbubur Rahman', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 61, 'Md. Mahfujur Rahman', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 62, 'Md. Mamunuzzaman', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 63, 'Md. Mehedi Hasan', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 64, 'Md. Mizanur Rahman', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 65, 'Md. Mizanur Rahman', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 66, 'Md. Monirul Islam', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 67, 'Md. Mukhlesur Rahman', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 68, 'Md. Musa', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 69, 'Md. Rabiul Islam', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 70, 'Md. Rafiqul Alam', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 71, 'Md. Rafiqul Alam Chowdhury', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 72, 'Md. Rafiqul Islam Choubey', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 73, 'Md. Rakibul Hasan', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 74, 'Md. Rashadul Kaiyum Bhuiyan', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 75, 'Md. Rois Uddin', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 76, 'Md. Rois Uddin', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 77, 'Md. Rois Uddin', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 78, 'Md. Ruhul Amin', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 79, 'MD. Sabibur Rahman', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 80, 'Md. Safiqul Islam Sheikh', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 81, 'Md. Sarwar Jahan Sujan (Addl Ch.)', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 82, 'Md. Shafiqul Islam', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 83, 'Md. Shafiuddin', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 84, 'Md. Shafiul Huda Khan', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 85, 'Md. Shahanaoyz Talukdar', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 86, 'Md. Shaheenuzzaman', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 87, 'Md. Shaheenuzzaman', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 88, 'Md. Shahjahan Siraj', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 89, 'Md. Shamsul Haque', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 90, 'Md. Shariful Islam', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 91, 'Md. Shofekul Islam', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 92, 'Md. Sirajul Islam', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 93, 'Md. Sultan Mahmud', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 94, 'Md. Tawhidul Islam', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 95, 'Md. Zahadul Islam (A.C)', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 96, 'Md. Zahurul Islam', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 97, 'Md. Zahurul Islam (Addl. Ch.)', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 98, 'Md.Ahidul Islam', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 99, 'Md.Mijanur Rahman', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 100, 'Md.Mijanur Rahman', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 101, 'Md.Saiful Hossain', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 102, 'Md.Shafiqul Islam', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 103, 'Milan Biswas', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 104, 'Mohammad Abu Sayed', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 105, 'Mohammad Aktaruzzaman(Addl. Ch.)', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 106, 'Mohammad Faysal Chowdhury', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 107, 'Mohammad Nasir Uddin', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 108, 'Mohammed Balayet Hossain', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 109, 'Muhammad Hasanuszaman', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 110, 'Muhammad Showkat Ali', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 111, 'Muhammad Showkat Ali', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 112, 'Naba Kumar Chowdhury', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 113, 'Partha Pratim Saha', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 114, 'Pijush Krishna Kundu', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 115, 'Probir Kumar Goshwami', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 116, 'Prokash Krishna Sarkar', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 117, 'Ranendra Sanker Chakraborty', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 118, 'S.M.Ataur Rahman', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 119, 'Saikat Biswas(Additional Charge)', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 120, 'Sayeed Ahammad', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 121, 'Shailan Chandra Paul', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 122, 'Sudhangshu Kumar Sarker', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 123, 'Sudhangshu Kumar Sarker', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 124, 'Sujoy Kumar Saha (addl. ch.)', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 125, 'Sultan Ahammed', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 126, 'Swapan Kumar Barua', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 127, 'Syed Shahidul Alam', '', 'xen', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_01_152804_create_divisions_table', 1),
(4, '2018_01_01_162132_create_districtss_table', 1),
(5, '2018_01_02_083230_create_gusers_table', 1),
(6, '2018_01_02_190709_create_zones_table', 1),
(7, '2018_01_02_191028_create_circles_table', 1),
(8, '2018_01_02_194639_create_peoffices_table', 1),
(9, '2018_01_04_205115_create_projects_table', 1),
(10, '2018_01_23_192205_create_commencements_table', 1),
(11, '2018_01_24_184148_create_contracts_table', 1),
(12, '2018_02_12_093242_create_bills_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peoffices`
--

CREATE TABLE `peoffices` (
  `id` int(10) UNSIGNED NOT NULL,
  `zone_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `circle_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `district_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peoffices`
--

INSERT INTO `peoffices` (`id`, `zone_id`, `circle_id`, `name`, `address`, `district_id`, `postcode`, `phone`, `code`, `created_at`, `updated_at`) VALUES
(1, '0', '0', 'Office of the Chief Monitoring', '', '1', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '1', '18', 'Habiganj O&M Division', '', '51', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '1', '18', 'Moulvibazar O&M Division', '', '52', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '1', '18', 'Moulvibazar Mech. O&M Division', '', '52', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '1', '19', 'Sunamganj O&M Division-2', '', '53', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '1', '19', 'Sunamganj O&M Division', '', '53', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '1', '19', 'Sylhet O&M Division, BWDB', '', '54', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '2', '2', 'Barguna O&M Division', '', '34', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '2', '2', 'Patuakhali O&M Division', '', '38', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '2', '2', 'Patuakhali WD Division', '', '38', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '2', '3', 'Bhola O&M Division-1', 'COLLEGE ROAD, BHOLA', '36', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '2', '3', 'Bhola O&M Division-2', 'CHARFESSON BHOLA', '36', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '2', '4', 'Barisal Mech. O&M Division', 'BIP COLONY, CHANDMARI, BWDB, BARISAL', '35', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '2', '4', 'Barisal O&M Division', 'DARATANA, BAGERHAT,', '35', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '2', '4', 'Jhalokathi WD Division', '', '37', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '2', '4', 'Perojpur O&M Division', '', '39', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '3', '5', 'Jessore O&M Division', '', '57', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, '3', '5', 'Khulna O&M Division-2', '', '59', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '3', '5', 'Narail O&M Division', '', '63', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '3', '6', 'Bagerhat O&M Division', 'DARATANA, BAGERHAT,', '55', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '3', '6', 'Khulna O&M Division-1', '', '59', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '3', '6', 'Satkhira O&M Division-1', '', '64', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '3', '6', 'Satkhira O&M Division-2', '', '64', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '4', '7', 'Dinajpur O&M Division', '', '26', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '4', '7', 'Panchgarh O&M Division', '', '31', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '4', '7', 'Thakurgaon Mech. O&M Division', '', '33', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '4', '7', 'Thakurgaon O&M Division', '', '33', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, '4', '8', 'Dalia O&M Division', '', '30', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '4', '8', 'Nilphamari O&M Division', '', '30', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '4', '8', 'Syedpur O&M Division', '', '30', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '4', '8', 'Teesta Mechanical Division', '', '30', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, '4', '9', 'Gaibandha O&M Division', '', '27', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, '4', '9', 'Kurigram O&M Division', '', '28', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '4', '9', 'Lalmonirhat O&M Division', '', '29', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, '4', '9', 'Rangpur O&M Division', '', '32', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, '5', '10', 'Chuadanga O&M Division', '', '56', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, '5', '10', 'Jhenaidah O&M Division', '', '58', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, '5', '10', 'Amla WD Division, Kushtia', '', '60', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, '5', '10', 'Bheramara O&M (Pump House) Division', '', '60', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, '5', '10', 'Kushtia O&M Division', '', '60', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, '5', '10', 'Magura O&M Division', '', '61', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, '5', '11', 'Faridpur O&M Division', '', '2', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, '5', '11', 'Gopalganj O&M Division', '', '4', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, '5', '11', 'Madaripur O&M Division', '', '7', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, '5', '11', 'Rajbari O&M Division', '', '14', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, '5', '11', 'Shariatpur O&M Division', '', '15', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, '6', '15', 'Feni O&M Division', '', '46', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, '6', '15', 'Laksmipur O&M Division', '', '48', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, '6', '15', 'Noakhali O&M Division', '', '49', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, '6', '16', 'Chandpur Mech. O&M Division', '', '42', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, '6', '16', 'Meghna-Dhonagoda O&M Division', '', '42', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, '6', '16', 'Chandpur O&M Division', '', '42', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, '6', '17', 'Brahmanbaria WD Division', '', '41', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, '6', '17', 'Comilla O&M Division', '', '44', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, '7', '1', 'Bandarban O&M Division', '', '40', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, '7', '1', 'Cox\'s Bazar O&M Division', '', '45', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, '7', '20', 'Chittagong O&M Division -2', '', '43', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, '7', '20', 'Chittagong O&M Division-1, BWDB', '', '43', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, '7', '20', 'Rangamati O&M Division', '', '50', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, '8', '12', 'Bera O&M Division', '', '23', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, '8', '12', 'Pabna Mech. O&M Division', '', '23', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, '8', '12', 'Pabna O&M Division', '', '23', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, '8', '13', 'Bogra O&M Division', '', '18', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, '8', '13', 'Joypurhat WD Division', '', '19', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, '8', '13', 'Sirajganj O&M Division', '', '25', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, '8', '21', 'Nawabganj O&M Division', '', '22', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, '8', '21', 'Naogaon O&M Division', '', '20', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, '8', '21', 'Natore O&M Division', '', '21', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, '8', '21', 'Rajshahi O&M Division', '', '24', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, '9', '14', 'Jamalpur O&M Division', '', '5', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, '9', '14', 'Kishoreganj WD Division', '', '6', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, '9', '14', 'Mymensingh O&M Division', '', '10', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, '9', '14', 'Netrokona O&M Division', '', '13', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, '9', '14', 'Tangail WD Division', '', '17', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, '9', '14', 'Tangail O&M Division', '', '17', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, '9', '22', 'Dhaka O&M Division-1', '', '1', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, '9', '22', 'Dhaka O&M Division-2', '', '1', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, '9', '22', 'Narsingdi O&M Division', '', '12', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, '9', '22', 'Manikganj WD Division', '', '8', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, '9', '22', 'Dhaka Mech. (Pump House) Division', '', '11', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `fund` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peoffice_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PE',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Abdullahil Baki Md. Ruhunnabi1', 'ruhunnabi@gmail.com', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', 'EzsGcB5Y7XEYiCi2k02usORpeXoI1jNUKgx6vMN4NTQZyTyCfEF2nknDuA3q', 'ADMIN', 'active', '2018-01-01 04:47:57', '2018-01-01 08:13:20'),
(2, 'A.B.M Khan Mozahedy', 'pe.magura@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'A.K.M. Shamsuzzoha', 'pe.teesta.mech@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'A.M. Aminul Haque', 'pe.planning@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '9vfdgkr6HwNe5njqBBNqL0EJmcnTwrcXetaqqRYLmTGErnnKJRkbl9tM1Hrb', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Ahammad Ullah', 'pe.pabna.mech@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Apurbo Kumar Bhowmick', 'pe.satkhira2@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Arifuzzaman Khan', 'pe.kushtia@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Arifuzzaman Khan', 'pe.amla@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'B. M. Abdul Momin', 'pe.satkhira1@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Bejoy Indra Sanker Chakraborty', 'pe.narsingdi@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Bidyut Kumar Saha', 'pe.ctg1@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Dewan Ainul Haque', 'pe.dhaka2@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', 'e9mF9tRqWSCuWeZjAfnd8sqbGiMnFZvKcnb8KZFiTbjz1IREnJdWdYpJh9Oq', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Dr. Zia Uddin Baig, PEng', 'pe.brbpdp@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Dr.Anwar Zahid', 'pe.gw2.hydrology@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Hasan Mustafa Chowdhury', 'pe.design3@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Hasan Mahmud', 'pe.bogra@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Hasan Mahmud', 'pe.joypurhat@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'K M Zahurul Haque', 'pe.nmd.hydrology@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'K. M. Zahurul Haque', 'pe.pabna@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'K.M. Julfikar Tareq', 'pe.ctg2@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Kazi Tofail Hossain', 'pe.monitoring@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Khushi Mohan Sarker', 'pe.sunamganj2@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Krishnakamal Chandro Sarker', 'pe.saidpur@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Krishnakamal Chandro Sarker', 'pe.nilphamari@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Maharaj Mondal PE', 'pe.rp2.dredger@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Mahbube Moula Md.Mehedy Hasan', 'pe.manikganj@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Mahfuz Ahmed', 'pe.cwm@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Mahfuzul Haque', 'pe.security@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Mahmud Ilias', 'pe.khulna2@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Mashiur Rahman', 'pe.barguna@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Md Abu Baker Siddique Bhuayan', 'pe.sunamganj@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Md Mujibur Rahman', 'pe.state@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Md. Abdul Awwal Miah', 'pe.dhaka1@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Md. Abdul Hamid', 'pe.bera@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Md. Abdul Latif', 'pe.comilla@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Md. Abdul Latif', 'pe.semd.hydrology@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Md. Abdullah Al Mamun', 'pe.lalmonirhat@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Md. Abdus Salam Khan PE', 'pe.khulna.me@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Md. Abdus salam Khan PE', 'pe.khulna.dredger@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Md. Abu Rayhan', 'pe.chandpur@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Md. Abu Rayhan (Addl. Ch.)', 'pe.meghna@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Md. Abu Taher', 'pe.mymensingh.md@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Md. Abu Taleb', 'pe.dhaka.mech@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Md. Abul Kalam Azad', 'pe.cni.hydrology@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Md. Abul Khaer', 'pe.patuakhali.wd@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Md. Amirul Hossain', 'pe.bluegold@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Md. Anisul Islam', 'pe.swaiwrpmp@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'MD. ANISUR RAHMAN', 'pe.mbazar.mech@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Md. Ariful Islam', 'pe.sirajganj@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'MD. ASADUZZAMAN', 'pe.staff@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Md. Babul Akhter', 'pe.bhola1@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Md. Faizur Rahman', 'pe.dinajpur@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Md. Fakhrul Abedin', 'pe.hflmip@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Md. Habibur Rahman', 'pe.ceip1@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Md. Hosain Uddin Siddique', 'pe.chittagong.dredger@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Md. Hosain Uddin Siddique', 'pe.chittagong.me@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Md. Kaisar Alam', 'pe.bhola2@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Md. Kamalur Rahman Talukdar', 'pe.grrp@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Md. Kohinoor Alam', 'pe.feni@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Md. Mahbubur Rahman', 'pe.gaibandha@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Md. Mahfujur Rahman', 'pe.tangail@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Md. Mamunuzzaman', 'pe.cwd.me@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Md. Mehedi Hasan', 'pe.rangpur@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Md. Mizanur Rahman', 'pe.dod.me@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Md. Mizanur Rahman', 'pe.bheramara.me@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Md. Monirul Islam', 'pe.cpc@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Md. Mukhlesur Rahman', 'pe.rajshahi@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Md. Musa', 'pe.laxmipur@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Md. Rabiul Islam', 'pe.thakurgaon@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Md. Rafiqul Alam', 'pe.imip@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Md. Rafiqul Alam Chowdhury', 'pe.dalia@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'Md. Rafiqul Islam Choubey', 'pe.frermip@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Md. Rakibul Hasan', 'pe.bandarban@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Md. Rashadul Kaiyum Bhuiyan', 'pe.swmd.hydrology@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'Md. Rois Uddin', 'pe.kushtia.md@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'Md. Rois Uddin', 'pe.kushtia.morpho@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Md. Rois Uddin', 'pe.kushtia.morphology@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'Md. Ruhul Amin', 'pe.chand.mech@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'MD. Sabibur Rahman', 'pe.coxs@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Md. Safiqul Islam Sheikh', 'pe.shariatpur@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Md. Sarwar Jahan Sujan (Addl Ch.)', 'pe.jhenaidah@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Md. Shafiqul Islam', 'pe.bheramara.ph@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Md. Shafiuddin', 'pe.gopalganj@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Md. Shafiul Huda Khan', 'pe.mc.hydrology@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Md. Shahanaoyz Talukdar', 'pe.narail@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Md. Shaheenuzzaman', 'pe.bbaria.wd@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Md. Shaheenuzzaman', 'pe.bre@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'Md. Shahjahan Siraj', 'pe.tangail.wd@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'Md. Shamsul Haque', 'pe.barisal.mech@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'Md. Shariful Islam', 'pe.khulna1@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'Md. Shofekul Islam', 'pe.kurigram@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'Md. Sirajul Islam', 'pe.sylhet@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'Md. Sultan Mahmud', 'pe.faridpur@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'Md. Tawhidul Islam', 'pe.habiganj@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'Md. Zahadul Islam (A.C)', 'pe.chuadanga@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'Md. Zahurul Islam', 'pe.bagerhatom@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'Md. Zahurul Islam (Addl. Ch.)', 'pe.mymensingh@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'Md.Ahidul Islam', 'pe.stores.me@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'Md.Mijanur Rahman', 'pe.thakur.mech@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'Md.Mijanur Rahman', 'pe.panchagarh@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'Md.Saiful Hossain', 'pe.shisews@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'Md.Shafiqul Islam', 'pe.kishoreganj.wd@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'Milan Biswas', 'pe.gw1.hydrology@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'Mohammad Abu Sayed', 'pe.barisal@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'Mohammad Aktaruzzaman(Addl. Ch.)', 'pe.netrokona@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'Mohammad Faysal Chowdhury', 'pe.nemd.hydrology@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'Mohammad Nasir Uddin', 'pe.noakhali@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'Mohammed Balayet Hossain', 'pe.bogra.me@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'Muhammad Hasanuszaman', 'pe.patuakhali@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'Muhammad Showkat Ali', 'pe.narayanganj.dredger@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'Muhammad Showkat Ali', 'pe.bheramara.dredger@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'Naba Kumar Chowdhury', 'pe.jamalpur@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'Partha Pratim Saha', 'pe.madaripur@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'Pijush Krishna Kundu', 'pe.spmo.swaiwrpmp2@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'Probir Kumar Goshwami', 'pe.jessore@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'Prokash Krishna Sarkar', 'pe.rajbari@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'Ranendra Sanker Chakraborty', 'pe.moulvibazar@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'S.M.Ataur Rahman', 'pe.jhalokathi.wd@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'Saikat Biswas(Additional Charge)', 'pe.rp1.dredger@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'Sayeed Ahammad', 'pe.perojpur@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'Shailan Chandra Paul', 'pe.gumti@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'Sudhangshu Kumar Sarker', 'pe.naogaon@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'Sudhangshu Kumar Sarker', 'pe.natore@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 'Sujoy Kumar Saha (addl. ch.)', 'pe.manikganj.dredger@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 'Sultan Ahammed', 'pe.dce.mbazar@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 'Swapan Kumar Barua', 'pe.rangamati@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 'Syed Shahidul Alam', 'pe.nawabganj@egp.bwdb.gov.bd', '$2y$10$Rb4hgA99860SrA6STOH0Uu/btj56qU/qjO/42vLYbu3kGgoGx5W1e', '', 'PE', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `district_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `name`, `address`, `district_id`, `phone`, `code`, `created_at`, `updated_at`) VALUES
(1, 'North-Eastern Zone, BWDB, Sylhet', 'Shahi Eid Gah Sylhet, 3100', '54', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Southern Zone, BWDB, Barisal', 'CHANDMARI, BARISAL', '35', '43172266', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'South-Western Zone, BWDB, Khulna', 'NURNAGOR, BAYRA, KHULNA', '59', '41760461', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Northern Zone, BWDB, Rangpur', 'ALAMNAGAR, RANGPUR', '32', '52163554', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Mid-Western Zone, BWDB, Faridpur', 'PANI BHABAN, GOALCHAMAT, FARIDPUR', '2', '63162735', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Eastern Zone, BWDB, Comilla.', 'SHAKTALA, COMILLA', '44', '8163120', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'South Eastern Zone, BWDB, Chittagong', '1201/1311 ADMINISTRATION BLOCK A, CHANDGAON, CHITTAGONG', '43', '31671308', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'North Western Zone, BWDB, Rajshahi', 'SOPURA, RAJSHAHI', '24', '721761303', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Central Zone, BWDB, Dhaka', 'ELITE HOUSE, 54, MOTIJHEEL C/A, DHAKA', '1', '29560402', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `circles`
--
ALTER TABLE `circles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commencements`
--
ALTER TABLE `commencements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gusers`
--
ALTER TABLE `gusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `peoffices`
--
ALTER TABLE `peoffices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `circles`
--
ALTER TABLE `circles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `commencements`
--
ALTER TABLE `commencements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gusers`
--
ALTER TABLE `gusers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `peoffices`
--
ALTER TABLE `peoffices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
