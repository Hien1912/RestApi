<?php

namespace Model;

abstract class Model
{
    protected static $con;

    final static function connect($con)
    {
        Model::$con = $con;
    }

    abstract static function getAll($fill = "*");

    abstract static function findById($id);
}
