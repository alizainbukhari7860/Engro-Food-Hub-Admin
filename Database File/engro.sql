-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 03:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `engro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('alizainbukhari7860@gmail.com', 'ali123');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `name`, `Menu`) VALUES
(1, 'Paratha', 2),
(2, 'Eggs', 2),
(3, 'Curry', 2),
(4, 'Toast', 2),
(5, 'Beverages and Coffee', 2),
(6, 'Halwa Poori', 2),
(7, 'Milk', 2),
(11, 'Chips', 4),
(14, 'Soup', 4),
(15, 'Main', 4),
(16, 'Sides & Salads', 4),
(17, 'Platter', 4),
(18, 'Burgers', 4),
(19, 'sandwiches', 4),
(20, 'Supplementory', 4),
(21, 'Beverages', 4),
(22, 'BBQ', 16),
(23, 'Burgers', 16),
(24, 'sandwiches', 16),
(25, 'Supplementory', 16),
(26, 'Beverages', 16),
(27, 'Soup', 22),
(28, 'Main', 43),
(29, 'Main', 22),
(30, 'Sides & Salads', 22),
(31, 'Platter', 22),
(32, 'Burgers', 22),
(33, 'sandwiches', 22),
(34, 'Supplementory', 22),
(35, 'Beverages', 22),
(36, 'Main', 13),
(37, 'Soup', 13),
(38, 'Sides & Salads', 13),
(39, 'Platter', 13),
(40, 'Burgers', 13),
(41, 'sandwiches', 13),
(42, 'Supplementory', 13),
(43, 'sandwiches', 13),
(44, 'Beverages', 13),
(45, 'Soup', 7),
(46, 'Main', 7),
(47, 'Sides & Salads', 7),
(48, 'Platter', 7),
(49, 'Burgers', 7),
(50, 'sandwiches', 7),
(51, 'Supplementory', 7),
(52, 'Beverages', 7),
(53, 'Soup', 10),
(54, 'Sides & Salads', 10),
(55, 'Platter', 10),
(56, 'Burgers', 10),
(57, 'sandwiches', 10),
(58, 'Supplementory', 10),
(59, 'Beverages', 10),
(60, 'Soup', 19),
(61, 'Sides & Salads', 19),
(62, 'Platter', 19),
(63, 'Burgers', 19),
(64, 'sandwiches', 19),
(65, 'Supplementory', 19),
(66, 'Beverages', 19),
(67, 'Main', 10),
(68, 'Item 1', 44),
(69, 'Item 2', 44),
(70, 'Item 1', 45),
(71, 'Item 2', 45),
(72, 'Item 1', 46),
(73, 'Item 2', 46),
(74, 'Item 1', 47),
(75, 'Item 2', 47),
(76, 'Item 1', 47),
(77, 'Item 2', 47),
(78, 'Item 1', 48),
(79, 'Item 2', 48),
(80, 'Item 1', 49),
(81, 'Item 2', 49),
(82, 'Item 1', 50),
(83, 'Item 2', 50),
(84, 'Item 1', 51),
(85, 'Item 2', 51),
(86, 'Item 1', 52),
(87, 'Item 2', 52),
(88, 'Item 1', 53),
(89, 'Item 2', 52),
(90, 'Item 1', 53),
(91, 'Item 2', 53),
(92, 'Item 1', 54),
(93, 'Item 2', 54),
(94, 'Item 1', 55),
(95, 'Item 2', 55),
(96, 'Item 1', 56),
(97, 'Item 2', 56),
(98, 'Item 1', 57),
(99, 'Item 2', 57),
(100, 'Main', 19),
(101, 'BBQ', 16),
(102, 'Main Course', 3),
(103, 'Side', 3),
(104, 'Rice', 3),
(105, 'Salad', 3),
(106, 'Main Course', 6),
(107, 'Side', 6),
(108, 'Rice', 6),
(109, 'Salad', 6),
(110, 'Main Course', 9),
(111, 'Side', 9),
(112, 'Rice', 9),
(113, 'Dessert', 9),
(114, 'Salad', 9),
(115, 'Main Course', 12),
(116, 'Side', 12),
(117, 'Rice', 12),
(118, 'Salad', 12),
(119, 'Main Course', 15),
(120, 'Main Course', 18),
(121, 'Side', 18),
(122, 'Rice', 18),
(123, 'Salad', 18),
(124, 'Main Course', 21),
(125, 'Side', 21),
(126, 'Rice', 21),
(127, 'Dessert', 21),
(128, 'Salad', 21),
(129, 'Main Course', 24),
(130, 'Side', 24),
(131, 'Rice', 24),
(132, 'Salad', 24),
(133, 'Main Course', 27),
(134, 'Side', 27),
(135, 'Rice', 27),
(136, 'Salad', 27),
(137, 'Main Course', 30),
(138, 'Side', 30),
(139, 'Rice', 30),
(140, 'Dessert', 30),
(141, 'Salad', 30),
(142, 'Main Course', 33),
(143, 'Side', 33),
(144, 'Rice', 33),
(145, 'Salad', 33),
(146, 'Main Course', 36),
(147, 'Main Course', 39),
(148, 'Side', 39),
(149, 'Rice', 39),
(150, 'Salad', 39),
(151, 'Main Course', 42),
(152, 'Side', 42),
(153, 'Rice', 42),
(154, 'Dessert', 42),
(155, 'Salad', 42);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Category` int(11) NOT NULL,
  `PreparationTime` int(11) NOT NULL,
  `Calories` int(11) DEFAULT NULL,
  `isDelete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ID`, `Name`, `Price`, `Category`, `PreparationTime`, `Calories`, `isDelete`) VALUES
