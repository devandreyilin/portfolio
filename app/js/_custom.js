$(function () {

   // Selectize
   let $select = $('#selectize').selectize({
      create: true,
      sortField: 'text'
   });


   function callbackForm(form, success) {
      // Модальное окно при успешной отработке формы
      let successDiv = $(success);
      successDiv.on('click', function (e) {
         let th = $(this);
         if (th.hasClass('s-callback-form__success--visible')) {
            th.removeClass('s-callback-form__success--visible');
         }
      });
      // Скрытие модального окна при клике вне него
      $(document).mouseup(function (e) { // событие клика по веб-документу
         let div = successDiv; // тут указываем ID элемента
         if (!div.is(e.target) // если клик был не по нашему блоку
             && div.has(e.target).length === 0) { // и не по его дочерним элементам
            div.removeClass('s-callback-form__success--visible'); // скрываем его
         }
      });

      // E-mail Ajax Send
      $(form).submit(function () { //Change
         let th = $(this);
         $.ajax({
            type: "POST",
            url: "/mail.php", //Change
            data: th.serialize()
         }).done(function () {
            successDiv.addClass('s-callback-form__success--visible');
            setTimeout(function () {
               successDiv.removeClass('s-callback-form__success--visible');
            }, 5000);

            setTimeout(function () {
               // Done Functions
               $select[0].selectize.clear();
               th.trigger("reset");
            }, 1000);
         });
         return false;
      });
   }

   callbackForm('#form-callback', '.s-callback-form__success');

   // Настройка меню
   function menuSettings() {
      $('.main-menu__link[href^="#"]').on('click', goToAnchor);
      $('a[href^="#"].page-header-scroll-down').on('click', goToAnchor);

      function goToAnchor(e) {
         let sc = $(this).attr("href"),
             dn = $(sc).offset().top;

         // Изменение отступов для разных экранов(минус высота меню)
         if ($(window).width() > 1200) {
            dn = $(sc).offset().top - 48;
         } else if ($(window).width() < 1200 && $(window).width() > 768) {
            dn = $(sc).offset().top - 46.25;
         } else if ($(window).width() < 768) {
            dn = $(sc).offset().top + 1;
         }

         // Анимация только для настольных экранов
         if ($(window).width() > 992) {
            $('html, body').stop().animate({scrollTop: dn}, 1000);
         } else {
            $('html, body').stop().animate({scrollTop: dn}, 0);
         }

         e.preventDefault();
      }

      // Подсветка пунктов меню
      $(window).on('scroll', itemHighlight);
      let activeClass = 'main-menu__item--active';

      function itemHighlight() {
         let scrollTop = $(window).scrollTop(),
             winHeight = $(window).height(),
             pageHeader = $('#page-header').offset().top,
             section1 = $('#s-services').offset().top - (winHeight * 0.3),
             section2 = $('#s-portfolio').offset().top - (winHeight * 0.3),
             section3 = $('#s-callback').offset().top - (winHeight * 0.3),
             pageFooter = $('#page-footer').offset().top;
         console.log(winHeight);


         // Проверка положения секции относительно других и добавление подсветки
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

      itemHighlight();
   }

   function copyright() {
      let year = new Date().getFullYear(),
          yearBlock = $('.page-footer .copyright .year');

      yearBlock.html(year);
   }
   copyright();

   menuSettings();


});