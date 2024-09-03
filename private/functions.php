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