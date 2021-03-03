-- Adminer 4.7.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE `activity_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint(20) unsigned DEFAULT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) unsigned DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_log_log_name_index` (`log_name`),
  KEY `subject` (`subject_id`,`subject_type`),
  KEY `causer` (`causer_id`,`causer_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(1,	'default',	'created',	1,	'App\\Domains\\Announcement\\Models\\Announcement',	NULL,	NULL,	'{\"attributes\": {\"area\": null, \"type\": \"info\", \"enabled\": true, \"ends_at\": null, \"message\": \"This is a <strong>Global</strong> announcement that will show on both the frontend and backend. <em>See <strong>AnnouncementSeeder</strong> for more usage examples.</em>\", \"starts_at\": null}}',	'2021-02-11 00:38:39',	'2021-02-11 00:38:39'),
(2,	'role',	'Super Admin created role Instructor with permissions: None',	2,	'App\\Domains\\Auth\\Models\\Role',	1,	'App\\Domains\\Auth\\Models\\User',	'{\"role\": {\"name\": \"Instructor\", \"type\": \"user\"}, \"permissions\": \"None\"}',	'2021-02-20 06:31:47',	'2021-02-20 06:31:47'),
(3,	'role',	'Super Admin created role Customer with permissions: None',	3,	'App\\Domains\\Auth\\Models\\Role',	1,	'App\\Domains\\Auth\\Models\\User',	'{\"role\": {\"name\": \"Customer\", \"type\": \"user\"}, \"permissions\": \"None\"}',	'2021-02-20 06:32:07',	'2021-02-20 06:32:07'),
(4,	'user',	'Super Admin updated user Test User with roles: Instructor and permissions: ',	2,	'App\\Domains\\Auth\\Models\\User',	1,	'App\\Domains\\Auth\\Models\\User',	'{\"user\": {\"name\": \"Test User\", \"type\": \"user\", \"email\": \"user@user.com\"}, \"roles\": \"Instructor\", \"permissions\": \"\"}',	'2021-02-20 06:32:23',	'2021-02-20 06:32:23'),
(5,	'user',	'Super Admin created user Customer with roles: Customer and permissions: ',	3,	'App\\Domains\\Auth\\Models\\User',	1,	'App\\Domains\\Auth\\Models\\User',	'{\"user\": {\"name\": \"Customer\", \"type\": \"user\", \"email\": \"customer@customer.com\", \"active\": true, \"email_verified_at\": \"2021-02-20T12:03:46.000000Z\"}, \"roles\": \"Customer\", \"permissions\": \"\"}',	'2021-02-20 06:33:46',	'2021-02-20 06:33:46'),
(6,	'user',	'Super Admin deleted user Customer',	3,	'App\\Domains\\Auth\\Models\\User',	1,	'App\\Domains\\Auth\\Models\\User',	'[]',	'2021-02-20 07:10:48',	'2021-02-20 07:10:48'),
(7,	'user',	'Super Admin restored user Customer',	3,	'App\\Domains\\Auth\\Models\\User',	1,	'App\\Domains\\Auth\\Models\\User',	'[]',	'2021-02-20 07:10:55',	'2021-02-20 07:10:55'),
(8,	'user',	'Super Admin updated user Customer with roles: Customer and permissions: ',	3,	'App\\Domains\\Auth\\Models\\User',	1,	'App\\Domains\\Auth\\Models\\User',	'{\"user\": {\"name\": \"Customer\", \"type\": \"user\", \"email\": \"customer@customer.com\"}, \"roles\": \"Customer\", \"permissions\": \"\"}',	'2021-02-20 07:11:11',	'2021-02-20 07:11:11');

DROP TABLE IF EXISTS `announcements`;
CREATE TABLE `announcements` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `area` enum('frontend','backend') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('info','danger','warning','success') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'info',
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `starts_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `announcements` (`id`, `area`, `type`, `message`, `enabled`, `starts_at`, `ends_at`, `created_at`, `updated_at`) VALUES
(1,	NULL,	'info',	'This is a <strong>Global</strong> announcement that will show on both the frontend and backend. <em>See <strong>AnnouncementSeeder</strong> for more usage examples.</em>',	1,	NULL,	NULL,	'2021-02-11 00:38:38',	'2021-02-11 00:38:38');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


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
(4,	'2020_02_25_034148_create_permission_tables',	1),
(5,	'2020_05_25_021239_create_announcements_table',	1),
(6,	'2020_05_29_020244_create_password_histories_table',	1),
(7,	'2020_07_06_215139_create_activity_log_table',	1),
(8,	'2020_10_19_204342_create_two_factor_authentications_table',	1);

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1,	'App\\Domains\\Auth\\Models\\User',	1),
(2,	'App\\Domains\\Auth\\Models\\User',	2),
(3,	'App\\Domains\\Auth\\Models\\User',	3);

