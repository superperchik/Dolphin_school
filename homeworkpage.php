<?php
session_start();
require_once 'vendor/connection.php';
?>
    <!DOCTYPE html>
    <html lang="ru">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/indexmodal.css">
        <link rel="stylesheet" href="assets/css/style-homework.css">
        <!-- <link href="https://assets.htmlacademy.ru/content/skills/6/case-01/outline.css" rel="stylesheet"> -->
     
        <title>Домашняя работа</title>

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
                        <a class="page-menu-link page-menu-link-cab-home" href="index.php">Главная</a>
                    </li>
                    <li class="page-menu-item">
                        <a class="page-menu-link page-menu-link-book" href="manualpage.php">Методичка</a>
                    </li>
                    <li class="page-menu-item page-menu-item-active">
                        <a class="page-menu-link page-menu-link-home page-menu-link-home-active" href="#">Домашняя работа</a>
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

                <?php if (isset($_SESSION['user'])) : ?>
                <?php if($_SESSION['user']['role'] == 1) {?>
                <!-- аккаунт учителя -->
                <main class="page-main-homework">
                    <h1 class="tittle-homework">Добавить домашнее задание</h1>
                    <form action="" class="form-teacher" method="POST">
                        <div class="form__group form__group--md">
                            <input required type="number" class="form__control" placeholder="Номер занятия" name="tittle" />
                            <span class="form__line"></span>
                        </div>
                        <div class="form__group form__group--md">
                            <input required type="text" class="form__control" placeholder="Тема занятия" name="topic" />
                            <span class="form__line"></span>
                        </div>

                        <div class="form__group form__group--md">
                            <input required type="date" class="form__control tel" name="deadline" />
                            <span class="form__line"></span>
                        </div>

                        <div class="form__group form__group--md">
                            <textarea class="form__control form__control--textarea" name="user_text" placeholder="Домашняя работа"></textarea>
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
                </main>
                <?php } ?>
                <?php if($_SESSION['user']['role'] ==0) {?>
                <!-- Авторизированный контент студента -->
                <main class="page-main-homework">
                    <h1 class="tittle-homework">Домашняя работа</h1>
                    <div class="homework-cards">
                        <div id="wrapper">
                            <div id="carousel">
                                <div id="content">

                                    <?php
                        $result = mysqli_query($connect, "SELECT * FROM `homework`");
                        ?>
                                        <?php
                    while ($works = mysqli_fetch_assoc($result)){
                    // for ($i = 0; $i<count($works);$i++){
                    ?>
<?php
if (strtotime($works["Deadline"]) > strtotime('today')) {  ?>
<!-- Если дедлайн еще не наступил -->
<div class="item" style="background-color:#ACEA8F">
                                                <h2 id="TittleHomeworkItem">
                                                    <?php echo $works["Tittle"]; ?>
                                                </h2>
                                                <p class="topic-name" id="TopicHomeworkItem">
                                                    <?php echo $works["Topic"]; ?>
                                                </p>
                                                <div class="deadline">
                                                    <P style="color:#07AFBA">Срок сдачи:</P>
                                                    <p style="color:#07AFBA" id="DateHomeworkItem">
                                                        <?php echo $works["Deadline"]; ?>
                                                    </p>
                                                </div>
                                                <a href="post.php?ID= <?php $works["ID"]; ?>" class="open-work" id="openwork" onclick="(document.getElementById('example_1').style.display='block')">Открыть</a>

                                            </div>
<?php } else { ?>
    <!-- если задание просрочено -->
    <div class="item">
                                                <h2 id="TittleHomeworkItem">
                                                    <?php echo $works["Tittle"]; ?>
                                                </h2>
                                                <p class="topic-name" id="TopicHomeworkItem">
                                                    <?php echo $works["Topic"]; ?>
                                                </p>
                                                <div class="deadline">
                                                    <P style="color:#CF3A0B">Срок сдачи истек</P>
                                                    
                                                </div>
                                               

                                            </div>
    <?php } ?>
    <?php } ?>
                                </div>
                            </div>
                            <button id="prev">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                  >
                    <path fill="none" d="M0 0h24v24H0V0z" />
                    <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
                  </svg>
                </button>
                            <button id="next">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                  >
                    <path fill="none" d="M0 0h24v24H0V0z" />
                    <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
                  </svg>
                </button>
                        </div>
                    </div>
                    <!-- Карточка домашней работы -->
                    <div class="homework-description" id="example_1">
                    <?php
$post_id = $_GET['ID'];
$result = mysqli_query($connect, "SELECT * FROM `homework` WHERE `ID` = '$post_id' ");
?>
<?php
while ($posts = mysqli_fetch_assoc($result))
{
?>
                        <h2 class="topic-name-card" id="TopicHomeworkItem">Название темы</h2>

                        <div class="DescriptionHomeWork" id="DescriptionHomeWork">
                            <p> TEXT  <?php echo $posts["Deadline"]; ?>
                                <?php 
            echo($works["Description"]); ?>
                            </p>
                        </div>
                        <button class="hide-work" id="hidework" onclick="(document.getElementById('example_1').style.display='none')">Скрыть</button>
                    </div>
                </main>
                <?php } ?>
                <?php } ?>
                <?php else : ?>
                <!-- Неавторизованный контент  -->
                <div class="messadge">
                    <h1 class="messadge-info">Данный раздел доступен только авторизированным пользователям</h1>
                    <a class="messadge-link" href="loginpage.php">Войти</a>
                </div>
                <?php endif;  ?>
            </div>
            <footer class="page-footer">
                <p class="copyright"> 2022</p>
                <a class="page-footer-logo" href="#"><b>Dolphin school</b>, языковая школа</a>
                <p class="copyright-details"> <a href="https://vk.com/id161066998" target="_blank">Сайт создан Иваном Поддубным</a>
                    <p class="copyright-details eng-href-footer"> <a href="#" target="_blank">English version</a>
                    </p>
            </footer>
            <script src="assets/js/carousel.js"></script>
            <script src="assets/js/show-hide-homework.js"></script>
        </div>
    </body>
    <?php
            require "vendor/addhomework.php";
            ?>