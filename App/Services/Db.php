<?php

    namespace App\Services;

    class Db {
        protected static ?\PDO $dbh = null;
        public static ?self $instance = null;

        protected function __construct() {
            try {
                self::$dbh = new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, [
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
                ]);
            } catch (\PDOException $e) {
                echo 'DB Connect Error: ' . $e->getMessage();
            }
        }

        public static function getInstance() : self {
            if (self::$instance === null) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        public static function query(string $sql, string $class = '', array $fields = []) {
            $query = self::$dbh->prepare($sql);
            $query->execute($fields);
            if ($class === '') {
                return $query->fetchAll();
            } else {
                return $query->fetchAll(\PDO::FETCH_CLASS, $class);
            }
        }

        public static function execute(string $sql, array $fields = []): bool {
            $query = self::$dbh->prepare($sql);
            $query->execute($fields);

            if ($query->rowCount() <= 0) {
                return false;
            }
            return true;
        }
    }