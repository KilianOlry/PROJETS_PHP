-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 01 déc. 2022 à 13:46
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `produits`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `descrip` varchar(1500) NOT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `titre`, `descrip`, `image`) VALUES
(2, 'Orange', 'Née il y a des millénaires en Asie du Sud-Est, l’orange n’acquiert sa popularité en Europe qu’au XVe siècle grâce aux grands voyages commerciaux.', '1669896355mae-mu-9002s2VnOAY-unsplash.jpg'),
(3, 'Fraise', 'Le plaisir de manger des fraises ne date pas d’hier. En revanche, les grosses fraises rouges que nous connaissons aujourd’hui ne sont arrivées en France qu’au 18ème siècle.', '1669896377morgane-perraud-A3uY35gb66U-unsplash.jpg'),
(4, 'Kiwi', 'Le kiwi est le fruit d’une liane qui ressemble un peu à la vigne. Il est originaire de Chine, où il est dégusté depuis plus de 2 000 ans.', '1669897822engin-akyurt-jPVcZsxRGJo-unsplash.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
