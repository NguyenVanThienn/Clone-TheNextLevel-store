-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 05:24 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `productid` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `FullName`, `email`, `productid`, `content`, `date`) VALUES
(1, 'Nguyen Van Thien', 'traitimquacam@gmail.com', '1', 'San pham nay dung khong tot lam', '2022-01-04 15:59:46'),
(2, 'Nguyen Van Thien', 'traitimquacam@gmail.com', '2', 'San pham nay rat phu hop voi ban than toi', '2022-01-04 16:01:04'),
(3, 'La Bao Tran', 'labaotran@gmail.com', '1', 'San pham dung khong tot va rat mau phai mau`', '2022-01-04 16:03:44'),
(4, 'Beo Meo', 'conmeobeo@gmail.com', '1', 'San pham nay rat tot', '2022-01-04 16:41:01'),
(5, 'Nguyen Van Thien', 'traitimquacam@gmail.com', '6', 'San pham rat tot', '2022-01-06 02:35:52'),
(6, 'Beo Meo', 'conmeobeo@gmail.com', '8', 'san pham lua dao', '2022-01-08 01:22:24'),
(7, 'Beo Meo', 'conmeobeo@gmail.com', '5', 'San pham tot', '2022-01-08 02:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `ct_Fullname` varchar(255) NOT NULL,
  `ct_Email` varchar(255) NOT NULL,
  `ct_Phone` varchar(255) NOT NULL,
  `ct_Text` varchar(255) NOT NULL,
  `ct_Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `ct_Fullname`, `ct_Email`, `ct_Phone`, `ct_Text`, `ct_Time`) VALUES
(1, 'Nguyen Van Thien', 'traitimquacam@gmail.com', '0961814944', 'Xin chao toi rat quan tam den san pham cua cac ban', '2022-01-04 16:02:34'),
(2, 'Nguyen Van Thien', 'traitimquacam@gmail.com', '0961814922', 'hehe', '2022-01-05 13:20:32'),
(3, 'Nguyen Van Khoi', 'conmeobeo@gmail.com', '0961814933', 'Xin chao shop', '2022-01-08 02:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `filename`) VALUES
(1, 'image/slider_0.jpg'),
(2, 'image/slider_3.jpg'),
(3, 'image/slider_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_code`, `product_name`, `product_price`, `product_img`, `product_description`, `type`) VALUES
(2, 'GOTY002', 'Áo thun Trust Me - Among Us', 13, './img_item/trustme.jpg', '<p>Một điều luật trong Among Us l&agrave; kh&ocirc;ng được tin bất k&igrave; ai ngoại trừ bản th&acirc;n m&igrave;nh.</p>\r\n\r\n<p>H&atilde;y c&ugrave;ng The Next Level đến với mẫu &aacute;o thun Trust Me - Among Us nh&eacute; ^^</p>\r\n', 'game new'),
(3, 'WOTY001', 'Áo thun Ace Hoả Quyền', 13, './img_item/wibu-2.jpg', '<p>Ace - một nh&acirc;n vật được đ&ocirc;ng đảo fan One Piece y&ecirc;u mến v&igrave; một phần vừa ngầu, vừa khoẻ lại c&oacute; gia thế khủng. Ace l&agrave; con trai của Vua Hải Tặc&nbsp;Gol D. Roger, ch&aacute;u nu&ocirc;i của Ph&oacute; Đ&ocirc; Đốc Hải', 'wibu'),
(4, 'GOTY003', 'Áo thun Arcane Vi & Jinx', 15, './img_item/Vi&Jinx.jpg', '<p>C&ugrave;ng The Next Level đến với chị em&nbsp;Vi v&agrave; Jinx trong series Arcane của vũ trụ Li&ecirc;n Minh Huyền Thoại.</p>\r\n', 'game new'),
(5, 'GOTY004', 'Áo thun Arcane Jinx', 13, './img_item/Jinx.jpg', '<p>C&ugrave;ng The Next Level đến với tựa game thứ 12 trong series&nbsp;Assassin&#39;s Creed, lấy chủ đề về c&aacute;c chiến binh Viking.</p>\r\n', 'game new'),
(6, 'GOTY005', 'Áo thun Burn It All Down Worlds 2021', 16, './img_item/Burnalldown.jpg', '<p>Mẫu &aacute;o kỷ niệm Giải v&ocirc; địch thế giới Li&ecirc;n Minh Huyền Thoại 2021. H&atilde;y c&ugrave;ng The Next Level&nbsp;ch&aacute;y hết m&igrave;nh với c&aacute;c tuyển thủ nổi tiếng của Li&ecirc;n Minh Huyền Thoại!<br />\r\nH&atilde;y c&ugrave;ng', 'game new'),
(7, 'WOTY002', 'Áo thun Wings of Freedom', 13, './img_item/wibu-3.jpg', '<p>H&atilde;y c&ugrave;ng The Next Level đến với mẫu &aacute;o Wings of Freedom.</p>\r\n', 'wibu'),
(8, 'WOTY003', 'Áo thun Beast of Darkness - Berserk', 13, './img_item/wibu-6.jpg', '<p>Beast of Darkness l&agrave; hiện th&acirc;n&nbsp;của cơn thịnh nộ v&agrave; sự kh&aacute;t m&aacute;u của Guts, sinh ra từ chấn thương từ&nbsp;những trải nghiệm của anh ta trong sự kiện &quot;Eclipse&quot;&nbsp;v&agrave; l&ograve;ng th&ugrave; hận m&am', 'wibu'),
(9, 'WOTY004', 'Áo thun Bộ 3 Ace - Luffy - Sabo', 13, './img_item/wibu-1.jpg', '<p>Ace, Luffy v&agrave; Sabo l&agrave; bộ 3 anh em tuy kh&ocirc;ng phải ruột thịt nhưng rất th&acirc;n thiết với nhau từ thời thơ ấu, ch&iacute;nh Ace v&agrave; Sabo l&agrave; t&aacute;c nh&acirc;n ch&iacute;nh gi&uacute;p Luffy mạnh mẽ cả về thể x&aacute', 'wibu'),
(10, 'WOTY005', 'Áo thun Damn One Piece', 13, './img_item/wibu-4.jpg', '<p>Một meme nổi tiếng được lan truyền tr&ecirc;n mạng nhưng phi&ecirc;n bản mới n&agrave;y c&oacute; sự g&oacute;p mặt của 2 nh&acirc;n vật trong băng Mũ Rơm l&agrave; Luffy v&agrave; Usopp.</p>\r\n', 'wibu'),
(11, 'GOTY006', 'Áo thun dài tay Yasuo & Yone', 15, './img_item/longhand_yoneys.jpg', '<p>Một trong những cặp anh em hot nhất Li&ecirc;n Minh Huyền Thoại, Yone &amp; Yasou sở hữu cho m&igrave;nh kiếm ph&aacute;p thượng thừa khiến mọi kẻ địch phải ng&aacute;n ngẩm.<br />\r\n<br />\r\nC&ograve;n chần chờ g&igrave; m&agrave; kh&ocirc;ng sở hữu nga', 'longhand game'),
(12, 'GOTY007', 'Áo thun dài tay Elden Ring', 15, './img_item/longhand_eldering.jpg', '<p>Elden Ring l&agrave; một tựa game&nbsp;được ph&aacute;t triển bởi FromSoftware v&agrave; hợp t&aacute;c với&nbsp;nh&agrave; văn nổi tiếng&nbsp;George R. R. Martin.<br />\r\n<br />\r\nH&atilde;y c&ugrave;ng The Next Level đến với mẫu &aacute;o&nbsp;Elden Ri', 'longhand game'),
(13, 'GOTY008', 'Áo thun dài tay God of War - Phiên bản chó Pug', 15, './img_item/longhand_gow.jpg', '<p>Bạn lu&ocirc;n nghĩ cứ c&aacute;i g&igrave; li&ecirc;n quan đến God of War l&agrave; phải bạo lực, ho&agrave;nh tr&aacute;ng v&agrave; ngầu l&ograve;i ư? &Ocirc;i bạn ơi, đấy l&agrave; do bạn chưa biết đến mẫu &aacute;o&nbsp;God of War - Phi&ecirc;n bả', 'longhand game'),
(14, 'GOTY009', 'Áo thun dài tay Contra 2.0', 15, './img_item/longhand_contra.jpg', '<p>Contra l&agrave; một trong những video game kinh điển của hệ m&aacute;y NES v&agrave; l&agrave; tựa game m&agrave; những game thủ lứa 8x 9x&nbsp;từng m&ecirc; như điếu đổ.<br />\r\n<br />\r\nH&atilde;y c&ugrave;ng The Next Level đến với mẫu &aacute;o Contr', 'longhand game'),
(15, 'GOTY010', 'Áo thun dài tay Pikachu Not Today', 15, './img_item/longhand_pikachu.jpg', '<p>Ch&uacute;ng ta c&oacute; những khoảng thời gian chỉ muốn nằm ườn ra v&agrave; kh&ocirc;ng l&agrave;m g&igrave; cả, Pikachu cũng vậy. H&atilde;y c&ugrave;ng The Next Level &quot;hơi lười biếng&quot; với mẫu &aacute;o Pikachu Not Today nh&eacute;.</p>\r\n', 'longhand game'),
(16, 'GOTY011', 'Sweater Ahri & Teemo', 15, './img_item/sweater_ahriteemo.jpg', '<p>2 ph&aacute;p sư nổi tiếng nhất&nbsp;của&nbsp;Ionia, Ahri &amp; Teemo&nbsp;sở hữu cho m&igrave;nh những chi&ecirc;u thức c&oacute; thể khiến đối phương &quot;bay m&agrave;u&quot; trong t&iacute;ch tắc.<br />\r\n<br />\r\nC&ograve;n chần chờ g&igrave; m&agr', 'sweater game'),
(17, 'GOTY012', 'Sweater Animal Crossing - Game of The Year 2020', 15, './img_item/sweater_animal.jpg', '<p>Animal Crossing từ l&acirc;u đ&atilde; l&agrave; một tượng đ&agrave;i lớn của Nintendo, v&agrave; v&ocirc; c&ugrave;ng được y&ecirc;u th&iacute;ch. Game m&ocirc; phỏng đời sống x&atilde; hội, người chơi được trải nghiệm trong thế giới đ&aacute;ng y&eci', 'sweater game'),
(18, 'GOTY013', 'Sweater 6th Street - Cyberpunk 2077 Gangs', 15, './img_item/sweater_cyperpunk.jpg', '<p>6th Street l&agrave; một Gangs&nbsp;nổi tiếng&nbsp;trong thế giới&nbsp;Cyberpunk 2077.&nbsp;Băng đảng 6th Street được th&agrave;nh lập bởi những người Mỹ y&ecirc;u nước v&agrave; hoạt động như một lực lượng cảnh s&aacute;t đặc nhiệm. Nhưng sau đ&oacute', 'sweater game'),
(19, 'GOTY014', 'Sweater 8-bit Road - Pacman', 15, './img_item/sweater_pacman.jpg', '<p>Được lấy cảm hứng từ b&igrave;a album Abbey Road của ban nhạc rock huyền thoại The Beatles, mẫu &aacute;o n&agrave;y sẽ mang lại cho bạn ch&uacute;t ho&agrave;i niệm với tựa game 8-bit kinh điển: Pac-Man.<br />\r\n<br />\r\nH&atilde;y c&ugrave;ng The Next ', 'sweater game'),
(20, 'GOTY015', 'Sweater Sword Saint - Sekiro Emblem Collection', 16, './img_item/sweater_sekiro.jpg', '<p>Sword Saint l&agrave; một con boss trong tựa game Sekiro: Shadows Die Twice v&agrave; cũng l&agrave; một mẫu trong bộ sưu tập &quot;Emblem Collection&quot; của ch&uacute;ng m&igrave;nh.<br />\r\n<br />\r\nH&atilde;y c&ugrave;ng The Next Level đến với mẫu &', 'sweater game'),
(21, 'GOTY016', 'Hoodie Deathloop - Game of The Year 2021', 16, './img_item/hoodie_deadloop.jpg', '<p>Hoodie cuc ki hay ho</p>\r\n', 'hoodie game new'),
(22, 'GOTY017', 'Hoodie Thế giới Bloodborne', 15, './img_item/hoodie_bloddborne.jpg', '<p>Với một cốt truyện c&oacute; chiều s&acirc;u, gameplay tuyệt vời v&agrave; bối cảnh ấn tượng, kh&ocirc;ng ngoa khi n&oacute;i rằng Bloodborne l&agrave; một trong những tựa game độc quyền PS4 xuất sắc nhất.&nbsp;<br />\r\n<br />\r\nH&atilde;y c&ugrave;ng Th', 'hoodie game'),
(23, 'GOTY018', 'Hoodie Thế Giới Dark Souls', 16, './img_item/hoodie_darksoul.jpg', '<p>Souls l&agrave; một loạt c&aacute;c tr&ograve; chơi nhập vai h&agrave;nh động được ph&aacute;t triển bởi From Software. Loạt game&nbsp;bắt đầu với&nbsp;Demon&#39;s Souls cho PlayStation 3 v&agrave;o năm 2009, sau đ&oacute; l&agrave; Dark Souls v&agrave', 'hoodie game'),
(24, 'GOTY019', 'Hoodie Mega Man Project', 16, './img_item/hoodie_megaman.jpg', '<p>Mega Man hay c&ograve;n được biết đến rộng r&atilde;i hơn với c&aacute;i t&ecirc;n Rock Man&nbsp;chắc hẳn l&agrave; tựa game tuổi thơ của biết bao thế hệ game thủ tại Việt Nam. Với cốt truyện kh&ocirc;ng qu&aacute; phức tạp thậm ch&iacute; lại c&oacute', 'hoodie game'),
(25, 'GOTY020', 'Hoodie Sword Saint - Sekiro Emblem Collection', 16, './img_item/hoodie_sekiro.jpg', '<p>Sword Saint l&agrave; một con boss trong tựa game Sekiro: Shadows Die Twice v&agrave; cũng l&agrave; một mẫu trong bộ sưu tập &quot;Emblem Collection&quot; của ch&uacute;ng m&igrave;nh.<br />\r\n<br />\r\nH&atilde;y c&ugrave;ng The Next Level đến với mẫu &', 'hoodie game'),
(26, 'GOTY021', 'Hoodie Control', 16, './img_item/hoodie_control.jpg', '<p>Control l&agrave; một tr&ograve; chơi bắn s&uacute;ng g&oacute;c nh&igrave;n thứ ba được tạo ra bởi Remedy Entertainment. Control l&agrave; c&acirc;u chuyện về Jesse Faden, người thấy m&igrave;nh bị kẹt trong một cuộc xung đột chết người giữa một cơ qu', 'hoodie game'),
(27, 'GOTY022', 'Áo thun Thresh & Kindred', 13, './img_item/kindredthresh.jpg', '<p>Thresh v&agrave; Kindred c&oacute; thể kh&ocirc;ng phải cặp đ&ocirc;i ho&agrave;n hảo nhưng chắc chắn sẽ l&agrave; một &quot;phản ứng h&oacute;a học&quot; đặc biệt trong cả Đấu Trường C&ocirc;ng L&yacute; lẫn Đấu Trường Ch&acirc;n L&yacute;. H&atilde;y', 'game'),
(29, 'GOTY024', 'Áo thun Riven & Vayne', 13, './img_item/vayneriven.jpg', '<p>Những ai l&agrave; fan của Đấu Trường Ch&acirc;n L&yacute; th&igrave; chắc chắn kh&ocirc;ng thể kh&ocirc;ng biết đến cặp đ&ocirc;i tướng U Hồn xịn x&ograve; bậc nhất n&agrave;y. H&atilde;y c&ugrave;ng The Next Level đến với mẫu &aacute;o thun&nbsp;Rive', 'game'),
(30, 'GOTY025', 'Áo thun Marco - One Piece', 13, './img_item/wibu-5.jpg', '<p>Marco the Phoenix l&agrave; đội trưởng đội&nbsp;1 của băng hải tặc R&acirc;u Trắng.&nbsp;Sau c&aacute;i chết của thuyền trưởng, Marco đảm nhận vai tr&ograve; l&atilde;nh đạo băng hải tặc R&acirc;u Trắng cho đến khi băng tan r&atilde; sau sự kiện Paybac', 'wibu'),
(31, 'GOTY026', 'Áo thun Sonic Thư Giãn Tí', 13, './img_item/Sonic_relax.jpg', '<p>Chạy m&atilde;i rồi cũng mệt, anh em c&ugrave;ng Sonic thư gi&atilde;n t&iacute; qua mẫu &aacute;o mới của The Next Level nh&eacute;.<br />\r\n<br />\r\nH&atilde;y c&ugrave;ng The Next Level đến với mẫu &aacute;o&nbsp;Sonic Thư Gi&atilde;n T&iacute;.</p>\r\n', 'wibu'),
(32, 'GOTY027', 'Áo thun The Next Level Original', 13, './img_item/Thenextlevel.jpg', '<p>Một thiết kế do ch&iacute;nh The Next Level thiết kế d&agrave;nh cho anh em c&oacute; niềm đam m&ecirc; với game, đảm bảo kh&ocirc;ng đụng h&agrave;ng với ai nh&eacute; :D<br />\r\n<br />\r\nH&atilde;y c&ugrave;ng The Next Level đến với mẫu &aacute;o&nbsp;', 'game'),
(33, 'GOTY028', 'Áo thun Thất Khuyển', 13, './img_item/ThatKhuyen.jpg', '<p>Mẫu &aacute;o tập hợp c&aacute;c ch&uacute; ch&oacute;/s&oacute;i&nbsp;nổi tiếng nhất trong thế giới game từ&nbsp;Dark Souls, Pokemon, The Legend of Zelda, Okami, Metal Gear Solid V, Persona 3,&nbsp;Tales of Vesperia.</p>\r\n\r\n<p>H&atilde;y c&ugrave;ng T', 'game'),
(34, 'WOTY007', 'Áo thun Tôi Là Ninja', 13, './img_item/Ninnja.jpg', '<p>C&ugrave;ng The Next Level truy t&igrave;m ninja.</p>\r\n', 'wibu'),
(35, 'GOTY029', 'Áo thun Ratchet & Clank - Game of The Year 2021', 13, './img_item/Ratchet&Clank.jpg', '<p>Ao thun nay rat la dep</p>\r\n', 'game new'),
(36, 'GOTY030', 'Áo thun Psychonauts 2 - Game of The Year 2021', 13, './img_item/Psychonauts2.jpg', '<p>Ao thun nay rat tuyet voi nhe cac ban</p>\r\n', 'game new'),
(37, 'GOTY031', 'Áo thun It Takes Two - Game of The Year 2021', 13, './img_item/ItTakesTwo.jpg', '<p>&Aacute;o thun GAME OF THE YEAR</p>\r\n', 'game new'),
(38, 'GOTY028', 'Áo thun Cassiopeia & Lillia', 13, './img_item/cassopia.jpg', '<p>Những ai l&agrave; fan của Đấu Trường Ch&acirc;n L&yacute; th&igrave; chắc chắn kh&ocirc;ng thể kh&ocirc;ng biết cặp đ&ocirc;i tướng U Hồn xịn x&ograve; bậc nhất n&agrave;y. H&atilde;y c&ugrave;ng The Next Level t&igrave;m đến với mẫu &aacute;o thun&nb', 'game'),
(39, 'GOTY032', 'Áo thun Katana Zero', 13, './img_item/katana-zero.jpg', '<p>Ao cuc ki dep</p>\r\n', 'game'),
(40, 'GOTY035', 'ao moi', 20, './img_item/104880533_270115977540295_7202688762223770626_n.jpg', '<p>ao deo lam</p>\r\n', 'game');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `ID` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`ID`, `Firstname`, `Lastname`, `Gender`, `Phone`, `Email`, `Password`, `type`) VALUES
(1, 'Thien', 'Nguyen Van', 'Male', '961814944', 'traitimquacam@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(2, 'Meo', 'Beo', 'Male', '0961814922', 'conmeobeo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(3, 'Tran', 'La Bao', 'Female', '0961814921', 'labaotran@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(4, 'Cuong', 'Nguyen Chi', 'Male', '0961814933', 'nguyenchicuong@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tbuser` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
