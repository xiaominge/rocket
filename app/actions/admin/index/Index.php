<?php

namespace app\action\admin\index;
use app\controller\admin\IndexController;
use app\model\Article as ArticleModel;
use app\model\Auth as AuthModel;
use Input;
use View;

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class IndexAction extends IndexController
{

    public function __construct()
    {
        parent::__construct();
        $this->model = 'article';
    }

    public function exec()
    {
        $page = Input::get('p');
        $articles = ArticleModel::lists();
        $auths = AuthModel::lists();
        View::make('index')
            ->with('article', $articles[0])
            ->with('title', $articles[0]->title . 'index')
            ->with('auths', $auths)
            ->with('page', $page)
            ->show();
        echo microtime(true) - START_TIME;
        echo "<br>";
        echo memory_get_usage() - START_USAGE_MEMORY;exit();
    }
}