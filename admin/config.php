<?php
// BACKEND CONFIG

// HTTP
define('HTTP_SERVER', 'http://dow.sisalico.com/admin/');
define('HTTP_CATALOG', 'http://dow.sisalico.com/');
define('HTTP_IMAGE', 'http://dow.sisalico.com/image/');
define('HTTP_ADMIN', 'http://dow.sisalico.com/admin/');

// HTTPS
define('HTTPS_SERVER', HTTP_SERVER);
define('HTTPS_IMAGE', HTTP_IMAGE);

// DIR
define('DIR_CATALOG', '/home/maina18/public_html/dow/catalog/');
define('DIR_APPLICATION', '/home/maina18/public_html/dow/admin/');
define('DIR_SYSTEM', '/home/maina18/public_html/dow/system/');
define('DIR_DATABASE', DIR_SYSTEM.'database/');
define('DIR_LANGUAGE', DIR_APPLICATION.'language/');
define('DIR_TEMPLATE', DIR_APPLICATION.'view/template/');
define('DIR_CONFIG', DIR_SYSTEM.'config/');
define('DIR_IMAGE', '/home/maina18/public_html/dow/image/');
define('DIR_CACHE', DIR_SYSTEM.'cache/');
define('DIR_DOWNLOAD', '/home/maina18/public_html/dow/download/');
define('DIR_LOGS', DIR_SYSTEM.'logs/');

// DB
define('DB_DRIVER', 'mysql');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'valentine');
define('DB_PASSWORD', 'maina18');
define('DB_DATABASE', 'drinksonwheels');
define('DB_PREFIX', 'oc_');

