<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

<section class="head">
    <div class="top-slider">
        <div class="top-slider__item">
            <img class="top-slider__img" src="<?php bloginfo('template_url');?>/assets/images/carus-cal-des.jpg" alt="Калибровка">
            <a data-modal="consultation" class="top-slider__btn" href="#">Оставить заявку</a>
        </div>
        <div class="top-slider__item">
            <img class="top-slider__img" src="<?php bloginfo('template_url');?>/assets/images/carus-cards-des.jpg" alt="Карта тахографа">
            <a class="top-slider__btn top-slider__btn-dop" href="cards">Подробнее</a>
        </div>
        <div class="top-slider__item">
            <img class="top-slider__img" src="<?php bloginfo('template_url');?>/assets/images/carus-izm-des.jpg" alt="Внесение изменений в конструкцию">
            <a class="top-slider__btn" href="izm-constr">Подробнее</a>
        </div>
        <div class="top-slider__item">
            <img class="top-slider__img" src="<?php bloginfo('template_url');?>/assets/images/carus-akb-des.jpg" alt="АКБ">
            <a class="top-slider__btn" href="akb">Подробнее</a>
        </div>
    </div>
</section>
<section class="uslugi">
    <!-- <h2 class="uslugi__title">Услуги</h2> -->
        <div class="uslugi__first">
            <div class="container">
                <div class="uslugi__first-inner">
                    <div class="uslugi__item">
                        <a class="uslugi__link" href="ustanovka-tah">
                            <img class="uslugi__img" src="<?php bloginfo('template_url');?>/assets/images/uslugi/ust-taho.jpg" alt="Установка тахографа">
                                <div class="uslugi__text">
                                    <h3 class="uslugi__name">Установка и обслуживание тахографов</h3>
                                    <h4 class="uslugi__descr">Установка тахографа</h4>
                                </div>
                        </a>
                    </div>
                    <div class="uslugi__item">
                        <a class="uslugi__link" href="cards">
                            <img class="uslugi__img" src="<?php bloginfo('template_url');?>/assets/images/uslugi/card-taho.jpg" alt="Карты тахографа">
                            <div class="uslugi__text">
                                <h3 class="uslugi__name">Изготовление карт тахографа</h3>
                                <h4 class="uslugi__descr">Изготовление карт предприятия, водителя для тахографов</h4>
                            </div>
                        </a>    
                    </div>
                    <div class="uslugi__item">
                        <a class="uslugi__link" href="skzi">
                            <img class="uslugi__img" src="<?php bloginfo('template_url');?>/assets/images/uslugi/nkm-taho.jpg" alt="Блоки СКЗИ">
                            <div class="uslugi__text">
                                <h3 class="uslugi__name">Замена блока СКЗИ (НКМ)</h3>
                                <h4 class="uslugi__descr">Быстрая и качественная замена блока СКЗИ (НКМ)</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>    
        </div>
        <div class="uslugi__second">
            <div class="container">
                <div class="uslugi__second-inner">
                    <div class="uslugi__item2">
                        <a class="uslugi__link" href="monitoring">
                            <div class="uslugi__wrapper-icon">
                                <img class="uslugi__icon" src="<?php bloginfo('template_url');?>/assets/images/uslugi/glonass.png" alt="Мониторинг">
                            </div>
                            <h3>Мониторинг транспорта</h3>
                        </a>
                    </div>
                    <div class="uslugi__item2">
                        <a class="uslugi__link" href="toplivo">
                            <div class="uslugi__wrapper-icon">
                                <img class="uslugi__icon" src="<?php bloginfo('template_url');?>/assets/images/uslugi/fuel.png" alt="Расход топлива">
                            </div>
                            <h3>Контроль<br> расхода топлива</h3>
                        </a>
                    </div>
                    <div class="uslugi__item2">
                        <a class="uslugi__link" href="izm-constr">
                            <div class="uslugi__wrapper-icon">
                                <img class="uslugi__icon" src="<?php bloginfo('template_url');?>/assets/images/uslugi/izm.png" alt="Изменения в конструкцию">
                            </div>
                            <h3>Внесение изменений<br> в конструкцию</h3>
                        </a>
                    </div>
                    <div class="uslugi__item2">
                        <a class="uslugi__link" href="akb">
                            <div class="uslugi__wrapper-icon">
                                <img class="uslugi__icon" src="<?php bloginfo('template_url');?>/assets/images/uslugi/akb.png" alt="Выключатель АКБ">
                            </div>
                            <h3>Главный<br> выключатель АКБ</h3>
                        </a>
                    </div>
                    <div class="uslugi__item2">
                        <a class="uslugi__link" href="speed">
                            <div class="uslugi__wrapper-icon">
                                <img class="uslugi__icon" src="<?php bloginfo('template_url');?>/assets/images/uslugi/speed.png" alt="Контроль скорости">
                            </div>
                            <h3>Контроль скорости</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
