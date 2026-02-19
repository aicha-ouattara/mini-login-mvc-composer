<?php
require 'vendor/autoload.php';

use App\Controllers\UserController;

$controller = new UserController();
$action = $_GET['action'] ?? 'login';

switch ($action) {
    case 'register': $controller->register(); break;
    case 'profile': $controller->profile(); break;
    case 'edit': $controller->edit(); break;
    case 'delete': $controller->delete(); break;
    case 'logout': $controller->logout(); break;
    default: $controller->login();
}
