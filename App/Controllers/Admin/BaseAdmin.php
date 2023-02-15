<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class BaseAdmin extends BaseController {
    public function __invoke(){}

    protected function displayBase() {
        echo $this->view->render('admin/shablon/base');
    }
}
