-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.11-log - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla puntoventaplua.businesses
CREATE TABLE IF NOT EXISTS `businesses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla puntoventaplua.businesses: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `businesses` DISABLE KEYS */;
INSERT INTO `businesses` (`id`, `name`, `description`, `logo`, `email`, `address`, `ruc`, `created_at`, `updated_at`) VALUES
	(1, 'Libreria y novedades 3 hermanos', 'vente libros', '1686235608_logo_inventario-removebg-preview.png', 'lbreria@gmail.com', 'en dauelw', '094029390232', '2023-05-16 22:10:05', '2023-06-08 14:46:48');
/*!40000 ALTER TABLE `businesses` ENABLE KEYS */;

-- Volcando estructura para tabla puntoventaplua.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla puntoventaplua.categories: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Literatura infantil y juvenil', 'ncluiría libros diseñados para niños y adolescentes, como libros ilustrados, cuentos, novelas y libros de aventuras.', '2023-05-16 22:17:37', '2023-05-16 22:20:11'),
	(2, 'Ficción', 'incluiría novelas, cuentos, poesía y otras obras de ficción.  No ficción: Esta categoría incluiría libros de historia, biografías, libros de cocina, libros de arte, libros de ciencia, entre otros.', '2023-05-16 22:18:36', '2023-05-16 22:19:47'),
	(3, 'Libros de texto', 'Esta categoría incluiría libros utilizados en la educación formal, como libros de matemáticas, ciencias, idiomas, entre otros', '2023-05-16 22:18:58', '2023-05-16 22:18:58'),
	(4, 'Otros:', 'incluir libros que no encajen en las categorías anteriores, como cómics, revistas, libros de fotografía, entre otros.', '2023-05-16 22:20:41', '2023-05-16 22:20:41'),
	(5, 'Libros de referencia', 'Esta categoría incluiría diccionarios, enciclopedias, guías de viaje, entre otros.', '2023-05-16 22:21:08', '2023-05-16 22:21:08'),
	(6, 'ropa', 'ropa para niño ,adultos entre otros', '2023-06-14 12:37:11', '2023-06-14 12:37:11'),
	(7, 'útiles escolares', 'todos los utiles como ,cayon etc', '2023-06-14 12:40:13', '2023-06-14 12:40:13');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Volcando estructura para tabla puntoventaplua.clients
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clients_dni_unique` (`dni`),
  UNIQUE KEY `clients_phone_unique` (`phone`),
  UNIQUE KEY `clients_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla puntoventaplua.clients: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` (`id`, `name`, `dni`, `ruc`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
	(1, 'jonathan', '098765322', '09202930392', 'Daule por la alborada ddsdsd', '0939292323', 'admin@gmail.com', '2023-05-16 22:30:43', '2023-05-16 22:30:43'),
	(2, 'marcos', '0939383763', '09383727222', 'Daule por la alborada ddsdsd', '1234567890', 'jonathanlopez3020@hotmail.com', '2023-05-16 22:32:59', '2023-05-16 22:32:59'),
	(4, 'francisco', '0988473732', '987463622', 'Daule por la alborada edita', '9938372722', 'jose3020@gmail.com', '2023-06-08 14:51:58', '2023-06-08 14:51:58');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;

-- Volcando estructura para tabla puntoventaplua.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla puntoventaplua.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla puntoventaplua.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla puntoventaplua.migrations: ~18 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(73, '2014_10_12_000000_create_users_table', 1),
	(74, '2014_10_12_100000_create_password_resets_table', 1),
	(75, '2015_01_20_084450_create_roles_table', 1),
	(76, '2015_01_20_084525_create_role_user_table', 1),
	(77, '2015_01_24_080208_create_permissions_table', 1),
	(78, '2015_01_24_080433_create_permission_role_table', 1),
	(79, '2015_12_04_003040_add_special_role_column', 1),
	(80, '2017_10_17_170735_create_permission_user_table', 1),
	(81, '2019_08_19_000000_create_failed_jobs_table', 1),
	(82, '2023_04_07_122402_create_categories_table', 1),
	(83, '2023_04_07_131109_create_providers_table', 1),
	(84, '2023_04_07_143627_create_products_table', 1),
	(85, '2023_04_08_155734_create_clients_table', 1),
	(86, '2023_04_10_120417_create_purchases_table', 1),
	(87, '2023_04_10_120838_create_purchase_details_table', 1),
	(88, '2023_04_10_143948_create_sales_table', 1),
	(89, '2023_04_10_145127_create_sale_details_table', 1),
	(90, '2023_04_19_145801_create_businesses_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla puntoventaplua.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla puntoventaplua.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla puntoventaplua.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla puntoventaplua.permissions: ~39 rows (aproximadamente)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Navegar roles  ', 'roles.index', 'lista y navegar por la roles  del sistema', '2023-05-16 22:10:02', '2023-05-16 22:10:02'),
	(2, 'edicion  roles  ', 'roles.edit', 'editar roles  ', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(3, 'crear roles  ', 'roles.create', 'crear cualquir roles  ', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(4, 'eliminar  roles  ', 'roles.destroy', 'eliminar cualquier roles ', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(5, 'Navegar usuario ', 'users.index', 'lista y navegar por la usuario del sistema', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(6, 'edicion  usuario ', 'users.edit', 'editar usuario ', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(7, 'crear usuario ', 'users.create', 'crear cualquir usuario ', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(8, 'eliminar  usuario ', 'users.destroy', 'eliminar cualquier usuario', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(9, 'Navegar categorias ', 'categories.index', 'lista y navegar por la categogria del sistema', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(10, 'edicion  categorias ', 'categories.edit', 'editar categirias ', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(11, 'crear categorias ', 'categories.create', 'crear cualquir categirias ', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(12, 'eliminar  categorias ', 'categories.destroy', 'eliminar cualquier categoria', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(13, 'Navegar Clientes ', 'clients.index', 'lista y navegar por los clients del sistema', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(14, 'edicion  clientes ', 'clients.edit', 'editar clientes ', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(15, 'crear clientes ', 'clients.create', 'crear cualquir clientes', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(16, 'eliminar  clientes ', 'clients.destroy', 'eliminar cualquier clients', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(17, 'Navegar productos ', 'products.index', 'lista y navegar por los productos del sistema', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(18, 'edicion  productos ', 'products.edit', 'editar productos ', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(19, 'crear productos ', 'products.create', 'crear cualquir productos', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(20, 'eliminar  productos ', 'products.destroy', 'eliminar cualquier productos', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(21, 'Navegar provedores ', 'providers.index', 'lista y navegar por losprovedoress del sistema', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(22, 'edicion  provedores ', 'providers.edit', 'editar provedores ', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(23, 'crear provedores ', 'providers.create', 'crear cualquir provedores', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(24, 'eliminar  provedores ', 'providers.destroy', 'eliminar cualquier provedores', '2023-05-16 22:10:03', '2023-05-16 22:10:03'),
	(25, 'Navegar compras ', 'purchases.index', 'lista y navegar por los compras del sistema', '2023-05-16 22:10:04', '2023-05-16 22:10:04'),
	(26, 'crear compras ', 'purchases.create', 'crear cualquir compras', '2023-05-16 22:10:04', '2023-05-16 22:10:04'),
	(27, 'descargar pdf ', 'purchases.pdf', 'se prodra descargar las compras ', '2023-05-16 22:10:04', '2023-05-16 22:10:04'),
	(28, 'Navegar ventas ', 'sales.index', 'lista y navegar por los ventas del sistema', '2023-05-16 22:10:04', '2023-05-16 22:10:04'),
	(29, 'crear ventas ', 'sales.create', 'crear cualquir ventass', '2023-05-16 22:10:04', '2023-05-16 22:10:04'),
	(30, 'descargar pdf ', 'sales.pdf', 'se prodra descargar las ventas ', '2023-05-16 22:10:04', '2023-05-16 22:10:04'),
	(31, 'Navegar empresa ', 'business.index', 'lista y navegar por los empresa del sistema', '2023-05-16 22:10:04', '2023-05-16 22:10:04'),
	(32, 'edicion  empresa ', 'business.edit', 'editar empresa ', '2023-05-16 22:10:04', '2023-05-16 22:10:04'),
	(33, 'subir archivo ', 'upload.purchases', 'subir archivo de compra', '2023-05-16 22:10:04', '2023-05-16 22:10:04'),
	(34, 'estado producto ', 'change.status.products', 'cambiar estado de producto', '2023-05-16 22:10:04', '2023-05-16 22:10:04'),
	(35, 'estado compras ', 'change.status.purchases', 'cambiar estado de compras', '2023-05-16 22:10:04', '2023-05-16 22:10:04'),
	(36, 'estado ventas ', 'change.status.sales', 'cambiar estado de ventas', '2023-05-16 22:10:04', '2023-05-16 22:10:04'),
	(37, 'reporte dias  ', 'reports.day', 'reporte por dia', '2023-05-16 22:10:04', '2023-05-16 22:10:04'),
	(38, 'reporte mes  ', 'reports.date', 'reporte por mes ', '2023-05-16 22:10:04', '2023-05-16 22:10:04'),
	(39, 'reporte resultados  ', 'report.results', 'reporte resultados ', '2023-05-16 22:10:04', '2023-05-16 22:10:04');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Volcando estructura para tabla puntoventaplua.permission_role
CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla puntoventaplua.permission_role: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
	(16, 19, 3, '2023-06-14 13:17:52', '2023-06-14 13:17:52'),
	(17, 20, 3, '2023-06-14 13:17:52', '2023-06-14 13:17:52'),
	(18, 21, 3, '2023-06-14 13:17:53', '2023-06-14 13:17:53'),
	(19, 22, 3, '2023-06-14 13:17:53', '2023-06-14 13:17:53'),
	(20, 23, 3, '2023-06-14 13:17:53', '2023-06-14 13:17:53'),
	(21, 24, 3, '2023-06-14 13:17:53', '2023-06-14 13:17:53'),
	(22, 25, 3, '2023-06-14 13:17:53', '2023-06-14 13:17:53');
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;

-- Volcando estructura para tabla puntoventaplua.permission_user
CREATE TABLE IF NOT EXISTS `permission_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_user_permission_id_index` (`permission_id`),
  KEY `permission_user_user_id_index` (`user_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla puntoventaplua.permission_user: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `permission_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_user` ENABLE KEYS */;

-- Volcando estructura para tabla puntoventaplua.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sell_price` decimal(12,2) NOT NULL,
  `status` enum('ACTIVE','DEACTIVATED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `category_id` bigint(20) unsigned NOT NULL,
  `provider_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`),
  UNIQUE KEY `products_code_unique` (`code`),
  KEY `products_category_id_foreign` (`category_id`),
  KEY `products_provider_id_foreign` (`provider_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `products_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla puntoventaplua.products: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `code`, `name`, `stock`, `image`, `sell_price`, `status`, `category_id`, `provider_id`, `created_at`, `updated_at`) VALUES
	(1, '1', 'Cien años de soledad', '54', '1684276806_images.jpg', 30.00, 'ACTIVE', 2, 1, '2023-05-16 22:40:06', '2023-05-16 22:40:06'),
	(2, '2', 'Harry Potter y la piedra filosofal', '113', '1684276886_descarga (1).jpg', 23.00, 'ACTIVE', 2, 1, '2023-05-16 22:41:26', '2023-05-16 22:41:26'),
	(3, '3', 'Una breve historia del tiempo', '32', '1684276980_tienpo.jpg', 12.00, 'ACTIVE', 4, 1, '2023-05-16 22:43:00', '2023-05-16 22:43:00'),
	(4, '4', 'El principito', '43', '1684277062_prici.jpg', 23.00, 'ACTIVE', 1, 1, '2023-05-16 22:44:22', '2023-05-16 22:44:22'),
	(5, '5', 'Matemáticas 1', '44', '1684277117_mate.jpg', 12.00, 'ACTIVE', 3, 2, '2023-05-16 22:45:17', '2023-05-16 22:45:17'),
	(6, '6', 'Diccionario de la lengua española', '0', '1684277182_esoa.jpg', 12.00, 'ACTIVE', 5, 2, '2023-05-16 22:46:22', '2023-05-16 22:46:23'),
	(7, '7', '"Maus"', '0', '1684277268_maua.jpg', 12.00, 'ACTIVE', 4, 2, '2023-05-16 22:47:48', '2023-05-16 22:47:48'),
	(8, '8', 'Caja de Plastilinas', '0', '1686746517_small-colorful-handbag.png', 1.00, 'ACTIVE', 7, 2, '2023-06-14 12:41:57', '2023-06-14 12:41:57'),
	(9, '9', 'Pliego de fomix escarchado', '0', '1686746758_6216-tm_large_default.jpg', 1.00, 'ACTIVE', 7, 1, '2023-06-14 12:44:46', '2023-06-14 12:45:58'),
	(10, '10', 'Compas', '23', '1686746853_descarga (2).jpg', 1.00, 'ACTIVE', 7, 2, '2023-06-14 12:47:33', '2023-06-14 12:47:33'),
	(11, '11', 'Aceite de coco', '21', '1686747036_Aceitedecoco.jpg', 2.00, 'ACTIVE', 4, 2, '2023-06-14 12:50:36', '2023-06-14 12:50:36'),
	(12, '12', 'Cartulina A4 de colores', '0', '1686747232_Cartulina A4 de colores.jpg', 3.00, 'ACTIVE', 7, 1, '2023-06-14 12:53:52', '2023-06-14 12:53:53'),
	(13, '13', 'Barras de Silicon', '43', '1686747308_Barra-de-silicon-unidad.jpg', 2.00, 'ACTIVE', 7, 2, '2023-06-14 12:55:08', '2023-06-14 12:55:08');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Volcando estructura para tabla puntoventaplua.providers
CREATE TABLE IF NOT EXISTS `providers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruc_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aldress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `providers_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla puntoventaplua.providers: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `providers` DISABLE KEYS */;
INSERT INTO `providers` (`id`, `name`, `email`, `ruc_number`, `aldress`, `phone`, `created_at`, `updated_at`) VALUES
	(1, 'stevan', 'jonathanlopez3020@gamil.com', '1234567890', 'esto fue editado', '0939292323', '2023-05-16 22:33:34', '2023-05-16 22:33:34'),
	(2, 'sebastian', 'admin@gmail.com', '0832892382', 'como te ca', '923992392', '2023-05-16 22:36:50', '2023-05-16 22:36:50');
/*!40000 ALTER TABLE `providers` ENABLE KEYS */;

-- Volcando estructura para tabla puntoventaplua.purchases
CREATE TABLE IF NOT EXISTS `purchases` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `provider_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `purchase_date` datetime NOT NULL,
  `tax` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `status` enum('VALID','CANCELED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'VALID',
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `purchases_provider_id_foreign` (`provider_id`),
  KEY `purchases_user_id_foreign` (`user_id`),
  CONSTRAINT `purchases_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`),
  CONSTRAINT `purchases_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla puntoventaplua.purchases: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `purchases` DISABLE KEYS */;
INSERT INTO `purchases` (`id`, `provider_id`, `user_id`, `purchase_date`, `tax`, `total`, `status`, `picture`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, '2023-05-16 18:06:42', 1.00, 513.08, 'VALID', NULL, '2023-05-16 23:06:42', '2023-05-16 23:06:42'),
	(2, 1, 1, '2023-05-16 18:24:15', 23.00, 664.20, 'VALID', NULL, '2023-05-16 23:24:15', '2023-05-16 23:24:15'),
	(3, 2, 1, '2023-05-16 18:48:26', 2.00, 2660.16, 'VALID', NULL, '2023-05-16 23:48:26', '2023-05-16 23:48:26'),
	(4, 2, 1, '2023-06-14 07:57:54', 2.00, 209.10, 'VALID', NULL, '2023-06-14 12:57:54', '2023-06-14 12:57:54');
/*!40000 ALTER TABLE `purchases` ENABLE KEYS */;

-- Volcando estructura para tabla puntoventaplua.purchase_details
CREATE TABLE IF NOT EXISTS `purchase_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `purchase_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `purchase_details_purchase_id_foreign` (`purchase_id`),
  KEY `purchase_details_product_id_foreign` (`product_id`),
  CONSTRAINT `purchase_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  CONSTRAINT `purchase_details_purchase_id_foreign` FOREIGN KEY (`purchase_id`) REFERENCES `purchases` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla puntoventaplua.purchase_details: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `purchase_details` DISABLE KEYS */;
INSERT INTO `purchase_details` (`id`, `purchase_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
	(1, 1, 2, 23, 2.00, '2023-05-16 23:06:42', '2023-05-16 23:06:42'),
	(2, 1, 3, 43, 7.00, '2023-05-16 23:06:42', '2023-05-16 23:06:42'),
	(3, 1, 3, 23, 7.00, '2023-05-16 23:06:42', '2023-05-16 23:06:42'),
	(4, 2, 2, 45, 12.00, '2023-05-16 23:24:15', '2023-05-16 23:24:15'),
	(5, 3, 1, 55, 12.00, '2023-05-16 23:48:26', '2023-05-16 23:48:26'),
	(6, 3, 2, 67, 12.00, '2023-05-16 23:48:26', '2023-05-16 23:48:26'),
	(7, 3, 3, 34, 12.00, '2023-05-16 23:48:26', '2023-05-16 23:48:26'),
	(8, 3, 4, 43, 12.00, '2023-05-16 23:48:26', '2023-05-16 23:48:26'),
	(9, 3, 5, 44, 5.00, '2023-05-16 23:48:26', '2023-05-16 23:48:26'),
	(10, 4, 13, 45, 2.00, '2023-06-14 12:57:55', '2023-06-14 12:57:55'),
	(11, 4, 11, 23, 4.00, '2023-06-14 12:57:55', '2023-06-14 12:57:55'),
	(12, 4, 10, 23, 1.00, '2023-06-14 12:57:55', '2023-06-14 12:57:55');
/*!40000 ALTER TABLE `purchase_details` ENABLE KEYS */;

-- Volcando estructura para tabla puntoventaplua.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `special` enum('all-access','no-access') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla puntoventaplua.roles: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`, `special`) VALUES
	(1, 'Admin', 'admin', NULL, '2023-05-16 22:10:04', '2023-05-16 22:10:04', 'all-access'),
	(3, 'vendedor', 'vendedor', 'vende nomas', '2023-06-14 13:17:52', '2023-06-14 13:17:52', NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla puntoventaplua.role_user
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_index` (`role_id`),
  KEY `role_user_user_id_index` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla puntoventaplua.role_user: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2023-05-16 22:10:04', '2023-05-16 22:10:04'),
	(3, 3, 2, '2023-06-14 13:18:18', '2023-06-14 13:18:18');
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;

-- Volcando estructura para tabla puntoventaplua.sales
CREATE TABLE IF NOT EXISTS `sales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `sale_date` datetime NOT NULL,
  `tax` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `status` enum('VALID','CANCELED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'VALID',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sales_client_id_foreign` (`client_id`),
  KEY `sales_user_id_foreign` (`user_id`),
  CONSTRAINT `sales_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  CONSTRAINT `sales_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla puntoventaplua.sales: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
INSERT INTO `sales` (`id`, `client_id`, `user_id`, `sale_date`, `tax`, `total`, `status`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, '2023-05-16 18:25:11', 2.00, 68.27, 'VALID', '2023-05-16 23:25:11', '2023-05-16 23:50:01'),
	(2, 2, 1, '2023-05-16 18:51:51', 2.00, 76.44, 'VALID', '2023-05-16 23:51:51', '2023-05-16 23:51:51'),
	(3, 1, 1, '2023-05-17 18:47:19', 2.00, 23.52, 'VALID', '2023-05-17 23:47:19', '2023-05-17 23:47:19'),
	(4, 2, 1, '2023-06-14 08:06:52', 2.00, 8.08, 'VALID', '2023-06-14 13:06:52', '2023-06-14 13:06:52');
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;

-- Volcando estructura para tabla puntoventaplua.sale_details
CREATE TABLE IF NOT EXISTS `sale_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sale_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sale_details_sale_id_foreign` (`sale_id`),
  KEY `sale_details_product_id_foreign` (`product_id`),
  CONSTRAINT `sale_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  CONSTRAINT `sale_details_sale_id_foreign` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla puntoventaplua.sale_details: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `sale_details` DISABLE KEYS */;
INSERT INTO `sale_details` (`id`, `sale_id`, `product_id`, `quantity`, `price`, `discount`, `created_at`, `updated_at`) VALUES
	(1, 1, 2, 3, 23.00, 3.00, '2023-05-16 23:25:11', '2023-05-16 23:25:11'),
	(2, 2, 1, 1, 30.00, 2.00, '2023-05-16 23:51:52', '2023-05-16 23:51:52'),
	(3, 2, 2, 2, 23.00, 1.00, '2023-05-16 23:51:52', '2023-05-16 23:51:52'),
	(4, 3, 3, 2, 12.00, 2.00, '2023-05-17 23:47:20', '2023-05-17 23:47:20'),
	(5, 4, 13, 2, 2.00, 2.00, '2023-06-14 13:06:52', '2023-06-14 13:06:52'),
	(6, 4, 11, 2, 2.00, 0.00, '2023-06-14 13:06:52', '2023-06-14 13:06:52');
/*!40000 ALTER TABLE `sale_details` ENABLE KEYS */;

-- Volcando estructura para tabla puntoventaplua.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla puntoventaplua.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'jonathan', 'jonathanlopez3020@gmail.com', NULL, '$2y$10$7wRp8c9UZ49.E4pSbjlWq.c3XS/2xMMoe2wUMcyPapOHRcLSV7P1S', NULL, '2023-05-16 22:10:04', '2023-05-16 22:10:04'),
	(2, 'marcos', 'admin@gmail.com', NULL, '$2y$10$aqvS9gNPyf82LrbuvWrc.uByY3vWoliQLtQVQRAMuh5p8Boax5Wpy', NULL, '2023-06-14 13:14:54', '2023-06-14 13:18:18');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para disparador puntoventaplua.tr_updStockCompra
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `tr_updStockCompra` AFTER INSERT ON `purchase_details`
FOR EACH ROW BEGIN 
UPDATE products SET stock =stock + NEW.quantity 
WHERE products.id = NEW.product_id;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador puntoventaplua.tr_updStockCompraAnular
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `tr_updStockCompraAnular` AFTER UPDATE ON `purchases`
FOR EACH ROW BEGIN 
UPDATE products p JOIN purchase_details di
ON di.product_id = p.id AND di.purchase_id= new.id
SET p.stock = p.stock - di.quantity;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador puntoventaplua.tr_updStockVenta
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `tr_updStockVenta` AFTER INSERT ON `sale_details`
FOR EACH ROW BEGIN 
UPDATE products SET stock =stock - NEW.quantity 
WHERE products.id = NEW.product_id;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador puntoventaplua.tr_updStockVentaAnular
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER tr_updStockVentaAnular AFTER UPDATE ON sales
FOR EACH ROW BEGIN 
UPDATE products p 
JOIN sale_details dv
ON dv.product_id = p.id AND dv.sale_id= new.id
SET p.stock = p.stock +dv.quantity;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
