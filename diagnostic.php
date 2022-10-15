<?php
/*
Template Name: diagnostic
*/
?>

<?php get_header(); ?>

<div class="content">
    <div class="container2">
        <h1 class="content__title">Диагностика неисправностей, ремонт и замена блоков тахографов</h1>
        <div class="diagnostic">
            <div class="diagnostic__item">
                <img class="diagnostic__img" src="<?php bloginfo('template_url');?>/assets/images/diagnostika-1.jpg" alt="Диагностика">
                <div class="diagnostic__descr">
                    <div class="diagnostic__descr-wrap">
                        <p class="content__text">Для выявления причины неисправности и определения стоимости работ по ремонту тахографа мы проводим диагностику.</p>
                        <p class="content__text">Диагностика тахографа — <span>800р</span></p>
                    </div>
                </div>
            </div>
            <div class="diagnostic__item">
                <div class="diagnostic__descr">
                    <div class="diagnostic__descr-wrap">
                        <h2 class="content__subtitle">Поверка тахографа</h2>
                        <p class="content__text">Метрологическая поверка тахографа — операция, которая необходима для подтверждения соответствия средства измерения, в нашем случае тахографа, своим метрологическим характеристикам.</p>
                    </div>
                </div>
                <img class="diagnostic__img" src="<?php bloginfo('template_url');?>/assets/images/diagnostika-2.jpg" alt="Диагностика 2">
            </div>
            <div class="diagnostic__item-rev">
                <div class="diagnostic__descr">
                    <div class="diagnostic__descr-wrap">
                        <h2 class="content__subtitle">Замена блока СКЗИ</h2>
                        <p class="content__text">Если у вас на экране появляется надпись «Неисправность НКМ», необходимо разобраться и провести диагностику блока СКЗИ.</p>
                        <p class="content__text">Если блок СКЗИ неисправен, то необходимо сделать замену блока СКЗИ.</p>
                    </div>
                </div>
                <img class="diagnostic__img" src="<?php bloginfo('template_url');?>/assets/images/diagnostika-3.jpg" alt="Диагностика 2">
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>