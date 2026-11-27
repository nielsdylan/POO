-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: 2026-11-25-POO
-- ------------------------------------------------------
-- Server version	5.5.5-10.11.16-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `detalle_ventas`
--

DROP TABLE IF EXISTS `detalle_ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detalle_ventas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `venta_id` int(10) unsigned NOT NULL,
  `producto_id` int(10) unsigned NOT NULL,
  `cantidad` int(10) unsigned NOT NULL DEFAULT 1,
  `precio_unitario` decimal(10,2) NOT NULL DEFAULT 0.00,
  `es_regalo` tinyint(1) NOT NULL DEFAULT 0,
  `subtotal` decimal(10,2) NOT NULL DEFAULT 0.00,
  PRIMARY KEY (`id`),
  KEY `fk_detalle_venta` (`venta_id`),
  KEY `fk_detalle_producto_venta` (`producto_id`),
  CONSTRAINT `fk_detalle_producto_venta` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`),
  CONSTRAINT `fk_detalle_venta` FOREIGN KEY (`venta_id`) REFERENCES `ventas` (`id`),
  CONSTRAINT `chk_cantidad_venta` CHECK (`cantidad` > 0),
  CONSTRAINT `chk_precio_unitario_venta` CHECK (`precio_unitario` >= 0),
  CONSTRAINT `chk_subtotal_venta` CHECK (`subtotal` >= 0)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_ventas`
--

LOCK TABLES `detalle_ventas` WRITE;
/*!40000 ALTER TABLE `detalle_ventas` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle_ventas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metodos_pago`
--

DROP TABLE IF EXISTS `metodos_pago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `metodos_pago` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codigo` varchar(40) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `comision_pct` decimal(5,2) NOT NULL DEFAULT 0.00,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo` (`codigo`),
  CONSTRAINT `chk_comision_pct` CHECK (`comision_pct` >= 0 and `comision_pct` <= 100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metodos_pago`
--

