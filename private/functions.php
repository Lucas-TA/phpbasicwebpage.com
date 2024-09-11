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
    function extracted(): void
    {
        if (isset($_GET["subjects"]))
        {
            if (isPostRequest()) {
                $menu_name = $_POST['menu_name'] ?? '';
                $position = $_POST['position'] ?? '';
                $visible = $_POST['visible'] ?? '';

                echo "Form parameters<br />";
                echo "Menu name: " . $menu_name . "<br />";
                echo "Position: " . $position . "<br />";
                echo "Visible: " . $visible . "<br />";
            } else {
                redirectTo(urlFor('/staff/subjects/new.php'));
            }
        } elseif (isset($_GET["pages"])) {
            if (isPostRequest()) {
                $page_name = $_POST['page_name'] ?? '';
                $position = $_POST['position'] ?? '';
                $visible = $_POST['visible'] ?? '';

                echo "Form parameters<br />";
                echo "Menu name: " . $page_name . "<br />";
                echo "Position: " . $position . "<br />";
                echo "Visible: " . $visible . "<br />";
            } else {
                redirectTo(urlFor('/staff/pages/new.php'));
            }
        }


    }
