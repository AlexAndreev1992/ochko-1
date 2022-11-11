<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ТАХОСФЕРА</title>

    <?php wp_head(); ?>

</head>
<body>
    <div class="contacts-up">
        <div class="container">
            <div class="contacts-up__inner">
                <div class="town">
                    <div class="town__adress">
                        <div class="town__name"><i class="fa fa-map-marker" aria-hidden="true"></i> Липецк <span><i class="fa fa-caret-down" aria-hidden="true"></i></span></div>
                        <div class="town__street">ул. Ангарская 24</div>
                        <div class="town__dropdown">
                            <ul>
                                <li class="town__list"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Липецк</a></li>
                                <li class="town__list"><a href="http://voronezh.tahosfera.ru">Воронеж</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="town__numbers">
                        <a class="town__tel" href="tel:84742376300">8-4742-37-63-00</a>
                        <a class="town__tel" href="tel:89036996300">8-903-699-63-00</a>
                        <a class="town__tel" href="tel:89046873992">8-904-687-39-92</a>
                        <a class="town__numbers_email" href="mailto:89046873992@mail.ru">Эл.почта: 89046873992@mail.ru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="brand">
                    <div class="logo">
                        <a class="logo__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img class="logo__link-img" src="<?php bloginfo('template_url');?>/assets/images/Logo.png" alt="">
                        </a>
                    </div>
                    <div class="header__official">
                        <div class="header__title">
                            ООО ТАХОСФЕРА
                        </div>
                        <div class="header__descr">
                            Тахографы, карты водителя в Липецке
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <div class="call">
                        <button data-modal="consultation" class="call__btn"></button>
                        <a class="check-btn" href="#">Проверить мастерскую</a>
                        <button data-modal="consultation" id="#open-mod" class="call__btn2" href="#">заказать звонок</button>    
                    </div>
                    <button class="menu__btn"></button>
                </div>
            </div>
        </div>
        <nav>

            <ul class="menu">
                <button class="menu__item-btn" id="menu__item-btn-town">Выбрать город <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                <div class="menu__item-slide" id="sub-menu2__slide">
                    <ul class="sub-menu" id="cities">
                        <li class="sub-menu__item"><a class="menu__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Липецк</a></li>
                        <li class="sub-menu__item"><a class="menu__link" href="http://voronezh.tahosfera.ru">Воронеж</a></li>
                    </ul>
                </div>
                <li class="menu__item">
                    <a class="menu__link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><i id="main-home" class="fa fa-home" aria-hidden="true"></i> <span>На главную</span></a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="ustanovka-tah">Установка тахографов</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="cards">Изготовление карт</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="monitoring">Мониторинг транспорта</a>
                </li>
                <li class="menu__item">
                    <button class="menu__item-btn" id="menu__item-btn">Доп. услуги <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                    <div class="menu__item-slide">
                        <ul class="sub-menu"> 
                            <li class="sub-menu__item"><a class="menu__link" href="skzi">Замена блока СКЗИ (НКМ)</a></li>
                            <li class="sub-menu__item"><a class="menu__link" href="paper">Бумага для тахографа</a></li>
                            <li class="sub-menu__item"><a class="menu__link" href="izm-constr">Внесение изменений в конструкцию</a></li>
                            <li class="sub-menu__item"><a class="menu__link" href="diagnostic">Диагностика тахографов</a></li>
                            <li class="sub-menu__item"><a class="menu__link" href="speed">Датчики скорости</a></li>
                            <li class="sub-menu__item"><a class="menu__link" href="akb">Главный выключатель АКБ</a></li>
                            <li class="sub-menu__item"><a class="menu__link" href="toplivo">Контроль расхода топлива</a></li>
                        </ul>
                    </div>
                </li>
                <li class="menu__item">
                    <button class="menu__item-btn" id="sub-menu2__btn">Ошибки тахографа <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                    <div class="menu__item-slide" id="sub-menu2">
                        <ul class="sub-menu">
                            <li class="sub-menu__item"><a class="menu__link" href="dtco-1381">Ошибки тахографа DTCO 1381</a></li>
                            <li class="sub-menu__item"><a class="menu__link" href="">Ошибки тахографа DTCO 3283</a></li>
                        </ul>
                    </div>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="contacts">Контакты</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="about">О компании</a>
                </li>
            </ul>
            
        </nav>
</header>