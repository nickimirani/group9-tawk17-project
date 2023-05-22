<?php

// Check for a defined constant or specific file inclusion
if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('This file cannot be accessed directly.');
}

class ControllerBase
{

    protected $path_parts, $path_count, $query_params, $method, $body, $model, $home;

    public function __construct($path_parts, $query_params)
    {
        $this->path_parts = $this->removeEmptyStrings($path_parts);
        $this->query_params = $query_params;
        $this->method = $_SERVER["REQUEST_METHOD"];

        $this->path_count = count($this->path_parts);

        $this->body = $_POST;
        $this->home = getHomePath();
    }

    protected function viewPage($view, $status = 200)
    {
        http_response_code($status);

        header("Content-Type: text/html;charset=UTF-8");

        require __DIR__ . "/views/" . $view . ".php";

        die();
    }

    protected function notFound()
    {
        $this->viewPage("notFound", 404);
        die();
    }

    protected function redirect($url)
    {
        header('Location: ' . $url);
        die();
    }

    protected function error()
    {
        echo "ERROR!!";
        debug_print_backtrace();
        die();
    }

    private function removeEmptyStrings($arr)
    {
        return array_filter($arr, function ($str) {
            return trim($str) !== '';
        });
    }
}
