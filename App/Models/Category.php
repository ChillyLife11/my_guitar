<?php


    namespace App\Models;


    use App\Services\Db;

    class Category {
        public static function getAll() {
            $db = Db::getInstance();
            $sql = "SELECT * FROM cats";
            return $db::query($sql, self::class);
        }

        public static function getByName(string $name) {
            $db = Db::getInstance();
            $sql = "SELECT * FROM cats WHERE type=:type";
            return $db::query($sql, self::class, ['type' => $name]);
        }
    }