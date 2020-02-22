-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 22, 2020 at 09:35 AM
-- Server version: 5.6.47-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: ` id1256718_daveyal`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutimg`
--

CREATE TABLE `aboutimg` (
  `a_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutimg`
--

INSERT INTO `aboutimg` (`a_id`, `image`) VALUES
(9, '3d-model-2901886.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `about_id` int(11) NOT NULL,
  `about_content` text NOT NULL,
  `about_image` text NOT NULL,
  `founder1_img` text NOT NULL,
  `founder1_name` varchar(255) NOT NULL,
  `founder1_designation` varchar(255) NOT NULL,
  `founder1_bio` text NOT NULL,
  `founder2_img` text NOT NULL,
  `founder2_name` varchar(255) NOT NULL,
  `founder2_designation` varchar(255) NOT NULL,
  `founder2_bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`about_id`, `about_content`, `about_image`, `founder1_img`, `founder1_name`, `founder1_designation`, `founder1_bio`, `founder2_img`, `founder2_name`, `founder2_designation`, `founder2_bio`) VALUES
(4, '                                                                                                                                                                                                                                \r\nAlkebulan Group is an organisation dedicated to the development of Humanitarian Projects and transforming Africa, with a portfolio spanning in Energy, Healthcare, Mining, Infrastructure, Energy, Oil and Gas , ICT, Agriculture and Banking Solutions. With a loan capital of over US$5 Billion we invest in sectors that generate high long-term returns and are able to move the economy of Africa forward. To achieve superior risk-adjusted returns, we blend professional industry experience and manufacture the best practise in operational management. Alkebulan has a large professional team with over 30 years experience that blends knowledge of the industry with the best financial and organisational capabilities. A diverse group of seasoned Senior Advisors complements this group. The Group has offices in Botswana, Zimbabwe and the United Kingdom.\r\n                                                                                                                                                                                                                                ', 'Alkebulan Logo Transparent.png', 'Emile.jpg', 'Emile Heskey', 'Co-Founder & Chairman', '                                                                                                                                                                                                                                Emile Heskey is the Chairman and Cofounder of Alkebulan Group. Mr Heskey is extremely well known making more than 500 appearances in the Football League and Premier League over a 20-year career, and represented England in international football. He also played in Australia, playing for the A-League club Newcastle Jets. Emile also played in two FIFA World Cups and two UEFA European Championships and won nine trophies, including the UEFA Cup, FA Cup and three League Cups. After winning the League Cup in 1997 and 2000, he made a big Â£11 million move to Liverpool in 2000, which, at the time, was the record transfer fee paid by them. With Liverpool, he won multiple honours including the FA Cup in 2001.\r\nSince retiring from the game in 2016, he has been involved in many different areas of business and also continued his involvement in football as a regular media pundit and studio guest for various sports outlets across the world. Emile is also a Club Ambassador for Liverpool and Leicester City. Heskey was born in Leicester, Leicestershire to a family of Antiguan descent. He knows what it takes to win and he brings to Alkebulan Group worldly expertise and strong Caribbean connections as well as very strong international contacts.\r\n                                                                                                                                                                                                                                ', 'IMG_3969.jpg', 'Davison Simango', 'Co-founder & CEO', '                                                                Davey Simango is a Manchester based Zimbabwean Entrepreneur. A present-day renaissance man who has proficiency in the creative arts, Entrepreneurship and Philanthropy. Turned his passion for aeroplanes into a lucrative private jets charter business DafloJets.com With his background in music, event management and promotion he had the capability to captivate an audience and add the perfect nuances to make an event flourish. Simango went on to work with an array of artists as a promoter. One of which was former professional boxing legend Floyd Mayweather.  Simango is driven to mitigate the suffering of those who are impoverished on a global scale by providing essential necessities and valuable resources. Simango has witnessed first-hand the conditions of underdeveloped countries through his childhood and is invested in transforming the lives of individuals and families in need. He empathizes with individuals who may endure hardship. In the larger scheme of things, he believes that his patience, tenacity, prayer & fasting, determination and having a vision has allowed him to persevere. He desires to inspire and motivate people to reach their full potential in life. His true passion is creating a lasting change in the lives of individuals who are underprivileged.                                                                                                                                                                                                                            ');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `admin_email` text,
  `admin_pass` varchar(100) DEFAULT NULL,
  `admin_contact` varchar(100) DEFAULT NULL,
  `admin_job` varchar(100) DEFAULT NULL,
  `admin_image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_contact`, `admin_job`, `admin_image`) VALUES
