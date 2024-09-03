<?php
    //Assign file paths to PHP constants
    //__FILE__ returns the current path to this file
    //dirname() return the path to the path to the parent directory
    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    const PUBLIC_PATH = PROJECT_PATH . "/public";

    const SHARED_PATH = PRIVATE_PATH . "/shared";

    //Assign the root URL to PHP constant
    // * Do not need to iclude the domain
    // * Use the same document root as webserver
    $public_end = strpos($_SERVER['SCRIPT_NAME'], "/public");
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
    define("WWW_ROOT", $doc_root);
