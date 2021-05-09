-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 04:02 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prism`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `street1` varchar(50) NOT NULL,
  `street2` varchar(50) NOT NULL,
  `postal_code` varchar(5) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `address_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `userID`, `street1`, `street2`, `postal_code`, `city`, `country`, `address_type`) VALUES
(0, 8, 'HC5 Box 92126', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'dfaadsf', 'dafasdfa', '', 'dasfadsfa', 'Puerto Rico', '0'),
(0, 8, 'dfaadsf', 'dafasdfa', 'dasfa', 'dasfadsfa', 'Puerto Rico', '0'),
(0, 8, 'dfaadsf', 'dafasdfa', '4578', 'dasfadsfa', 'Puerto Rico', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, 'HC5 Box 92126', 'dafasdfa', '00612', 'Arecibo', 'Puerto Rico', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5 Box 92126', 'dafasdfa', '00612', 'Arecibo', 'Puerto Rico', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'Diablo', 'me ', '00612', 'en ', 'cago ', '0'),
(0, 8, 'Tuy mai', 'Dios', '00612', 'Arecibomanati', 'efwehui', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', 'sadasda', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', 'hgfg', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, '', '', '', '', '', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0'),
(0, 8, 'HC5', '', '00612', 'Arecibo', 'Puerto', '0');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`) VALUES
(1, 'Drama'),
(2, 'Horror'),
(3, 'Family'),
(4, 'Comedy'),
(5, 'Action'),
(6, 'Romance');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `shipping_address_id` int(11) NOT NULL,
  `paymentID` int(11) NOT NULL,
  `billing_address_id` int(11) NOT NULL,
  `order_status` varchar(30) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `tracking_number` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `userID`, `shipping_address_id`, `paymentID`, `billing_address_id`, `order_status`, `total`, `transaction_id`, `tracking_number`) VALUES
(1, 9, 0, 9, 0, 'Pending', '50', 0, 4564646),
(2, 8, 0, 8, 0, 'Shipped', '56', 1, 168980686),
(3, 8, 0, 8, 0, 'Pending', '56', 2, 162451742),
(4, 8, 0, 8, 0, 'Pending', '239', 0, 2036228970);

-- --------------------------------------------------------

--
-- Table structure for table `order_contents`
--

CREATE TABLE `order_contents` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` int(11) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `card_number` int(15) NOT NULL,
  `secNumber` int(3) NOT NULL,
  `expDate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentID`, `payment_type`, `card_number`, `secNumber`, `expDate`) VALUES
(0, '', 4545454, 33, '03/26'),
(8, '', 65465465, 33, '04/26'),
(9, '', 4545454, 33, '03/26');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `coming_soon()` int(11) NOT NULL,
  `inventory_amount` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `photo` longtext NOT NULL,
  `description` longtext NOT NULL,
  `cost_product` decimal(10,0) NOT NULL,
  `trailer` longtext NOT NULL,
  `release_date` varchar(20) NOT NULL,
  `director` varchar(30) NOT NULL,
  `starring` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `rating` varchar(12) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `genre_id`, `product_name`, `coming_soon()`, `inventory_amount`, `price`, `photo`, `description`, `cost_product`, `trailer`, `release_date`, `director`, `starring`, `category`, `rating`, `status`) VALUES
