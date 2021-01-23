-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Jan-2021 às 03:11
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CORRIDA`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `CORREDORES`
--

CREATE TABLE `CORREDORES` (
  `COR_ID` int(11) UNSIGNED NOT NULL,
  `COR_NOME` varchar(100) NOT NULL,
  `COR_CPF` varchar(14) NOT NULL,
  `COR_DATA_NASCIMENTO` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `CORREDORES_PROVAS`
--

CREATE TABLE `CORREDORES_PROVAS` (
  `COR_ID` int(11) UNSIGNED NOT NULL,
  `PRO_ID` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `PROVAS`
--

CREATE TABLE `PROVAS` (
  `PRO_ID` int(11) UNSIGNED NOT NULL,
  `PRO_TIPO` int(11) NOT NULL DEFAULT '0',
  `PRO_DATA` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `RESULTADOS`
--

CREATE TABLE `RESULTADOS` (
  `COR_ID` int(11) UNSIGNED NOT NULL,
  `PRO_ID` int(11) UNSIGNED NOT NULL,
  `RES_INICIO` time NOT NULL DEFAULT '00:00:00',
  `RES_FIM` time NOT NULL DEFAULT '00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CORREDORES`
--
ALTER TABLE `CORREDORES`
  ADD PRIMARY KEY (`COR_ID`);

--
-- Indexes for table `CORREDORES_PROVAS`
--
ALTER TABLE `CORREDORES_PROVAS`
  ADD KEY `COR_ID` (`COR_ID`),
  ADD KEY `PRO_ID` (`PRO_ID`);

--
-- Indexes for table `PROVAS`
--
ALTER TABLE `PROVAS`
  ADD PRIMARY KEY (`PRO_ID`);

--
-- Indexes for table `RESULTADOS`
--
ALTER TABLE `RESULTADOS`
  ADD KEY `COR_ID` (`COR_ID`),
  ADD KEY `PRO_ID` (`PRO_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CORREDORES`
--
ALTER TABLE `CORREDORES`
  MODIFY `COR_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `PROVAS`
--
ALTER TABLE `PROVAS`
  MODIFY `PRO_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `CORREDORES_PROVAS`
--
ALTER TABLE `CORREDORES_PROVAS`
  ADD CONSTRAINT `corredores_provas_ibfk_1` FOREIGN KEY (`COR_ID`) REFERENCES `CORREDORES` (`COR_ID`),
  ADD CONSTRAINT `corredores_provas_ibfk_2` FOREIGN KEY (`PRO_ID`) REFERENCES `PROVAS` (`PRO_ID`);

--
-- Limitadores para a tabela `RESULTADOS`
--
ALTER TABLE `RESULTADOS`
  ADD CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`COR_ID`) REFERENCES `CORREDORES` (`COR_ID`),
  ADD CONSTRAINT `resultados_ibfk_2` FOREIGN KEY (`PRO_ID`) REFERENCES `PROVAS` (`PRO_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
