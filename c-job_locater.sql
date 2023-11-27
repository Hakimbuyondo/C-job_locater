-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 02:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c-job_locater`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `date_created`) VALUES
(1, 'Administration, business and management', '2022-10-22 09:08:50'),
(2, 'Alternative therapies', '2022-10-22 09:08:52'),
(3, 'Animals, land and environment', '2022-10-22 09:58:14'),
(4, 'Computing and ICT', '2022-10-22 09:58:24'),
(5, 'Construction and building', '2022-10-22 09:59:07'),
(6, 'Design, arts and crafts', '2022-10-22 09:59:30'),
(7, 'Education and training', '2022-10-22 09:59:30'),
(8, 'Engineering', '2022-10-22 09:59:30'),
(9, 'Facilities and property services', '2022-10-22 09:59:30'),
(10, 'Financial services', '2022-10-22 09:59:30'),
(11, 'Garage services', '2022-10-22 09:59:30'),
(12, 'Hairdressing and beauty', '2022-10-22 09:59:30'),
(13, 'Healthcare', '2022-10-22 09:59:30'),
(14, 'Heritage, culture and libraries', '2022-10-22 09:59:30'),
(15, 'Hospitality, catering and tourism', '2022-10-22 09:59:30'),
(16, 'Languages', '2022-10-22 09:59:30'),
(17, 'Legal and court services', '2022-10-22 09:59:30'),
(18, 'Manufacturing and production', '2022-10-22 09:59:30'),
(19, 'Performing arts and media', '2022-10-22 09:59:30'),
(20, 'Print and publishing, marketing and advertising', '2022-10-22 09:59:30'),
(21, 'Retail and customer services', '2022-10-22 09:59:30'),
(22, 'Science, mathematics and statistics', '2022-10-22 09:59:30'),
(23, 'Security, uniformed and protective services', '2022-10-22 09:59:30'),
(24, 'Social sciences and religion', '2022-10-22 09:59:30'),
(25, 'Social work and caring services', '2022-10-22 09:59:30'),
(26, 'Sport and leisure', '2022-10-22 09:59:30'),
(27, 'Transport, distribution and logistics', '2022-10-22 09:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `company_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_address` varchar(100) NOT NULL,
  `company_phones` varchar(100) NOT NULL,
  `company_emails` varchar(255) NOT NULL,
  `company_description` text NOT NULL,
  `company_website` varchar(100) NOT NULL,
  `company_logo` varchar(100) NOT NULL,
  `number_of_employees` int(11) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `user_id`, `company_name`, `company_address`, `company_phones`, `company_emails`, `company_description`, `company_website`, `company_logo`, `number_of_employees`, `date_registered`) VALUES
(11, 4, 'Freelance IT', 'Kitemu Nsangi, Kyambazzi 1km off Masaka Road', '+256750089514 / +256788015374', 'freelance.it.hakim@gmail.com', 'Freelance I.T we are a Technical company deals in all I.T staff we do the listed thing bellow:\r\n* Web Designing and Development...\r\n* Mobile and web Application Development...\r\n* LAN Networking Cabling and Configuration...\r\n* CCTV Installation and Maintenance...\r\n* Graphics Designing...\r\n* Computer Training...\r\n- etc -', 'www.comingsoon.com', 'free.png', 3, '2022-10-28 22:40:35');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_description` text NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `company_id` int(11) NOT NULL,
  `holder1_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_description`, `date_posted`, `company_id`, `holder1_id`, `worker_id`, `user_id`) VALUES
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.', '2022-10-28 22:59:18', 11, 108, 0, 4),
(4, ' I need a good guy to teach my Students at freelance I.T offices', '2022-10-28 23:24:41', 11, 99, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `jobs_holder_1`
--

CREATE TABLE `jobs_holder_1` (
  `holder1_id` int(11) NOT NULL,
  `title_1` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs_holder_1`
--

INSERT INTO `jobs_holder_1` (`holder1_id`, `title_1`, `category_id`) VALUES
(1, 'Administrator', 1),
(2, 'Business development manager', 1),
(4, 'Civil service administrative officer', 1),
(5, 'Compliance officer', 1),
(6, 'European Union official', 1),
(7, 'Health service manager', 1),
(8, 'Local government administrative assistant', 1),
(9, 'Management consultant', 1),
(10, 'Operational researcher', 1),
(11, 'Receptionist', 1),
(12, 'Scrum Master', 1),
(13, 'Trading standards officer', 1),
(14, 'Business analyst ', 1),
(15, 'Car rental agent ', 1),
(16, 'Civil service executive officer ', 1),
(17, 'Diplomatic service officer ', 1),
(18, 'Health and safety adviser', 1),
(19, 'Human resources adviser', 1),
(20, 'Local government officer ', 1),
(21, 'Medical secretary ', 1),
(22, 'Procurement Manager ', 1),
(23, 'Recruitment consultant ', 1),
(36, 'Acupuncturist', 2),
(37, 'Naturopath', 2),
(38, 'Homeopath', 2),
(39, 'Osteopath', 2),
(40, 'Hypnotherapist ', 2),
(41, 'Reflexologist', 2),
(42, 'Agricultural consultant', 3),
(43, 'Animal technician', 3),
(44, 'Climate Scientist ', 3),
(45, 'Dog groomer', 3),
(46, 'Environmental consultant', 3),
(59, 'Dog handler', 3),
(60, 'Environmental health officer', 3),
(61, 'Farm worker ', 3),
(62, 'Fish farm worker', 3),
(63, 'Forestry worker ', 3),
(65, 'Horse riding coach', 3),
(71, '\r\nCemetery worker ', 3),
(72, 'Countryside ranger', 3),
(73, '\r\nEcologist ', 3),
(74, '\r\nEnvironmental manager ', 3),
(75, '\r\nFarrier ', 3),
(76, 'Fishing vessel skipper', 3),
(78, '\r\nGreenkeeper ', 3),
(79, '\r\nHorticultural worker ', 3),
(80, '\r\nMeteorologist ', 3),
(81, '\r\nRural surveyor ', 3),
(82, 'Veterinary nurse', 3),
(83, 'Zookeeper', 3),
(84, 'App developer', 4),
(85, 'Big data engineer', 4),
(86, 'Database administrator', 4),
(87, 'Forensic computer analyst', 4),
(88, 'Games tester', 4),
(89, 'IT support technician', 4),
(90, 'Network manager', 4),
(91, 'Service engineer', 4),
(92, 'Solution architect ', 4),
(93, 'Web developer', 4),
(94, 'AR/VR programmer', 4),
(95, '\r\nCAD technician ', 4),
(96, '\r\nDevSecOps developer ', 4),
(97, 'Game designer', 4),
(98, 'Infrastructure engineer', 4),
(99, '\r\nIT trainer ', 4),
(100, '\r\nRobotics engineer ', 4),
(101, 'Software developer', 4),
(102, 'Systems analyst', 4),
(103, '\r\nWeb editor ', 4),
(104, '\r\nAudio-visual technician ', 4),
(105, 'Computer service and repair technician', 4),
(107, '\r\nGames developer ', 4),
(108, '\r\nIT project analyst ', 4),
(109, '\r\nMachine learning engineer ', 4),
(110, '\r\nService desk analyst ', 4),
(111, 'Software engineer', 4),
(112, '\r\nVirtual reality designer ', 4),
(113, 'Architect', 5),
(114, 'Bricklayer', 5),
(115, 'Building surveyor', 5),
(116, 'Civil engineer', 5),
(117, 'Commercial energy assessor', 5),
(122, 'Leakage operative', 5),
(123, 'Plasterer', 5),
(124, 'Road worker', 5),
(125, 'Shopfitter', 5),
(126, 'Technical surveyor', 5),
(127, 'Water treatment technician', 5),
(129, 'Builders\' merchant', 5),
(130, '\r\nBuilding technician ', 5),
(131, 'Civil engineering technician', 5),
(132, '\r\nConservation Officer ', 5),
(133, '\r\nConstruction plant mechanic ', 5),
(134, '\r\nDomestic energy assessor ', 5),
(135, '\r\nGeneral practice surveyor ', 5),
(136, '\r\nLand surveyor ', 5),
(137, '\r\nPainter and decorator ', 5),
(138, '\r\nPlumber ', 5),
(140, '\r\nStonemason ', 5),
(143, '\r\nArchitectural technologist ', 5),
(144, 'Building standards officer (local authority)', 5),
(145, 'Carpet fitter or floor layer', 5),
(146, 'Clerk of works', 5),
(147, 'Construction manager', 5),
(148, 'Construction plant operator', 5),
(149, '\r\nDry liner ', 5),
(150, '\r\nGlazier ', 5),
(151, '\r\nLandscape architect ', 5),
(152, '\r\nPlanning and development surveyor ', 5),
(153, '\r\nQuantity surveyor ', 5),
(154, '\r\nScaffolder ', 5),
(155, 'Structural engineer', 5),
(156, 'Wall and floor tiler', 5),
(157, 'Animator', 6),
(158, 'Cabinet maker', 6),
(159, 'Costume designer', 6),
(160, 'Fashion designer', 6),
(161, 'Furniture designer', 6),
(162, 'Illustrator', 6),
(163, 'Medical illustrator', 6),
(164, 'Photographer', 6),
(165, 'Product designer', 6),
(166, 'Signwriter', 6),
(167, 'User experience (UX) designer', 6),
(168, '\r\nArt gallery curator ', 6),
(169, 'Ceramics designer or maker', 6),
(170, '\r\nDressmaker ', 6),
(171, 'Fine artist', 6),
(172, '\r\nGlassmaker ', 6),
(173, '\r\nInterior designer ', 6),
(174, '\r\nModel maker ', 6),
(175, 'Photographic stylist', 6),
(176, 'Service Designer', 6),
(177, 'Tattooist', 6),
(178, '\r\nBlacksmith ', 6),
(179, '\r\nConcept Artist ', 6),
(180, '\r\nExhibition designer ', 6),
(181, '\r\nFrench polisher ', 6),
(182, '\r\nGraphic designer ', 6),
(183, '\r\nJewellery designer-maker ', 6),
(184, 'Musical instrument maker or repairer', 6),
(185, 'Picture framer', 6),
(186, '\r\nSet designer ', 6),
(187, '\r\nTextile designer ', 6),
(188, 'Careers adviser', 7),
(189, 'Early years teacher', 7),
(190, 'Higher education lecturer', 7),
(191, 'Literacies tutor', 7),
(192, 'Teacher — Secondary School — Biology', 7),
(193, 'Teacher — Secondary School — Drama', 7),
(194, 'Teacher — Secondary School — History', 7),
(195, 'Teacher — Secondary School — Modern Languages', 7),
(196, 'Teacher — Secondary School — Physics', 7),
(197, 'Teacher- Secondary School', 7),
(198, 'Teacher- Secondary School- Gaelic', 7),
(199, 'Training officer', 7),
(200, '\r\nClassroom assistant ', 7),
(201, 'EFL teacher', 7),
(202, '\r\nLearning support assistant ', 7),
(203, '\r\nNursery manager ', 7),
(204, '\r\nTeacher — Secondary School — Business Studies ', 7),
(205, '\r\nTeacher — Secondary School — English ', 7),
(206, '\r\nTeacher — Secondary School — Home Economics ', 7),
(207, 'Teacher — Secondary School — Modern Studies', 7),
(208, '\r\nTeacher — Secondary School — Religious Education ', 7),
(209, 'Teacher- Secondary school- Computing', 7),
(210, '\r\nTeacher- Secondary School- Physical Education ', 7),
(211, '\r\nCommunity education coordinator ', 7),
(212, '\r\nFurther education lecturer ', 7),
(213, '\r\nTeacher — Secondary School — Art and Design ', 7),
(214, 'Teacher — Secondary School — Chemistry ', 7),
(215, '\r\nTeacher — Secondary School — Geography ', 7),
(216, '\r\nTeacher — Secondary School — Mathematics ', 7),
(217, '\r\nTeacher — Secondary School — Music ', 7),
(218, '\r\nTeacher- Primary School ', 7),
(219, '\r\nTeacher- Secondary school- Design and technology ', 7),
(220, 'Training manager', 7),
(221, 'Pilot- Airline', 27),
(222, 'Pilot- Helicopter', 27),
(223, 'Postal delivery worker', 27),
(224, 'Road transport manager', 27),
(225, 'Taxi driver', 27),
(226, 'Train driver', 27),
(227, 'Warehouse operative', 27),
(228, 'Fitness instructor', 26),
(229, 'Footballer', 26),
(230, 'Leisure centre manager', 26),
(231, 'Lifeguard', 26),
(232, 'Outdoor activities instructor', 26),
(233, 'Counsellor', 25),
(234, 'Crematorium technician', 25),
(235, 'Early years practitioner', 25),
(236, 'Funeral director', 25),
(237, 'Housing officer', 25),
(238, 'Nanny', 25),
(239, 'Personal Assistant', 25),
(240, 'Playworker', 25),
(241, 'Social worker', 25),
(242, 'Welfare rights officer', 25),
(243, 'Counselling psychologist', 24),
(244, 'Educational psychologist', 24),
(245, 'Health psychologist', 24),
(246, 'Occupational Psychologist', 24),
(247, 'Psychotherapist', 24),
(248, 'Sport and exercise psychologist ', 24),
(249, 'Army officer', 23),
(250, 'Army soldier', 23),
(251, 'Border Force officer or assistant officer', 23),
(252, 'CCTV operator', 23),
(253, 'Civil enforcement officer', 23),
(254, 'Coastguard', 23),
(255, 'Criminal intelligence analyst', 23),
(256, 'Customs officer', 23),
(257, 'Firefighter', 23),
(258, 'Immigration officer', 23),
(259, 'Astronaut', 22),
(260, 'Astronomer', 22),
(261, 'Biochemist', 22),
(262, 'Biologist', 22),
(263, 'Biomedical scientist', 22),
(264, 'Biotechnologist', 22),
(265, 'Botanist', 22),
(266, 'Cartographer', 22),
(267, 'Chemical plant process operator', 22),
(268, 'Chemist', 22),
(269, 'Data analyst', 22),
(270, 'Data scientist', 22),
(271, 'Estate agent', 21),
(272, 'Florist', 21),
(273, 'Online seller', 21),
(274, 'Retail buyer', 21),
(275, 'Retail jeweller', 21),
(276, 'Retail manager', 21),
(277, 'Sales assistant', 21),
(278, 'Sales manager', 21),
(279, 'Sales representative', 21),
(280, 'Public relations officer', 20),
(281, 'SEO specialist', 20),
(282, 'Sub-editor', 20),
(283, 'Technical author', 20),
(284, 'Video editor', 20),
(285, 'Writer ', 20),
(286, 'Studio sound engineer', 19),
(287, 'Stunt performer', 19),
(288, 'TV or film assistant director', 19),
(289, 'TV or film camera operator', 19),
(290, 'TV or film director', 19),
(291, 'TV or film producer', 19),
(292, 'TV or film production assistant', 19),
(293, 'TV or film sound technician', 19),
(294, 'TV presenter', 19),
(295, 'VFX artist', 19),
(296, 'Wardrobe assistant', 19),
(297, 'Actor', 19),
(298, 'Arts administrator', 19),
(299, 'Broadcast engineer', 19),
(300, 'Broadcast journalist', 19),
(301, 'Choreographer', 19),
(302, 'Classical musician', 19),
(303, 'Community arts worker', 19),
(304, 'Dance teacher', 19),
(305, 'Dancer', 19),
(306, 'DJ', 19),
(307, 'Entertainer', 19),
(308, 'Quality assurance officer', 18),
(309, 'Quality control technician', 18),
(310, 'Quality manager', 18),
(311, 'Sewing machinist', 18),
(312, 'Tailor', 18),
(313, 'Toolmaker ', 18),
(314, ' Brewery worker', 18),
(315, 'Butcher', 18),
(316, 'Distillery manager', 18),
(317, 'Food packaging operative', 18),
(318, 'Administrative officer (courts)', 17),
(319, 'Advocate', 17),
(320, 'Advocate\'s clerk', 17),
(321, 'Court officer', 17),
(322, 'Judge or sheriff', 17),
(323, 'Paralegal', 17),
(324, 'Patent attorney', 17),
(325, 'Procurator fiscal', 17),
(326, 'Reporter to the Children’s Panel', 17),
(327, 'Sheriff officer', 17),
(328, 'Solicitor', 17),
(329, 'Interpreter', 16),
(330, 'Translator', 16),
(331, 'Kitchen porter', 15),
(332, 'Resort representative', 15),
(333, 'Restaurant manager', 15),
(334, 'Tour manager', 15),
(335, 'Tourist guide', 15),
(336, 'Tourist information centre assistant', 15),
(337, 'Travel agent ', 15),
(338, 'Archaeologist', 14),
(339, 'Archivist', 14),
(340, 'Conservator', 14),
(341, 'Librarian', 14),
(342, 'Library assistant', 14),
(343, 'Museum assistant', 14),
(344, 'Museum curator ', 14),
(345, 'Accommodation warden', 9),
(346, 'Caretaker', 9),
(347, 'Cleaner', 9),
(348, 'Facilities manager', 9),
(349, 'Highways cleaner', 9),
(350, 'Locksmith', 9),
(351, 'Recycling operative', 9),
(352, 'Refuse collector', 9),
(353, 'Window cleaner ', 9),
(354, 'Accountant- Management', 10),
(355, 'Accountant- Private practice', 10),
(356, 'Accountant- Public finance', 10),
(357, 'Accounting technician', 10),
(358, 'Accounts assistant', 10),
(359, 'Actuary', 10),
(360, 'Bank manager', 10),
(361, 'Banking customer service adviser', 10),
(362, 'Bookkeeper', 10),
(363, 'Claims adjuster', 10),
(364, 'Credit manager', 10),
(365, 'Economist', 10),
(366, 'Finance analyst', 10),
(367, 'Finance manager', 10),
(368, 'Financial adviser', 10),
(369, 'Insurance account manager', 10),
(370, 'Insurance broker', 10),
(371, 'Insurance claims handler', 10),
(372, 'Insurance risk surveyor', 10),
(373, 'Insurance underwriter', 10),
(374, 'Investment analyst', 10),
(375, 'Investment banker', 10),
(376, 'Payroll administrator', 10),
(377, 'Stockbroker', 10),
(378, 'Tax inspector', 10),
(379, 'Car valet', 11),
(380, 'Cycle mechanic', 11),
(381, 'Mechanic', 11),
(382, 'Motor vehicle body repairer', 11),
(383, 'Motor vehicle parts person', 11),
(384, 'Roadside technician', 11),
(385, 'Tyre or exhaust fitter', 11),
(386, 'Vehicle spray painter', 11),
(387, 'Aromatherapist', 12),
(388, 'Beauty consultant', 12),
(389, 'Beauty therapist', 12),
(390, 'Body piercer', 12),
(391, 'Fashion model', 12),
(392, 'Hairdresser', 12),
(393, 'Make-up artist', 12),
(394, 'Nail technician', 12),
(395, 'Ambulance care assistant', 13),
(396, 'Ambulance paramedic', 13),
(397, 'Ambulance technician', 13),
(398, 'Anatomical pathology technician', 13),
(399, 'Art therapist', 13),
(400, 'Audiologist', 13),
(401, 'Chiropractor', 13),
(402, 'Clinical engineer', 13),
(403, 'Clinical perfusionist', 13),
(404, 'Clinical psychologist', 13),
(405, 'Dance movement psychotherapist', 13),
(406, 'Dental hygienist', 13),
(407, 'Dental nurse', 13),
(408, 'Dental technician', 13),
(409, 'Dental therapist', 13),
(410, 'Dentist', 13),
(411, 'Dietitian', 13),
(412, 'Dispatcher', 13),
(413, 'Dispensing optician', 13),
(414, 'District nurse', 13),
(415, 'Doctor- GP', 13),
(416, 'Dramatherapist', 13),
(417, 'Emergency medical dispatcher', 13),
(418, 'Ergonomist', 13),
(419, 'Forensic psychologist', 13),
(420, 'Health promotion specialist', 13),
(421, 'Health visitor', 13),
(422, 'Healthcare assistant', 13),
(423, 'Hospital doctor', 13),
(424, 'Hospital porter', 13),
(425, 'Medical physicist', 13),
(426, 'Midwife', 13),
(427, 'Music therapist', 13),
(428, 'Nurse- Adult', 13),
(429, 'Nurse- Child', 13),
(430, 'Nurse- Learning Disability', 13),
(431, 'Nurse- Mental Health', 13),
(432, 'Occupational therapist', 13),
(433, 'Occupational therapy support worker', 13),
(434, 'Offshore medic', 13),
(435, 'Operating department practitioner', 13),
(436, 'Optometrist', 13),
(437, 'Orthoptist', 13),
(438, 'Pathologist', 13),
(439, 'Pharmacist', 13),
(440, 'Pharmacy technician', 13),
(441, 'Phlebotomist', 13),
(442, 'Physiotherapist', 13),
(443, 'Physiotherapy assistant', 13),
(444, 'Play therapist', 13),
(445, 'Podiatrist', 13),
(446, 'Practice nurse', 13),
(447, 'Prosthetist-orthotist', 13),
(448, 'Radiographer', 13),
(449, 'Speech and language therapist', 13),
(450, 'Sterile services technician', 13),
(451, 'Surgeon ', 13),
(452, 'Electrical Installation', 8);

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `application_id` int(11) NOT NULL,
  `cv_document` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `job_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`application_id`, `cv_document`, `message`, `job_id`, `company_id`, `worker_id`, `user_id`) VALUES
(1, 'Untitled.pdf', 'hey', 3, 11, 28, 0),
(2, 'Application.pdf', 'Hey i would like this job', 3, 11, 28, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `zip_code`, `register_date`, `username`, `password`) VALUES
(6, 'Hakim Buyondo', 'hakimbuyondo@gmail.com', 'zip123', '2023-03-13 08:17:41', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `worker_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(4) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `contacts` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`worker_id`, `user_id`, `name`, `age`, `gender`, `contacts`, `description`, `image`, `date_registered`) VALUES
(28, 4, 'Alfred Oboth', 29, 'Male', 'obothalfred@gmail.com', ' 	My Name is Alfred Oboth, I am Electrician at self Employed, I do all Industrial and Domestic Electrical Installation and am here to find a job on this App...', '5.jpg', '2022-10-28 22:56:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `jobs_holder_1`
--
ALTER TABLE `jobs_holder_1`
  ADD PRIMARY KEY (`holder1_id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs_holder_1`
--
ALTER TABLE `jobs_holder_1`
  MODIFY `holder1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=453;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
