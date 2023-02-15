<?php


    namespace App\Services;


    class View {
        
        public array $data = [
            'pageTitle' => '',
            'pageContent' => ''
        ];

        public function __set(string $name, $value): void {
            $this->data[$name] = $value;
        }
        public function __get(string $name) {
            return $this->data[$name] ?? null;
        }

        public function assign(string $key, mixed $val): void {
            $this->data[$key] = $val;
        }

        public function render(string $templateName, array $params = []): string {
            ob_start();
            include(BASE_DIR . "/App/Views/" . $templateName . '.php');
            return ob_get_clean();
        }
    }