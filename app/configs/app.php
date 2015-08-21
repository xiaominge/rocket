<?php

if(!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * 系统配置
 * @author 徐亚坤 hdyakun@sina.com
 */

return array(
    // 应用URL
    'base_url' => 'http://localhost/project/rocket/',
    // 时区设置
    'timezone' => 'Asia/Shanghai',

    'charset' => 'UTF-8',

    'aliases' => array(
        'Format' => '\Madphp\Src\Core\Support\Format',
        'View' => '\Madphp\Src\Core\View',
        'Route' => '\Madphp\Src\Core\Route',
        'Event' => '\Madphp\Src\Core\Event',
        'Config' => '\Madphp\Src\Core\Config',
        'Log' => '\Madphp\Src\Core\Log',

        'DB' => '\Madphp\Src\Core\Db',
        'Response' => '\Madphp\Src\Core\Response',
    ),
);