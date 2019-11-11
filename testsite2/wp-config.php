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
define('DB_NAME', 'testsite2');

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
define('AUTH_KEY',         ']RPez]_{+h}Va7dUN_(lzz+PHk[WWk03`&_io>+3PBo]e]hP{mGw6TBt:n0}4JGB');
define('SECURE_AUTH_KEY',  '/OYKoge2oX4}!h6Qb9CaV1%VdE<>TR(y=v~DhU$G!g0KW,rIH3f6iXt57l/;{33_');
define('LOGGED_IN_KEY',    'b*$PWh68hds^9AO!}[wG9)x=c%5ggtbo>zFoj|/p#:Y~Y/O5R6[#vlM+/9&VyW^Y');
define('NONCE_KEY',        '2S{>7^ofNoc2g;O49fRtQY7TDD~4bB=w(03F5-.z(~6[7VKi(,*y%p-J%q9@)V`:');
define('AUTH_SALT',        ':dtVW/q:gj+R;q-9h1}HdG3+wr)v4{M_g}SI!}0+duZ.lfp s>$q*ddv;ZA:jB3J');
define('SECURE_AUTH_SALT', '9z7kW{YXsC~Ap??Ls{Q<AbBZ*(lE@cC+|eD/q290l_N{a/1joc a_RoT=RVx$D}Y');
define('LOGGED_IN_SALT',   '$c`-[e-<mWl1m~ 7$^^s(t9>3^l)IGJA#,vNd) hcKL?/w6jZc/xJu 7- -ae;h8');
define('NONCE_SALT',       'Gz `<-j=V9Yv+4&N.3P[SI/`~*o,(X9oNQhv8h@)p|S(o3Cgmb9qWAZv<&%DFn6`');

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
