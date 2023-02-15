<section class="hero">
    <div class="wrapper">
        <div class="hero__slider">
            <div class="hero__swiper swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero__item">
                            <div class="hero__left">
                                <div class="hero__subtitle">Летняя распродажа</div>
                                <strong class="hero__title">СКИДКИ ДО 90%</strong>
                                <a href="#" class="hero__btn btn btn-accent">Смотреть модели</a>
                            </div>
                            <div class="hero__right">
                                <div class="hero__img">
                                    <img src="<?=BASE_URL?>/Assets/img/guitars/electro-guitar.png" alt="">
                                </div>
                                <div class="hero__cost">
                                    <span class="hero__discount"><del>9 900 ₽</del></span>
                                    1 900 ₽
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero__item">
                            <div class="hero__left">
                                <div class="hero__subtitle">Ещё какая-то распродажа</div>
                                <strong class="hero__title">Ещё скидки, скидочки!</strong>
                                <a href="#" class="hero__btn btn btn-accent">Смотреть модели</a>
                            </div>
                            <div class="hero__right">
                                <div class="hero__img">
                                    <img src="<?=BASE_URL?>/Assets/img/guitars/electro-guitar.png" alt="">
                                </div>
                                <div class="hero__cost">
                                    <span class="hero__discount"><del>9 900 ₽</del></span>
                                    1 900 ₽
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero__item">
                            <div class="hero__left">
                                <div class="hero__subtitle">Ещё больше распродаж</div>
                                <strong class="hero__title">Лучше товары только у нас</strong>
                                <a href="#" class="hero__btn btn btn-accent">Смотреть модели</a>
                            </div>
                            <div class="hero__right">
                                <div class="hero__img">
                                    <img src="<?=BASE_URL?>/Assets/img/guitars/electro-guitar.png" alt="">
                                </div>
                                <div class="hero__cost">
                                    <span class="hero__discount"><del>9 900 ₽</del></span>
                                    1 900 ₽
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero__item">
                            <div class="hero__left">
                                <div class="hero__subtitle">Берём мешками</div>
                                <strong class="hero__title">Для вас свеженький гитарчик!</strong>
                                <a href="#" class="hero__btn btn btn-accent">Смотреть модели</a>
                            </div>
                            <div class="hero__right">
                                <div class="hero__img">
                                    <img src="<?=BASE_URL?>/Assets/img/guitars/electro-guitar.png" alt="">
                                </div>
                                <div class="hero__cost">
                                    <span class="hero__discount"><del>9 900 ₽</del></span>
                                    1 900 ₽
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__pagination swiper-pagination"></div>
        </div>
    </div>
</section>
<section class="free">
    <div class="wrapper">
        <h2 class="free__title h2-size">БЕСПЛАТНАЯ ДОСТАВКА <span class="free__span">ОТ 3000₽</span></h2>
        <p class="free__text">Сделайте заказ и получите подарок!</p>
    </div>
</section>
<section class="category section">
    <div class="wrapper">
        <div class="category__content">
            <? foreach($this->cats as $cat): ?>
                <div class="category__item">
                    <div class="category__main">
                        <div class="category__name"><?=$cat->name?></div>
                        <p class="category__models"><?=$cat->models?></p>
                        <a href="<?=BASE_URL?>/guitars/<?=$cat->type?>" class="category__btn btn btn-accent">
                            <img src="<?=BASE_URL?>/Assets/img/arrow-right.png" alt="">
                        </a>
                    </div>
                    <div class="category__img">
                        <img src="<?=BASE_URL?>/Assets/img/category/<?=$cat->img?>" alt="">
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</section>
<section class="new section">
    <div class="wrapper">
        <h2 class="new__title h2-size section-title">НОВЫЕ МОДЕЛИ</h2>
        <div class="guitar-row">
            <? for($a = 0; $a < 4; $a++): ?>
                <div class="guitar <?=($this->guitars[$a]->sale != 0 ? 'guitar__discounted' : '')?>">
                    <span class="guitar__frame"></span>
                    <span class="guitar__frame"></span>
                    <span class="guitar__frame"></span>
                    <span class="guitar__frame"></span>
                    <div class="guitar__img"><img src="<?=BASE_URL?>/Assets/img/models/<?=$this->guitars[$a]->img?>" alt=""></div>
                    <div class="guitar__name"><?=$this->guitars[$a]->name?></div>
                    <? if ($this->guitars[$a]->sale != 0): ?>
                        <div class="guitar__discount">₽ <?=$this->guitars[$a]->cost * 25 / 100?>
                            <del>₽ <?=$this->guitars[$a]->cost?></del>
                        </div>
                    <? else: ?>
                        <div class="guitar__cost">₽ <?=$this->guitars[$a]->cost?></div>
                    <? endif; ?>
                </div>
            <? endfor; ?>
        </div>
        <a href="<?=BASE_URL?>/guitars" class="btn btn-accent btn-section">
            ВСЕ МОДЕЛИ <img src="<?=BASE_URL?>/Assets/img/arrow-right.png" alt="">
        </a>
    </div>
</section>
<section class="discount section">
    <div class="wrapper">
        <h2 class="new__title h2-size section-title">СКИДКИ ДО 90%</h2>
        <div class="guitar-row">
            <?php
                $filteredGuitars = array_values(array_filter($this->guitars, function($guitar) {
                    return $guitar->sale != 0;
                }));
                $maxGuitarCnt = count($filteredGuitars) < 5 ? count($filteredGuitars) : 2;
                for ($a = 0; $a < $maxGuitarCnt; $a++):
            ?>
                <div class="guitar guitar__discounted">
                    <span class="guitar__frame"></span>
                    <span class="guitar__frame"></span>
                    <span class="guitar__frame"></span>
                    <span class="guitar__frame"></span>
                    <div class="guitar__img"><img src="<?=BASE_URL?>/Assets/img/models/<?=$filteredGuitars[$a]->img?>" alt=""></div>
                    <div class="guitar__name"><?=$filteredGuitars[$a]->name?></div>
                    <div class="guitar__discount">₽ <?=$filteredGuitars[$a]->cost * 25 / 100?>
                        <del>₽ <?=$filteredGuitars[$a]->cost?></del>
                    </div>
                </div>
            <? endfor; ?>
        </div>
        <a href="<?=BASE_URL?>/guitars" class="btn btn-accent btn-section">
            ВСЕ МОДЕЛИ <img src="<?=BASE_URL?>/Assets/img/arrow-right.png" alt="">
        </a>
    </div>
</section>