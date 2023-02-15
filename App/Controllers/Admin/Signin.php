<?php

namespace App\Controllers\Admin;

use App\Services\Form\Form;

class Signin extends BaseAdmin {
    public function __invoke() {
        $this->view->form = $this->createForm();
        $this->view->pageTitle = 'Sign in';
        $this->view->pageContent = $this->view->render('admin/form');

        $this->displayBase();
    }

    protected function createForm() {
        $form = new Form();

        $form->setAttr('action', 'actions/signin');
        $form->setAttr('method', 'POST');
        $form->setAttr('class', 'needs-validation');
        $form->setAttr('novalidate', '');
        
        $form->addSingleField('Login', 'input', 'text', 'login', '', ['form-control']);
        $form->addSingleField('Password', 'input', 'password', 'password', '', ['form-control']);

        $form->addButton('Sign in', 'submit', ['btn', 'btn-primary']);

        return $form;
    }
}
