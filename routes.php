<?php
    use App\Services\Router;

    // Main site
    Router::addRoute('/^\/?$/', 'Index');
    Router::addRoute('/^guitars\/?$/', 'Guitar');
    Router::addRoute('/^guitars\/electro\/?$/', 'Electro');
    Router::addRoute('/^guitars\/acoustic\/?$/', 'Acoustic');



    // admin
    Router::addRoute("/^admin\/?$/", 'Admin\Index', '', '', false);
    Router::addRoute("/^admin\/users?$/", 'Admin\Users', '', '', false);
    
    Router::addRoute("/^admin\/add\/?$/", 'Admin\Add', '', '', false);
    Router::addRoute("/^admin\/edit\/?$/", 'Admin\Edit', '', '', false);
    Router::addRoute("/^admin\/cats\/?$/", 'Admin\Cat', '', '', false);
    
    Router::addRoute("/^admin\/actions\/delete$/", 'Admin\Actions', 'delete', 'Guitar', '', false);
    Router::addRoute("/^admin\/actions\/add$/", 'Admin\Actions', 'add', 'Guitar', '', false);
    Router::addRoute("/^admin\/actions\/edit$/", 'Admin\Actions', 'edit', 'Guitar', '', false);
    Router::addRoute("/^admin\/actions\/signin$/", 'Admin\Actions', 'signin', 'User');
    Router::addRoute("/^admin\/actions\/signup$/", 'Admin\Actions', 'signin', 'User');

    Router::addRoute("/^admin\/signup\/?$/", 'Admin\Signup', '', '', 'User');
    Router::addRoute("/^admin\/signin\/?$/", 'Admin\Signin', '', '', 'User');
    Router::addRoute("/^admin\/logout\/?$/", 'Admin\Logoout', '', '', 'User');
