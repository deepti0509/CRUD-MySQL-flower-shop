-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 03:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flower_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `flowers`
--

CREATE TABLE `flowers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `created_by` int(11) NOT NULL,
  `flower_type` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flowers`
--

INSERT INTO `flowers` (`id`, `name`, `description`, `img_url`, `price`, `created_by`, `flower_type`, `created_at`) VALUES
(14, 'Rockfoil flower', 'Rockfoil, scientific name Saxifraga, covers the ground enthusiastically with low foliage and flowers that rise about 15cm above the ground. It has white, red, pink or purple flowers that grow in a rosette high above the plant’s foliage. The majority of the species bloom from early spring until summer. However, there are also plants that only flower in late summer, meaning this family of garden plants can provide a pop of colour for most of the year. Rockfoil happily establishes itself between tiles and paving, giving less space for weeds to grow.\r\n\r\nThe scientific name Saxifraga is derived from ‘saxum’ (stone) and ‘frangere’ (to break). The name does not mean however that rockfoil growing on the wall will cause them to crumble — in the past the plant was used to treat kidney stones. Rockfoil has grown in Europe for centuries, and symbolises survival and persistence.\r\n\r\nRockfoil is a genus with around 440 known species. The plant only occurs in the northern hemisphere, particularly in the colder parts such as the Alps, Greenland and the Himalayas. Although the original form is a small rock plant, there are also varieties that are larger and thrive on damp grassland.\r\n\r\nsource: https://www.thejoyofplants.co.uk/\r\nimage credit: https://www.thejoyofplants.co.uk/', 'https://www.thejoyofplants.co.uk/sites/default/files/styles/landscape_full/public/field/image/t10-rotsplanten_2_lowres.jpg?itok=_MgoHo7d', 990, 9, 2, '2022-04-04 13:15:09'),
(15, 'Dahila Flower', 'Dahlias are late-season bloomers. They bloom from mid-summer through the first frost and are available in a vast array of colors, patterns, sizes, and flower forms. Plant size ranges from compact border varieties to species that have plate-sized blossoms atop 6-foot plants. Native to Mexico and Central America, dahlias boast over 20,000 cultivars and 30 species and are the prized darlings of plant breeders and florists alike. However, pet lovers beware, as this species of flower is toxic to both dogs and cats.1\r\n\r\n\r\nThis plant is a native perennial only in tropical climates and is considered an annual in zones lower than 8. For this reason, Dahlias can be temperamental and fussy about their growing conditions, yet many of the newer cultivars are more reliable and easy-growing.\r\n\r\nDahlias grow from tubers and can be planted outdoors after the last frost when the soil has warmed. Yet, they are too tender to leave in the ground all winter long in most zones. When grown as annuals, you\'ll need to dig up your dahlias and store the tubers indoors for winter, and then replant them in the spring. The plants reach maturity and bloom about eight to ten weeks after planting.\r\nSource: https://www.thespruce.com/growing-and-caring-for-dahlias-1402255\r\nimage credit: https://www.thespruce.com/growing-and-caring-for-dahlias-1402255', 'https://www.thespruce.com/thmb/6cmK-3Xaef5wq8F7T40V7PM4bpE=/941x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/growing-and-caring-for-dahlias-1402255-03-306dc2f2b09849189998f1bbe86b2a44.jpg', 999, 9, 1, '2022-04-04 13:17:11'),
(16, 'New Season Garden Cosmos, sale!!', 'Cosmos are annual flowers with colorful, daisy-like flowers that sit atop long, slender stems. Blooming throughout the summer months, they attract birds, bees, and butterflies to your garden. Growing easily from seeds, cosmos even survive in poor soil conditions! Here’s how to grow cosmos.\r\n\r\nCosmos produce 3- to 5-inch daisy-like flowers in various colors, including pink, orange, red and yellow, white, and maroon. Their flowerheads may be bowl– or open cup–shaped. These beautiful plants can reach 6 feet tall.\r\n\r\nCosmos grow in both beds and containers—and they also make great cut flowers!\r\n\r\nsource: https://www.almanac.com/plant/cosmos\r\nimage credit: https://www.almanac.com/', 'https://www.almanac.com/sites/default/files/styles/max_1300x1300/public/image_nodes/cosmos-flower.jpg?itok=tVBW5A6v', 550, 9, 3, '2022-04-04 13:19:24'),
(17, 'Sunflowers', 'Everyone loves growing sunflowers. With bright blooms that go all summer, very few plants are as heat-tolerant, resistant to pests, and attractive to pollinators and birds. They make beautiful cut flowers and their seeds (and oil) are a source of food for birds and people! See our Sunflower Guide for information on everything from planting to growing to harvesting.\r\n\r\nThe sunflower (Helianthus annuus) is an annual plant with a large daisy-like flower face. Its scientific name comes from the Greek words helios (“sun”) and anthos (“flower”). The flowers come in many colors (yellow, red, orange, maroon, brown), but they are commonly bright yellow with brown centers that ripen into heavy heads filled with seeds. \r\n\r\nSunflowers are heliotropic, which means that they turn their flowers to follow the movement of the Sun across the sky east to west, and then returns at night to face the east, ready again for the morning sun. Heliotropism happens during the earlier stages before the flower grows heavy with seeds.\r\n\r\nThere are tons of varieties of sunflowers available today, so there’s bound to be one that fits your garden. Choose between those with branching stems or single stems, those that produce ample pollen for pollinators or are pollen-free (best for bouquets), those that stay small or tower above the rest of the garden, or those that produce edible seeds!  Learn more about why you should start growing these happy flowers in your garden.\r\n\r\nsource: https://www.almanac.com/plant/sunflowers\r\nimage credit: https://www.almanac.com/', 'https://www.almanac.com/sites/default/files/styles/max_1300x1300/public/image_nodes/sunflower-1627193_1920.jpg?itok=cfGQcDrW', 600, 9, 4, '2022-04-04 13:20:54'),
(18, 'Water Forget-Me-Not (MYOSOTIS PALUSTRIS)', 'Also known as Myosotis Scorpiodes, it differs from the garden forget-me-not (which is generally biennial) by being a reliable perennial. The water forget-me-not expands gradually into largish clumps, which will benefit from being divided every couple of years or so. Slightly different forms, depending on whether it grows above or below the waterline, this is an excellent plant for softening the pond outline and hiding the liner edge. Can be planted directly in the soil in shallow water, or in a basket, this is a pleasant, trouble free addition to your pond.  Simple oblong green leaves  Tiny blue, white or yellow eyed flowers appear from Spring to early Summer  Full sun Partial sun  Height 30 cms Spread 30 cms  Supplied and grown in 1 litre square pots, fully established and come with full planting instructions\r\n\r\nsource: https://pondplantgrowersdirect.co.uk/product/myosotis-palustris/\r\nimage credit: https://pondplantgrowersdirect.co.uk/', 'https://pondplantgrowersdirect.co.uk/wp-content/uploads/2019/04/myosotis-palustris.jpg', 499, 9, 5, '2022-04-04 13:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `flower_types`
--

CREATE TABLE `flower_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flower_types`
--

INSERT INTO `flower_types` (`id`, `name`, `img_url`) VALUES
(1, 'Dahila', 'img/Dahila.svg'),
(2, 'Rockfoils', 'img/Rockfoils.svg'),
(3, 'Garden Cosmos', 'img/Garden Cosmos.svg'),
(4, 'Sunflower', 'img/Sunflower.svg'),
(5, 'Water Forget Me Not', 'img/Water Forget Me Not.svg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(9, 'metanoia', 'metanoia5@gmail.com', '00acf7b1bb0e9e52bc8d85cfd990c37d', '2022-04-04 15:09:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flowers`
--
ALTER TABLE `flowers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `flower_type` (`flower_type`);

--
-- Indexes for table `flower_types`
--
ALTER TABLE `flower_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flowers`
--
ALTER TABLE `flowers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `flower_types`
--
ALTER TABLE `flower_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flowers`
--
ALTER TABLE `flowers`
  ADD CONSTRAINT `flowers_ibfk_1` FOREIGN KEY (`flower_type`) REFERENCES `flower_types` (`id`),
  ADD CONSTRAINT `flowers_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
