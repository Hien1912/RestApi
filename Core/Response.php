<?php

namespace Core;

class Response
{
    /**
     * Static json
     * 
     * @param string|array $data
     * @param int $status_code
     * @param int $status_code
     * @param string|array|null $header
     * @return exit
     */
    public static function json($data, $status_code, $header = null)
    {
        if ($header && is_array($header)) {
            foreach ($header as $key => $value) {
                header("$key: $value");
            }
        }

        header(Response::status($status_code));
        header("Content-Type: application/json");
        echo json_encode($data);
        die();
    }

    private static function status($status_code)
    {
        $status = array(
            200 => "OK",
            404 => "Not Found",
            405 => "Method Not Allowed",
            500 => "Internal Server Error"
        );
        return "HTTP/1.1 " . $status_code . " " . $status[$status_code];
    }
}
