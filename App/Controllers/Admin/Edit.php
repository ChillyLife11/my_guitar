<?php

namespace App\Controllers\Admin;

use App\Models\Category;
use App\Models\Guitar;
use App\Services\Form\Form;

class Edit extends BaseAdmin {
    public function __invoke() {

        $this->view->guitar = Guitar::getById((int)$_GET['id'])[0];
        $this->view->cats = Category::getAll();

        $this->view->form = $this->createForm();
        $this->view->pageTitle = 'Edit guitar';
        $this->view->pageContent = $this->view->render('admin/form');

        $this->displayBase();
    }

    protected function createForm() {
        $form = new Form();
        $form->setAttr('action', 'actions/edit?id=' . $_GET['id']);
        $form->setAttr('method', 'POST');
        $form->setAttr('class', 'needs-validation');
        $form->setAttr('enctype', 'multipart/form-data');
        $form->setAttr('novalidate', '');
        
        $form->addSingleField('Name', 'input', 'text', 'name', $this->view->guitar->name, ['form-control']);
        $form->addSingleField('Cost', 'input', 'number', 'cost',$this->view->guitar->cost, ['form-control']);
        $form->addSingleField('Sale', 'input', 'number', 'sale', $this->view->guitar->sale, ['form-control']);
        $form->addSingleField('Image', 'input', 'file', 'image', $this->view->guitar->img, ['form-control']);
        
        $selectOptions = '';
        foreach ($this->view->cats as $cat) {
            $isSelected = $this->view->guitar->id_cat == $cat->id_cat ? 'selected' : '';
            $selectOptions .= "<option value=\"{$cat->id_cat}\" $isSelected >{$cat->name}</option>";
        }
        $form->addPairField('Category', 'select', '', 'cat', '', ['form-select'], $selectOptions);

        $form->addButton('Edit guitar', 'submit', ['btn', 'btn-primary']);

        return $form;
    }
}
