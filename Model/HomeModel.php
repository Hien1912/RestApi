<?php

namespace Model;

use PDO;
use Model\Model;

class HomeModel extends Model
{
    protected static $table = "students";
    protected static $fillable = ["name", "phone", "email", "address", "skill", "favourite"];

    public static function getAll($fill = "*")
    {
        $fill = is_array($fill) ? implode(", ", $fill) : $fill;
        $table = HomeModel::$table;

        $sql = "SELECT $fill FROM $table";
        return Model::$con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById($id)
    {
    }
}