DROP TABLE IF EXISTS `password_histories`;
CREATE TABLE `password_histories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `password_histories` (`id`, `model_type`, `model_id`, `password`, `created_at`, `updated_at`) VALUES
(1,	'App\\Domains\\Auth\\Models\\User',	1,	'$2y$10$KF2GMOq9QXzFzA5ad62DWOZbV2fS0bOGxt84C6dP5XkUsAd3j4hLm',	'2021-02-11 00:38:37',	'2021-02-11 00:38:37'),
(2,	'App\\Domains\\Auth\\Models\\User',	2,	'$2y$10$5GK6CVLtXjeTvKBiygiGp.D/5IkQcaum4NfnX06lXwwNXyDWPhHIW',	'2021-02-11 00:38:37',	'2021-02-11 00:38:37'),
(3,	'App\\Domains\\Auth\\Models\\User',	3,	'$2y$10$N1s8NkXLCoQgU5P1/EhcD.QLyMI0Oes51hnx4EBh3C9ZxszAp8adS',	'2021-02-20 06:33:46',	'2021-02-20 06:33:46'),
(4,	'App\\Domains\\Auth\\Models\\User',	4,	'$2y$10$bK2xPZbTUXFmC6LGHpKnu.BQWAoaH9NedbvP8ig8PmXScdHPnuDVa',	'2021-02-21 12:18:54',	'2021-02-21 12:18:54'),
(5,	'App\\Domains\\Auth\\Models\\User',	5,	'$2y$10$ON7uXU9EotcW.WZvKOFjRO4I9TUp86JIsMUdY85C9n3TDRWYR/GxK',	'2021-02-21 23:16:43',	'2021-02-21 23:16:43'),
(6,	'App\\Domains\\Auth\\Models\\User',	6,	'$2y$10$fxYoXmQIOi3IXcqe4W/va..ySMoSqsfeA7K4gC/102GwwLH.mvkuO',	'2021-02-22 00:46:11',	'2021-02-22 00:46:11');

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user@user.com',	'$2y$10$vQyFpXuJT15yiWBaGDafUuYc/vNZC2A6lXQruKkdAeSMWmbcV22.W',	'2021-02-20 07:12:06');

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint(20) unsigned DEFAULT NULL,
  `sort` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_parent_id_foreign` (`parent_id`),
  CONSTRAINT `permissions_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `permissions` (`id`, `type`, `guard_name`, `name`, `description`, `parent_id`, `sort`, `created_at`, `updated_at`) VALUES
(1,	'admin',	'web',	'admin.access.user',	'All User Permissions',	NULL,	1,	'2021-02-11 00:38:38',	'2021-02-11 00:38:38'),
(2,	'admin',	'web',	'admin.access.user.list',	'View Users',	1,	1,	'2021-02-11 00:38:38',	'2021-02-11 00:38:38'),
(3,	'admin',	'web',	'admin.access.user.deactivate',	'Deactivate Users',	1,	2,	'2021-02-11 00:38:38',	'2021-02-11 00:38:38'),
(4,	'admin',	'web',	'admin.access.user.reactivate',	'Reactivate Users',	1,	3,	'2021-02-11 00:38:38',	'2021-02-11 00:38:38'),
(5,	'admin',	'web',	'admin.access.user.clear-session',	'Clear User Sessions',	1,	4,	'2021-02-11 00:38:38',	'2021-02-11 00:38:38'),
(6,	'admin',	'web',	'admin.access.user.impersonate',	'Impersonate Users',	1,	5,	'2021-02-11 00:38:38',	'2021-02-11 00:38:38'),
(7,	'admin',	'web',	'admin.access.user.change-password',	'Change User Passwords',	1,	6,	'2021-02-11 00:38:38',	'2021-02-11 00:38:38');

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `roles` (`id`, `type`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1,	'admin',	'Administrator',	'web',	'2021-02-11 00:38:37',	'2021-02-11 00:38:37'),
(2,	'user',	'Instructor',	'web',	'2021-02-20 06:31:47',	'2021-02-20 06:31:47'),
(3,	'user',	'Customer',	'web',	'2021-02-20 06:32:07',	'2021-02-20 06:32:07');

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `two_factor_authentications`;
CREATE TABLE `two_factor_authentications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `authenticatable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authenticatable_id` bigint(20) unsigned NOT NULL,
  `shared_secret` blob NOT NULL,
  `enabled_at` timestamp NULL DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `digits` tinyint(3) unsigned NOT NULL DEFAULT '6',
  `seconds` tinyint(3) unsigned NOT NULL DEFAULT '30',
  `window` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `algorithm` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sha1',
  `recovery_codes` json DEFAULT NULL,
  `recovery_codes_generated_at` timestamp NULL DEFAULT NULL,
  `safe_devices` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `2fa_auth_type_auth_id_index` (`authenticatable_type`,`authenticatable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `two_factor_authentications` (`id`, `authenticatable_type`, `authenticatable_id`, `shared_secret`, `enabled_at`, `label`, `digits`, `seconds`, `window`, `algorithm`, `recovery_codes`, `recovery_codes_generated_at`, `safe_devices`, `created_at`, `updated_at`) VALUES
(1,	'App\\Domains\\Auth\\Models\\User',	1,	'9’›~HB D3êÄ‰Ây#\Zn',	NULL,	'admin@admin.com',	6,	30,	1,	'sha1',	NULL,	NULL,	NULL,	'2021-02-11 01:00:10',	'2021-02-11 01:00:37');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_changed_at` timestamp NULL DEFAULT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `last_login_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_be_logged_out` tinyint(1) NOT NULL DEFAULT '0',
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `type`, `name`, `email`, `email_verified_at`, `password`, `password_changed_at`, `active`, `timezone`, `last_login_at`, `last_login_ip`, `to_be_logged_out`, `provider`, `provider_id`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1,	'admin',	'Super Admin',	'admin@admin.com',	'2021-02-11 00:38:37',	'$2y$10$KF2GMOq9QXzFzA5ad62DWOZbV2fS0bOGxt84C6dP5XkUsAd3j4hLm',	NULL,	1,	'America/New_York',	'2021-02-21 03:29:41',	'127.0.0.1',	0,	NULL,	NULL,	'H88u1z0LWBorYJGUMomUlM1GY6zXo7wgcjcPGfMip4ilBqLGCp04QCBy0woc',	'2021-02-11 00:38:37',	'2021-02-21 03:29:41',	NULL),
(2,	'user',	'Test User',	'user@user.com',	'2021-02-11 00:38:37',	'$2y$10$5GK6CVLtXjeTvKBiygiGp.D/5IkQcaum4NfnX06lXwwNXyDWPhHIW',	NULL,	1,	'America/New_York',	'2021-02-22 00:44:52',	'127.0.0.1',	0,	NULL,	NULL,	NULL,	'2021-02-11 00:38:37',	'2021-02-22 00:44:52',	NULL),
(3,	'user',	'Customer',	'customer@customer.com',	'2021-02-20 06:33:46',	'$2y$10$N1s8NkXLCoQgU5P1/EhcD.QLyMI0Oes51hnx4EBh3C9ZxszAp8adS',	NULL,	1,	NULL,	NULL,	NULL,	0,	NULL,	NULL,	NULL,	'2021-02-20 06:33:46',	'2021-02-20 07:10:55',	NULL),
(4,	'user',	'demo',	'demouser@demo.com',	NULL,	'$2y$10$bK2xPZbTUXFmC6LGHpKnu.BQWAoaH9NedbvP8ig8PmXScdHPnuDVa',	NULL,	1,	'America/New_York',	'2021-02-21 12:38:27',	'127.0.0.1',	0,	NULL,	NULL,	NULL,	'2021-02-21 12:18:53',	'2021-02-21 12:38:27',	NULL),
(5,	'user',	'demo1',	'demo1@gmail.com',	'2021-02-22 04:47:26',	'$2y$10$ON7uXU9EotcW.WZvKOFjRO4I9TUp86JIsMUdY85C9n3TDRWYR/GxK',	NULL,	1,	'America/New_York',	'2021-02-21 23:17:53',	'127.0.0.1',	0,	NULL,	NULL,	'12KZBDYZIjk6a2ixYD4vMtvllt4E8Uxxyt7TJvt2cKdUpRQHHCCSVHyZhaIB',	'2021-02-21 23:16:43',	'2021-02-21 23:17:53',	NULL),
(6,	'user',	'demo2',	'demo2@gmail.com',	'2021-02-22 06:17:06',	'$2y$10$fxYoXmQIOi3IXcqe4W/va..ySMoSqsfeA7K4gC/102GwwLH.mvkuO',	NULL,	1,	'America/New_York',	'2021-02-22 00:47:37',	'127.0.0.1',	0,	NULL,	NULL,	'noTgWPutVYLRCEjPehLgSRoQo9AhAqb5qTXAodqKtTNOwQUEOXteyuxynKqE',	'2021-02-22 00:46:11',	'2021-02-22 00:47:37',	NULL);

-- 2021-02-23 10:42:31
