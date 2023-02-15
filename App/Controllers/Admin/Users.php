<?php

namespace App\Controllers\Admin;

use App\Models\User;

class Users extends BaseAdmin {
    public function __invoke() {

        // $this->view->users = User::;
        $this->view->pageTitle = 'Home admin page';
        $this->view->pageContent = $this->view->render('admin/dashboard');

        $this->displayBase();
    }
}
