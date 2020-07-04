<?php

namespace Controller;

use Model\Database\DB;

abstract class Controller
{
    public function __construct()
    {
        DB::connect();
    }
}
