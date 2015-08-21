<?php

namespace Models\Blog;

/**
* Article Model
*/

class Article extends Base
{
    const table = 'l_articles';
    
    public static $defaultSqlMap = array('table' => self::table);

    public static function lists()
    {
    	return self::getDb()->fetchAll(Sql\Article::getList, self::$defaultSqlMap);
    }
}