<?php

namespace App\Controllers\Admin;

use App\Services\Form\Form;

class Signup extends BaseAdmin {
    public function __invoke() {
        $this->view->form = $this->createForm();
        $this->view->pageTitle = 'Sign up';
        $this->view->pageContent = $this->view->render('admin/form');

        $this->displayBase();
    }

    protected function createForm() {
        $form = new Form();

        $form->addSingleField('Login', 'input', 'text', 'login', '', ['form-control']);
        $form->addSingleField('Password', 'input', 'password', 'password', '', ['form-control']);

        $form->addButton('Sign up', 'submit', ['btn', 'btn-primary']);

        return $form;
    }
}
