<?php
    $documentRoot = __DIR__ . '/public_html';
    $port = 8000;

    if (php_sapi_name() === 'cli-server') {
        $url = parse_url('http://localhost:' . $port . '/' . $_SERVER['PATH_INFO']);
        $path = $url['path'];

        if (realpath($documentRoot . $path) == false || !is_file($documentRoot . $path)) {
            return false;
        }

        $ext = strtolower(pathinfo($documentRoot . $path, PATHINFO_EXTENSION));
        if ($ext == '') {
            $path .= '.php';
        }

        if ($path[0] == '/') {
            $path = substr($path, 1);
        }

        $_SERVER['PATH_INFO'] = $path;
        include $documentRoot . $path;
    } else {
        echo "This script can only be run from the command line.\n";
    }
?>