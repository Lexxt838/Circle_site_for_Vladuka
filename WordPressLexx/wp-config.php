<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'WP_LEXX');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yz>r6D&C8u.^gBNkYG60HO3%7bX-Kr6HYzizm7szWv]:3frXxR`5GP9p~1Kp^6-[');
define('SECURE_AUTH_KEY',  '`-}`IMnp4DH_c6BFR^o}$||S}V@ze]#<kJIv /@Upc{cqy_#gLUqYt8;GhYK6N~$');
define('LOGGED_IN_KEY',    '_ *F:wSK4C#{P9&(OJ`cc.}y$9FI)Y/@;X-xz7rj|o*P=Bz-Y>u4 LIw9M>/afl{');
define('NONCE_KEY',        'y|4{:O2Cn`FWlq?.pcD@`/-} #FD_%Gd<WNo9:^]1Es|t^.WT#U|Ct@kEgA:v&@e');
define('AUTH_SALT',        'G1@Trto9lR#(vGh7V4<KPe^Ob4#:R;(n0%</W4|G+4SH+,{?U)jlfZ8,4 y<HSB[');
define('SECURE_AUTH_SALT', ';ZHo9$i>u[-WBNO_8uYiWqqR@EsqCk_XIc|lUX[fp-c`}ulZ|0?nkbFE!=70$YN+');
define('LOGGED_IN_SALT',   'L=I:4o|6?/v3_/T{2(qndj)@Eq[c2;,+k 48bX!Z-B>mH<h|o/9.jOVSa)ikwzu2');
define('NONCE_SALT',       'NCc9qN*hW|+1%JhR*x)>:(5N`T69ENg=D-.D6q03J$MSt`i.%:$v8e9Lo8cFW-w,');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
