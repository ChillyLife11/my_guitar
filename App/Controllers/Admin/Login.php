<?php

namespace App\Controllers\Admin;

class Login extends BaseAdmin {
    public function __invoke() {
        unset($_SESSION['user']);
        header('Location: ' . BASE_URL . '/admin');
    }
}
