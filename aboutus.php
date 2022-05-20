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
        <link rel="stylesheet" href="assets/css/style-about.css">
        <!-- Линии  -->
        <!-- <link href="https://assets.htmlacademy.ru/content/skills/6/case-01/outline.css" rel="stylesheet"> -->
        <link rel="icon" href="assets/images/main/logo.png">
        <title>Dolphin school, языковая школа</title>

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
                        <a class="page-menu-link page-menu-link-cab-about" href="index.php">Главная</a>
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
                    <li class="page-menu-item page-menu-item-active">
                        <a class="page-menu-link page-menu-link-about" href="#">О нас</a>
                    </li>
                </ul>
            </nav>

            <div class="content">
                <div class="about">
                    <div class="image-about"><img src="/assets/images/about/image.jpg" alt="Директор школы">
                        <h2>Шубин Антон Александрович, директор Dolphin School</h2>
                    </div>
                    <div class="text-about">
                        <h1>Школа Англиского языка</h1>
                        <p>Внезапно, диаграммы связей объединены в целые кластеры себе подобных! Для современного мира внедрение современных методик позволяет оценить значение переосмысления внешнеэкономических политик.</p>

                        <p>В частности, сплочённость команды профессионалов, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для форм воздействия. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие
                            различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач. В своём стремлении улучшить пользовательский опыт мы упускаем, что
                            диаграммы связей освещают чрезвычайно интересные особенности картины в целом, однако конкретные выводы, разумеется, объективно рассмотрены соответствующими инстанциями. Как принято считать, сторонники тоталитаризма в науке
                            формируют глобальную экономическую сеть и при этом - обнародованы. В рамках спецификации современных стандартов, ключевые особенности структуры проекта формируют глобальную экономическую сеть и при этом - призваны к ответу.
                            Есть над чем задуматься: тщательные исследования конкурентов формируют глобальную экономическую сеть и при этом - разоблачены.</p>

                        <p>В своём стремлении улучшить пользовательский опыт мы упускаем, что реплицированные с зарубежных источников, современные исследования неоднозначны и будут функционально разнесены на независимые элементы. Вот вам яркий пример современных
                            тенденций - начало повседневной работы по формированию позиции является качественно новой ступенью глубокомысленных рассуждений.</p>

                        <p>Также как реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании направлений прогрессивного развития. Учитывая ключевые сценарии поведения, повышение уровня гражданского сознания
                            однозначно фиксирует необходимость направлений прогрессивного развития. Задача организации, в особенности же укрепление и развитие внутренней структуры представляет собой интересный эксперимент проверки системы обучения кадров,
                            соответствующей насущным потребностям. Прежде всего, реализация намеченных плановых заданий однозначно определяет каждого участника как способного принимать собственные решения касаемо переосмысления внешнеэкономических политик.</p>
                    </div>

                </div>

            </div>
            <footer class="page-footer">
                <p class="copyright"> 2022</p>
                <a class="page-footer-logo" href="#"><b>Dolphin school</b>, языковая школа</a>
                <p class="copyright-details"> <a href="https://vk.com/id161066998" target="_blank">Сайт создан Иваном Поддубным</a>
                    <p class="copyright-details eng-href-footer"> <a href="#" target="_blank">English version</a>
                    </p>
            </footer>
        </div>


    </body>

    </html>