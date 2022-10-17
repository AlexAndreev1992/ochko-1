<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__brand">
                <div class="logo">
                    <a class="logo__link" href="#">
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
            <div class="footer__wrapper">
                <div class="footer__list">
                    <h3>Услуги</h3>
                    <ul class="footer__list-item">
                        <a class="footer__link" href="ustanovka-tah">Установка тахографов</a>
                    </ul>
                    <ul class="footer__list-item">
                        <a class="footer__link" href="cards">Изготовление карт тахографа</a>
                    </ul>
                    <ul class="footer__list-item">
                        <a class="footer__link" href="monitoring">Мониторинг транспорта</a>
                    </ul>
                    <ul class="footer__list-item">
                        <a class="footer__link" href="skzi">Замена блока СКЗИ</a>
                    </ul>
                    <ul class="footer__list-item">
                        <a class="footer__link" href="diagnostic">Диагностика тахографов</a>
                    </ul>
                    <ul class="footer__list-item">
                        <a class="footer__link" href="izm-constr">Внесение изменений в конструкцию</a>
                    </ul>
                    <ul class="footer__list-item">
                        <a class="footer__link" href="speed">Контроль скорости</a>
                    </ul>
                    <ul class="footer__list-item">
                        <a class="footer__link" href="akb">Главный выключатель АКБ</a>
                    </ul>
                    <ul class="footer__list-item">
                        <a class="footer__link" href="toplivo">Контроль расхода топлива</a>
                    </ul>
                    <div>
                        <span></span>
                    </div>
                    <div class="footer__about">
                        <ul class="footer__list-item">
                            <a class="footer__link" href="about">О компании</a>
                        </ul>
                        <ul class="footer__list-item">
                            <a class="footer__link" href="contacts">Контакты</a>
                        </ul>
                    </div>
                </div>
                <div class="footer__wrapper2">
                    <div class="time-job">
                        <h3>Режим работы</h3>
                        <div class="time-job__inner">
                            <div class="time-job__item">
                                <div>Понедельник:</div>
                                <div>9:00 - 17:00</div>
                            </div>
                            <div class="time-job__item">
                                <div>Вторник:</div>
                                <div>9:00 - 17:00</div>
                            </div>
                            <div class="time-job__item">
                                <div>Среда:</div>
                                <div>9:00 - 17:00</div>
                            </div>
                            <div class="time-job__item">
                                <div>Четверг:</div>
                                <div>9:00 - 17:00</div>
                            </div>
                            <div class="time-job__item">
                                <div>Пятница:</div>
                                <div>9:00 - 16:00</div>
                            </div>
                            <div class="time-job__item">
                                <div>Суббота:</div>
                                <div>по предварительной</div>
                            </div>
                            <div class="time-job__item">
                                <div>Воскресенье:</div>
                                <div>записи</div>
                            </div>
                        </div>
                    </div>
                    <div class="town__numbers show">
                        <a class="town__tel" href="tel:84742376300">8-4742-37-63-00</a>
                        <a class="town__tel" href="tel:89036996300">8-903-699-63-00</a>
                        <a class="town__tel" href="tel:89046873992">8-904-687-39-92</a>
                        <a class="town__numbers_email" href="mailto:89046873992@mail.ru">Эл.почта: 89046873992@mail.ru</a>
                    </div>
                    <a class="check-btn show" href="#">Проверить мастерскую</a>
                </div>
            </div>
            <div class="info-company">
                <div class="info-company__inner">
                    ООО "ТАХОСФЕРА" 
                    ИНН 4813028881
                    ОГРН 1184827004449
                </div>
            </div>
            <a class="upbutton" href="#">Наверх</a>


        </div>
    </div>
</footer>

<div class="overlay">
    <div class="modal" id="consultation">
        <div class="modal__close">&times;</div>
        <div class="town__numbers town__numbers-modal">
            <a class="town__tel" href="tel:84742376300">8-4742-37-63-00</a>
            <a class="town__tel" href="tel:89036996300">8-903-699-63-00</a>
            <a class="town__tel" href="tel:89046873992">8-904-687-39-92</a>
            <a class="town__numbers_email town__numbers_email-modal" href="mailto:89046873992@mail.ru">Эл.почта: 89046873992@mail.ru</a>
        </div>
        <div class='feed-form'>
            <?php echo do_shortcode('[contact-form-7 id="14" title="Контактная форма 1"]');?>
        </div>
        <!-- <form class='feed-form' action="#">
            <input id="name" name="feedname" placeholder="Как к вам обращаться?" type="text" autocomplete="off" required>
            <input id="phone" name="phone" placeholder="Ваш номер телефона" type="tel" autocomplete="off">
            <textarea id="message" style="resize: none" name="message" placeholder="Сообщение" maxlength="300" type="text" autocomplete="off"></textarea>

            <button id="submit" class="call__btn2 call__btn2-modal">Отправить</button>
        </form> -->
    </div>
    <!-- <div class="modal modal-mini" id="thanks">
        <div class="modal__close">&times;</div>
        <div class="modal__subtitle">Спасибо за вашу заявку!</div>
        <div class="modal__descr">Наш менеджер свяжется с вами в ближайшее время!</div>
    </div> -->
</div>

    <?php wp_footer();?>
</body>
</html>