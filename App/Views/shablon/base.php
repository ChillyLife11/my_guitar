<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$this->pageTitle?></title>

    <link rel="stylesheet" href="<?=BASE_URL?>/Assets/libs/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?=BASE_URL?>/Assets/css/style.css">
</head>
<body>
<header class="header">
    <div class="wrapper">
        <div class="header__content">
            <nav class="nav">
                <ul class="nav__ul">
                    <li class="nav__li">
                        <a href="<?=BASE_URL?>/guitars/acoustic" class="nav__link">Акусические гитары</a>
                    </li>
                    <li class="nav__li">
                        <a href="<?=BASE_URL?>/guitars/electro" class="nav__link">Электрогитары</a>
                    </li>
                </ul>
            </nav>
            <a href="<?=BASE_URL?>" class="logo">
                <div class="logo__img"><img src="<?=BASE_URL?>/Assets/img/logo.png" alt=""></div>
                <strong class="logo__text">CAPODASTER</strong>
            </a>
            <div class="burger">
                <span class="burger__item"></span>
                <span class="burger__item"></span>
                <span class="burger__item"></span>
            </div>
        </div>
    </div>
</header>

<?=$this->pageContent?>

<footer class="footer">
    <div class="wrapper">
        <div class="footer__content">
            <div class="footer__left">
                <div class="footer__logo logo">
                    <div class="logo__img"><img src="<?=BASE_URL?>/Assets/img/logo.png" alt=""></div>
                    <strong class="logo__text">CAPODASTER</strong>
                </div>
                <p class="footer__descr">Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные
                    тексты</p>
            </div>
            <div class="footer__main">
                <ul class="footer__col">
                    <li class="footer__li-title">ОСНОВНЫЕ ССЫЛКИ</li>
                    <li class="footer__li"><a href="<?=BASE_URL?>/guitars" class="footer__link">Каталог</a></li>
                </ul>
                <ul class="footer__col">
                    <li class="footer__li-title">КАТЕГОРИИ</li>
                    <li class="footer__li"><a href="<?=BASE_URL?>/guitars/electro" class="footer__link">Электрогитары</a></li>
                    <li class="footer__li"><a href="<?=BASE_URL?>/guitars/acoustic" class="footer__link">Акустические гитары</a>
                    </li>
                </ul>
                <ul class="footer__col">
                    <li class="footer__li-title">СОЦ СЕТИ</li>
                    <li class="footer__li"><a href="#" class="footer__link"><img src="<?=BASE_URL?>/Assets/img/vk.png" alt="">VK.com</a>
                    </li>
                    <li class="footer__li"><a href="#" class="footer__link"><img src="<?=BASE_URL?>/Assets/img/insta.png" alt="">Instagram</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="footer__more">
    <div class="wrapper">
        <p class="footer__copyright">Copyright © 2019. Все права защищены</p>
        <a href="#" class="footer__privacy">Политика приватности</a>
    </div>
</div>

<script src="<?=BASE_URL?>/Assets/libs/swiper/swiper-bundle.min.js"></script>
<script src="<?=BASE_URL?>/Assets/js/script.js"></script>
</body>
</html>