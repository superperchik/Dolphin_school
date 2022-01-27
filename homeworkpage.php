<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-homework.css">
    <!-- <link href="https://assets.htmlacademy.ru/content/skills/6/case-01/outline.css" rel="stylesheet"> -->
   
   <?php
	require_once "assets/functions/dataconnection.php";
    $works = getWork(7);
     ?> 
    
      
    <title>Домашняя работа</title>

</head>

<body class="page container">
    <nav class="page-menu">
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
            <li class="page-menu-item page-menu-item-active">
                <a class="page-menu-link page-menu-link-homework-active" href="#">Домашняя работа</a>
            </li>
            <li class="page-menu-item ">
                <a class="page-menu-link page-menu-link-exam" href="testpage.html">Тесты</a>
            </li>
        </ul>

    </nav>
    <header class="page-header">
        <button class="english-btn" type="button"><span>ENG</span></button>
    </header>
    <main class="page-main-homework">
        <h1 class="tittle-homework">Домашняя работа</h1>
        <div class="homework-cards">
            <div id="wrapper">
                <div id="carousel">
                    <div id="content">
                    

                    <?php
                    for ($i = 0; $i<count($works);$i++){
                    ?>
                    
                     <div class="item">
                        <h2 id="TittleHomeworkItem"> <?php echo $works[$i]["Tittle"]; ?></h2>
                        <p class="topic-name" id="TopicHomeworkItem"><?php echo $works[$i]["Topic"]; ?></p>
                        <div class="deadline">
                            <P>Срок сдачи:</P>
                            <p id="DateHomeworkItem"><?php echo $works[$i]["Deadline"]; ?></p>
                        </div>
                        <button class="open-work" id="openwork" onclick="(document.getElementById('example_1').style.display='block')">Открыть</button>

                    </div>
  
                    <?php
                        
                    }
                    ?>
                    
                   
                        
                       
                       
                      
                         

                        <!-- <div class="item">
                            <h2>Заголовок</h2>
                            <p class="topic-name">Название темы</p>
                            <div class="deadline">
                                <P>Срок сдачи:</P>
                                <p>XX месяц</p>
                            </div>
                            <button class="open-work">Открыть</button>
                        </div>
                        <div class="item">
                            <h2>Заголовок</h2>
                            <p class="topic-name">Название темы</p>
                            <div class="deadline">
                                <P>Срок сдачи:</P>
                                <p>XX месяц</p>
                            </div>
                            <button class="open-work">Открыть</button>
                        </div>
                        <div class="item">
                            <h2>Заголовок</h2>
                            <p class="topic-name">Название темы</p>
                            <div class="deadline">
                                <P>Срок сдачи:</P>
                                <p>XX месяц</p>
                            </div>
                            <button class="open-work">Открыть</button>
                        </div>
                        <div class="item">
                            <h2>Заголовок</h2>
                            <p class="topic-name">Название темы</p>
                            <div class="deadline">
                                <P>Срок сдачи:</P>
                                <p>XX месяц</p>
                            </div>
                            <button class="open-work">Открыть</button>
                        </div> -->
                      
                      
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

        <div class="homework-description" id="example_1">
            <h2 class="topic-name-card" id="TopicHomeworkItem">Название темы</h2>

            <div class="DescriptionHomeWork" id="DescriptionHomeWork">
            <p>  <?php echo($works[7]["Description"]); ?></p>
            </div>

            <button class="hide-work" id="hidework" onclick="(document.getElementById('example_1').style.display='none')">Скрыть</button>
        </div>


    </main>
    <footer class="page-footer">
        <p class="copyright"> 2022</p>
        <a class="page-footer-logo" href="#"><b>Dolphin school</b>, языковая школа</a>
        <p class="copyright-details"> <a href="https://vk.com/id161066998" target="_blank">Сайт создан Иваном Поддубным</a>
        </p>
    </footer>
    <script src="assets/js/carousel.js"></script>
    <script src="assets/js/show-hide-homework.js"></script>
    
</body>