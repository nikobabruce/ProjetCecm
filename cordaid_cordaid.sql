-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 01 mai 2023 à 21:31
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cordaid_cordaid`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE `agence` (
  `id_agence` int(11) NOT NULL,
  `nom_agence` varchar(50) NOT NULL,
  `Adresse_agence` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `date_commande` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commande_produit`
--

CREATE TABLE `commande_produit` (
  `commande_id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `entree`
--

CREATE TABLE `entree` (
  `id_entree` int(11) NOT NULL,
  `quantite_entree` int(11) NOT NULL,
  `date_entree` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `id_fournisseur` int(11) NOT NULL,
  `nom_fournisseur` varchar(50) NOT NULL,
  `prenom_fournisseur` varchar(50) NOT NULL,
  `adresse_fournisseur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `levels`
--

CREATE TABLE `levels` (
  `id` int(2) NOT NULL,
  `nama_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `planification`
--

CREATE TABLE `planification` (
  `date_fin` datetime(6) NOT NULL,
  `id_plan` int(11) NOT NULL,
  `date_plan` datetime(6) NOT NULL,
  `type_plan` text NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `planification`
--

INSERT INTO `planification` (`date_fin`, `id_plan`, `date_plan`, `type_plan`, `user_id`) VALUES
('0000-00-00 00:00:00.000000', 1, '2015-09-02 07:15:00.000000', 'Mission', 5),
('0000-00-00 00:00:00.000000', 2, '2015-09-01 05:35:00.000000', 'Reunion', 5),
('0000-00-00 00:00:00.000000', 3, '2015-09-02 06:20:00.000000', 'mission2', 5);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(50) NOT NULL,
  `prix_produit` int(11) NOT NULL,
  `fournisseur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit_entree`
--

CREATE TABLE `produit_entree` (
  `entree_id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit_stock`
--

CREATE TABLE `produit_stock` (
  `stock_id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `nama_lengkap`, `alamat`, `telp`, `email`, `foto`) VALUES
(5, 5, 'nikobamye', 'ngagara', '79151043', 'nikobabruce8@yahoo.fr', '');

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

CREATE TABLE `rapport` (
  `id_rapport` int(11) NOT NULL,
  `fichier_rapport` varchar(255) NOT NULL,
  `desc_rapport` text NOT NULL,
  `titre_rapport` varchar(100) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rapport`
--

INSERT INTO `rapport` (`id_rapport`, `fichier_rapport`, `desc_rapport`, `titre_rapport`, `plan_id`, `user_id`) VALUES
(1, '636399-ameliorez-la-visibilite-de-votre-site-grace-au-referencement2.pdf', '<p>rapport 1</p>', 'titre test3', 1, 5),
(2, 'fifa_live2.docx', '<p>rapport 2</p>', 'titre test2', 2, 5),
(3, 'cv_bruce1.docx', '<p>rapport 3</p>', 'titre test', 3, 5);

-- --------------------------------------------------------

--
-- Structure de la table `sortie`
--

CREATE TABLE `sortie` (
  `id_sortie` int(11) NOT NULL,
  `quantite_sortie` int(11) NOT NULL,
  `date_sortie` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sortie_produit`
--

CREATE TABLE `sortie_produit` (
  `sortie_id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE `stock` (
  `id_stock` int(11) NOT NULL,
  `lieu_stock` varchar(100) NOT NULL,
  `agence_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`) VALUES
(5, 'bruce', 'nikobru', 1);

-- --------------------------------------------------------

--
-- Structure de la table `usersgroups`
--

CREATE TABLE `usersgroups` (
  `usersgroup_id` int(11) NOT NULL,
  `usersgroup_name` varchar(100) NOT NULL,
  `usersgroup_description` text DEFAULT NULL,
  `inheritby` int(11) DEFAULT NULL,
  `afterlogin` varchar(30) NOT NULL,
  `sortorder` int(3) NOT NULL,
  `isdefault` int(1) NOT NULL DEFAULT 0,
  `usersgroup_active` int(1) NOT NULL DEFAULT 1,
  `user_group_access` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `usersgroups`
--

INSERT INTO `usersgroups` (`usersgroup_id`, `usersgroup_name`, `usersgroup_description`, `inheritby`, `afterlogin`, `sortorder`, `isdefault`, `usersgroup_active`, `user_group_access`) VALUES
(2, 'Coordinateur', 'Il a un acces  limite		  \r\n			  ', NULL, '', 2, 0, 1, ''),
(3, 'administrateur', 'Il a tous les doits', NULL, '', 2, 0, 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `usersgroupsrules`
--

CREATE TABLE `usersgroupsrules` (
  `usersgroupsrule_id` int(11) NOT NULL,
  `usersgroup_id` int(11) NOT NULL,
  `userstask_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Rules about which group does this task';

--
-- Déchargement des données de la table `usersgroupsrules`
--

INSERT INTO `usersgroupsrules` (`usersgroupsrule_id`, `usersgroup_id`, `userstask_id`) VALUES
(12, 2, 1),
(13, 2, 3),
(14, 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `userstasks`
--

CREATE TABLE `userstasks` (
  `usertask_id` int(11) NOT NULL,
  `usertask_name` varchar(60) NOT NULL COMMENT 'Technically, this is the name of the CI controller or the function (controller/function)',
  `usertask_description` text NOT NULL,
  `task_type` varchar(10) NOT NULL DEFAULT 'Primary',
  `usertask_parentid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='simple list of system ressources';

--
-- Déchargement des données de la table `userstasks`
--

INSERT INTO `userstasks` (`usertask_id`, `usertask_name`, `usertask_description`, `task_type`, `usertask_parentid`) VALUES
(1, 'site/admin/', 'Ajout d\'une fonctionnalité d\'enregistrement des programmes', 'Primary', NULL),
(3, 'site/plan/', 'Enregistrement des plannification sur l\'execution des differents projets', 'Primary', NULL),
(4, 'site/afficherplan/', 'Affichage des diffentes plannifications', 'Primary', NULL),
(5, 'site/rapport/', 'Ajout des rapports sur les plannification', 'Primary', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agence`
--
ALTER TABLE `agence`
  ADD PRIMARY KEY (`id_agence`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `entree`
--
ALTER TABLE `entree`
  ADD PRIMARY KEY (`id_entree`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`id_fournisseur`);

--
-- Index pour la table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `planification`
--
ALTER TABLE `planification`
  ADD PRIMARY KEY (`id_plan`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- Index pour la table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rapport`
--
ALTER TABLE `rapport`
  ADD PRIMARY KEY (`id_rapport`);

--
-- Index pour la table `sortie`
--
ALTER TABLE `sortie`
  ADD PRIMARY KEY (`id_sortie`);

--
-- Index pour la table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_stock`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `usersgroups`
--
ALTER TABLE `usersgroups`
  ADD PRIMARY KEY (`usersgroup_id`),
  ADD UNIQUE KEY `usersgroup_name` (`usersgroup_name`),
  ADD KEY `inheritby` (`inheritby`),
  ADD KEY `isdefault` (`isdefault`),
  ADD KEY `sortorder` (`sortorder`);

--
-- Index pour la table `usersgroupsrules`
--
ALTER TABLE `usersgroupsrules`
  ADD PRIMARY KEY (`usersgroupsrule_id`),
  ADD KEY `usersgroup_id` (`usersgroup_id`),
  ADD KEY `userstask_id` (`userstask_id`);

--
-- Index pour la table `userstasks`
--
ALTER TABLE `userstasks`
  ADD PRIMARY KEY (`usertask_id`),
  ADD UNIQUE KEY `usertask_name` (`usertask_name`),
  ADD KEY `usertask_parentid` (`usertask_parentid`),
  ADD KEY `task_type` (`task_type`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `planification`
--
ALTER TABLE `planification`
  MODIFY `id_plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `rapport`
--
ALTER TABLE `rapport`
  MODIFY `id_rapport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `usersgroups`
--
ALTER TABLE `usersgroups`
  MODIFY `usersgroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `usersgroupsrules`
--
ALTER TABLE `usersgroupsrules`
  MODIFY `usersgroupsrule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `userstasks`
--
ALTER TABLE `userstasks`
  MODIFY `usertask_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
