-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2015 at 09:56 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `berlin`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(3) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `slug`, `title`, `img`) VALUES
(1, 'berlin-city-of-light', 'Berlin City of Light', 'berlin2.jpg'),
(2, '', 'album2', 'berlin2.jpg'),
(3, 'berlin-fireworks', 'Berlin Olympic Stadium Fireworks', 'fireworks.jpg'),
(4, '', 'album4', 'berlin4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE IF NOT EXISTS `categorys` (
  `id` varchar(200) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `css` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `cat`, `css`, `info`) VALUES
('bars', 'bars', 'reviews-category-bars', 'bars'),
('rest', 'restaurants', 'reviews-category-restaurants', 'restaurants');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(3) NOT NULL,
  `album_id` int(33) NOT NULL,
  `commentable_id` int(3) NOT NULL,
  `commentable_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE IF NOT EXISTS `feeds` (
`id` int(5) NOT NULL,
  `active` enum('0','1','','') NOT NULL,
  `title` char(100) NOT NULL,
  `category` enum('News','Sports','Tech','') NOT NULL,
  `feed` varchar(1000) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `finances`
--

CREATE TABLE IF NOT EXISTS `finances` (
  `id` int(4) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `page` varchar(100) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `section` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finances`
--

INSERT INTO `finances` (`id`, `slug`, `page`, `content`, `section`) VALUES
(0, 'a', 'banking', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 'Bank Cards'),
(1, 'b', 'finance', 'test content', ''),
(2, '', 'col', 'more test content', ''),
(3, '', 'banking', 'Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC\r\n\r\n"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"\r\n\r\n1914 translation by H. Rackham\r\n\r\n"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"\r\n\r\nSection 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC\r\n\r\n"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."\r\n\r\n1914 translation by H. Rackham\r\n\r\n"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."', 'Credit Cards');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(4) NOT NULL,
  `post_id` int(4) NOT NULL,
  `review_id` int(4) NOT NULL,
  `cat` varchar(4) NOT NULL,
  `album_id` int(3) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `post_id`, `review_id`, `cat`, `album_id`, `img`) VALUES
