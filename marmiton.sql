-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 17 nov. 2020 à 10:04
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `marmiton`
--

-- --------------------------------------------------------

--
-- Structure de la table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
CREATE TABLE IF NOT EXISTS `ingredients` (
  `id_ingredients` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_ingredients` varchar(255) DEFAULT NULL,
  `image_ingredients` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_ingredients`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ingredients`
--

INSERT INTO `ingredients` (`id_ingredients`, `nom_ingredients`, `image_ingredients`) VALUES
(1, 'Pilons de poulet', NULL),
(2, 'Merguez', NULL),
(3, 'Huile d\'olive', NULL),
(4, 'Concentré de tomates', NULL),
(5, 'Epices à couscous', NULL),
(6, 'harissa', NULL),
(7, 'Bouillon de boeuf', NULL),
(8, 'tomates', NULL),
(9, 'navets', NULL),
(10, 'carottes', NULL),
(11, 'courgettes', NULL),
(12, 'Pois chiches', NULL),
(13, 'Pommes de terre', NULL),
(14, 'Lardons fumés', NULL),
(15, 'Oignons', NULL),
(16, 'Reblochon', NULL),
(17, 'Gousse d\'ail', NULL),
(18, 'Pâte brisée', NULL),
(19, 'Citrons', NULL),
(20, 'Sucre', NULL),
(21, 'Sucre glace', NULL),
(22, 'Œufs', NULL),
(23, 'Crème fraiche', NULL),
(24, 'Chocolat patissier', NULL),
(25, 'Lait', NULL),
(26, 'noix de saint Jacques', NULL),
(27, 'échalottes', NULL),
(28, 'safran', NULL),
(29, 'Pâte à pizza', NULL),
(30, 'Filets d\'anchois', NULL),
(31, 'Thym', NULL),
(32, 'Cabillaud', NULL),
(33, 'Champignon de paris', NULL),
(34, 'Vin blanc', NULL),
(35, 'Bouquet garni', NULL),
(36, 'Olives Vertes', NULL),
(37, 'Dés de jambon', NULL),
(38, 'Gruyère râpé', NULL),
(39, 'levure', NULL),
(40, 'Farine', NULL),
(41, 'Thon', NULL),
(42, 'Moutarde', NULL),
(43, 'Glace vanille', NULL),
(44, 'Poires', NULL),
(45, 'Amandes effilées', NULL),
(46, 'Beurre', NULL),
(47, 'Crème Chantilly', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `make`
--

DROP TABLE IF EXISTS `make`;
CREATE TABLE IF NOT EXISTS `make` (
  `id_recettes` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_ingredients` bigint(20) NOT NULL,
  `quantite_make` int(11) DEFAULT NULL,
  `unite_make` varchar(255) NOT NULL,
  PRIMARY KEY (`id_recettes`,`id_ingredients`),
  KEY `FK_make_id_ingredients` (`id_ingredients`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `make`
--

INSERT INTO `make` (`id_recettes`, `id_ingredients`, `quantite_make`, `unite_make`) VALUES
(1, 1, 8, 'pièces'),
(1, 2, 12, 'pièces'),
(1, 3, 3, 'cuillères à soupe'),
(1, 4, 2, 'boîtes'),
(1, 5, 3, 'cuillères à soup'),
(1, 6, 1, 'cuillère à café'),
(1, 7, 2, 'cubes'),
(1, 8, 3, 'pièces'),
(1, 9, 10, 'pièces'),
(1, 10, 5, 'pièces'),
(1, 11, 2, 'pièces'),
(1, 12, 400, 'gr'),
(2, 3, 2, 'cuillères à soupe'),
(2, 13, 1, 'kg'),
(2, 14, 200, 'gr'),
(2, 15, 200, 'gr'),
(2, 16, 1, 'pièce'),
(2, 17, 1, 'pièce'),
(3, 18, 1, 'pièce'),
(3, 19, 2, 'pièces'),
(3, 20, 200, 'gr'),
(3, 21, 60, 'gr'),
(3, 22, 5, 'pièces'),
(3, 23, 20, 'cl'),
(4, 18, 1, 'pièce'),
(4, 22, 1, 'pièce'),
(4, 23, 150, 'gr'),
(4, 24, 200, 'gr'),
(5, 3, 2, 'cuillères à soupe'),
(5, 17, 1, 'pièce'),
(5, 23, 50, 'gr'),
(5, 26, 8, 'pièces'),
(5, 27, 2, 'pièces'),
(5, 28, 1, 'pincée'),
(6, 3, 2, 'cuillères à soupe'),
(6, 8, 800, 'gr'),
(6, 15, 3, 'pièces'),
(6, 17, 2, 'pièces'),
(6, 29, 1, 'pièce'),
(6, 30, 16, 'pièces'),
(6, 31, 1, 'brin'),
(7, 15, 1, 'pièce'),
(7, 23, 15, 'cl'),
(7, 32, 600, 'gr'),
(7, 33, 400, 'gr'),
(7, 34, 15, 'cl'),
(7, 35, 1, 'pièce'),
(8, 3, 15, 'cl'),
(8, 22, 4, 'pièces'),
(8, 34, 10, 'cl'),
(8, 36, 200, 'gr'),
(8, 37, 200, 'gr'),
(8, 38, 150, 'gr'),
(8, 39, 1, 'sachet'),
(8, 40, 250, 'gr'),
(9, 8, 2, 'pièces'),
(9, 18, 1, 'pièce'),
(9, 22, 2, 'pièces'),
(9, 23, 20, 'cl'),
(9, 25, 15, 'cl'),
(9, 41, 2, 'boîtes moyennes'),
(9, 42, 3, 'cuillères à soupe'),
(10, 19, 1, 'pièce'),
(10, 20, 250, 'gr'),
(10, 24, 125, 'gr'),
(10, 43, 50, 'cl'),
(10, 44, 4, 'pièces'),
(10, 45, 40, 'gr'),
(10, 46, 20, 'gr'),
(10, 47, 50, 'cl');

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

DROP TABLE IF EXISTS `recettes`;
CREATE TABLE IF NOT EXISTS `recettes` (
  `id_recettes` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_recettes` varchar(255) DEFAULT NULL,
  `temps_recettes` varchar(255) DEFAULT NULL,
  `type_recettes` varchar(255) DEFAULT NULL,
  `difficulte_recettes` varchar(255) DEFAULT NULL,
  `cout_recettes` varchar(255) DEFAULT NULL,
  `recette_recettes` longtext DEFAULT NULL,
  `image_recettes` varchar(255) DEFAULT NULL,
  `nombre_personnes` int(11) NOT NULL,
  PRIMARY KEY (`id_recettes`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recettes`
--

INSERT INTO `recettes` (`id_recettes`, `nom_recettes`, `temps_recettes`, `type_recettes`, `difficulte_recettes`, `cout_recettes`, `recette_recettes`, `image_recettes`, `nombre_personnes`) VALUES
(1, 'Couscous poulet et merguez facile', '1 heure', 'Plat', 'Très facile', 'Bon marché', 'Lavez et épluchez les carottes, les navets et les tomates et les couper en cubes.\r\nDans un autocuiseur, versez 3 cuillères à soupe d\'huile d\'olive. Mettez à chauffer et faites-y dorer les pilons de poulet. Quand ils sont dorés, versez l\'équivalent d\'1 litre d\'eau et ajouter les cubes de bouillon de boeuf, le concentré de tomate, les carottes, navets et tomates, les épices à couscous et l\'harissa.\r\nFermez votre autocuiseur et compter 25 mn de cuisson une fois que celui-ci est monté en pression.\r\nEn attendant, lavez et coupez les courgettes en cubes et égouttez les pois chiches.\r\nUne fois les 25 mn écoulées, évacuez la vapeur de votre autocuiseur, ouvrez et rajouter les courgettes et les pois chiches.\r\nRemettez au feu : comptez 10 mn de cuisson une fois votre autocuiseur sous pression.\r\nFaites cuire vos merguez sur un grill ou à la poêle, mais pas avec les légumes.\r\nServez accompagné d\'une semoule fine.', 'public\\img\\couscous.jpg', 6),
(2, 'Tartiflette', '1h15', 'Plat', 'Très facile', 'Bon marché', 'Eplucher les pommes de terre, les couper en dés, bien les rincer et les essuyer dans un torchon propre.\r\nFaire chauffer l\'huile dans une poêle, y faire fondre les oignons.\r\nLorsque les oignons sont fondus, ajouter les pommes de terre et les faire dorer de tous les côtés.\r\nLorsqu\'elles sont dorées, ajouter les lardons et finir de cuire.\r\nD\'autre part, gratter la croûte du reblochon et le couper en deux (ou en quatre).\r\nPréchauffer le four à 200°C (thermostat 6-7) et préparer un plat à gratin en frottant le fond et les bords avec la gousse d\'ail épluchée.\r\nDans le plat à gratin, étaler une couche de pommes de terre aux lardons, disposer dessus la moitié du reblochon, puis de nouveau des pommes de terre. Terminer avec le reste du reblochon (croûte vers les pommes de terre).\r\nEnfourner pour environ 20 minutes de cuisson.', 'public\\img\\tartiflette.jpg', 4),
(3, 'Tarte au citron meringuée', '1h30', 'Dessert', 'Facile', 'Bon marché', 'Préchauffer le four à 180°C (thermostat 6) pendant 10 min. Garnir le plat à tarte avec la pâte piquée avec une fourchette. Mettre du papier sulfurisé et recouvrir de haricots secs. Laisser cuire dix minutes (la pâte ne doit pas colorer ou très peu).\r\nDans un saladier, mélanger deux œufs entiers et deux jaunes (mettre les blancs de côté), la crème fraîche et 150 g de sucre. Ensuite, ajouter le jus des deux citrons ainsi que leur zeste râpé très finement.\r\nSortir la pâte du four, enlever les haricots et le papier et mettre le mélange. Enfourner pendant une demi-heure.\r\nPendant ce temps, préparer la meringue : reprendre les blancs de tout à l\'heure et y ajouter le blanc du dernier œuf.\r\nMettre une pincée de sel et battre les blancs en neige. Quand ils sont fermes, ajouter doucement le sucre en continuant à battre.\r\nSortir la tarte du four, éteindre le four.\r\nMettre la meringue sur la tarte rapidement et remettre dans le four (éteint). La meringue va prendre une belle teinte dorée.', 'public\\img\\tarte_citron.jpg', 4),
(4, 'Tarte au chocolat fondant', '1h25', 'Dessert', 'Niveau moyen', 'Coût moyen', 'Il ne faut pas laisser le chocolat trop cuire, sinon ce serait un peu sec, c\'est comme un fondant mais avec une pâte.\r\nBeurrer un plat à tarte démontable de 20 cm de diamètre environ, et disposer la pâte dedans, et laisser reposer environ 1 h au réfrigérateur.\r\nPréchauffer le four à 200°C (thermostat 6-7), et cuire le fond de tarte pendant 10 min.\r\nPendant ce temps, couper le chocolat en très petits morceaux et faire bouillir la crème et le lait dans une casserole.\r\nAjouter le chocolat en morceaux, retirer du feu, et mélanger au fouet pour obtenir une masse bien lisse. Ajouter ensuite un œuf entier battu, et bien mélanger.\r\nVerser cette préparation sur le fond de tarte précuit.\r\nFaire cuire 15 à 18 min dans le four préchauffé à 150°C (th 5), la crème devant être légèrement prise, mais encore tremblotante.\r\nPour servir, retirer le cercle et éventuellement la plaque à tarte. Servir tiède ou froide.', 'public\\img\\tarte_chocolat.jpg', 8),
(5, 'Coquilles Saint Jacques safranées', '20 min', 'Entrée', 'Très facile', 'Coût moyen', 'Eplucher, hacher les échalotes et la gousse d’ail.\r\nFaire revenir à feu doux dans l’huile d’olive avec sel et poivre pendant 10 mn en remuant. Ajouter la poudre de safran et mélanger pendant une minute.\r\nDéposer les noix et coraux et laisser cuire 2 mn à feu vif sur chaque face.\r\nDéposer les noix et coraux dans l’assiette chaude.\r\nDéglacer la poêle avec la crème fraîche.\r\nMélanger, laisser chauffer une minute, et verser un peu de sauce dans les assiettes.\r\nServir aussitôt.', 'public\\img\\coquille_safran.jpg', 2),
(6, 'Pizza napolitaine', '45 min', 'Plat', 'Facile', 'Coût moyen', 'Pelez et hachez les oignons et l\'ail. Pelez et épépinez les tomates, découpez-les en dés.\r\nFaites chauffer 2 cuillères à soupe d\'huile d\'olive. Mettez-les l\'ail et l\'oignon, laissez-les dorer. RAjoutez les tomates, salez, poivrez et ajoutez le thym.\r\nLaissez cuire 20 minutes à feu moyen, jusqu\'à ce que le liquide soit évaporé.\r\nLaissez refroidir.\r\nPréchauffez le four à 240°C (thermostat 8).\r\nEtalez la pâte sur une plaque huilée ou farinée. Etalez la sauce tomate dessus. Répartissez les anchois et les olives.\r\nFaites cuire 15 minutes environ.', 'public\\img\\pizza.jpg', 4),
(7, 'Blanquette de poisson', '40 min', 'Plat', 'Très facile', 'Bon marché', 'Emincer l\'oignon et le faire dorer avec un peu de beurre.\r\nRajouter les champignons égouttés puis le vin blanc et porter à ébullition.\r\nAjouter ensuite la crème, le bouquet garni, le sel et le poivre.\r\nMélanger et laisser un peu réduire.\r\nRincer les filets de poisson, les éponger puis les passer dans la farine (en éliminant l\'excédent).\r\nAjouter les filets dans la cocotte et baisser le feu. Faire cuire 20 mn.', 'public\\img\\blanquette_poisson.jpg', 4),
(8, 'Cake aux olives', '1h10', 'Entrée', 'Facile', 'Bon marché', 'Préchauffer le four à Th 6 (180°C).\r\nEntretemps, mélanger la farine et les oeufs jusqu\'à obtenir un mélange onctueux. Ajouter l\'huile et l\'équivalent d\'1 verre de vin blanc sec.\r\nEgoutter les olives, les fariner légèrement et les incorporer à la pâte.\r\nAjouter le jambon, bien malaxer et verser le gruyère râpé et la levure; bien poivrer, mais ne pas saler à cause du jambon!\r\nBeurrer un moule à cake, y verser la pâte jusqu\'aux 2/3.\r\nEnfourner le cake pendant 50 min à Th 6 (180°C).\r\nSi le dessus du cake prend une teinte dorée trop rapidement, le couvrir d\'une feuille de papier alu et le laisser cuire ainsi.', 'public\\img\\cake_olives.jpg', 6),
(9, 'Tarte thon, tomate et moutarde', '55 min', 'Entrée', 'Très facile', 'Bon marché', 'Etaler la pâte feuilletée sur un moule à quiche, piquer le fond de la pâte, puis recouvrir le fond avec la moutarde.\r\nEmietter le thon et le répartir sur le fond de la pâte.\r\nLaver les tomates et les essuyer, puis les couper en rondelles moyennes, et les disposer sur le thon.\r\nBattre les oeufs en omelette, ajouter la crème fraîche plus le lait.\r\nSaler et poivrer.\r\nAjouter ce mélange sur la pâte, thon, tomate.\r\nMettre au four (pré-chauffé à 200°C/th 6-7), et cuire environ 40 min (jusqu\'à ce que la tarte soit dorée sans être trop brunie!).', 'public\\img\\tarte_thon.jpg', 4),
(10, 'Poires belle-hélène', '45 min', 'Dessert', 'Facile', 'Bon marché', 'Pelez les poires, tout en conservant la queue. Arrosez-les avec le jus d\'un demi citron.\r\nDans une casserole, versez 80 cl d\'eau, le sucre, et portez à ébullition.\r\nAjoutez les poires, et laissez cuire, à feu doux, pendant 25 à 30 min, jusqu\'à ce que les fruits soient bien tendres.\r\nLaissez tiédir, prélevez 20 cl de sirop, et reservez au moins 2 heures au réfrigérateur.\r\nDans une poêle à revêtement antiadhésif, faites dorer les amandes sans ajouter de corps gras.\r\nPréparez la sauce au chocolat : hachez le chocolat, chauffez les 20 cl de sirop, et laissez réduire d\'un tiers.\r\nAjoutez le chocolat, et mélangez pour obtenir une sauce lisse.\r\nHors du feu, incorporez le beurre.\r\nPréparez 8 petites boules de glace à la vanille, et répartissez-les sur des assiettes.\r\nDisposez les poires égouttées, et nappez de sauce au chocolat encore tiède. Parsemez d\'amandes Effilées? et décorez de cr7me chantilly.\r\nServez sans atendre...', 'public\\img\\poire_belle-helene.jpg', 4);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `make`
--
ALTER TABLE `make`
  ADD CONSTRAINT `FK_make_id_ingredients` FOREIGN KEY (`id_ingredients`) REFERENCES `ingredients` (`id_ingredients`),
  ADD CONSTRAINT `FK_make_id_recettes` FOREIGN KEY (`id_recettes`) REFERENCES `recettes` (`id_recettes`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
