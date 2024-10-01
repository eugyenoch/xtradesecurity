-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2024 at 09:29 PM
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
-- Database: `xtradesecurity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_no` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(55) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_no`, `firstname`, `lastname`, `user_email`, `userName`, `user_pass`, `address`, `city`, `country`, `phone`, `photo`, `reg_date`) VALUES
(1, 'Xtradesecurity', 'Admin', 'noadmin@xtradesecurity.com', 'xtradesecurityadmin', 'd46740369851d8c082996a005b371fe2', '', 'Dubai', 'United Arab Emirates', '+2347030000000', '../assets/user-uploads/Slide4.jpg', '2024-08-01 09:23:18');

-- --------------------------------------------------------

--
-- Table structure for table `bank_accounts`
--

CREATE TABLE `bank_accounts` (
  `id` int(11) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `sortcode` varchar(255) NOT NULL,
  `swiftcode` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_owner` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank_accounts`
--

INSERT INTO `bank_accounts` (`id`, `account_name`, `account_number`, `sortcode`, `swiftcode`, `bank_name`, `account_owner`, `date_created`) VALUES
(1, 'Samson Delilah', '0987654321', '0987654', '09876543', 'Barclays Bank', 'info@xtradesecurity.com', '2024-09-04 14:07:16'),
(3, 'Jonah Wales', '98712345623', '45637829', '564738920', 'Arsenal Bank LTD', 'info@xtradesecurity.com', '2024-09-04 14:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE `fund` (
  `id_no` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `ftxn` varchar(512) DEFAULT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `fund_currency` varchar(255) DEFAULT NULL,
  `fund_amount` decimal(19,5) DEFAULT NULL,
  `fund_profit` decimal(19,5) DEFAULT NULL,
  `fund_proof` varchar(255) DEFAULT NULL,
  `fund_comment` varchar(1024) DEFAULT NULL,
  `is_locked` varchar(255) DEFAULT NULL,
  `fund_status` varchar(255) NOT NULL DEFAULT 'pending',
  `approved_at` date DEFAULT NULL,
  `fund_request_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fund`
--

INSERT INTO `fund` (`id_no`, `user_email`, `userName`, `ftxn`, `firstname`, `lastname`, `fund_currency`, `fund_amount`, `fund_profit`, `fund_proof`, `fund_comment`, `is_locked`, `fund_status`, `approved_at`, `fund_request_date`) VALUES
(2, 'danjohn@gmail.com', '', 'TXN765434', 'Daniel', 'John', 'BTC', 2.00000, 7.98700, '2(1).png', 'Nothing more to do', NULL, 'approved', NULL, '2024-08-02 21:43:39'),
(5, 'emeka@gmail.com', '', 'TXN09855', 'Emeka', 'Bold', 'SOL', 4.03000, 10.67800, '2(1).png', 'There is more to come', NULL, 'pending', NULL, '2024-08-02 22:05:18'),
(8, 'info@xtradesecurity.com', 'xtradeinfo', 'TXN251668', 'xtradesecurity', 'user', 'BSC', 1000.00000, NULL, NULL, NULL, NULL, 'approved', NULL, '2024-09-07 16:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(19) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `registration_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `fullname`, `email_address`, `registration_date`) VALUES
(1, 'Yhame Mail', 'yhamemail@gmail.com', '2024-08-03 15:41:43'),
(2, 'Iboora System', 'iboorasystems@gmail.com', '2024-08-03 15:41:56'),
(6, 'loggerbros', 'loggerbros@gmail.com', '2024-08-03 17:49:21'),
(8, 'kikicoin services', 'kikicoinservices@gmail.com', '2024-08-03 17:50:28'),
(16, 'dan john', 'danjohn@gmail.com', '2024-08-03 18:40:19'),
(17, 'dan john', 'danny@email.com', '2024-08-09 09:52:25'),
(19, 'Snoop lion', 'snoop.lion@gmail.com', '2024-08-09 10:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `peer_transfer`
--

CREATE TABLE `peer_transfer` (
  `id_no` int(11) NOT NULL,
  `ptxn` varchar(25) DEFAULT NULL,
  `seller_email` varchar(255) DEFAULT NULL,
  `seller_username` varchar(255) NOT NULL,
  `seller_wallet` varchar(255) DEFAULT NULL,
  `buyer_email` varchar(255) DEFAULT NULL,
  `buyer_username` varchar(255) NOT NULL,
  `buyer_wallet` varchar(255) DEFAULT NULL,
  `first_currency` varchar(512) DEFAULT NULL,
  `second_currency` varchar(512) DEFAULT NULL,
  `seller_amount` decimal(19,5) DEFAULT NULL,
  `buyer_amount` decimal(19,5) DEFAULT NULL,
  `prole` varchar(512) DEFAULT NULL,
  `recipient_message` text DEFAULT NULL,
  `pstatus` varchar(255) NOT NULL DEFAULT 'pending',
  `approved_at` date DEFAULT NULL,
  `peer_transact_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peer_transfer`
--

INSERT INTO `peer_transfer` (`id_no`, `ptxn`, `seller_email`, `seller_username`, `seller_wallet`, `buyer_email`, `buyer_username`, `buyer_wallet`, `first_currency`, `second_currency`, `seller_amount`, `buyer_amount`, `prole`, `recipient_message`, `pstatus`, `approved_at`, `peer_transact_date`) VALUES
(1, 'TXN09876543', 'seller@gmail.com', 'seller', '098765434567898765', 'buyer@gmail.com', 'buyer', '0987654323456789', 'USD', 'BTC', 9.00000, 5.00000, 'P2P', 'This is just a common test message', 'pending', NULL, '2024-08-08 22:03:39'),
(3, 'TXN52325281', 'info@xtradesecurity.com', 'xtradeinfo', 'xt0987654321qwertyui567890lkjhgfdsav2345', 'danjohn@gmail.com', 'danjohn', 'xt22987654321qwertyui567890lkjhgfdsav234\r\n', 'USDT', NULL, 90.00000, 90.00000, 'fund transfer', 'this is a git test', 'auto approved', NULL, '2024-09-07 20:08:56'),
(4, 'TXN20940162', 'info@xtradesecurity.com', 'xtradeinfo', 'xt0987654321qwertyui567890lkjhgfdsav2345', 'danjohn@gmail.com', 'danjohn', 'xt22987654321qwertyui567890lkjhgfdsav234\r\n', 'USDT', NULL, 119.99800, 119.99800, 'fund transfer', 'I can do all things', 'auto approved', NULL, '2024-09-07 20:12:52'),
(8, 'TXN67534181', 'info@xtradesecurity.com', 'xtradeinfo', 'xt0987654321qwertyui567890lkjhgfdsav2345', 'danjohn@gmail.com', 'danjohn', 'xt22987654321qwertyui567890lkjhgfdsav234\r\n', 'USDT', NULL, 119.99800, 119.99800, 'fund transfer', 'okay', 'auto approved', NULL, '2024-09-07 20:32:51');

-- --------------------------------------------------------

--
-- Table structure for table `referral`
--

CREATE TABLE `referral` (
  `id` int(11) NOT NULL,
  `referrer` varchar(50) NOT NULL,
  `referrer_email` varchar(255) NOT NULL,
  `referrer_affid` varchar(255) NOT NULL,
  `user_referred` varchar(50) NOT NULL,
  `user_referred_email` varchar(255) NOT NULL,
  `user_referred_affid` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `referral`
--

INSERT INTO `referral` (`id`, `referrer`, `referrer_email`, `referrer_affid`, `user_referred`, `user_referred_email`, `user_referred_affid`, `date`) VALUES
(5, 'INFO', '', '812781', 'opis00', '', '122331', '2024-08-10 18:39:02'),
(6, 'INFO', 'info@xtradesecurity.com', '812781', 'Event Planner', 'events@childtraumaconsultancy.co.uk', '158628', '2024-08-10 19:07:55'),
(7, 'danjohn', 'danny@gmail.com', '8764254', 'pawpaw', 'pawpaw@gmail.com', '987333', '2024-08-10 19:12:42'),
(8, 'INFO', 'info@xtradesecurity.com', '812781', 'GooglePolice', 'police@gmail.com', '952980', '2024-08-10 19:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `totals`
--

CREATE TABLE `totals` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `total_deposit` decimal(10,2) NOT NULL,
  `total_withdrawal` decimal(10,2) NOT NULL,
  `total_exchanged` decimal(10,2) NOT NULL,
  `total_peer_transfer` decimal(10,2) NOT NULL,
  `total_profit` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id_no` int(11) NOT NULL,
  `txn` varchar(25) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `userName` varchar(255) NOT NULL,
  `tpackage` varchar(512) DEFAULT NULL,
  `tamount` decimal(19,5) DEFAULT NULL,
  `tprofit` decimal(19,5) DEFAULT NULL,
  `tcurrency` varchar(255) DEFAULT 'USD',
  `tduration` varchar(512) DEFAULT '30',
  `tinterest` decimal(8,3) DEFAULT NULL,
  `trole` varchar(512) DEFAULT 'trader',
  `tstatus` varchar(255) NOT NULL DEFAULT 'pending',
  `approved_at` datetime DEFAULT NULL,
  `transact_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id_no`, `txn`, `user_email`, `userName`, `tpackage`, `tamount`, `tprofit`, `tcurrency`, `tduration`, `tinterest`, `trole`, `tstatus`, `approved_at`, `transact_date`) VALUES
(1, 'TXN09876', 'okon@gmail.com', 'okonekpa', 'silver', 50.00000, NULL, 'USD', '30', NULL, 'investor', 'pending', '2024-08-22 13:47:32', '2024-08-03 10:22:58'),
(3, 'TXN03376', 'okonji@gmail.com', 'okonji', 'Diamond', 500.00000, NULL, 'USD', '30', NULL, 'trader', 'approved', '2024-08-22 13:47:32', '2024-08-03 10:24:11'),
(4, 'TXN5574', 'barto@gmail.com', 'barto', 'Platinum', 850.00000, 90.00000, 'ETH', '30', NULL, 'trader', 'pending', '2024-08-22 13:47:32', '2024-08-03 10:24:11'),
(5, 'TXN9595885', 'userEmail@mail.com', 'Useremailgmail', 'Gold', 50.00000, 300.00000, 'USD', '30', 0.150, 'trader', 'approved', '2024-08-22 13:47:32', '2024-08-04 10:21:42'),
(6, 'TXN614213', 'info@xtradesecurity.com', 'xtradeinfo', 'Silver', 300.00000, NULL, 'BSC', '30', 0.100, 'trader', 'pending', NULL, '2024-09-07 20:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_no` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(55) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `affid` int(255) DEFAULT NULL,
  `asset_address` varchar(512) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp(),
  `verification_token` varchar(512) NOT NULL,
  `is_verified` int(11) NOT NULL,
  `id_type` varchar(255) DEFAULT NULL,
  `id_front` varchar(255) DEFAULT NULL,
  `id_back` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_no`, `firstname`, `lastname`, `user_email`, `userName`, `user_pass`, `address`, `city`, `country`, `phone`, `photo`, `affid`, `asset_address`, `reg_date`, `verification_token`, `is_verified`, `id_type`, `id_front`, `id_back`) VALUES
(1, 'Daniel', 'John', 'danjohn@gmail.com', 'danjohn', 'bfa2cfa3e62d924082d642fb35072aea', NULL, 'Lagos', 'Nigeria', '07030000000', NULL, 3454545, 'xt22987654321qwertyui567890lkjhgfdsav234\r\n', '2024-08-02 15:58:07', '', 0, NULL, NULL, NULL),
(15, 'DU', 'Enoch', 'yhamemail@gmail.com', 'yhamer', '1c77bb6831e107d5982f0b436c9b7c47', 'plot 1024', 'agbani', 'Nigeria', '+9307032553325', NULL, 835952, '', '2024-08-06 17:56:51', '64f088da1fc190bef77b3ebae3138616', 1, NULL, NULL, NULL),
(17, 'xtradesecurity', 'user', 'info@xtradesecurity.com', 'xtradeinfo', 'bfa2cfa3e62d924082d642fb35072aea', '123 Central Area, West London', 'London', 'Djibouti', '+6599876544', '../assets/user-uploads/dashboard 1.png', 812781, 'xt0987654321qwertyui567890lkjhgfdsav2345', '2024-08-07 16:06:27', 'b0a755904cbc26665d7600413feac603', 1, NULL, NULL, NULL),
(19, 'Softa', 'Demo', 'demos@softa.com', 'Softaculos', 'a434ec7efd5efb4315804e331ed4a474', '', '', 'French Guiana', '+93999484848', NULL, 155121, '', '2024-08-10 17:17:17', '62018b58a88b225bee04b571f9f8a577', 0, NULL, NULL, NULL),
(20, 'OPI', 'Special', 'oip@nsk.com', 'opis', '954246cd631c1c8390ff5831235b774c', '', '', 'Costa Rica', '+43999484866', NULL, 528090, '', '2024-08-10 18:29:52', '5cf8b449f1a07fd9a54ec12124992b35', 0, NULL, NULL, NULL),
(21, 'Splintos', 'Group', 'splintosgroup@gmail.com', 'opis00', 'e14d69b484bb4f17e03a422b785e4b32', '', '', 'Afghanistan', '+6187654567890', NULL, 122331, '', '2024-08-10 18:39:02', '5e3a279b12a7b19c83b397dba5942b47', 0, NULL, NULL, NULL),
(22, 'Poch', 'Roch', 'pooo@pooo.com', 'poooo', '15a044d3532e48280e5cfa36596c1b88', '', '', 'Afghanistan', '+2299876543456', NULL, 137120, '', '2024-08-10 19:05:08', '9a82be28bf3f1c2f82c6f25ebfe7f18e', 0, NULL, NULL, NULL),
(23, 'Poch', 'Roch', 'events@childtraumaconsult.co.uk', 'Event Planner', 'ce1958be5fa5776dea21d7156f2ab526', '', '', 'Afghanistan', '+93876543464', NULL, 158628, '', '2024-08-10 19:07:55', '0ccfa4985e2ce3d8da446d120524f4ad', 0, NULL, NULL, NULL),
(24, 'Google', 'Police', 'police@gmail.com', 'GooglePolice', '326abe6733e9888571f744a8a63b0fcc', '', '', 'Afghanistan', '+939876545678', NULL, 952980, '', '2024-08-10 19:32:37', 'd9e9e45d5d4624168dccba1416d2547a', 0, NULL, NULL, NULL),
(25, 'mark', 'morrison', 'poiuiou@gmail.com', 'POihug', '1cbd75844ada1fb98355ff338efc0727', '', '', 'Afghanistan', '+93876545678', NULL, 647197, '', '2024-08-10 19:33:29', '62d8a13ec2d8557a1d28738cb86b4b38', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wallet_addresses`
--

CREATE TABLE `wallet_addresses` (
  `id_no` int(11) NOT NULL,
  `wallet` varchar(255) DEFAULT NULL,
  `address` varchar(2048) DEFAULT NULL,
  `wallet_tag` varchar(255) NOT NULL,
  `qrcode` varchar(4096) DEFAULT NULL,
  `wallet_owner` varchar(255) NOT NULL,
  `date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wallet_addresses`
--

INSERT INTO `wallet_addresses` (`id_no`, `wallet`, `address`, `wallet_tag`, `qrcode`, `wallet_owner`, `date_created`) VALUES
(18, 'BSC', '0x0948594948594', 'BSC 1', '1 (1).png', 'admin', '2024-09-03 09:48:58'),
(19, 'BSC', '0x345tyuiijhgfdsdfgh76543234565432', 'BSC 2', '1 (1).png', 'admin', '2024-09-03 09:51:36'),
(20, 'BTC', 'b3126jdyujhgtyuytrdvbxzxczaqaqawsdf', '', '2 (1).png', 'admin', '2024-09-03 09:52:10'),
(21, 'DOGE', '098765dddffdddderty765432345678', '', '3.png', 'admin', '2024-09-03 09:52:39'),
(22, 'USDT', '0x0948594948594', 'BSC 1', 'dashboard 1.png', 'info@xtradesecurity.com', '2024-09-03 18:25:30'),
(25, 'USDT', '0x094859494859409876543212345678', '', 'bitcrypto.png', 'info@xtradesecurity.com', '2024-09-04 13:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id_no` int(11) NOT NULL,
  `wtxn` varchar(512) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `withdraw_currency` varchar(255) DEFAULT NULL,
  `withdraw_amount` decimal(19,5) DEFAULT NULL,
  `withdraw_address` varchar(512) DEFAULT NULL,
  `withdraw_status` varchar(255) NOT NULL DEFAULT 'pending',
  `approved_at` date DEFAULT NULL,
  `withdraw_request_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`id_no`, `wtxn`, `user_email`, `userName`, `firstname`, `lastname`, `withdraw_currency`, `withdraw_amount`, `withdraw_address`, `withdraw_status`, `approved_at`, `withdraw_request_date`) VALUES
(3, 'TXN098765', 'i@gmail.com', '', 'Ionus', 'Ike', 'SOL', 9.00000, '0x0987654321234567890', 'approved', NULL, '2024-08-03 09:28:29'),
(4, 'TXN0987654', 'wr@gmail.com', '', 'Wright', 'Brothers', 'USD', 9.00000, '0x8767898767jhgvbn', 'pending', NULL, '2024-08-05 09:10:56'),
(5, 'TXN09876665', 'opi@gmail.com', '', 'OPI', 'Nsukka', 'NGN', 9.00000, '0x09876567uhghjh', 'pending', NULL, '2024-08-05 09:10:56'),
(6, 'TXN653863', 'info@xtradesecurity.com', 'INFO', 'xtradesecurity', 'user', 'USDT', 0.90000, '0x9EA8d6272B724AfB813A9E7C4eaF07C7aF4FE996', 'pending', NULL, '2024-09-03 18:45:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fund`
--
ALTER TABLE `fund`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peer_transfer`
--
ALTER TABLE `peer_transfer`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `referral`
--
ALTER TABLE `referral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `totals`
--
ALTER TABLE `totals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `wallet_addresses`
--
ALTER TABLE `wallet_addresses`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fund`
--
ALTER TABLE `fund`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `peer_transfer`
--
ALTER TABLE `peer_transfer`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `referral`
--
ALTER TABLE `referral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `totals`
--
ALTER TABLE `totals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `wallet_addresses`
--
ALTER TABLE `wallet_addresses`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
