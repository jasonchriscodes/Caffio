-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2024 at 03:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `green_coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `profile`) VALUES
('AaUJiv9kDMrEJY5jIuPd', 'Yash Parmar', 'yash@gmail.com', 'd39b5a3b8a1f761686687e10a77d369ab8e97f03', 'WhatsApp Image 2024-09-21 at 23.24.44_a7c2f96d.jpg'),
('ToKI0Jt6xOjBfwUh3wy4', 'Kano Sojitra', 'kano@gmail.com', '3eef87363e2ffb31bf490b2dafc2c3c9f7a25662', 'IMG_20240116_170443_544.jpg'),
('SUPuJU8PJ7PTUvYijPp5', 'Kano Sojitra', 'kanosojitra@gmail.com', '3eef87363e2ffb31bf490b2dafc2c3c9f7a25662', 'IMG_20240116_170443_544.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `qty` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `price`, `qty`) VALUES
('1PJNnixzgKDB9E5HWSkB', '5PnlOYI142tVBAOehmFq', 'wPN9uEUShtYt9G38y2oI', 100, 1),
('ph7lWVuqEZUPAm7o95Xl', '5PnlOYI142tVBAOehmFq', 'oX55laOBiwOgEOtu33Km', 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(11) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
('NXzxG9RpCit7l8IzTfCH', 'cbGCKttJQq3Zv6b6r1Aq', 'Niraj Sojitra', 'nirajsojitra11@gmail.com', '06351505351', 'how r u ?'),
('j1UdviaKIxsKEu5fR0dL', 'MlO6uFgDQCfttM1eKnl3', 'Nayan Parmar', 'nayanparmar@gmail.com', '7865435678', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address_type` varchar(10) NOT NULL,
  `method` varchar(50) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `payment_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `name`, `number`, `email`, `address`, `address_type`, `method`, `product_id`, `price`, `qty`, `date`, `status`, `payment_status`) VALUES
('XtaSIDSx73dynBwxOX9b', 'MlO6uFgDQCfttM1eKnl3', 'Nayan Parmar', '7865435678', 'nayanparmar@gmail.com', 'bapod, 2, vadodara, india, 390012', 'home', 'cash on delivery', 'bSADEsBxuWCB0QKUMctR', 170, 1, '2024-10-23', 'canceled', ''),
('FEgVPvwcQOiFJ6J1KPZ0', 'MlO6uFgDQCfttM1eKnl3', 'Nayan Parmar', '7865435678', 'nayanparmar@gmail.com', 'bapod, 2, vadodara, india, 390012', 'home', 'cash on delivery', 'wf6PS7stkDlxojnPrfEY', 120, 1, '2024-10-23', 'complete', 'complete'),
('XM9W1UybaSc9aq2vqvVU', 'MlO6uFgDQCfttM1eKnl3', 'Nayan Parmar', '7865435678', 'nayanparmar@gmail.com', 'bapod, 2, vadodara, india, 390012', 'home', 'cash on delivery', 'E8fWA0ZTMphzudQXZHiP', 500, 1, '2024-10-23', 'complete', 'complete'),
('0FroTE8xKz2rEDy25SGR', 'JusW6dP5snqXGDDQjs36', 'Nayan Parmar', '0635150535', 'nirajsojitra11@gmail.com', 'near bus station, 1, hariyasan, India, 360410', 'home', 'cash on delivery', 'wPN9uEUShtYt9G38y2oI', 100, 2, '2024-11-08', 'canceled', 'complete'),
('S5aqLVfGS1lR8CmZGqR3', '7ARGJozQ6HvgLuxr5Wx2', 'Niraj Sojitra', '6351505351', 'nirajsojitra11@gmail.com', 'near bus station, 2, hariyasan, India, 360410', 'home', 'cash on delivery', '8irY4357LmeADiGSZwao', 320, 1, '2024-11-09', 'pending', ''),
('Rg5M6LgT9w8en4WijyGh', '7ARGJozQ6HvgLuxr5Wx2', 'Niraj Sojitra', '6351505351', 'nirajsojitra11@gmail.com', 'near bus station, 2, hariyasan, India, 360410', 'home', 'cash on delivery', 'WE1fLA10Tg5CXiFoClem', 250, 2, '2024-11-09', 'pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `user_id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`user_id`, `name`, `email`, `number`) VALUES
('7ARGJozQ6HvgLuxr5Wx2', 'Niraj Sojitra', 'nirajsojitra11@gmail.com', '06351505351'),
('cbGCKttJQq3Zv6b6r1Aq', 'Nayan Parmar', 'nayanparmar@gmail.com', '6351505351');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` varchar(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_details` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `image`, `product_details`, `status`) VALUES
('wPN9uEUShtYt9G38y2oI', 'Green Africana ', 100, 'green africana.jpg', 'Green Africana offers eco-conscious coffee, rooted in African heritage. Sustainably farmed, rich in flavor, and crafted with care, it celebrates culture, wellness, and nature while promoting ethical trade, community growth, and authentic African pride.', 'active'),
('u6hSF1Tn6W54sS2Xnbtz', 'nutracitta coffee ', 290, 'nutracitta coffee 17.png', 'Nutracitta Coffee is a premium blend that combines rich flavors and health benefits. Sourced from high-altitude farms, it offers a smooth, aromatic experience, promoting wellness and vitality with every sip.', 'active'),
('X4lfIVnQvKjyrJAdiKgx', 'green coffee seed powder', 600, 'green coffee seed powder 25.png', 'Green coffee seed powder is made from unroasted coffee beans, retaining natural antioxidants and chlorogenic acids. Known for its earthy taste, it supports wellness, boosts energy, and promotes a healthy lifestyle with gentle vitality.', 'active'),
('oX55laOBiwOgEOtu33Km', 'American Black Coffee ', 200, 'american coffee.jpg', 'American Black Coffee delivers bold simplicity. Served without milk or sugar, it highlights pure roasted flavors, deep aroma, and smooth finish, offering coffee lovers a classic, energizing experience rooted in tradition and authenticity.', 'active'),
('8AfsRRusTUEGLqSP2Bmx', 'Coffea Canephora ', 150, 'Coffea Canephora.jpg', 'Coffea canephora, commonly known as Robusta, offers a strong, bold flavor with earthy notes. Naturally higher in caffeine, it provides intense energy, a full body, and rich crema, making it ideal for espressos and blends.', 'active'),
('XlAhuyblsNrqxkAAUtyE', 'premium green coofee beans ', 340, 'premium green coofee beans 16.png', 'Our premium green coffee beans boast a vibrant aroma and rich flavor profile, sourced from the finest farms. They are meticulously selected for quality, ensuring a perfect roast every time. Enjoy freshness!', 'active'),
('8irY4357LmeADiGSZwao', 'Nicaragua Arabica ', 320, 'Nicaragua Arabica.webp', 'Nicaragua 100% Arabica boasts smooth, balanced flavors with notes of chocolate, citrus, and floral sweetness. Grown in volcanic soils, it delivers a rich aroma, bright acidity, and silky body, celebrating pure specialty coffee excellence.', 'active'),
('5Bs3qHdq0f8YelVYfbxM', 'mushroom coffee ', 430, 'mushroom coffee 19.png', 'Mushroom coffee blends traditional coffee with medicinal mushrooms like lion&#39;s mane and chaga, offering a rich, earthy flavor. It boosts energy, enhances focus, and supports immune health without jitters.', 'active'),
('7esL5AXHZnE9FJaPOyg1', 'Coffee chai', 60, 'coffee chai 31.png', 'Coffee Chai blends rich espresso with spiced chai, uniting bold coffee intensity and aromatic warmth. Infused with cinnamon, cardamom, and cloves, it offers a creamy, energizing drink that’s both comforting and exotic in flavor.', 'deactive');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `user_id` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`user_id`, `email`) VALUES
('7ARGJozQ6HvgLuxr5Wx2', 'nirajsojitra@gmail.com'),
('cbGCKttJQq3Zv6b6r1Aq', 'nayanparmar@gmail.com'),
('5PnlOYI142tVBAOehmFq', 'niraj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `user_type`) VALUES
('7ARGJozQ6HvgLuxr5Wx2', 'Kano Sojitra', 'kano@gmail.com', 'kano', 'user'),
('MlO6uFgDQCfttM1eKnl3', 'Yash Parmar', 'yash@gmail.com', 'yashu', 'user'),
('cbGCKttJQq3Zv6b6r1Aq', 'Niraj Sojitra', 'nirajsojitra11@gmail', 'niraj', 'user'),
('C9C5VRABa89zrJLclOfV', 'NirajSojitra', 'nirajsojitra11@gmail.com', 'niraj', 'user'),
('5PnlOYI142tVBAOehmFq', 'Yamini', 'Yamini@gmail.com', 'yami', 'user'),
('JusW6dP5snqXGDDQjs36', 'niraj', 'nayanparmar@gmail.com', 'niraj', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `user_id`, `product_id`, `price`) VALUES
('FINrYtcffeF6ayEqQ0UY', '7ARGJozQ6HvgLuxr5Wx2', '8irY4357LmeADiGSZwao', 320),
('pfiBOI3Z6DHVCmIhw8eL', 'cbGCKttJQq3Zv6b6r1Aq', 'oX55laOBiwOgEOtu33Km', 200),
('NVU06PlObntMSH0nQCrg', 'cbGCKttJQq3Zv6b6r1Aq', 'wPN9uEUShtYt9G38y2oI', 100),
('MuZzjHcWuE1LbLPR07bk', '7ARGJozQ6HvgLuxr5Wx2', 'oX55laOBiwOgEOtu33Km', 200),
('QcepeEQrOX69ef1Jnr4P', '5PnlOYI142tVBAOehmFq', 'oX55laOBiwOgEOtu33Km', 200),
('sXwKYmqHZpYKvb1fZdcm', '5PnlOYI142tVBAOehmFq', 'wPN9uEUShtYt9G38y2oI', 100),
('l9QkRPhqgSH0CovrU2aI', '7ARGJozQ6HvgLuxr5Wx2', 'wPN9uEUShtYt9G38y2oI', 100),
('KBvpRSoYDIr4QBu6sGPU', 'JusW6dP5snqXGDDQjs36', 'wPN9uEUShtYt9G38y2oI', 100);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
