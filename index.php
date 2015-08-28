<?php

/**
 * 入口文件
 * @author 徐亚坤 hdyakun@sina.com
 */

define('ENVIRONMENT', 'development');

if (defined('ENVIRONMENT')) {
    switch (ENVIRONMENT) {
        case 'development':
            error_reporting(E_ALL);
        break;
    
        case 'testing':

        case 'production':
            error_reporting(0);
        break;

        default:
            exit('The application environment is not set correctly.');
    }
}

// 目录间隔符
define("DS", DIRECTORY_SEPARATOR);

// 根目录
define('BASEPATH', __DIR__);

$application_folder = 'app';
$application_view_folder = 'views';
$application_layout_folder = 'layouts';
$application_config_folder = 'configs';
$application_log_folder = 'logs';
$application_cache_folder = 'caches';

define('APP_FOLDER', $application_folder);
define('VIEW_FOLDER', $application_view_folder);
define('LAYOUT_FOLDER', $application_layout_folder);
define('CONFIG_FOLDER', $application_config_folder);
define('LOG_FOLDER', $application_log_folder);
define('CACHE_FOLDER', $application_cache_folder);

// 应用目录
define('APP_PATH', BASEPATH.DS.$application_folder);
// 应用视图目录
define('VIEW_PATH', APP_PATH.DS.$application_view_folder.DS);
// 应用配置目录
define('CONFIG_PATH', APP_PATH.DS.$application_config_folder.DS);
// 应用日志目录
define('LOG_PATH', APP_PATH.DS.$application_log_folder.DS);
// 应用缓存目录
define('CACHE_PATH', APP_PATH.DS.$application_cache_folder.DS);

// 加载文件函数
function import($filepath, $base = null, $key = null)
{
    static $paths;
    $keypath = $key ? $key.$filepath : $filepath;

    if (!isset($paths[$keypath])) {
        if (is_null($base)) {
            $base = BASEPATH.'/';
        } else {
            $base = rtrim($base, '/').'/';
        }
        $parts = explode('.', $filepath);
        array_pop($parts);
        $path = str_replace('.', DS, $filepath);
        $paths[$keypath] = include $base.$path.'.php';
    }
    return $paths[$keypath];
}

// bootstrap
import('bootstrap.autoload');
import('bootstrap.start');
// events
import('events', APP_PATH);
// CLI 请求
if (is_cli()) {
    if ($argv[1]) {
        $re = import('cli.' . $argv[1]);
        if (!$re) {
            exit("CLI 脚本不存在。\r\n");
        }
    } else {
        exit("CLI 脚本名称缺失。\r\n");
    }
} else {
    // Routes
    import('routes', APP_PATH);
}