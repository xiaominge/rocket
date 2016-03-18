<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

use \MadphpDao\Blog\Article;

/**
 * 模型类
 * @author 徐亚坤 hdyakun@sina.com
 */

class ArticleModel
{
    public function __construct()
    {

    }

    public static function lists()
    {
        return Article::getAll();
    }

}