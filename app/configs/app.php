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

        'DB' => '\Madphp\Src\Core\Db',
        'Cache' => '\Madphp\Src\Core\Cache',
        'View' => '\Madphp\Src\Core\View',
        'Route' => '\Madphp\Src\Core\Route',
        'Request' => '\Madphp\Src\Core\Request',
        'Response' => '\Madphp\Src\Core\Response',
        'Cookie' => '\Madphp\Src\Core\Cookie',
        'Input' => '\Madphp\Src\Core\Input',
        'Output' => '\Madphp\Src\Core\Output',

        'Config' => '\Madphp\Src\Core\Config',
        'Event' => '\Madphp\Src\Core\Event',
        'Log' => '\Madphp\Src\Core\Log',
    ),
);