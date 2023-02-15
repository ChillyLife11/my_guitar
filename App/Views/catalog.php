<div class="overlay">
        <div class="overlay__close">
            <img src="<?=BASE_URL?>/Assets/img/cancel.png" alt="">
        </div>
        <form class="form overlay__form">
            <div class="form__title">Отправьте нам заявку!<br>Наш сотрудник свяжется с вами</div>
            <div class="form__field">
                <input type="text" name="fullname" placeholder="ФИО" class="form__input">
            </div>
            <div class="form__field">
                <input type="text" name="phone" placeholder="Ваш телефон" class="form__input">
            </div>
            <div class="form__field">
                <input type="text" name="address" placeholder="Адрес доставки" class="form__input">
            </div>
            <div class="form__guitar"></div>
            <div class="form__cost"></div>
            <button type="submit" class="form__btn btn btn-accent">ОТПРАВИТЬ</button>
        </form>
    </div>

    <?=$this->path?>

    <section class="catalog section">
        <div class="wrapper">
            <h1 class="catalog__title h2-size section-title">КАТАЛОГ <?=$this?->cat?->name?></h1>
            <div class="guitar-row">
                <? foreach ($this->guitars as $guitar): ?>
                <div class="guitar <?=($guitar->sale != 0 ? 'guitar__discounted' : '')?>">
                    <span class="guitar__frame"></span>
                    <span class="guitar__frame"></span>
                    <span class="guitar__frame"></span>
                    <span class="guitar__frame"></span>
                    <div class="guitar__img"><img src="<?=BASE_URL?>/Assets/img/models/<?=$guitar->img?>" alt=""></div>
                    <div class="guitar__name"><?=$guitar->name?></div>
                    <? if ($guitar->sale != 0): ?>
                        <div class="guitar__discount">₽ <?=$guitar->cost * 25 / 100?>
                            <del>₽ <?=$guitar->cost?></del>
                        </div>
                    <? else: ?>
                        <div class="guitar__cost">₽ <?=$guitar->cost?></div>
                    <? endif; ?>
                </div>
                <? endforeach; ?>
            </div>
        </div>
    </section>