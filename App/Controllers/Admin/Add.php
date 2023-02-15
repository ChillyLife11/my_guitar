<?php

namespace App\Controllers\Admin;

use App\Models\Category;
use App\Models\Guitar;
use App\Services\Form\Form;

class Add extends BaseAdmin {
    public function __invoke() {
        $this->view->guitars = Guitar::getAll();
        $this->view->cats = Category::getAll();
        $this->view->form = $this->createForm();
        $this->view->pageTitle = 'Add guitar';
        $this->view->pageContent = $this->view->render('admin/form');

        $this->displayBase();
    }

    protected function createForm() {
        $form = new Form();
        $form->setAttr('action', 'actions/add');
        $form->setAttr('method', 'POST');
        $form->setAttr('class', 'needs-validation');
        $form->setAttr('enctype', 'multipart/form-data');
        $form->setAttr('novalidate', '');

        $form->addSingleField('Name', 'input', 'text', 'name', '', ['form-control']);
        $form->addSingleField('Cost', 'input', 'number', 'cost', '', ['form-control']);
        $form->addSingleField('Sale', 'input', 'number', 'sale', '', ['form-control']);
        $form->addSingleField('Image', 'input', 'file', 'image', '', ['form-control']);
        
        $selectOptions = '';
        foreach ($this->view->cats as $cat) {
            $selectOptions .= "<option value=\"{$cat->id_cat}\">{$cat->name}</option>";
        }
        $form->addPairField('Category', 'select', '', 'cat', '', ['form-select'], $selectOptions);

        $form->addButton('Add guitar', 'submit', ['btn', 'btn-primary']);

        return $form;
    }
}
