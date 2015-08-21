<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * 控制器基类
 * @author 徐亚坤 hdyakun@sina.com
 */

class BaseController
{
    public function __construct()
    {
        $config = import('app.configs.app');
        header("content-type:text/html; charset=".$config['charset']);
    }
}