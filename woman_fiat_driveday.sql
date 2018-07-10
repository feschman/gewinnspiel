

CREATE TABLE `woman_fiat_driveday` (
  `id` int(11) NOT NULL,
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `haendler` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `geburtsdatum` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `hausnummer` varchar(200) NOT NULL,
  `plz` varchar(200) NOT NULL,
  `ort` varchar(200) NOT NULL,
  `mobil-telefon` varchar(200) NOT NULL,
  `e-mail` varchar(200) NOT NULL,
  `zustimmungs` varchar(200) NOT NULL,
  `agb` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;