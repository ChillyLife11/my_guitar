<?php


namespace App\Controllers\Admin;


use App\Models\Category;
use App\Models\Guitar;

class Index extends BaseAdmin {
    public function __invoke() {

        $this->view->guitars = Guitar::getAll();
        $this->view->cats = Category::getAll();
        $this->view->pageTitle = 'Home admin page';
        $this->view->pageContent = $this->view->render('admin/dashboard');

        $this->displayBase();
    }
}
