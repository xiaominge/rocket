<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * 路由
 * @author 徐亚坤 hdyakun@sina.com
 */

Route::get('/', 'IndexController@index');
Route::get('/(:num)', 'IndexController@index');


Route::error(function () {
    throw new Exception("404 Not Found");
});

Route::dispatch();