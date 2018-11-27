-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 11:12 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrinho`
--

CREATE TABLE `carrinho` (
  `idCarrinho` int(11) NOT NULL,
  `Cliente_idCliente` int(11) NOT NULL,
  `Carrinho_idCarrinho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nomeCategoria` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cidade`
--

CREATE TABLE `cidade` (
  `idCidade` int(11) NOT NULL,
  `Estado_idEstado` int(11) DEFAULT NULL,
  `nomeCidade` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(45) DEFAULT NULL,
  `sobrenomeCliente` varchar(45) DEFAULT NULL,
  `emailCliente` varchar(45) DEFAULT NULL,
  `senhaCliente` varchar(255) DEFAULT NULL,
  `pessoajuridicaCliente` tinyint(1) DEFAULT '0',
  `cpfCliente` varchar(45) DEFAULT NULL,
  `cnpjCliente` varchar(45) DEFAULT NULL,
  `fotoCliente` varchar(150) DEFAULT NULL,
  `dataCriacaoCliente` date DEFAULT NULL,
  `dataAlteracaoCliente` date DEFAULT NULL,
  `adminCliente` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nomeCliente`, `sobrenomeCliente`, `emailCliente`, `senhaCliente`, `pessoajuridicaCliente`, `cpfCliente`, `cnpjCliente`, `fotoCliente`, `dataCriacaoCliente`, `dataAlteracaoCliente`, `adminCliente`) VALUES
(1, 'Didi', NULL, 'dinara.lima@gmail.com', 'meo', 0, NULL, NULL, NULL, '2018-11-04', NULL, 0),
(2, 'didilima', NULL, 'didilima@gmail.com', 'didilima', 0, NULL, NULL, NULL, '2018-11-04', NULL, 0),
(3, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `endereco`
--

CREATE TABLE `endereco` (
  `idEndereco` int(11) NOT NULL,
  `cepEndereco` varchar(45) DEFAULT NULL,
  `Cliente_idCliente` int(11) DEFAULT NULL,
  `Cidade_idCidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `entrega`
--

CREATE TABLE `entrega` (
  `idEntrega` int(11) NOT NULL,
  `nomeEntrega` varchar(45) DEFAULT NULL,
  `dataEntrega` date DEFAULT NULL,
  `Entregacol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `nomeEstado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `idFoto` int(11) NOT NULL,
  `localFoto` varchar(45) DEFAULT NULL,
  `Produto_idProduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`idFoto`, `localFoto`, `Produto_idProduto`) VALUES
(1, 'teste', 18),
(2, 'teste', 19),
(3, 'teste', 20),
(4, 'teste', 21),
(5, 'teste', 22),
(6, '/acdb/public/uploads/3120181118.png', 31),
(7, '/acdb/public/uploads/32_20181118.png', 32),
(8, '/acdb/public/uploads/33_20181118.png', 33),
(9, '/acdb/public/uploads/34_20181118.png', 34),
(10, '/acdb/public/uploads/35_20181118.png', 35),
(11, '/acdb/public/uploads/36_20181118.png', 36),
(12, 'uploads37_20181118.png', 37),
(13, 'uploads/38_20181118.png', 38),
(14, 'uploads/39_20181118.png', 39),
(15, 'uploadsprodutos40_20181118.png', 40),
(16, 'uploadsprodutos/41_20181127.jpeg', 41),
(17, 'uploadsprodutos/42_20181127.jpeg', 42);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Pedido_idPedido` int(10) UNSIGNED NOT NULL,
  `Produto_idProduto` int(11) NOT NULL,
  `Carrinho_idCarrinho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pagamento`
--

CREATE TABLE `pagamento` (
  `idPagamento` int(11) NOT NULL,
  `tipoPagamento` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pedido`
--

CREATE TABLE `pedido` (
  `idPedido` int(10) UNSIGNED NOT NULL,
  `dataPedido` date DEFAULT NULL,
  `valorPedido` float DEFAULT NULL,
  `Pedidocol` varchar(45) DEFAULT NULL,
  `Pagamento_idPagamento` int(11) NOT NULL,
  `StatusPedido_idStatusPedido` int(11) NOT NULL,
  `Entrega_idEntrega` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL,
  `destaqueProduto` tinyint(4) DEFAULT '0',
  `nomeProduto` varchar(45) DEFAULT NULL,
  `estoqueProduto` int(11) DEFAULT NULL,
  `skuProduto` varchar(45) DEFAULT NULL,
  `valorProduto` float DEFAULT NULL,
  `valorDescontoProduto` float DEFAULT NULL,
  `descricaoProduto` varchar(500) DEFAULT NULL,
  `fotoProduto` varchar(45) DEFAULT NULL,
  `dataCriacaoProduto` date DEFAULT NULL,
  `dataAlteracaoProduto` date DEFAULT NULL,
  `Produtocol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`idProduto`, `destaqueProduto`, `nomeProduto`, `estoqueProduto`, `skuProduto`, `valorProduto`, `valorDescontoProduto`, `descricaoProduto`, `fotoProduto`, `dataCriacaoProduto`, `dataAlteracaoProduto`, `Produtocol`) VALUES
(41, 1, 'Vestido Extreme', 10, '222', 50, 40, 'Descrição da camiseta extreme', NULL, '2018-11-27', '2018-11-27', NULL),
(42, 1, 'Camiseta do Buda', 2, '555', 55, NULL, 'Descrição da camiseta do buda', NULL, '2018-11-27', '2018-11-27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produtocategoria`
--

CREATE TABLE `produtocategoria` (
  `Produto_idProduto` int(11) NOT NULL,
  `Categoria_idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `propriedades`
--

CREATE TABLE `propriedades` (
  `Produto_idProduto` int(11) NOT NULL,
  `chavePropriedade` varchar(45) DEFAULT NULL,
  `valorPropriedade` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `statuspedido`
--

CREATE TABLE `statuspedido` (
  `idStatusPedido` int(11) NOT NULL,
  `nomeStatus` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`idCarrinho`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indexes for table `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`idCidade`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`idEndereco`);

--
-- Indexes for table `entrega`
--
ALTER TABLE `entrega`
  ADD PRIMARY KEY (`idEntrega`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`idFoto`);

--
-- Indexes for table `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`idPagamento`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPedido`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`);

--
-- Indexes for table `statuspedido`
--
ALTER TABLE `statuspedido`
  ADD PRIMARY KEY (`idStatusPedido`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `idCidade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `idEndereco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entrega`
--
ALTER TABLE `entrega`
  MODIFY `idEntrega` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `idFoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `idPagamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPedido` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `statuspedido`
--
ALTER TABLE `statuspedido`
  MODIFY `idStatusPedido` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
