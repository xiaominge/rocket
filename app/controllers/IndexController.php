<?php

use \Models\Blog\Article;
use \Models\Rbac\Auth;

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * 首页控制器
 * @author 徐亚坤 hdyakun@sina.com
 */

class IndexController extends BaseController
{
    public function __construct()
    {
        $this->model = 'article';
        parent::__construct();
    }

    public function index()
    {
        // $article = new Article();
        $page = Input::get('p');
        $articles = Article::lists();
        $auths = Auth::lists();
        View::make('index')
            ->with('article', $articles[0])
            ->with('auths', $auths)
            ->with('page', $page)
            ->show();
    }
}