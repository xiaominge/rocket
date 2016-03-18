<?php
/**
 * Created by PhpStorm.
 * User: xuyakun
 * Date: 16/3/18
 * Time: 下午10:50
 */

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class AdminIndexTestAction extends AdminIndexController
{

    public function __construct()
    {
        parent::__construct();
        $this->model = 'article';
    }

    public function call()
    {
        // $article = new Article();
        $page = Input::get('p');
        $articles = ArticleModel::lists();
        $auths = AuthModel::lists();
        View::make('index')
            ->with('article', $articles[0])
            ->with('title', $articles[0]->title . 'test')
            ->with('auths', $auths)
            ->with('page', $page)
            ->show();
    }
}