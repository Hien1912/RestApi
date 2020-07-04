<?php

namespace Model\Database;

use Model\Model;
use PDO;
use PDOException;

class DB
{
    public static function connect()
    {
        $cf = require_once __DIR__ . "./config.php";
        $dsn = $cf['driver'] . ":host=" . $cf['host'] . ";dbname=" . $cf['dbname'] . ";charset=" . $cf['charset'];

        $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true];

        try {
            $con = new PDO($dsn, $cf['user'], $cf['pass'], $cf['option']);
            Model::connect($con);
        } catch (PDOException $e) {
            dd($e->getMessage());
        }
    }
}
