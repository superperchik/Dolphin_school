<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-manual.css">
    <!-- <link href="https://assets.htmlacademy.ru/content/skills/6/case-01/outline.css" rel="stylesheet"> -->
    <title>Учебные пособия</title>

</head>

<body>
    <div class="wrapper">
    <header class="page-header">
                <div class="part1">
                    <a class="logo" href="index.php">
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
                <li class="page-menu-item ">
                    <a class="page-menu-link page-menu-link-cab-manual" href="index.php">Главная</a>
                </li>
                <li class="page-menu-item page-menu-item-active">
                    <a class="page-menu-link page-menu-link-book-manual" href="#">Методичка</a>
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

            <h1 class="title-manual">Методичка</h1>
            <main class="page-main-manual">
                <div class="card-grid">
                    <a class="card card-1" href="#">
                        <div class="card__background" style="background-image: url(assets/images/manual/englishbook1.jpg)"></div>
                        <div class="card__content">
                            <h3 class="card__category">Учебное пособие</h3>

                        </div>
                    </a>
                    <a class="card card-2" href="#">
                        <div class="card__background" style="background-image: url(assets/images/manual/englishbook2.jpg)"></div>
                        <div class="card__content">
                            <h3 class="card__category">Самоучитель</h3>
                        </div>
                    </a>
                    <a class="card card-3" href="#">
                        <div class="card__background" style="background-image: url(assets/images/manual/englishbook3.jpg)"></div>
                        <div class="card__content">
                            <h3 class="card__category">Учебник старшей <br> школы</h3>
                        </div>
                    </a>
                </div>
            </main>
        </div>

        <footer class="page-footer">
            <p class="copyright"> 2022</p>
            <a class="page-footer-logo" href="#"><b>Dolphin school</b>, языковая школа</a>
            <p class="copyright-details"> <a href="https://vk.com/id161066998" target="_blank">Сайт создан Иваном Поддубным</a>
                <p class="copyright-details eng-href-footer"> <a href="#" target="_blank">English version</a>
                </p>
        </footer>
    </div>
    <!-- модальное окно -->
    <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                <header class="modal__header">
                    <h2 class="modal__title" id="modal-1-title">
                        Speakout
                    </h2>
                    <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                </header>
                <main class="modal__content" id="modal-1-content">
                    <p>
                        SpeakOut от Longman это шестиуровневый учебно-методический комплекс английского языка для взрослых, созданный на базе аутентичных материалов BBC, эффективно развивающий речевые навыки.
                        <br>— Отбор лексико-грамматического материала ориентирован на потребности реального повседневного общения
                        <br>— Видео файлы с записями реальных интервью, снятых BBC, дают изучающим возможность услышать и научиться понимать современную английскую речь, звучащую в реальной жизни
                        <br>— Разнообразные дополнительные материалы. Система тестирования, разработанная на основе курса, дает возможность изучать английский язык совершенно самостоятельно и быть постоянно уверенным в своих знаниях. <br> Присоединяйтесь
                        ко всем тех, для кого процесс изучения английского языка стал простым и доступным, изучайте английский вместе с SpeakOut.
                    </p>
                </main>

            </div>
        </div>
    </div>

    <div class="modal micromodal-slide" id="modal-2" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-2-title">
                <header class="modal__header">
                    <h2 class="modal__title" id="modal-2-title">
                        Advanced Grammar in Use
                    </h2>
                    <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                </header>
                <main class="modal__content" id="modal-2-content">
                    <p>
                        Самая продаваемая в мире серия грамматики для изучающих английский язык. Это издание содержит 100 единиц справочных и практических материалов по грамматике, с полноцветными иллюстрациями и удобным для пользователя макетом. <br>                        Он идеально подходит для учащихся, готовящихся к экзаменам Cambridge Advanced, Proficiency или IELTS, и используется международным корпусом Cambridge, который гарантирует, что язык является аутентичным и современным. <br> В электронной
                        книге есть те же грамматические пояснения и упражнения, что и в печатной книге, а также другие замечательные функции. Вы можете прослушать все примеры предложений из книги, записать свои ответы на упражнения, выделить текст, добавить
                        страницы в закладки и добавить свои собственные заметки.
                    </p>
                </main>
            </div>
        </div>
    </div>

    <div class="modal micromodal-slide" id="modal-3" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-3-title">
                <header class="modal__header">
                    <h2 class="modal__title" id="modal-3-title">
                        Upstream
                    </h2>
                    <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                </header>
                <main class="modal__content" id="modal-3-content">
                    <p>
                        Один из самых популярных учебных курсов для эффективного изучения английского языка! <br> Многоуровневый учебный курс, направленный на развитие всех навыков владения языком (говорение, аудирование, чтение, письмо). Каждый уровень
                        составлен по модульной системе. Рабочие тетради состоят из множества упражнений и идеально подойдут для изучения английского в группах. Рассчитан на подростков и взрослых.
                    </p>
                </main>
            </div>
        </div>
    </div>




</body>
<script src="assets/js/micromodal.js"></script>

</html>