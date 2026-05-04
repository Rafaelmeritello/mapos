<?php

defined('BASEPATH') or exit('No direct script access allowed');

$active_group = 'default';
$query_builder = true;
$db['default'] = [
    'dsn' => $_ENV['DB_DSN'] ?? '',
'hostname' => getenv('DB_HOSTNAME') ?: 'db_mapos',
'username' => getenv('DB_USERNAME') ?: 'mapos',
'password' => getenv('DB_PASSWORD') ?: 'mapos_pass',
'database' => getenv('DB_DATABASE') ?: 'mapos_db',
    'dbdriver' => $_ENV['DB_DRIVER'] ?? 'mysqli',
    'dbprefix' => $_ENV['DB_PREFIX'] ?? '',
    'pconnect' => false,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => false,
    'cachedir' => '',
    'char_set' => $_ENV['DB_CHARSET'] ?? 'utf8',
    'dbcollat' => $_ENV['DB_COLLATION'] ?? 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => false,
    'compress' => false,
    'stricton' => false,
    'failover' => [],
    'save_queries' => true,
];
