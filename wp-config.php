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
define( 'DB_NAME', 'testWp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'PWz9UA{9/!-CDcB-nXldr0GWMI+6mh+bG|Ql4e# d0R^DN)I[l-2vRP/#4j)8qYZ' );
define( 'SECURE_AUTH_KEY',  'y0m))T;vy([Yf~9O(/o[xc/8$A|9JYB9$2`]WB3BN};-o=d[YYY,YRJ2c<>OS@+M' );
define( 'LOGGED_IN_KEY',    '8{wcPpzZ_!_%d|G[/$BA@Kaad5TLqD^73EyOXb+u)sy=H` r_(?lD7*9y1<-Tdbd' );
define( 'NONCE_KEY',        '.yS~;!Swe8N5-SIVhOK<tzbROGB8%U)u,~gf`)7uXaEibz|J8Wa+dP{kx9h.JUpk' );
define( 'AUTH_SALT',        ';4./$I8H04w!W-8$J.P0<jbQ|Q1>6>Y;(>Q_]ZcA9a]|SAx6K?8%!r)@isgCCL`S' );
define( 'SECURE_AUTH_SALT', 'z@HJ*}NlLkG:SGaLY790k, lW;VNj:~D&[t0D5?fqQ#ttMbS58$zlnr`3t#7lJ]y' );
define( 'LOGGED_IN_SALT',   'z70/310FtFVwXqeC7v1> YqFJvCq$T)>0]$7g R[2X{^5Z&s~C9_HhCG-x=n[we|' );
define( 'NONCE_SALT',       'N/ q-*h&x:_/kh|}$_VcVf3iE_> e^*:Z6qm!Qj5WMJ3X@<L:@HygN1)OL`M1gH;' );

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
