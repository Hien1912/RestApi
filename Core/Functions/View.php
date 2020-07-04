<?php

function view($view)
{
    $view = str_replace(".", "\\", $view);

    return require dirname(__DIR__, 2) . "\\Views\\$view.php";
}
