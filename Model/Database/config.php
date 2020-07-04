<?php

return [
    "driver"    => "mysql",
    "host"      => "localhost",
    "dbname"    => "api",
    "user"    => "root",
    "pass"    => "",
    "charset"   => "utf8",
    "option"    => [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => true
    ]
];