LOCK TABLES `metodos_pago` WRITE;
/*!40000 ALTER TABLE `metodos_pago` DISABLE KEYS */;
/*!40000 ALTER TABLE `metodos_pago` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordenes`
--

DROP TABLE IF EXISTS `ordenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ordenes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_id` int(10) unsigned NOT NULL,
  `metodo_pago_id` int(10) unsigned NOT NULL,
  `estado` enum('pendiente','pagado','cancelado') NOT NULL DEFAULT 'pendiente',
  `total` decimal(10,2) NOT NULL DEFAULT 0.00,
  `creado_en` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `fk_ordenes_usuario` (`usuario_id`),
  KEY `fk_ordenes_metodo_pago` (`metodo_pago_id`),
  CONSTRAINT `fk_ordenes_metodo_pago` FOREIGN KEY (`metodo_pago_id`) REFERENCES `metodos_pago` (`id`),
  CONSTRAINT `fk_ordenes_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `chk_total_orden` CHECK (`total` >= 0)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordenes`
--

LOCK TABLES `ordenes` WRITE;
/*!40000 ALTER TABLE `ordenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `ordenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sku` varchar(50) NOT NULL,
  `nombre` varchar(160) NOT NULL,
  `precio_regular` decimal(10,2) NOT NULL DEFAULT 0.00,
  `precio_oferta` decimal(10,2) DEFAULT NULL,
  `descuento_pct` decimal(5,2) NOT NULL DEFAULT 0.00,
  `en_oferta` tinyint(1) NOT NULL DEFAULT 0,
  `es_regalo` tinyint(1) NOT NULL DEFAULT 0,
  `stock` int(10) unsigned NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sku` (`sku`),
  CONSTRAINT `chk_precio_regular` CHECK (`precio_regular` >= 0),
  CONSTRAINT `chk_precio_oferta` CHECK (`precio_oferta` is null or `precio_oferta` >= 0),
  CONSTRAINT `chk_descuento_pct` CHECK (`descuento_pct` >= 0 and `descuento_pct` <= 100)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'PRD-001','Camiseta Básica Algodón Blanca',39.90,NULL,0.00,0,0,45,1),(2,'PRD-002','Camiseta Básica Algodón Negra',39.90,29.90,0.00,1,0,32,1),(3,'PRD-003','Pantalón Jean Clásico Azul',119.00,NULL,15.00,0,0,20,1),(4,'PRD-004','Zapatillas Urbanas Running',189.90,149.90,10.00,1,0,15,1),(5,'PRD-005','Sticker Promocional Holográfico',0.00,NULL,0.00,0,1,200,1),(6,'PRD-006','Chaqueta Cortavientos Impermeable',159.00,119.00,0.00,1,0,12,1),(7,'PRD-007','Gorra Deportiva Ajustable',45.00,NULL,20.00,0,0,38,1),(8,'PRD-008','Mochila Laptop 15.6 Pulgadas',129.00,NULL,0.00,0,0,25,1),(9,'PRD-009','Bolsa Ecológica de Tela',0.00,NULL,0.00,0,1,150,1),(10,'PRD-010','Sudadera con Capucha Gris',99.90,79.90,0.00,1,0,18,1),(11,'PRD-011','Calcetines Tobilleros Pack x3',24.90,NULL,25.00,0,0,60,1),(12,'PRD-012','Cinturón Cuero Sintético Marrón',49.90,NULL,0.00,0,0,22,1),(13,'PRD-013','Lentes de Sol UV400 Polarizados',69.00,49.00,0.00,1,0,30,1),(14,'PRD-014','Llavero Metálico de Cortesia',0.00,NULL,0.00,0,1,120,1),(15,'PRD-015','Camisa Manga Larga Oxford',89.90,NULL,10.00,0,0,16,1),(16,'PRD-016','Short Deportivo Transpirable',44.90,34.90,0.00,1,0,28,1),(17,'PRD-017','Reloj Digital Deportivo Resistente',110.00,NULL,30.00,0,0,14,1),(18,'PRD-018','Audífonos In-Ear con Micrófono',59.90,NULL,0.00,0,0,40,1),(19,'PRD-019','Mouse Inalámbrico Ergonómico',54.90,39.90,0.00,1,0,35,1),(20,'PRD-020','Muestra Gratuita Crema Hidratante',0.00,NULL,0.00,0,1,90,1),(21,'PRD-021','Teclado Mecánico Compacto RGB',199.00,NULL,15.00,0,0,10,1),(22,'PRD-022','Mousepad XL Bordado Antideslizante',34.90,24.90,0.00,1,0,50,1),(23,'PRD-023','Cable USB-C a USB-C 1.5m',22.00,NULL,0.00,0,0,75,1),(24,'PRD-024','Cargador Rápido Pared 25W',49.00,NULL,20.00,0,0,42,1),(25,'PRD-025','Power Bank 10000mAh Carga Rápida',89.00,69.00,0.00,1,0,21,1),(26,'PRD-026','Soporte Metálico para Laptop',75.00,NULL,0.00,0,0,19,1),(27,'PRD-027','Anillo Soporte Celular Giratorio',0.00,NULL,0.00,0,1,110,1),(28,'PRD-028','Funda Antigolpes Silicona Transparente',25.00,NULL,10.00,0,0,80,1),(29,'PRD-029','Mica Vidrio Templado 9H',18.00,12.00,0.00,1,0,95,1),(30,'PRD-030','Lámpara LED Escritorio Táctil',65.00,NULL,0.00,0,0,17,1),(31,'PRD-031','Taza Cerámica Térmica 350ml',29.90,NULL,15.00,0,0,48,1),(32,'PRD-032','Termo Acero Inoxidable 750ml',69.90,54.90,0.00,1,0,26,1),(33,'PRD-033','Botella Deportiva Tritán 600ml',27.90,NULL,0.00,0,0,52,1),(34,'PRD-034','Posavasos de Corcho Set x4',0.00,NULL,0.00,0,1,85,1),(35,'PRD-035','Organizador de Escritorio Malla',38.00,NULL,20.00,0,0,31,1),(36,'PRD-036','Agenda Ejecutiva Tapa Dura',42.00,29.90,0.00,1,0,27,1),(37,'PRD-037','Cuaderno Puntillado A5 120 Hojas',23.00,NULL,0.00,0,0,64,1),(38,'PRD-038','Set Bolígrafos Tinta Gel x6',19.90,NULL,30.00,0,0,70,1),(39,'PRD-039','Canguro Deportivo Impermeable',49.90,35.90,0.00,1,0,29,1),(40,'PRD-040','Billetera Minimalista Tarjetero',39.00,NULL,0.00,0,0,33,1),(41,'PRD-041','Bufanda Tejida Invierno Unisex',44.00,NULL,25.00,0,0,19,1),(42,'PRD-042','Guantes Táctiles para Frío',32.00,22.00,0.00,1,0,24,1),(43,'PRD-043','Pin Esmaltado Edición Especial',0.00,NULL,0.00,0,1,140,1),(44,'PRD-044','Polera Oversize Estampada',84.90,NULL,15.00,0,0,23,1),(45,'PRD-045','Jogger Algodón French Terry',79.90,59.90,0.00,1,0,31,1),(46,'PRD-046','Casaca Denim Clásica',139.00,NULL,0.00,0,0,11,1),(47,'PRD-047','Sandalias Ergonomicas Playa',49.00,NULL,20.00,0,0,37,1),(48,'PRD-048','Toalla Microfibra Secado Rápido',36.00,26.00,0.00,1,0,41,1),(49,'PRD-049','Paraguas Compacto Anti-Viento',42.00,NULL,0.00,0,0,28,1),(50,'PRD-050','Paño Limpieza Microfibra Lentes',0.00,NULL,0.00,0,1,180,1),(51,'PRD-051','Cámara Web Full HD 1080p',99.00,NULL,10.00,0,0,15,1),(52,'PRD-052','Hub USB 4 Puertos 3.0',45.00,32.00,0.00,1,0,36,1),(53,'PRD-053','Adaptador OTG USB a USB-C',15.00,NULL,0.00,0,0,88,1),(54,'PRD-054','Foco Inteligente WiFi RGB',39.00,NULL,25.00,0,0,44,1),(55,'PRD-055','Tira LED 5m con Control Remoto',55.00,39.00,0.00,1,0,22,1),(56,'PRD-056','Reloj de Mesa Digital Alarma',34.00,NULL,0.00,0,0,30,1),(57,'PRD-057','Balanza Digital Cocina Precisión',48.00,NULL,15.00,0,0,18,1),(58,'PRD-058','Exprimidor Manual Cítricos',26.00,18.00,0.00,1,0,25,1),(59,'PRD-059','Set Utensilios Silicona x5',52.00,NULL,0.00,0,0,20,1),(60,'PRD-060','Sachet Degustación Café Especial',0.00,NULL,0.00,0,1,160,1),(61,'PRD-061','Molino Manual Granos de Café',79.00,NULL,20.00,0,0,13,1),(62,'PRD-062','Prensa Francesa Vidrio 600ml',59.00,44.00,0.00,1,0,19,1),(63,'PRD-063','Contenedor Hermético Alimentos 1.2L',24.00,NULL,0.00,0,0,55,1),(64,'PRD-064','Tabla de Picar Bambú Mediana',31.00,NULL,10.00,0,0,34,1),(65,'PRD-065','Delantal Cocina Algodón Canvas',37.00,27.00,0.00,1,0,23,1),(66,'PRD-066','Almohada Cervical Viaje Espuma',46.00,NULL,0.00,0,0,27,1),(67,'PRD-067','Antifaz Dormir Seda Suave',19.00,NULL,30.00,0,0,50,1),(68,'PRD-068','Difusor Aromático USB Compacto',49.00,34.90,0.00,1,0,21,1),(69,'PRD-069','Aceite Esencial Lavanda 15ml',28.00,NULL,0.00,0,0,39,1),(70,'PRD-070','Vela Aromática Vainilla Soja',0.00,NULL,0.00,0,1,75,1),(71,'PRD-071','Espejo Plegable Bolsillo',16.00,NULL,15.00,0,0,62,1),(72,'PRD-072','Peine Madera Anti-Estática',21.00,14.00,0.00,1,0,47,1),(73,'PRD-073','Neceser Impermeable Organizador',35.00,NULL,0.00,0,0,32,1),(74,'PRD-074','Botiquín Portátil Vacío Pequeño',29.00,NULL,20.00,0,0,26,1),(75,'PRD-075','Linterna LED Recargable Mano',38.00,28.00,0.00,1,0,31,1),(76,'PRD-076','Candado Combinación 3 Dígitos',22.00,NULL,0.00,0,0,45,1),(77,'PRD-077','Correa Equipaje Ajustable Seguridad',25.00,NULL,10.00,0,0,38,1),(78,'PRD-078','Etiqueta Identificadora Maleta x2',14.00,9.00,0.00,1,0,65,1),(79,'PRD-079','Banda Elástica Fitness Resistencia',27.00,NULL,0.00,0,0,43,1),(80,'PRD-080','Cuerda Saltar Rodamientos Acero',33.00,NULL,25.00,0,0,29,1),(81,'PRD-081','Guantes Gimnasio Palma Acolchada',44.00,32.00,0.00,1,0,24,1),(82,'PRD-082','Shaker Mezclador Proteínas 500ml',28.00,NULL,0.00,0,0,46,1),(83,'PRD-083','Rodillera Compresión Deportiva',36.00,NULL,15.00,0,0,30,1),(84,'PRD-084','Calentador Manos Reutilizable',0.00,NULL,0.00,0,1,95,1),(85,'PRD-085','Pizarra Magnética Escritorio A4',39.00,29.00,0.00,1,0,22,1),(86,'PRD-086','Imanes Decorativos Set x6',17.00,NULL,0.00,0,0,58,1),(87,'PRD-087','Cinta Adhesiva Decorativa Washi x5',15.00,NULL,20.00,0,0,67,1),(88,'PRD-088','Estuche Cartuchera Tela Zipper',24.00,17.00,0.00,1,0,41,1),(89,'PRD-089','Separadores Carpeta A4 x8',12.00,NULL,0.00,0,0,72,1),(90,'PRD-090','Regla Metálica 30cm Acero',14.00,NULL,10.00,0,0,54,1),(91,'PRD-091','Soporte Celular Escritorio Plegable',29.00,19.90,0.00,1,0,37,1),(92,'PRD-092','Limpiador Gel Teclados y Pantallas',23.00,NULL,0.00,0,0,49,1),(93,'PRD-093','Brújula Portátil Llavero Senderismo',18.00,NULL,15.00,0,0,33,1),(94,'PRD-094','Silbato Emergencia Aluminio',11.00,7.50,0.00,1,0,60,1),(95,'PRD-095','Mosquetón Aluminio Uso General x2',16.00,NULL,0.00,0,0,77,1),(96,'PRD-096','Cinta Métrica Retráctil 3m',21.00,NULL,20.00,0,0,40,1),(97,'PRD-097','Destornillador Precisión 24 en 1',59.00,45.00,0.00,1,0,18,1),(98,'PRD-098','Organizador Cables Silicona x4',15.00,NULL,0.00,0,0,82,1),(99,'PRD-099','Funda Protectora Laptop 14 Pulgadas',34.00,NULL,10.00,0,0,26,1),(100,'PRD-100','Tarjeta de Agradecimiento + Cupón',0.00,NULL,0.00,0,1,250,1);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp(),
  `actualizado_en` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_usuarios_correo` (`correo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'negro','negro@hotmail.com','soycabro',1,'2026-11-25 22:33:23',NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ventas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codigo_venta` varchar(40) NOT NULL,
  `orden_id` int(10) unsigned DEFAULT NULL,
  `usuario_id` int(10) unsigned NOT NULL,
  `metodo_pago_id` int(10) unsigned NOT NULL,
  `tipo_venta` enum('total','parcial') NOT NULL DEFAULT 'total',
  `estado` enum('confirmada','anulada','devuelta') NOT NULL DEFAULT 'confirmada',
  `monto_vendido` decimal(10,2) NOT NULL DEFAULT 0.00,
  `comision_monto` decimal(10,2) NOT NULL DEFAULT 0.00,
  `fecha_venta` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo_venta` (`codigo_venta`),
  KEY `fk_ventas_orden` (`orden_id`),
  KEY `fk_ventas_usuario` (`usuario_id`),
  KEY `fk_ventas_metodo_pago` (`metodo_pago_id`),
  CONSTRAINT `fk_ventas_metodo_pago` FOREIGN KEY (`metodo_pago_id`) REFERENCES `metodos_pago` (`id`),
  CONSTRAINT `fk_ventas_orden` FOREIGN KEY (`orden_id`) REFERENCES `ordenes` (`id`),
  CONSTRAINT `fk_ventas_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `chk_monto_vendido` CHECK (`monto_vendido` >= 0),
  CONSTRAINT `chk_comision_monto` CHECK (`comision_monto` >= 0)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database '2026-11-25-POO'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-11-26 22:51:09
