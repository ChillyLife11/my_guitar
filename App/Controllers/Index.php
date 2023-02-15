<?php


    namespace App\Controllers;


    use App\Models\Category;
    use App\Models\Guitar;

    class Index extends BaseController {
        public function __invoke() {

            $this->view->guitars = Guitar::getAll();
            $this->view->cats = Category::getAll();
            $this->view->pageTitle = 'Home page';
            $this->view->pageContent = $this->view->render('home');

            $this->displayBase();
        }
    }