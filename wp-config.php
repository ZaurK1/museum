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
define('DB_NAME', 'vh201010_elbrusmuseum');

/** Имя пользователя MySQL */
define('DB_USER', 'vh201010_museum');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'museum');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '2g}v^J-{.;Uxh]98udm6Pd1U|Kq+?X.9:`#olRWg.>}%ArZEvhc4ATcf8V+Z65*o');
define('SECURE_AUTH_KEY',  'O3^tS&y@]K~JP|Ux2{SmY|%7@oOh*/S-.`+B[sMc,c9|7cNR<W~:-c<<@.|XA~q6');
define('LOGGED_IN_KEY',    ')l+Rb,F9-lwF+_Uo9k]OF{+jeIK_P.xXa5}}vzq0m|^-sG$Z_]!R8tI%~^fT|(%|');
define('NONCE_KEY',        'XdF1CSD{AL><GfBy@?)hh$cE(Q!LV5USq*kn3K|m`cVQp7~|$5x&kJg@2Patch[T');
define('AUTH_SALT',        '^C(m1p| Cy=-<T)>etu,4X_/CSpSyCUnH9R|{ru2(%,<cfn5apFk]++fL.>;?]x$');
define('SECURE_AUTH_SALT', 'V+bQ.@mG02CPUW.qtv3Vsic2Cw<G2|<~&yfp-2aJUMu$Eg^M|9hXx&;N}k({R6qp');
define('LOGGED_IN_SALT',   '*!@vMHcy(76+WW2^5sC][o]K?98U1(ci.Yq [3-T~j0V4gP[(<f4sB2.fV}E)z2)');
define('NONCE_SALT',       '*?=;g@&$yy8?#gBNfk[7oD$n5qs|,:,.QO9y/PXm%/|VIO4f!rf-Lrc9nM|00c+&');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'ms_';

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

define('WP_POST_REVISIONS', false);

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
