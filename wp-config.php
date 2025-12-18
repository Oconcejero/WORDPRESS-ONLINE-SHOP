<?php
define('DB_NAME', 'if0_40665252_axzapas');
define('DB_USER', 'if0_40665252');
define('DB_PASSWORD', 'Nt8phprZF5pNYQ'); // pon la buena
define('DB_HOST', 'sql104.infinityfree.com');

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

$table_prefix = 'SERVMASK_PREFIX_';

define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
@ini_set('display_errors', 0);



if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
