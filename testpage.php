<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-testpage.css">
    <!-- <link href="https://assets.htmlacademy.ru/content/skills/6/case-01/outline.css" rel="stylesheet"> -->
    <title>Тесты</title>

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
                <li class="page-menu-item ">
                    <a class="page-menu-link page-menu-link-book" href="manualpage.php">Методичка</a>
                </li>
                <li class="page-menu-item">
                    <a class="page-menu-link page-menu-link-home" href="homeworkpage.php">Домашняя работа</a>
                </li>
                <li class="page-menu-item page-menu-item-active">
                    <a class="page-menu-link page-menu-link-exam-active" href="#">Тесты</a>
                </li>
                <li class="page-menu-item">
                    <a class="page-menu-link page-menu-link-about" href="aboutus.php">О нас</a>
                </li>
            </ul>
        </nav>
        <div class="content">

            <main class="page-main-tests">
                <h2 class="title-tetst">Тесты</h2>
                <section class="testcards-block">

                    <div class="test-card">
                        <div class="description-test">
                            <p class="test-card-headline">«Бифитер», «Кокни», «Даблдекер»...</p>
                            <p class="test-card-text">Пройдите тест и узнайте насколько хорошо вы знакомы с жизнью в Лондоне</p>
                            <button class="go-test" id="showtest">Пройти тест ➞</button>
                            <button class="go-test hidebtn" id="hidetest">Скрыть</button>
                        </div>
                    </div>
                    <div class="wrapper" id="quiz-test-1">
                        <iframe src="quiz.html" width="480" height="720" class="quiz-frame"></iframe>
                    </div>
                    <div class="test-card">
                        <div class="description-test">
                            <p class="test-card-headline">Жареный гусь смотрит в окно. Хочет понять, почему так темно?</p>
                            <p class="test-card-text">В преддверии Рождества даже люди, которые обычно не готовят, резко становятся посетителями кулинарных сайтов. Пройдите тест и познакомьтесь с кухней Великобритании</p>
                            <button class="go-test">Пройти тест ➞</button>
                            <button class="go-test hidebtn">Скрыть</button>
                        </div>
                    </div>

                    <div class="test-card">
                        <div class="description-test">
                            <p class="test-card-headline">Мальчик, который выжил</p>
                            <p class="test-card-text">Тест по местам съемок знаменитой киносаги о Гарри Поттере</p>
                            <button class="go-test">Пройти тест ➞</button>
                            <button class="go-test hidebtn">Скрыть</button>
                        </div>
                    </div>
                    <!-- <div class="test-card ">

                        <img class="test-card-img" src="assets/images/main/London.jpg" alt="Бигбен на фоне голубого облачного неба">
                        <img class="test-card-img blue" src="assets/images/main/blue-2.jpg">
                        <div class="description-test">
                            <p class="test-card-headline">«Бифитер», «Кокни», «Даблдекер»...</p>
                            <p class="test-card-text">Пройдите тест и узнайте насколько хорошо вы знакомы с жизнью в Лондоне</p>
                            <button class="go-test" id="showtest">Пройти тест ➞</button>
                            <button class="go-test hidebtn" id="hidetest">Скрыть</button>
                        </div>
                    </div> -->



                    <!-- <div class="test-card">
                        <img class="test-card-img" src="assets/images/tests/liecester-square.jpg" alt="Лондонский новогодний рынок">
                        <img class="test-card-img blue" src="assets/images/main/blue-2.jpg">
                        <div class="description-test">
                            <p class="test-card-headline">Жареный гусь смотрит в окно. Хочет понять, почему так темно?</p>
                            <p class="test-card-text">В преддверии Рождества даже люди, которые обычно не готовят, резко становятся посетителями кулинарных сайтов. Пройдите тест и познакомьтесь с кухней Великобритании </p>
                            <a class="go-test" href="#">Пройти тест ➞</a>
                        </div>
                    </div>


                    <div class="test-card">
                        <img class="test-card-img" src="assets/images/tests/scotland.jpg" alt="Мост в Шотландии">
                        <img class="test-card-img blue" src="assets/images/main/blue-2.jpg">
                        <div class="description-test">
                            <p class="test-card-headline">Мальчик, который выжил</p>
                            <p class="test-card-text">Тест по местам съемок знаменитой киносаги о Гарри Поттере</p>
                            <a class="go-test" href="#">Пройти тест ➞</a>
                        </div>
                    </div> -->
                </section>
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
    <!-- <nav class="page-menu">
        <a class="logo" href="index.html">
            <img class="logo-img" src="assets/images/main/logotip.jpg" alt="Dolphin, языковая школа">
        </a>
        <ul class="page-menu-list">
            <li class="page-menu-item">
                <a class="page-menu-link page-menu-link-cab-manual" href="index.html">Главная</a>
            </li>
            <li class="page-menu-item">
                <a class="page-menu-link page-menu-link-book" href="manualpage.html">Методичка</a>
            </li>
            <li class="page-menu-item">
                <a class="page-menu-link page-menu-link-home" href="homeworkpage.php">Домашняя работа</a>
            </li>
            <li class="page-menu-item page-menu-item-active">
                <a class="page-menu-link page-menu-link-exam-active" href="#">Тесты</a>
            </li>
        </ul>

    </nav>
    <header class="page-header">


        <button class="english-btn" type="button"><span>ENG</span></button>
    </header>
    <main class="page-main-tests">
        <h2 class="title-tetst">Тесты</h2>
        <section class="testcards-block">
            <div class="test-card ">

                <img class="test-card-img" src="assets/images/main/London.jpg" alt="Бигбен на фоне голубого облачного неба">
                <img class="test-card-img blue" src="assets/images/main/blue-2.jpg">
                <div class="description-test">
                    <p class="test-card-headline">«Бифитер», «Кокни», «Даблдекер»...</p>
                    <p class="test-card-text">Пройдите тест и узнайте насколько хорошо вы знакомы с жизнью в Лондоне</p>
                    <button class="go-test" id="showtest">Пройти тест ➞</button>
                    <button class="go-test hidebtn" id="hidetest">Скрыть</button>
                </div>
            </div>

            <div class="wrapper" id="quiz-test-1">
                <iframe src="quiz.html" width="480" height="720" class="quiz-frame"></iframe>
            </div>

            <div class="test-card">
                <img class="test-card-img" src="assets/images/tests/liecester-square.jpg" alt="Лондонский новогодний рынок">
                <img class="test-card-img blue" src="assets/images/main/blue-2.jpg">
                <div class="description-test">
                    <p class="test-card-headline">Жареный гусь смотрит в окно. Хочет понять, почему так темно?</p>
                    <p class="test-card-text">В преддверии Рождества даже люди, которые обычно не готовят, резко становятся посетителями кулинарных сайтов. Пройдите тест и познакомьтесь с кухней Великобритании </p>
                    <a class="go-test" href="#">Пройти тест ➞</a>
                </div>
            </div>


            <div class="test-card">
                <img class="test-card-img" src="assets/images/tests/scotland.jpg" alt="Мост в Шотландии">
                <img class="test-card-img blue" src="assets/images/main/blue-2.jpg">
                <div class="description-test">
                    <p class="test-card-headline">Мальчик, который выжил</p>
                    <p class="test-card-text">Тест по местам съемок знаменитой киносаги о Гарри Поттере</p>
                    <a class="go-test" href="#">Пройти тест ➞</a>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer">
        <p class="copyright"> 2022</p>
        <a class="page-footer-logo" href="#"><b>Dolphin school</b>, языковая школа</a>
        <p class="copyright-details"> <a href="https://vk.com/id161066998" target="_blank">Сайт создан Иваном Поддубным</a>
        </p>
    </footer> -->
</body>

<script src="assets/js/show-hide.js"></script>
<script src="assets/js/quiz.js"></script>

</html>