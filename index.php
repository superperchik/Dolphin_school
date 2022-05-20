<?php
session_start();
?>
    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/indexmodal.css">
        <!-- Линии  -->
        <!-- <link href="https://assets.htmlacademy.ru/content/skills/6/case-01/outline.css" rel="stylesheet"> -->
        <link rel="icon" href="assets/images/main/logo.png">
        <title>Dolphin school, языковая школа</title>

    </head>

    <body>
        <div class="wrapper">
            <header class="page-header">
                <div class="part1">
                    <a class="logo" href="#">
                        <img class="logo-img" src="assets/images/main/logotip.jpg" alt="Dolphin, языковая школа">
                    </a>
                </div>
                <div class="part2">
                    <h1>Школа Англиского языка Dolphin School</h1>
                </div>
                <?php if(isset($_SESSION['user'])) {?>
                <div class="part4">
                    <a class="exit-chg" href="vendor/logout.php">Выйти</a>
                </div>
                <?php } ?>
                <div class="part3">
                    <a class="english-chg" href="loginpage.php">English</a>
                </div>
            </header>

            <nav>
                <ul class="sidenav">
                    <li class="page-menu-item page-menu-item-active">
                        <a class="page-menu-link page-menu-link-cab">Главная</a>
                    </li>
                    <li class="page-menu-item">
                        <a class="page-menu-link page-menu-link-book" href="manualpage.php">Методичка</a>
                    </li>
                    <li class="page-menu-item">
                        <a class="page-menu-link page-menu-link-home" href="homeworkpage.php">Домашняя работа</a>
                    </li>
                    <li class="page-menu-item">
                        <a class="page-menu-link page-menu-link-exam" href="testpage.php">Тесты</a>
                    </li>
                    <li class="page-menu-item">
                        <a class="page-menu-link page-menu-link-about" href="aboutus.php">О нас</a>
                    </li>
                </ul>
            </nav>

            <div class="content">
                <!-- <h2>Responsive Sidenav Example</h2>
            <p>This example use media queries to transform the sidenav to a top navigation bar when the screen size is 900px or less.</p>
            <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
            <p>You will learn more about media queries and responsive web design later in our CSS Tutorial.</p>
            <h3>Resize the browser window to see the effect.</h3> -->

                <section class="slider">

                    <!-- <img class="slider-img" src="assets/images/main/London.jpg" alt="Бигбен на фоне голубого облачного неба"> -->
                    <!-- <img class="slider-img blue" src="assets/images/main/blue-2.jpg" height="400px"> -->


                    <p class="slider-headline">«Бифитер», «Кокни», «Даблдекер»...</p>
                    <p class="slider-text">Пройдите тест и узнайте насколько хорошо вы знакомы с жизнью в Лондоне</p>
                    <a href="testpage.html">Пройти тест ➞</a>



                </section>

                <section class="offers">
                    <h2 class="visually-hidden">Интересные предложения</h2>
                    <ul class="offers-list">
                        <li class="offers-item">
                            <h3>Английский завтрак</h3>
                            <div class="offer-content ">
                                <p class="offers-item-text">Языковой клуб</p>
                                <p class="offers-item-time">10:00 — 11:00 (ПН—ПТ)</p>
                            </div>
                            <div class="offer-footer">
                                <a href="#openModal" class="item-1">Записаться ➞</a>
                            </div>
                        </li>
                        <li class="offers-item">
                            <h3>Лето в Лондоне</h3>
                            <div class="offer-content">
                                <p class="offers-item-text">Разговорный английский</p>
                                <p class="offers-item-time">10 июня — 3 июля</p>
                            </div>
                            <div class="offer-footer">
                                <a href="#openModal">Записаться ➞</a>
                            </div>
                        </li>
                        <li class="offers-item">
                            <h3>Английский экзаменационный</h3>
                            <div class="offer-content">
                                <p class="offers-item-text">Подготовка к ЕГЭ и ОГЭ</p>
                            </div>
                            <div class="offer-footer">
                                <a href="#openModal">Записаться ➞</a>
                            </div>
                        </li>
                        <li class="offers-item">
                            <h3>Лето в Лондоне</h3>
                            <div class="offer-content">
                                <p class="offers-item-text">Языковой лагерь в самом центре Англии</p>
                                <p class="offers-item-time">Август 2022</p>
                            </div>
                            <div class="offer-footer">
                                <a href="#openModal">Записаться ➞</a>
                            </div>
                        </li>
                    </ul>
                </section>

                <section class="media">
                    <h2 class="visually-hidden">Просмотр видео уроков</h2>
                    <video class="lesson-video" poster="assets/images/main/London-2.png" width="540" height="300" controls preload="metadata">
            <source src="assets/video/English - London sightseeing (A1-A2 - with subtitles).mp4" type="video/mp4">
            <source src="assets/video/English - London sightseeing (A1-A2 - with subtitles).mp4" type="video/webm">
            <source src="assets/video/English - London sightseeing (A1-A2 - with subtitles).mp4" type="video/ogg">
          </video>
                    <div class="video-play-list-wrapper">
                        <h3>Английские песни</h3>
                        <div class="play-list">
                            <div class="play-item">
                                <h4>OneRepublic -</h4>
                                <p>Counting stars</p>
                                <audio src="assets/audio/OneRepublic - Counting Stars.mp3" controls preload="metadata"></audio>
                            </div>
                            <div class="play-item">
                                <h4>Green Day -</h4>
                                <p>21 Guns</p>
                                <audio src="assets/audio/Green Day - 21 Guns.mp3" controls preload="metadata"></audio>
                            </div>
                            <div class="play-item">
                                <h4>Pharrell Williams -</h4>
                                <p>Happy</p>
                                <audio src="assets/audio/Pharrell Williams - Happy.mp3" controls preload="metadata"></audio>
                            </div>
                            <div class="play-item">
                                <h4>Adele -</h4>
                                <p>Hello</p>
                                <audio src="assets/audio/Adele - Hello.mp3" controls preload="metadata"></audio>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="contacts">
                    <h2>Контакты</h2>
                    <p class="contact-list">Lewisham Heights, 155 Honor Oak Rd, London SE23 3RW, Великобритания</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.8274443392365!2d-0.05848138387673692!3d51.44296277962453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487603cfb9c30ffb%3A0x10e0b8cd65a1d036!2zTGV3aXNoYW0gSGVpZ2h0cywgMTU1IEhvbm9yIE9hayBSZCwgTG9uZG9uIFNFMjMgM1JXLCDQktC10LvQuNC60L7QsdGA0LjRgtCw0L3QuNGP!5e0!3m2!1sru!2sru!4v1642935438784!5m2!1sru!2sru"
                        width="90%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <h2 class="contact-list">Режим работы</h2>
                    <ul>
                        <li>Понедельник: 9:00 - 19:30</li>
                        <li>Вторник: 9:00 - 18:00</li>
                        <li>Среда: 9:00 - 18:00</li>
                        <li>Четверг: 9:00 - 18:00</li>
                        <li>Пятница: 9:00 - 17:00</li>
                        <li>Суббота, Воскресенье - выходной</li>
                    </ul>
                </section>

            </div>
            <footer class="page-footer">
                <p class="copyright"> 2022</p>
                <a class="page-footer-logo" href="#"><b>Dolphin school</b>, языковая школа</a>
                <p class="copyright-details"> <a href="https://vk.com/id161066998" target="_blank">Сайт создан Иваном Поддубным</a>
                    <p class="copyright-details eng-href-footer"> <a href="#" target="_blank">English version</a>
                    </p>
            </footer>
        </div>

        <div id="openModal" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Форма обратной связи</h3>
                        <a href="#close" title="Close" class="close">×</a>
                    </div>
                    <div class="modal-body">
                        <form action="/vendor/telegram.php" class="form" method="POST">
                            <div class="form__group form__group--md">
                                <input required type="text" class="form__control" placeholder="Ваше имя" name="user_name" />
                                <span class="form__line"></span>
                            </div>

                            <div class="form__group form__group--md">
                                <input required type="tel" class="form__control tel" placeholder="Ваш телефон" name="user_phone" />
                                <span class="form__line"></span>
                            </div>

                            <div class="form__group form__group--md">
                                <textarea class="form__control form__control--textarea" name="user_text" placeholder="Текст сообщения"></textarea>
                                <span class="form__line"></span>
                            </div>

                            <div class="form__footer">
                                <div class="form__group form__group--md">
                                    <button class="btn btn--blue btn--rounded btn--sm" type="submit">
                            Отправить
                            </button>
                                </div>
                            </div>
                        </form>
                        <!-- <form id="form-contact" method="POST" class="contact-form" autocomplete="off" enctype="multipart/form-data">
 
  <p class="contact-form__title">Закажите обратный звонок и наш консультант свяжется с вами</p>
 
  <div class="preloader"></div>
  <p class="contact-form__message"></p>
 
 
  <div class="contact-form__input-wrapper contact-form__input-wrapper_name">
    <input name="name" type="text" class="contact-form__input contact-form__input_name"
           placeholder="Введите ваше имя">
  </div>
 
 
  <div class="contact-form__input-wrapper contact-form__input-wrapper_phone">
    <input name="phone" type="tel" class="contact-form__input contact-form__input_phone"
           placeholder="Введите ваш телефон">
  </div>
 
 
 
  
  <input name="theme" type="hidden" class="contact-form__input contact-form__input_theme"
         value="Новая заявка на обучение ">
 
  
  <button type="submit" class="contact-form__button">Отправить</button>
 
</form> -->
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var scrollbar = document.body.clientWidth - window.innerWidth + 'px';
            console.log(scrollbar);
            document.querySelector('[href="#openModal"]').addEventListener('click', function() {
                document.body.style.overflow = 'hidden';
                document.querySelector('#openModal').style.marginLeft = scrollbar;
            });
            document.querySelector('[href="#close"]').addEventListener('click', function() {
                document.body.style.overflow = 'visible';
                document.querySelector('#openModal').style.marginLeft = '0px';
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/telegramform.js"></script>

    </html>