<?php

namespace Controller;

use Core\Response;
use Model\HomeModel;

class HomeController extends Controller
{
    public function getAll()
    {
        $data = HomeModel::getAll();

        return Response::json($data, 200);
    }

    public function findById()
    {
        return view("index");
    }
}
