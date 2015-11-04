<?php
// BACKEND CONFIG

// HTTP
define('HTTP_SERVER', 'http://subdomain.domain.com/admin/');
define('HTTP_CATALOG', 'http://subdomain.domain.com/');
define('HTTP_IMAGE', 'http://subdomain.domain.com/image/');
define('HTTP_ADMIN', 'http://subdomain.domain.com/admin/');

// HTTPS
define('HTTPS_SERVER', HTTP_SERVER);
define('HTTPS_IMAGE', HTTP_IMAGE);

// DIR
define('DIR_CATALOG', '/.../.../public_html/dow/catalog/');
define('DIR_APPLICATION', '/.../.../public_html/dow/admin/');
define('DIR_SYSTEM', '/.../.../public_html/dow/system/');
define('DIR_DATABASE', DIR_SYSTEM.'database/');
define('DIR_LANGUAGE', DIR_APPLICATION.'language/');
define('DIR_TEMPLATE', DIR_APPLICATION.'view/template/');
define('DIR_CONFIG', DIR_SYSTEM.'config/');
define('DIR_IMAGE', '/.../.../public_html/dow/image/');
define('DIR_CACHE', DIR_SYSTEM.'cache/');
define('DIR_DOWNLOAD', '/.../.../public_html/dow/download/');
define('DIR_LOGS', DIR_SYSTEM.'logs/');

// DB
define('DB_DRIVER', 'mysql');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', '...');
define('DB_PASSWORD', '...');
define('DB_DATABASE', '...');
define('DB_PREFIX', 'oc_');

