<?php

namespace App\Controllers\Admin;

use App\Models\Category;
use App\Models\Guitar;

class Cat extends BaseAdmin {
    public function __invoke() {
        $this->view->guitars = Guitar::getAll();
        $this->view->cats = Category::getAll();
        $this->view->pageTitle = 'Category';
        $this->view->pageContent = $this->view->render('admin/cats');

        $this->displayBase();
    }
}