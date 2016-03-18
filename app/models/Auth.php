<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

use \MadphpDao\Rbac\Auth;

/**
 * 模型类
 * @author 徐亚坤 hdyakun@sina.com
 */

class AuthModel
{
    public function __construct()
    {

    }

    public static function lists()
    {
        return Auth::getAll();
    }

}