(1, 1, 0, '', 1, 'berlin2.jpg'),
(2, 1, 0, '', 1, 'berlin3.jpg'),
(3, 0, 1, 'rev', 3, 'cityscape_berlin.jpg'),
(4, 0, 1, 'rev', 1, 'berlin2.jpg'),
(5, 0, 1, 'rev', 2, 'berlin3.jpg'),
(6, 0, 0, '', 3, 'cityscape_berlin.jpg'),
(7, 0, 1, 'rev', 1, 'berlin4.jpg'),
(8, 1, 0, 'blog', 1, 'berlin2.jpg'),
(9, 0, 1, 'rev', 3, 'berlin4.jpg'),
(10, 0, 0, '', 1, 'cityscape_berlin.jpg'),
(11, 0, 1, '', 3, 'fireworks.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `linkscategorys`
--

CREATE TABLE IF NOT EXISTS `linkscategorys` (
  `id` int(4) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linkscategorys`
--

INSERT INTO `linkscategorys` (`id`, `category`) VALUES
(1, '2ND HAND ITEMS'),
(2, 'CYCLING'),
(3, 'MONEY'),
(4, 'LANGUAGE SCHOOLS');

-- --------------------------------------------------------

--
-- Table structure for table `linksitems`
--

CREATE TABLE IF NOT EXISTS `linksitems` (
  `id` int(4) NOT NULL,
  `category_id` int(5) NOT NULL,
  `img` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `text` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linksitems`
--

INSERT INTO `linksitems` (`id`, `category_id`, `img`, `link`, `text`) VALUES
(0, 1, 'immowelt.png', 'www.immowelt.de', 'Find a property to buy or rent.Find a property to buy or rent.v.Find a property to buy or rent.Find a property to buy or rent.Find a property to buy or rent.vv.Find a property to buy or rentvFind a property to buy or rentFind a property to buy or rent'),
(7, 3, 'mydealz.png', 'http://www.mydealz.de/deals', 'Find the best deals online!'),
(100, 1, 'zweitehand.png', 'www.zweitehand.de', 'German Ebay'),
(101, 1, 'craigslist.png', 'www.craigslist.de', 'Find rental apartments'),
(102, 1, 'immob.png', 'www.immoblientscout.de', 'Property to rent or buy'),
(200, 2, 'bikemap.png', 'bikemap.de', 'Find the best bike routes Germany has to offfer.\r\nFind the best bike routes Germany has to offfer\r\nFind the best bike routes Germany has to offfer');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE IF NOT EXISTS `maps` (
  `id` int(4) NOT NULL,
  `link` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `link`) VALUES
(1, ' <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=berlin&amp;aq=&amp;sll=51.578776,0.084457&amp;sspn=0.244077,0.676346&amp;ie=UTF8&amp;hq=&amp;hnear=Berlin,+Germany&amp;ll=52.520007,13.404954&amp;spn=0.477848,1.352692&amp;t=m&amp;z=10&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=berlin&amp;aq=&amp;sll=51.578776,0.084457&amp;sspn=0.244077,0.676346&amp;ie=UTF8&amp;hq=&amp;hnear=Berlin,+Germany&amp;ll=52.520007,13.404954&amp;spn=0.477848,1.352692&amp;t=m&amp;z=10" style="color:#0000FF;text-align:left">View Larger Map</a></small>'),
(2, 'link2'),
(3, 'link3');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id` int(11) NOT NULL,
  `menulabel` varchar(50) DEFAULT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(4) NOT NULL,
  `map_id` int(4) NOT NULL,
  `album_id` int(3) NOT NULL,
  `month` varchar(10) NOT NULL,
  `date` varchar(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `img` varchar(255) NOT NULL,
  `video` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `map_id`, `album_id`, `month`, `date`, `header`, `content`, `img`, `video`) VALUES
(1, 1, 1, 'October', 'Thursday 9th October 2014', 'This is a test header', 'Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?" 1914 translation by H. Rackham "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?" Section 1.10.33 of "de Finibus Bonorum et Malorum', 'berlin.png', 'abdbd.mkv'),
(2, 2, 1, 'October', 'Friday 10th October', 'This is another test header', 'Tuesdya COntent', 'berlin2.png', ''),
(3, 3, 2, 'October', 'October', 'tes', 'test', 'gate.jpg', ''),
(5, 1, 2, 'October', 'test', 'test', 'etst', 'test', ''),
(6, 2, 1, '', 'test', 'test', 'test', 'test', ''),
(7, 3, 2, '', 'test', 'test', 'test', 'test', '');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int(3) NOT NULL,
  `map_id` int(4) NOT NULL,
  `cat_id` varchar(20) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `content` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `map_id`, `cat_id`, `slug`, `img`, `header`, `date`, `content`) VALUES
(1, 1, '1', 'this-is-a-test', 'gate.png', 'This is a test header', '31st October 2014', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed commodo turpis. Cras libero urna, posuere id egestas sit amet, rutrum a erat. Proin blandit pellentesque tortor eu accumsan. Morbi faucibus augue urna. Curabitur nec nulla sed turpis pulvinar cursus et at ipsum. Maecenas ultricies varius libero, eu pharetra tortor condimentum sed. Aenean maximus orci non dui lacinia tincidunt. Nam viverra ligula ut massa lacinia finibus. Phasellus efficitur enim nec massa sollicitudin molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed commodo turpis. Cras libero urna, posuere id egestas sit amet, rutrum a erat. Proin blandit pellentesque tortor eu accumsan. Morbi faucibus augue urna. Curabitur nec nulla sed turpis pulvinar cursus et at ipsum. Maecenas ultricies varius libero, eu pharetra tortor condimentum sed. Aenean maximus orci non dui lacinia tincidunt. Nam viverra ligula ut massa lacinia finibus. Phasellus efficitur enim nec massa sollicitudin molestie'),
(2, 2, '1', '', 'berlin.png', 'Test Header', '31 October 2014', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p'),
(3, 3, '2', '', 'gate2.png', 'Test header for this entry', '01 November 2014', 'Nullam ut tellus et ante lobortis blandit ultricies non nisi. Aenean quis nisi placerat, pellentesque ex vel, ultrices dui. Praesent ac nisi at nibh mattis accumsan. Vestibulum ut massa erat. Donec egestas blandit enim. Duis quis lectus elit. Nam fermentum, magna id rhoncus condimentum, diam elit tempor ipsum, ac vehicula leo velit in nisl. Maecenas ornare neque non imperdiet aliquam. Duis a libero urna. Fusce euismod hendrerit rutrum. Suspendisse vitae felis et risus euismod molestie. Ut ullamc');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(3) NOT NULL,
  `map_id` int(4) NOT NULL,
  `cat_id` varchar(20) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` varchar(255) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `price` varchar(10) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `map_id`, `cat_id`, `slug`, `img`, `header`, `tag`, `date`, `content`, `price`, `type`) VALUES
(1, 1, 'rest', 'this-is-a-test', 'burgermeister.jpg', 'Burgermeister', 'Experience some of the best burgers in Berlin in this unique setting', '31st October 2014', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed commodo turpis. Cras libero urna, posuere id egestas sit amet, rutrum a erat. Proin blandit pellentesque tortor eu accumsan. Morbi faucibus augue urna. Curabitur nec nulla sed turpis pulvinar cursus et at ipsum. Maecenas ultricies varius libero, eu pharetra tortor condimentum sed. Aenean maximus orci non dui lacinia tincidunt. Nam viverra ligula ut massa lacinia finibus. Phasellus efficitur enim nec massa sollicitudin molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed commodo turpis. Cras libero urna, posuere id egestas sit amet, rutrum a erat. Proin blandit pellentesque tortor eu accumsan. Morbi faucibus augue urna. Curabitur nec nulla sed turpis pulvinar cursus et at ipsum. Maecenas ultricies varius libero, eu pharetra tortor condimentum sed. Aenean maximus orci non dui lacinia tincidunt. Nam viverra ligula ut massa lacinia finibus. Phasellus efficitur enim nec massa sollicitudin molestie', 'high', 'south'),
(2, 2, 'rest', 'the-bird', 'bird.jpg', 'The bird', 'More burgers', '31 October 2014', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', 'high', 'north'),
(3, 3, 'bars', '', 'curry36.jpg', 'Curry 36', 'The best Currywurst in Berin', '01 November 2014', 'Nullam ut tellus et ante lobortis blandit ultricies non nisi. Aenean quis nisi placerat, pellentesque ex vel, ultrices dui. Praesent ac nisi at nibh mattis accumsan. Vestibulum ut massa erat. Donec egestas blandit enim. Duis quis lectus elit. Nam fermentum, magna id rhoncus condimentum, diam elit tempor ipsum, ac vehicula leo velit in nisl. Maecenas ornare neque non imperdiet aliquam. Duis a libero urna. Fusce euismod hendrerit rutrum. Suspendisse vitae felis et risus euismod molestie. Ut ullamc', 'high', 'east'),
(4, 1, 'rest', 'mustafas-gemusekebap', 'kebap.jpg', 'Mustafas gemusekebap', 'Great Kebabs in Berlin', '', 'test reviews of mustafas', 'low', 'west'),
(5, 2, 'rest', 'delores', 'dolores.jpg', 'Delores', 'New mexican in Berlin', '', 'Best burritoes in Berlin?', 'low', 'north'),
(6, 3, 'rest', 'miss-saigon', 'saigon.jpg', 'Miss Saigon', 'Spicy vietnamese food goes down a treat', '', 'The best vietnamese in Berlin?', '', 'south');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` char(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'root', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785');

-- --------------------------------------------------------

--
-- Table structure for table `users_in_roles`
--

CREATE TABLE IF NOT EXISTS `users_in_roles` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_in_roles`
--

INSERT INTO `users_in_roles` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finances`
--
ALTER TABLE `finances`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`), ADD KEY `gal_id` (`id`);

--
-- Indexes for table `linkscategorys`
--
ALTER TABLE `linkscategorys`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linksitems`
--
ALTER TABLE `linksitems`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_in_roles`
--
ALTER TABLE `users_in_roles`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_in_roles`
--
ALTER TABLE `users_in_roles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_in_roles`
--
ALTER TABLE `users_in_roles`
ADD CONSTRAINT `users_in_roles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
ADD CONSTRAINT `users_in_roles_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
