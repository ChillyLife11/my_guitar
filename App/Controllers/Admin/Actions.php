<?php

namespace App\Controllers\Admin;

use App\Models\Guitar;
use App\Models\User;
use Exception;

class Actions extends BaseAdmin {
    public function __invoke(string $method = '', string $class = '') {
        $this->$method($class);
    }
    protected function delete($class) {
        $this->doAction($class, function($crntClass) {
            $crntClass::delete((int)$_GET['id']);
        });
    }

    protected function add($class) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->doAction($class, function($crntClass) {
                $crntClass::add($_POST);
            });
        }
    }

    protected function edit($class) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->doAction($class, function($crntClass) {
                $crntGuitar = Guitar::getById($_GET['id'])[0];
                $crntClass::add($_POST, $crntGuitar);
            });
        }
    }

    protected function signin($class) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->doAction($class, function() {
                $_SESSION['user'] = User::signin($_POST);
            });
        }
    }

    protected function signup($class) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->doAction($class, function() {
                User::signup($_POST);
            });
        }
    }


    protected function doAction($class, $func) {
        try {
            $crntClass = "\\App\\Models\\" . $class;
            $func($crntClass);
            header('Location: ' . BASE_URL . '/admin');
        } catch (\Exception $e) {
            $this->errorFunc($e);
        }
    }


    protected function errorFunc($e) {
        $this->view->errorText = $e->getMessage();
        $this->view->pageTitle = 'Error | ' . $e->getMessage();
        $this->view->pageContent = $this->view->render('admin/errors/e404');
        // die;
        $this->displayBase();
    }
}