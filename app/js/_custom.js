$(function () {

   // Selectize
   $('#selectize').selectize({
      create: true,
      sortField: 'text'
   });

   //E-mail Ajax Send
   $("#form-callback").submit(function () { //Change
      let th = $(this),
          successDiv = th.children('.s-callback-form__success');
      $.ajax({
         type: "POST",
         url: "mail.php", //Change
         data: th.serialize()
      }).done(function () {
         successDiv.addClass('s-callback-form__success--visible');
         setTimeout(function() {
            successDiv.removeClass('s-callback-form__success--visible');
         }, 5000);
         console.log('Отправлено');

         setTimeout(function () {
            // Done Functions
            th.trigger("reset");
         }, 1000);
      });
      return false;
   });

});