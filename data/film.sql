SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `auteur` varchar(250) NOT NULL,
  `date_sortie` date NOT NULL,
  `3d` tinyint(1) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
