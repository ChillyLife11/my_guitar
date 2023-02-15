<?php


    namespace App\Services;


    class Router {
        public static array $routes = [];
        public static ?self $instance = null;

        public static function getInstance(): self {
            if (self::$instance === null) {
                self::$instance = new self();
            }
            return self::$instance;
        }
        protected function __construct() {}

        public static function addRoute($pattern, string $controller, string $method = '', string $class = '', bool $allowedWithoutSignin = true): void {
            self::$routes[] = [
                'pattern' => $pattern,
                'controller' => $controller,
                'method' => $method,
                'class' => $class,
                'allowedWithoutSignin' => $allowedWithoutSignin
            ];
        }

        public static function matchRoute(string $cname): ?array {
            $res = [
                'controller' => 'e404',
            ];

            $matches = [];
            foreach (self::$routes as $route) {
                if (preg_match($route['pattern'], $cname, $matches)) {
                    $user = $_SESSION['user'] ?? null;
                    if ($route['allowedWithoutSignin']) {
                        $res['controller'] = $route['controller'];
                        if ($route['method'] !== '') $res['method'] = $route['method'];
                        if ($route['class'] !== '') $res['class'] = $route['class'];
                    } else {
                        header('Location: ' . BASE_URL . '/admin/signin');
                    }
                    break;
                }
            }
            return $res;
        }
    }