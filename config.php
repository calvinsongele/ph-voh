<?php 

//constants
define('HASH_GENERAL_KEY', 'NoH@2king');

define('HASH_PASSWORD_KEY', 'IamaVeryStrongPas#@word?95');

//database
define('DB_TYPE', 'mysql'); 
define('DB_HOST', 'localhost');
define('DB_NAME', 'amazon');
define('DB_USER', 'root');
define('DB_PASS', '');

//paths
//define('URL', 'http://localhost:8011/');
$root = getenv('DOCUMENT_ROOT');
define('LIBS', $root . '/libs/');
define('ROOT', getenv('DOCUMENT_ROOT') . '/');