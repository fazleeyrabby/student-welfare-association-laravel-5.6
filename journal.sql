-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2019 at 09:16 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `journals`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(10) UNSIGNED NOT NULL,
  `about_heading` varchar(200) NOT NULL,
  `about_description` longtext NOT NULL,
  `about_img` varchar(191) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_heading`, `about_description`, `about_img`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Journal Mission', '<p><span style=\"color: rgb(51, 51, 51); font-family: Raleway, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis cum error explicabo distinctio in consequatur unde provident doloribus iusto molestias vel modi, corporis minus placeat beatae itaque cul</span><br></p>', '125956513df4f035e9e08d1805a86fe60787fe.jpg', 2, '2019-01-07 07:06:04', '2019-01-19 06:59:56'),
(2, 'a r nm', '<p>jfjffztdfygvkjldfhdhdfftufufuftufut</p>', '130050checkout-icon-checkout-website-button-on-white-background-HYCGHN.jpg', 2, '2019-01-19 07:00:18', '2019-01-19 07:02:07'),
(3, 'About Our Journal Mission', '<p>agga</p>', '1547881361.jpg', 2, '2019-01-19 07:02:41', '2019-01-24 21:45:51'),
(5, 'About Our Journal Mission', '<p style=\"margin-top: 1em; margin-bottom: 1em; color: rgb(17, 17, 17); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11.2px; background-color: rgb(251, 251, 243);\">Welcome to the Stamford University Journal the goal of this journal system is to increase the visibility to the participating journals, use and impact of the university\'s research publications by offering them to use through the university\'s own online journal system. The journal system consists of fulltext materials produced in the Stamford University, covering the full range of academic journals of the University.</p><p style=\"margin-top: 1em; margin-bottom: 1em; color: rgb(17, 17, 17); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11.2px; background-color: rgb(251, 251, 243);\">Stamford University Journals (SUJ) is a service to provide access to Stamford University published journals, and increase worldwide knowledge of indigenous scholarship. The goal of this journal system is to increase the visibility to the participating journals, use and impact of the university\'s research publications by offering them to use through the university\'s own online journal system. The journal system consists of fulltext materials produced in the Stamford University, covering the full range of academic journals of the University.</p>', '1548489342.jpg', 1, '2019-01-26 07:55:42', '2019-02-17 05:17:29');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(10) UNSIGNED NOT NULL,
  `article_title` varchar(250) NOT NULL,
  `category_id` int(11) NOT NULL,
  `article_description` longtext NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `filetoupload` varchar(191) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `article_title`, `category_id`, `article_description`, `author_name`, `filetoupload`, `publication_status`, `created_at`, `updated_at`) VALUES
(65, 'The Quest for Teachers of the ‘Right Stamp’ as Prerequisite to Progress of Female Education in Eastern Bengal: The Partition Interlude', 18, '<div>When the nineteenth century came to its glorious end, in Bengal, \r\nthe storm surrounding the question of women’s education had settled in \r\nfavor of progress. Conditions for the spread of female education, \r\nhowever, were still precarious, to say the very least. The three chief \r\ndeterrents to the spread of female education, as recorded in official \r\ndocuments, were: (a) the custom of early marriage, after which girls \r\ndropped out of school and more often than not lapsed into ignorance; (b)\r\n the system of purdah, the social custom which prevented grown up girls \r\nfrom venturing out of the house to attend school; and, (c) the lack of \r\nfemale teachers (Report on Public Instruction, 1899-1900).</div>', 'Asha Islam Nayeem', '111534Online Journal System.docx', 1, '2019-03-05 05:15:34', '2019-03-05 05:15:34'),
(66, 'Performance of Arbuscular Mycorrhiza Inoculated Acacia mangium Seedlings on Degraded Land with Different Rates of Phosphorus', 20, '<p>The experiment was conducted in the degraded ex-tin mining farm of \r\nUniversiti Putra Malaysia during November 1998 to May 1999. The \r\nexperiment was laid out in split plot design with three replications. \r\nThree phosphorus (P) rates, <em>viz</em>., 0, 50 and 100 g Gaphsa \r\nphosphate rock (GPR) per plant in combination with and without \r\narbuscular mycorrhiza (AM) inoculation were studied on newly planted \r\ntree species <em>Acacia mangium</em>. Mycorrhiza inoculation was \r\nassigned to the main plot and P dose to the subplot. Three-month-old AM \r\npreinoculated seedlings were planted in the field at 2 m x 2 m spacing. \r\nThe experiment was continued until 160 days after planting (DAP). \r\nMycorrhiza inoculation and rate of P application significantly \r\ninfluenced growth and development of the <em>A. mangium </em>plants. The highest growth of un-inoculated <em>A. mangium </em>plants\r\n was observed with 100 g GPR per plant; whereas for AM inoculated plants\r\n the highest growth was observed with 50 g GPR per plant. This indicates\r\n that P requirement of newly planted <em>A. mangium </em>plants on degraded ex-tin mining land could be reduced to 50 g GPR per plant, <em>i.e</em>., by 50% with AM inoculation.</p>', 'M Abdus Satter, M Musa Hanafi, Tenku MM Mahmud, Hashim Azizah', '111734Online-Home-Rental-Management-ok.docx', 1, '2019-03-05 05:17:34', '2019-03-05 05:17:34'),
(67, 'Detection, Antimicrobial Susceptibility and Serotyping of Streptococcus pneumoniae from Cerebrospinal Fluid Specimens from Suspected Meningitis Patients', 21, '<p>Pneumococcal meningitis is the most important cause of \r\ncommunity-acquired meningitis in children resulting in high morbidity \r\nand mortality worldwide. This study aimed to evaluate \r\nimmunochromatographic test (ICT), a rapid detection method, for \r\npneumococci in cerebrospinal fluid (CSF) and also to assess antibiotic \r\nsusceptibility pattern of the clinical isolates. The findings of CSF-ICT\r\n of suspected meningitis cases were also compared with the results of \r\nCSF culture, latex agglutination test (LAT) and polymerase chain \r\nreaction (PCR). Among these diagnostic methods, ICT and PCR showed 100% \r\nspecificity. A total of 401 CSF specimens were cultured but culture \r\npositivity was observed with 55 (13.7%) cases in which <em>Streptococcus pneumoniae </em>was\r\n identified from 20 (36.4%) culture-positive cases. A remarkably high \r\nresistance rate to gentamicin (95%) and cotrimoxazole (60%) among the \r\ninvasive strains of <em>S. pneumoniae </em>was observed, while none of \r\nthe isolates exhibited resistance to penicillin, ceftriaxone and \r\nchloramphenicol by disk diffusion test. Minimum inhibitory concentration\r\n (MIC) showed similar susceptibility pattern. The invasive strains (n = \r\n18) belonged to 9 different serotypes including 1, 2, 4, 34, 12A, 38, \r\n19F, 35A and 45. The prevalent serotypes were 2 (23.5%), 1 (17.6%) and \r\n45 (11.8%). The study shows that a remarkable proportion of meningitis \r\ncases in children are caused by <em>S. pneumoniae</em>. Diagnostic \r\nmethods like ICT and PCR can be considered as effective methods for the \r\ndetection of pneumococcal meningitis even with the patients who have \r\nbeen treated with empirical antibiotics. Ceftriaxone is a safe choice \r\nfor empirical therapy, while the use of cotrimoxazole for the treatment \r\nof meningitis infections is debatable.</p>', 'M Rabiul Alam, Samir Kumar Saha, Tania Nasreen, Farzana', '112319Online-Home-Rental-Management-ok.docx', 1, '2019-03-05 05:23:19', '2019-03-05 05:23:19'),
(68, 'A Longitudinal Study to Identify the Causes of Mortality in Fayoumi and Rhode Island Red Chickens and the Immune Status of the Birds against Newcastle Disease', 22, '<p>With a prospective longitudinal study undertaken between November 2005 \r\nand July 2006 survival rates and disease status of Fayoumi and Rhode \r\nIsland Red (RIR) chickens, reared at a government poultry farm, \r\nPahartali Zonal Poultry Farm (PZPF), were assessed. Immune status of \r\nthese chickens against Newcastle disease (ND) was also determined by \r\nestimating the haemagglutination inhibition (HI) titre to Newcastle \r\ndisease virus (NDV) in blood sera of the chickens. The results showed \r\nthat, at the end of the 37 week, the survival rate of the Fayoumi and \r\nRIR chickens were 87 and 81% respectively. The difference of the \r\nsurvival rates between the two groups was significant (<em>p </em>&lt;0.05).\r\n Among the diseases, coccidiosis was the predominant disease affecting \r\nboth the populations. The incidence rate of coccidiosis, coccidiosis \r\nplus enteritis, salmonellosis, colibacillosis and heat stroke in Fayoumi\r\n and RIR chickens was 0.095 and 0.135, 0.064 and 0.057, 0.007 and 0.010,\r\n 0.006 and 0.012, and 0.017 and 0.016 respectively. The HI titre \r\ndynamics showed that, in case of Fayoumi (except 1st month), HI titre \r\nwas always &gt;log2 6.4, which was well above the protective threshold. \r\nLike Fayoumi, the highest level of HI titre (&gt;log2 6.9) to NDV in the\r\n RIR chickens was recorded in the same month and almost identical ranges\r\n of HI titres to NDV were recorded in both Fayoumi and RIR chickens \r\nthroughout the study period.</p>', 'Suman Das Gupta, Paritosh Kumar Biswas, M Narul Anwa', '112437Online-Home-Rental-Management-ok.docx', 1, '2019-03-05 05:24:37', '2019-03-05 05:24:37'),
(69, 'Impacts of Mycoplasma gallisepticum Vaccine on Newcastle Disease Vaccination and Protection in Parent Stock Flocks', 23, '<div>The present study reports on the impact of Mycoplasma gallisepticum\r\n (MG) vaccination on vaccine respond and subsequent protection against \r\nNewcastle disease (ND) in parent stock flocks of Department of Livestock\r\n Services (DLS) using MG killed vaccine and conventional ND vaccines. \r\nBirds were grouped into four groups, each consisted of 50 birds from the\r\n same flock. Group A birds were vaccinated with ND, group B with ND and \r\nMG, group C with MG, and group D birds were kept as unvaccinated \r\ncontrol. The parameters studied included detection of ND antibody, MG \r\nseroprevalance, mortality (%), and cause of death. The sera of groups B \r\nand C were sero-positive after administration of MG vaccine. The \r\nhaemagglutination-inhibition (HI) titres of group A were higher than \r\ngroup B from week 4 after administration of MG vaccine to the birds of \r\ngroup B. The mortality was very low; one bird of group C died at week 5 \r\ndue to traumatic injury and another bird of group D died at week 2 due \r\nto infectious bronchitis virus (IBV). After challenge, birds of groups A\r\n and B showed no clinical signs and normal post mortem findings were \r\nfound. Birds of groups C and D showed clinical signs from day 3 and \r\ndifferent pathological lesions were found in post mortem. The MG \r\nvaccination did not improve other parameters. Therefore, inoculation of \r\nMG INAC vaccine is not justified and is too expensive at farm levels.</div>', 'M Rayhan Faruque, Jens P Christensen', '113335Online Journal System.docx', 1, '2019-03-05 05:33:35', '2019-03-05 05:33:35'),
(70, 'A Longitudinal Study to Identify the Causes of Mortality in Fayoumi and Rhode Island Red Chickens and the Immune Status of the Birds against Newcastle Disease', 24, '<p>With a prospective longitudinal study undertaken between November 2005 \r\nand July 2006 survival rates and disease status of Fayoumi and Rhode \r\nIsland Red (RIR) chickens, reared at a government poultry farm, \r\nPahartali Zonal Poultry Farm (PZPF), were assessed. Immune status of \r\nthese chickens against Newcastle disease (ND) was also determined by \r\nestimating the haemagglutination inhibition (HI) titre to Newcastle \r\ndisease virus (NDV) in blood sera of the chickens. The results showed \r\nthat, at the end of the 37 week, the survival rate of the Fayoumi and \r\nRIR chickens were 87 and 81% respectively. The difference of the \r\nsurvival rates between the two groups was significant (<em>p </em>&lt;0.05).\r\n Among the diseases, coccidiosis was the predominant disease affecting \r\nboth the populations. The incidence rate of coccidiosis, coccidiosis \r\nplus enteritis, salmonellosis, colibacillosis and heat stroke in Fayoumi\r\n and RIR chickens was 0.095 and 0.135, 0.064 and 0.057, 0.007 and 0.010,\r\n 0.006 and 0.012, and 0.017 and 0.016 respectively. The HI titre \r\ndynamics showed that, in case of Fayoumi (except 1st month), HI titre \r\nwas always &gt;log2 6.4, which was well above the protective threshold. \r\nLike Fayoumi, the highest level of HI titre (&gt;log2 6.9) to NDV in the\r\n RIR chickens was recorded in the same month and almost identical ranges\r\n of HI titres to NDV were recorded in both Fayoumi and RIR chickens \r\nthroughout the study period</p>', 'Fayoumi chickens, Rhode Island Red (RIR) chickens, Newcastle disease (ND)', '114440Online Journal System.docx', 1, '2019-03-05 05:44:40', '2019-03-05 05:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `category_description` text NOT NULL,
  `category_img` varchar(191) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`, `category_img`, `publication_status`, `created_at`, `updated_at`) VALUES