(1, 'tresmind', 'developer@tresmind.com', '12345', '11111111111', 'developer', '8.png'),
(2, 'Davey', 'daveysim@gmail.com', '12345', '1234', '1234', 'Dave 3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `background_id` int(11) NOT NULL,
  `aboutus_img` text NOT NULL,
  `investment_img` text NOT NULL,
  `projects_img` text NOT NULL,
  `news_img` text NOT NULL,
  `contact_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `background`
--

INSERT INTO `background` (`background_id`, `aboutus_img`, `investment_img`, `projects_img`, `news_img`, `contact_img`) VALUES
(1, 'HomeBack.jpg', '', '', '', ''),
(2, '', '', 'Infrustructure1.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactimg`
--

CREATE TABLE `contactimg` (
  `c_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactimg`
--

INSERT INTO `contactimg` (`c_id`, `image`) VALUES
(10, '3d-model-2901886.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_id` int(11) NOT NULL,
  `contact_country` text NOT NULL,
  `contact_address` text NOT NULL,
  `contact_phone` text NOT NULL,
  `contact_email` text NOT NULL,
  `contact_map_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contact_id`, `contact_country`, `contact_address`, `contact_phone`, `contact_email`, `contact_map_link`) VALUES
(5, 'United Kingdom', 'Kemp House, 160 City Road, London EC1V 2NX, United Kingdom', '+4479 81865688', 'info@alkebulangroup.com', 'https://goo.gl/maps/1BSJTcsjrMdGxEBd9'),
(6, 'Zimbabwe', '25 Bruce Road, Harare, Zimbabwe', '+263 786293016', 'info@alkebulangroup.com', 'https://goo.gl/maps/XEDYgiabiXxPr8Wy6'),
(7, 'Botswana', 'Gaborone Botswana, Africa', 'coming soon', 'info@alkebulangroup.com', 'https://goo.gl/maps/Mp2BiCbTYRXtYHNC7');

-- --------------------------------------------------------

--
-- Table structure for table `investment`
--

CREATE TABLE `investment` (
  `invest_id` int(11) NOT NULL,
  `invest_title` varchar(255) DEFAULT NULL,
  `invest_title2` varchar(255) NOT NULL,
  `invest_img` text,
  `invest_desc` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investment`
--

INSERT INTO `investment` (`invest_id`, `invest_title`, `invest_title2`, `invest_img`, `invest_desc`) VALUES
(2, 'Infrastructure', 'Alkebulan Construction', 'Infrustructure1.jpg', '                              \r\n                                                            \r\n                               	Development of community housing, hotels, buildings and shopping centers; \r\n 	Telecommunication infrastructure development projects;\r\n 	Infrastructures development and roads projects;\r\n 	Development of transportation, travel and tourism sector;\r\n 	Development of the educational sector for building schools and development and training centres for teachers;\r\n 	Funding all type of humanitarian projects sector of manufacturing and industrial projects which will help in job security for the public. \r\n                              \r\n                                                        \r\n                          '),
(3, 'Mining', 'Alkebulan Mining', 'Mining1.jpg', 'Africa sits upon trillions of dollarsâ€™ worth of extractable resources. The group invest in the mining of Gold and Diamonds.'),
(4, 'Oil and Gas', 'Alkebulan Oil', 'Oil-and-Gas-(2)1.jpg', 'Strategic allies and international clients in Europe, North America, Canada, Central America, the Caribbean and Africa for commercialization of D2, MGO, D6, IFO 380, Jet A1 as well as crude under different specifications towards refineries located in different countries. Financial and structural capacity for the purchase, sale, marketing and distribution of industrial equipment of high requirement, as well as raw oil and distilled products in different international markets; with the aim of strengthening the presence globally when completing negotiations, such as commercial ally to various customers in world markets.'),
(5, 'Agriculture', 'Alkebulan Agriculture', 'Agriculture1.jpg', 'Food program with the development of the agricultural projects in providing food\r\nsecurity in needy areas in Africa;\r\n'),
(6, 'Alkebulan Hospital', 'Alkebulan HealthCare', 'Healthcare1.jpg', '                              \r\n                                                            \r\n                                                            \r\n                              health care                              \r\n                                                        \r\n                                                        \r\n                          '),
(7, 'Energy', 'Alkebulan Energy', 'Renewable-Energy1.jpg', '                              \r\n                                                            \r\n                                                            \r\n                                                            \r\n                                                            \r\n                                                            \r\n                                                            \r\n                              The availability of reliable, sustainable energy is vital to Africas economic and social development. The group is heavily involved in investments in renewable energy, energy generation, storage, conversion, distribution and trading.                              \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                          ');

-- --------------------------------------------------------

--
-- Table structure for table `investmentimg`
--

CREATE TABLE `investmentimg` (
  `i_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investmentimg`
--

INSERT INTO `investmentimg` (`i_id`, `image`) VALUES
(10, '3d-model-2901886.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_image` text NOT NULL,
  `news_description` text NOT NULL,
  `news_keywords` text NOT NULL,
  `news_ref_link` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_image`, `news_description`, `news_keywords`, `news_ref_link`, `date`) VALUES
(5, 'Co-Founders meet with Botswana Government', 'IMG_3817 (1).jpg', '                              \r\n                              Alkebulan Group Chairman Emile Heskey and CEO Davison Simango met with the Botswana High Commissioner to London His Execellency Hon, Rev John N Seaksing and International Trade Director Moemedi Mokgosi to disscuss potential Investments to Botswana.                               \r\n                          ', '-', '-', '2020-02-19'),
(6, 'Ex England striker Emile Heskey wants to', 'logo21.png', '                              \r\n                              Former England striker, Emile Heskey, is planning to invest in Zimbabwes energy sector.\r\n\r\nHeskey, who is a senior vice-president of Genoil, a Canadian company with interests in oil technology development, believes there are diverse areas of investment in Zimbabwes ailing economy.                              \r\n                          ', '-', 'https://asempanews.com/ex-england-striker-heskey-wants-to-light-up-zimbabwe/', '2020-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `newsimg`
--

CREATE TABLE `newsimg` (
  `n_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsimg`
--

INSERT INTO `newsimg` (`n_id`, `image`) VALUES
(10, '3d-model-2901886.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `partner_id` int(11) NOT NULL,
  `partner_name` varchar(255) NOT NULL,
  `partner_image` text NOT NULL,
  `partner_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`partner_id`, `partner_name`, `partner_image`, `partner_info`) VALUES
(2, 'British Jordanian Group Limited', 'logo2.png', '                              \r\n                                                            \r\n                              Sustainable Developments                       \r\n                                                        \r\n                          '),
(3, 'GenOil.ca', 'genoil.png', '                              \r\n           Energy infrastructure development                            \r\n                                                        \r\n                          ');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `portfolio_id` int(11) NOT NULL,
  `portfolio_title` varchar(255) NOT NULL,
  `portfolio_img` text NOT NULL,
  `portfolio_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`portfolio_id`, `portfolio_title`, `portfolio_img`, `portfolio_description`) VALUES
(1, 'AGRICULTURE', 'ooo.png', '                              \r\n                                                            \r\n                                \r\n                                                            \r\n                             \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                          '),
(3, 'ENERGY PLANT', 'ooo1.png', '                              \r\n                             \r\n                          '),
(4, 'Infrastructure', 'ooo1o4.png', '                              \r\n                            '),
(5, 'Oil & Gas', 'ooo1o41.png', '                              \r\n                                                    \r\n                          '),
(6, 'Renewable Energy', 'ooo1o411.png', '                              \r\n                            '),
(7, 'Healthcare', 'sdsdsd.png', '                              \r\n                                                            \r\n                                                            \r\n                                                            \r\n                                                            \r\n                                                                   \r\n                                                        \r\n                                                        \r\n                                                        \r\n                          '),
(9, 'Mining', 'ewewesd.png', '                              \r\n                           \r\n                          ');

-- --------------------------------------------------------

--
-- Table structure for table `projectimg`
--

CREATE TABLE `projectimg` (
  `p_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectimg`
--

INSERT INTO `projectimg` (`p_id`, `image`) VALUES
(10, '3d-model-2901886.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_title` varchar(255) DEFAULT NULL,
  `project_value` varchar(255) DEFAULT NULL,
  `project_scope` varchar(255) DEFAULT NULL,
  `project_detail` text,
  `project_img1` text,
  `project_client` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_title`, `project_value`, `project_scope`, `project_detail`, `project_img1`, `project_client`) VALUES
(5, 'Agriculture', 'Coming soon', '-', '                              \r\nFood program with the development of the agricultural projects in providing food security in needy areas in Africa;\r\n                            ', 'Agricu.jpg', '-'),
(6, 'Energy', 'Coming soon', '-', 'The availability of reliable, sustainable energy is vital to Africas economic and social development. The group is heavily involved in investments in renewable energy, energy generation, storage, conversion, distribution and trading.', 'energyygy.jpg', '-'),
(7, 'Infrastructure', 'Coming soon', '-', '                              \r\n                                                            \r\n                              Development of community housing, hotels, buildings and shopping centers, Telecommunication infrastructure development projectst and roads projects, Development of transportation, travel and tourism sector, 	Development of the educational sector for building schools and development and training centres for teachers, Funding all type of humanitarian projects sector of manufacturing and industrial projects which will help in job security for the public. \r\n\r\n                              \r\n                                                          \r\n                                                        \r\n                          ', 'Infrastr.jpg', '-'),
(8, 'Oil & Gas', 'Coming soon', '-', '                              \r\n                              Strategic allies and international clients in Europe, North America, Canada, Central America, the Caribbean and Africa for commercialization of D2, MGO, D6, IFO 380, Jet A1 as well as crude under different specifications towards refineries located in different countries. Financial and structural capacity for the purchase, sale, marketing and distribution of industrial equipment of high requirement, as well as raw oil and distilled products in different international markets; with the aim of strengthening the presence globally when completing negotiations, such as commercial ally to various customers in world markets.                              \r\n                              \r\n                                                        \r\n                          ', 'Oil.jpg', '-'),
(9, 'Banking', 'Coming soon', '-', 'Bank that makes it easy for enterprenuers to acquire funding for their projects and designed to make easy trading between african countries                            \r\n                              ', 'bank.jpg', '-'),
(10, 'Healthcare', 'Coming soon', '-', '                              \r\n                              Building Hospitals, supplying medicines and medical equipment                             \r\n                       \r\n                                                        \r\n                          ', 'Healthca.jpg', '-');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(11) NOT NULL,
  `slide1_text` varchar(255) NOT NULL,
  `slide1_subText` text NOT NULL,
  `slide1_image` text NOT NULL,
  `slide2_text` varchar(255) NOT NULL,
  `slide2_subText` text NOT NULL,
  `slide2_image` text NOT NULL,
  `slide3_text` varchar(255) NOT NULL,
  `slide3_subText` text NOT NULL,
  `slide3_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide1_text`, `slide1_subText`, `slide1_image`, `slide2_text`, `slide2_subText`, `slide2_image`, `slide3_text`, `slide3_subText`, `slide3_image`) VALUES
(11, 'ALKEBULAN GROUP', 'Transforming Lives', 'RenewableEnergy-min.jpg', 'Over â‚¬5 Billion', 'Working Capital', 'industry.jpeg', 'Professional Team', '30 Years Experience', 'websiteslider.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutimg`
--
ALTER TABLE `aboutimg`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`background_id`);

--
-- Indexes for table `contactimg`
--
ALTER TABLE `contactimg`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `investment`
--
ALTER TABLE `investment`
  ADD PRIMARY KEY (`invest_id`);

--
-- Indexes for table `investmentimg`
--
ALTER TABLE `investmentimg`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `newsimg`
--
ALTER TABLE `newsimg`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`partner_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `projectimg`
--
ALTER TABLE `projectimg`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutimg`
--
ALTER TABLE `aboutimg`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `background_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactimg`
--
ALTER TABLE `contactimg`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `investment`
--
ALTER TABLE `investment`
  MODIFY `invest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `investmentimg`
--
ALTER TABLE `investmentimg`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `newsimg`
--
ALTER TABLE `newsimg`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `partner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `projectimg`
--
ALTER TABLE `projectimg`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
