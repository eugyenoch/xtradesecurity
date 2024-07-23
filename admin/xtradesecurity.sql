-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2024 at 06:32 PM
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
  `user_pass` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(55) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `reg_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `fund_amount` decimal(19,9) DEFAULT NULL,
  `fund_profit` decimal(19,9) DEFAULT NULL,
  `fund_proof` varchar(255) DEFAULT NULL,
  `fund_comment` varchar(1024) DEFAULT NULL,
  `fund_status` varchar(255) NOT NULL DEFAULT 'pending',
  `fund_request_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscription`
--

CREATE TABLE `newsletter_subscription` (
  `id` int(19) NOT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `registration_date` date NOT NULL DEFAULT current_timestamp()
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
  `seller_amount` decimal(18,9) DEFAULT NULL,
  `buyer_amount` decimal(18,9) DEFAULT NULL,
  `prole` varchar(512) DEFAULT NULL,
  `pstatus` varchar(255) NOT NULL DEFAULT 'pending',
  `peer_transact_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referral`
--

CREATE TABLE `referral` (
  `id` int(11) NOT NULL,
  `referral` varchar(50) NOT NULL,
  `user_referred_email` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `tamount` decimal(19,9) DEFAULT NULL,
  `tprofit` decimal(19,9) DEFAULT NULL,
  `tcurrency` varchar(255) DEFAULT 'USD',
  `tduration` varchar(512) DEFAULT '30',
  `tinterest` decimal(8,2) DEFAULT NULL,
  `trole` varchar(512) DEFAULT 'trader',
  `tstatus` varchar(255) NOT NULL DEFAULT 'pending',
  `transact_date` date NOT NULL DEFAULT current_timestamp()
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
  `reg_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wallet_addresses`
--

CREATE TABLE `wallet_addresses` (
  `id_no` int(11) NOT NULL,
  `wallet` varchar(255) DEFAULT NULL,
  `address` varchar(2048) DEFAULT NULL,
  `qrcode` varchar(4096) DEFAULT NULL,
  `date_created` datetime DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `wthdraw_amount` decimal(19,9) DEFAULT NULL,
  `withdraw_address` varchar(512) DEFAULT NULL,
  `wthdraw_status` varchar(255) NOT NULL DEFAULT 'pending',
  `withdraw_request_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indexes for table `newsletter_subscription`
--
ALTER TABLE `newsletter_subscription`
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
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fund`
--
ALTER TABLE `fund`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletter_subscription`
--
ALTER TABLE `newsletter_subscription`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wallet_addresses`
--
ALTER TABLE `wallet_addresses`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