(18, 'Stamford University Journal of Journalism & Media Studies', '<p><span style=\"color: rgb(51, 51, 51); font-family: Raleway, sans-serif; font-size: 14px;\">Hazard is potentially damaging physical event, phenomenon or human activity that may cause loss of life, damage of properties, social and economic disruption as well as environmental degradation. Hazards include latent conditions representing future threats and can have different origins</span><br></p>', '160403journal-1.png', 1, '2019-02-09 10:04:03', '2019-03-05 04:34:40'),
(20, 'Stamford University Journal of  Computer Science & Engineering', '<p><span style=\"color: rgb(51, 51, 51); font-family: Raleway, sans-serif; font-size: 14px;\">The Editorial Board of JBR invites academics, experts, and practitioners to send their manuscripts with scholarly debates and innovative thoughts on origina</span><br></p>', '110003computerscienceengineering-120927075425-phpapp01-thumbnail-4.jpg', 1, '2019-02-09 11:07:25', '2019-03-05 05:00:03'),
(21, 'Stamford University Journal of  Electrical and Electronics Engineering', '<p><span style=\"color: rgb(51, 51, 51); font-family: Raleway, sans-serif; font-size: 14px;\">The Editorial Board of JBR invites academics, experts, and practitioners to send their manuscripts with scholarly debates and innovative thoughts on origina</span><br></p>', '105907computerscienceengineering-120927075425-phpapp01-thumbnail-4.jpg', 1, '2019-02-09 11:08:02', '2019-03-05 04:59:07'),
(22, 'Stamford University Journal of Environmental Science', '<p><span style=\"color: rgb(51, 51, 51); font-family: Raleway, sans-serif; font-size: 14px;\">The Editorial Board of JBR invites academics, experts, and practitioners to send their manuscripts with scholarly debates and innovative thoughts on origina</span><br></p>', '110215160403journal-1.png', 1, '2019-02-09 11:08:33', '2019-03-05 05:02:15'),
(23, 'Stamford University Journal of Civil Engineering', '<h4>DSpace preserves and enables easy and open access to all types of \r\ndigital content including text, images, moving images, mpegs and data \r\nsets.</h4>', '1103383147251b0be2aa38dbe5d9966a73a21c.png', 1, '2019-03-05 04:28:18', '2019-03-05 05:08:28'),
(24, 'Stamford University Journal of  Law', '<p>The Faculty of Law publishes Stamford University Law Journal </p>', '110129law-books_1.jpg', 1, '2019-03-05 04:37:53', '2019-03-05 05:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_08_232129_create_package_table', 2),
(4, '2018_05_20_202524_create_slider_table', 3),
(5, '2018_05_24_084122_create_category_table', 4),
(7, '2018_05_24_131621_create_contactus_table', 5),
(8, '2018_05_28_063218_create_officeinfo_table', 6),
(9, '2018_05_28_123400_create-booking-table', 7),
(10, '2018_05_30_115543_create_test_table', 8),
(11, '2018_05_31_191008_create_upfile_table', 9),
(12, '2018_06_02_170457_create_package_table', 10),
(13, '2018_06_04_110442_create_ticketparchage_table', 11),
(14, '2018_07_17_094153_create_ticket_purchage_table', 12),
(15, '2018_07_17_110951_create_ticket_table', 13),
(16, '2018_07_17_144650_create_ticket_purchage_table', 14),
(17, '2018_07_23_195448_create_ticket_table', 15),
(18, '2018_07_24_063916_create_ticket_table', 16),
(19, '2018_12_30_185415_create_customer_table', 17),
(20, '2018_12_30_200832_create_shipping_table', 17),
(21, '2019_01_03_200115_create_shipping_table', 18),
(22, '2019_01_03_225552_create_payment_table', 19),
(23, '2019_01_03_225822_create_tbl_order_table', 19),
(24, '2019_01_03_225938_create_tbl_order_details_table', 19),
(25, '2019_01_06_115531_create_category_table', 20),
(26, '2019_01_06_160015_create_category_table', 21),
(27, '2019_01_06_204425_create_article_table', 22),
(29, '2019_01_07_125103_create_about_table', 23),
(30, '2019_01_09_145331_create_registeruser_table', 24),
(31, '2019_01_09_212909_create_userjournal_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `registeruser`
--

CREATE TABLE `registeruser` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(191) NOT NULL,
  `repass` varchar(191) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `address` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registeruser`
--

INSERT INTO `registeruser` (`user_id`, `username`, `email`, `password`, `repass`, `country`, `city`, `contact`, `address`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'tinu', 'tinu@gmail.com', '7815696ecbf1c96e6894b779456d330e', '7815696ecbf1c96e6894b779456d330e', 'Bangladesh', 'Dhaka', 1710021328, '2/3 new circular road,west malibagh, 5th floor,flat no-10., 5th floor,flat no-10., 5th floor,flat no-10., 5th floor,flat no-10.', '0959531.jpeg', 0, NULL, '2019-02-10 05:28:09'),
(2, 'Dip', 'bhowmikdeep1@gmail.com', 'e0d9d3862dfb270de65719d43749df5e', 'e0d9d3862dfb270de65719d43749df5e', 'Bangladesh', 'Dhaka', 1682260694, '2/3 new circular road,west malibagh, 5th floor,flat no-10., 5th floor,flat no-10., 5th floor,flat no-10.', '140032dip.jpg', 0, NULL, '2019-02-11 13:27:37'),
(3, 'Final Test', 'finaltest@gmail.com', 'e0d9d3862dfb270de65719d43749df5e', 'e0d9d3862dfb270de65719d43749df5e', 'Bangladesh', 'Dhaka', 1713869303, '2/3 new circular road,west malibagh, 5th floor,flat no-10., 5th floor,flat no-10., 5th floor,flat no-10., 5th floor,flat no-10.', '141332growth_mindset_big_life_journal_teens_tweens_6_530x@2x.jpg', 1, NULL, '2019-02-12 08:16:11'),
(4, 'myname', 'myname@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'Bangladesh', 'Dhaka', 1682260694, 'Dhaka', '155743_DSC2157-p-8-Cort tai-bhowmikdeep1@gmail(1).jpg', 0, NULL, '2019-02-12 10:00:56'),
(5, 'rtvybuhji', 'rftgyhuji@ftgyhu.ghj', '7815696ecbf1c96e6894b779456d330e', '7815696ecbf1c96e6894b779456d330e', 'yuhij', 'yghuji', 5678, 'tgyhuj', '163803_DSC2157-p-8-Cort tai-bhowmikdeep1@gmail(1).jpg', 0, NULL, '2019-02-12 17:30:38'),
(6, 'Deep Bhowmik', 'bhowmikdeep1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', 'Bangladesh', 'Dhaka,Bangladesh', 1682260694, 'tatibazar,71', '23451020181110021548_IMGq_379.jpg', 0, NULL, '2019-02-12 17:48:54'),
(7, 'Niloy Karmakar', 'niloy@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', 'Bangladesh', 'Dhaka', 1515249921, '71,tatibazar', '105544_DSC2157-p-8-Cort tai-bhowmikdeep1@gmail(1).jpg', 0, NULL, '2019-02-17 05:04:40'),
(8, 'ucchas', 'ucchas@gmail.com', 'e0d9d3862dfb270de65719d43749df5e', 'e0d9d3862dfb270de65719d43749df5e', 'Bangladesh', 'Dhaka', 1713869303, '2/3 new circular road, West Malibagh, Dhaka-1217', '175658IMG_20180121_095935.jpg', 1, NULL, '2019-03-13 08:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(10) UNSIGNED NOT NULL,
  `heading` varchar(100) NOT NULL,
  `sub_heading` varchar(100) NOT NULL,
  `img` varchar(191) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `heading`, `sub_heading`, `img`, `publication_status`, `created_at`, `updated_at`) VALUES
(48, 'Stamford University Journal', 'we are student of stamford university', '1551339499.jpeg', 1, '2019-02-28 07:38:19', '2019-02-28 07:38:19'),
(49, 'Stamford University Journal', 'this is heading text', '1551339546.jpeg', 1, '2019-02-28 07:39:06', '2019-02-28 07:39:06'),
(50, 'Stamford University Journal', 'this is heading three', '1551339589.jpeg', 1, '2019-02-28 07:39:49', '2019-02-28 07:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `userjournal`
--

CREATE TABLE `userjournal` (
  `journal_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `journal_title` varchar(250) NOT NULL,
  `category_id` int(11) NOT NULL,
  `journal_description` longtext NOT NULL,
  `user_author_name` varchar(250) NOT NULL,
  `filetoupload` varchar(191) NOT NULL,
  `tran_num` varchar(12) NOT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userjournal`
--

INSERT INTO `userjournal` (`journal_id`, `user_id`, `journal_title`, `category_id`, `journal_description`, `user_author_name`, `filetoupload`, `tran_num`, `status`, `created_at`, `updated_at`) VALUES
(52, 6, 'Calculation of the Neutron Shielding Properties of Locally Developed Ilmenite-Magnetite (I-M) Concrete', 18, 'The fast neutron effective removal cross section, , plays a significant role in determining the shielding effectiveness of any material against fast neutrons. This study has been concerned with the analytical calculation of of the locally developed Ilmenite-Magnetite (I-M) concrete. For comparisons, the same parameter has been calculated for other types of concretes with different densities and compositions. The calculated value of for I-M concrete is 0.09078 cm-1 and found to higher than some concretes. The relaxation length and transmission rate of fast neutrons in I-M concrete have been compared graphically with other types of concretes. The results of this study will provide some specific useful information of effective removal cross sections and half value layers of the locally developed I-M concrete and other types of concretes for practical shielding calculations.', 'Md. Hossain Sahadath, Ripan Biswas, Md. Fazlul Huq, Abdus Sattar Mollah', '104241Online Journal System.docx', '', 1, '2019-03-05 04:42:41', '2019-03-05 04:54:56'),
(53, 6, 'Effectiveness of using Polyethylene and 5% Borated Polyethylene for Radiation Shielding in Spacecraft', 20, 'Polyethylene composites are good absorbers of low energy neutrons that can find applications as structural material inside spacecraft. Polyethylene and 5% borated polyethylene fabricated using conventional polymer processing techniques were evaluated for radiation shielding properties. Count rate variation of thermal neutrons was observed experimentally by placing sheets of polyethylene and 5% borated polyethylene of variable thickness in between an Americium-Beryllium source and He-3 detector and then compared with simulation results obtained by modelling the experimental setup using Monte Carlo n-Particle (MCNP) code version 4c. MCNP results verified the experimental findings that showed 5% borated polyethylene provides much improved radiation shielding compared to neat polyethylene.', 'Md Akhlak Bin Aziz, Md. Fazlul Huq, Zahid Hasan Mahmood, Khorshed Ahmad Kabir', '104522Online-Home-Rental-Management-ok.docx', '', 1, '2019-03-05 04:45:22', '2019-03-05 04:54:34'),
(54, 6, 'Clostridium perfringens: Sporulation, Spore Resistance and Germination', 21, 'Clostridium perfringens are Gram-positive, endospore-forming, anaerobic bacteria with the ability to cause enteric diseases both in human and domesticated animals. As one of the leading cause of food-borne illness in the United States, certain C. perfringens type A isolates exert their action through the production of C. perfringens enterotoxin (CPE), which is expressed only during spore formation. In addition, C. perfringens spores are highly resistant to heat and other environmental factors. Since genome sequences of three C. perfringens strains have been annotated and made public, efforts have been made towards understanding the initiation of sporulation and identifying the key differences between Clostridium and Bacillus sporulation phosphorelay. Small, acid soluble spore proteins (SASPs) have been shown to be required for resistance of C. perfringens spores to heat. Work is also underway to identify nutrient signals required for C. perfringens spore germination.', 'I-Hsiu Huang, Deepa Raju, Daniel Paredes-Sabja, Mahfuzur R Sarker', '104711Online Journal System.docx', '', 1, '2019-03-05 04:47:11', '2019-03-05 04:54:09'),
(55, 6, 'Assessment of Arbuscular Mycorrhizal Association in Some Fruit Plants in Bangladesh', 22, 'Â Rhizosphere soils of 19 fruit plants from horticultural farm of Bangladesh Agricultural Research Institute (BARI), Joydebpur, Gazipur were assessed for arbuscular mycorrhiza (AM) spore population and determining colonization in their roots. The spore numbers recorded ranged from 48.0 (Citrus limon) to 1,050 (Annona reticulata) per 100 g soil in 2004, 41.0 (Citrus grandis) to 916.7 (Phyllanthus emblica) in 2005 and 44.3 (Citrus grandis) to 575.0 (Syzygium samarangense, white) in 2006. A considerable variation was observed in average spore numbers recorded in three consecutive years. Different fruit plants showed different percentages of root colonization by AM fungi. Among all the fruit plants, the highest colonization (86.7%) was found in Syzygium jambos and Elaeocarpus floribundus and the lowest colonization (20.0%) was recorded in Syzygium samarangense (red).', 'Delowara Khanam', '104836Online Journal System.docx', '', 1, '2019-03-05 04:48:36', '2019-03-05 04:53:50'),
(56, 6, 'Effect of Nutrients and Cellobiose Octaacetate on Cellulolytic Enzyme Productions by Streptomyces albolongus', 23, 'The cellulolytic mesophilic isolate Streptomyces albolongus (A5) was used to determine the effect of nitrogen and carbon sources on the production of cellulolytic enzymes using cellobiose octaacetate (COA) as an inducer. The isolate was able to degrade various cellulosic carbon sources. However, the rate of degradation, production of extracellular protein, reducing sugar, saccharification and production of enzyme were enhanced when 0.6% COA was used as an inducer in addition to the main substrate. Among the nitrogen sources tested, beef extract showed maximum production of the enzyme (136.7 U/ml CMCase) in Winstead\'s medium. The enzyme production was further enhanced in the medium supplemented with 0.6% COA, which corresponded to 154.69 U/ml CMCase activity. Among the carbon sources, carboxymethylcellulose (CMC) was found to be the best carbon source and again supplementation of the medium with 0.6% COA enhances CMCase production. Other than CMCase activity, the organism also produced appreciable levels of filter paper cellulase (FPase), avicelase and Ã¢-glucosidase activities.', 'Streptomyces albolongus, Carboxymethylcellulose (CMC), Cellobiose octaacetate (COA), Induction', '105023Online Journal System.docx', '', 1, '2019-03-05 04:50:23', '2019-03-05 04:53:32'),
(57, 6, 'Contract and judicial review in Bangladesh: From Sharping to present', 24, 'The government is the biggest procurer in Bangladesh. It continues to enter into\r\nnumerous contracts daily. When such contracts are entered into by the government in\r\nperformance of their statutory duty as sovereign, they are actions of public nature and\r\namenable to constitutional challenge before the Supreme Court of Bangladesh under\r\njudicial review. In other words, a citizen, who is a party to these special kinds of\r\ncontracts are able to claim enforcement of these contracts in constitutional courts in\r\naddition to being enforced by civil courts only. In this article, the practice of these\r\ncontracts in Bangladesh are looked into. We have tried to cover the recent case laws on\r\nthe subject from the first case of it’s kind. The rationales adopted by the courts are self\r\nexplanatory and does not require interpretation. We have endeavored to put up a map of\r\ndevelopment on this area of law. There is no other specific research question in this\r\narticle other than the mapping of the progress of the availability of judicial review in\r\ngovernment related contracts. While the courts recognize all the other ingredients of the\r\nlaw of contracts to be present in these special contracts, the extraordinary remedy of\r\njudicial review and its availability in certain cases make all the difference.', 'Dalia Pervin', '105232Online-Home-Rental-Management-ok.docx', '', 1, '2019-03-05 04:52:32', '2019-03-05 04:53:17'),
(58, 8, 'Course Registration of All Programs (except Pharmacy) for Trimester Summer-2019', 18, 'This is for the information of all concerned that the course registration of the students of all programs (except Pharmacy) for trimester Summer-2019 will start on March 02, 2019 (Saturday) and close on March 12, 2019 (Wednesday).\r\n\r\nStudents will be allowed to register up to March 19, 2019 with late fee of TK 3000/-\r\n\r\nDepartments can advise the students on registration even before March 02, 2019and forward the registration forms duly filled up with accounts clearance and updated phone number to the Registrar Office for necessary inputs.', 'Muhammad Abdul Matin', '193318CV.pdf', '', 0, '2019-03-11 13:33:18', '2019-03-12 08:46:53'),
(59, 8, 'tran num', 18, 'Transaction Number', 'Deep Kumar', '155801CV.pdf', '1253016449', 1, '2019-03-12 09:58:01', '2019-03-13 08:39:19'),
(60, 8, 'tes', 18, 'tes', 'tes', '161113CV.pdf', '871114379', 0, '2019-03-12 10:11:13', '2019-03-13 06:17:58'),
(61, 8, 'gsgs', 18, 'gsgsgsg', 'gsgsgs', '014642a.docx', '1589619224', NULL, '2019-03-13 19:46:42', '2019-03-13 19:46:42'),
(62, 8, 'fafa', 18, 'fafaf', 'fafaf', '014813a.doc', '1927398811', NULL, '2019-03-13 19:48:13', '2019-03-13 19:48:13'),
(63, 8, 'dad', 18, 'dad', 'dada', '014844a.zip', '2094679665', NULL, '2019-03-13 19:48:45', '2019-03-13 19:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fazley Rabbi', 'fazleyarabbi@yahoo.com.au', '$2y$10$3oQzDai.w2eFUKB7bp8HGO9DpSOUU.p8NckV8/qh4xq7ilBLnR75W', 0, NULL, '2018-05-08 16:16:37', '2018-05-08 16:16:37'),
(2, 'Joyonto $ Deep', 'joyontokumar@gmail.com', '$2y$10$Aii7.u9otWNi/GTOyMXiI.AOs6vmaOQCjMQ8LFM8LEUQ/QVuNgY9y', 1, 'abrGEpTpuHH9Lxs2SaA0ysfaNCXCLgKRWhy8J5vhaisxVTLWLb0qUsPFwth0', '2018-05-08 19:01:38', '2018-05-08 19:01:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

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
-- Indexes for table `registeruser`
--
ALTER TABLE `registeruser`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `userjournal`
--
ALTER TABLE `userjournal`
  ADD PRIMARY KEY (`journal_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `registeruser`
--
ALTER TABLE `registeruser`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `userjournal`
--
ALTER TABLE `userjournal`
  MODIFY `journal_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
