<?php
/*
Template Name: cards
*/
?>

<?php get_header(); ?>

<div class="content">
    <div class="teaser">
        <h2 class="teaser__title">Изготовим карту водителя<br> на тахограф</h2>
        <button data-modal="consultation" class="call__btn2" id="show" href="#">Заказать консультацию</button> 
    </div>
    <div class="container2">
        <h1 class="content__title">Все виды карт водителей и предприятий для тахографов, <br>с гарантией сроков изготовления</h1>
        <div class="cards__inner">
            <div class="cards__item">
                <img class="cards__img" src="<?php bloginfo('template_url');?>/assets/images/cards/estr-card.jpeg" alt="ЕСТР">
                <div class="cards__name-wrapper">
                    <div class="cards__name">Карта водителя ЕСТР</div>
                    <div class="cards__price">от 5000 р.</div>
                </div>
                <div class="cards__descr">Используется для Европейских тахографов. Чаще всего установленных на иномарках (MAN, Iveco, DAF, Mersedes, Scania). Карта без пин-кода. С этой картой можно ездить по территории Российской Федерации и за рубежом.</div>
            </div>
            <div class="cards__item">
                <img class="cards__img" src="<?php bloginfo('template_url');?>/assets/images/cards/skzi-card.jpeg" alt="СКЗИ">
                <div class="cards__name-wrapper">
                    <div class="cards__name">Карта водителя СКЗИ</div>
                    <div class="cards__price">от 4000 р.</div>
                </div>
                <div class="cards__descr">Самая популярная карта. Используется только для Российских тахографов с блоком СКЗИ (НКМ). Для работы с картой, необходимо вводить пин-код. Эксплуатация только на территории Российской федерации. За границей карта недействительна.</div>
            </div>
            <div class="cards__item">
                <img class="cards__img" src="<?php bloginfo('template_url');?>/assets/images/cards/estr-company-card.jpeg" alt="ЕСТР предприятия">
                <div class="cards__name-wrapper">
                    <div class="cards__name">Карта предприятия ЕСТР</div>
                    <div class="cards__price">6500 р.</div>
                </div>
                <div class="cards__descr">Обязательная карта для юридических лиц и ИП, имеющих автомобили, оборудованные Европейскими тахографами. Предназначена для выгрузки, показа, распечатки данных тахографа и подготовки отчетов для контролирующих органов.</div>
            </div>
            <div class="cards__item">
                <img class="cards__img" src="<?php bloginfo('template_url');?>/assets/images/cards/skzi-company-card.jpeg" alt="СКЗИ предприятия">
                <div class="cards__name-wrapper">
                    <div class="cards__name">Карта предприятия СКЗИ</div>
                    <div class="cards__price">4000 р.</div>
                </div>
                <div class="cards__descr">Обязательная карта для юридических лиц и ИП, имеющих автомобили, оборудованные Российскими тахографами с блоком СКЗИ (НКМ). Предназначена для выгрузки, показа, распечатки данных тахографа и подготовки отчетов для контролирующих органов.</div>
            </div>
        </div>
        <h3 class="cards__sale">При заказе нескольких карт предоставляется скидка</h3>
        <div class="cards__docs">Необходимые документы на карты водителей:</div>
        <div class="cards__docs-title"><span><i class="fa fa-angle-down" aria-hidden="true"></i></span> Для изготовления карты ЕСТР:</div>
        <div class="cards__docs-descr">
            <span>1. Паспорт</span> (Основная страница с фото + прописка)<br>
            <span>2. Водительское удостоверение</span> (с двух сторон)<br>
            <span>3. СНИЛС</span><br>
            <span>4. Карта ЕСТР</span> (если оформлялась ранее)<br>        
            <span>5. Фото 3.5*4.5</span> (черно белое) или сделаем фото на месте. 
        </div>
        <div class="cards__docs-title"><span><i class="fa fa-angle-down" aria-hidden="true"></i></span> Для изготовления карты с СКЗИ (По 36 приказу Минтранса):</div>
        <div class="cards__docs-descr">
            <span>1. Паспорт</span> (Основная страница с фото + прописка)<br>
            <span>2. Водительское удостоверение</span> (с двух сторон)<br>
            <span>3. СНИЛС</span> (только лицевая сторона)<br>
            <span>4. Свидетельство ИНН</span> (или заверенный скрин-шот с сайта налоговой service.nalog.ru — должна содержаться информация — фио, паспортные данные, номер инн)<br>
            <span>5. Карта СКЗИ</span> (если оформлялась ранее)<br>
            <span>6. Фото 3.5*4.5</span> (черно белое) или сделаем фото на месте. 
        </div>
        <div class="cards__divider"></div>
        <div class="cards__spravka">В случае возникновения вопросов обращайтесь по телефону:<br>
            <a class="cards__tel" href="tel:84742376300">8(4742) 37-63-00</a> и
            <a class="cards__tel" href="tel:89036996300">8-903-699-63-00</a>
        </div>
        
    </div>
</div>

<?php get_footer();?>