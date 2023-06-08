-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 08:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plano`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `username`, `role`) VALUES
(1, 'Rishad Islam', 'rishadislam6790@gmail.com', 'wdrishad', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(500) DEFAULT NULL,
  `blog_short` varchar(1000) DEFAULT NULL,
  `blog_des` varchar(10000) DEFAULT NULL,
  `blog_image` text DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_short`, `blog_des`, `blog_image`, `username`) VALUES
(1, 'Property Blog', 'rem Ipsum is simply dummy text of the printing and typesetting industry. Lorem', 'rem Ipsum is simply dummy text of the printing and typesetting industry. Lorem', 'IMG-6278c52ee92383.76798246.png', 'admin'),
(2, 'Dhaka', 'rem Ipsum is simply dummy text of the printing and typesetting industry. Lorem', 'rem Ipsum is simply dummy text of the printing and typesetting industry. Lorem', 'IMG-6278c5e28cc5f0.40443671.png', 'admin'),
(3, 'New Property', '1500', 'dfalkfjdalkjfdlkajslkj', 'IMG-6278cdbf711cb3.21112881.png', 'admin'),
(4, 'New Property', '1500', '454554', 'IMG-6278debf46d4d5.43177760.png', 'admin'),
(5, 'New Property', '1500', 'dfalkfjdalkjfdlkajslkj', 'IMG-62889b088149e6.66586780.png', 'admin'),
(6, 'Dhaka', 'rem Ipsum is simply dummy text of the printing and typesetting industry. Lorem', 'dfalkfjdalkjfdlkajslkj', 'IMG-62889b116f82a4.29234261.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `incomming_msg_username` varchar(100) NOT NULL,
  `outgoing_msg_id` int(11) NOT NULL,
  `message` longtext DEFAULT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `number` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `incomming_msg_username`, `outgoing_msg_id`, `message`, `name`, `email`, `number`) VALUES
(6, 'customer', 73, 'I love this property', 'Rishad', 'wdrishad@gmail.com', '01581558961'),
(7, 'customer', 73, 'I love this property', 'Tamim', 'tahomidislam53@gmail.com', '01581558968'),
(8, 'customer', 73, 'I love this property', 'Tamim', 'tahomidislam53@gmail.com', '01581558968'),
(9, 'customer', 73, 'This is good', 'Md. Rishad Islam', 'mislam191134@bscse.uiu.ac.bd', '01581558961'),
(10, 'customer', 78, 'This is good', 'Hostel Wala', 'mislam191134@bscse.uiu.ac.bd', '01581558961'),
(11, 'customer', 73, 'hello', 'Rishad Islam', 'eshopier2021@gmail.com', '01705978622'),
(12, 'customer', 73, 'dfd', 'Rishad Islam', 'eshopier2021@gmail.com', '01705978622');

-- --------------------------------------------------------

--
-- Table structure for table `comm`
--

CREATE TABLE `comm` (
  `comm_id` int(11) NOT NULL,
  `comm_name` varchar(100) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL,
  `comm_des` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comm`
--

INSERT INTO `comm` (`comm_id`, `comm_name`, `property_id`, `comm_des`, `email`) VALUES
(1, 'Rishad', 73, 'Nice Hostel', 'wdrishad@gmail.com'),
(2, 'Md. Rishad Islam', 73, 'Bad Impression', 'mislam191134@bscse.uiu.ac.bd');

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `developer_username` varchar(100) DEFAULT NULL,
  `developer_id` int(11) NOT NULL,
  `developer_name` varchar(100) DEFAULT NULL,
  `developer_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`developer_username`, `developer_id`, `developer_name`, `developer_number`) VALUES
('developer', 1, 'Rishad', 1705978622);

-- --------------------------------------------------------

--
-- Table structure for table `floor_image`
--

