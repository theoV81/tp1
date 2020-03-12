-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 12 mars 2020 à 10:51
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bugs`
--

-- --------------------------------------------------------

--
-- Structure de la table `bug`
--

CREATE TABLE `bug` (
  `Id` int(11) NOT NULL,
  `titre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) DEFAULT 0,
  `closed` int(11) NOT NULL DEFAULT 0,
  `URL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IP` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `bug`
--

INSERT INTO `bug` (`Id`, `titre`, `Description`, `createdAt`, `status`, `closed`, `URL`, `IP`) VALUES
(78, 'TESTURLIP', 'rgjrie', '2020-03-12', 0, 0, 'https://www.php.net/manual/fr/datetime.add.php', '185.85.0.29'),
(79, 'erreur744', 'rgjrie', '2000-12-24', 0, 0, 'https://stackoverflow.com/questions/3418044/setting-post-variable-without-using-form', '151.101.193.69'),
(80, 'erreur744', 'hbdbf', '2000-12-24', 0, 0, 'https://stackoverflow.com/questions/tagged/datetime', '151.101.193.69'),
(81, 'erreur744', 'hbdbf', '2020-03-12', 0, 0, 'https://stackoverflow.com/questions/3418044/setting-post-variable-without-using-form', '151.101.65.69'),
(82, 'erreur744', 'hbdbf', '0000-00-00', 0, 0, 'https://stackoverflow.com/questions/3418044/setting-post-variable-without-using-form', '151.101.129.69'),
(83, 'erreur744', 'hbdbf', '2020-03-12', 0, 0, 'https://stackoverflow.com/questions/3418044/setting-post-variable-without-using-form', '151.101.129.69'),
(84, 'erreur744', 'hbdbf', '2020-03-12', 0, 0, 'https://stackoverflow.com/questions/3418044/setting-post-variable-without-using-form', '151.101.193.69');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bug`
--
ALTER TABLE `bug`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bug`
--
ALTER TABLE `bug`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
