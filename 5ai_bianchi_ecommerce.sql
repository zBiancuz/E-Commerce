-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 12, 2023 alle 15:45
-- Versione del server: 10.4.27-MariaDB
-- Versione PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `5ai_bianchi_ecommerce`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `carrello`
--

CREATE TABLE `carrello` (
  `ID` int(11) NOT NULL,
  `DataCreazione` date NOT NULL DEFAULT current_timestamp(),
  `IDutente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `carrello`
--

INSERT INTO `carrello` (`ID`, `DataCreazione`, `IDutente`) VALUES
(5, '2023-05-11', 4),
(7, '2023-05-12', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `categoria`
--

CREATE TABLE `categoria` (
  `ID` int(11) NOT NULL,
  `NomeCat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `categoria`
--

INSERT INTO `categoria` (`ID`, `NomeCat`) VALUES
(1, 'Cerchi Motard'),
(2, 'Scarichi'),
(3, 'Plastiche'),
(4, 'Carbonio');

-- --------------------------------------------------------

--
-- Struttura della tabella `commenti`
--

CREATE TABLE `commenti` (
  `ID` int(11) NOT NULL,
  `commento` text NOT NULL,
  `IDutente` int(11) NOT NULL,
  `IDprodotto` int(11) NOT NULL,
  `NomeUtente` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `commenti`
--

INSERT INTO `commenti` (`ID`, `commento`, `IDutente`, `IDprodotto`, `NomeUtente`) VALUES
(1, 'Bellissimo!', 1, 4, 'Matteo'),
(8, 'Bellissimo 2', 4, 4, 'Mattia'),
(23, 'belli', 1, 3, 'Matteo'),
(25, 'Bellissimi, li ho montati e sono perfetti!', 1, 13, 'Matteo');

-- --------------------------------------------------------

--
-- Struttura della tabella `contienecarrello`
--

CREATE TABLE `contienecarrello` (
  `IDContenuto` int(11) NOT NULL,
  `IDprodotto` int(11) NOT NULL,
  `IDcarrello` int(11) NOT NULL,
  `quantita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE `prodotti` (
  `ID` int(11) NOT NULL,
  `nomeProdotto` varchar(32) NOT NULL,
  `autore` varchar(32) NOT NULL,
  `marca` varchar(32) NOT NULL,
  `prezzo` float NOT NULL,
  `descrizione` text NOT NULL,
  `quantita` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `dataAggiunta` date NOT NULL,
  `IMG` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`ID`, `nomeProdotto`, `autore`, `marca`, `prezzo`, `descrizione`, `quantita`, `categoria`, `dataAggiunta`, `IMG`) VALUES
(1, 'Scarico DVR Carbonio', 'DVR S.r.l.', 'DVR', 1700, 'Scarico completo doppio DVR con collettori in acciaio inox e terminali in titanio\r\n\r\nStudiato e sviluppato espressamente per uso Supermoto.\r\n\r\nHa un notevole incremento di prestazioni su tutto l’arco di utiizzo del motore gia da originale.', 5, 2, '2023-04-28', 'Img/ScaricoDVR.png'),
(3, 'Kit plastiche suzuki RMZ 450', 'UFO S.r.l.', 'UFO', 75, 'kit plastiche  nella Colorazione Originale\r\nreplica Composto da :\r\n\r\n1 coppia Spoiler radiatore\r\n\r\n1 coppia laterali Porta Numero \r\n\r\n1 parafango anteriore\r\n\r\n1 parafango posteriore', 5, 3, '2023-04-28', 'Img/plasticheRmz.jpg'),
(4, 'Cerchi Alpina Motard', 'Alpina S.r.l.', 'Alpina', 1700, 'Cerchi Motard Alpina Alleggeriti per pista', 5, 1, '2023-04-28', 'Img/CerchiAlpina.jpg'),
(5, 'Cerchi EXCEL', 'EXCEL S.r.l.', 'EXCEL ', 1000, 'Disponibili cerchi excel supermoto con mozzi faba, nipples in ergal arancione e raggi neri.', 5, 1, '2023-04-28', 'img/CerchiExcel.jpg'),
(6, 'Cover serbatoio carbonio ', 'CMT S.r.l.', 'CMT COMPOSITI', 115, 'COPRI SERBATOIO IN CARBONIO CMT per SUZUKI RMZ 250 2019 - 2021\r\nCopri serbatoio realizzato in carbonio aeronautico prepreg e compatibile ai modelli Suzuki RMZ 250 2019 - 2021.\r\n\r\nSe ne consiglia l\'utilizzo finalizzato alla protezione del serbatoio del vostro veicolo da urti e/o eventuali collisioni esterne, e non solo: il copri serbatoio, oltre ad avere un valore meramente utilitaristico, contribuisce a donare un look più accattivante al vostro mezzo.\r\n\r\nLEGGEREZZA e RESISTENZA sono le caratteristiche che da sempre contraddistinguono i prodotti aziendali CMT.', 5, 4, '2023-05-01', 'img/CoverSerbatoio.jpg'),
(7, 'Scarico Arrow twin SUPERMOTO', 'Arrow S.r.l.', 'Arrow', 1580, 'Scarico completo arrow specifico per uso Supermoto,massime prestazioni agli alti regimi di rotazione del motore,prodotto 100% made in italy.\r\n\r\nNB vivamente consigliata la mappatura della centralina per sfruttare al meglio la resa dello scarico\r\n\r\ninstallare solo da personale qualificato!', 5, 2, '2023-05-06', 'img/ScaricoArrow2.jpg'),
(8, 'Scarico completo Akrapovic', 'Akrapovic S.r.l.', 'Akrapovic', 1750, '• Il fiore all’occhiello della gamma di impianti di scarico Akrapovic\r\n• Utilizzata e testata dai principali team “factory”\r\nche partecipano alle gare motociclistiche\r\n• Ciascun modello è unico e realizzato per ottimizzare le prestazioni\r\ndel motore, riducendo al tempo stesso il peso globale e\r\nottimizzando in tal modo la maneggevolezza globale della moto\r\n• Interamente in titanio\r\n• Gli impianti di scarico soddisfano i limiti fonometrici FIM, dispongono\r\ndi una staffa saldata più durevole e di un fondello in titanio\r\n• L’impianto di scarico ad alte prestazioni,\r\ninoltre, dispone di un nuovo rivestimento\r\nper il fodero esterno del silenziatore,\r\ngarantendo una migliore resistenza ai graffi\r\ne agevolando le operazioni di pulizia', 5, 2, '2023-05-06', 'img/ScaricoAkrapovic.png'),
(9, 'Kit plastiche Polisport Restylin', 'Polisport S.r.l.', 'Polisport ', 180, 'Kit plastiche Polisport Restyling HONDA CR 125 / 250 2002-2007\r\n\r\nConsente di aggiornare esteticamente i modelli CR 125 e CR 250 dal 2002 al 2007, rendendoli simili ai modelli CRF 2022\r\n\r\nIL KIT COMPRENDE\r\n- Parafango anteriore\r\n\r\n- Parafango posteriore \r\n\r\n- Convogliatori Radiatore \r\n\r\n- Fiancatine laterali\r\n\r\n- Tabella anteriore ', 5, 3, '2023-05-06', 'img/PlasticheHonda.jpg'),
(10, 'Kit plastiche Racetech verde flu', 'Racetech S.r.l.', 'Racetech ', 100, 'Kit plastiche RACETECH KAWASAKI KXF \r\n\r\n- PARAFANGO ANTERIORE VENTILATO\r\n- PARAFANGO POSTERIORE\r\n- CONVOGLIATORI RADIATORE\r\n- LATERALI PORTANUMERO\r\n- TABELLA ANTERIORE\r\n- PARASTELI FORCELLA', 5, 3, '2023-05-06', 'img/PlasticheKawasaki.jpg'),
(11, 'Serbatoio in carbonio monoblocco', 'CMT S.r.l.', 'CMT COMPOSITI', 800, 'Serbatoio realizzato in carbonio per i modelli Suzuki RMZ 250 2012 - 2013 - 2014 - 2015 - 2016 - 2017 - 2018 in linea con gli standard qualitativi dei prodotti CMT realizzati per soddisfare le esigenze dei clienti.\r\n\r\nSuper leggerezza, dunque, massima resistenza ed elevato impatto estetico sono le caratteristiche principali del nostro serbatoio realizzato in carbonio monoblocco.\r\n\r\nL\'attenzione al dettaglio e l\'inequivocabile qualità del prodotto è garantita dal processo di lavorazione nel quale crediamo, (nello specifico di polimerizzazione in autoclave), e di cui i nostri esperti di settore si fanno garanti, quotidianamente.\r\n\r\nLa rifinitura superficiale è resa brillante tramite lucidatura della resina.', 5, 4, '2023-05-06', 'img/SerbatoioCarbonio.jpg'),
(12, 'Supporti motore in carbonio', 'CMT S.r.l.', 'CMT COMPOSITI', 145, 'L\'alta qualità  delle staffe supporto motore progettate in carbonio prepreg. per i modelli Suzuki RMZ 450 2018 - 2019 - 2020 - 2021 - 2022 - 2023 è garantita dal processo di polimerizzazione in autoclave con il quale viene lavorato ogni singolo prodotto.', 5, 4, '2023-05-06', 'img/SupportomotoreCarbonio.jpg'),
(13, 'Cerchi Fa-Ba Supermotard', 'FaBa S.r.l.', 'Fa-Ba', 990, 'Disponibili cerchi faba supermoto con mozzi e nipples in ergal rossi e raggi neri.', 5, 1, '2023-05-12', 'img/CerchiFaba.png');

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dataN` date NOT NULL,
  `amministratore` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `user`
--

INSERT INTO `user` (`ID`, `nome`, `cognome`, `pswd`, `email`, `dataN`, `amministratore`) VALUES
(1, 'Matteo', 'Bianchi', 'Lebron23', 'pippo@gmail.com', '2003-03-27', 1),
(4, 'Mattia', 'Agnati', 'Mattia', 'Mattia@gmail.com', '2004-09-30', 0);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `carrello`
--
ALTER TABLE `carrello`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDutente` (`IDutente`);

--
-- Indici per le tabelle `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `commenti`
--
ALTER TABLE `commenti`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDutente` (`IDutente`,`IDprodotto`),
  ADD KEY `IDprodotto` (`IDprodotto`);

--
-- Indici per le tabelle `contienecarrello`
--
ALTER TABLE `contienecarrello`
  ADD PRIMARY KEY (`IDContenuto`),
  ADD KEY `IDprodotto` (`IDprodotto`,`IDcarrello`),
  ADD KEY `IDcarrello` (`IDcarrello`);

--
-- Indici per le tabelle `prodotti`
--
ALTER TABLE `prodotti`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `categoria` (`categoria`);

--
-- Indici per le tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `carrello`
--
ALTER TABLE `carrello`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT per la tabella `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `commenti`
--
ALTER TABLE `commenti`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT per la tabella `contienecarrello`
--
ALTER TABLE `contienecarrello`
  MODIFY `IDContenuto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT per la tabella `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `carrello`
--
ALTER TABLE `carrello`
  ADD CONSTRAINT `carrello_ibfk_1` FOREIGN KEY (`IDutente`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `commenti`
--
ALTER TABLE `commenti`
  ADD CONSTRAINT `commenti_ibfk_1` FOREIGN KEY (`IDutente`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commenti_ibfk_2` FOREIGN KEY (`IDprodotto`) REFERENCES `prodotti` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `contienecarrello`
--
ALTER TABLE `contienecarrello`
  ADD CONSTRAINT `contienecarrello_ibfk_1` FOREIGN KEY (`IDprodotto`) REFERENCES `prodotti` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contienecarrello_ibfk_2` FOREIGN KEY (`IDcarrello`) REFERENCES `carrello` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  ADD CONSTRAINT `prodotti_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
