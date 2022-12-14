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
(2, 'GOTY002', '??o thun Trust Me - Among Us', 13, './img_item/trustme.jpg', '<p>M???t ??i???u lu???t trong Among Us l&agrave; kh&ocirc;ng ???????c tin b???t k&igrave; ai ngo???i tr??? b???n th&acirc;n m&igrave;nh.</p>\r\n\r\n<p>H&atilde;y c&ugrave;ng The Next Level ?????n v???i m???u &aacute;o thun Trust Me - Among Us nh&eacute; ^^</p>\r\n', 'game new'),
(3, 'WOTY001', '??o thun Ace Ho??? Quy???n', 13, './img_item/wibu-2.jpg', '<p>Ace - m???t nh&acirc;n v???t ???????c ??&ocirc;ng ?????o fan One Piece y&ecirc;u m???n v&igrave; m???t ph???n v???a ng???u, v???a kho??? l???i c&oacute; gia th??? kh???ng. Ace l&agrave; con trai c???a Vua H???i T???c&nbsp;Gol D. Roger, ch&aacute;u nu&ocirc;i c???a Ph&oacute; ??&ocirc; ?????c H???i', 'wibu'),
(4, 'GOTY003', '??o thun Arcane Vi & Jinx', 15, './img_item/Vi&Jinx.jpg', '<p>C&ugrave;ng The Next Level ?????n v???i ch??? em&nbsp;Vi v&agrave; Jinx trong series Arcane c???a v?? tr??? Li&ecirc;n Minh Huy???n Tho???i.</p>\r\n', 'game new'),
(5, 'GOTY004', '??o thun Arcane Jinx', 13, './img_item/Jinx.jpg', '<p>C&ugrave;ng The Next Level ?????n v???i t???a game th??? 12 trong series&nbsp;Assassin&#39;s Creed, l???y ch??? ????? v??? c&aacute;c chi???n binh Viking.</p>\r\n', 'game new'),
(6, 'GOTY005', '??o thun Burn It All Down Worlds 2021', 16, './img_item/Burnalldown.jpg', '<p>M???u &aacute;o k??? ni???m Gi???i v&ocirc; ?????ch th??? gi???i Li&ecirc;n Minh Huy???n Tho???i 2021. H&atilde;y c&ugrave;ng The Next Level&nbsp;ch&aacute;y h???t m&igrave;nh v???i c&aacute;c tuy???n th??? n???i ti???ng c???a Li&ecirc;n Minh Huy???n Tho???i!<br />\r\nH&atilde;y c&ugrave;ng', 'game new'),
(7, 'WOTY002', '??o thun Wings of Freedom', 13, './img_item/wibu-3.jpg', '<p>H&atilde;y c&ugrave;ng The Next Level ?????n v???i m???u &aacute;o Wings of Freedom.</p>\r\n', 'wibu'),
(8, 'WOTY003', '??o thun Beast of Darkness - Berserk', 13, './img_item/wibu-6.jpg', '<p>Beast of Darkness l&agrave; hi???n th&acirc;n&nbsp;c???a c??n th???nh n??? v&agrave; s??? kh&aacute;t m&aacute;u c???a Guts, sinh ra t??? ch???n th????ng t???&nbsp;nh???ng tr???i nghi???m c???a anh ta trong s??? ki???n &quot;Eclipse&quot;&nbsp;v&agrave; l&ograve;ng th&ugrave; h???n m&am', 'wibu'),
(9, 'WOTY004', '??o thun B??? 3 Ace - Luffy - Sabo', 13, './img_item/wibu-1.jpg', '<p>Ace, Luffy v&agrave; Sabo l&agrave; b??? 3 anh em tuy kh&ocirc;ng ph???i ru???t th???t nh??ng r???t th&acirc;n thi???t v???i nhau t??? th???i th?? ???u, ch&iacute;nh Ace v&agrave; Sabo l&agrave; t&aacute;c nh&acirc;n ch&iacute;nh gi&uacute;p Luffy m???nh m??? c??? v??? th??? x&aacute', 'wibu'),
(10, 'WOTY005', '??o thun Damn One Piece', 13, './img_item/wibu-4.jpg', '<p>M???t meme n???i ti???ng ???????c lan truy???n tr&ecirc;n m???ng nh??ng phi&ecirc;n b???n m???i n&agrave;y c&oacute; s??? g&oacute;p m???t c???a 2 nh&acirc;n v???t trong b??ng M?? R??m l&agrave; Luffy v&agrave; Usopp.</p>\r\n', 'wibu'),
(11, 'GOTY006', '??o thun d??i tay Yasuo & Yone', 15, './img_item/longhand_yoneys.jpg', '<p>M???t trong nh???ng c???p anh em hot nh???t Li&ecirc;n Minh Huy???n Tho???i, Yone &amp; Yasou s??? h???u cho m&igrave;nh ki???m ph&aacute;p th?????ng th???a khi???n m???i k??? ?????ch ph???i ng&aacute;n ng???m.<br />\r\n<br />\r\nC&ograve;n ch???n ch??? g&igrave; m&agrave; kh&ocirc;ng s??? h???u nga', 'longhand game'),
(12, 'GOTY007', '??o thun d??i tay Elden Ring', 15, './img_item/longhand_eldering.jpg', '<p>Elden Ring l&agrave; m???t t???a game&nbsp;???????c ph&aacute;t tri???n b???i FromSoftware v&agrave; h???p t&aacute;c v???i&nbsp;nh&agrave; v??n n???i ti???ng&nbsp;George R. R. Martin.<br />\r\n<br />\r\nH&atilde;y c&ugrave;ng The Next Level ?????n v???i m???u &aacute;o&nbsp;Elden Ri', 'longhand game'),
(13, 'GOTY008', '??o thun d??i tay God of War - Phi??n b???n ch?? Pug', 15, './img_item/longhand_gow.jpg', '<p>B???n lu&ocirc;n ngh?? c??? c&aacute;i g&igrave; li&ecirc;n quan ?????n God of War l&agrave; ph???i b???o l???c, ho&agrave;nh tr&aacute;ng v&agrave; ng???u l&ograve;i ??? &Ocirc;i b???n ??i, ?????y l&agrave; do b???n ch??a bi???t ?????n m???u &aacute;o&nbsp;God of War - Phi&ecirc;n b???', 'longhand game'),
(14, 'GOTY009', '??o thun d??i tay Contra 2.0', 15, './img_item/longhand_contra.jpg', '<p>Contra l&agrave; m???t trong nh???ng video game kinh ??i???n c???a h??? m&aacute;y NES v&agrave; l&agrave; t???a game m&agrave; nh???ng game th??? l???a 8x 9x&nbsp;t???ng m&ecirc; nh?? ??i???u ?????.<br />\r\n<br />\r\nH&atilde;y c&ugrave;ng The Next Level ?????n v???i m???u &aacute;o Contr', 'longhand game'),
(15, 'GOTY010', '??o thun d??i tay Pikachu Not Today', 15, './img_item/longhand_pikachu.jpg', '<p>Ch&uacute;ng ta c&oacute; nh???ng kho???ng th???i gian ch??? mu???n n???m ?????n ra v&agrave; kh&ocirc;ng l&agrave;m g&igrave; c???, Pikachu c??ng v???y. H&atilde;y c&ugrave;ng The Next Level &quot;h??i l?????i bi???ng&quot; v???i m???u &aacute;o Pikachu Not Today nh&eacute;.</p>\r\n', 'longhand game'),
(16, 'GOTY011', 'Sweater Ahri & Teemo', 15, './img_item/sweater_ahriteemo.jpg', '<p>2 ph&aacute;p s?? n???i ti???ng nh???t&nbsp;c???a&nbsp;Ionia, Ahri &amp; Teemo&nbsp;s??? h???u cho m&igrave;nh nh???ng chi&ecirc;u th???c c&oacute; th??? khi???n ?????i ph????ng &quot;bay m&agrave;u&quot; trong t&iacute;ch t???c.<br />\r\n<br />\r\nC&ograve;n ch???n ch??? g&igrave; m&agr', 'sweater game'),
(17, 'GOTY012', 'Sweater Animal Crossing - Game of The Year 2020', 15, './img_item/sweater_animal.jpg', '<p>Animal Crossing t??? l&acirc;u ??&atilde; l&agrave; m???t t?????ng ??&agrave;i l???n c???a Nintendo, v&agrave; v&ocirc; c&ugrave;ng ???????c y&ecirc;u th&iacute;ch. Game m&ocirc; ph???ng ?????i s???ng x&atilde; h???i, ng?????i ch??i ???????c tr???i nghi???m trong th??? gi???i ??&aacute;ng y&eci', 'sweater game'),
(18, 'GOTY013', 'Sweater 6th Street - Cyberpunk 2077 Gangs', 15, './img_item/sweater_cyperpunk.jpg', '<p>6th Street l&agrave; m???t Gangs&nbsp;n???i ti???ng&nbsp;trong th??? gi???i&nbsp;Cyberpunk 2077.&nbsp;B??ng ?????ng 6th Street ???????c th&agrave;nh l???p b???i nh???ng ng?????i M??? y&ecirc;u n?????c v&agrave; ho???t ?????ng nh?? m???t l???c l?????ng c???nh s&aacute;t ?????c nhi???m. Nh??ng sau ??&oacute', 'sweater game'),
(19, 'GOTY014', 'Sweater 8-bit Road - Pacman', 15, './img_item/sweater_pacman.jpg', '<p>???????c l???y c???m h???ng t??? b&igrave;a album Abbey Road c???a ban nh???c rock huy???n tho???i The Beatles, m???u &aacute;o n&agrave;y s??? mang l???i cho b???n ch&uacute;t ho&agrave;i ni???m v???i t???a game 8-bit kinh ??i???n: Pac-Man.<br />\r\n<br />\r\nH&atilde;y c&ugrave;ng The Next ', 'sweater game'),
(20, 'GOTY015', 'Sweater Sword Saint - Sekiro Emblem Collection', 16, './img_item/sweater_sekiro.jpg', '<p>Sword Saint l&agrave; m???t con boss trong t???a game Sekiro: Shadows Die Twice v&agrave; c??ng l&agrave; m???t m???u trong b??? s??u t???p &quot;Emblem Collection&quot; c???a ch&uacute;ng m&igrave;nh.<br />\r\n<br />\r\nH&atilde;y c&ugrave;ng The Next Level ?????n v???i m???u &', 'sweater game'),
(21, 'GOTY016', 'Hoodie Deathloop - Game of The Year 2021', 16, './img_item/hoodie_deadloop.jpg', '<p>Hoodie cuc ki hay ho</p>\r\n', 'hoodie game new'),
(22, 'GOTY017', 'Hoodie Th??? gi???i Bloodborne', 15, './img_item/hoodie_bloddborne.jpg', '<p>V???i m???t c???t truy???n c&oacute; chi???u s&acirc;u, gameplay tuy???t v???i v&agrave; b???i c???nh ???n t?????ng, kh&ocirc;ng ngoa khi n&oacute;i r???ng Bloodborne l&agrave; m???t trong nh???ng t???a game ?????c quy???n PS4 xu???t s???c nh???t.&nbsp;<br />\r\n<br />\r\nH&atilde;y c&ugrave;ng Th', 'hoodie game'),
(23, 'GOTY018', 'Hoodie Th??? Gi???i Dark Souls', 16, './img_item/hoodie_darksoul.jpg', '<p>Souls l&agrave; m???t lo???t c&aacute;c tr&ograve; ch??i nh???p vai h&agrave;nh ?????ng ???????c ph&aacute;t tri???n b???i From Software. Lo???t game&nbsp;b???t ?????u v???i&nbsp;Demon&#39;s Souls cho PlayStation 3 v&agrave;o n??m 2009, sau ??&oacute; l&agrave; Dark Souls v&agrave', 'hoodie game'),
(24, 'GOTY019', 'Hoodie Mega Man Project', 16, './img_item/hoodie_megaman.jpg', '<p>Mega Man hay c&ograve;n ???????c bi???t ?????n r???ng r&atilde;i h??n v???i c&aacute;i t&ecirc;n Rock Man&nbsp;ch???c h???n l&agrave; t???a game tu???i th?? c???a bi???t bao th??? h??? game th??? t???i Vi???t Nam. V???i c???t truy???n kh&ocirc;ng qu&aacute; ph???c t???p th???m ch&iacute; l???i c&oacute', 'hoodie game'),
(25, 'GOTY020', 'Hoodie Sword Saint - Sekiro Emblem Collection', 16, './img_item/hoodie_sekiro.jpg', '<p>Sword Saint l&agrave; m???t con boss trong t???a game Sekiro: Shadows Die Twice v&agrave; c??ng l&agrave; m???t m???u trong b??? s??u t???p &quot;Emblem Collection&quot; c???a ch&uacute;ng m&igrave;nh.<br />\r\n<br />\r\nH&atilde;y c&ugrave;ng The Next Level ?????n v???i m???u &', 'hoodie game'),
(26, 'GOTY021', 'Hoodie Control', 16, './img_item/hoodie_control.jpg', '<p>Control l&agrave; m???t tr&ograve; ch??i b???n s&uacute;ng g&oacute;c nh&igrave;n th??? ba ???????c t???o ra b???i Remedy Entertainment. Control l&agrave; c&acirc;u chuy???n v??? Jesse Faden, ng?????i th???y m&igrave;nh b??? k???t trong m???t cu???c xung ?????t ch???t ng?????i gi???a m???t c?? qu', 'hoodie game'),
(27, 'GOTY022', '??o thun Thresh & Kindred', 13, './img_item/kindredthresh.jpg', '<p>Thresh v&agrave; Kindred c&oacute; th??? kh&ocirc;ng ph???i c???p ??&ocirc;i ho&agrave;n h???o nh??ng ch???c ch???n s??? l&agrave; m???t &quot;ph???n ???ng h&oacute;a h???c&quot; ?????c bi???t trong c??? ?????u Tr?????ng C&ocirc;ng L&yacute; l???n ?????u Tr?????ng Ch&acirc;n L&yacute;. H&atilde;y', 'game'),
(29, 'GOTY024', '??o thun Riven & Vayne', 13, './img_item/vayneriven.jpg', '<p>Nh???ng ai l&agrave; fan c???a ?????u Tr?????ng Ch&acirc;n L&yacute; th&igrave; ch???c ch???n kh&ocirc;ng th??? kh&ocirc;ng bi???t ?????n c???p ??&ocirc;i t?????ng U H???n x???n x&ograve; b???c nh???t n&agrave;y. H&atilde;y c&ugrave;ng The Next Level ?????n v???i m???u &aacute;o thun&nbsp;Rive', 'game'),
(30, 'GOTY025', '??o thun Marco - One Piece', 13, './img_item/wibu-5.jpg', '<p>Marco the Phoenix l&agrave; ?????i tr?????ng ?????i&nbsp;1 c???a b??ng h???i t???c R&acirc;u Tr???ng.&nbsp;Sau c&aacute;i ch???t c???a thuy???n tr?????ng, Marco ?????m nh???n vai tr&ograve; l&atilde;nh ?????o b??ng h???i t???c R&acirc;u Tr???ng cho ?????n khi b??ng tan r&atilde; sau s??? ki???n Paybac', 'wibu'),
(31, 'GOTY026', '??o thun Sonic Th?? Gi??n T??', 13, './img_item/Sonic_relax.jpg', '<p>Ch???y m&atilde;i r???i c??ng m???t, anh em c&ugrave;ng Sonic th?? gi&atilde;n t&iacute; qua m???u &aacute;o m???i c???a The Next Level nh&eacute;.<br />\r\n<br />\r\nH&atilde;y c&ugrave;ng The Next Level ?????n v???i m???u &aacute;o&nbsp;Sonic Th?? Gi&atilde;n T&iacute;.</p>\r\n', 'wibu'),
(32, 'GOTY027', '??o thun The Next Level Original', 13, './img_item/Thenextlevel.jpg', '<p>M???t thi???t k??? do ch&iacute;nh The Next Level thi???t k??? d&agrave;nh cho anh em c&oacute; ni???m ??am m&ecirc; v???i game, ?????m b???o kh&ocirc;ng ?????ng h&agrave;ng v???i ai nh&eacute; :D<br />\r\n<br />\r\nH&atilde;y c&ugrave;ng The Next Level ?????n v???i m???u &aacute;o&nbsp;', 'game'),
(33, 'GOTY028', '??o thun Th???t Khuy???n', 13, './img_item/ThatKhuyen.jpg', '<p>M???u &aacute;o t???p h???p c&aacute;c ch&uacute; ch&oacute;/s&oacute;i&nbsp;n???i ti???ng nh???t trong th??? gi???i game t???&nbsp;Dark Souls, Pokemon, The Legend of Zelda, Okami, Metal Gear Solid V, Persona 3,&nbsp;Tales of Vesperia.</p>\r\n\r\n<p>H&atilde;y c&ugrave;ng T', 'game'),
(34, 'WOTY007', '??o thun T??i L?? Ninja', 13, './img_item/Ninnja.jpg', '<p>C&ugrave;ng The Next Level truy t&igrave;m ninja.</p>\r\n', 'wibu'),
(35, 'GOTY029', '??o thun Ratchet & Clank - Game of The Year 2021', 13, './img_item/Ratchet&Clank.jpg', '<p>Ao thun nay rat la dep</p>\r\n', 'game new'),
(36, 'GOTY030', '??o thun Psychonauts 2 - Game of The Year 2021', 13, './img_item/Psychonauts2.jpg', '<p>Ao thun nay rat tuyet voi nhe cac ban</p>\r\n', 'game new'),
(37, 'GOTY031', '??o thun It Takes Two - Game of The Year 2021', 13, './img_item/ItTakesTwo.jpg', '<p>&Aacute;o thun GAME OF THE YEAR</p>\r\n', 'game new'),
(38, 'GOTY028', '??o thun Cassiopeia & Lillia', 13, './img_item/cassopia.jpg', '<p>Nh???ng ai l&agrave; fan c???a ?????u Tr?????ng Ch&acirc;n L&yacute; th&igrave; ch???c ch???n kh&ocirc;ng th??? kh&ocirc;ng bi???t c???p ??&ocirc;i t?????ng U H???n x???n x&ograve; b???c nh???t n&agrave;y. H&atilde;y c&ugrave;ng The Next Level t&igrave;m ?????n v???i m???u &aacute;o thun&nb', 'game'),
(39, 'GOTY032', '??o thun Katana Zero', 13, './img_item/katana-zero.jpg', '<p>Ao cuc ki dep</p>\r\n', 'game'),
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
