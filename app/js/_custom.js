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
         if(th.hasClass('s-callback-form__success--visible')) {
            th.removeClass('s-callback-form__success--visible');
         }
      });
      // Скрытие модального окна при клике вне него
      $(document).mouseup(function (e){ // событие клика по веб-документу
         let div = successDiv; // тут указываем ID элемента
         if (!div.is(e.target) // если клик был не по нашему блоку
             && div.has(e.target).length === 0) { // и не по его дочерним элементам
            div.removeClass('s-callback-form__success--visible'); // скрываем его
         }
      });

      //E-mail Ajax Send
      $(form).submit(function () { //Change
         let th = $(this);
         $.ajax({
            type: "POST",
            url: "mail.php", //Change
            data: th.serialize()
         }).done(function () {
            successDiv.addClass('s-callback-form__success--visible');
            setTimeout(function() {
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




});