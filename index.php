<?php
    session_start();

    require_once('./config.php');
    require_once(BASE_DIR . '/vendor/autoload.php');
    require_once('./routes.php');
    
    $cname = $_GET['querysystemurl'];
    $routerRes = \App\Services\Router::matchRoute($cname);
    $class = "\\App\\Controllers\\" . $routerRes['controller'];
    if (class_exists($class)) {
        $ctrl = new $class();
        $ctrl($routerRes['method'] ?? '', $routerRes['class'] ?? '');
    }
