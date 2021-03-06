<!DOCTYPE html>
<html lang="ru">

<head>

   <meta charset="utf-8">
   <!-- <_base href="/"> -->

   <title>Разработка сайтов | Андрей Ильин</title>
   <meta name="description" content="Разработка сайтов - Андрей Ильин">

   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Template Basic Images Start -->
   <meta property="og:image" content="path/to/image.jpg">

   <!--[if lt IE 9]>
   <script src="./libs/html5shiv/html5shiv.min.js"></script>
   <![endif]-->

   <link rel="icon" href="./img/icons/favicon/favicon.ico">
   <link rel="apple-touch-icon" sizes="180x180" href="./img/icons/favicon/favicon180x180.png">
   <!-- Template Basic Images End -->

   <!-- Custom Browsers Color Start -->
   <meta name="theme-color" content="#000">
   <!-- Custom Browsers Color End -->

   <link rel="stylesheet" href="./css/style.min.css">

</head>

<body class="ishome">
<!-- .wrapper -->
<div class="wrapper">
   <div id="overlay" class="overlay"></div>

   <!-- .page-header -->
   <header id="page-header" class="page-header"
           style="background-image: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)),url('./img/header-bg.jpg');">
      <div class="page-header-flex">
         <div class="flex-center">
            <div class="page-header-composition">
               <p>Привет! Мое имя - Андрей Ильин, и я</p>
               <h1 class="h1-title">Full-Stack Разработчик</h1>
               <p>Создание современных и адаптивных веб-сайтов</p>
               <div class="icon-vk"></div>
            </div>
            <!-- /.page-header-composition -->
         </div>
         <!-- /.flex-center -->
      </div>
      <!-- /.page-header-flex -->
      <a href="#s-services" class="page-header-scroll-down btn-scroll">
         <i class="icon-arrow"></i>
      </a>
      <!-- /.page-header-scroll-down -->
   </header>
   <!-- /.page-header -->

   <!-- page-content -->
   <main id="page-content" class="page-content">
      <nav id="main-nav" class="main-nav">
         <button id="menu-button"
                 class="menu-button"><span></span></button>
         <div class="container">
            <div class="row">
               <div class="col-12 main-nav-wrap">
                  <p class="main-nav__logo">{ Веб-разработка }</p>
                  <!-- /.main-logo -->
                  <ul class="main-menu">
                     <li class="main-menu__item">
                        <a href="#page-header" class="main-menu__link">Главная</a>
                     </li>
                     <li class="main-menu__item">
                        <a href="#s-services" class="main-menu__link">Услуги</a>
                     </li>
                     <li class="main-menu__item">
                        <a href="#s-portfolio" class="main-menu__link">Портфолио</a>
                     </li>
                     <li class="main-menu__item">
                        <a href="#s-callback" class="main-menu__link">Контакты</a>
                     </li>
                  </ul>
                  <!-- /.main-menu -->
               </div>
               <!-- /.col-12 -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
      </nav>
      <!-- /.main-navigation -->
      <section id="s-services" class="s-services"
               style="background-image: linear-gradient(rgba(255,255,255,.5),rgba(255,255,255,.5)),url('./img/gray.png');">
         <div class="section-composition">
            <h2 class="h2-title">Мои услуги</h2>
            <p class="subhead">Проектирование <span>лендинга</span>, <span>сайта-визитки</span> и <span>интернет-магазина</span><br>с
               последующей посадкой на CMS WordPress</p>
         </div>
         <!-- /.section-composition-->

         <div class="container">
            <div class="row s-services-row">
               <div class="col-lg-4 col-md-6">
                  <div class="s-services-card">
                     <i class="icon-puzzle icon"></i>
                     <h3 class="h3-title s-services-card__h3-title">Верстка</h3>
                     <ul class="s-services-card__list">
                        <li class="s-services-card__item">HTML5 / CSS3</li>
                        <li class="s-services-card__item">SASS (SCSS)</li>
                        <li class="s-services-card__item">Bootstrap 4</li>
                        <li class="s-services-card__item">Adaptive / Responsive</li>
                        <li class="s-services-card__item">Cross browser</li>
                     </ul>
                  </div>
                  <!-- /.s-services-card -->
               </div>
               <!-- /.col-xl-4 -->
               <div class="col-lg-4 col-md-6">
                  <div class="s-services-card">
                     <i class="icon-gear icon"></i>
                     <h3 class="h3-title s-services-card__h3-title">Программирование</h3>
                     <ul class="s-services-card__list">
                        <li class="s-services-card__item">JavaScript(jQuery)</li>
                        <li class="s-services-card__item">Gulp.js</li>
                        <li class="s-services-card__item">PHP</li>
                        <li class="s-services-card__item">WordPress</li>
                     </ul>
                  </div>
                  <!-- /.s-services-card -->
               </div>
               <!-- /.col-xl-4 -->
               <div class="col-lg-4">
                  <div class="s-services-card">
                     <i class="icon-additionally icon"></i>
                     <h3 class="h3-title s-services-card__h3-title">Дополнительно</h3>
                     <ul class="s-services-card__list">
                        <li class="s-services-card__item">Adobe Photoshop</li>
                        <li class="s-services-card__item">Adobe Illustrator</li>
                        <li class="s-services-card__item">Inkscape</li>
                        <li class="s-services-card__item">Avocode / Zeplin</li>
                     </ul>
                  </div>
                  <!-- /.s-services-card -->
               </div>
               <!-- /.col-xl-4 -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
      </section>
      <!-- /#services.services -->
      <section id="s-portfolio" class="s-portfolio">
         <div class="section-composition">
            <h2 class="h2-title">Примеры работ</h2>
            <p class="subhead">Ниже представлены примеры моих работ. Кликнув по ним,<br> вы сможете разглядеть их
               подробнее</p>
         </div>
         <!-- /.section-composition-->

         <div class="container">
            <div class="row s-portfolio-row">
               <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                  <a href="/demo/snow/" class="s-portfolio-box"
                     target="_blank">
                     <img src="./img/item-1.jpg" class="s-portfolio-box__img img-cover" alt="Брендинговое Агенство">
                     <h4 class="h4-title s-portfolio-box__h4-title">Брендинговое<span>Агенство</span></h4>
                     <p class="s-portfolio-box__test-ex">*тестовый вариант</p>
                     <p class="s-portfolio-box__action">Кликните для перехода</p>
                     <span class="icon-click s-portfolio-box__icon"></span>
                  </a>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                  <a href="/demo/pizza/" class="s-portfolio-box"
                     target="_blank">
                     <img src="./img/item-2.jpg" class="s-portfolio-box__img img-cover" alt="Брендинговое Агенство">
                     <h4 class="h4-title s-portfolio-box__h4-title">Заказ<span>Пиццы</span></h4>
                     <p class="s-portfolio-box__test-ex">*тестовый вариант</p>
                     <p class="s-portfolio-box__action">Кликните для перехода</p>
                     <span class="icon-click s-portfolio-box__icon"></span>
                  </a>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                  <a href="/demo/take/" class="s-portfolio-box"
                     target="_blank">
                     <img src="./img/item-3.jpg" class="s-portfolio-box__img img-cover" alt="Реклама Приложения">
                     <h4 class="h4-title s-portfolio-box__h4-title">Реклама<span>Приложения</span></h4>
                     <p class="s-portfolio-box__test-ex">*тестовый вариант</p>
                     <p class="s-portfolio-box__action">Кликните для перехода</p>
                     <span class="icon-click s-portfolio-box__icon"></span>
                  </a>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                  <a href="/demo/wdm/" class="s-portfolio-box"
                     target="_blank">
                     <img src="./img/item-4.jpg" class="s-portfolio-box__img img-cover" alt="Салон Красоты">
                     <h4 class="h4-title s-portfolio-box__h4-title">Салон<span>Красоты</span></h4>
                     <p class="s-portfolio-box__test-ex">*тестовый вариант</p>
                     <p class="s-portfolio-box__action">Кликните для перехода</p>
                     <span class="icon-click s-portfolio-box__icon"></span>
                  </a>
               </div>
               <!-- /.col-xl-4 -->
               <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                  <a href="/demo/business/" class="s-portfolio-box"
                     target="_blank">
                     <img src="./img/item-5.jpg" class="s-portfolio-box__img img-cover" alt="Салон Красоты">
                     <h4 class="h4-title s-portfolio-box__h4-title">Реклама<span>Хостинга</span></h4>
                     <p class="s-portfolio-box__test-ex">*тестовый вариант</p>
                     <p class="s-portfolio-box__action">Кликните для перехода</p>
                     <span class="icon-click s-portfolio-box__icon"></span>
                  </a>
               </div>
               <!-- /.col-xl-4 -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
         <div class="section-composition s-portfolio__section-composition">
            <p class="subhead"><span>*сделанные с превеликим удовольствием</span> и общепринятым стандартом W3C</p>
         </div>
         <!-- /.section-composition-->
      </section>
      <!-- /#s-portfolio.s-portfolio -->
      <section id="s-callback" class="s-callback"
               style="background-image: linear-gradient(rgba(255,255,255,.5),rgba(255,255,255,.5)),url('./img/gray.png');">
         <div class="section-composition">
            <h2 class="h2-title">Свяжитесь со мной</h2>
            <p class="subhead">Если у вас возникло желание к сотрудничеству, заполните форму ниже, пожалуйста. Либо Вы
               можете связаться со мной напрямую через почту:
               <a href="mailto:dev.andreyilin@gmail.com"
                  class="s-callback__mail-address"><span>dev.andreyilin@gmail.com</span></a>
            </p>
         </div>
         <!-- /.section-composition-->

         <div class="container">
            <div class="row">
               <div class="col-lg-6 offset-lg-3">
                  <form id="form-callback" class="s-callback-form">
                     <input type="text" name="name"
                            class="s-callback-form__field"
                            placeholder="Ваше имя...">
                     <input type="email" name="email" required
                            class="s-callback-form__field"
                            placeholder="Ваша почта...">
                     <select name="services" id="selectize"
                             class="s-callback-form__field s-callback-form__select">
                        <option value disabled selected>Тема письма...</option>
                        <option>Сотрудничество</option>
                        <option>Вопрос</option>
                        <option>Сказать &laquo;привет&raquo;</option>
                        <option>Другое</option>
                     </select>
                     <textarea class="s-callback-form__field" name="message" rows="5"
                               placeholder="Текст сообщения..."
                               required></textarea>
                     <input type="submit" class="button" value="Отправить">

                     <div class="s-callback-form__success">
                        <p>Ваше сообщение <span>успешно</span> отправлено.</p>
                     </div>
                     <!-- /.success -->
                  </form>
                  <!-- /#form.s-callback__form -->
               </div>
               <!-- /.col-lg-6 offset-lg-3 -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->

      </section>
      <!-- /#s-callback.s-callback -->
   </main>
   <!-- /.page-content -->

   <!-- .page-footer -->
   <footer id="page-footer" class="page-footer">
      <div class="copyright">
         <p>©<span class="year"></span><span class="name">Андрей Ильин</span></p>
      </div>
   </footer>
   <!-- /.page-footer -->

</div>
<!-- /.wrapper -->


<!-- SCRIPTS -->
<script src="./js/scripts.min.js"></script>

</body>
</html>