(6, 'Milk', 25, 7, 5, 149, 0),
(9, 'Toast', 7, 4, 5, 78, 0),
(10, 'French Toast', 15, 4, 5, 149, 0),
(11, 'Butter Toast with Jam', 20, 4, 5, 356, 0),
(12, 'Aloo Tarkari', 35, 3, 7, 474, 0),
(13, 'Channa Tarkari', 35, 3, 7, 169, 0),
(14, 'Nehari', 75, 3, 10, 170, 0),
(15, 'Haleem', 50, 3, 10, 270, 0),
(16, 'Paya Salan', 250, 3, 10, 193, 0),
(17, 'Mixed Tea', 20, 5, 5, 200, 0),
(18, 'Green Tea', 15, 5, 5, 2, 0),
(19, 'Mineral Water', 30, 5, 1, 0, 0),
(20, 'Halwa Poori Channy', 25, 6, 5, 393, 0),
(34, 'Chicken Corn Soup', 60, 14, 5, 485, 0),
(35, 'Chicken Bukhara Masala', 140, 15, 15, 450, 0),
(36, 'Chicken Chowmein', 140, 15, 15, 295, 0),
(37, 'Vegetable Fried Rice', 40, 16, 10, 280, 0),
(38, 'Aloo Methi', 45, 16, 10, 243, 0),
(39, 'Green Vinegar salad', 20, 16, 10, 124, 0),
(40, 'Chickpeas Greek salad', 45, 16, 10, 218, 0),
(41, 'HP1 (Chicken Bukhara Masala, Aloo Methi, Green Vinegar Salad, Rice or Roti)', 140, 17, 30, 750, 0),
(42, 'HP2 (Chicken Chowmein, Aloo Methi, Green Vinegar Salad, Rice or Roti)', 160, 17, 30, 750, 0),
(43, 'Chicken Burger', 115, 18, 15, 540, 0),
(44, 'Chicken Cheese Burger', 130, 18, 15, 650, 0),
(45, 'Zinger Burger', 145, 18, 17, 543, 0),
(46, 'Fish Burger', 155, 18, 17, 374, 0),
(47, 'Fish Cheese Burger', 165, 18, 20, 484, 0),
(48, 'Potato Wedges', 20, 18, 10, 270, 0),
(49, 'Chicken Cheese Sandwich', 65, 19, 15, 511, 0),
(50, 'Club Sandwich', 80, 19, 15, 817, 0),
(51, 'Zinger Sandwich', 110, 19, 15, 480, 0),
(52, 'Veggie Sandwich', 60, 19, 15, 560, 0),
(53, 'Chicken Steak', 125, 20, 25, 284, 0),
(54, 'Grilled Fish', 150, 20, 20, 84, 0),
(55, 'Daal Mix', 30, 20, 10, 132, 0),
(56, 'Daal Makhni', 70, 20, 10, 278, 0),
(57, 'Steak Curry', 110, 20, 20, 266, 0),
(58, 'Stir Fried Vegetable', 60, 20, 15, 170, 0),
(59, 'Cheese Omelet', 30, 20, 15, 407, 0),
(60, 'Sausages & Cheese Omelet', 45, 20, 20, 617, 0),
(61, 'Soft  Drink', 40, 21, 2, 160, 0),
(62, 'Fresh Lime', 6, 21, 2, 175, 0),
(63, 'Orange Juice', 40, 21, 5, 160, 0),
(64, 'Green Tea', 6, 21, 5, 2, 0),
(65, 'Seperate Tea', 10, 21, 5, 5, 0),
(66, 'Mix Tea', 20, 21, 5, 200, 0),
(67, 'Coffee', 35, 21, 7, 10, 0),
(68, 'Date/Banana Shake', 45, 21, 5, 1062, 0),
(69, 'Nestle Juice', 30, 21, 2, 128, 0),
(70, 'Chicken Vegetable Soup', 60, 45, 10, 170, 0),
(71, 'Smoked mutton yogurt', 180, 46, 20, 317, 0),
(72, 'Steam Roast', 125, 46, 25, 146, 0),
(73, 'Indian Baked Rice', 40, 47, 15, 678, 0),
(74, 'Mix Green Masala Daal', 60, 47, 15, 128, 0),
(75, 'Corn Cucumber Salad', 45, 47, 10, 19, 0),
(76, 'Chicken and Vegetable soup', 60, 45, 10, 285, 0),
(77, 'Smoked mutton yogurt', 180, 46, 20, 317, 0),
(78, 'Steam Roast', 125, 46, 15, 146, 0),
(79, 'Indian Baked Rice', 40, 46, 15, 678, 0),
(80, 'Indian Baked Rice', 40, 47, 12, 678, 0),
(81, 'Mix Green Masala Daal', 60, 47, 15, 128, 0),
(82, 'Corn Cucumber Salad', 45, 47, 10, 19, 0),
(83, 'HP1 (Smoked Mutton Yogurt, Corn Cucumber, Rice or Roti)', 150, 48, 25, 750, 0),
(84, 'HP2 (Steam Roast, Corn Cucumber Salad, Mix Green Masala Daal)', 150, 48, 25, 750, 0),
(85, 'Chicken Burger', 115, 49, 15, 540, 0),
(86, 'Chicken Cheese Burger', 130, 49, 15, 650, 0),
(87, 'Zinger Burger', 145, 49, 15, 543, 0),
(88, 'Fish Burger', 155, 49, 15, 374, 0),
(89, 'Fish Cheese Burger', 165, 49, 13, 484, 0),
(90, 'Potato Wedges', 20, 49, 10, 270, 0),
(91, 'Chicken Cheese Sandwich', 65, 50, 10, 511, 0),
(92, 'Club Sandwich', 80, 50, 10, 817, 0),
(94, 'Zinger Sandwich', 110, 50, 10, 480, 0),
(95, 'Veggie Sandwich', 60, 50, 10, 560, 0),
(96, 'Chicken Steak', 125, 51, 10, NULL, 0),
(97, 'Grilled Fish', 150, 51, 10, 84, 0),
(98, 'Daal Mix', 30, 51, 10, 132, 0),
(99, 'Daal Makhni', 70, 51, 10, 278, 0),
(100, 'Steak Curry', 110, 51, 15, 266, 0),
(101, 'Stir Fried Vegetable', 60, 51, 15, 170, 0),
(102, 'Cheese Omelet', 30, 51, 12, 407, 0),
(103, 'Sausages & Cheese Omelet', 45, 51, 10, 617, 0),
(104, 'Soft Drink', 40, 52, 5, 160, 0),
(105, 'Fresh Lime', 6, 52, 2, 175, 0),
(106, 'Orange Juice', 40, 52, 5, 160, 0),
(107, 'Green Tea', 6, 52, 3, 2, 0),
(108, 'Seperate Tea', 10, 52, 5, 5, 0),
(109, 'Mix Tea', 20, 52, 5, 200, 0),
(110, 'Coffee', 35, 52, 7, 10, 0),
(111, 'Date/Banana Shake', 45, 52, 7, 1062, 0),
(112, 'Nestle Juice', 30, 52, 5, 128, 0),
(113, 'Hot & Sour Soup', 60, 53, 5, 90, 0),
(117, 'Minced Beef with Capsicum', 140, 67, 20, 334, 0),
(118, 'Nargisi Kofta', 140, 67, 20, 215, 0),
(119, 'Butter Corn Rice', 60, 54, 15, 130, 0),
(120, 'Shahi Mix Vegetable', 60, 54, 12, 341, 0),
(121, 'Harabhar Salad', 20, 54, 5, 500, 0),
(122, 'Chinese Chicken Salad', 40, 54, 10, 760, 0),
(123, 'HP1 (Minced Beef  with capsicum, Chinese Chicken Salad, Butter Corn Rice)', 160, 55, 30, 850, 0),
(124, 'HP2 (Nargisi Kofta, Shahi Mix Vegetable, Butter Corn Rice)', 140, 55, 30, 930, 0),
(125, 'Chicken Burger', 115, 56, 15, 540, 0),
(126, 'Chicken Cheese Burger', 130, 56, 15, 650, 0),
(127, 'Zinger Burger', 145, 56, 15, 543, 0),
(128, 'Fish Burger', 155, 56, 15, 374, 0),
(129, 'Fish Cheese Burger', 165, 56, 13, 484, 0),
(130, 'Chicken Cheese Sandwich', 65, 57, 15, 511, 0),
(131, 'Club Sandwich', 80, 57, 15, 817, 0),
(132, 'Zinger Sandwich', 110, 57, 13, 480, 0),
(133, 'Veggie Sandwich', 60, 57, 15, 560, 0),
(134, 'Chicken Steak', 125, 58, 10, 284, 0),
(135, 'Grilled Fish', 150, 58, 15, 84, 0),
(136, 'Daal Mix', 30, 58, 10, 132, 0),
(137, 'Daal Makhni', 70, 58, 10, 284, 0),
(138, 'Steak Curry', 110, 58, 10, 266, 0),
(139, 'Stir Fried Vegetable', 60, 58, 10, 170, 0),
(140, 'Cheese Omelet', 30, 58, 10, 407, 0),
(141, 'Sausages & Cheese Omelet', 45, 58, 10, 617, 0),
(142, 'Soft Drink', 40, 59, 5, 160, 0),
(143, 'Fresh Lime', 6, 59, 5, 175, 0),
(144, 'Orange Juice', 40, 59, 5, 160, 0),
(145, 'Green Tea', 6, 59, 5, 2, 0),
(146, 'Seperate Tea', 30, 59, 5, 5, 0),
(147, 'Mix Tea', 20, 59, 5, 200, 0),
(148, 'Coffee', 35, 59, 5, 10, 0),
(149, 'Date/Banana Shake', 45, 59, 5, 1062, 0),
(150, 'Nestle Juice', 30, 59, 5, 128, 0),
(151, 'Chicken Patties', 35, 68, 10, 287, 0),
(152, 'Fruit Tart', 30, 69, 10, 412, 0),
(153, 'Dahi Bhallay', 40, 70, 10, 394, 0),
(154, 'Chocolate Donut', 30, 71, 10, 400, 0),
(155, 'Chicken and Cheese Stick', 30, 72, 10, 70, 0),
(156, 'Lemon Roll', 25, 73, 10, 280, 0),
(157, 'Potato samosa', 10, 74, 10, 262, 0),
(158, 'Cream Muffin', 30, 75, 10, 496, 0),
(159, 'Chicken Drum Stick', 60, 78, 10, 159, 0),
(160, 'Chocolate-Chip Cookies', 30, 79, 10, 488, 0),
(161, 'Masala Beef Sandwich', 60, 80, 10, 466, 0),
(162, 'Oreo Pudding', 50, 81, 10, 200, 0),
(163, 'Nacho Chicken', 60, 82, 10, 399, 0),
(164, 'Custard Pie', 30, 83, 10, 210, 0),
(165, 'Chicken shami Kebab', 45, 84, 10, 99, 0),
(166, 'Lemon Tart', 20, 85, 10, 242, 0),
(167, 'Chana Chat', 50, 86, 10, 147, 0),
(168, 'Fruit Cake', 35, 87, 10, 324, 0),
(169, 'Rice & Chicken Meat Balls', 20, 88, 10, 340, 0),
(170, 'Pineapple Cream  Pastry', 25, 91, 10, 285, 0),
(171, 'Chicken Combo  Wings', 50, 92, 10, 150, 0),
(172, 'Chocolate Lava Cake', 60, 93, 10, 320, 0),
(173, 'Chicken and Cheese Wraps', 40, 94, 10, 230, 0),
(174, 'Chocolate Donut', 30, 95, 10, 400, 0),
(175, 'Shami Bun Kebab', 50, 96, 10, 80, 0),
(176, 'Blueberry Cheese Pudding', 50, 97, 10, 495, 0),
(177, 'Fried Chicken Sandwich', 60, 98, 10, 470, 0),
(178, 'Velvet-Chip Cookies', 50, 99, 10, 190, 0),
(179, 'Chicken Corn Soup', 60, 37, 10, 490, 0),
(180, 'Burgh Cholay', 120, 36, 5, 371, 0),
(181, 'Chicken Wings', 140, 36, 10, 203, 0),
(182, 'Zeera Rice', 40, 38, 10, 246, 0),
(183, 'Daal Mash Fried', 60, 38, 10, 161, 0),
(184, 'Kachumbar Salad', 20, 38, 10, 10, 0),
(186, 'HP2 (Chicken  Wings, Daal Mash Fried, Zeera Rice)', 140, 39, 30, 675, 0),
(187, 'HP1 (Burgh Cholay, Daal Mash Fried, Roti or Rice)', 120, 39, 30, 740, 0),
(188, 'Chicken  & Mashroom Soup', 60, 60, 10, 320, 0),
(189, 'Achari Hara Mutton', 180, 100, 10, 406, 0),
(190, 'Chicken Chilli Dry', 150, 100, 10, 285, 0),
(191, 'White Peas Pulao', 60, 61, 10, 194, 0),
(192, 'Fried Masala Arvi', 60, 61, 10, 194, 0),
(193, 'Black Beans and  Corn Salad', 40, 61, 10, 169, 0),
(194, 'Julienne Salad', 40, 61, 10, 73, 0),
(195, 'HP1 (Achari Hara Mutton, Fried Masala Arvi, White Peas Pulao, Black Beans and Corn Salad)', 170, 62, 30, 590, 0),
(196, 'HP2 (Chicken  Chilli Dry, White Peas Pulao, Black Beans and Corn Salad, Julienne Salad)', 160, 62, 30, 860, 0),
(197, 'Hot & Sour Soup', 60, 27, 10, 90, 0),
(198, 'Chicken Hydrabadi', 140, 29, 20, 544, 0),
(199, 'Mutton Chops', 140, 29, 20, 712, 0),
(200, 'Vegetable Fried Rice', 40, 30, 15, 280, 0),
(201, 'Palak Paneer', 60, 30, 15, 320, 0),
(202, 'Cucumber Greek salad', 20, 30, 10, 111, 0),
(203, 'Broccoli Apple Salad', 40, 30, 10, 55, 0),
(204, 'HP1 (Mutton Chops, Broccoli Apple Salad, Roti or Rice)', 150, 31, 30, 900, 0),
(205, 'HP2 (Chicken Hyderabadi, Cucumber Greek Salad, Roti or Rice)', 150, 31, 30, 780, 0),
(206, 'Chicken Burger', 115, 40, 10, 540, 0),
(207, 'Chicken Cheese Burger', 130, 40, 10, 650, 0),
(208, 'Zinger Burger', 145, 40, 10, 543, 0),
(209, 'Fish Burger', 155, 40, 10, 374, 0),
(210, 'Fish Cheese Burger', 165, 40, 15, 484, 0),
(211, 'Potato Wedges', 20, 40, 5, 270, 0),
(212, 'Chicken Cheese Sandwich', 65, 41, 10, 511, 0),
(213, 'Club Sandwich', 80, 41, 10, 817, 0),
(214, 'Zinger Sandwich', 110, 43, 10, 480, 0),
(215, 'Veggie Sandwich', 60, 43, 10, 560, 0),
(216, 'Chicken Steak', 125, 42, 10, 284, 0),
(217, 'Grilled Fish', 150, 42, 10, 84, 0),
(218, 'Daal Mix', 30, 42, 10, 132, 0),
(219, 'Daal Makhni', 70, 42, 10, 278, 0),
(220, 'Steak Curry', 110, 42, 10, 266, 0),
(221, 'Stir Fried Vegetable', 60, 42, 10, 170, 0),
(222, 'Cheese Omelet', 30, 42, 10, 407, 0),
(223, 'Sausages & Cheese Omelet', 45, 42, 15, 617, 0),
(224, 'Soft Drink', 40, 44, 5, 160, 0),
(225, 'Fresh Lime', 6, 44, 5, 175, 0),
(226, 'Orange Juice', 40, 44, 5, 160, 0),
(227, 'Green Tea', 6, 44, 5, 2, 0),
(228, 'Seperate Tea', 10, 44, 5, 5, 0),
(229, 'Mix Tea', 20, 44, 5, 200, 0),
(230, 'Coffee', 35, 44, 5, 10, 0),
(231, 'Date/Banana Shake', 45, 44, 5, 1062, 0),
(232, 'Nestle Juice', 30, 44, 5, 128, 0),
(233, 'Chicken Burger', 115, 23, 10, 540, 0),
(234, 'Chicken Cheese Burger', 130, 23, 10, 650, 0),
(235, 'Zinger Burger', 145, 23, 10, 543, 0),
(236, 'Fish Burger', 155, 23, 10, 374, 0),
(237, 'Fish Cheese Burger', 165, 23, 10, 484, 0),
(238, 'French Fries', 35, 23, 10, 370, 0),
(239, 'Potato Wedges', 20, 23, 10, 270, 0),
(240, 'Chicken Cheese Sandwich', 65, 24, 10, 511, 0),
(241, 'Club Sandwich', 80, 24, 10, 817, 0),
(242, 'Zinger Sandwich', 110, 24, 10, 480, 0),
(243, 'Shami Sandwich', 70, 24, 10, 410, 0),
(244, 'Veggie Sandwich', 60, 24, 10, 560, 0),
(245, 'Chicken Steak', 125, 25, 10, 284, 0),
(246, 'Grilled Fish', 150, 25, 10, 84, 0),
(247, 'Daal Mix', 30, 25, 10, 132, 0),
(248, 'Daal Makhni', 70, 25, 10, 278, 0),
(249, 'Steak Curry', 110, 25, 10, 266, 0),
(250, 'Stir Fried Vegetable', 60, 25, 10, 170, 0),
(251, 'Cheese Omelet', 30, 25, 10, 407, 0),
(252, 'Sausages & Cheese Omelet', 45, 25, 10, 617, 0),
(253, 'Soft Drink', 40, 26, 5, 160, 0),
(254, 'Fresh Lime', 6, 26, 5, 175, 0),
(255, 'Orange Juice', 40, 26, 5, 160, 0),
(256, 'Green Tea', 6, 26, 5, 2, 0),
(257, 'Seperate Tea', 10, 26, 5, 5, 0),
(258, 'Mix Tea', 20, 26, 5, 200, 0),
(259, 'Coffee', 35, 26, 5, 10, 0),
(260, 'Date/Banana Shake', 45, 26, 5, 1062, 0),
(261, 'Nestle Juice', 30, 26, 5, 128, 0),
(262, 'Chicken Burger', 115, 63, 10, 540, 0),
(263, 'Chicken Cheese Burger', 130, 63, 10, 650, 0),
(264, 'Zinger Burger', 145, 63, 10, 543, 0),
(265, 'Fish Burger', 155, 63, 10, 374, 0),
(266, 'Fish Cheese Burger', 165, 63, 10, 484, 0),
(267, 'French Fries', 35, 63, 5, 370, 0),
(268, 'Potato Wedges', 20, 63, 5, 270, 0),
(269, 'Chicken Cheese Sandwich', 65, 64, 10, 511, 0),
(270, 'Club Sandwich', 80, 64, 10, 817, 0),
(271, 'Zinger Sandwich', 110, 64, 10, 480, 0),
(272, 'Shami Sandwich', 70, 64, 10, 410, 0),
(273, 'Veggie Sandwich', 60, 64, 10, 560, 0),
(274, 'Chicken Steak', 125, 65, 10, 284, 0),
(275, 'Grilled Fish', 150, 65, 10, 84, 0),
(276, 'Daal Mix', 30, 65, 10, 132, 0),
(277, 'Daal Makhni', 70, 65, 10, 278, 0),
(278, 'Steak Curry', 110, 65, 10, 266, 0),
(279, 'Stir Fried Vegetable', 60, 65, 10, 170, 0),
(280, 'Cheese Omelet', 30, 65, 10, 407, 0),
(281, 'Sausages & Cheese Omelet', 45, 65, 10, 617, 0),
(282, 'Soft Drink', 40, 66, 5, 160, 0),
(283, 'Fresh Lime', 6, 66, 5, 175, 0),
(284, 'Orange Juice', 40, 66, 5, 160, 0),
(285, 'Green Tea', 6, 66, 5, 2, 0),
(286, 'Green Tea', 6, 66, 5, 2, 0),
(287, 'Seperate Tea', 100, 66, 5, 5, 0),
(288, 'Mix Tea', 20, 66, 5, 200, 0),
(289, 'Coffee', 35, 66, 5, 10, 0),
(290, 'Date/Banana Shake', 45, 66, 5, 1062, 0),
(291, 'Nestle Juice', 30, 66, 5, 128, 0),
(292, 'Chicken Burger', 115, 32, 10, 540, 0),
(293, 'Chicken Cheese Burger', 130, 32, 10, 650, 0),
(294, 'Zinger Burger', 145, 32, 10, 543, 0),
(295, 'Fish Burger', 155, 32, 10, 374, 0),
(296, 'Fish Cheese Burger', 165, 32, 10, 484, 0),
(297, 'French Fries', 35, 32, 10, 370, 0),
(298, 'Potato Wedges', 20, 32, 10, 270, 0),
(299, 'Chicken Cheese Sandwich', 65, 33, 10, 511, 0),
(300, 'Club Sandwich', 80, 33, 10, 817, 0),
(301, 'Zinger Sandwich', 110, 33, 10, 480, 0),
(302, 'Shami Sandwich', 70, 33, 10, 410, 0),
(303, 'Veggie Sandwich', 60, 33, 10, 560, 0),
(304, 'Chicken Steak', 125, 34, 10, 284, 0),
(305, 'Grilled Fish', 150, 34, 10, 84, 0),
(306, 'Daal Mix', 30, 34, 10, 132, 0),
(307, 'Daal Makhni', 70, 34, 10, 278, 0),
(308, 'Steak Curry', 110, 34, 10, 266, 0),
(309, 'Stir Fried Vegetable', 60, 34, 10, 170, 0),
(310, 'Cheese Omelet', 30, 34, 10, 407, 0),
(311, 'Sausages & Cheese Omelet', 45, 34, 10, 617, 0),
(312, 'Soft Drink', 40, 35, 5, 160, 0),
(313, 'Fresh Lime', 6, 35, 5, 175, 0),
(314, 'Orange Juice', 40, 35, 5, 160, 0),
(315, 'Green Tea', 6, 35, 5, 2, 0),
(316, 'Seperate Tea', 10, 35, 5, 5, 0),
(317, 'Mix Tea', 20, 35, 5, 200, 0),
(318, 'Coffee', 35, 35, 5, 10, 0),
(319, 'Date/Banana Shake', 45, 35, 5, 1062, 0),
(320, 'Nestle Juice', 30, 35, 5, 128, 0),
(321, 'Smoked Beef Mince', 120, 102, 20, 308, 0),
(322, 'Spaghetti Bolonisge', 80, 102, 15, 670, 0),
(323, 'Mutton Joint', 180, 103, 15, 250, 0),
(324, 'Butter Garlic Rice', 60, 104, 15, 506, 0),
(325, 'Honey mustard nuggets salad', 60, 105, 10, 330, 0),
(326, 'Bhuna Mutton Ghosht', 180, 106, 20, 973, 0),
(327, 'Lahori fish Fry', 250, 106, 15, 255, 0),
(328, 'Teriyaki Chicken Wings', 120, 107, 15, 50, 0),
(329, 'Vegetable Fried Rice', 50, 108, 15, 279, 0),
(330, 'Corn Cucumber Salad', 40, 109, 10, 171, 0),
(331, 'Chicken Tikka Handi', 150, 110, 20, 148, 0),
(332, 'Murgh Cholay', 140, 110, 15, 371, 0),
(333, 'Mix Vegetable', 60, 111, 15, 37, 0),
(334, 'Zeera Rice', 50, 112, 15, 246, 0),
(335, 'Trifle', 50, 113, 10, 300, 0),
(336, 'Chinese Chicken Salad', 60, 114, 10, 960, 0),
(337, 'Chicken White Karahi', 150, 115, 20, 225, 0),
(338, 'Greek Chicken Pasta', 120, 115, 15, 530, 0),
(339, 'Chicken Wings', 150, 116, 15, 86, 0),
(340, 'Butter Garlic Rice', 60, 117, 15, 270, 0),
(341, 'Fruit with Maple Lime Salad', 40, 118, 10, 155, 0),
(342, 'Chicken Stagonoff', 140, 120, 15, 156, 0),
(343, 'Dhaka Chicken', 140, 120, 15, 288, 0),
(344, 'Daal Mix Masala', 60, 121, 10, 153, 0),
(345, 'Vegetable Fried Rice', 60, 122, 15, 279, 0),
(346, 'Mediterranean Chickpea Salad', 60, 123, 10, 142, 0),
(347, 'Mutton Achari', 180, 124, 20, 310, 0),
(348, 'Daal Mash Fried', 60, 124, 10, 153, 0),
(349, 'English Steam Roast', 130, 125, 15, 110, 0),
(350, 'Zeera Rice', 50, 126, 15, 246, 0),
(351, 'Shahi Tukray', 50, 127, 15, 469, 0),
(352, 'Grilled Chicken Ceasar Salad', 60, 128, 10, 440, 0),
(353, 'Chicken Mughlai', 150, 129, 15, 293, 0),
(354, 'Spaghetti with Tendor pops', 120, 129, 15, 548, 0),
(355, 'Aloo Methi', 60, 130, 15, 243, 0),
(356, 'Butter Steam Rice', 60, 131, 15, 77, 0),
(357, 'Cucumber Greek salad', 40, 132, 10, 121, 0),
(358, 'Balti Chicken ', 140, 133, 15, 350, 0),
(359, 'Chicken Chilli Dry', 120, 133, 15, 285, 0),
(360, 'Vegetable Macaroni', 100, 134, 15, 161, 0),
(361, 'Corn Fried Rice', 60, 135, 15, 97, 0),
(362, 'Broccoli Apple Salad', 40, 136, 10, 82, 0),
(363, 'Patiala Chicken', 140, 137, 15, 315, 0),
(364, 'Finger Fish', 150, 137, 15, 249, 0),
(365, 'Kaly Chany', 60, 138, 15, 370, 0),
(366, 'White Rice', 40, 139, 10, 130, 0),
(367, 'Mousse', 50, 140, 15, 225, 0),
(368, 'Macaroni Salad', 60, 141, 10, 99, 0),
(369, 'Chicken Malai Handi', 150, 142, 20, 478, 0),
(370, 'Fried Spring Chicken', 130, 142, 15, 348, 0),
(371, 'Stir Fried paneer and Vegettable', 60, 143, 15, 339, 0),
(372, 'Zeera Rice', 50, 144, 15, 246, 0),
(373, 'Chicken Walnut Salad', 60, 145, 10, 331, 0),
(374, 'Chicken Biryani', 130, 147, 20, 492, 0),
(375, 'Galouti Kebab', 140, 147, 15, 110, 0),
(376, 'Mix Vegetable', 60, 148, 15, 37, 0),
(377, 'Kachumbar Salad', 40, 150, 10, 10, 0),
(378, 'Zeera Rice', 50, 149, 15, 246, 0),
(379, 'Chicken Manchurian', 140, 151, 15, 566, 0),
(380, 'Daal Chana Masala', 60, 151, 15, 244, 0),
(381, 'English Steam Roast', 130, 152, 15, 110, 0),
(382, 'Egg Fried Rice', 50, 153, 15, 163, 0),
(383, 'Custard', 50, 154, 15, 122, 0),
(384, 'Black Beans and  Corn Salad', 40, 155, 10, 137, 0);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `UserVehicleRegistrationNo` varchar(255) NOT NULL,
  `PersonalNumber` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `isDelete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `Username`, `Email`, `Password`, `date`, `UserVehicleRegistrationNo`, `PersonalNumber`, `Address`, `Designation`, `PhoneNumber`, `isDelete`) VALUES
(28, 'Ali Zain', 'alizainbukhari7860@gmail.com', 'ali123', '2020-08-11', 'Br-550', 5473, 'Lahore', 'Internee', '03053207778', 0),
(29, 'Wajid', 'wajid@gmail.com', '123123', '2020-08-08', '123', 123123, '...', 'dpo', '123123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `Name`) VALUES
(2, 'Week 1-Monday Breakfast'),
(3, 'Week 1-Monday Lunch'),
(4, 'Monday Dinner'),
(5, 'Week 1-Tuesday Breakfast'),
(6, 'Week 1-Tuesday Lunch'),
(7, 'Tuesday Dinner'),
(8, 'Week 1-Wednesday Breakfast'),
(9, 'Week 1-Wednesday Lunch'),
(10, 'Dinner'),
(11, 'Week 1-Thursday Breakfast'),
(12, 'Week 1-Thursday Lunch'),
(13, 'Thursday Dinner'),
(14, 'Week 1-Friday Breakfast'),
(15, 'Week 1-Friday Lunch'),
(16, 'Friday Dinner'),
(17, 'Week 1-Saturday Breakfast'),
(18, 'Week 1-Saturday Lunch'),
(19, 'Saturday Dinner'),
(20, 'Week 1-Sunday Breakfast'),
(21, 'Week 1-Sunday Lunch'),
(22, 'Sunday Dinner'),
(23, 'Week 2-Monday Breakfast'),
(24, 'Week 2-Monday Lunch'),
(26, 'Week 2-Tuesday Breakfast'),
(27, 'Week 2-Tuesday Lunch'),
(29, 'Week 2-Wednesday Breakfast'),
(30, 'Week 2-Wednesday Lunch'),
(32, 'Week 2-Thursday Breakfast'),
(33, 'Week 2-Thursday Lunch'),
(35, 'Week 2-Friday Breakfast'),
(36, 'Week 2-Friday Lunch'),
(38, 'Week 2-Saturday Breakfast'),
(39, 'Week 2-Saturday Lunch'),
(41, 'Week 2-Sunday Breakfast'),
(42, 'Week 2-Sunday Lunch'),
(44, 'Week 1-Monday Snacks'),
(45, 'Week 1-Tuesday Snacks'),
(46, 'Week 1-Wednesday Snacks'),
(47, 'Week 1-Thursday Snacks'),
(48, 'Week 1-Friday Snacks'),
(49, 'Week 1-Saturday Snacks'),
(50, 'Week 1-Sunday Snacks'),
(51, 'Week 2-Monday Snacks'),
(52, 'Week 2-Tuesday Snacks'),
(53, 'Week 2-Wednesday Snacks'),
(54, 'Week 2-Thursday Snacks'),
(55, 'Week 2-Friday Snacks'),
(56, 'Week 2-Saturday Snacks'),
(57, 'Week 2-Sunday Snacks');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ID` int(11) NOT NULL,
  `User` int(11) NOT NULL,
  `Served` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `Bill` int(11) NOT NULL,
  `TotalPreparationTime` int(11) NOT NULL,
  `CancellationTime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`ID`, `User`, `Served`, `Date`, `Bill`, `TotalPreparationTime`, `CancellationTime`) VALUES
(8, 28, 0, '2020-08-11 02:10:53', 120, 20, 0),
(9, 28, 0, '2020-08-11 02:42:30', 600, 100, 0),
(11, 28, 0, '2020-08-11 04:02:33', 200, 35, 0),
(12, 28, 0, '2020-08-11 04:04:14', 280, 50, 0),
(13, 27, 0, '2020-08-11 13:31:33', 320, 55, 0),
(15, 28, 0, '2020-08-11 13:49:18', 320, 55, 0),
(16, 28, 0, '2020-08-11 14:04:09', 660, 110, 0),
(17, 29, 0, '2020-08-11 14:05:09', 700, 75, 0),
(18, 29, 0, '2020-08-11 14:05:54', 620, 75, 0),
(19, 29, 0, '2020-08-11 14:26:40', 920, 115, 0),
(20, 29, 0, '2020-08-11 14:37:57', 1100, 135, 0),
(21, 29, 0, '2020-08-11 14:38:40', 430, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `ID` int(11) NOT NULL,
  `Order` int(11) NOT NULL,
  `Item` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`ID`, `Order`, `Item`, `Quantity`) VALUES
(20, 8, 321, 1),
(21, 9, 321, 5),
(22, 11, 321, 1),
(23, 11, 322, 1),
(24, 12, 321, 1),
(25, 12, 322, 2),
(26, 13, 322, 1),
(27, 13, 321, 2),
(28, 14, 322, 1),
(29, 14, 321, 2),
(30, 14, 3, 1),
(31, 14, 4, 2),
(32, 15, 322, 1),
(33, 15, 321, 2),
(34, 16, 322, 1),
(35, 16, 321, 3),
(36, 16, 330, 2),
(37, 16, 332, 1),
(38, 17, 332, 5),
(39, 18, 332, 4),
(40, 18, 333, 1),
(41, 19, 332, 4),
(42, 19, 333, 1),
(43, 19, 331, 1),
(44, 19, 337, 1),
(45, 20, 332, 4),
(46, 20, 333, 1),
(47, 20, 331, 1),
(48, 20, 337, 1),
(49, 20, 326, 1),
(50, 21, 333, 1),
(51, 21, 337, 1),
(52, 21, 326, 1),
(53, 21, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `ID` int(11) NOT NULL,
  `Week` int(11) NOT NULL,
  `Day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`ID`, `Week`, `Day`) VALUES
