<?php 

namespace wfm;
// патерн синглтон 
use ErrorException;
use RedBeanPHP\R;
class Db {
    use TSingleton;

    private function __construct()
    {
        $db = require_once CONFIG. '/config_db.php';
        R::setup($db['dsn'], $db['user'], $db['password']);
        if(!R::testConnection()) {
            throw new ErrorException('No connection to DB', 500);
        }
        R::freeze( TRUE );
        if(DEBUG) {
            R::debug(true, 3);
        }
    }
}    