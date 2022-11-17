-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 11:05 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naftal2`
--

-- --------------------------------------------------------

--
-- Table structure for table `acqui_intern`
--

CREATE TABLE `acqui_intern` (
  `num_aqs` int(11) NOT NULL,
  `date_acquint` date DEFAULT NULL,
  `num_utili` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `affe_equip`
--

CREATE TABLE `affe_equip` (
  `num_aff` int(11) NOT NULL,
  `date_aff` date DEFAULT NULL,
  `cod_utili` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bc`
--

CREATE TABLE `bc` (
  `num_bc` int(11) NOT NULL,
  `des_bc` varchar(100) DEFAULT NULL,
  `date_bc` date DEFAULT NULL,
  `cod_four` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bc`
--

INSERT INTO `bc` (`num_bc`, `des_bc`, `date_bc`, `cod_four`) VALUES
(111, 'bvgchfvjbkjnlk', '2020-10-07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bl`
--

CREATE TABLE `bl` (
  `num_bl` int(11) NOT NULL,
  `des_bl` varchar(100) DEFAULT NULL,
  `date_bl` date DEFAULT NULL,
  `cod_bc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `decharge`
--

CREATE TABLE `decharge` (
  `num_dech` int(11) NOT NULL,
  `rcul_dech` varchar(100) DEFAULT NULL,
  `date_dech` date DEFAULT NULL,
  `cod_ntr` int(11) DEFAULT NULL,
  `num_tdech` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dem_intern`
--

CREATE TABLE `dem_intern` (
  `num_diter` int(11) NOT NULL,
  `des_inter` varchar(100) DEFAULT NULL,
  `num_ser` int(11) DEFAULT NULL,
  `num_struc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `num_eq` int(11) NOT NULL,
  `nom_eq` varchar(20) NOT NULL,
  `quantite` int(30) DEFAULT NULL,
  `num_tyequi` int(11) DEFAULT NULL,
  `num_mar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`num_eq`, `nom_eq`, `quantite`, `num_tyequi`, `num_mar`) VALUES
(1234, 'pc', 20, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `etat`
--

CREATE TABLE `etat` (
  `num_serie` varchar(20) NOT NULL,
  `num_invent` int(20) DEFAULT NULL,
  `desc_etat` varchar(20) NOT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etat`
--

INSERT INTO `etat` (`num_serie`, `num_invent`, `desc_etat`, `type`) VALUES
('b512', 12343007, 'a reforme', 'imprimante'),
('b901', 12343008, 'a refome', 'ecran');

-- --------------------------------------------------------

--
-- Table structure for table `fiche_inter`
--

CREATE TABLE `fiche_inter` (
  `num_fich` int(11) NOT NULL,
  `date_fich` date DEFAULT NULL,
  `heur` time DEFAULT NULL,
  `rapport` varchar(100) DEFAULT NULL,
  `num_dint` int(11) DEFAULT NULL,
  `date_suiv` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fiche_inter`
--

INSERT INTO `fiche_inter` (`num_fich`, `date_fich`, `heur`, `rapport`, `num_dint`, `date_suiv`) VALUES
(12, '2020-10-06', NULL, NULL, NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `num_fou` int(11) NOT NULL,
  `nom_fou` varchar(40) DEFAULT NULL,
  `prenom_fou` varchar(40) DEFAULT NULL,
  `email_fou` varchar(40) DEFAULT NULL,
  `tel` int(10) DEFAULT NULL,
  `fax` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fournisseur`
--

INSERT INTO `fournisseur` (`num_fou`, `nom_fou`, `prenom_fou`, `email_fou`, `tel`, `fax`) VALUES
(123, 'amazon', 'huj', 'amazon@gmail.com', 332145687, 338745632);

-- --------------------------------------------------------

--
-- Table structure for table `inv_equip`
--

CREATE TABLE `inv_equip` (
  `num_inv` int(11) NOT NULL,
  `des_inv` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `marq_eq`
--

CREATE TABLE `marq_eq` (
  `num_marq` int(11) NOT NULL,
  `des_marq` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nature`
--

CREATE TABLE `nature` (
  `cod_ntr` int(11) NOT NULL,
  `des_ntr` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_chef_dept` varchar(20) NOT NULL,
  `id_char_etud` varchar(20) NOT NULL,
  `id_employer` varchar(20) NOT NULL,
  `desc_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `serie`
--

CREATE TABLE `serie` (
  `num_ser` varchar(11) NOT NULL,
  `num_inv` varchar(30) NOT NULL,
  `nom_ser` varchar(40) DEFAULT NULL,
  `pu` int(11) DEFAULT NULL,
  `duree_gr` int(11) DEFAULT NULL,
  `num_bl` int(11) DEFAULT NULL,
  `num_acqint` int(11) DEFAULT NULL,
  `num_util` int(20) DEFAULT NULL,
  `num_equ` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serie`
--

INSERT INTO `serie` (`num_ser`, `num_inv`, `nom_ser`, `pu`, `duree_gr`, `num_bl`, `num_acqint`, `num_util`, `num_equ`) VALUES
('bs212wm', '12345', 'hard', NULL, 5, NULL, NULL, 123, 1234);

-- --------------------------------------------------------

--
-- Table structure for table `structure`
--

CREATE TABLE `structure` (
  `num_struc` int(11) NOT NULL,
  `des_struc` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `type_decharge`
--

CREATE TABLE `type_decharge` (
  `num_tdech` int(11) NOT NULL,
  `des_tdech` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `type_equipement`
--

CREATE TABLE `type_equipement` (
  `num_typ_eq` int(11) NOT NULL,
  `des_eq` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `num_utili` int(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) DEFAULT NULL,
  `mp` varchar(42) DEFAULT NULL,
  `code_str` int(11) NOT NULL,
  `fonction` varchar(40) DEFAULT NULL,
  `id_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`num_utili`, `username`, `nom`, `prenom`, `mp`, `code_str`, `fonction`, `id_role`) VALUES
(123, 'walid', 'talbi', 'walid', '*668C02D0DCCF5833D6E09C51E6D1B2C605789474', 1234, 'charge', ''),
(538, 'brahim', 'moudoulia', 'brahim', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 123, 'chefdepartement', ''),
(1452, 'zaki', 'gubli', 'zaki', '*A4B6157319038724E3560894F7F932C8886EBFCF', 1234, 'employer', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acqui_intern`
--
ALTER TABLE `acqui_intern`
  ADD PRIMARY KEY (`num_aqs`);

--
-- Indexes for table `affe_equip`
--
ALTER TABLE `affe_equip`
  ADD PRIMARY KEY (`num_aff`),
  ADD KEY `cod_utili` (`cod_utili`);

--
-- Indexes for table `bc`
--
ALTER TABLE `bc`
  ADD PRIMARY KEY (`num_bc`),
  ADD KEY `cod_four` (`cod_four`);

--
-- Indexes for table `bl`
--
ALTER TABLE `bl`
  ADD PRIMARY KEY (`num_bl`),
  ADD KEY `cod_bc` (`cod_bc`);

--
-- Indexes for table `decharge`
--
ALTER TABLE `decharge`
  ADD PRIMARY KEY (`num_dech`),
  ADD KEY `cod_ntr` (`cod_ntr`),
  ADD KEY `num_tdech` (`num_tdech`);

--
-- Indexes for table `dem_intern`
--
ALTER TABLE `dem_intern`
  ADD PRIMARY KEY (`num_diter`),
  ADD KEY `num_ser` (`num_ser`),
  ADD KEY `num_struc` (`num_struc`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`num_eq`),
  ADD KEY `num_tyequi` (`num_tyequi`),
  ADD KEY `num_mar` (`num_mar`);

--
-- Indexes for table `etat`
--
ALTER TABLE `etat`
  ADD KEY `num_invent` (`num_invent`),
  ADD KEY `num_serie` (`num_serie`);

--
-- Indexes for table `fiche_inter`
--
ALTER TABLE `fiche_inter`
  ADD PRIMARY KEY (`num_fich`),
  ADD KEY `num_dint` (`num_dint`);

--
-- Indexes for table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`num_fou`);

--
-- Indexes for table `inv_equip`
--
ALTER TABLE `inv_equip`
  ADD PRIMARY KEY (`num_inv`);

--
-- Indexes for table `marq_eq`
--
ALTER TABLE `marq_eq`
  ADD PRIMARY KEY (`num_marq`);

--
-- Indexes for table `nature`
--
ALTER TABLE `nature`
  ADD PRIMARY KEY (`cod_ntr`);

--
-- Indexes for table `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`num_ser`),
  ADD KEY `num_bl` (`num_bl`),
  ADD KEY `num_acqint` (`num_acqint`),
  ADD KEY `num_util` (`num_util`),
  ADD KEY `num_equi` (`num_equ`);

--
-- Indexes for table `structure`
--
ALTER TABLE `structure`
  ADD PRIMARY KEY (`num_struc`);

--
-- Indexes for table `type_decharge`
--
ALTER TABLE `type_decharge`
  ADD PRIMARY KEY (`num_tdech`);

--
-- Indexes for table `type_equipement`
--
ALTER TABLE `type_equipement`
  ADD PRIMARY KEY (`num_typ_eq`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`num_utili`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dem_intern`
--
ALTER TABLE `dem_intern`
  MODIFY `num_diter` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `serie`
--
ALTER TABLE `serie`
  ADD CONSTRAINT `serie_ibfk_1` FOREIGN KEY (`num_util`) REFERENCES `utilisateur` (`num_utili`),
  ADD CONSTRAINT `serie_ibfk_2` FOREIGN KEY (`num_equ`) REFERENCES `equipment` (`num_eq`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
