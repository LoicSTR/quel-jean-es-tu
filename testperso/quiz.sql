-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 01 déc. 2021 à 13:36
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `rep_jcv` varchar(100) NOT NULL,
  `rep_jlr` varchar(100) NOT NULL,
  `rep_jjg` varchar(100) NOT NULL,
  `rep_jpp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `question`, `rep_jcv`, `rep_jlr`, `rep_jjg`, `rep_jpp`) VALUES
(1, 'Dans quel univers de film vous souhaiteriez vivre ?', '2012', 'Insaisissables', 'Soul', 'Ratatouille'),
(2, 'Quel est votre jeux télé préféré ?', 'Total Wipeout', 'Les 12 coups de midi', 'N\'oubliez pas les paroles', 'Bienvenue chez nous'),
(3, 'Laquelle de ces musiques préfériez-vous écouter?\r\n', 'Lio - Banana Split', 'Vivaldi - Les quatre saisons', 'Michael Jackson - We are the world', 'Charles Aznavour - La Bohème'),
(4, 'Quel est votre jeu-vidéo préféré ?', 'Mortal Kombat', 'Professeur Layton', 'Just Dance', 'Tetris'),
(5, 'Quel est votre sport préféré ?', 'MMA', 'Formule 1', 'Golf', 'Pétanque'),
(6, 'Quel marque de voiture préférez-vous ?', 'Dodge', 'BMW', 'DS', 'Peugeot'),
(7, 'Comment préféreriez-vous être habillé tout les jours', 'Survêtement', 'Chemise', 'Pull en cachemire', 'Costume'),
(8, 'Quel plat préférez-vous ?', 'Tous les plats', 'Entrecôte frites', 'Magret de canard', 'Blanquette de veau'),
(9, 'Quelle boisson préférez-vous ?', 'Eau', 'Vin', 'Cognac', 'Bière'),
(10, 'Où est-ce que vous aimeriez partir en vacances ?', 'Népal', 'Croatie', 'Canada', 'Pays Basque'),
(11, 'Que regardez-vous en premier chez une personne ?', 'Son corps', 'Son visage', 'Ses yeux', 'Ses habits'),
(12, 'Quelle matière préfériez-vous à l\'école ?', 'Sport', 'Histoire', 'Musique', 'Géographie'),
(13, 'Quel est votre principal atout pour séduire ?', 'Votre corps', 'Votre intelligence', 'Votre charisme', 'Vos compétences'),
(14, 'Si vous étiez un artiste, dans quoi vous aimeriez pratiquer votre art ?', 'La poésie', 'Le cinéma', 'La musique', 'La cuisine'),
(15, 'Quel est votre animal préféré ?', 'Lion', 'Chien', 'Hirondelle', 'Castor'),
(16, 'Si vous deviez inviter vos amis quelque part, où ça serait ?', 'À la maison. Pourquoi bouger ?', 'Au musée', 'Au bowling', 'Au restaurant\r\n'),
(17, 'Quel est votre youtuber préféré ?', 'Vilebrequin', 'E-penser', 'Anthony Vincent', 'Axolot'),
(18, 'Quel est votre livre préféré ?', 'Le pouvoir du moment présent', 'Le rouge et le noir', 'Les fleurs du mal', 'Le tour du monde en 80 jours'),
(19, 'Vous êtes sur une île déserte, que prenez vous ?', 'Une machette', 'Un briquet', 'Une tente', 'Une canne à pêche'),
(20, 'Quel est votre réseau social préféré ?', 'Twitter', 'LinkedIn', 'Instagram', 'Facebook'),
(21, 'Quel personnage de dessin animé préférez-vous ?', 'Maître Shifu', 'Simba', 'Aladdin', 'Merlin'),
(22, 'Vous gagnez à l\'euromillion, que faites-vous avec l\'argent ?', 'Combler de joie ses proches', 'Investir', 'Donner à des associations', 'Se faire plaisir\r\n'),
(23, 'Lequel de ces pouvoirs, aimeriez-vous avoir ?', 'La télépathie', 'Tout connaître sur le monde', 'Voyager dans le temps', 'La téléportation'),
(24, 'Une dispute éclate entre tes amis, que fais-tu ?', 'Leur demander de se serrer la main en signe de paix', 'Partir et les laisser régler leurs problèmes', 'Tenter de calmer la situation', 'Donner des arguments en faveur des deux camps'),
(25, 'Avec quoi préfères-tu écrire ?', 'Un stylo à gomme', 'Un bic', 'Un stylo plume', 'Un crayon de bois'),
(26, 'Quel personnage historique es-tu ?', 'Vercingétorix', 'Da Vinci', 'Gaudï', 'De Gaulle'),
(27, 'Quelle période historique préfères-tu ?', 'L\'Antiquité', 'L\'Époque contemporaine', 'La Renaissance', 'Le Moyen-Âge'),
(28, 'Quel fruit préfères-tu ?', 'Le fruit du dragon', 'La pomme', 'Le raisin', 'La tomate'),
(29, 'Comment préfères-tu regarder un film ?', 'VHS', 'Cinéma', 'Streaming', 'DVD'),
(30, 'Quelle marque de vêtement préfères-tu ?', 'Adidas', 'Ralph Lauren', 'Sandro', 'Hugo Boss');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `statut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `mdp`, `nom`, `prenom`, `statut`) VALUES
('loicsouetre', '8f8c4ba92dab870d61461b28e3f63d69', 'Souêtre', 'Loïc', 'admin'),
('pabloveiras', '7e4b64eb65e34fdfad79e623c44abd94', 'VEIRAS', 'Pablo', 'membre');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
