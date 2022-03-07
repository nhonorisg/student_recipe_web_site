-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 05 Mai 2021 à 11:13
-- Version du serveur :  10.3.23-MariaDB
-- Version de PHP :  5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `19_L1M_ikram_filali`
--

-- --------------------------------------------------------

--
-- Structure de la table `COMMENTAIRES`
--

CREATE TABLE IF NOT EXISTS `COMMENTAIRES` (
  `NomRecette` varchar(60) NOT NULL,
  `Login` varchar(60) NOT NULL,
  `Commentaire` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Structure de la table `COMPOSITIONS`
--

CREATE TABLE IF NOT EXISTS `COMPOSITIONS` (
  `NomRecette` varchar(60) NOT NULL,
  `NomIngredient` varchar(60) NOT NULL,
  `Quantite` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `COMPOSITIONS`
--

INSERT INTO `COMPOSITIONS` (`NomRecette`, `NomIngredient`, `Quantite`) VALUES
('Biscuits à l’avoine, raisins secs et pépites de chocolat', 'Beure ramollis', '125 ml'),
('Biscuits à l’avoine, raisins secs et pépites de chocolat', 'Bicarbonate de sodium', '1/2 cuillère à soupe'),
('Biscuits à l’avoine, raisins secs et pépites de chocolat', 'Cassonade', '60 ml'),
('Biscuits à l’avoine, raisins secs et pépites de chocolat', 'farine', '175 ml'),
('Biscuits à l’avoine, raisins secs et pépites de chocolat', 'Flocon d`avoine ', '375 ml'),
('Biscuits à l’avoine, raisins secs et pépites de chocolat', 'oeufs', '1'),
('Biscuits à l’avoine, raisins secs et pépites de chocolat', 'Pépite de chocolat', '125 ml'),
('Biscuits à l’avoine, raisins secs et pépites de chocolat', 'Raisins sec', '125 ml'),
('Biscuits à l’avoine, raisins secs et pépites de chocolat', 'sel', '1/4 thé '),
('Biscuits à l’avoine, raisins secs et pépites de chocolat', 'Sucre', '175 ml'),
('Biscuits à l’avoine, raisins secs et pépites de chocolat', 'Thé de vanille en poudre', '1/2 cuillère à soupe'),
('Croissant egg bacon', ' bacon', '4 tranches'),
('Croissant egg bacon', 'ciboulette', '6 brins'),
('Croissant egg bacon', 'croissants', '4'),
('Croissant egg bacon', 'huile d`olive', '1 cuillère(s) à café '),
('Croissant egg bacon', 'moutarde savora', '60g'),
('Croissant egg bacon', 'oeufs', '4'),
('Escalopes de veau au citron et romarin', 'Beurre', '60 g'),
('Escalopes de veau au citron et romarin', 'Brin de romarin', 'Quelques'),
('Escalopes de veau au citron et romarin', 'Escalope de veau', '460 g'),
('Escalopes de veau au citron et romarin', 'farine', '25 g'),
('Escalopes de veau au citron et romarin', 'huile d`olive', '1 filet'),
('Escalopes de veau au citron et romarin', 'noix de beurre', ''),
('Escalopes de veau au citron et romarin', 'poivre', ''),
('Escalopes de veau au citron et romarin', 'sel', ''),
('Escalopes de veau au citron et romarin', 'Vin blanc sec', '6 cl'),
('Gratin de pennes à la tomate', 'Citron', 'le jus de 1/2 '),
('Gratin de pennes à la tomate', 'huile d`olive', '1 cuillère à soupe'),
('Gratin de pennes à la tomate', 'mozzarella', '200 g'),
('Gratin de pennes à la tomate', 'Pennes', '30 g'),
('Gratin de pennes à la tomate', 'poivre', '1cuillère à soupe'),
('Gratin de pennes à la tomate', 'sel', '1 cuillère à soupe'),
('Gratin de pennes à la tomate', 'Tige de basilic', '1'),
('Gratin de pennes à la tomate', 'Tomates', '30 g'),
('Le cake aux olives et aux lardons', 'farine', '200g'),
('Le cake aux olives et aux lardons', 'gruyère', '100g'),
('Le cake aux olives et aux lardons', 'huile d`olive', '10cl'),
('Le cake aux olives et aux lardons', 'lait', '10cl'),
('Le cake aux olives et aux lardons', 'lardons', '200g'),
('Le cake aux olives et aux lardons', 'levure', '1 sachet'),
('Le cake aux olives et aux lardons', 'oeufs', '3'),
('Le cake aux olives et aux lardons', 'poivre', ''),
('Le cake aux olives et aux lardons', 'sel', '1 pincée'),
('Le Shepherd’s pie: hachis Parmentier Irlandais', 'Beurre', ''),
('Le Shepherd’s pie: hachis Parmentier Irlandais', 'Bouillon de bœuf ', '160 ml'),
('Le Shepherd’s pie: hachis Parmentier Irlandais', 'Bœuf ou Agneau', '30 g'),
('Le Shepherd’s pie: hachis Parmentier Irlandais', 'Carottes', '2'),
('Le Shepherd’s pie: hachis Parmentier Irlandais', 'Chapelure', ''),
('Le Shepherd’s pie: hachis Parmentier Irlandais', 'farine', '1 cuillère à soupe'),
('Le Shepherd’s pie: hachis Parmentier Irlandais', 'gruyère râpé', ''),
('Le Shepherd’s pie: hachis Parmentier Irlandais', 'huile d`olive', ''),
('Le Shepherd’s pie: hachis Parmentier Irlandais', 'lait', 'cuillères à soupe'),
('Le Shepherd’s pie: hachis Parmentier Irlandais', 'oignons émincé', '1 '),
('Le Shepherd’s pie: hachis Parmentier Irlandais', 'Persil haché  ', ''),
('Le Shepherd’s pie: hachis Parmentier Irlandais', 'Petits pois', '100 g'),
('Le Shepherd’s pie: hachis Parmentier Irlandais', 'poivre', ''),
('Le Shepherd’s pie: hachis Parmentier Irlandais', 'pommes de terres', '25 pièces '),
('Le Shepherd’s pie: hachis Parmentier Irlandais', 'Sauce Worcestershire', ''),
('Le Shepherd’s pie: hachis Parmentier Irlandais', 'sel', ''),
('Omelette ciboulette et mozzarella', 'ciboulette', '1 bouquet'),
('Omelette ciboulette et mozzarella', 'huile d`olive', ' 2 cuillères à soupe'),
('Omelette ciboulette et mozzarella', 'mozzarella', '1 boule de 125g'),
('Omelette ciboulette et mozzarella', 'noix muscade', '4 pincées'),
('Omelette ciboulette et mozzarella', 'oeufs', '6'),
('Omelette ciboulette et mozzarella', 'poivre', ''),
('Omelette ciboulette et mozzarella', 'sel', ''),
('Pâtes au citron et gruyère', 'citrons bio', '3'),
('Pâtes au citron et gruyère', 'crème liquide', '40cl'),
('Pâtes au citron et gruyère', 'gros sel', ''),
('Pâtes au citron et gruyère', 'gruyère râpé', '80g'),
('Pâtes au citron et gruyère', 'parmesan râpé', '30g'),
('Pâtes au citron et gruyère', 'pâtes', '30g'),
('Pâtes au citron et gruyère', 'poivre', ''),
('Poulet Curry Coco', 'Carottes', '3'),
('Poulet Curry Coco', 'Coriandre', '30 g'),
('Poulet Curry Coco', 'curry en poudre', '1 cuillère à café'),
('Poulet Curry Coco', 'Escalope de poulet', '2'),
('Poulet Curry Coco', 'Huile d`arachide de tournesol', ''),
('Poulet Curry Coco', 'Lait de coco', '200 ml'),
('Poulet Curry Coco', 'Paprika', '1 pincée '),
('Poulet Curry Coco', 'Pâte de curry vert', '1 pot '),
('Poulet Curry Coco', 'Riz Basmati', '260 g'),
('Poulet Curry Coco', 'Soupe de Nuoc Mam', '2 cuillères à soupe'),
('Poulet Curry Coco', 'Yaourt brassé', '1'),
('Wrap frais au jambon', 'Fromage frais', '1 '),
('Wrap frais au jambon', 'Jambon', '2 tranches'),
('Wrap frais au jambon', 'Salade', ''),
('Wrap frais au jambon', 'Wrap', '');

-- --------------------------------------------------------

--
-- Structure de la table `ETAPES`
--

CREATE TABLE IF NOT EXISTS `ETAPES` (
  `NomRecette` varchar(60) NOT NULL,
  `Etape` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ETAPES`
--

INSERT INTO ETAPES (NomRecette, Etape) VALUES
('Biscuits à l’avoine, raisins secs et pépites de chocolat', '1. Préchauffez votre four à 190 °C. Dans un saladier, mélangez le sucre, la cassonade et le beurre ramolli jusqu’à obtenir une préparation mousseuse.'),
('Biscuits à l’avoine, raisins secs et pépites de chocolat', '2. Incorporez la vanille et l’œuf puis ajoutez la farine, le bicarbonate de soude, la cannelle et le sel. Une fois le mélange homogène, ajoutez les flocons d’avoine, les pépites de chocolat et les raisins secs.'),
('Biscuits à l’avoine, raisins secs et pépites de chocolat', '3. Chemisez une plaque de cuisson de papier sulfurisé puis déposez les portions de pâte avant d’enfourner pour environ 10 minutes de cuisson.'),
('Biscuits à l’avoine, raisins secs et pépites de chocolat', '4. Lorsque les bords des biscuits à l’avoine commencent à dorer, retirez-les du four puis laissez refroidir 1 minute avant de les retirer de la plaque.'),
('Croissant egg bacon', '1. Ouvrez les croissants en deux. Badigeonnez chaque demi-croissant de moutarde Savora. Coupez les tranches de bacon en deux. Ciselez la ciboulette.'),
('Croissant egg bacon', '2. Préchauffez le four à 180 °C. Placez les demi-croissants sur une plaque face garnie vers le haut. Enfournez 5 mn.'),
('Croissant egg bacon', '3. Faites chauffer l’huile dans une sauteuse. Cassez-y les œufs et faites-les cuire au plat.'),
('Croissant egg bacon', '4. Placez les demi-tranches de bacon sur les croissants, ajoutez un œuf au plat, parsemez de ciboulette ciselée, refermez avec la partie supérieure de chaque croissant. Servez immédiatement.'),
('Escalopes de veau au citron et romarin', '1. Faites fondre 50 grammes de beurre avec 2 cuillères à soupe d’huile d’olive dans une poêle. Farinez légèrement les escalopes de veau puis faites les colorer de chaque côté dans la poêle. N’oubliez pas d’assaisonner votre viande avec le romarin, le sel et le poivre.'),
('Escalopes de veau au citron et romarin', '2. Une fois les escalopes cuites, réservez-les hors de la poêle.'),
('Escalopes de veau au citron et romarin', '3. Déglacez les sucs de cuisson en versant le jus de citron et le vin blanc sec. Déposez à nouveau les escalopes dans la poêle puis ajoutez une noix de beurre afin de faire épaissir la sauce sur feu moyen.'),
('Escalopes de veau au citron et romarin', '4. Il ne vous reste plus qu’a accompagner vos escalopes de veau au citron et romarin avec du riz, une purée de légumes ou de savoureuses pâtes au citron !Une fois les escalopes cuites, réservez-les hors de la poêle'),
('Gratin de pennes à la tomate', '1. Cuisez les pennes dans une grande casserole d’eau salée, puis égouttez-les. Ébouillantez les tomates 1 minute, rafraîchissez-les, pelez-les et taillez-les en petits dés. Lavez, séchez et effeuillez le basilic. Coupez la mozzarella en tranches. Réservez. '),
('Gratin de pennes à la tomate', '2. Préchauffez le four à 210 °C. Dans un plat à gratin huilé, disposez une couche de pennes, puis une de tomates, et ainsi de suite en finissant par une couche de pâtes. Recouvrez du fromage, salez et poivrez.'),
('Gratin de pennes à la tomate', '3. Enfournez pour 20 minutes environ, le temps que ce soit bien gratiné. Parsemez de basilic avant de servir.'),
('Le cake aux olives et aux lardons', '1. Dans une poêle, faire revenir les lardons sans ajouter de matière grasse. Mélanger la farine, les œufs, l’huile, le sel et le poivre.'),
('Le cake aux olives et aux lardons', '2. Ajoutez le lait progressivement puis incorporez le fromage râpé, les olives et les lardons'),
('Le cake aux olives et aux lardons', '3. Déposez la préparation dans un moule à cake chemisé d’un papier cuisson puis enfournez 45 minutes à 200°C'),
('Le cake aux olives et aux lardons', '4. Dégustez ce célèbre cake aux olives et aux lardons... N’hésitez pas à l’accompagner d’une salade gourmande ou de légumes à croquer accompagnés d’une sauce maison'),
('Le Shepherd’s pie: hachis Parmentier Irlandais', '1. Préchauffez votre four à 180 °C.'),
('Le Shepherd’s pie: hachis Parmentier Irlandais', '2. Épluchez et coupez les pommes de terre en morceaux puis faites-les cuire dans un grand volume d’eau bouillante salée.'),
('Le Shepherd’s pie: hachis Parmentier Irlandais', '3. Réduisez les pommes de terre en purée avec une noix de beurre, le lait ainsi qu’un peu de sel et poivre.'),
('Le Shepherd’s pie: hachis Parmentier Irlandais', '4. Faites chauffer l’huile d’olive dans une poêle pour y faire revenir le boeuf préalablement émincé en morceaux. Une fois saisi de chaque côté, ajoutez les oignons et les carottes préalablement coupés en petits morceaux.'),
('Le Shepherd’s pie: hachis Parmentier Irlandais', '5. Incorporez la farine, la sauce, les petits pois et le bouillon de boeuf puis laissez mijoter quelques minutes sur feu moyen.'),
('Le Shepherd’s pie: hachis Parmentier Irlandais', '6. Lorsque la viande de boeuf est cuite et que les carottes commencent à devenir tendres, versez la préparation dans le fond d’un plat allant au four.'),
('Le Shepherd’s pie: hachis Parmentier Irlandais', '7. Recouvrez la viande et les légumes de purée de pommes de terre puis saupoudrez le tout de gruyère et de chapelure puis enfournez le Shepherd’s pie pour 30 minutes de cuisson.'),
('Omelette ciboulette et mozzarella', '1. Coupez la mozzarella en 12 morceaux que vous faites égoutter sur plusieurs papiers absorbants. '),
('Omelette ciboulette et mozzarella', '2. Cassez les oeufs dans une terrine et fouettez-les à la fourchette avec sel, poivre et muscade.'),
('Omelette ciboulette et mozzarella', '3. Ciselez la ciboulette et ajoutez-la dans les oeufs.'),
('Omelette ciboulette et mozzarella', '4. Faites chauffer l’huile dans une poêle antiadhésive de 20 cm de diamètre environ – l’omelette ne doit pas être trop plate. Versez les oeufs battus et mélangez 2 à 3 mn, le temps qu’ils commencent à prendre.'),
('Omelette ciboulette et mozzarella', '5. Parsemez les oeufs de mozzarella, couvrez et laissez cuire 7 mn environ, à feu doux, sans y toucher, jusqu’à ce que l’omelette soit juste prise. Vous pouvez retourner l’omelette si vous le désirez, l’omelette sera plus ferme et la mozzarella moins fondante, ou la servir ainsi, cuite d’un seul côté.'),
('Pâtes au citron et gruyère', '1. Portez une grande casserole d’eau à ébullition avec une poignée de gros sel. Lavez les citrons, râpez le zeste et pressez-les. '),
('Pâtes au citron et gruyère', '2. Mélangez, dans une petite casserole, la crème, le zeste et le jus des citrons, le gruyère et le parmesan. Salez et poivrez. Faites chauffer sur feu moyen en remuant doucement jusqu’à ce que les fromages aient fondu et que la crème ait épaissi. Baissez le feu pour garder la sauce au chaud.'),
('Pâtes au citron et gruyère', '3. Jetez les pâtes dans l’eau bouillante et laissez cuire le temps indiqué sur le paquet (1 mn de moins pour une cuisson al dente). Égouttez, mélangez à la sauce et servez sans attendre.'),
('Poulet Curry Coco', '1. Couper les escalopes en lamelles et émincer l’oignon. Préparer une julienne de carottes.'),
('Poulet Curry Coco', '2. Dans un bol, mélanger le yaourt, nuoc mam, et une cuillerée à café de curry vert. Badigeonner la viande de ce mélange et la laisser mariner dans un saladier le temps de préparer la suite.'),
('Poulet Curry Coco', '3. Dans un wok, faire revenir à feu moyen les oignons émincés et la julienne de carottes avec un filet d`huile d`olive pendant 5 minutes. Ajouter les fines lamelles de poulet marinées dans le wok et les faire revenir avec les légumes 10 minutes, toujours à feu moyen. '),
('Poulet Curry Coco', '4. Pendant ce temps, cuire le riz basmati dans une casserole d’eau bouillante salée. Suivre les instructions du paquet.'),
('Poulet Curry Coco', '5. Arroser la viande et les légumes avec le lait de coco, ajouter une pincée de curry et une pincée de paprika et laisser mijoter 2 minutes dans le wok.'),
('Poulet Curry Coco', '6. Déposer quelques feuilles de coriandre fraîche ciselées sur le plat. Le poulet curry coco est délicieux avec un bon riz gluant.'),
('Wrap frais au jambon', '1. Prenez un wrap et étalez sur toute sa surface du fromage frais. Variez les plaisirs selon vos goûts: nature, aux herbes, au poivre, aux noix, à la provençale etc. '),
('Wrap frais au jambon', '2. Disposez par dessus une tranche de jambon puis de la salade (coupée en petits morceaux, plus faciles à manger). '),
('Wrap frais au jambon', '3. Refermez le wrap.replier les deux côtés gauche et droit vers le centre du wrap'),
('Wrap frais au jambon', '4. prenez ensuite la partie du bas du wrap et faîte la rouler jusqu en haut Vous obtenez un wrap roulé comme un nêm, les deux extrémités fermées. '),
('Wrap frais au jambon', '5. vous pouvez couper votre wrap en rondelles apéritives ou bien le couper en diagonale à la moitié (voir photo) puis le piquer avec un cure-dent pour le maintenir.');

-- --------------------------------------------------------

--
-- Structure de la table `FAVORIS`
--

CREATE TABLE IF NOT EXISTS `FAVORIS` (
  `NomRecette` varchar(60) NOT NULL,
  `Login` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `FAVORIS`
--

INSERT INTO `FAVORIS` (`NomRecette`, `Login`) VALUES
('Biscuits à l’avoine, raisins secs et pépites de chocolat', 'i.filali31'),
('Croissant egg bacon', 'i.filali31');

-- --------------------------------------------------------

--
-- Structure de la table `INDIVIDUS`
--

CREATE TABLE IF NOT EXISTS `INDIVIDUS` (
  `NomInd` varchar(20) NOT NULL,
  `prenomInd` varchar(20) NOT NULL,
  `Login` varchar(60) NOT NULL,
  `Type` varchar(13),
  `pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `INDIVIDUS`
--

INSERT INTO `INDIVIDUS` (`NomInd`, `prenomInd`, `Login`, `pass`) VALUES
('', '', '', '$2y$10$CiDwiIUgVYZ0OA2vx4jimOSjYYW.QPkHDZjWKIueQf8rGtWD08MbS'),
('FEKIH', 'Manel', 'f.manel21', '$2y$10$n5rgOD2S/RUsTZJ3kewEwe7UA8BwcNf6lfH87qYHHKXmHXeWozSFa'),
('NDERYIMANA', 'HONORIS GRATIAS', 'honoris.1', '$2y$10$f70ohHM85fEZcaUK/10cQ.bKQwOJ4.eW9T4cvuJnPYzkSV5tQz3gy'),
('FILALI', 'ikram', 'i.filali31', '$2y$10$fehJWGih./stqBFCD.kEUOLyGfBARIRM1EZQrG6iNDQ29R0klrxay');

-- --------------------------------------------------------

--
-- Structure de la table `INGREDIENTS`
--

CREATE TABLE IF NOT EXISTS `INGREDIENTS` (
  `NomIngredient` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `INGREDIENTS`
--

INSERT INTO `INGREDIENTS` (`NomIngredient`) VALUES
(' bacon'),
('Beure ramollis'),
('Beurre'),
('Bicarbonate de sodium'),
('Bouillon de bœuf '),
('Brin de romarin'),
('Bœuf ou Agneau'),
('Carottes'),
('Cassonade'),
('Chapelure'),
('ciboulette'),
('Citron'),
('citrons bio'),
('Coriandre'),
('crème liquide'),
('croissants'),
('curry en poudre'),
('Escalope de poulet'),
('Escalope de veau'),
('farine'),
('Flocon d`avoine '),
('Fromage frais'),
('gros sel'),
('gruyère'),
('gruyère râpé'),
('Huile d`arachide de tournesol'),
('huile d`olive'),
('Jambon'),
('lait'),
('Lait de coco'),
('lardons'),
('levure'),
('moutarde savora'),
('mozzarella'),
('noix de beurre'),
('noix muscade'),
('oeufs'),
('oignons émincé'),
('olives vertes'),
('Paprika'),
('parmesan râpé'),
('Pâte de curry vert'),
('pâtes'),
('Pennes'),
('Pépite de chocolat'),
('Persil haché  '),
('Petits pois'),
('poivre'),
('pommes de terres'),
('Raisins sec'),
('Riz Basmati'),
('Salade'),
('Sauce Worcestershire'),
('sel'),
('Soupe de Nuoc Mam'),
('Sucre'),
('Thé de vanille en poudre'),
('Tige de basilic'),
('Tomates'),
('Vin blanc sec'),
('Wrap'),
('Yaourt brassé'),
('œufs');

-- --------------------------------------------------------

--
-- Structure de la table `RECETTES`
--

CREATE TABLE IF NOT EXISTS `RECETTES` (
  `NomRecette` varchar(60) NOT NULL,
  `Difficulte` varchar(15) NOT NULL,
  `Cout` varchar(17) NOT NULL,
  `Temps_Preparation` time NOT NULL,
  `Temps_Cuisson` time NOT NULL,
  `date_publication` date DEFAULT NULL,
  `Login` varchar(60) DEFAULT NULL,
  `images` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `RECETTES`
--

INSERT INTO `RECETTES` (`NomRecette`, `Difficulte`, `Cout`, `Temps_Preparation`, `Temps_Cuisson`, `date_publication`, `Login`, `images`) VALUES
('Biscuits à l’avoine, raisins secs et pépites de chocolat', 'Facile', 'Moyen', '00:06:00', '00:10:00', '2001-01-01', NULL, 'biscuits.jpg'),
('Crêpes Ã  la ricotta et aux fraises', 'facile', 'bon marchÃ©', '00:10:00', '00:15:00', '2021-05-04', 'i.filali31', 'crepes.jpg'),
('Croissant egg bacon', 'Très Facile', 'Bon marché', '00:10:00', '00:10:00', '2001-01-01', NULL, 'Croissants-egg-and-bacon.jpg'),
('Escalopes de veau au citron et romarin', 'Très facile', 'Moyen', '00:04:00', '00:15:00', '2001-01-01', NULL, 'escalope.jpg'),
('Gratin de pennes à la tomate', 'Facile', 'Bon marché', '00:20:00', '00:30:00', '2001-01-01', NULL, 'gratin_de_pennes.jpg'),
('Le cake aux olives et aux lardons', 'Très Facile', 'Bon marché', '00:10:00', '00:45:00', '2001-01-01', NULL, 'cake_aux_olives.jpg'),
('Le Shepherd’s pie: hachis Parmentier Irlandais', 'facile', 'moyen', '00:20:00', '00:25:00', '2001-01-01', NULL, 'hachis_permentier.jpg'),
('Omelette ciboulette et mozzarella', 'Très Facile', 'Bon marché', '00:10:00', '00:10:00', '2001-01-01', NULL, 'Omelette-ciboulette-et-mozzarella.jpg'),
('Pâtes au citron et gruyère', 'Très Facile', 'Bon marché', '00:10:00', '00:15:00', '2001-01-01', NULL, 'Pates-au-citron-et-gruyere.jpg'),
('Poulet Curry Coco', 'Moyen', 'Moyen', '00:10:00', '00:30:00', '2001-01-01', NULL, 'poulet_curry.jpg'),
('Wrap frais au jambon', 'Très facile', 'Très bon marché', '00:05:00', '00:00:00', '2001-01-01', NULL, 'wrap-frais-au-jambon.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `COMMENTAIRES`
--
ALTER TABLE `COMMENTAIRES`
  ADD PRIMARY KEY (`NomRecette`,`Login`),
  ADD KEY `Login` (`Login`);

--
-- Index pour la table `COMPOSITIONS`
--
ALTER TABLE `COMPOSITIONS`
  ADD PRIMARY KEY (`NomRecette`,`NomIngredient`),
  ADD KEY `NomRecette` (`NomRecette`,`NomIngredient`),
  ADD KEY `NomIngredient` (`NomIngredient`);

--
-- Index pour la table `ETAPES`
--
ALTER TABLE `ETAPES`
  ADD PRIMARY KEY (`NomRecette`,`Etape`);

--
-- Index pour la table `FAVORIS`
--
ALTER TABLE `FAVORIS`
  ADD PRIMARY KEY (`NomRecette`,`Login`),
  ADD KEY `NomRecette` (`NomRecette`,`Login`),
  ADD KEY `Login` (`Login`);

--
-- Index pour la table `INDIVIDUS`
--
ALTER TABLE `INDIVIDUS`
  ADD PRIMARY KEY (`Login`);

--
-- Index pour la table `INGREDIENTS`
--
ALTER TABLE `INGREDIENTS`
  ADD PRIMARY KEY (`NomIngredient`);

--
-- Index pour la table `RECETTES`
--
ALTER TABLE `RECETTES`
  ADD PRIMARY KEY (`NomRecette`),
  ADD KEY `Login` (`Login`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `COMMENTAIRES`
--
ALTER TABLE `COMMENTAIRES`
  ADD CONSTRAINT `COMMENTAIRES_ibfk_1` FOREIGN KEY (`NomRecette`) REFERENCES `RECETTES` (`NomRecette`),
  ADD CONSTRAINT `COMMENTAIRES_ibfk_2` FOREIGN KEY (`Login`) REFERENCES `INDIVIDUS` (`Login`);

--
-- Contraintes pour la table `COMPOSITIONS`
--
ALTER TABLE `COMPOSITIONS`
  ADD CONSTRAINT `COMPOSITIONS_ibfk_1` FOREIGN KEY (`NomRecette`) REFERENCES `RECETTES` (`NomRecette`),
  ADD CONSTRAINT `COMPOSITIONS_ibfk_2` FOREIGN KEY (`NomIngredient`) REFERENCES `INGREDIENTS` (`NomIngredient`);

--
-- Contraintes pour la table `ETAPES`
--
ALTER TABLE `ETAPES`
  ADD CONSTRAINT `ETAPES_ibfk_1` FOREIGN KEY (`NomRecette`) REFERENCES `RECETTES` (`NomRecette`);

--
-- Contraintes pour la table `FAVORIS`
--
ALTER TABLE `FAVORIS`
  ADD CONSTRAINT `FAVORIS_ibfk_1` FOREIGN KEY (`NomRecette`) REFERENCES `RECETTES` (`NomRecette`),
  ADD CONSTRAINT `FAVORIS_ibfk_2` FOREIGN KEY (`Login`) REFERENCES `INDIVIDUS` (`Login`);

--
-- Contraintes pour la table `RECETTES`
--
ALTER TABLE `RECETTES`
  ADD CONSTRAINT `RECETTES_ibfk_1` FOREIGN KEY (`Login`) REFERENCES `INDIVIDUS` (`Login`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
