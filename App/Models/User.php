<?php

namespace App\Models;

use App\Services\Db;
use Exception;

class User {
    public static function signin(array $fields) {
        $user = self::get($fields['login'])[0];

        if (self::checkPassword($fields['password'], $user['password'])) {
            $_SESSION['user'] = $user;
            return $user;
        }
    }
    
    public static function signup(array $fields) {
    }

    protected static function checkPassword(string $password, string $hash) {
        if (password_verify($password, $hash)) {
            return true;
        } else {
            throw new Exception('The password is wrong');
            die;
        }
    }

    protected static function get(string $login): array {
        $db = Db::getInstance();
        
        $sql = 'SELECT * FROM users WHERE login=:login';
        
        $user = $db::query($sql, '', ['login' => $login]);
        if (!$user) {
            throw new Exception('There\'s no user with login=' . $login);
            die;
        } else {
            return $user;
        }
    }

    protected static function add(array $fields): void {
        $login = trim($fields['login']);
        $password = password_hash(trim($fields['cost']), PASSWORD_BCRYPT);

        $fields = [
            'login' => $login,
            'password' => $password,
        ];

        
        $db = Db::getInstance();
        $sql = 'INSERT users (login, password) VALUES (:login, :password)';
        if (!$db::execute($sql, $fields)) {
            throw new Exception('Some error while registering. Check your fields');
        }
    }
}