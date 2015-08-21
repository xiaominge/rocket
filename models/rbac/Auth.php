<?php

namespace Models\Rbac;

/**
* Auth Model
*/

class Auth extends Base
{
    const table = 'rbac_auth';
    
    public static $defaultSqlMap = array('table' => self::table);

    public static function lists()
    {
    	return self::getDb()->fetchAll(Sql\Auth::getList, self::$defaultSqlMap);
    }
}