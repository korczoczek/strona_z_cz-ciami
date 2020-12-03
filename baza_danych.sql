-- --------------------------------------------------------
-- Host:                         gvda.ddns.net
-- Wersja serwera:               8.0.22-0ubuntu0.20.04.2 - (Ubuntu)
-- Serwer OS:                    Linux
-- HeidiSQL Wersja:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Zrzut struktury procedura czesci.aktualizujKoszyk
DELIMITER //
CREATE DEFINER=`sklep`@`%` PROCEDURE `aktualizujKoszyk`(
zamowienie INT,
produkt INT,
pilosc INT
)
BEGIN
UPDATE koszyki
SET ilosc=pilosc
WHERE id_zamowienia=zamowienie
AND id_czesci=produkt;
END//
DELIMITER ;

-- Zrzut struktury widok czesci.czesci
-- Tworzenie tymczasowej tabeli aby przezwyciężyć błędy z zależnościami w WIDOKU
CREATE TABLE `czesci` (
	`id` INT NOT NULL,
	`zdjecie` VARCHAR(255) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`nazwa` VARCHAR(128) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`opis` VARCHAR(1024) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`cena` FLOAT NOT NULL,
	`ilosc` INT NOT NULL,
	`producent` VARCHAR(50) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`model` VARCHAR(50) NULL COLLATE 'utf8mb4_0900_ai_ci'
) ENGINE=MyISAM;

-- Zrzut struktury procedura czesci.dodajCzesc
DELIMITER //
CREATE DEFINER=`sklep`@`%` PROCEDURE `dodajCzesc`(
	IN `pnazwa` VARCHAR(128),
	IN `pcena` FLOAT,
	IN `pzdjecie` VARCHAR(255),
	IN `popis` VARCHAR(1024),
	IN `pilosc` INT,
	IN `pproducent` VARCHAR(50),
	IN `pmodel` VARCHAR(50)
)
BEGIN
INSERT INTO magazyn (nazwa,cena,zdjecie,opis,ilosc,producent,model)
VALUES (pnazwa,pcena,pzdjecie,popis,pilosc,pproducent,pmodel);
END//
DELIMITER ;

-- Zrzut struktury procedura czesci.edytujCzesc
DELIMITER //
CREATE DEFINER=`sklep`@`%` PROCEDURE `edytujCzesc`(
	pid INT,
	pnazwa VARCHAR(128),
	pcena FLOAT,
	pzdjecie VARCHAR(255),
	popis VARCHAR(1024),
	pilosc INT,
	pproducent VARCHAR(50),
	pmodel VARCHAR(50)
)
BEGIN
UPDATE magazyn
SET nazwa=pnazwa,
cena=pcena,
zdjecie=pzdjecie,
opis=popis,
ilosc=pilosc,
producent=pproducent,
model=pmodel
WHERE id=pid;
END//
DELIMITER ;

-- Zrzut struktury tabela czesci.klienci
CREATE TABLE IF NOT EXISTS `klienci` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(32) NOT NULL DEFAULT '',
  `haslomd5` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `data_utworzenia` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `imie` varchar(50) DEFAULT '',
  `nazwisko` varchar(50) DEFAULT '',
  `admin` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `klienci` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Zrzucanie danych dla tabeli czesci.klienci: ~3 rows (około)