CREATE TABLE `floor_image` (
  `floor_plan` text DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `floor_image`
--

INSERT INTO `floor_image` (`floor_plan`, `id`) VALUES
('IMG-627f1fcc616c74.42154826.png', 73),
('IMG-627f1ff59bd622.85163460.png', 74),
('IMG-627f2018a4d443.73131343.jpg', 75),
('IMG-627f215646b427.05635751.png', 76),
('IMG-627f2176125394.00861965.png', 77),
('IMG-62866cc851b3a3.72985571.jpg', 78),
('IMG-62868952020bd4.48569750.jpg', 79),
('IMG-6286b4129b3d11.44021351.jpg', 80),
('IMG-6286b796d16717.57508381.jpg', 81),
('IMG-6286b831792063.61244236.jpg', 82);

-- --------------------------------------------------------

--
-- Table structure for table `gallary_image`
--

CREATE TABLE `gallary_image` (
  `id` int(11) DEFAULT NULL,
  `file_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallary_image`
--

INSERT INTO `gallary_image` (`id`, `file_name`) VALUES
(73, 'IMG-627f1fdb928e35.57527685.jpg'),
(74, 'IMG-627f20011b9e07.98611267.jpg'),
(75, 'IMG-627f2023082c90.99864281.jpg'),
(76, 'IMG-627f21635c6212.61731801.jpg'),
(77, 'IMG-627f2184eb90a0.30731629.jpg'),
(78, 'IMG-62866cd1616fc2.41854582.jpg'),
(79, 'IMG-6286895a23b2f8.94919099.jpg'),
(80, 'IMG-6286b41f2931b1.25441771.jpg'),
(81, 'IMG-6286b79ebc1179.23824878.jpg'),
(82, 'IMG-6286b83659b9e6.29992554.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `location_image`
--

CREATE TABLE `location_image` (
  `location_map` text DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location_image`
--

INSERT INTO `location_image` (`location_map`, `id`) VALUES
('IMG-627f1fd66a76b1.33176503.jpg', 73),
('IMG-627f1ffbc54368.21504556.jpg', 74),
('IMG-627f201dbdbfc9.82229359.png', 75),
('IMG-627f215a4e57c0.96642977.jpg', 76),
('IMG-627f217d16e476.15343941.jpg', 77),
('IMG-62866ccd392949.88938942.jpg', 78),
('IMG-628689560b9e18.37639834.jpg', 79),
('IMG-6286b41720aec2.09048534.jpg', 80),
('IMG-6286b79ad0fe96.56166483.jpg', 81),
('IMG-6286b82def6480.49301309.jpg', 82);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_gateway` varchar(100) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL,
  `payment_ammount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(11) NOT NULL,
  `property_name` varchar(100) DEFAULT NULL,
  `property_description` longtext DEFAULT NULL,
  `property_price` int(11) DEFAULT NULL,
  `property_status` varchar(100) DEFAULT NULL,
  `property_type` varchar(100) DEFAULT NULL,
  `sub_proper` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `city` varchar(1000) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `construction_status` varchar(1000) DEFAULT NULL,
  `property_size` float DEFAULT NULL,
  `admin_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `property_name`, `property_description`, `property_price`, `property_status`, `property_type`, `sub_proper`, `username`, `city`, `address`, `construction_status`, `property_size`, `admin_status`) VALUES
(73, 'Property 01', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 78945, 'sell', 'commercial', 'independent_house', 'seller', 'dhaka', 'Dhaka', 'under construction', 1500, 1),
(74, 'property 02', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 15000, 'sell', 'land', 'duplex_home', 'seller', 'khulna', 'Khulna', 'ready', 1200, 1),
(75, 'Property 03', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 50000, 'rent', 'commercial', 'appartment', 'seller', 'chittagong', 'Chittagong Sadar, Chittagong', 'ready', 1700, 1),
(76, 'Property 04', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 2500000, 'rent', 'commercial', 'office_space', 'seller02', 'rajshahi', 'Rajshahi', 'under construction', 1800, 1),
(77, 'Property 05', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 20000, 'sell', 'residential', 'land_sharing_flat', 'seller02', 'gazipur', 'Gazipur', 'almost ready', 1200, 1),
(78, 'rishad', 'sadf', 15468, 'sell', 'residential', 'appartment', 'seller02', 'dhaka', 'asdfasdfasdf', 'ready', 1200, 1),
(79, 'new blog', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 25896, 'sell', 'residential', 'appartment', 'seller02', 'dhaka', 'Dhaka', 'ready', 1200, 1),
(80, 'Property 06', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 500000, 'sell', 'residential', 'duplex_home', 'seller', 'dhaka', 'Dhaka', 'ready', 1200, 1),
(81, 'new blog 01', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 1254, 'sell', 'residential', 'land_sharing_flat', 'seller', 'dhaka', 'Dhaka', 'ready', 1200, 1),
(82, 'new blog 02', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 12345, 'sell', 'residential', 'independent_house', 'seller', 'dhaka', 'Dhaka', 'ready', 1200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `property_additional_information`
--

CREATE TABLE `property_additional_information` (
  `floor_available` varchar(100) DEFAULT NULL,
  `total_floor` int(11) DEFAULT NULL,
  `facing` varchar(100) DEFAULT NULL,
  `handover_date` date DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_additional_information`
--

INSERT INTO `property_additional_information` (`floor_available`, `total_floor`, `facing`, `handover_date`, `username`, `id`) VALUES
('1st Floor', 3, 'South Facing', '2022-05-03', 'seller', 73),
('3rd Floor', 3, 'East Facing', '2022-06-01', 'seller', 74),
('2nd Floor', 4, 'West Facing', '2022-05-18', 'seller', 75),
('1st Floor', 4, 'North Facing', '2022-06-01', 'seller02', 76),
('2nd Floor', 5, 'West Facing', '2022-05-24', 'seller02', 77),
('1st Floor', 5, 'North Facing', '2022-05-18', 'seller02', 78),
('Ground', 1, 'South Facing', '0000-00-00', 'seller02', 79),
('Ground', 1, 'South Facing', '2022-05-25', 'seller', 80),
('Ground', 1, 'South Facing', '0000-00-00', 'seller', 81),
('Ground', 1, 'South Facing', '0000-00-00', 'seller', 82);

-- --------------------------------------------------------

--
-- Table structure for table `property_basic_feature`
--

CREATE TABLE `property_basic_feature` (
  `bedroom` int(11) DEFAULT NULL,
  `bathroom` int(11) DEFAULT NULL,
  `balconies` int(11) DEFAULT NULL,
  `garages` int(11) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_basic_feature`
--

INSERT INTO `property_basic_feature` (`bedroom`, `bathroom`, `balconies`, `garages`, `username`, `id`) VALUES
(1, 1, 1, 1, 'seller', 73),
(2, 2, 3, 2, 'seller', 74),
(2, 2, 1, 2, 'seller', 75),
(2, 2, 1, 1, 'seller02', 76),
(2, 2, 2, 2, 'seller02', 77),
(1, 1, 1, 1, 'seller02', 77),
(2, 1, 2, 2, 'seller02', 78),
(2, 1, 0, 0, 'seller02', 79),
(1, 1, 0, 0, 'seller', 80),
(1, 1, 0, 0, 'seller', 81),
(1, 1, 0, 0, 'seller', 82);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(0, 'admin'),
(1, 'seller'),
(2, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `signup_id` int(11) NOT NULL,
  `signup_name` varchar(100) DEFAULT NULL,
  `signup_username` varchar(100) DEFAULT NULL,
  `signup_email` varchar(100) DEFAULT NULL,
  `signup_number` varchar(100) DEFAULT NULL,
  `signup_password` varchar(100) DEFAULT NULL,
  `signup_address` varchar(100) DEFAULT NULL,
  `signup_role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`signup_id`, `signup_name`, `signup_username`, `signup_email`, `signup_number`, `signup_password`, `signup_address`, `signup_role`) VALUES
(24, 'Seller Rahman', 'seller', 'eshopier2021@gmail.com', '1980793946', '81dc9bdb52d04dc20036dbd8313ed055', 'Kurigram Sadar', 1),
(25, 'Customer Islam', 'customer', 'wdrishad@gmail.com', '1705978622', '81dc9bdb52d04dc20036dbd8313ed055', 'Kurigram Sadar', 2),
(26, 'Admin Islam', 'admin', 'wdrishad23@gmail.com', '178956201', '81dc9bdb52d04dc20036dbd8313ed055', 'Dhaka, Bangladesh', 0),
(27, 'Md. Rishad Islam', 'seller02', 'mislam191134@bscse.uiu.ac.bd', '1580376447', '81dc9bdb52d04dc20036dbd8313ed055', 'Dhaka', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `comm`
--
ALTER TABLE `comm`
  ADD PRIMARY KEY (`comm_id`);

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`developer_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`signup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comm`
--
ALTER TABLE `comm`
  MODIFY `comm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
  MODIFY `developer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `signup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
