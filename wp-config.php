<?php
/**
 * The base configuration for WordPress
 *
 * @package WordPress
 */

// ** MySQL settings ** //
define('DB_NAME', 'zeabur');
define('DB_USER', 'root');
define('DB_PASSWORD', 'VNte97gGcAyuqF32K5T8z0sp4QMZjH61');

/**
 * MUHIM !!!
 * Zeabur ichida PORT yozilmaydi
 * Tashqi host ishlatilmaydi
 * MySQL SERVICE NOMI yoziladi
 */
define('DB_HOST', 'mysql');

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// Authentication Unique Keys and Salts.
define('AUTH_KEY',         'b7U@Ma4GT8lzj8T5!NfsqAZc^kQ)yxM*MzF3N&*u2AoRm^XO4Vw5)9NG9(9%)Qa&');
define('SECURE_AUTH_KEY',  'H#qpORb0)!C82wwIYjpNFA**wyg8hMdLo1VTwo8ruj2gEWfmZPqJ#u7*BoysQhTP');
define('LOGGED_IN_KEY',    's&JDB!ja5go%7vPt4fgK@8Ql7mdb3oaUF8jD%WT))&lxDVADN#NxaC)I%BC(UXbn');
define('NONCE_KEY',        'MgCmI%hj7JQJMrbtKT34dXYT))iWL0vyypNxgpqaU&hZw0rfXF#RY*2wTXnY7@dT');
define('AUTH_SALT',        'EuHln@jhDJTO1Pzq(bF%ubg@Nd%(GlY3!m1Ao0D(d#pe(5n@0QCE2e5r7(fRm8Mi');
define('SECURE_AUTH_SALT', 'UiKVH2nkGNVUR@52YK^1OPA1YcUYlNa7WVNF00@3yaIAKwCJD8WHz4&foEfUK@fT');
define('LOGGED_IN_SALT',   'XdyRbS2zGOcb7tckGqvEtDoMHgG2t4Ig4#%Z1JTO3mNugaq&i*SFe3vv%@!5m%Am');
define('NONCE_SALT',       'edxcDfnbjI1X%PNEQufwPM^h8O!lgHCkfM5#ghMQPqZ3e7gnvs3kEtzb^MuRXk%u');

// Table prefix
$table_prefix = 'wp_';

// Debug
define('WP_DEBUG', false);

// Absolute path
if ( ! defined('ABSPATH') ) {
    define('ABSPATH', __DIR__ . '/');
}

// WordPress setup
require_once ABSPATH . 'wp-settings.php';

// Extra
define('WP_ALLOW_MULTISITE', true);
define('FS_METHOD', 'direct');
