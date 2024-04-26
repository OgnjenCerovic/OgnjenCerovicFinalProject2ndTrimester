<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// place to store all routes
$routes = [
    '/' => 'controllers/auth/login.php',
    '/home' => 'controllers/pages/mainPage.php',
    '/about' => 'controllers/pages/about.php',
    '/menu' => 'controllers/pages/menu.php',
    '/contact' => 'controllers/pages/contact.php',
    '/order' => 'controllers/pages/order.php',
    '/logout' => 'controllers/auth/logout.php'
];

// abort function
function abort($code = 404)
{
    http_response_code($code);
    die();
}

// check if the route exists
function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);