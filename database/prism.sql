-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 11:42 PM
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
  `street1` varchar(50) NOT NULL,
  `street2` varchar(50) NOT NULL,
  `postal_code` int(5) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `valid_address` varchar(50) NOT NULL,
  `address_type` varchar(50) NOT NULL,
  `shipping_phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_type` varchar(20) NOT NULL,
  `category_genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_type`, `category_genre`) VALUES
(1, 'Movie', 'Comedy'),
(2, 'Movie', 'Romance'),
(3, 'Movie', 'Drama'),
(4, 'Movie', 'Action'),
(5, 'Movie', 'Family'),
(6, 'Movie', 'Horror'),
(7, 'Series', 'Comedy'),
(8, 'Series', 'Romance'),
(9, 'Series', 'Drama'),
(10, 'Series', 'Action'),
(11, 'Series', 'Family'),
(12, 'Series', 'Horror'),
(13, 'Free', 'Comedy'),
(14, 'Free', 'Romance'),
(15, 'Free', 'Drama'),
(16, 'Free', 'Action'),
(17, 'Free', 'Family'),
(18, 'Free', 'Horror'),
(19, 'Coming Soon', 'Comedy'),
(20, 'Coming Soon', 'Romance'),
(21, 'Coming Soon', 'Drama'),
(22, 'Coming Soon', 'Action'),
(23, 'Coming Soon', 'Family'),
(24, 'Coming Soon', 'Horror'),
(25, 'Sales', 'Comedy'),
(26, 'Sales', 'Romance'),
(27, 'Sales', 'Drama'),
(28, 'Sales', 'Action'),
(29, 'Sales', 'Family'),
(30, 'Sales', 'Horror');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `default_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_status` varchar(30) NOT NULL,
  `shipping_address_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `tracking_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `category_id` int(11) NOT NULL,
  `stocks_amount` int(11) NOT NULL,
  `price` float NOT NULL,
  `photo` longtext NOT NULL,
  `description` longtext NOT NULL,
  `launch_date` varchar(20) NOT NULL,
  `director` varchar(30) NOT NULL,
  `starring` varchar(30) NOT NULL,
  `genres` varchar(20) NOT NULL,
  `rating` varchar(12) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category_id`, `stocks_amount`, `price`, `photo`, `description`, `launch_date`, `director`, `starring`, `genres`, `rating`, `status`) VALUES
(1, 'Avengers Endgame', 4, 5, 19.99, 'newImages/Movies/movies/AvengersEndGame.jpg', 'Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow, Captain America and Bruce Banner -- must figure out a way to bring back their vanquished allies for an epic showdown with Thanos -- the evil demigod who decimated the planet and the universe.', 'April 22, 2019', 'Russo Brothers', 'Chris Evans', 'Action', 'PG-13', 'available'),
(2, 'Jumanji', 1, 5, 15, 'newImages/Movies/movies/Jumanji.jpg', 'When Spencer goes back into the fantastical world of Jumanji, pals Martha, Fridge and Bethany re-enter the game to bring him home. But the game is now broken -- and fighting back. Everything the friends know about Jumanji is about to change, as they soon discover there\'s more obstacles and more danger to overcome.', 'December 4, 2019', 'Jake Kasdan', 'Kevin Hart', 'Comedy', 'PG-13', 'available'),
(3, 'Joker', 3, 5, 15, 'newImages/Movies/movies/joker.jpg', 'Forever alone in a crowd, failed comedian Arthur Fleck seeks connection as he walks the streets of Gotham City. Arthur wears two masks -- the one he paints for his day job as a clown, and the guise he projects in a futile attempt to feel like he is part of the world around him. Isolated, bullied and disregarded by society, Fleck begins a slow descent into madness as he transforms into the criminal mastermind known as the Joker.', 'October 2, 2019', 'Tod Phillips', 'Joaquin Phoenix', 'Drama', 'R', 'available'),
(4, 'Iron Man 2', 16, 5, 0, 'newImages/Free/ironMan2.png', 'With the world now aware that he is Iron Man, billionaire inventor Tony Stark (Robert Downey Jr.) faces pressure from all sides to share his technology with the military. He is reluctant to divulge the secrets of his armored suit, fearing the information will fall into the wrong hands. With Pepper Potts (Gwyneth Paltrow) and \"Rhodey\" Rhodes (Don Cheadle) by his side, Tony must forge new alliances and confront a powerful new enemy.', 'April 26,2010', 'Jon Favreau', 'Robert Downey Jr.', 'Action', 'PG-13', 'available'),
(5, 'Avatar', 17, 5, 0, 'newImages/Free/Avatar.png', 'On the lush alien world of Pandora live the Navi, beings who appear primitive but are highly evolved. Because the planet environment is poisonous, human/Navi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Navi woman (Zoe Saldana). As a bond with her grows, he is drawn into a battle for the survival of her world.', 'December 10, 2009', 'James Cameron', 'Sam Worthington', 'Family', 'PG-13', 'available'),
(6, 'Tangled', 17, 5, 0, 'newImages/Free/tangled.png', 'When the kingdoms most-wanted bandit, Flynn Rider (Zachary Levi), hides in a convenient tower, he immediately becomes a captive of Rapunzel (Mandy Moore), the spires longtime resident. Crowned with 70 feet of magical golden hair, she has been locked away for years and desperately wants freedom. The feisty teenager strikes a deal with Flynn, and together they begin a whirlwind adventure.', 'November 14, 2010', 'Byron Howard', 'Mandy Monroe', 'Family', 'PG', 'available'),
(7, 'Friends', 7, 5, 80, 'newImages/Series/tv/friends.jpg', 'One of television top-ranked series and the recipient of numerous Emmy Award and Golden Globe Award nominations, \"Friends\" is a smart, sophisticated comedy that looks into the hearts and minds of a group of friends living in New York.', 'September 22, 1994', 'James Burrows', 'David Schwimmer', 'Comedy', 'PG', 'available'),
(8, 'How I Met Your Mothe', 7, 5, 75, 'newImages/Series/tv/howimetyourmother.jpg', 'A man named Ted tells his kids how he met the love of his life, through flashbacks, years in the future. The bored kids sit on the sofa and listen as dad regales them with tales of his pursuit of romance.', 'November 19, 2005', 'Pamela Fryman', 'Josh Radnor', 'Comedy', 'PG', 'available'),
(9, 'The Office', 7, 5, 100, 'newImages/Series/tv/theoffice.jpeg', 'Based on the award-winning British comedy of the same name, this acclaimed sitcom is told through the lenses of a documentary film crew and filled with gossip, pranks, romance and general foolishness at Dunder-Mifflin Paper Co. in Scranton, Pennsylvania. If youve ever hated your boss, your job or both, then you will love this show.', 'March 25, 2005', 'Randal Einhorn', 'Steve Carell', 'Comedy', 'PG', 'available'),
(10, 'Thor Love and Thunder', 22, 0, 0, 'newImages/ComingSoon/loventhunder.jpg', 'Thor: Love and Thunder is an upcoming American superhero film based on the Marvel Comics character Thor, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures. It is intended to be the direct sequel to Thor: Ragnarok (2017) and the 29th film in the Marvel Cinematic Universe (MCU). The film is directed by Taika Waititi, who co-wrote the screenplay with Jennifer Kaytin Robinson, and stars Chris Hemsworth as Thor, alongside Tessa Thompson, Natalie Portman, Christian Bale, Chris Pratt, Jaimie Alexander, Pom Klementieff, Dave Bautista, Karen Gillan, and Sean Gunn.', 'February 11, 2022', 'Taika Waititi', 'Chris Hemsworth', 'Action', 'NA', 'unavailable'),
(11, 'Sonic the Hedgehog 2', 23, 0, 0, 'newImages/ComingSoon/sonicthehedgehog2.jpg', 'Sonic the Hedgehog is an upcoming live action/computer-animated action-adventure comedy film based on the Sonic the Hedgehog video game franchise published by Sega. Directed by Jeff Fowler (in his feature directorial debut) and written by Pat Casey and Josh Miller, it stars Ben Schwartz and Jim Carrey. It is the second installment of Sonic the Hedgehog film series.', 'April 7, 2022', 'Jeff Fowler', 'James Marsden', 'Family', 'NA', 'unavailable'),
(12, 'Jurassic World Dominion', 21, 0, 0, 'newImages/ComingSoon/JurassicWorldDominion.jpg', 'Jurassic World: Dominion is an upcoming American science fiction adventure dinosaur film directed by Colin Trevorrow, who wrote the screenplay with Emily Carmichael, based on a story by Trevorrow and his writing partner, Derek Connolly. It is the sequel to Jurassic World: Fallen Kingdom (2018), the sixth installment in the Jurassic Park franchise, and the third and final film in the Jurassic World trilogy. As with its predecessors, Frank Marshall and Patrick Crowley will produce the film, with Trevorrow and Jurassic Park (1993) director Steven Spielberg acting as executive producers.', 'June 10, 2022', 'Colin Trevorrow', 'Chris Pratt', 'Drama', 'NA', 'unavailable'),
(13, 'Hunger Games', 27, 5, 3, 'newImages/Movies/movies/Hunger_Games.png', 'In what was once North America, the Capitol of Panem maintains its hold on its 12 districts by forcing them each to select a boy and a girl, called Tributes, to compete in a nationally televised event called the Hunger Games. Every citizen must watch as the youths fight to the death until only one remains. District 12 Tribute Katniss Everdeen (Jennifer Lawrence) has little to rely on, other than her hunting skills and sharp instincts, in an arena where she must weigh survival against love.', 'March 12, 2012', 'Francis Lawrence', 'Jennifer Lawrence', 'Drama', 'PG-13', 'available'),
(14, 'If I Stay', 27, 5, 5, 'newImages/Movies/movies/If_I_Stay.png', 'Mia Hall (Chloë Grace Moretz), a talented young cellist, thought the most difficult decision she would ever have to make would be whether to pursue her musical dreams at prestigious Juilliard or follow her heart to be with the love of her life, Adam (Jamie Blackley), a rock singer/guitarist. However, a car wreck changes everything in an instant, and now Mias life hangs in the balance. Suspended between life and death, Mia faces a choice that will decide her future.', 'August 18, 2014', 'R.J Cutler', 'Chloe Grace', 'Drama', 'PG-13', 'available'),
(15, 'Hobbs & Shaw', 28, 5, 5, 'newImages/Movies/movies/Hobbs & Shaw.png', 'Brixton Lorr is a cybernetically enhanced soldier who possesses superhuman strength, a brilliant mind and a lethal pathogen that could wipe out half of the worlds population. It is now up to hulking lawman Luke Hobbs and lawless operative Deckard Shaw to put aside their past differences and work together to prevent the seemingly indestructible Lorr from destroying humanity.', 'July 13, 2019', 'David Leitch', 'Dwayne Johnson', 'Action', 'PG-13', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(10) NOT NULL,
  `lastName` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phoneNumber` int(10) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `user_admin` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `inactive` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

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
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