(2, 1, 1),
(3, 1, 2),
(4, 1, 3),
(5, 1, 4),
(6, 1, 5),
(7, 1, 6),
(8, 1, 7),
(9, 2, 1),
(10, 2, 2),
(11, 2, 3),
(12, 2, 4),
(13, 2, 5),
(14, 2, 6),
(15, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `startHour` int(11) NOT NULL,
  `startMinute` int(11) NOT NULL,
  `endHour` int(11) NOT NULL,
  `endMinute` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`ID`, `name`, `startHour`, `startMinute`, `endHour`, `endMinute`) VALUES
(1, 'Breakfast', 7, 0, 9, 0),
(2, 'Lunch', 13, 0, 15, 0),
(3, 'Dinner', 19, 0, 21, 0),
(4, 'Snacks', 17, 0, 19, 0);

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `TimeID` int(11) NOT NULL,
  `Schedule` int(11) NOT NULL,
  `Shift` int(11) NOT NULL,
  `MenuID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`TimeID`, `Schedule`, `Shift`, `MenuID`) VALUES
(1, 2, 1, 2),
(2, 2, 2, 3),
(3, 2, 3, 4),
(4, 3, 1, 5),
(5, 3, 2, 6),
(6, 3, 3, 7),
(7, 4, 1, 8),
(8, 4, 2, 9),
(9, 4, 3, 10),
(10, 5, 1, 11),
(11, 5, 2, 12),
(12, 5, 3, 13),
(13, 6, 1, 14),
(14, 6, 2, 15),
(15, 6, 3, 16),
(16, 7, 1, 17),
(17, 7, 2, 18),
(18, 7, 3, 19),
(19, 8, 1, 20),
(20, 8, 2, 21),
(21, 8, 3, 22),
(22, 9, 1, 23),
(23, 9, 2, 24),
(24, 9, 3, 25),
(25, 10, 1, 26),
(26, 10, 2, 27),
(27, 10, 3, 28),
(28, 11, 1, 29),
(29, 11, 2, 30),
(30, 11, 3, 31),
(31, 12, 1, 32),
(32, 12, 2, 33),
(33, 12, 3, 34),
(34, 13, 1, 35),
(35, 13, 2, 36),
(36, 13, 3, 37),
(37, 14, 1, 38),
(38, 14, 2, 39),
(39, 14, 3, 40),
(40, 15, 1, 41),
(41, 15, 2, 42),
(42, 15, 3, 43),
(46, 2, 4, 44),
(47, 3, 4, 45),
(48, 4, 4, 46),
(49, 5, 4, 47),
(50, 6, 4, 48),
(51, 7, 4, 49),
(52, 8, 4, 50),
(53, 9, 4, 51),
(54, 10, 4, 52),
(55, 11, 4, 53),
(56, 12, 4, 54),
(57, 13, 4, 55),
(58, 14, 4, 56),
(59, 15, 4, 57);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Menu` (`Menu`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Category` (`Category`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`,`UserVehicleRegistrationNo`,`PersonalNumber`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`,`UserVehicleRegistrationNo`,`PersonalNumber`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User` (`User`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Order` (`Order`),
  ADD KEY `Item` (`Item`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Week` (`Week`,`Day`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`TimeID`),
  ADD KEY `Schedule` (`Schedule`),
  ADD KEY `Shift` (`Shift`),
  ADD KEY `MenuID` (`MenuID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=385;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
