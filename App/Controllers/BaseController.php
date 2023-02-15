<?php


    namespace App\Controllers;

    use App\Services\View;

    abstract class BaseController {
        public View $view;
        
        public function __construct() {
            $this->view = new View();
        }
        protected function displayBase() {
            echo $this->view->render('shablon/base');
        }
        abstract public function __invoke();
    }