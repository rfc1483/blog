<?php

// load and initialize any global libraries
require_once 'model.php';
require_once 'controllers.php';

// route the request internally
$uri = $_SERVER['REQUEST_URI'];
echo $uri;
if ($uri == '/blog/index.php') {
    list_action();
} elseif ($uri == '/blog/index.php/show.php' && isset($_GET['id'])) {
    echo "test";
    show_action($_GET['id']);
} else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}