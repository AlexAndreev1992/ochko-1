$(function(){
  $('.top-slider').slick({
      dots: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
              arrows: false
          }
        },
        {
          breakpoint: 640,
          settings: {
              arrows: false

          }
        }
      ]
    });

    $('.top-slider2').slick({
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
              arrows: false
          }
        },
        {
          breakpoint: 640,
          settings: {
              arrows: false

          }
        }
      ]
    });
  
    $('a.upbutton').on('click', function() {
      $('html, body').animate({
        scrollTop: 0
      }, 700);
      return false;
    });

    // Выпадающее меню выбора города Desktop
    // ======================================

    $(".town__name").on('click', function() {
      $(".town__dropdown").slideToggle(200);
      $(this).find('span i').toggleClass('rotate')
    });
    
    // Выпадающее меню/аккордеон (открывается только один блок)
    // ========================================================
    // $('.menu__item-btn').on('click', function(){
    //   $(this).find('i').toggleClass('rotate')
    //   let option = $(this).next().css('display')
    //   if (option=='block'){
    // //     $(this).next().slideUp(200)
    //     $(this).find('i').removeClass('rotate')
    //   }
    //   else {
    // //   $('.menu__item-slide').slideUp(200)
    // //   $(this).next().slideDown(200)
    //   $(this).find('i').addClass('rotate')
    //   }
    // })  

      $('.cards__docs-title').on('click', function() {
        $(this).next('div.cards__docs-descr').slideToggle(200),
        $(this).toggleClass('active'),
        $(this).find('i').toggleClass('rotate')
        });
    
      // ПОДСВЕЧИВАНИЕ АКТИВНЫХ ССЫЛОК В МЕНЮ (JQuery)
      $('.menu li a').each(function () {
        let location = window.location.href;
        let link = this.href;
        if(location == link) {
            $(this).addClass('active-button')
            console.log('должен добавляться активная ссылка');
            console.log(link);
        }
      });
      
    // МОДАЛЬОЕ ОКНО
    $('[data-modal=consultation]').on('click', function(){
      $('.overlay, #consultation').fadeToggle(200)
      $('.call__btn').toggleClass('call__btn-active')
    });
    $('.modal__close').on('click', function(){
      $('.overlay, #consultation, #thanks').fadeOut(200)
      $('.call__btn').removeClass('call__btn-active')
    });

    // ВАЛИДАЦИЯ ФОРМ
    // $('.feed-form').validate({
    //   rules:{
    //     name: {
    //       required: true,
    //       minlength: 2
    //     },
    //     phone: "required",
    //     message: "required",
    //   },
    //   messages: {
    //     name: {
    //       required: "Пожалуйста, введите своё имя",
    //       minlength: jQuery.validator.format("Введите не менее {0} символов!")
    //     },
    //     phone: "Поле обязательно к заполнению!",
    //     message: "Введите ваше сообщение"  
    //   }
    // });

      // МАСКА ТЕЛЕФОНА
    $('input[name=phone]').mask("+7 (999) 999-99-99");
          // КНОПКА НЕ АКТИВНА ПОКА НЕ ЗАПОЛНЕНЫ ПОЛЯ
    // let textArea = document.getElementById('message'),
    //       name = document.getElementById('feedname'),
    //       phone = document.getElementById('phone'),
    //       submit = document.getElementById('submit')

    //   submit.setAttribute('disabled', true);
    //   textArea.oninput = function(){
    //     if (textArea.value.length < 5){
    //       submit.setAttribute('disabled', true);
    //     }
    //     // } else if(name.value.length < 2){
    //     //     submit.setAttribute('disabled', true);
    //     //   }
    //     //   else if(phone.value.length < 2){
    //     //     submit.setAttribute('disabled', true);
    //     //   }
    //     // else{
    //     //   submit.removeAttribute('disabled');
    //     // }
    //   }
    // ОТПРАВЛЕНИЕ ДАННЫХ С ФОРМЫ НА ПОЧТУ
    // $('form').on('submit', function(e) {
    //   e.preventDefault()
    //   $.ajax({
    //     type: 'POST',
    //     url: 'mailer/smart.php',
    //     data: $(this).serialize()
    //   }).done(function(){
    //     $(this).find('input').val('');
    //     $('#consultation').fadeOut();
    //     $('#thanks').fadeIn(200);

    //     $('form').trigger('reset');
    //   });
    //   return false;
    // });

    // ГАЛЕРЕЯ ВСПЛЫВАЮЩИЕ КАРТИНКИ
    $('.popup-gallery').magnificPopup({
      delegate: 'a',
      type: 'image',
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          return item.el.attr('title') + '<small>ООО "ТАХОСФЕРА"</small>';
        }
      }
    });
});

// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// Dropdown MENU ОТКРЫТИЕ/ЗАКРЫТИЕ ВЫПАДАЮЩИХ БЛОКОВ

document.addEventListener('DOMContentLoaded', ()=>{
const menuBtns = document.querySelectorAll('.menu__item-btn');
const drops = document.querySelectorAll('.menu__item-slide');
const menu = document.querySelector('.menu');
const arrows = menu.querySelectorAll('i');
  menuBtns.forEach(el => {
    el.addEventListener('click', (e)=> {
      let currentBtn = e.currentTarget;
      let drop = currentBtn.nextElementSibling;
      let arr = currentBtn.querySelector('i');
      //Сбрасываем стили с положение стрелки у текущей кнопки
        menuBtns.forEach(el => {
          if (el !== currentBtn){
            el.classList.remove('active')
            el.querySelector('i').classList.remove('rotate') 
          }
        });
        //Скрываем другие дропдауны кроме текущего
        drops.forEach(el=>{
          if (el!==drop){
            el.classList.remove('dropdown-show');
          }
        })
      //Отображаем Дропдаун, Применяем стили текущей кнопки и поворачиваем стрелку
        drop.classList.toggle('dropdown-show');
        currentBtn.classList.toggle('active');
        arr.classList.toggle('rotate');
    })
    // Закрытие Дропдауна сброс стилей кнопки и положения стрелки по клику вне области меню
    document.addEventListener('click', (e)=>{
      if (!e.target.closest('.menu')) {
        menuBtns.forEach(el => {
            el.classList.remove('active')
        });
        drops.forEach(el=>{
            el.classList.remove('dropdown-show');
        })
        arrows.forEach(el =>{
            el.classList.remove('rotate')
        })
      }
    })

  })
})



window.addEventListener('DOMContentLoaded', () => {
      // ОБЪЯВЛЕНИЕ ПЕРЕМЕННЫХ
const menu = document.querySelector('.menu'),
      menuItem = document.querySelectorAll('.menu__item'),
      hamburger = document.querySelector('.menu__btn'),
      menuItemBtn = document.querySelector('#menu__item-btn'),
      menuItemBtn2 = document.querySelector('#sub-menu2__btn');
  let location = window.location.href;

        // КНОПКА ГАМБУРГЕР МЕНЯЕТ АКТИВНОСТЬ И ПОКАЗЫВАЕТ МЕНЮ
      hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('menu__btn-active'),
        menu.classList.toggle('menu-active');


      });
      // ПРИ НАЖАТИИ НА ПУНКТ МЕНЮ ИЛИ КНОПКУ ГАМБУРГЕР СКРЫВАЕТСЯ МЕНЮ
      menuItem.forEach((item) => {
        item.addEventListener("click", () => {
          if (item.contains(menuItemBtn) || item.contains(menuItemBtn2)) {
            // console.log('Нажата КНОПКА - Открывается дропдаун!')
            // console.log(item)
          } else {
            // console.log('Нажата ссылка - Закрывается меню!')
            
            hamburger.classList.toggle("menu__btn-active")
            menu.classList.toggle("menu-active");
          }
        });

      //   if (taskList.clildren.Length > 1){
      //     emptyList.classList.add('none')
      // }

      });
      // ПОДСВЕЧИВАНИЕ АКТИВНЫХ ССЫЛОК НА СТРАНИЦЕ(активные ссылки)



      // const doc = window.document
      // const linksCount = doc.links.length
      // for (let i = 0; i < linksCount; i++)
      //   if (doc.URL.startsWith(doc.links[i].href)){
      //     doc.links[i].style.cssText = 'color: #F3F09A'
      //   }
    //   $(function () {
    //     let location = window.location.href;
    //     let cur_url = '/' + location.split('/').pop();
     
    //     $('.menu li').each(function () {
    //         let link = $(this).find('a').attr('href');
     
    //         if (cur_url == link) {
    //             $(this).addClass('current');
    //         }
    //     });
    // });

      // onload = function (){
      //   for (let lnk = document.links, j = 0; j < lnk.length; j++)
      //   if (lnk [j].href == document.URL) lnk [j].style.cssText = 'color: #F3F09A'
      // }
})