/*!40000 ALTER TABLE `klienci` DISABLE KEYS */;
INSERT INTO `klienci` (`id`, `login`, `haslomd5`, `email`, `data_utworzenia`, `imie`, `nazwisko`, `admin`) VALUES
	(1, 'korczoczek', '85b15bb7f547c9f5c6008b5cfd598f36', 'danielkorczok@gmail.com', '2020-11-29 14:37:08', 'Daniel', 'Korczok', 1),
	(4, 'testuser', '5d9c68c6c50ed3d02a2fcf54f63993b6', 'danielkorczok@interia.pl', '2020-12-01 13:06:23', 'test', 'user', 0),
	(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gvda.ddns.net', '2020-12-01 13:08:03', 'admin', 'istrator', 1);
/*!40000 ALTER TABLE `klienci` ENABLE KEYS */;

-- Zrzut struktury tabela czesci.koszyki
CREATE TABLE IF NOT EXISTS `koszyki` (
  `id_zamowienia` int NOT NULL,
  `id_czesci` int NOT NULL,
  `ilosc` int NOT NULL DEFAULT '1',
  KEY `id_zamowienia` (`id_zamowienia`),
  KEY `id_czesci` (`id_czesci`),
  CONSTRAINT `koszyki_ibfk_1` FOREIGN KEY (`id_zamowienia`) REFERENCES `zamowienia` (`id`),
  CONSTRAINT `koszyki_ibfk_2` FOREIGN KEY (`id_czesci`) REFERENCES `magazyn` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Zrzucanie danych dla tabeli czesci.koszyki: ~2 rows (około)
/*!40000 ALTER TABLE `koszyki` DISABLE KEYS */;
INSERT INTO `koszyki` (`id_zamowienia`, `id_czesci`, `ilosc`) VALUES
	(1, 3, 75),
	(1, 5, 13);
/*!40000 ALTER TABLE `koszyki` ENABLE KEYS */;

-- Zrzut struktury widok czesci.koszykifull
-- Tworzenie tymczasowej tabeli aby przezwyciężyć błędy z zależnościami w WIDOKU
CREATE TABLE `koszykifull` (
	`id` INT NOT NULL,
	`produkt` INT NOT NULL,
	`nazwa` VARCHAR(128) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`producent` VARCHAR(50) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`model` VARCHAR(50) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`cena` FLOAT NOT NULL,
	`ilosc` INT NOT NULL
) ENGINE=MyISAM;

-- Zrzut struktury widok czesci.koszykisuma
-- Tworzenie tymczasowej tabeli aby przezwyciężyć błędy z zależnościami w WIDOKU
CREATE TABLE `koszykisuma` (
	`suma` DOUBLE NULL,
	`id` INT NOT NULL
) ENGINE=MyISAM;

-- Zrzut struktury widok czesci.login
-- Tworzenie tymczasowej tabeli aby przezwyciężyć błędy z zależnościami w WIDOKU
CREATE TABLE `login` (
	`id` INT NOT NULL,
	`login` VARCHAR(32) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`email` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`haslomd5` VARCHAR(32) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`admin` TINYINT NOT NULL
) ENGINE=MyISAM;

-- Zrzut struktury tabela czesci.magazyn
CREATE TABLE IF NOT EXISTS `magazyn` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(128) NOT NULL DEFAULT '',
  `cena` float NOT NULL DEFAULT '0',
  `zdjecie` varchar(255) DEFAULT '',
  `opis` varchar(1024) DEFAULT '',
  `ilosc` int NOT NULL DEFAULT '0',
  `producent` varchar(50) DEFAULT '',
  `model` varchar(50) DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `magazyn` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Zrzucanie danych dla tabeli czesci.magazyn: ~5 rows (około)
/*!40000 ALTER TABLE `magazyn` DISABLE KEYS */;
INSERT INTO `magazyn` (`id`, `nazwa`, `cena`, `zdjecie`, `opis`, `ilosc`, `producent`, `model`) VALUES
	(1, 'Gaźnik', 350, '', 'to jest on', 12, 'Yamacha', ''),
	(2, 'Blok silnika', 1199, '', 'tłoki tu robią tututututut', 5, 'Tesco', ''),
	(3, 'Klamka', 56, '', 'trzyma się za nią drzwi', 10000, 'Toyota', ''),
	(4, 'cylinder', 150, '', 'Cylinder do Yamacha Z125', 60, 'Yamacha', ''),
	(5, 'Zbiornik Paliwa', 30, '', 'Zbiornik Paliwa 30L', 500, 'Yamacha', 'Yamacha 5000');
/*!40000 ALTER TABLE `magazyn` ENABLE KEYS */;

-- Zrzut struktury procedura czesci.rejestracja
DELIMITER //
CREATE DEFINER=`sklep`@`%` PROCEDURE `rejestracja`(
	plogin VARCHAR(32),
	phaslo VARCHAR(32),
	pemail VARCHAR(255),
	pimie VARCHAR(50),
	pnazwisko VARCHAR(50)
)
BEGIN
INSERT INTO klienci (login,haslomd5,email,imie,nazwisko)
VALUES (plogin,phaslo,pemail,pimie,pnazwisko);
END//
DELIMITER ;

-- Zrzut struktury procedura czesci.usunZKoszyka
DELIMITER //
CREATE DEFINER=`sklep`@`%` PROCEDURE `usunZKoszyka`(
zamowienie INT,
produkt INT
)
BEGIN
DELETE FROM koszyki
WHERE id_zamowienia=zamowienie
AND id_czesci=produkt;
END//
DELIMITER ;

-- Zrzut struktury tabela czesci.zamowienia
CREATE TABLE IF NOT EXISTS `zamowienia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_klient` int NOT NULL DEFAULT '0',
  `data_utworzenia` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ulica` varchar(100) DEFAULT '',
  `nr_domu` int DEFAULT '0',
  `nr_mieszkania` int DEFAULT '0',
  `miejscowosc` varchar(50) DEFAULT '',
  `kod_pocztowy` varchar(6) DEFAULT '',
  `kraj` varchar(50) DEFAULT '',
  `koszyk` tinyint DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id_klient` (`id_klient`),
  CONSTRAINT `zamowienia_ibfk_1` FOREIGN KEY (`id_klient`) REFERENCES `klienci` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Zrzucanie danych dla tabeli czesci.zamowienia: ~1 rows (około)
/*!40000 ALTER TABLE `zamowienia` DISABLE KEYS */;
INSERT INTO `zamowienia` (`id`, `id_klient`, `data_utworzenia`, `ulica`, `nr_domu`, `nr_mieszkania`, `miejscowosc`, `kod_pocztowy`, `kraj`, `koszyk`) VALUES
	(1, 1, '2020-12-01 10:11:05', '', 0, 0, '', '', '', 1);
/*!40000 ALTER TABLE `zamowienia` ENABLE KEYS */;

-- Zrzut struktury widok czesci.czesci
-- Usuwanie tabeli tymczasowej i tworzenie ostatecznej struktury WIDOKU
DROP TABLE IF EXISTS `czesci`;
CREATE ALGORITHM=UNDEFINED DEFINER=`sklep`@`%` SQL SECURITY DEFINER VIEW `czesci` AS select `magazyn`.`id` AS `id`,`magazyn`.`zdjecie` AS `zdjecie`,`magazyn`.`nazwa` AS `nazwa`,`magazyn`.`opis` AS `opis`,`magazyn`.`cena` AS `cena`,`magazyn`.`ilosc` AS `ilosc`,`magazyn`.`producent` AS `producent`,`magazyn`.`model` AS `model` from `magazyn`;

-- Zrzut struktury widok czesci.koszykifull
-- Usuwanie tabeli tymczasowej i tworzenie ostatecznej struktury WIDOKU
DROP TABLE IF EXISTS `koszykifull`;
CREATE ALGORITHM=UNDEFINED DEFINER=`sklep`@`%` SQL SECURITY DEFINER VIEW `koszykifull` AS select `k`.`id_zamowienia` AS `id`,`k`.`id_czesci` AS `produkt`,`m`.`nazwa` AS `nazwa`,`m`.`producent` AS `producent`,`m`.`model` AS `model`,`m`.`cena` AS `cena`,`k`.`ilosc` AS `ilosc` from (`koszyki` `k` join `magazyn` `m` on((`k`.`id_czesci` = `m`.`id`)));

-- Zrzut struktury widok czesci.koszykisuma
-- Usuwanie tabeli tymczasowej i tworzenie ostatecznej struktury WIDOKU
DROP TABLE IF EXISTS `koszykisuma`;
CREATE ALGORITHM=UNDEFINED DEFINER=`sklep`@`%` SQL SECURITY DEFINER VIEW `koszykisuma` AS select round(sum((`koszykifull`.`ilosc` * `koszykifull`.`cena`)),0) AS `suma`,`koszykifull`.`id` AS `id` from `koszykifull` group by `koszykifull`.`id`;

-- Zrzut struktury widok czesci.login
-- Usuwanie tabeli tymczasowej i tworzenie ostatecznej struktury WIDOKU
DROP TABLE IF EXISTS `login`;
CREATE ALGORITHM=UNDEFINED DEFINER=`sklep`@`%` SQL SECURITY DEFINER VIEW `login` AS select `klienci`.`id` AS `id`,`klienci`.`login` AS `login`,`klienci`.`email` AS `email`,`klienci`.`haslomd5` AS `haslomd5`,`klienci`.`admin` AS `admin` from `klienci`;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
