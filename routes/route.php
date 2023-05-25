<?php
require_once __DIR__ . '/../api/APIReader.php';

function handleRequest($request)
{
    $apiReader = new APIReader();
    $users = $apiReader->getUsers();

    header('Content-Type: application/json');
    echo json_encode($users, JSON_PRETTY_PRINT);
}

$uri = isset($_GET['route']) ? '/' . $_GET['route'] : '/';
$method = $_SERVER['REQUEST_METHOD'];

// Define the routes and their respective actions
$routes = [
    '/users' => [
        'method' => 'GET',
        'action' => 'handleRequest'
    ]
];

// Check if the requested route exists
if (isset($routes[$uri])) {
    $route = $routes[$uri];

    // Check if the request method matches the expected method for the route
    if ($method === $route['method']) {
        $action = $route['action'];
        $action($_REQUEST);
        exit();
    }
}

// If the route is not found or the method is invalid, display an error message
http_response_code(404);
echo 'Endpoint not found';
exit();

