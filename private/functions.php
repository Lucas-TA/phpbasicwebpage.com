<?php
    function urlFor($script_path): string
    {
        if ($script_path[0] !== '/')
        {
            $script_path = '/' . $script_path;
        }
        return WWW_ROOT . $script_path;
    }
    function u($script_path=""): string
    {
        return urlencode($script_path);
    }
    function rawU($script_path=""): string
    {
        return rawurlencode($script_path);
    }
    function h($string=""): string
    {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }

    function error404()
    {
        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
        exit();
    }

    function error500()
    {
        header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
        exit();
    }
    function redirectTo($location)
    {
        header("Location: " . urlFor($location));
        exit();
    }