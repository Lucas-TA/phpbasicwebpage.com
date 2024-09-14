<?php

use JetBrains\PhpStorm\NoReturn;

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

    #[NoReturn] function error404(): void
    {
        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
        exit();
    }

    #[NoReturn] function error500(): void
    {
        header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
        exit();
    }
    #[NoReturn] function redirectTo($location): void
    {
        header("Location: " . urlFor($location));
        exit();
    }
    function isPostRequest(): bool
    {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    function isGetRequest(): bool
    {
        return $_SERVER['REQUEST_METHOD'] == 'GET';
    }
