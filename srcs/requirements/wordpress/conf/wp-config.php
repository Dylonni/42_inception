<?php

define( 'DB_NAME',          getenv("SQL_DATABASE") );
define( 'DB_USER',          getenv("SQL_USER_LOGIN") );
define( 'DB_PASSWORD',      getenv("SQL_USER_PASSWORD") );
define( 'DB_HOST',          getenv("SQL_DOCKER_HOST") . ":" . getenv("SQL_DOCKER_PORT") );
define( 'DB_CHARSET',       getenv("SQL_CHARSET") );
define( 'DB_COLLATE',       getenv("SQL_COLLATE") );

define( 'AUTH_KEY',         'YOUR_KEY' );
define( 'SECURE_AUTH_KEY',  'YOUR_KEY' );
define( 'LOGGED_IN_KEY',    'YOUR_KEY' );
define( 'NONCE_KEY',        'YOUR_KEY' );
define( 'AUTH_SALT',        'YOUR_KEY' );
define( 'SECURE_AUTH_SALT', 'YOUR_KEY' );
define( 'LOGGED_IN_SALT',   'YOUR_KEY' );
define( 'NONCE_SALT',       'YOUR_KEY' );
define( 'WP_CACHE_KEY_SALT','YOUR_KEY' );

define( 'WP_CACHE', 		true );
define( 'WP_DEBUG', 		false );
define( 'WP_DEBUG_LOG', 	false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

$table_prefix = '42wp_';

require_once(ABSPATH . 'wp-settings.php');