</section>
<section class="working">
    <h2 class="working__title">Как мы работаем</h2>
    <div class="container">
        <div class="working__inner">
            <div class="working__item">
                <img class="working__img" src="<?php bloginfo('template_url');?>/assets/images/working/work-1.png" alt="step-1">
                <div class="working__descr">Оставляете заявку, наш менеджер связывается с вами и уточняет все моменты</div>
            </div>
            <div class="working__item">
                <img class="working__img" src="<?php bloginfo('template_url');?>/assets/images/working/work-2.png" alt="step-2">
                <div class="working__descr">Подбираем для вас оборудование. Бесплатно осматриваем транспортное средство</div>
            </div>
            <div class="working__item">
                <img class="working__img" src="<?php bloginfo('template_url');?>/assets/images/working/work-3.png" alt="step-3">
                <div class="working__descr">Устанавливаем сертифицированное оборудование. Проводим все необходимые работы</div>
            </div>
            <div class="working__item">
                <img class="working__img" src="<?php bloginfo('template_url');?>/assets/images/working/work-4.png" alt="step-4">
                <div class="working__descr">Калибруем, пломбируем, готовим для вас пакет необходимой документации</div>
            </div>
        </div>
    </div>

</section>
<section class="preim">
    <button class="call__btn-zakaz" data-modal="consultation" href="#">Заказать звонок</button>
    <h2 class="preim__title">Наши преимущества</h2>
    <div class="container">
        <div class="preim__inner">
                <div class="preim__item">
                    <img class="preim__img" src="<?php bloginfo('template_url');?>/assets/images/preim/preim-1.png" alt="">
                    <div class="preim__name">Гарантия 3 года на всё оборудование</div>
                    <div class="preim__descr">Оборудование по цене изготовителя</div>
                </div>
                <div class="preim__item">
                    <img class="preim__img" src="<?php bloginfo('template_url');?>/assets/images/preim/preim-2.png" alt="">
                    <div class="preim__name">Наличие оборудования на складе</div>
                    <div class="preim__descr">Широкий ассортимент тахографов и другого оборудования для мониторинга транспорта</div>
                </div>
                <div class="preim__item">
                    <img class="preim__img" src="<?php bloginfo('template_url');?>/assets/images/preim/preim-3.png" alt="">
                    <div class="preim__name">Квалифицированные специалисты</div>
                    <div class="preim__descr">Персонал с большим опытом работы и всеми документами</div>
                </div>
                <div class="preim__item">
                    <img class="preim__img" src="<?php bloginfo('template_url');?>/assets/images/preim/preim-4.png" alt="">
                    <div class="preim__name">Высокая скорость работы</div>
                    <div class="preim__descr">Быстрая установка оборудования в течение 1 дня</div>
                </div>
                <div class="preim__item">
                    <img class="preim__img" src="<?php bloginfo('template_url');?>/assets/images/preim/preim-5.png" alt="">
                    <div class="preim__name">Лицензия ФСБ №0014608</div>
                    <div class="preim__descr">Для работы со средствами криптозащиты тахографов</div>
                </div>
            </div>
        </div>
</section>
<?php get_footer();?>