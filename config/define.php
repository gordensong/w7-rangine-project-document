<?php
/**
 * 自定义一些常量，可以项目中使用
 */

// Constants
! defined('DS') && define('DS', DIRECTORY_SEPARATOR);

// App name
! defined('APP_NAME') && define('APP_NAME', 'w7');

// Project base path
! defined('BASE_PATH') && define('BASE_PATH', dirname(__DIR__, 1));
! defined('APP_PATH') && define('APP_PATH', BASE_PATH. DIRECTORY_SEPARATOR. 'app');
! defined('RUNTIME_PATH') && define('RUNTIME_PATH', BASE_PATH. DIRECTORY_SEPARATOR. 'runtime');
! defined('CDN_URL') && define('CDN_URL', "//cdn.w7.cc/");

//应用常量
! defined('APP_AUTH_ALL') && define('APP_AUTH_ALL', 'all');
! defined('DOCUMENT_INFO') && define('DOCUMENT_INFO', 'document_info_');
! defined('DOCUMENT_INFO_CACHE_TIME') && define('DOCUMENT_INFO_CACHE_TIME', 31536000);
