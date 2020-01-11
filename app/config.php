<?php
  # Database Configuration
    defined('DATABASE_HOST')    OR Define('DATABASE_HOST', 'localhost');
    defined('DATABASE_USER')    OR define('DATABASE_USER', 'root');
    defined('DATABASE_CODE')    OR define('DATABASE_CODE', 'root');
    defined('DATABASE_NAME')    OR define('DATABASE_NAME', 'mymarket');
  # Permissions
    defined('ENV')              OR define('ENV', 1); 
  # Server Configuration
    defined('SERVER_PORT')      OR define('SERVER_PORT', $_SERVER['SERVER_PORT']);
    defined('SERVER_PROTOCOL')  OR define('SERVER_PROTOCOL', $_SERVER['SERVER_PROTOCOL']);
    defined('DOCUMENT_ROOT')    OR define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);
    defined('REQUEST_METHOD')   OR define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);    
  # Error  Configuration
    error_reporting(E_ALL); 
    ini_set('display_errors', TRUE);
    defined('DEBUG_MODE')       OR define('DEBUG_MODE', 1);
  # Directory Pathing
    defined('BASEPATH')         OR define('BASEPATH', 'http://127.0.0.1/farmsby/');
    defined('APIPATH')          OR define('APIPATH', '');
    defined('APPPATH')          OR define('APPPATH', dirname( __FILE__ ));
  # Authentification and Device Data
    defined('VALID_USERNAME')   OR define('VALID_USERNAME', '');
    defined('VALID_PASSWORD')   OR define('VALID_PASSWORD', '');
    defined('DEVICE_IP')        OR define('DEVICE_IP', $_SERVER['REMOTE_ADDR']);
    defined('USER_AGENT')       OR define('USER_AGENT', getenv("HTTP_USER_AGENT"));
  # Secrets
    defined('TOKEN')            OR define('TOKEN', 'AAAAB3NzaC1yc2EAAADAQABAAACAQCzZlD5fMkWzER');
  # Date and Time Configurations
    defined('GLOBAL_DATE')      OR define('GLOBAL_DATE', date(DATE_RFC2822));
    defined('DEVICE_DATE')      OR define('DEVICE_DATE', date("Y-m-d"));