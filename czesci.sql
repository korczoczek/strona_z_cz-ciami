-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Wersja serwera:               10.4.11-MariaDB - mariadb.org binary distribution
-- Serwer OS:                    Win64
-- HeidiSQL Wersja:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Zrzut struktury tabela czesci.klienci
CREATE TABLE IF NOT EXISTS `klienci` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(32) NOT NULL,
  `haslohash` binary(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `data_utworzenia` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `klienci` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Zrzucanie danych dla tabeli czesci.klienci: ~0 rows (około)
/*!40000 ALTER TABLE `klienci` DISABLE KEYS */;
/*!40000 ALTER TABLE `klienci` ENABLE KEYS */;

-- Zrzut struktury tabela czesci.koszyki
CREATE TABLE IF NOT EXISTS `koszyki` (
  `id_zamowienia` int(11) NOT NULL,
  `id_czesci` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL,
  KEY `id_zamowienia` (`id_zamowienia`),
  KEY `id_czesci` (`id_czesci`),
  CONSTRAINT `koszyki_ibfk_1` FOREIGN KEY (`id_zamowienia`) REFERENCES `zamowienia` (`id`),
  CONSTRAINT `koszyki_ibfk_2` FOREIGN KEY (`id_czesci`) REFERENCES `magazyn` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Zrzucanie danych dla tabeli czesci.koszyki: ~0 rows (około)
/*!40000 ALTER TABLE `koszyki` DISABLE KEYS */;
/*!40000 ALTER TABLE `koszyki` ENABLE KEYS */;

-- Zrzut struktury tabela czesci.magazyn
CREATE TABLE IF NOT EXISTS `magazyn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(255) DEFAULT NULL,
  `cena` float NOT NULL,
  `zdjecie` varchar(255) DEFAULT NULL,
  `opis` varchar(255) DEFAULT NULL,
  `ilosc` int(11) DEFAULT NULL,
  `producent` varchar(50) DEFAULT NULL,
  `kod_producenta` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `magazyn` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Zrzucanie danych dla tabeli czesci.magazyn: ~0 rows (około)
/*!40000 ALTER TABLE `magazyn` DISABLE KEYS */;
/*!40000 ALTER TABLE `magazyn` ENABLE KEYS */;

-- Zrzut struktury tabela czesci.zamowienia
CREATE TABLE IF NOT EXISTS `zamowienia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_klient` int(11) NOT NULL,
  `data_utworzenia` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `id_klient` (`id_klient`),
  CONSTRAINT `zamowienia_ibfk_1` FOREIGN KEY (`id_klient`) REFERENCES `klienci` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Zrzucanie danych dla tabeli czesci.zamowienia: ~0 rows (około)
/*!40000 ALTER TABLE `zamowienia` DISABLE KEYS */;
/*!40000 ALTER TABLE `zamowienia` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
