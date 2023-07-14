<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wptheme' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'phpUser' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'php' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vRVdu`AN9N7tMUt? {AP]6;PGjty<w++z[*I&95QrB/u&MJ#4Jl&lA/3{5p9%Yb|' );
define( 'SECURE_AUTH_KEY',  'P9{EnabZGRonGt;]gN>Aq]X:]0V>#Xhx>UXiuEO`Vx#NNS*O2KUY}iVCAU,w{}%]' );
define( 'LOGGED_IN_KEY',    '>sc{3IK}+#||D2V;&pQlSyxTmUFVhh}FA}YXyx]<.8z>+^[u)$(u5eolER@t~+L!' );
define( 'NONCE_KEY',        'D f-s@ D {#yvobHi?:jb0fqgQ$@5ld>4;IZb3g^IYTa?~8qSA_ KVj[Z(glS4tm' );
define( 'AUTH_SALT',        '-6GV$g*&5RPwzGfFE(JYH~=@HU!:1CV-8UWxArx2VrGm)r,0v9?&/]N9}Y8c$dj9' );
define( 'SECURE_AUTH_SALT', '(N;1jn=i0:53 SYui,$G3+1FRoTDI` b{_Gy3s4[-!eK4sVi=XtYP7&7kq/p4j=S' );
define( 'LOGGED_IN_SALT',   '$^dO5FA|Ia51mjPY2b&r6#V%^I]V1LHqW@oDNvX;}p4BcL5yJTWO=L*GtjakjX(U' );
define( 'NONCE_SALT',       '7Y^cI5IoUCe,r~}nY[hg4::344X~y_;!(rdBrn*h[05v+VH}Y)p3Nn.GGMH3]xf9' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
