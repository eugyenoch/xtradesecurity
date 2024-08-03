-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2024 at 10:16 AM
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
(1, 'xtradesecurity', 'Admin', 'noadmin@xtradesecurity.com', 'XtradeSecurity Admin', 'd46740369851d8c082996a005b371fe2', '', 'Dubai', 'United Arab Emirates', '+2347030000000', '../assets/user-uploads/finance-svgrepo-com-1-100x100.png', '2024-08-01 09:23:18');

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE `fund` (
  `id_no` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `ftxn` varchar(512) DEFAULT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `fund_currency` varchar(255) DEFAULT NULL,
  `fund_amount` decimal(19,5) DEFAULT NULL,
  `fund_profit` decimal(19,5) DEFAULT NULL,
  `fund_proof` varchar(255) DEFAULT NULL,
  `fund_comment` varchar(1024) DEFAULT NULL,
  `fund_status` varchar(255) NOT NULL DEFAULT 'pending',
  `fund_request_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fund`
--

INSERT INTO `fund` (`id_no`, `user_email`, `ftxn`, `firstname`, `lastname`, `fund_currency`, `fund_amount`, `fund_profit`, `fund_proof`, `fund_comment`, `fund_status`, `fund_request_date`) VALUES
(2, 'danjohn@gmail.com', 'TXN765434', 'Daniel', 'John', 'BTC', 2.00000, 9.98700, '2(1).png', 'Nothing more to do', 'approved', '2024-08-02 21:43:39'),
(5, 'emeka@gmail.com', 'TXN09855', 'Emeka', 'Bold', 'SOL', 4.03000, 13.67800, '2(1).png', 'There is more to come', 'pending', '2024-08-02 22:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(19) NOT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `registration_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peer_transfer`
--

CREATE TABLE `peer_transfer` (
  `id_no` int(11) NOT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `ptxn` varchar(25) DEFAULT NULL,
  `seller_email` varchar(255) DEFAULT NULL,
  `seller_wallet` varchar(255) DEFAULT NULL,
  `buyer_email` varchar(255) DEFAULT NULL,
  `buyer_wallet` varchar(255) DEFAULT NULL,
  `main_currency` varchar(512) DEFAULT NULL,
  `second_currency` varchar(512) DEFAULT NULL,
  `seller_amount` decimal(19,5) DEFAULT NULL,
  `buyer_amount` decimal(19,5) DEFAULT NULL,
  `prole` varchar(512) DEFAULT NULL,
  `pstatus` varchar(255) NOT NULL DEFAULT 'pending',
  `peer_transact_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referral`
--

CREATE TABLE `referral` (
  `id` int(11) NOT NULL,
  `referrer` varchar(50) NOT NULL,
  `user_referred` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `referral`
--

INSERT INTO `referral` (`id`, `referrer`, `user_referred`, `date`) VALUES
(1, 'danjohn', 'okon', '2024-08-02 16:10:50');

-- --------------------------------------------------------

--
-- Table structure for table `totals`
--

CREATE TABLE `totals` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
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
  `tpackage` varchar(512) DEFAULT NULL,
  `tamount` decimal(19,5) DEFAULT NULL,
  `tprofit` decimal(19,5) DEFAULT NULL,
  `tcurrency` varchar(255) DEFAULT 'USD',
  `tduration` varchar(512) DEFAULT '30',
  `tinterest` decimal(8,2) DEFAULT NULL,
  `trole` varchar(512) DEFAULT 'trader',
  `tstatus` varchar(255) NOT NULL DEFAULT 'pending',
  `transact_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_no`, `firstname`, `lastname`, `user_email`, `userName`, `user_pass`, `address`, `city`, `country`, `phone`, `photo`, `affid`, `reg_date`) VALUES
(1, 'Daniel', 'John', 'danjohn@gmail.com', 'danjohn', '4f3d2e2f6f7003372c097ff57cffaf51', NULL, 'Lagos', 'Nigeria', '07030000000', NULL, 3454545, '2024-08-02 15:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_addresses`
--

CREATE TABLE `wallet_addresses` (
  `id_no` int(11) NOT NULL,
  `wallet` varchar(255) DEFAULT NULL,
  `address` varchar(2048) DEFAULT NULL,
  `qrcode` varchar(4096) DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wallet_addresses`
--

INSERT INTO `wallet_addresses` (`id_no`, `wallet`, `address`, `qrcode`, `date_created`) VALUES
(5, 'BSC', '098jfjvndhjdfhjvbsah', '3.png', '2024-08-01 23:21:26'),
(6, 'ETH', 'jkdfghjkyfughbjgvb', '1 (1).png', '2024-08-01 23:55:01'),
(7, 'AUD', 'lkjhjjhmjm', '3.png', '2024-08-02 09:36:26'),
(8, 'SOL', 'awrtyjhgfdsaadfg', '2 (1).png', '2024-08-02 10:15:12'),
(9, 'DOGE', 'poiuydjksaoiuslfdykjsaiuyg', '2 (1).png', '2024-08-02 11:14:16'),
(12, 'XRP', 'kjgdfsgdfhgjnkjhgfdgszfxcgv', '3.png', '2024-08-02 16:04:15');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id_no` int(11) NOT NULL,
  `wtxn` varchar(512) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `withdraw_currency` varchar(255) DEFAULT NULL,
  `withdraw_amount` decimal(19,5) DEFAULT NULL,
  `withdraw_address` varchar(512) DEFAULT NULL,
  `withdraw_status` varchar(255) NOT NULL DEFAULT 'pending',
  `withdraw_request_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`id_no`, `wtxn`, `user_email`, `firstname`, `lastname`, `withdraw_currency`, `withdraw_amount`, `withdraw_address`, `withdraw_status`, `withdraw_request_date`) VALUES
(1, 'TXN0987654', 'danjohn@gmail.com', 'Daniel', 'John', 'BTC', 2.00000, '09876543456yu8i876543456', 'pending', '2024-08-02 21:46:46'),
(2, 'TXN987654345', 'okon@gmail.com', 'Okon', 'Emma', 'ETH', 2.00000, '09876543234567890', 'pending', '2024-08-02 21:46:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_no`);

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
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fund`
--
ALTER TABLE `fund`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peer_transfer`
--
ALTER TABLE `peer_transfer`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referral`
--
ALTER TABLE `referral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `totals`
--
ALTER TABLE `totals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wallet_addresses`
--
ALTER TABLE `wallet_addresses`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
