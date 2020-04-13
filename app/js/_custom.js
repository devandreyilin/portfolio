"use strict";

$(function () {
   // Selectize
   var $select = $('#selectize').selectize(); // Отключение input
   // $('.selectize-input input').prop('disabled', true);

   function callbackForm() {
      // Модальное окно при успешной отработке формы
      var successDiv = $('.s-callback-form__success');
      successDiv.on('click', function (e) {
         var th = $(this);

         if (th.hasClass('s-callback-form__success--visible')) {
            th.removeClass('s-callback-form__success--visible');
         }
      }); // Скрытие модального окна при клике вне него

      $(document).mouseup(function (e) {
         // событие клика по веб-документу
         var div = successDiv; // тут указываем ID элемента

         if (!div.is(e.target) // если клик был не по нашему блоку
             && div.has(e.target).length === 0) {
            // и не по его дочерним элементам
            div.removeClass('s-callback-form__success--visible'); // скрываем его
         }
      }); // E-mail Ajax Send

      $('#form-callback').submit(function () {
         //Change
         var th = $(this);
         $.ajax({
            type: "POST",
            url: "/mail.php",
            //Change
            data: th.serialize()
         }).done(function () {
            successDiv.addClass('s-callback-form__success--visible');
            setTimeout(function () {
               successDiv.removeClass('s-callback-form__success--visible');
            }, 5000);
            setTimeout(function () {
               // Done Functions
               // Очистка кэша selectize
               $select[0].selectize.clear();
               th.trigger("reset");
            }, 1000);
         });
         return false;
      });
   }

   callbackForm(); // Настройка меню

   function menuSettings() {
      $('.main-menu__link[href^="#"]').on('click', goToAnchor);
      $('a[href^="#"].page-header-scroll-down').on('click', goToAnchor);

      function goToAnchor(e) {
         var th = $(this);
         var sc = $(this).attr("href"),
             dn = $(sc).offset().top; // Изменение отступов для разных экранов(минус высота меню)

         if ($(window).width() > 1200) {
            dn = $(sc).offset().top - 48;
         } else if ($(window).width() < 1200 && $(window).width() > 768) {
            dn = $(sc).offset().top - 46.25;
         } else if ($(window).width() < 768) {
            dn = $(sc).offset().top + 1;
         } // Анимация только для настольных экранов


         console.log(th.hasClass());

         if ($(window).width() >= 992) {
            $('html, body').stop().animate({
               scrollTop: dn
            }, 1000);
         } else {
            if (th.hasClass('page-header-scroll-down')) {
               $('html, body').stop().animate({
                  scrollTop: dn
               }, 1000);
            } else {
               $('html, body').stop().animate({
                  scrollTop: dn
               }, 0);
            }
         }

         e.preventDefault();
      } // Подсветка пунктов меню


      $(window).on('scroll', itemHighlight);
      $(window).on('scroll', addShadowToMenuWrap);
      var activeClass = 'main-menu__item--active';
      var mainNav = $('.main-nav');

      function itemHighlight() {
         var scrollTop = $(window).scrollTop(),
             winHeight = $(window).height(),
             pageHeader = $('#page-header').offset().top,
             section1 = $('#s-services').offset().top - winHeight * 0.3,
             section2 = $('#s-portfolio').offset().top - winHeight * 0.3,
             section3 = $('#s-callback').offset().top - winHeight * 0.3,
             pageFooter = $('#page-footer').offset().top; // Проверка положения секции относительно других и добавление подсветки

         if (scrollTop >= pageHeader && scrollTop < section1) {
            $('.main-menu__link[href^="#"]').parent().removeClass(activeClass);
            $('.main-menu__link[href="#page-header"]').parent().addClass(activeClass);
         } else if (scrollTop >= section1 && scrollTop < section2) {
            $('.main-menu__link[href^="#"]').parent().removeClass(activeClass);
            $('.main-menu__link[href="#s-services"]').parent().addClass(activeClass);
         } else if (scrollTop >= section2 && scrollTop < section3) {
            $('.main-menu__link[href^="#"]').parent().removeClass(activeClass);
            $('.main-menu__link[href="#s-portfolio"]').parent().addClass(activeClass);
         } else if (scrollTop >= section3 && scrollTop < pageFooter) {
            $('.main-menu__link[href^="#"]').parent().removeClass(activeClass);
            $('.main-menu__link[href="#s-callback"]').parent().addClass(activeClass);
         } else {
            $('.main-menu__link[href^="#"]').parent().removeClass('active');
         }
      }

      function addShadowToMenuWrap() {
         if ($(window).scrollTop() > mainNav.offset().top - mainNav.height()) {
            mainNav.css('boxShadow', '0 1px 6px rgba(0,0,0,.2)');
         } else {
            mainNav.css('boxShadow', 'none');
         }
      } // Адаптивное меню


      function showOnMobile() {
         // Установка 100vh в px
         var pageHeader = $('#page-header');
         pageHeader.css('height', "".concat($(window).height(), "px"));
         var menuButton = $('.menu-button'),
             mainMenu = $('.main-menu'),
             overlay = $('#overlay'),
             navWrap = $('.main-nav-wrap');
         menuButton.on('click', function () {
            var th = $(this);
            th.toggleClass('menu-button--visible');
            navWrap.toggleClass('main-nav-wrap--visible');
            overlay.toggleClass('overlay--visible'); // Проверка на открытое меню

            if (navWrap.hasClass('main-nav-wrap--visible')) {
               $(document).on('click', hideMenuAndOverlay);
               $(document).on('scroll', hideMenuAndOverlay);
            }
         }); // Функция, срабатывающая при клике вне меню

         function hideMenuAndOverlay(e) {
            // событие клика по веб-документу
            if (!navWrap.is(e.target) // если клик был не по нашему блоку
                && navWrap.has(e.target).length === 0 && !menuButton.is(e.target)) {
               // и не по его дочерним элементам
               overlay.removeClass('overlay--visible');
               navWrap.removeClass('main-nav-wrap--visible'); // navigation.fadeOut(200); // скрываем его

               menuButton.removeClass('menu-button--visible'); // overlay.fadeOut(200); // скрываем его
            }
         }
      }

      showOnMobile();
      itemHighlight();
      addShadowToMenuWrap();
   }

   function copyrightChangeYear() {
      var year = new Date().getFullYear(),
          yearBlock = $('.page-footer .copyright .year');
      yearBlock.html(year);
   }

   copyrightChangeYear();
   menuSettings();
});