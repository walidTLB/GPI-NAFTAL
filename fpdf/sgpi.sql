-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le : Dim 07 Juillet 2019 à 23:22
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `sgpi`
--

-- --------------------------------------------------------

--
-- Structure de la table `aci`
--

CREATE TABLE IF NOT EXISTS `aci` (
  `ref` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `utilisateurs_mle` varchar(20) NOT NULL,
  `utilisateurs_Fonct_id` int(11) NOT NULL,
  `utilisateurs_ACI_ref` int(11) NOT NULL,
  PRIMARY KEY (`ref`,`utilisateurs_mle`,`utilisateurs_Fonct_id`,`utilisateurs_ACI_ref`),
  KEY `fk_ACI_utilisateurs1_idx` (`utilisateurs_mle`,`utilisateurs_Fonct_id`,`utilisateurs_ACI_ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `afct`
--

CREATE TABLE IF NOT EXISTS `afct` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `utilisateurs_mle` varchar(20) NOT NULL,
  `utilisateurs_Fonct_id` int(11) NOT NULL,
  `utilisateurs_ACI_ref` int(11) NOT NULL,
  `Dch_ref` int(11) NOT NULL,
  `Dch_Tdch_cod` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Afct_utilisateurs1_idx` (`utilisateurs_mle`,`utilisateurs_Fonct_id`,`utilisateurs_ACI_ref`),
  KEY `fk_Afct_Dch1_idx` (`Dch_ref`,`Dch_Tdch_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `bc`
--

CREATE TABLE IF NOT EXISTS `bc` (
  `cod` varchar(20) NOT NULL,
  `date` datetime DEFAULT NULL,
  `cod_four` varchar(20) DEFAULT NULL,
  `BL_cod` varchar(20) NOT NULL,
  `Four_cod` varchar(20) NOT NULL,
  PRIMARY KEY (`cod`,`BL_cod`,`Four_cod`),
  KEY `fk_BC_BL1_idx` (`BL_cod`),
  KEY `fk_BC_Four1_idx` (`Four_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `bl`
--

CREATE TABLE IF NOT EXISTS `bl` (
  `cod` varchar(20) NOT NULL,
  `date` datetime DEFAULT NULL,
  `cod_BC` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cg`
--

CREATE TABLE IF NOT EXISTS `cg` (
  `num_CG` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`num_CG`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `concerner`
--

CREATE TABLE IF NOT EXISTS `concerner` (
  `ns_serie` varchar(45) NOT NULL,
  `id_dei` int(11) NOT NULL,
  `mle_utilisateur` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ns_serie`,`id_dei`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `creforme`
--

CREATE TABLE IF NOT EXISTS `creforme` (
  `ref` varchar(10) NOT NULL,
  `dsg` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dch`
--

CREATE TABLE IF NOT EXISTS `dch` (
  `ref` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `cod_Tdch` varchar(45) DEFAULT NULL,
  `reçule` datetime DEFAULT NULL,
  `Tdch_cod` int(11) NOT NULL,
  `DEI_id` int(11) NOT NULL,
  `DEI_serie_ns` varchar(45) NOT NULL,
  `DEI_str_cod` varchar(5) NOT NULL,
  `RT_Eq_ref` int(11) NOT NULL,
  PRIMARY KEY (`ref`,`Tdch_cod`),
  KEY `fk_Dch_Tdch1_idx` (`Tdch_cod`),
  KEY `fk_Dch_DEI1_idx` (`DEI_id`,`DEI_serie_ns`,`DEI_str_cod`),
  KEY `fk_Dch_RT_Eq1_idx` (`RT_Eq_ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dei`
--

CREATE TABLE IF NOT EXISTS `dei` (
  `id` int(11) NOT NULL DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `reçule` datetime DEFAULT NULL,
  `ns` varchar(45) DEFAULT NULL,
  `ref_Dch` int(11) DEFAULT NULL,
  `serie_ns` varchar(45) NOT NULL DEFAULT '',
  `str_cod` varchar(5) NOT NULL DEFAULT '',
  `FINT_ref` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`serie_ns`,`str_cod`,`FINT_ref`),
  KEY `fk_DEI_serie1_idx` (`serie_ns`),
  KEY `fk_DEI_str1_idx` (`str_cod`),
  KEY `fk_DEI_FINT1_idx` (`FINT_ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dreforme`
--

CREATE TABLE IF NOT EXISTS `dreforme` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `dest` varchar(60) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `FINT_ref` int(11) NOT NULL,
  PRIMARY KEY (`id`,`FINT_ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

CREATE TABLE IF NOT EXISTS `equipement` (
  `id` varchar(45) NOT NULL,
  `dsg` varchar(45) DEFAULT NULL,
  `cod_maq` int(11) DEFAULT NULL,
  `id_typ` varchar(60) DEFAULT NULL,
  `id_mod` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `equipement`
--

INSERT INTO `equipement` (`id`, `dsg`, `cod_maq`, `id_typ`, `id_mod`) VALUES
('12dr', ' 001', 1, ' A1', ''),
('CZS99FT', 'uuuuu', 1, ' 1', ' A1'),
('CZ44444T', 'uuuuu', 1, ' 1', ' A1'),
('CZCDR009', 'UNITE CENTRAL', 1, ' 2', ' A3');

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

CREATE TABLE IF NOT EXISTS `etat` (
  `equipement_id` varchar(45) NOT NULL,
  `INVT_id` varchar(20) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`equipement_id`,`INVT_id`),
  KEY `fk_equipement_has_INVT_INVT1_idx` (`INVT_id`),
  KEY `fk_equipement_has_INVT_equipement1_idx` (`equipement_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fint`
--

CREATE TABLE IF NOT EXISTS `fint` (
  `ref` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `rapport` varchar(255) DEFAULT NULL,
  `id_dei` int(11) DEFAULT NULL,
  `Dreforme_id` int(11) DEFAULT NULL,
  `Dreforme_FINT_ref` int(11) DEFAULT NULL,
  `utilisateurs_mle` varchar(20) DEFAULT NULL,
  `utilisateurs_Fonct_id` int(11) DEFAULT NULL,
  `utilisateurs_ACI_ref` int(11) DEFAULT NULL,
  PRIMARY KEY (`ref`),
  KEY `fk_FINT_Dreforme1_idx` (`Dreforme_id`,`Dreforme_FINT_ref`),
  KEY `fk_FINT_utilisateurs1_idx` (`utilisateurs_mle`,`utilisateurs_Fonct_id`,`utilisateurs_ACI_ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `fonct`
--

CREATE TABLE IF NOT EXISTS `fonct` (
  `id` int(11) NOT NULL,
  `dsg` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fonct`
--

INSERT INTO `fonct` (`id`, `dsg`) VALUES
(1, 'chef de station'),
(2, 'cadre ');

-- --------------------------------------------------------

--
-- Structure de la table `four`
--

CREATE TABLE IF NOT EXISTS `four` (
  `cod` varchar(20) NOT NULL,
  `rs` varchar(100) DEFAULT NULL,
  `adress` varchar(100) DEFAULT NULL,
  `telephone` decimal(10,0) DEFAULT NULL,
  `fax` decimal(10,0) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `invt`
--

CREATE TABLE IF NOT EXISTS `invt` (
  `id` varchar(20) NOT NULL,
  `qt_t` decimal(10,0) DEFAULT NULL,
  `qt_p` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_afect`
--

CREATE TABLE IF NOT EXISTS `ligne_afect` (
  `Afct_id` int(11) NOT NULL,
  `serie_ns` varchar(45) NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`Afct_id`,`serie_ns`),
  KEY `fk_Afct_has_serie_serie1_idx` (`serie_ns`),
  KEY `fk_Afct_has_serie_Afct1_idx` (`Afct_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_bc`
--

CREATE TABLE IF NOT EXISTS `ligne_bc` (
  `BC_cod` varchar(20) NOT NULL,
  `eqp_id` varchar(45) NOT NULL,
  `qte_cmd` int(11) DEFAULT NULL,
  PRIMARY KEY (`BC_cod`,`eqp_id`),
  KEY `fk_BC_has_equipement_equipement1_idx` (`eqp_id`),
  KEY `fk_BC_has_equipement_BC1_idx` (`BC_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_realise`
--

CREATE TABLE IF NOT EXISTS `ligne_realise` (
  `FINT_ref` int(11) NOT NULL,
  `TPINT_id` int(11) NOT NULL,
  PRIMARY KEY (`FINT_ref`,`TPINT_id`),
  KEY `fk_FINT_has_TPINT_TPINT1_idx` (`TPINT_id`),
  KEY `fk_FINT_has_TPINT_FINT1_idx` (`FINT_ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_rt_eq`
--

CREATE TABLE IF NOT EXISTS `ligne_rt_eq` (
  `RT_Eq_ref` int(11) NOT NULL,
  `serie_ns` varchar(45) NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`RT_Eq_ref`,`serie_ns`),
  KEY `fk_RT_Eq_has_serie_serie1_idx` (`serie_ns`),
  KEY `fk_RT_Eq_has_serie_RT_Eq1_idx` (`RT_Eq_ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE IF NOT EXISTS `marque` (
  `cod` int(11) NOT NULL,
  `dsg` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `marque`
--

INSERT INTO `marque` (`cod`, `dsg`) VALUES
(1, 'HP'),
(2, 'ACER'),
(3, 'LENOVO'),
(4, 'DELL');

-- --------------------------------------------------------

--
-- Structure de la table `mebresc`
--

CREATE TABLE IF NOT EXISTS `mebresc` (
  `ref` varchar(10) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `fonction` varchar(45) DEFAULT NULL,
  `utilisateurs_mle` varchar(20) NOT NULL,
  `utilisateurs_Fonct_id` int(11) NOT NULL,
  `utilisateurs_ACI_ref` int(11) NOT NULL,
  PRIMARY KEY (`ref`,`utilisateurs_mle`,`utilisateurs_Fonct_id`,`utilisateurs_ACI_ref`),
  KEY `fk_mebresC_utilisateurs1_idx` (`utilisateurs_mle`,`utilisateurs_Fonct_id`,`utilisateurs_ACI_ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `model`
--

CREATE TABLE IF NOT EXISTS `model` (
  `id` varchar(30) NOT NULL,
  `dsg` varchar(45) DEFAULT NULL,
  `equipement_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_model_equipement1_idx` (`equipement_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `model`
--

INSERT INTO `model` (`id`, `dsg`, `equipement_id`) VALUES
('001', 'ASPIR V5', '01'),
('002', 'COMPAQ8300', '02');

-- --------------------------------------------------------

--
-- Structure de la table `pv_reforme`
--

CREATE TABLE IF NOT EXISTS `pv_reforme` (
  `ref` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `Dreforme_id` int(11) NOT NULL,
  `Dreforme_FINT_ref` int(11) NOT NULL,
  `creforme_ref` varchar(10) NOT NULL,
  PRIMARY KEY (`ref`,`Dreforme_id`,`Dreforme_FINT_ref`,`creforme_ref`),
  KEY `fk_pv_reforme_Dreforme1_idx` (`Dreforme_id`,`Dreforme_FINT_ref`),
  KEY `fk_pv_reforme_creforme1_idx` (`creforme_ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ratachement_str`
--

CREATE TABLE IF NOT EXISTS `ratachement_str` (
  `str_cod` varchar(5) NOT NULL,
  `str_cod1` varchar(5) NOT NULL,
  PRIMARY KEY (`str_cod`,`str_cod1`),
  KEY `fk_str_has_str_str2_idx` (`str_cod1`),
  KEY `fk_str_has_str_str1_idx` (`str_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rt_eq`
--

CREATE TABLE IF NOT EXISTS `rt_eq` (
  `ref` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `mle_emp` varchar(20) DEFAULT NULL,
  `utilisateurs_mle` varchar(20) NOT NULL,
  `utilisateurs_Fonct_id` int(11) NOT NULL,
  `utilisateurs_ACI_ref` int(11) NOT NULL,
  PRIMARY KEY (`ref`,`utilisateurs_mle`,`utilisateurs_Fonct_id`,`utilisateurs_ACI_ref`),
  KEY `fk_RT_Eq_utilisateurs1_idx` (`utilisateurs_mle`,`utilisateurs_Fonct_id`,`utilisateurs_ACI_ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `serie`
--

CREATE TABLE IF NOT EXISTS `serie` (
  `ns` varchar(45) NOT NULL,
  `ninv` varchar(20) CHARACTER SET utf8 NOT NULL,
  `dsg` varchar(45) DEFAULT NULL,
  `id` varchar(45) DEFAULT NULL,
  `BL_cod` varchar(20) NOT NULL,
  `date_dbt_g` datetime DEFAULT NULL,
  `date_fin_g` datetime DEFAULT NULL,
  `CG_num_CG` int(11) NOT NULL,
  PRIMARY KEY (`ns`,`CG_num_CG`),
  KEY `fk_serie_BL1_idx` (`BL_cod`),
  KEY `fk_serie_CG1_idx` (`CG_num_CG`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `str`
--

CREATE TABLE IF NOT EXISTS `str` (
  `cod` varchar(5) NOT NULL,
  `dsg` varchar(100) DEFAULT NULL,
  `typ` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `str`
--

INSERT INTO `str` (`cod`, `dsg`, `typ`) VALUES
('001', 'Departement Informatique', 'département'),
('002', 'departement personnel', 'département '),
('2169', 'Centre Distribution Com Alger', 'CDD'),
('216A', 'Centre Distribution Com el harrach', 'CDD'),
('R1640', 'STATION SERVICES  LOISIRS', 'GD');

-- --------------------------------------------------------

--
-- Structure de la table `suivi_creform`
--

CREATE TABLE IF NOT EXISTS `suivi_creform` (
  `creforme_ref` varchar(10) NOT NULL,
  `mebresC_ref` varchar(10) NOT NULL,
  `date_suivi` datetime DEFAULT NULL,
  PRIMARY KEY (`creforme_ref`,`mebresC_ref`),
  KEY `fk_creforme_has_mebresC_mebresC1_idx` (`mebresC_ref`),
  KEY `fk_creforme_has_mebresC_creforme1_idx` (`creforme_ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tdch`
--

CREATE TABLE IF NOT EXISTS `tdch` (
  `cod` int(11) NOT NULL,
  `dsg` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tpint`
--

CREATE TABLE IF NOT EXISTS `tpint` (
  `id` int(11) NOT NULL,
  `dsg` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` varchar(60) NOT NULL,
  `dsg` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id`, `dsg`) VALUES
('A1', 'COR DU DUO'),
('A2', 'I3'),
('A3', 'I5'),
('A4', 'I7');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `mle` varchar(20) NOT NULL,
  `nom` char(20) DEFAULT NULL,
  `prenom` char(20) DEFAULT NULL,
  `password` varchar(14) DEFAULT NULL,
  `str_cod` varchar(5) NOT NULL,
  `Fonct_id` int(11) NOT NULL,
  `ACI_ref` int(11) NOT NULL,
  PRIMARY KEY (`mle`,`Fonct_id`,`ACI_ref`),
  KEY `fk_utilisateurs_str1_idx` (`str_cod`),
  KEY `fk_utilisateurs_Fonct1_idx` (`Fonct_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`mle`, `nom`, `prenom`, `password`, `str_cod`, `Fonct_id`, `ACI_ref`) VALUES
('06017Y', 'Mebrek', 'Bachira', '123', '001', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
