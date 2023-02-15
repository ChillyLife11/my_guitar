<?php


    namespace App\Controllers;

    use App\Models\Category;
    use App\Models\Guitar;

    class Acoustic extends BaseController {
        protected string $catName = 'acoustic';

        public function __invoke() {
            $crntCat = Category::getByName($this->catName)['0'];

            $this->view->guitars = Guitar::getByCat($crntCat->id_cat);
            $this->view->cat = $crntCat;

            $this->view->currentPage = 'Каталог';
            $this->view->pageTitle = 'Acoustic Guitars';

            $this->view->path = $this->view->render('shablon/path');
            $this->view->pageContent = $this->view->render('catalog');

            $this->displayBase();
        }
    }