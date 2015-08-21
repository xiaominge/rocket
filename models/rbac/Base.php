<?php

namespace Models\Rbac;

/**
* Base Model
*/

class Base
{
    public static $dbname = 'rbac';

	public static $db = null;

    protected static function getDb()
    {
        if (self::$db === null) {
            self::$db = \Db::pdo(self::$dbname);
            self::$db->setFetchStyle(\PDO::FETCH_CLASS);
        }
		return self::$db;
    }

}