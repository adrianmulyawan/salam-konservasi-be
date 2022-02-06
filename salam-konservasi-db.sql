-- Adminer 4.8.1 MySQL 5.7.33 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

USE `salam-konservasi`;

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `conservation_areas`;
CREATE TABLE `conservation_areas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_open` tinyint(1) NOT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_homestay` tinyint(1) NOT NULL,
  `is_resto` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `conservation_areas_user_id_foreign` (`user_id`),
  CONSTRAINT `conservation_areas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `conservation_areas` (`id`, `user_id`, `name`, `slug`, `location`, `area`, `description`, `is_open`, `map`, `is_homestay`, `is_resto`, `created_at`, `updated_at`) VALUES
(7,	1,	'KKPD Pulau Randayan',	'kkpd-pulau-randayan',	'Kab Bengkayang',	'15300 Km2',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus et malesuada fames ac. Tortor id aliquet lectus proin nibh nisl. Bibendum arcu vitae elementum curabitur. Fames ac turpis egestas sed tempus urna et pharetra. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare. Eu turpis egestas pretium aenean pharetra magna. Nisi quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Netus et malesuada fames ac turpis egestas integer eget aliquet. Mi proin sed libero enim sed faucibus turpis. Magna eget est lorem ipsum dolor sit amet consectetur adipiscing. Non quam lacus suspendisse faucibus. Vitae tortor condimentum lacinia quis vel eros donec ac.</p>',	1,	'assets/map/Q8mwRdtBvmEmNYYPxUUTdncBzdhul9kO2FQy3i12.jpg',	1,	1,	'2022-01-05 23:28:20',	'2022-02-03 00:02:36'),
(8,	1,	'KKPD Kendawangan',	'kkpd-kendawangan',	'Kab Kayong Utara',	'25000 Km2',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus et malesuada fames ac. Tortor id aliquet lectus proin nibh nisl. Bibendum arcu vitae elementum curabitur. Fames ac turpis egestas sed tempus urna et pharetra. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare. Eu turpis egestas pretium aenean pharetra magna. Nisi quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Netus et malesuada fames ac turpis egestas integer eget aliquet. Mi proin sed libero enim sed faucibus turpis. Magna eget est lorem ipsum dolor sit amet consectetur adipiscing. Non quam lacus suspendisse faucibus. Vitae tortor condimentum lacinia quis vel eros donec ac.</p>',	1,	'assets/map/02P6OnOl3C6mMuOJnLzdKbGFFujdTCIU9150aScF.jpg',	1,	1,	'2022-01-05 23:32:55',	'2022-01-05 23:32:55'),
(9,	1,	'KKPD Paloh',	'kkpd-paloh',	'Kab Sambas',	'25000 Km2',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus et malesuada fames ac. Tortor id aliquet lectus proin nibh nisl. Bibendum arcu vitae elementum curabitur. Fames ac turpis egestas sed tempus urna et pharetra. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare. Eu turpis egestas pretium aenean pharetra magna. Nisi quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Netus et malesuada fames ac turpis egestas integer eget aliquet. Mi proin sed libero enim sed faucibus turpis. Magna eget est lorem ipsum dolor sit amet consectetur adipiscing. Non quam lacus suspendisse faucibus. Vitae tortor condimentum lacinia quis vel eros donec ac.</p>',	1,	'assets/map/uPJWRqBi3nUdw7prEZ5Gq8Nav4DMpKIA1VhORHrg.jpg',	1,	1,	'2022-01-05 23:38:06',	'2022-01-05 23:38:06'),
(10,	1,	'KKPD Kubu Raya',	'kkpd-kubu-raya',	'Kab Kubu Raya',	'15300 Km2',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Curabitur gravida arcu ac tortor dignissim convallis aenean. Aliquam purus sit amet luctus. Dignissim diam quis enim lobortis. Nulla facilisi etiam dignissim diam quis enim. Tempus iaculis urna id volutpat lacus. Phasellus faucibus scelerisque eleifend donec pretium vulputate. Elit at imperdiet dui accumsan. Sit amet volutpat consequat mauris. Egestas maecenas pharetra convallis posuere morbi leo urna. Ullamcorper velit sed ullamcorper morbi tincidunt ornare. Sed tempus urna et pharetra pharetra. Metus aliquam eleifend mi in nulla. Elit ullamcorper dignissim cras tincidunt. Eget nullam non nisi est sit amet facilisis magna. Eget sit amet tellus cras.</p>\r\n\r\n<p>Iaculis nunc sed augue lacus viverra vitae congue eu. Mauris augue neque gravida in fermentum et sollicitudin ac. Nisi porta lorem mollis aliquam ut porttitor. Phasellus vestibulum lorem sed risus ultricies. Enim ut sem viverra aliquet eget sit. Dolor sit amet consectetur adipiscing elit duis tristique. Est lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque. Condimentum mattis pellentesque id nibh. Lacus vestibulum sed arcu non odio euismod lacinia. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate. Pellentesque massa placerat duis ultricies. Mi sit amet mauris commodo. Sed id semper risus in hendrerit gravida rutrum. Vitae suscipit tellus mauris a diam maecenas sed. Enim sit amet venenatis urna cursus eget nunc scelerisque. Viverra vitae congue eu consequat ac. Amet volutpat consequat mauris nunc. Lectus vestibulum mattis ullamcorper velit. Ultricies tristique nulla aliquet enim tortor at auctor.</p>',	1,	'assets/map/vuc1NhiE6g07CrzNqMzj2pcllAFFpljpEu7fLGTs.jpg',	0,	1,	'2022-01-11 02:04:34',	'2022-01-11 02:04:34'),
(11,	1,	'KKPD Ketapang',	'kkpd-ketapang',	'Kab Ketapang',	'25000 Km2',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Curabitur gravida arcu ac tortor dignissim convallis aenean. Aliquam purus sit amet luctus. Dignissim diam quis enim lobortis. Nulla facilisi etiam dignissim diam quis enim. Tempus iaculis urna id volutpat lacus. Phasellus faucibus scelerisque eleifend donec pretium vulputate. Elit at imperdiet dui accumsan. Sit amet volutpat consequat mauris. Egestas maecenas pharetra convallis posuere morbi leo urna. Ullamcorper velit sed ullamcorper morbi tincidunt ornare. Sed tempus urna et pharetra pharetra. Metus aliquam eleifend mi in nulla. Elit ullamcorper dignissim cras tincidunt. Eget nullam non nisi est sit amet facilisis magna. Eget sit amet tellus cras.</p>\r\n\r\n<p>Iaculis nunc sed augue lacus viverra vitae congue eu. Mauris augue neque gravida in fermentum et sollicitudin ac. Nisi porta lorem mollis aliquam ut porttitor. Phasellus vestibulum lorem sed risus ultricies. Enim ut sem viverra aliquet eget sit. Dolor sit amet consectetur adipiscing elit duis tristique. Est lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque. Condimentum mattis pellentesque id nibh. Lacus vestibulum sed arcu non odio euismod lacinia. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate. Pellentesque massa placerat duis ultricies. Mi sit amet mauris commodo. Sed id semper risus in hendrerit gravida rutrum. Vitae suscipit tellus mauris a diam maecenas sed. Enim sit amet venenatis urna cursus eget nunc scelerisque. Viverra vitae congue eu consequat ac. Amet volutpat consequat mauris nunc. Lectus vestibulum mattis ullamcorper velit. Ultricies tristique nulla aliquet enim tortor at auctor.</p>',	1,	'assets/map/j5zgJ17clbdfV0rKpZ0xI2c2oScwn2d2SRztW32Q.jpg',	1,	1,	'2022-01-11 02:05:14',	'2022-01-11 02:05:14')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `user_id` = VALUES(`user_id`), `name` = VALUES(`name`), `slug` = VALUES(`slug`), `location` = VALUES(`location`), `area` = VALUES(`area`), `description` = VALUES(`description`), `is_open` = VALUES(`is_open`), `map` = VALUES(`map`), `is_homestay` = VALUES(`is_homestay`), `is_resto` = VALUES(`is_resto`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `conservation_area_galleries`;
CREATE TABLE `conservation_area_galleries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `conservation_area_id` bigint(20) unsigned NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `conservation_area_galleries_conservation_area_id_foreign` (`conservation_area_id`),
  CONSTRAINT `conservation_area_galleries_conservation_area_id_foreign` FOREIGN KEY (`conservation_area_id`) REFERENCES `conservation_areas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `conservation_area_galleries` (`id`, `conservation_area_id`, `photo`, `created_at`, `updated_at`) VALUES
(3,	9,	'assets/conservation_gallery/377uRu7NfrPtIBnObtj8rCXrg0OE6tQ0eaodXfnM.jpg',	'2022-01-06 00:25:38',	'2022-01-11 02:10:01'),
(4,	9,	'assets/conservation_gallery/0xZ6QVNwvsDDQbNtPh7LZVtUv4OuJ4amVSMHIQiw.jpg',	'2022-01-06 01:30:04',	'2022-01-06 01:30:04'),
(5,	9,	'assets/conservation_gallery/ZshcASEZi3yRI5wJ9LV4fSJ2jCUjMUh60UNvlWtY.jpg',	'2022-01-06 01:30:19',	'2022-01-06 01:30:19'),
(6,	9,	'assets/conservation_gallery/QxtMcx6EpkKVAHLmd564NwmODKQBzUsYQ00Y7iiS.webp',	'2022-01-06 01:30:38',	'2022-01-06 01:30:38'),
(7,	9,	'assets/conservation_gallery/6TOXTEkHcJHGwZYr7IvnbmLgrRhbIkV6U54CYA1S.jpg',	'2022-01-06 01:30:54',	'2022-01-06 01:30:54'),
(8,	7,	'assets/conservation_gallery/LEmY8P0bewGFovqJMcxYuWGwhQsgejj8kpKX6tP9.webp',	'2022-01-11 02:06:25',	'2022-01-11 02:06:25'),
(9,	7,	'assets/conservation_gallery/GRUqcI3cWIIVtteeqXHRwXKb6MeUL1ClWnvZuFvs.jpg',	'2022-01-11 02:06:41',	'2022-01-11 02:06:41'),
(10,	7,	'assets/conservation_gallery/LWejBPuIBkIJht32BnhYnTjkY3QvbwtlvfTJL6aw.jpg',	'2022-01-11 02:06:58',	'2022-01-11 02:06:58'),
(11,	7,	'assets/conservation_gallery/hrgIJSBjqQWxPdg1DCzgPG8iagW4vk7kt1bDMXdo.jpg',	'2022-01-11 02:07:19',	'2022-01-11 02:07:19'),
(12,	7,	'assets/conservation_gallery/B7Ud9WGkVPMKMMds3IWuEqYKALMcn30aWiKcDNtm.jpg',	'2022-01-11 02:07:41',	'2022-01-11 02:07:41'),
(13,	8,	'assets/conservation_gallery/DJzQL2BiWEjHR0XilLvtwbdQ57tKYblpt3Dcrn7c.jpg',	'2022-01-11 02:08:03',	'2022-01-11 02:08:03'),
(14,	8,	'assets/conservation_gallery/Wii55p2KBMpA2ibWecnRIdr22eY6bkFemBFpGRRE.jpg',	'2022-01-11 02:08:18',	'2022-01-11 02:08:18'),
(15,	8,	'assets/conservation_gallery/SzQgvlVYNZGuDMCNmm2dDPyyvzHutmq6GlofaX5v.jpg',	'2022-01-11 02:08:45',	'2022-01-11 02:08:45'),
(16,	8,	'assets/conservation_gallery/rfZBJkicA74pWIYHxgn9xbTeHUEcI3P6N4V8sIzd.jpg',	'2022-01-11 02:09:12',	'2022-01-11 02:09:12'),
(17,	8,	'assets/conservation_gallery/ELMpZpGx9er5IE4apv4dMcOgq9alLOvFWHwBt95O.jpg',	'2022-01-11 02:09:39',	'2022-01-11 02:09:39'),
(18,	10,	'assets/conservation_gallery/5v1qg0g5oXEgqfJgcDFXzwQ49xwfTPKR3dk0j2cJ.jpg',	'2022-01-11 02:10:26',	'2022-01-11 02:10:26'),
(19,	10,	'assets/conservation_gallery/A18Yoanb3dx698YDUAd6gQCqVgXIOWmpum1wRxag.jpg',	'2022-01-11 02:10:41',	'2022-01-11 02:11:13'),
(20,	10,	'assets/conservation_gallery/Ap4Ivlz4hePG8vFJyOY75A9BY4oMLq9sckHGXvYB.jpg',	'2022-01-11 02:10:54',	'2022-01-11 02:10:54'),
(21,	10,	'assets/conservation_gallery/NfSJGPluXZjGFdWPznoloR2GvuBmzFkst6TCU1ND.jpg',	'2022-01-11 02:30:28',	'2022-01-11 02:30:28'),
(22,	10,	'assets/conservation_gallery/Wnb9kAKqDPg7MYxWIKa6qWzaS5yPw9dGUIs7RXVE.jpg',	'2022-01-11 02:30:47',	'2022-01-11 02:30:47'),
(23,	11,	'assets/conservation_gallery/p1t41hn5PjIUa4VFCEByUAuGJEyCTbzBo5OXTOxM.jpg',	'2022-01-11 02:31:18',	'2022-01-11 02:31:18'),
(24,	11,	'assets/conservation_gallery/5JWcDtUxeFd8vo65m5xXAWxuabcTOtREbhsXDQwi.jpg',	'2022-01-11 02:31:33',	'2022-01-11 02:31:33'),
(25,	11,	'assets/conservation_gallery/2qPU5moKGhzNnvmOPUmKiSfBPWmfVyA5Ale6WTym.jpg',	'2022-01-11 02:31:43',	'2022-01-11 02:31:43'),
(26,	11,	'assets/conservation_gallery/pZGtLxtOQ0YE11sQX0lp7m4MYLD850QAHzfDXW1n.jpg',	'2022-01-11 02:31:53',	'2022-01-11 02:31:53'),
(27,	11,	'assets/conservation_gallery/4P8fIU1aJN8jQIkJ5XqoTyG8OShhiHfAeSPevXVH.jpg',	'2022-01-11 02:32:03',	'2022-01-11 02:32:03')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `conservation_area_id` = VALUES(`conservation_area_id`), `photo` = VALUES(`photo`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `equipments`;
CREATE TABLE `equipments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `equipment_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipment_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `equipments` (`id`, `equipment_name`, `slug`, `equipment_price`, `created_at`, `updated_at`) VALUES
(1,	'SCUBA Set',	'scuba-set',	15000,	'2022-01-04 06:22:35',	'2022-01-11 08:07:21'),
(2,	'Peralatan Selancar',	'peralatan-selancar',	10000,	'2022-01-04 06:22:49',	'2022-01-11 08:07:44'),
(3,	'Kamera Bawah Air',	'kamera-bawah-air',	20000,	'2022-01-04 06:23:02',	'2022-01-11 08:08:03'),
(4,	'Video Bawah Air',	'video-bawah-air',	35000,	'2022-01-04 06:23:19',	'2022-01-11 08:08:26'),
(5,	'Kapal Pesiar',	'kapal-pesiar',	15000000,	'2022-01-04 06:23:35',	'2022-01-11 08:06:51')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `equipment_name` = VALUES(`equipment_name`), `slug` = VALUES(`slug`), `equipment_price` = VALUES(`equipment_price`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `conservation_area_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `events_user_id_foreign` (`user_id`),
  KEY `events_conservation_area_id_foreign` (`conservation_area_id`),
  CONSTRAINT `events_conservation_area_id_foreign` FOREIGN KEY (`conservation_area_id`) REFERENCES `conservation_areas` (`id`),
  CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `events` (`id`, `user_id`, `conservation_area_id`, `title`, `slug`, `event_date`, `photo`, `event_content`, `created_at`, `updated_at`) VALUES
(1,	1,	9,	'Pelepasan bibit penyu bersama fitri tukik',	'pelepasan-bibit-penyu-bersama-fitri-tukik',	'2022-01-19',	'assets/event/v2xFKyg1aqMb9LMtTEKxsahCYilTtfy9kPGmMNav.jpg',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum nisi quis eleifend quam. Faucibus purus in massa tempor nec feugiat nisl pretium. Elementum pulvinar etiam non quam. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Quam id leo in vitae turpis massa sed elementum tempus. Diam quis enim lobortis scelerisque. Tortor condimentum lacinia quis vel eros. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla facilisi. Id aliquet risus feugiat in ante metus dictum. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. Adipiscing elit pellentesque habitant morbi tristique senectus et netus et. Nisl condimentum id venenatis a condimentum. Orci ac auctor augue mauris augue. Convallis tellus id interdum velit. Urna neque viverra justo nec ultrices dui sapien. Diam vel quam elementum pulvinar etiam non quam lacus. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Blandit massa enim nec dui nunc mattis enim ut. Faucibus in ornare quam viverra orci sagittis eu. Viverra adipiscing at in tellus integer feugiat scelerisque varius morbi. Elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Integer malesuada nunc vel risus commodo. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Dictum non consectetur a erat. Odio euismod lacinia at quis risus sed vulputate odio. Malesuada fames ac turpis egestas maecenas pharetra. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Diam maecenas sed enim ut. Eget nullam non nisi est sit.</p>',	'2022-01-07 06:31:45',	'2022-01-07 10:37:47'),
(2,	1,	7,	'Sail Pulau Lemukutan',	'sail-pulau-lemukutan',	'2022-02-01',	'assets/event/Tdzjp8FeWcTe0gjpKQoxZvoS7wWvlITlBIJ7ardV.jpg',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum nisi quis eleifend quam. Faucibus purus in massa tempor nec feugiat nisl pretium. Elementum pulvinar etiam non quam. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Quam id leo in vitae turpis massa sed elementum tempus. Diam quis enim lobortis scelerisque. Tortor condimentum lacinia quis vel eros. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla facilisi. Id aliquet risus feugiat in ante metus dictum. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. Adipiscing elit pellentesque habitant morbi tristique senectus et netus et. Nisl condimentum id venenatis a condimentum. Orci ac auctor augue mauris augue. Convallis tellus id interdum velit. Urna neque viverra justo nec ultrices dui sapien. Diam vel quam elementum pulvinar etiam non quam lacus. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Blandit massa enim nec dui nunc mattis enim ut. Faucibus in ornare quam viverra orci sagittis eu. Viverra adipiscing at in tellus integer feugiat scelerisque varius morbi. Elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Integer malesuada nunc vel risus commodo. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Dictum non consectetur a erat. Odio euismod lacinia at quis risus sed vulputate odio. Malesuada fames ac turpis egestas maecenas pharetra. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Diam maecenas sed enim ut. Eget nullam non nisi est sit.</p>',	'2022-01-07 09:21:45',	'2022-01-07 09:21:45'),
(3,	1,	9,	'Bersih Pantai Paloh',	'bersih-pantai-paloh',	'2022-05-13',	'assets/event/teLVhyVexnMNYRKKZB6wadWSxB2LpnazXCqmEzDi.jpg',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum nisi quis eleifend quam. Faucibus purus in massa tempor nec feugiat nisl pretium. Elementum pulvinar etiam non quam. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Quam id leo in vitae turpis massa sed elementum tempus. Diam quis enim lobortis scelerisque. Tortor condimentum lacinia quis vel eros. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla facilisi. Id aliquet risus feugiat in ante metus dictum. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. Adipiscing elit pellentesque habitant morbi tristique senectus et netus et. Nisl condimentum id venenatis a condimentum. Orci ac auctor augue mauris augue. Convallis tellus id interdum velit. Urna neque viverra justo nec ultrices dui sapien. Diam vel quam elementum pulvinar etiam non quam lacus. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Blandit massa enim nec dui nunc mattis enim ut. Faucibus in ornare quam viverra orci sagittis eu. Viverra adipiscing at in tellus integer feugiat scelerisque varius morbi. Elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Integer malesuada nunc vel risus commodo. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Dictum non consectetur a erat. Odio euismod lacinia at quis risus sed vulputate odio. Malesuada fames ac turpis egestas maecenas pharetra. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Diam maecenas sed enim ut. Eget nullam non nisi est sit.</p>',	'2022-01-07 09:23:22',	'2022-01-07 09:23:22'),
(4,	1,	7,	'Pesta Adat Pulau Lemukutan',	'pesta-adat-pulau-lemukutan',	'2022-05-20',	'assets/event/kUPkXm4xqhck9GjYPhKXrxIy87xa3IdlRvlSJGE4.jpg',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum nisi quis eleifend quam. Faucibus purus in massa tempor nec feugiat nisl pretium. Elementum pulvinar etiam non quam. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Quam id leo in vitae turpis massa sed elementum tempus. Diam quis enim lobortis scelerisque. Tortor condimentum lacinia quis vel eros. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla facilisi. Id aliquet risus feugiat in ante metus dictum. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. Adipiscing elit pellentesque habitant morbi tristique senectus et netus et. Nisl condimentum id venenatis a condimentum. Orci ac auctor augue mauris augue. Convallis tellus id interdum velit. Urna neque viverra justo nec ultrices dui sapien. Diam vel quam elementum pulvinar etiam non quam lacus. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Blandit massa enim nec dui nunc mattis enim ut. Faucibus in ornare quam viverra orci sagittis eu. Viverra adipiscing at in tellus integer feugiat scelerisque varius morbi. Elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Integer malesuada nunc vel risus commodo. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Dictum non consectetur a erat. Odio euismod lacinia at quis risus sed vulputate odio. Malesuada fames ac turpis egestas maecenas pharetra. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Diam maecenas sed enim ut. Eget nullam non nisi est sit.</p>',	'2022-01-07 09:23:58',	'2022-01-07 09:23:58'),
(6,	1,	9,	'Penanaman 1000 Bibit Bakau Bersama Gubernur Kalimantan Barat',	'penanaman-1000-bibit-bakau-bersama-gubernur-kalimantan-barat',	'2022-02-28',	'assets/event/JqqmXO2lV280LW1RGbKim8OkmplwXOkrBtqv8tJr.jpg',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum nisi quis eleifend quam. Faucibus purus in massa tempor nec feugiat nisl pretium. Elementum pulvinar etiam non quam. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Quam id leo in vitae turpis massa sed elementum tempus. Diam quis enim lobortis scelerisque. Tortor condimentum lacinia quis vel eros. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla facilisi. Id aliquet risus feugiat in ante metus dictum. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. Adipiscing elit pellentesque habitant morbi tristique senectus et netus et. Nisl condimentum id venenatis a condimentum. Orci ac auctor augue mauris augue. Convallis tellus id interdum velit. Urna neque viverra justo nec ultrices dui sapien. Diam vel quam elementum pulvinar etiam non quam lacus. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Blandit massa enim nec dui nunc mattis enim ut. Faucibus in ornare quam viverra orci sagittis eu. Viverra adipiscing at in tellus integer feugiat scelerisque varius morbi. Elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Integer malesuada nunc vel risus commodo. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Dictum non consectetur a erat. Odio euismod lacinia at quis risus sed vulputate odio. Malesuada fames ac turpis egestas maecenas pharetra. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Diam maecenas sed enim ut. Eget nullam non nisi est sit.</p>',	'2022-01-07 09:32:42',	'2022-01-07 09:32:42')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `user_id` = VALUES(`user_id`), `conservation_area_id` = VALUES(`conservation_area_id`), `title` = VALUES(`title`), `slug` = VALUES(`slug`), `event_date` = VALUES(`event_date`), `photo` = VALUES(`photo`), `event_content` = VALUES(`event_content`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `forms`;
CREATE TABLE `forms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `forms` (`id`, `created_at`, `updated_at`, `name`, `email`, `phone_number`, `form_title`, `form_content`) VALUES
(1,	'2022-01-12 03:19:46',	'2022-01-12 03:19:46',	'Kevin Jordan',	'kevjord@gmail.com',	'081257099067',	'Banyak Pungli di Kawasan Konservasi Paloh',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut porttitor leo a diam. A scelerisque purus semper eget duis at. Est lorem ipsum dolor sit amet consectetur adipiscing elit.'),
(2,	'2022-01-12 03:22:39',	'2022-01-12 03:22:39',	'Sintra Fitrianty',	'sintrafitrianty@gmail.com',	'082813141516',	'Tidak tersedia toilet dikawasan pulau randayan',	'Pada saat saya pergi kepulau randayan masih belum banyak terdapat toilet adapun toilet tersebut kotor dan bau'),
(3,	'2022-01-12 04:01:27',	'2022-01-12 04:01:27',	'Danilla Riyadi',	'danilaariyadi@gmail.com',	'089640001855',	'Sistem Tidak Bisa Diakses',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut porttitor leo a diam. A scelerisque purus semper eget duis at. Est lorem ipsum dolor sit amet consectetur adipiscing elit.'),
(4,	'2022-01-14 03:37:56',	'2022-01-14 03:37:56',	'Hakaman',	'hakaman99@gmail.com',	'082154590559',	'bocor e',	'bocor')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`), `name` = VALUES(`name`), `email` = VALUES(`email`), `phone_number` = VALUES(`phone_number`), `form_title` = VALUES(`form_title`), `form_content` = VALUES(`form_content`);

DROP TABLE IF EXISTS `master_prices`;
CREATE TABLE `master_prices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `purpose_id` bigint(20) unsigned NOT NULL,
  `citizen` enum('WNI','WNA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `master_prices_purpose_id_foreign` (`purpose_id`),
  CONSTRAINT `master_prices_purpose_id_foreign` FOREIGN KEY (`purpose_id`) REFERENCES `purposes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `master_prices` (`id`, `purpose_id`, `citizen`, `price`, `created_at`, `updated_at`) VALUES
(1,	1,	'WNI',	10000,	'2022-01-04 06:18:41',	'2022-01-04 06:18:41'),
(2,	1,	'WNA',	100000,	'2022-01-04 06:19:19',	'2022-01-04 06:19:19'),
(3,	2,	'WNI',	20000,	'2022-01-04 06:19:33',	'2022-01-04 06:19:33'),
(4,	2,	'WNA',	200000,	'2022-01-04 06:19:47',	'2022-01-04 06:19:47'),
(5,	3,	'WNI',	15000,	'2022-01-04 06:20:00',	'2022-01-04 06:20:00'),
(6,	3,	'WNA',	150000,	'2022-01-04 06:20:11',	'2022-01-04 06:20:11')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `purpose_id` = VALUES(`purpose_id`), `citizen` = VALUES(`citizen`), `price` = VALUES(`price`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(5,	'2022_01_01_173447_create_purposes_table',	1),
(6,	'2022_01_01_173553_create_master_prices_table',	1),
(7,	'2022_01_01_173804_create_conservation_areas_table',	1),
(8,	'2022_01_02_061821_create_conservation_area_galleries_table',	1),
(9,	'2022_01_02_062943_create_forms_table',	1),
(10,	'2022_01_02_063754_create_equipments_table',	1),
(11,	'2022_01_02_063856_create_transactions_table',	1),
(12,	'2022_01_02_065528_create_transaction_details_table',	1),
(13,	'2022_01_02_070521_create_transaction_equipment_details_table',	1),
(14,	'2022_01_02_070945_create_visitor_controls_table',	1),
(15,	'2022_01_02_110111_create_news_table',	1),
(16,	'2022_01_02_110204_create_events_table',	1),
(17,	'2022_01_02_123030_add_area_to_conservation_areas_table',	1),
(18,	'2022_01_03_070118_add_slug_field_to_purposes_table',	1),
(19,	'2022_01_03_094605_add_slug_field_to_equipments_table',	1),
(20,	'2022_01_03_122615_add_price_field_to_master_prices_table',	1),
(21,	'2022_01_03_130516_add_foreign_key_purpose_id_field_to_master_prices_table',	1),
(22,	'2022_01_14_160451_add_equipment_total_field_to_transaction_equipment_details_table',	2),
(23,	'2022_01_18_105416_add_soft_delete_field_to_transaction_table',	3),
(24,	'2022_01_18_111038_add_soft_delete_field_to_transaction_details_table',	4),
(25,	'2022_01_18_112426_add_soft_delete_field_to_transaction_equipment_details_table',	5)
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `migration` = VALUES(`migration`), `batch` = VALUES(`batch`);

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_user_id_foreign` (`user_id`),
  CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `news` (`id`, `user_id`, `title`, `slug`, `photo`, `news_content`, `created_at`, `updated_at`) VALUES
(1,	1,	'Penyerahan 1000 Bibit Ikan',	'penyerahan-1000-bibit-ikan',	'assets/news/49NK7RZz61F2YawzQ9oNTV5DryqdBf8sL6fw1Z9P.jpg',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum nisi quis eleifend quam. Faucibus purus in massa tempor nec feugiat nisl pretium. Elementum pulvinar etiam non quam. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Quam id leo in vitae turpis massa sed elementum tempus. Diam quis enim lobortis scelerisque. Tortor condimentum lacinia quis vel eros. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla facilisi. Id aliquet risus feugiat in ante metus dictum. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. Adipiscing elit pellentesque habitant morbi tristique senectus et netus et. Nisl condimentum id venenatis a condimentum. Orci ac auctor augue mauris augue. Convallis tellus id interdum velit. Urna neque viverra justo nec ultrices dui sapien. Diam vel quam elementum pulvinar etiam non quam lacus. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Blandit massa enim nec dui nunc mattis enim ut. Faucibus in ornare quam viverra orci sagittis eu. Viverra adipiscing at in tellus integer feugiat scelerisque varius morbi. Elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Integer malesuada nunc vel risus commodo. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Dictum non consectetur a erat. Odio euismod lacinia at quis risus sed vulputate odio. Malesuada fames ac turpis egestas maecenas pharetra. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Diam maecenas sed enim ut. Eget nullam non nisi est sit.</p>',	'2022-01-07 00:27:58',	'2022-01-07 00:27:58'),
(3,	1,	'Melihat Penangkaran Penyu di Sambas',	'melihat-penangkaran-penyu-di-sambas',	'assets/news/vXeWPcvn60xDmUZiaxPk7KHFe0PMy84M1vQyCSyx.jpg',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum nisi quis eleifend quam. Faucibus purus in massa tempor nec feugiat nisl pretium. Elementum pulvinar etiam non quam. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Quam id leo in vitae turpis massa sed elementum tempus. Diam quis enim lobortis scelerisque. Tortor condimentum lacinia quis vel eros. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla facilisi. Id aliquet risus feugiat in ante metus dictum. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. Adipiscing elit pellentesque habitant morbi tristique senectus et netus et. Nisl condimentum id venenatis a condimentum. Orci ac auctor augue mauris augue. Convallis tellus id interdum velit. Urna neque viverra justo nec ultrices dui sapien. Diam vel quam elementum pulvinar etiam non quam lacus. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Blandit massa enim nec dui nunc mattis enim ut. Faucibus in ornare quam viverra orci sagittis eu. Viverra adipiscing at in tellus integer feugiat scelerisque varius morbi. Elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Integer malesuada nunc vel risus commodo. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Dictum non consectetur a erat. Odio euismod lacinia at quis risus sed vulputate odio. Malesuada fames ac turpis egestas maecenas pharetra. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Diam maecenas sed enim ut. Eget nullam non nisi est sit.</p>',	'2022-01-07 00:49:05',	'2022-01-12 02:37:36'),
(4,	1,	'Dinas Kelautan Rencanakan Pembuatan Taman Wisata Mangrove di Pantai Kakap',	'dinas-kelautan-rencanakan-pembuatan-taman-wisata-mangrove-di-pantai-kakap',	'assets/news/HhDd5Ke0SlrYj8wDSf5n8TEqYCfvdmsFxEsxx365.jpg',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum nisi quis eleifend quam. Faucibus purus in massa tempor nec feugiat nisl pretium. Elementum pulvinar etiam non quam. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Quam id leo in vitae turpis massa sed elementum tempus. Diam quis enim lobortis scelerisque. Tortor condimentum lacinia quis vel eros. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla facilisi. Id aliquet risus feugiat in ante metus dictum. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. Adipiscing elit pellentesque habitant morbi tristique senectus et netus et. Nisl condimentum id venenatis a condimentum. Orci ac auctor augue mauris augue. Convallis tellus id interdum velit. Urna neque viverra justo nec ultrices dui sapien. Diam vel quam elementum pulvinar etiam non quam lacus. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Blandit massa enim nec dui nunc mattis enim ut. Faucibus in ornare quam viverra orci sagittis eu. Viverra adipiscing at in tellus integer feugiat scelerisque varius morbi. Elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Integer malesuada nunc vel risus commodo. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Dictum non consectetur a erat. Odio euismod lacinia at quis risus sed vulputate odio. Malesuada fames ac turpis egestas maecenas pharetra. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Diam maecenas sed enim ut. Eget nullam non nisi est sit.</p>',	'2022-01-07 01:26:44',	'2022-01-07 01:26:44'),
(5,	1,	'Pulau Randayan Dengan Sejuta Potensinya',	'pulau-randayan-dengan-sejuta-potensinya',	'assets/news/HlPgjAq2Ly35Jn17MfiwFyQH0bcbSXquL2iLP6jT.jpg',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut porttitor leo a diam. A scelerisque purus semper eget duis at. Est lorem ipsum dolor sit amet consectetur adipiscing elit. Rutrum quisque non tellus orci ac. Nisl condimentum id venenatis a condimentum vitae sapien pellentesque. Libero nunc consequat interdum varius sit amet mattis vulputate enim. Eu non diam phasellus vestibulum. Suspendisse interdum consectetur libero id faucibus nisl tincidunt eget. Sodales neque sodales ut etiam sit amet nisl. Sed blandit libero volutpat sed cras ornare arcu dui vivamus. Ut porttitor leo a diam sollicitudin tempor id eu nisl. Purus semper eget duis at tellus at urna condimentum mattis. Malesuada proin libero nunc consequat interdum varius sit amet. Diam maecenas sed enim ut sem viverra aliquet eget sit. Eu sem integer vitae justo. Odio eu feugiat pretium nibh ipsum consequat nisl vel pretium.</p>\r\n\r\n<p>Eleifend donec pretium vulputate sapien nec. Posuere morbi leo urna molestie at. Lorem mollis aliquam ut porttitor leo a. Aliquam sem et tortor consequat id porta nibh venenatis. Dictum at tempor commodo ullamcorper a lacus vestibulum sed arcu. Malesuada bibendum arcu vitae elementum curabitur vitae nunc. Massa placerat duis ultricies lacus. Fringilla urna porttitor rhoncus dolor. Porttitor leo a diam sollicitudin tempor id eu. Lobortis elementum nibh tellus molestie nunc.</p>',	'2022-01-12 07:19:20',	'2022-01-12 07:19:20')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `user_id` = VALUES(`user_id`), `title` = VALUES(`title`), `slug` = VALUES(`slug`), `photo` = VALUES(`photo`), `news_content` = VALUES(`news_content`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `purposes`;
CREATE TABLE `purposes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `purpose_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `purposes` (`id`, `purpose_name`, `slug`, `created_at`, `updated_at`) VALUES
(1,	'Pariwisata',	'pariwisata',	'2022-01-04 06:03:04',	'2022-01-04 06:03:04'),
(2,	'Penelitian',	'penelitian',	'2022-01-04 06:03:12',	'2022-01-04 06:03:12'),
(3,	'Pendidikan',	'pendidikan',	'2022-01-04 06:03:19',	'2022-01-04 06:03:19')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `purpose_name` = VALUES(`purpose_name`), `slug` = VALUES(`slug`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `purpose_id` bigint(20) unsigned NOT NULL,
  `conservation_area_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `transaction_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_of_purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_entry` date NOT NULL,
  `out_date` date NOT NULL,
  `permit_application_fee` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `visitor_charges` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `total_transaction` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `submission_status` enum('PENDING','ALLOWED','REJECTED','FAILED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `rejected_reason` text COLLATE utf8mb4_unicode_ci,
  `payment_status` enum('UNPAID','PENDING','PAIDOFF','FAILED') COLLATE utf8mb4_unicode_ci DEFAULT 'UNPAID',
  `evidence_of_transfer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entrance_ticket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_research_activity_form` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_purpose_id_foreign` (`purpose_id`),
  KEY `transactions_conservation_area_id_foreign` (`conservation_area_id`),
  KEY `transactions_user_id_foreign` (`user_id`),
  CONSTRAINT `transactions_conservation_area_id_foreign` FOREIGN KEY (`conservation_area_id`) REFERENCES `conservation_areas` (`id`),
  CONSTRAINT `transactions_purpose_id_foreign` FOREIGN KEY (`purpose_id`) REFERENCES `purposes` (`id`),
  CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `transactions` (`id`, `purpose_id`, `conservation_area_id`, `user_id`, `transaction_code`, `name_of_purpose`, `date_of_entry`, `out_date`, `permit_application_fee`, `visitor_charges`, `total_transaction`, `submission_status`, `rejected_reason`, `payment_status`, `evidence_of_transfer`, `account_owner`, `entrance_ticket`, `educational_research_activity_form`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8,	2,	8,	19,	'SALAM-00008',	'Penelitian',	'2022-01-15',	'2022-01-17',	'',	'',	'0',	'FAILED',	NULL,	'UNPAID',	NULL,	NULL,	NULL,	NULL,	'2022-01-14 09:33:48',	'2022-01-18 06:55:07',	'2022-01-18 06:55:07'),
(9,	2,	8,	19,	'SALAM-00009',	'Penelitian',	'2022-01-15',	'2022-01-17',	'',	'',	'55000',	'FAILED',	NULL,	'FAILED',	NULL,	NULL,	NULL,	NULL,	'2022-01-14 09:36:23',	'2022-02-02 00:44:51',	'2022-02-02 00:44:51'),
(10,	2,	8,	19,	'SALAM-00010',	'Penelitian',	'2022-01-15',	'2022-01-17',	'',	'',	'55000',	'REJECTED',	'<p>Alasan Penolakan</p>\r\n\r\n<p>1. Anda Tidak Mengunggah Surat Keterangan Untuk Kegiatan Penelitian</p>',	'UNPAID',	NULL,	NULL,	NULL,	NULL,	'2022-01-14 09:41:37',	'2022-02-02 05:20:25',	NULL),
(13,	2,	8,	19,	'SALAM-00013',	'Penelitian',	'2022-01-15',	'2022-01-17',	'',	'',	'55000',	'PENDING',	NULL,	'UNPAID',	NULL,	NULL,	NULL,	NULL,	'2022-01-14 09:43:35',	'2022-01-14 09:43:35',	NULL),
(14,	2,	8,	19,	'SALAM-00014',	'Penelitian',	'2022-01-15',	'2022-01-17',	'',	'',	'55000',	'PENDING',	NULL,	'UNPAID',	NULL,	NULL,	NULL,	NULL,	'2022-01-14 09:44:34',	'2022-01-14 09:44:34',	NULL),
(15,	2,	8,	19,	'SALAM-00015',	'Penelitian',	'2022-01-15',	'2022-01-17',	'',	'',	'55000',	'REJECTED',	'<p>Alasan Pengajuan Anda Ditolak:</p>\r\n\r\n<p>1. Photo Identitas Tidak Disertakan Pada Saat Pengajuan</p>\r\n\r\n<p>2. Surat Permohonan Untuk Kegiatan Penelitian Tidak Anda Unggah Kedalam Sistem</p>',	'UNPAID',	NULL,	NULL,	NULL,	NULL,	'2022-01-14 09:44:58',	'2022-01-19 04:19:41',	NULL),
(16,	2,	8,	19,	'SALAM-00016',	'Penelitian',	'2022-01-15',	'2022-01-17',	'',	'',	'55000',	'ALLOWED',	NULL,	'PAIDOFF',	'assets/evidence_of_transfer/2S0pkth2ILAXqwsQAu4aEr82Qh9CXpgxJp4FWjcG.jpg',	'Wawan Adrianto',	'assets/entrance_ticket/ehG367Mo1oCT7zDVkfbTaJNV0zWEU8gp6Qo3Hn49.pdf',	NULL,	'2022-01-14 09:45:36',	'2022-01-25 06:10:25',	NULL),
(17,	1,	9,	12,	'SALAM-00017',	'Pariwisata',	'2022-01-28',	'2022-01-30',	'',	'',	'50000',	'ALLOWED',	NULL,	'PAIDOFF',	'assets/evidence_of_transfer/VXVTMKuRsIbMIYnK0xdpetzo1pjOQYZjm5XKotfi.jpg',	'Mandalika Ayusti',	'assets/entrance_ticket/y2x9LTMAkpY8YKD0hfGh5EpUAbq7knX8eBFSxT0v.pdf',	NULL,	'2022-01-19 04:14:59',	'2022-01-25 03:54:04',	NULL),
(38,	1,	11,	12,	'SALAM-00038',	'Pariwisata',	'1970-01-01',	'1970-01-01',	'',	'',	'45000',	'FAILED',	NULL,	'FAILED',	NULL,	NULL,	NULL,	NULL,	'2022-02-02 00:44:09',	'2022-02-02 00:44:09',	'2022-02-02 07:52:39'),
(54,	1,	8,	12,	'SALAM-00054',	'Pariwisata',	'2022-02-17',	'2022-02-20',	'',	'',	'35000',	'ALLOWED',	NULL,	'PAIDOFF',	'assets/evidence_of_transfer/IlGMcxtr5DLJYtboSGHddNVVeDqsA4GE4G51W7jN.jpg',	'Mandalika Ayusti',	'assets/entrance_ticket/pMlJWIJDgZ6pK55ImkGsVuD5HpK8iOVHFnV1tjdo.pdf',	NULL,	'2022-02-02 00:50:33',	'2022-02-03 01:20:42',	NULL),
(58,	1,	7,	12,	'SALAM-00058',	'Pariwisata',	'2022-03-10',	'2022-02-14',	'',	'',	'65000',	'ALLOWED',	NULL,	'PAIDOFF',	'assets/evidence_of_transfer/iVhxBfFAjlfhHEMzUI7gTs8Owp7DJcYU7fzHQBaJ.jpg',	'Mandalika Ayusti',	'assets/entrance_ticket/I18PryAflzQ9IzZS8XyBh63USvvD346dbw862Rdo.pdf',	NULL,	'2022-02-03 01:43:36',	'2022-02-03 01:50:31',	NULL),
(66,	3,	11,	12,	'SALAM-00066',	'Pendidikan',	'2022-03-27',	'2022-03-31',	'',	'',	'45000',	'PENDING',	NULL,	'UNPAID',	NULL,	NULL,	NULL,	NULL,	'2022-02-05 01:19:46',	'2022-02-05 01:19:46',	NULL),
(71,	3,	11,	12,	'SALAM-00071',	'Pendidikan',	'2022-04-07',	'2022-04-08',	'',	'',	'15095000',	'PENDING',	NULL,	'UNPAID',	NULL,	NULL,	NULL,	NULL,	'2022-02-05 03:01:21',	'2022-02-05 03:01:21',	NULL),
(72,	3,	10,	12,	'SALAM-00072',	'Pendidikan',	'2022-04-24',	'2022-04-27',	'',	'',	'15095000',	'PENDING',	NULL,	'UNPAID',	NULL,	NULL,	NULL,	NULL,	'2022-02-05 03:11:11',	'2022-02-05 03:11:11',	NULL),
(73,	1,	10,	12,	'SALAM-00073',	'Pariwisata',	'2022-05-08',	'2022-05-10',	'',	'',	'15090000',	'PENDING',	NULL,	'UNPAID',	NULL,	NULL,	NULL,	NULL,	'2022-02-05 03:12:48',	'2022-02-05 03:12:48',	NULL),
(81,	1,	10,	12,	'SALAM-00081',	'Pariwisata',	'2022-05-04',	'2022-05-06',	'',	'',	'20000',	'REJECTED',	'<p>Pengunjung Tidak Mengunggah Photo Identitas</p>',	'UNPAID',	NULL,	NULL,	NULL,	NULL,	'2022-02-05 04:05:13',	'2022-02-05 05:57:54',	NULL),
(82,	1,	7,	12,	'SALAM-00082',	'Pariwisata',	'2022-04-01',	'2022-04-03',	'0',	'0',	'65000',	'PENDING',	NULL,	'UNPAID',	NULL,	NULL,	NULL,	NULL,	'2022-02-05 07:02:03',	'2022-02-05 07:02:03',	NULL)
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `purpose_id` = VALUES(`purpose_id`), `conservation_area_id` = VALUES(`conservation_area_id`), `user_id` = VALUES(`user_id`), `transaction_code` = VALUES(`transaction_code`), `name_of_purpose` = VALUES(`name_of_purpose`), `date_of_entry` = VALUES(`date_of_entry`), `out_date` = VALUES(`out_date`), `permit_application_fee` = VALUES(`permit_application_fee`), `visitor_charges` = VALUES(`visitor_charges`), `total_transaction` = VALUES(`total_transaction`), `submission_status` = VALUES(`submission_status`), `rejected_reason` = VALUES(`rejected_reason`), `payment_status` = VALUES(`payment_status`), `evidence_of_transfer` = VALUES(`evidence_of_transfer`), `account_owner` = VALUES(`account_owner`), `entrance_ticket` = VALUES(`entrance_ticket`), `educational_research_activity_form` = VALUES(`educational_research_activity_form`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`), `deleted_at` = VALUES(`deleted_at`);

DROP TABLE IF EXISTS `transaction_details`;
CREATE TABLE `transaction_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `transaction_id` bigint(20) unsigned NOT NULL,
  `master_price_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizen` enum('WNI','WNA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identity_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transaction_details_transaction_id_foreign` (`transaction_id`),
  KEY `transaction_details_master_price_id_foreign` (`master_price_id`),
  CONSTRAINT `transaction_details_master_price_id_foreign` FOREIGN KEY (`master_price_id`) REFERENCES `master_prices` (`id`),
  CONSTRAINT `transaction_details_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `transaction_details` (`id`, `transaction_id`, `master_price_id`, `name`, `citizen`, `address`, `phone_number`, `identity_image`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4,	8,	3,	'Adrian Mulyawan',	'WNI',	'Serdam',	'082154590559',	'assets/identity_image/IPfwBRJYgsAQ7zlG4nU4w5KNhOxzprriO7Z0ddTc.jpg',	'20000',	'2022-01-14 09:33:48',	'2022-01-18 06:55:07',	'2022-01-18 06:55:07'),
(5,	9,	3,	'Wawan Adrianto',	'WNI',	'Jl Padat Karya No 21',	'082154590559',	'assets/identity_image/IPfwBRJYgsAQ7zlG4nU4w5KNhOxzprriO7Z0ddTc.jpg',	'20000',	'2022-01-14 09:36:23',	'2022-01-14 09:36:23',	NULL),
(6,	9,	3,	'Adrian Mulyawan',	'WNI',	'Serdam',	'082154590559',	'assets/identity_image/IPfwBRJYgsAQ7zlG4nU4w5KNhOxzprriO7Z0ddTc.jpg',	'20000',	'2022-01-14 09:36:23',	'2022-01-14 09:36:23',	NULL),
(7,	10,	3,	'Wawan Adrianto',	'WNI',	'Jl Padat Karya No 21',	'082154590559',	'assets/identity_image/IPfwBRJYgsAQ7zlG4nU4w5KNhOxzprriO7Z0ddTc.jpg',	'20000',	'2022-01-14 09:41:37',	'2022-01-14 09:41:37',	NULL),
(8,	10,	3,	'Adrian Mulyawan',	'WNI',	'Serdam',	'082154590559',	'assets/identity_image/IPfwBRJYgsAQ7zlG4nU4w5KNhOxzprriO7Z0ddTc.jpg',	'20000',	'2022-01-14 09:41:38',	'2022-01-14 09:41:38',	NULL),
(13,	13,	3,	'Wawan Adrianto',	'WNI',	'Jl Padat Karya No 21',	'082154590559',	'assets/identity_image/IPfwBRJYgsAQ7zlG4nU4w5KNhOxzprriO7Z0ddTc.jpg',	'20000',	'2022-01-14 09:43:35',	'2022-01-14 09:43:35',	NULL),
(14,	13,	3,	'Adrian Mulyawan',	'WNI',	'Serdam',	'082154590559',	'assets/identity_image/IPfwBRJYgsAQ7zlG4nU4w5KNhOxzprriO7Z0ddTc.jpg',	'20000',	'2022-01-14 09:43:35',	'2022-01-14 09:43:35',	NULL),
(15,	14,	3,	'Wawan Adrianto',	'WNI',	'Jl Padat Karya No 21',	'082154590559',	'assets/identity_image/IPfwBRJYgsAQ7zlG4nU4w5KNhOxzprriO7Z0ddTc.jpg',	'20000',	'2022-01-14 09:44:34',	'2022-01-14 09:44:34',	NULL),
(16,	14,	3,	'Adrian Mulyawan',	'WNI',	'Serdam',	'082154590559',	'assets/identity_image/IPfwBRJYgsAQ7zlG4nU4w5KNhOxzprriO7Z0ddTc.jpg',	'20000',	'2022-01-14 09:44:34',	'2022-01-14 09:44:34',	NULL),
(17,	15,	3,	'Wawan Adrianto',	'WNI',	'Jl Padat Karya No 21',	'082154590559',	'assets/identity_image/IPfwBRJYgsAQ7zlG4nU4w5KNhOxzprriO7Z0ddTc.jpg',	'20000',	'2022-01-14 09:44:58',	'2022-01-14 09:44:58',	NULL),
(18,	15,	3,	'Adrian Mulyawan',	'WNI',	'Serdam',	'082154590559',	'assets/identity_image/IPfwBRJYgsAQ7zlG4nU4w5KNhOxzprriO7Z0ddTc.jpg',	'20000',	'2022-01-14 09:44:58',	'2022-01-14 09:44:58',	NULL),
(19,	16,	3,	'Wawan Adrianto',	'WNI',	'Jl Padat Karya No 21',	'082154590559',	NULL,	'20000',	'2022-01-14 09:45:36',	'2022-01-14 09:45:36',	NULL),
(20,	16,	3,	'Adrian Mulyawan',	'WNI',	'Serdam',	'082154590559',	NULL,	'20000',	'2022-01-14 09:45:36',	'2022-01-14 09:45:36',	NULL),
(21,	17,	1,	'Mandalika Ayusti Nawangsari',	'WNI',	'Jl Sui Raya Dalam Komp Taman Sui Raya H2',	'089640001855',	'assets/identity_image/IPfwBRJYgsAQ7zlG4nU4w5KNhOxzprriO7Z0ddTc.jpg',	'10000',	'2022-01-19 04:14:59',	'2022-01-19 04:14:59',	NULL),
(22,	17,	1,	'Fauzan Adicakti',	'WNI',	'Jl Sao Sao Komplek BTN No 21',	'082225459861',	'assets/identity_image/IPfwBRJYgsAQ7zlG4nU4w5KNhOxzprriO7Z0ddTc.jpg',	'10000',	'2022-01-19 04:14:59',	'2022-01-19 04:14:59',	NULL),
(77,	38,	1,	'Mandalika Ayusti Nawangsari',	'WNI',	'Jl Sui Raya Dalam Komp Taman Sui Raya H2',	'089640001855',	NULL,	'10000',	'2022-02-02 00:44:09',	'2022-02-02 00:44:51',	'2022-02-02 00:44:51'),
(78,	38,	1,	'Adrian Mulyawan',	'WNI',	'Serdam',	'081258161143',	NULL,	'10000',	'2022-02-02 00:44:09',	'2022-02-02 00:44:51',	'2022-02-02 00:44:51'),
(94,	54,	1,	'Mandalika Ayusti Nawangsari',	'WNI',	'Jl Sui Raya Dalam Komp Taman Sui Raya H2',	'089640001855',	NULL,	'10000',	'2022-02-02 00:50:33',	'2022-02-02 00:50:33',	NULL),
(95,	54,	1,	'Adrian Mulyawan',	'WNI',	'Serdam',	'089640001855',	NULL,	'10000',	'2022-02-02 00:50:33',	'2022-02-02 00:50:33',	NULL),
(105,	58,	1,	'Mandalika Ayusti Nawangsari',	'WNI',	'Jl Sui Raya Dalam Komp Taman Sui Raya H2',	'089640001855',	NULL,	'10000',	'2022-02-03 01:43:36',	'2022-02-03 01:43:36',	NULL),
(106,	58,	1,	'Siska',	'WNI',	'Jl Kendawangan No 61',	'081256781120',	NULL,	'10000',	'2022-02-03 01:43:36',	'2022-02-03 01:43:36',	NULL),
(107,	58,	1,	'Karlina Budiarti',	'WNI',	'Jl Raya Bekasi No 79',	'089530001965',	NULL,	'10000',	'2022-02-03 01:43:36',	'2022-02-03 01:43:36',	NULL),
(118,	66,	5,	'Mandalika Ayusti Nawangsari',	'WNI',	'Jl Sui Raya Dalam Komp Taman Sui Raya H2',	'089640001855',	NULL,	'15000',	'2022-02-05 01:19:46',	'2022-02-05 01:19:46',	NULL),
(119,	66,	5,	'Adrian Mulyawan',	'WNI',	'Serdam',	'089640001866',	NULL,	'15000',	'2022-02-05 01:19:46',	'2022-02-05 01:19:46',	NULL),
(124,	71,	5,	'Mandalika Ayusti Nawangsari',	'WNI',	'Jl Sui Raya Dalam Komp Taman Sui Raya H2',	'089640001855',	NULL,	'15000',	'2022-02-05 03:01:21',	'2022-02-05 03:01:21',	NULL),
(125,	72,	5,	'Mandalika Ayusti Nawangsari',	'WNI',	'Jl Sui Raya Dalam Komp Taman Sui Raya H2',	'089640001855',	NULL,	'15000',	'2022-02-05 03:11:11',	'2022-02-05 03:11:11',	NULL),
(126,	73,	1,	'Mandalika Ayusti Nawangsari',	'WNI',	'Jl Sui Raya Dalam Komp Taman Sui Raya H2',	'089640001855',	NULL,	'10000',	'2022-02-05 03:12:48',	'2022-02-05 03:12:48',	NULL),
(134,	81,	1,	'Mandalika Ayusti Nawangsari',	'WNI',	'Jl Sui Raya Dalam Komp Taman Sui Raya H2',	'089640001855',	NULL,	'10000',	'2022-02-05 04:05:13',	'2022-02-05 04:05:13',	NULL),
(135,	82,	1,	'Mandalika Ayusti Nawangsari',	'WNI',	'Jl Sui Raya Dalam Komp Taman Sui Raya H2',	'089640001855',	NULL,	'10000',	'2022-02-05 07:02:03',	'2022-02-05 07:02:03',	NULL),
(136,	82,	1,	'Adrian Mulyawan',	'WNI',	'Serdam',	'082142434343',	NULL,	'10000',	'2022-02-05 07:02:03',	'2022-02-05 07:02:03',	NULL)
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `transaction_id` = VALUES(`transaction_id`), `master_price_id` = VALUES(`master_price_id`), `name` = VALUES(`name`), `citizen` = VALUES(`citizen`), `address` = VALUES(`address`), `phone_number` = VALUES(`phone_number`), `identity_image` = VALUES(`identity_image`), `price` = VALUES(`price`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`), `deleted_at` = VALUES(`deleted_at`);

DROP TABLE IF EXISTS `transaction_equipment_details`;
CREATE TABLE `transaction_equipment_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `equipment_id` bigint(20) unsigned NOT NULL,
  `transaction_id` bigint(20) unsigned NOT NULL,
  `equipment_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipment_price` int(11) NOT NULL,
  `equipment_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transaction_equipment_details_equipment_id_foreign` (`equipment_id`),
  KEY `transaction_equipment_details_transaction_id_foreign` (`transaction_id`),
  CONSTRAINT `transaction_equipment_details_equipment_id_foreign` FOREIGN KEY (`equipment_id`) REFERENCES `equipments` (`id`),
  CONSTRAINT `transaction_equipment_details_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `transaction_equipment_details` (`id`, `equipment_id`, `transaction_id`, `equipment_name`, `equipment_price`, `equipment_total`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4,	1,	8,	'SCUBA Set',	15000,	1,	'2022-01-14 09:33:48',	'2022-01-18 06:55:07',	'2022-01-18 06:55:07'),
(5,	1,	9,	'SCUBA Set',	15000,	1,	'2022-01-14 09:36:23',	'2022-01-14 09:36:23',	NULL),
(6,	1,	10,	'SCUBA Set',	15000,	1,	'2022-01-14 09:41:38',	'2022-01-14 09:41:38',	NULL),
(9,	1,	13,	'SCUBA Set',	15000,	1,	'2022-01-14 09:43:35',	'2022-01-14 09:43:35',	NULL),
(10,	1,	14,	'SCUBA Set',	15000,	1,	'2022-01-14 09:44:34',	'2022-01-14 09:44:34',	NULL),
(11,	1,	15,	'SCUBA Set',	15000,	1,	'2022-01-14 09:44:58',	'2022-01-14 09:44:58',	NULL),
(12,	1,	16,	'SCUBA Set',	15000,	1,	'2022-01-14 09:45:36',	'2022-01-14 09:45:36',	NULL),
(13,	2,	17,	'Peralatan Selancar',	10000,	1,	'2022-01-19 04:14:59',	'2022-01-19 04:14:59',	NULL),
(14,	3,	17,	'Kamera Bawah Air',	20000,	1,	'2022-01-19 04:14:59',	'2022-01-19 04:14:59',	NULL),
(15,	1,	38,	'SCUBA Set',	15000,	2,	'2022-02-02 00:44:09',	'2022-02-02 00:44:51',	'2022-02-02 00:44:51'),
(16,	2,	38,	'Peralatan Selancar',	10000,	2,	'2022-02-02 00:44:09',	'2022-02-02 00:44:51',	'2022-02-02 00:44:51'),
(17,	1,	54,	'SCUBA Set',	15000,	1,	'2022-02-02 00:50:33',	'2022-02-02 00:50:33',	NULL),
(18,	1,	58,	'SCUBA Set',	15000,	1,	'2022-02-03 01:43:36',	'2022-02-03 01:43:36',	NULL),
(19,	3,	58,	'Kamera Bawah Air',	20000,	2,	'2022-02-03 01:43:36',	'2022-02-03 01:43:36',	NULL),
(23,	1,	66,	'SCUBA Set',	15000,	1,	'2022-02-05 01:19:46',	'2022-02-05 01:19:46',	NULL),
(24,	1,	71,	'SCUBA Set',	15000,	0,	'2022-02-05 03:01:21',	'2022-02-05 03:01:21',	NULL),
(25,	2,	71,	'Peralatan Selancar',	10000,	0,	'2022-02-05 03:01:21',	'2022-02-05 03:01:21',	NULL),
(26,	3,	71,	'Kamera Bawah Air',	20000,	0,	'2022-02-05 03:01:21',	'2022-02-05 03:01:21',	NULL),
(27,	4,	71,	'Video Bawah Air',	35000,	0,	'2022-02-05 03:01:21',	'2022-02-05 03:01:21',	NULL),
(28,	5,	71,	'Kapal Pesiar',	15000000,	0,	'2022-02-05 03:01:21',	'2022-02-05 03:01:21',	NULL),
(29,	1,	72,	'SCUBA Set',	15000,	0,	'2022-02-05 03:11:11',	'2022-02-05 03:11:11',	NULL),
(30,	2,	72,	'Peralatan Selancar',	10000,	0,	'2022-02-05 03:11:11',	'2022-02-05 03:11:11',	NULL),
(31,	3,	72,	'Kamera Bawah Air',	20000,	0,	'2022-02-05 03:11:11',	'2022-02-05 03:11:11',	NULL),
(32,	4,	72,	'Video Bawah Air',	35000,	0,	'2022-02-05 03:11:11',	'2022-02-05 03:11:11',	NULL),
(33,	5,	72,	'Kapal Pesiar',	15000000,	0,	'2022-02-05 03:11:11',	'2022-02-05 03:11:11',	NULL),
(34,	1,	73,	'SCUBA Set',	15000,	0,	'2022-02-05 03:12:48',	'2022-02-05 03:12:48',	NULL),
(35,	2,	73,	'Peralatan Selancar',	10000,	0,	'2022-02-05 03:12:48',	'2022-02-05 03:12:48',	NULL),
(36,	3,	73,	'Kamera Bawah Air',	20000,	0,	'2022-02-05 03:12:48',	'2022-02-05 03:12:48',	NULL),
(37,	4,	73,	'Video Bawah Air',	35000,	0,	'2022-02-05 03:12:48',	'2022-02-05 03:12:48',	NULL),
(38,	5,	73,	'Kapal Pesiar',	15000000,	0,	'2022-02-05 03:12:48',	'2022-02-05 03:12:48',	NULL),
(44,	1,	82,	'SCUBA Set',	15000,	1,	'2022-02-05 07:02:03',	'2022-02-05 07:02:03',	NULL),
(45,	2,	82,	'Peralatan Selancar',	10000,	1,	'2022-02-05 07:02:03',	'2022-02-05 07:02:03',	NULL)
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `equipment_id` = VALUES(`equipment_id`), `transaction_id` = VALUES(`transaction_id`), `equipment_name` = VALUES(`equipment_name`), `equipment_price` = VALUES(`equipment_price`), `equipment_total` = VALUES(`equipment_total`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`), `deleted_at` = VALUES(`deleted_at`);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizen` enum('wni','wna') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wni',
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identity_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('applicant','superadmin','leader','fieldadmin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'applicant',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `citizen`, `phone_number`, `address`, `identity_image`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Karlina Putri',	'karlinaputri@gmail.com',	NULL,	'$2y$10$Xcakx0o4XnLziIa3BuxeT.b0/6yLvBZaqKQzwsm6muLHzSnARnf6.',	'wni',	'082154590559',	'Jl Tani Makmur No 21',	'',	'superadmin',	NULL,	'2022-01-04 06:01:38',	'2022-01-10 11:16:59'),
(12,	'Mandalika Ayusti Nawangsari',	'manda.pumkins@gmail.com',	NULL,	'$2y$10$vIPJkOotvNP06L2Lw/gOsOoky266kb.vuLWogwpkdgLuS531SlRza',	'wni',	'089640001855',	'Jl Sui Raya Dalam Komp Taman Sui Raya H2',	'assets/identity_image/7MtNK6gXmgSQcZ2zSdV2cLF9cH5vHZUUORGzRN85.jpg',	'applicant',	NULL,	'2022-01-05 00:25:13',	'2022-01-05 00:25:13'),
(13,	'Erli Mahdi',	'erlimahdi@gmail.com',	NULL,	'$2y$10$6HAEznnPP4QTFEzbonYEBejKYMdmdvdFppZoErBVeEKfronb9tuDm',	'wni',	'081257099067',	'Jl Sei Raya Dalam Komplek Taman Sui Raya H2',	'assets/identity_image/de61V1dLHPPZZRLtEawzoqBUxVtrCUZIVMcs3Hgy.jpg',	'leader',	NULL,	'2022-01-05 03:33:05',	'2022-01-27 02:44:25'),
(14,	'Ahmad Ridwan Remin',	'ridwanremin@gmail.com',	NULL,	'$2y$10$i3.0Y4sxCVm8x5Nha39BgeYxeud/M.yJ79RmHiUW62NFfklMSmlcK',	'wni',	'082154590559',	'Jl Sawo No 21',	'assets/identity_image/2KagT2jd1R4cwojjhbL70Sft0RIAd8Z4qgqTMPf5.jpg',	'fieldadmin',	NULL,	'2022-01-05 05:02:34',	'2022-01-28 03:24:32'),
(15,	'Dhafia Raisha Kamila',	'dhafiark@gmail.com',	NULL,	'$2y$10$5Poh0OSiwg40gWtk8JFkVuCadf9GAf4pmuV3J3rtc35grtHjteOFK',	'wni',	'089640001855',	'Jl Sei Raya Komplek Sungai Raya Lestari no 70',	'assets/identity_image/IPfwBRJYgsAQ7zlG4nU4w5KNhOxzprriO7Z0ddTc.jpg',	'superadmin',	NULL,	'2022-01-10 00:47:24',	'2022-01-10 02:21:32'),
(17,	'Rendy Abizar',	'rendiabizar@gmail.com',	NULL,	'$2y$10$SATcywdOQQx2iP485bj9oeZ696vEBad9JymT.hsKGLopB/SAm7JRu',	'wni',	'082154590559',	'Jl Raya Ratu Sepudak no 21',	'assets/identity_image/IPfwBRJYgsAQ7zlG4nU4w5KNhOxzprriO7Z0ddTc.jpg',	'fieldadmin',	'fQj1rT2vzPlJ1DvyzuDlDgfN1VjFrte68jCunRDRUTDBl2N7hr4qToUDJMJi',	'2022-01-10 00:54:11',	'2022-01-14 01:06:51'),
(19,	'Wawan Adrianto Elmanto',	'adrianmulyawan668@gmail.com',	'2022-01-14 00:54:12',	'$2y$10$y4R1Zfb2SOIpeuot5LA6q.7gLVJ0zxzaLRKeVfooj2DaDROCpp53q',	'wni',	'082154590559',	'Jl Padat Karya No 21',	'assets/identity_image/IPfwBRJYgsAQ7zlG4nU4w5KNhOxzprriO7Z0ddTc.jpg',	'applicant',	NULL,	'2022-01-14 00:53:40',	'2022-01-21 06:19:08'),
(20,	'Anastasya Kosasih',	'anastasyakosasih@gmail.com',	NULL,	'$2y$10$.vV.lBgK4EoQIohETPNa0e.P3bkARwxJ3nlAVLXOymt1Ja4fFmCm2',	'wni',	'082154590559',	'Jl Gunung Kembar No 69',	NULL,	'superadmin',	NULL,	'2022-02-02 05:46:53',	'2022-02-02 05:46:53')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `name` = VALUES(`name`), `email` = VALUES(`email`), `email_verified_at` = VALUES(`email_verified_at`), `password` = VALUES(`password`), `citizen` = VALUES(`citizen`), `phone_number` = VALUES(`phone_number`), `address` = VALUES(`address`), `identity_image` = VALUES(`identity_image`), `role` = VALUES(`role`), `remember_token` = VALUES(`remember_token`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `visitor_controls`;
CREATE TABLE `visitor_controls` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `transaction_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_entry_area` date DEFAULT NULL,
  `out_date_area` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `visitor_controls_transaction_id_foreign` (`transaction_id`),
  KEY `visitor_controls_user_id_foreign` (`user_id`),
  CONSTRAINT `visitor_controls_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`),
  CONSTRAINT `visitor_controls_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `visitor_controls` (`id`, `transaction_id`, `user_id`, `name`, `transaction_code`, `date_of_entry_area`, `out_date_area`, `created_at`, `updated_at`) VALUES
(6,	17,	14,	'Ridwan Remin',	'SALAM-00017',	'2022-01-28',	'2022-01-30',	'2022-01-27 10:37:01',	'2022-01-27 10:37:20'),
(7,	16,	14,	'Ridwan Remin',	'SALAM-00016',	'2022-01-16',	'2022-01-17',	'2022-01-28 01:59:37',	'2022-01-28 01:59:58')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `transaction_id` = VALUES(`transaction_id`), `user_id` = VALUES(`user_id`), `name` = VALUES(`name`), `transaction_code` = VALUES(`transaction_code`), `date_of_entry_area` = VALUES(`date_of_entry_area`), `out_date_area` = VALUES(`out_date_area`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

-- 2022-02-05 14:06:23