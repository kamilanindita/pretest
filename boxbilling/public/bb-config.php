<?php 
return array (
  'debug' => false,
  'salt' => '5635be394627506955981bcc4e485140',
  'url' => 'http://127.0.0.1:8004/',
  'admin_area_prefix' => '/bb-admin',
  'sef_urls' => true,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'locale_date_format' => '%A, %d %B %G',
  'locale_time_format' => ' %T',
  'path_data' => '/var/www/public/bb-data',
  'path_logs' => '/var/www/public/bb-data/log/application.log',
  'log_to_db' => true,
  'db' => 
  array (
    'type' => 'mysql',
    'host' => 'db-service',
    'name' => 'niagahoster',
    'user' => 'root',
    'password' => 'root',
  ),
  'twig' => 
  array (
    'debug' => true,
    'auto_reload' => true,
    'cache' => '/var/www/public/bb-data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
    'throttle_delay' => 2,
    'rate_span_login' => 60,
    'rate_limit_login' => 20,
  ),
);