(1, 5, 'Avengers Endgame', 0, 5, '50', 'assets/newImages/Movies/movies/AvengersEndGame.jpg', 'Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow, Captain America and Bruce Banner -- must figure out a way to bring back their vanquished allies for an epic showdown with Thanos -- the evil demigod who decimated the planet and the universe.', '0', 'https://www.youtube.com/watch?v=TcMBFSGVi1c', 'April 22, 2019', 'Russo Brothers', 'Chris Evans', 'Movie', 'PG-13', 'available'),
(2, 4, 'Jumanji', 0, 5, '49', 'assets/newImages/Movies/movies/Jumanji.jpg', 'When Spencer goes back into the fantastical world of Jumanji, pals Martha, Fridge and Bethany re-enter the game to bring him home. But the game is now broken -- and fighting back. Everything the friends know about Jumanji is about to change, as they soon discover there\\\'s more obstacles and more danger to overcome.', '0', 'https://www.youtube.com/watch?v=2QKg5SZ_35I', 'December 4, 2019', 'Jake Kasdan', 'Kevin Hart', 'Movie', 'PG-13', 'available'),
(3, 1, 'Joker', 0, 5, '15', 'assets/newImages/Movies/movies/joker.jpg', 'Forever alone in a crowd, failed comedian Arthur Fleck seeks connection as he walks the streets of Gotham City. Arthur wears two masks -- the one he paints for his day job as a clown, and the guise he projects in a futile attempt to feel like he is part of the world around him. Isolated, bullied and disregarded by society, Fleck begins a slow descent into madness as he transforms into the criminal mastermind known as the Joker.', '0', 'https://www.youtube.com/watch?v=zAGVQLHvwOY', 'October 2, 2019', 'Tod Phillips', 'Joaquin Phoenix', 'Movie', 'R', 'available'),
(4, 5, 'Iron Man 2', 0, 5, '0', 'assets/newImages/Free/ironMan2.png', 'With the world now aware that he is Iron Man, billionaire inventor Tony Stark (Robert Downey Jr.) faces pressure from all sides to share his technology with the military. He is reluctant to divulge the secrets of his armored suit, fearing the information will fall into the wrong hands. With Pepper Potts (Gwyneth Paltrow) and \"Rhodey\" Rhodes (Don Cheadle) by his side, Tony must forge new alliances and confront a powerful new enemy.', '0', 'https://www.youtube.com/watch?v=BoohRoVA9WQ', 'April 26,2010', 'Jon Favreau', 'Robert Downey Jr.', 'Free', 'PG-13', 'available'),
(5, 3, 'Avatar', 0, 5, '0', 'assets/newImages/Free/Avatar.png', 'On the lush alien world of Pandora live the Navi, beings who appear primitive but are highly evolved. Because the planet environment is poisonous, human/Navi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Navi woman (Zoe Saldana). As a bond with her grows, he is drawn into a battle for the survival of her world.', '0', 'https://www.youtube.com/watch?v=5PSNL1qE6VY', 'December 10, 2009', 'James Cameron', 'Sam Worthington', 'Free', 'PG-13', 'available'),
(6, 3, 'Tangled', 0, 5, '0', 'assets/newImages/Free/tangled.png', 'When the kingdoms most-wanted bandit, Flynn Rider (Zachary Levi), hides in a convenient tower, he immediately becomes a captive of Rapunzel (Mandy Moore), the spires longtime resident. Crowned with 70 feet of magical golden hair, she has been locked away for years and desperately wants freedom. The feisty teenager strikes a deal with Flynn, and together they begin a whirlwind adventure.', '0', 'https://www.youtube.com/watch?v=2f516ZLyC6U', 'November 14, 2010', 'Byron Howard', 'Mandy Monroe', 'Free', 'PG', 'available'),
(7, 4, 'Friends', 0, 5, '80', 'assets/newImages/Series/tv/friends.jpg', 'One of television top-ranked series and the recipient of numerous Emmy Award and Golden Globe Award nominations, \"Friends\" is a smart, sophisticated comedy that looks into the hearts and minds of a group of friends living in New York.', '0', 'https://www.youtube.com/watch?v=hDNNmeeJs1Q', 'September 22, 1994', 'James Burrows', 'David Schwimmer', 'Series', 'PG', 'available'),
(8, 4, 'How I Met Your Mother', 0, 5, '75', 'assets/newImages/Series/tv/howimetyourmother.jpg', 'A man named Ted tells his kids how he met the love of his life, through flashbacks, years in the future. The bored kids sit on the sofa and listen as dad regales them with tales of his pursuit of romance.', '0', 'https://www.youtube.com/watch?v=aJtVL2_fA5w', 'November 19, 2005', 'Pamela Fryman', 'Josh Radnor', 'Series', 'PG', 'available'),
(9, 4, 'The Office', 0, 5, '100', 'assets/newImages/Series/tv/theoffice.jpeg', 'Based on the award-winning British comedy of the same name, this acclaimed sitcom is told through the lenses of a documentary film crew and filled with gossip, pranks, romance and general foolishness at Dunder-Mifflin Paper Co. in Scranton, Pennsylvania. If youve ever hated your boss, your job or both, then you will love this show.', '0', 'https://www.youtube.com/watch?v=LHOtME2DL4g', 'March 25, 2005', 'Randal Einhorn', 'Steve Carell', 'Series', 'PG', 'available'),
(10, 5, 'Thor Love and Thunder', 0, 0, '-1', 'assets/newImages/ComingSoon/loventhunder.jpg', 'Thor: Love and Thunder is an upcoming American superhero film based on the Marvel Comics character Thor, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures. It is intended to be the direct sequel to Thor: Ragnarok (2017) and the 29th film in the Marvel Cinematic Universe (MCU). The film is directed by Taika Waititi, who co-wrote the screenplay with Jennifer Kaytin Robinson, and stars Chris Hemsworth as Thor, alongside Tessa Thompson, Natalie Portman, Christian Bale, Chris Pratt, Jaimie Alexander, Pom Klementieff, Dave Bautista, Karen Gillan, and Sean Gunn.', '0', 'https://www.youtube.com/watch?v=KHPrDP0F5_o', 'February 11, 2022', 'Taika Waititi', 'Chris Hemsworth', 'Coming Soon', 'NA', 'unavailable'),
(11, 3, 'Sonic the Hedgehog 2', 0, 0, '-1', 'assets/newImages/ComingSoon/sonicthehedgehog2.jpg', 'Sonic the Hedgehog is an upcoming live action/computer-animated action-adventure comedy film based on the Sonic the Hedgehog video game franchise published by Sega. Directed by Jeff Fowler (in his feature directorial debut) and written by Pat Casey and Josh Miller, it stars Ben Schwartz and Jim Carrey. It is the second installment of Sonic the Hedgehog film series.', '0', 'https://www.youtube.com/watch?v=RFtjndrCXEE', 'April 7, 2022', 'Jeff Fowler', 'James Marsden', 'Coming Soon', 'NA', 'unavailable'),
(12, 1, 'Jurassic World Dominion', 0, 0, '-1', 'assets/newImages/ComingSoon/JurassicWorldDominion.jpg', 'Jurassic World: Dominion is an upcoming American science fiction adventure dinosaur film directed by Colin Trevorrow, who wrote the screenplay with Emily Carmichael, based on a story by Trevorrow and his writing partner, Derek Connolly. It is the sequel to Jurassic World: Fallen Kingdom (2018), the sixth installment in the Jurassic Park franchise, and the third and final film in the Jurassic World trilogy. As with its predecessors, Frank Marshall and Patrick Crowley will produce the film, with Trevorrow and Jurassic Park (1993) director Steven Spielberg acting as executive producers.', '0', 'https://www.youtube.com/watch?v=lVYwe2htD-s', 'June 10, 2022', 'Colin Trevorrow', 'Chris Pratt', 'Coming Soon', 'NA', 'unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `paymentID` int(11) NOT NULL,
  `firstName` varchar(10) NOT NULL,
  `lastName` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `user_type` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `paymentID`, `firstName`, `lastName`, `email`, `password`, `phoneNumber`, `birthdate`, `user_type`, `status`, `created_at`, `updated_at`) VALUES
(8, 0, 'Jonathan', 'Santos', 'jonathan.santos@gmail.com', '987654321', '7879056891', '2000-08-24', 0, 'active', '2021-05-06', '2021-05-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
