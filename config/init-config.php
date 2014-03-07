<?php
/**
 * config.php file
 *
 * Автоматическое подключение из Vendor, описывает архитектуру
 */

defined('ROOT')   or define('ROOT', (dirname(__DIR__)));
defined('BASE_DIR')   or define('BASE_DIR', (dirname(__DIR__)));
defined('HTML_DIR')   or define('HTML_DIR',   BASE_DIR . "/html");
defined('LOGS_DIR')   or define('LOGS_DIR',   BASE_DIR . "/logs");
defined('CACHE_DIR')  or define('CACHE_DIR',  BASE_DIR . "/cache");
defined('CONFIG_DIR') or define('CONFIG_DIR', BASE_DIR . "/config");
