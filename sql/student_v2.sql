-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2019 at 06:30 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctec`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_v2`
--

CREATE TABLE `student_v2` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `sid` mediumint(9) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gpa` mediumint(9) NOT NULL,
  `financial_aid` mediumint(9) NOT NULL,
  `degree_program` varchar(255) NOT NULL,
  `graduation_date` date DEFAULT NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `data_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_v2`
--

INSERT INTO `student_v2` (`id`, `sid`, `first_name`, `last_name`, `gpa`, `financial_aid`, `degree_program`, `graduation_date`, `email`, `phone`, `data_created`) VALUES
(1, 1000, 'Quynn', 'Berger', 1, 1, '', '0000-00-00', 'lobortis.ultrices.Vivamus@aliquamenimnec.co.uk', '749-1162', '2019-02-14 04:01:15'),
(2, 999, 'Troy', 'Rojas', 4, 1, '', '0000-00-00', 'rutrum.magna@faucibusorciluctus.org', '921-0141', '2019-02-14 04:01:15'),
(3, 998, 'Lionel', 'Merrill', 2, 1, '', '0000-00-00', 'ligula.eu.enim@iaculisquis.edu', '1-653-852-2223', '2019-02-14 04:01:15'),
(4, 997, 'Kellie', 'Farrell', 2, 0, '', '0000-00-00', 'semper.et@in.edu', '1-879-348-6543', '2019-02-14 04:01:15'),
(5, 996, 'Carla', 'Rosales', 2, 1, '', '0000-00-00', 'suscipit@Curabiturutodio.org', '720-4936', '2019-02-14 04:01:15'),
(6, 995, 'Patience', 'Knapp', 3, 0, '', '0000-00-00', 'nunc.ullamcorper@enimconsequatpurus.org', '189-6243', '2019-02-14 04:01:15'),
(7, 994, 'Amanda', 'Floyd', 0, 0, '', '0000-00-00', 'enim.Nunc@Vestibulumaccumsanneque.edu', '825-0545', '2019-02-14 04:01:15'),
(8, 993, 'Caleb', 'Knight', 2, 0, '', '0000-00-00', 'ultricies@et.edu', '843-7777', '2019-02-14 04:01:15'),
(9, 992, 'Nerea', 'Barrett', 2, 1, '', '0000-00-00', 'Nulla.tincidunt@esttemporbibendum.net', '1-518-491-0740', '2019-02-14 04:01:15'),
(10, 991, 'Keiko', 'Meyer', 1, 0, '', '0000-00-00', 'arcu@nequesedsem.co.uk', '1-670-222-9896', '2019-02-14 04:01:15'),
(11, 990, 'Brynn', 'West', 2, 0, '', '0000-00-00', 'condimentum@ipsumac.com', '1-517-135-4370', '2019-02-14 04:01:15'),
(12, 989, 'Justine', 'Newman', 4, 0, '', '0000-00-00', 'euismod.ac.fermentum@Morbi.net', '160-7944', '2019-02-14 04:01:15'),
(13, 988, 'Vladimir', 'Morris', 3, 1, '', '0000-00-00', 'dignissim@nectellusNunc.edu', '1-767-956-7875', '2019-02-14 04:01:15'),
(14, 987, 'Yolanda', 'Parker', 1, 0, '', '0000-00-00', 'risus@eu.edu', '881-2614', '2019-02-14 04:01:15'),
(15, 986, 'Macey', 'Mcdonald', 4, 1, '', '0000-00-00', 'consequat@posuereat.net', '771-9845', '2019-02-14 04:01:15'),
(16, 985, 'Noelle', 'Faulkner', 0, 0, '', '0000-00-00', 'quam@egetmassa.co.uk', '1-917-102-2008', '2019-02-14 04:01:15'),
(17, 984, 'Shoshana', 'Duncan', 0, 1, '', '0000-00-00', 'nibh.Aliquam@posuereenim.edu', '1-703-273-5136', '2019-02-14 04:01:15'),
(18, 983, 'Rowan', 'Guzman', 1, 0, '', '0000-00-00', 'urna.Ut.tincidunt@dictum.org', '967-7163', '2019-02-14 04:01:15'),
(19, 982, 'Yuli', 'Pollard', 2, 1, '', '0000-00-00', 'mattis@purus.org', '851-4218', '2019-02-14 04:01:15'),
(20, 981, 'Blossom', 'Schmidt', 0, 0, '', '0000-00-00', 'tempus@vehicularisusNulla.net', '297-4322', '2019-02-14 04:01:15'),
(21, 980, 'Sebastian', 'Richard', 1, 1, '', '0000-00-00', 'elit.erat@faucibusidlibero.net', '447-6422', '2019-02-14 04:01:15'),
(22, 979, 'Hop', 'Long', 2, 1, '', '0000-00-00', 'ligula@lobortisauguescelerisque.edu', '921-6923', '2019-02-14 04:01:15'),
(23, 978, 'Kathleen', 'Flores', 1, 0, '', '0000-00-00', 'eget.mollis@duinecurna.edu', '1-948-504-2374', '2019-02-14 04:01:15'),
(24, 977, 'Madonna', 'Mercado', 2, 1, '', '0000-00-00', 'vel.sapien.imperdiet@magnatellus.net', '1-418-124-2959', '2019-02-14 04:01:15'),
(25, 976, 'Russell', 'Murphy', 2, 0, '', '0000-00-00', 'pharetra.felis@ornare.net', '696-0131', '2019-02-14 04:01:15'),
(26, 975, 'Demetria', 'James', 2, 1, '', '0000-00-00', 'penatibus@ligulaconsectetuer.edu', '1-350-932-8438', '2019-02-14 04:01:15'),
(27, 974, 'Lacota', 'Chase', 1, 1, '', '0000-00-00', 'feugiat@lacusQuisqueimperdiet.com', '670-9058', '2019-02-14 04:01:15'),
(28, 973, 'Quon', 'Massey', 4, 1, '', '0000-00-00', 'neque.non.quam@Praesenteu.co.uk', '846-8776', '2019-02-14 04:01:15'),
(29, 972, 'Cairo', 'Bass', 2, 0, '', '0000-00-00', 'tempor@eulacus.edu', '212-8740', '2019-02-14 04:01:15'),
(30, 971, 'Alea', 'Meadows', 2, 1, '', '0000-00-00', 'hendrerit.a.arcu@egettinciduntdui.com', '1-466-461-7634', '2019-02-14 04:01:15'),
(31, 970, 'Martena', 'Santos', 3, 1, '', '0000-00-00', 'placerat@vel.edu', '364-9973', '2019-02-14 04:01:15'),
(32, 969, 'Quintessa', 'Frye', 0, 1, '', '0000-00-00', 'diam@natoquepenatibus.ca', '1-324-946-0846', '2019-02-14 04:01:15'),
(33, 968, 'Emma', 'Patterson', 3, 1, '', '0000-00-00', 'senectus@ligula.co.uk', '152-2847', '2019-02-14 04:01:15'),
(34, 967, 'Samson', 'Fuentes', 0, 1, '', '0000-00-00', 'Nunc.sed.orci@Donecat.edu', '1-957-911-3953', '2019-02-14 04:01:15'),
(35, 966, 'Regan', 'Walter', 0, 1, '', '0000-00-00', 'sed@tempusnonlacinia.co.uk', '1-737-127-2686', '2019-02-14 04:01:15'),
(36, 965, 'Cullen', 'Shannon', 0, 1, '', '0000-00-00', 'eget@DuisgravidaPraesent.ca', '1-862-693-8443', '2019-02-14 04:01:15'),
(37, 964, 'Adrian', 'Rosa', 2, 1, '', '0000-00-00', 'justo@montesnascetur.net', '522-1164', '2019-02-14 04:01:15'),
(38, 963, 'Alden', 'Boone', 0, 1, '', '0000-00-00', 'risus.Morbi.metus@diamdictum.co.uk', '1-216-337-5812', '2019-02-14 04:01:15'),
(39, 962, 'Christen', 'Mooney', 4, 0, '', '0000-00-00', 'Sed@famesac.ca', '269-5574', '2019-02-14 04:01:15'),
(40, 961, 'Reece', 'Berger', 4, 0, '', '0000-00-00', 'sed.tortor.Integer@Namporttitorscelerisque.com', '1-369-100-6550', '2019-02-14 04:01:15'),
(41, 960, 'Quail', 'Williamson', 2, 0, '', '0000-00-00', 'hendrerit.neque.In@Sed.ca', '425-4598', '2019-02-14 04:01:15'),
(42, 959, 'Kasimir', 'Cunningham', 0, 0, '', '0000-00-00', 'augue.porttitor.interdum@Proin.co.uk', '1-936-174-9963', '2019-02-14 04:01:15'),
(43, 958, 'Colorado', 'Fowler', 2, 1, '', '0000-00-00', 'urna.convallis.erat@adipiscing.com', '1-831-372-0237', '2019-02-14 04:01:15'),
(44, 957, 'Price', 'Alston', 2, 0, '', '2020-06-30', 'malesuada@convallisligulaDonec.co.uk', '351-1474', '2019-03-11 04:48:30'),
(45, 956, 'Fiona', 'Vinson', 3, 1, '', '0000-00-00', 'egestas.blandit@sitamet.edu', '1-159-704-7609', '2019-02-14 04:01:15'),
(46, 955, 'Ruby', 'Lloyd', 3, 1, '', '0000-00-00', 'Curabitur@idblandit.net', '487-9293', '2019-02-14 04:01:15'),
(47, 954, 'Brennan', 'Gutierrez', 3, 1, '', '0000-00-00', 'magnis.dis@interdumenimnon.net', '1-834-663-8027', '2019-02-14 04:01:15'),
(48, 953, 'Patience', 'Conley', 2, 1, '', '0000-00-00', 'Fusce@vestibulummassa.org', '533-9572', '2019-02-14 04:01:15'),
(49, 952, 'Lyle', 'Mcmahon', 1, 1, '', '0000-00-00', 'et@massaQuisque.org', '957-2452', '2019-02-14 04:01:15'),
(50, 951, 'Destiny', 'Brady', 0, 0, '', '0000-00-00', 'consequat.auctor.nunc@consequatauctor.org', '1-467-894-1269', '2019-02-14 04:01:15'),
(51, 950, 'Kelsey', 'Owens', 4, 0, '', '0000-00-00', 'vulputate.velit@acmattis.co.uk', '480-9805', '2019-02-14 04:01:15'),
(52, 949, 'Madeson', 'Blankenship', 0, 0, '', '0000-00-00', 'ac.turpis.egestas@vitaesodales.edu', '203-4960', '2019-02-14 04:01:15'),
(53, 948, 'Gabriel', 'Perry', 0, 1, '', '0000-00-00', 'eget.varius.ultrices@hymenaeosMaurisut.org', '1-259-114-7112', '2019-02-14 04:01:15'),
(54, 947, 'Melodie', 'Mcfadden', 4, 0, '', '0000-00-00', 'ac@aliquet.org', '1-201-949-2137', '2019-02-14 04:01:15'),
(55, 946, 'Natalie', 'Golden', 3, 0, '', '0000-00-00', 'varius.orci@facilisisloremtristique.edu', '1-662-427-8289', '2019-02-14 04:01:15'),
(56, 945, 'Arden', 'Austin', 3, 1, '', '0000-00-00', 'dis@elit.edu', '1-241-800-7859', '2019-02-14 04:01:15'),
(57, 944, 'Lara', 'Morales', 2, 1, '', '0000-00-00', 'dictum@temporbibendum.edu', '1-977-951-2618', '2019-02-14 04:01:15'),
(58, 943, 'Vaughan', 'Nieves', 0, 0, '', '0000-00-00', 'sit.amet.faucibus@a.ca', '809-6836', '2019-02-14 04:01:15'),
(59, 942, 'Scarlet', 'Cardenas', 3, 0, '', '0000-00-00', 'eu@ut.com', '405-4296', '2019-02-14 04:01:15'),
(60, 941, 'Ezra', 'Gonzalez', 1, 1, '', '0000-00-00', 'tellus.Nunc@nuncQuisque.co.uk', '870-2535', '2019-02-14 04:01:15'),
(61, 940, 'Shaeleigh', 'Manning', 3, 0, '', '0000-00-00', 'in.magna@ipsumCurabitur.com', '991-9702', '2019-02-14 04:01:15'),
(62, 939, 'Aurelia', 'Chapman', 2, 0, '', '0000-00-00', 'vitae.nibh.Donec@consequatpurus.edu', '1-351-145-0552', '2019-02-14 04:01:15'),
(63, 938, 'Merritt', 'Nielsen', 3, 0, '', '0000-00-00', 'arcu.Vivamus.sit@leo.ca', '617-3872', '2019-02-14 04:01:15'),
(64, 937, 'Wesley', 'Price', 0, 1, '', '0000-00-00', 'rutrum@ultricesDuis.net', '861-5826', '2019-02-14 04:01:15'),
(65, 936, 'Aiko', 'Russo', 2, 0, '', '0000-00-00', 'quis.arcu@Nullam.edu', '403-2031', '2019-02-14 04:01:15'),
(66, 935, 'Olga', 'Valdez', 2, 1, '', '0000-00-00', 'porttitor.vulputate.posuere@ipsumac.com', '1-652-870-4304', '2019-02-14 04:01:15'),
(67, 934, 'Kalia', 'Carlson', 4, 1, '', '0000-00-00', 'scelerisque@enimgravidasit.net', '123-4154', '2019-02-14 04:01:15'),
(68, 933, 'Erica', 'Martin', 3, 0, '', '0000-00-00', 'arcu.Sed.et@metusIn.ca', '566-7092', '2019-02-14 04:01:15'),
(69, 932, 'Darius', 'Navarro', 1, 0, '', '0000-00-00', 'Sed@augue.co.uk', '1-307-569-8839', '2019-02-14 04:01:15'),
(70, 931, 'Micah', 'Camacho', 4, 0, '', '0000-00-00', 'metus.urna@penatibuset.edu', '621-0421', '2019-02-14 04:01:15'),
(71, 930, 'Hop', 'Ellison', 2, 0, '', '0000-00-00', 'id.erat.Etiam@Nunclaoreetlectus.ca', '1-760-357-2698', '2019-02-14 04:01:15'),
(72, 929, 'Magee', 'Bradford', 4, 0, '', '0000-00-00', 'non.lorem.vitae@malesuadaIntegerid.org', '460-4542', '2019-02-14 04:01:15'),
(73, 928, 'Athena', 'Bridges', 3, 1, '', '0000-00-00', 'facilisis.vitae@magna.com', '1-548-790-6819', '2019-02-14 04:01:15'),
(74, 927, 'Kim', 'Coleman', 4, 1, '', '0000-00-00', 'pede.malesuada@NuncmaurisMorbi.edu', '861-7576', '2019-02-14 04:01:15'),
(75, 926, 'Ivana', 'Nichols', 0, 0, '', '0000-00-00', 'magnis@metus.edu', '787-0730', '2019-02-14 04:01:15'),
(76, 925, 'Gwendolyn', 'Hinton', 3, 1, '', '0000-00-00', 'Sed.pharetra.felis@odioapurus.edu', '1-395-958-4433', '2019-02-14 04:01:15'),
(77, 924, 'Kim', 'Sparks', 0, 1, '', '0000-00-00', 'in.lobortis.tellus@lobortisultricesVivamus.org', '1-609-408-9192', '2019-02-14 04:01:15'),
(78, 923, 'Ursula', 'Koch', 2, 0, '', '0000-00-00', 'hymenaeos@consequat.co.uk', '1-975-505-9457', '2019-02-14 04:01:15'),
(79, 922, 'Xaviera', 'Clements', 2, 0, '', '0000-00-00', 'nulla.Integer.vulputate@blanditcongue.co.uk', '1-559-184-0104', '2019-02-14 04:01:15'),
(80, 921, 'Brianna', 'Bowen', 1, 1, '', '0000-00-00', 'vel@gravidaAliquamtincidunt.edu', '703-7863', '2019-02-14 04:01:15'),
(81, 920, 'Nolan', 'Hickman', 4, 1, '', '0000-00-00', 'rutrum.non@afeugiat.co.uk', '1-924-765-4693', '2019-02-14 04:01:15'),
(82, 919, 'Arthur', 'Fuller', 2, 1, '', '0000-00-00', 'Nam.nulla.magna@pretiumneque.net', '661-4142', '2019-02-14 04:01:15'),
(83, 918, 'Mason', 'Johnston', 0, 0, '', '0000-00-00', 'semper.dui.lectus@necmetus.edu', '834-0295', '2019-02-14 04:01:15'),
(84, 917, 'Carson', 'Mccarthy', 4, 0, '', '0000-00-00', 'enim.Suspendisse.aliquet@felis.net', '654-2083', '2019-02-14 04:01:15'),
(85, 916, 'Clare', 'Santiago', 1, 0, '', '0000-00-00', 'amet.faucibus.ut@eratvelpede.com', '403-4664', '2019-02-14 04:01:15'),
(86, 915, 'Alan', 'Padilla', 2, 0, '', '0000-00-00', 'turpis@necligula.com', '480-6116', '2019-02-14 04:01:15'),
(87, 914, 'George', 'Dorsey', 2, 0, '', '0000-00-00', 'vitae@utodiovel.org', '1-360-139-4660', '2019-02-14 04:01:15'),
(88, 913, 'Colby', 'Sheppard', 1, 1, '', '0000-00-00', 'Integer.vitae@Cras.com', '1-348-165-4526', '2019-02-14 04:01:15'),
(89, 912, 'Mollie', 'Carver', 0, 1, '', '0000-00-00', 'mollis.vitae@Incondimentum.edu', '768-1352', '2019-02-14 04:01:15'),
(90, 911, 'Norman', 'Levine', 1, 1, '', '0000-00-00', 'id.mollis.nec@uteros.ca', '273-2347', '2019-02-14 04:01:15'),
(91, 910, 'Phillip', 'Cannon', 0, 1, '', '0000-00-00', 'sagittis.Duis.gravida@auguescelerisque.edu', '1-824-661-1038', '2019-02-14 04:01:15'),
(92, 909, 'Irma', 'Beasley', 2, 0, '', '0000-00-00', 'malesuada@ornarelectus.org', '1-650-348-8761', '2019-02-14 04:01:15'),
(93, 908, 'Vielka', 'Brewer', 4, 0, '', '0000-00-00', 'Quisque.porttitor.eros@feugiatmetus.net', '1-659-245-0304', '2019-02-14 04:01:15'),
(94, 907, 'Althea', 'Badams', 1, 1, '', '0000-00-00', 'dapibus.quam@eget.org', '1-411-636-1873', '2019-03-03 23:51:58'),
(95, 906, 'Kaye', 'Owen', 2, 0, '', '0000-00-00', 'facilisis@volutpatnuncsit.net', '821-2802', '2019-02-14 04:01:15'),
(96, 905, 'Thane', 'Morton', 1, 0, '', '0000-00-00', 'sed.turpis@morbitristiquesenectus.net', '865-3431', '2019-02-14 04:01:15'),
(97, 904, 'Chase', 'Hunt', 4, 0, '', '0000-00-00', 'Donec.elementum.lorem@Sednullaante.ca', '616-6561', '2019-02-14 04:01:15'),
(98, 903, 'Kaye', 'Hobbs', 4, 0, '', '0000-00-00', 'lorem.Donec@Lorem.com', '1-418-873-2447', '2019-02-14 04:01:15'),
(99, 902, 'Cheryl', 'Clemons', 0, 0, '', '0000-00-00', 'Aenean@nislelementumpurus.edu', '424-9989', '2019-02-14 04:01:15'),
(100, 901, 'Kelsey', 'Mccullough', 4, 1, '', '0000-00-00', 'risus.In.mi@orcisemeget.edu', '524-3686', '2019-02-14 04:01:15'),
(105, 1235, 'Linda', 'Belcher', 4, 1, 'Chainsaw Juggling', '0000-00-00', 'linda@belcher.com', '555-555-5555', '2019-02-26 02:21:38'),
(107, 1236, 'Gene', 'Belcher', 1, 1, 'Lion Taming', '0000-00-00', 'gene@belcher.com', '555-555-5555', '2019-02-26 02:31:29'),
(109, 1237, 'Tina', 'Belcher', 3, 1, 'Trapeze', '0000-00-00', 'tina@belcher.com', '555-555-5555', '2019-02-26 04:02:43'),
(110, 1238, 'Louise', 'Belcher', 2, 1, 'Trick Riding', '0000-00-00', 'louise@belcher.com', '555-555-5555', '2019-02-26 04:16:32'),
(114, 1234, 'Bob', 'Belcher', 3, 0, 'Chainsaw Juggling', '0000-00-00', 'bob@belcher.com', '555-555-5555', '2019-03-07 19:56:45'),
(116, 1240, 'Homer', 'Simpson', 0, 0, 'Clowning', '0000-00-00', 'homer@simpsons.com', '555-555-5555', '2019-02-27 04:59:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_v2`
--
ALTER TABLE `student_v2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_v2`
--
ALTER TABLE `student_v2`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
