<?php
// Grabs the URI and breaks it apart in case we have querystring stuff
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// Route it up!
$server_path = $_SERVER['REQUEST_URI'];
echo ' requested uri: ' . $server_path;
switch ($server_path) {
    case '/about':
        require __DIR__ . '/views/about.php';
        break;
    default:
        echo ' default';
        header('HTTP/1.0 404 Not Found');
        require __DIR__ . '/views/error.php';
        break;
}