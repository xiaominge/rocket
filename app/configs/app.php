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
        'Format' => '\Madphp\Core\Support\Format',

        'DB' => '\Madphp\Core\Db',
        'Cache' => '\Madphp\Core\Cache',
        'View' => '\Madphp\Core\View',
        'Route' => '\Madphp\Core\Route',
        'Request' => '\Madphp\Core\Request',
        'Response' => '\Madphp\Core\Response',
        'Cookie' => '\Madphp\Core\Cookie',
        'Input' => '\Madphp\Core\Input',
        'Output' => '\Madphp\Core\Output',

        'Config' => '\Madphp\Core\Config',
        'Event' => '\Madphp\Core\Event',
        'Log' => '\Madphp\Core\Log',

        'Html' => '\Madphp\Core\Html',
    ),
);