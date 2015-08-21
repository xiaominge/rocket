<?php
        
$config['mysql']['charset'] = 'UTF8';
$config['mysql']['persistent'] = TRUE;
$config['mysql']['collation'] = 'utf8_unicode_ci';
$config['mysql']['timeout'] = 3;


$config['database']['blog']['username'] = 'root';
$config['database']['blog']['password'] = 'root';
$config['database']['blog']['write'] = '127.0.0.1:3306';
$config['database']['blog']['read'] = '127.0.0.1:3306';
$config['database']['blog']['dbname'] = 'blog';

$config['database']['rbac']['username'] = 'root';
$config['database']['rbac']['password'] = 'root';
$config['database']['rbac']['write'] = '127.0.0.1:3306';
$config['database']['rbac']['read'] = '127.0.0.1:3306';
$config['database']['rbac']['dbname'] = 'rbac';

return $config;
