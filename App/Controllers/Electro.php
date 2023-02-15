<?php


    namespace App\Controllers;


    use App\Models\Category;
    use App\Models\Guitar;

    class Electro extends BaseController {
        protected string $catName = 'electro';

        public function __invoke() {
            $crntCat = Category::getByName($this->catName)['0'];

            $this->view->guitars = Guitar::getByCat($crntCat->id_cat);
            $this->view->cat = $crntCat;

            $this->view->currentPage = 'Каталог';
            $this->view->pageTitle = 'Electro Guitars';

            $this->view->path = $this->view->render('shablon/path');
            $this->view->pageContent = $this->view->render('catalog');

            $this->displayBase();
        }
    }