<?php


    namespace App\Controllers;

    use App\Models\Category;
    use App\Models\Guitar as MGuitar;

    class Guitar extends BaseController {

        public function __invoke() {
            $this->view->guitars = MGuitar::getAll();
            $this->view->currentPage = 'Каталог';
            $this->view->pageTitle = 'Catalog Page';

            $this->view->path = $this->view->render('shablon/path');
            $this->view->pageContent = $this->view->render('catalog');

            $this->displayBase();
        }
    }