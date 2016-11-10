<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
    <title>portal site</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- сброс css -->
    <link href="css/reset.css" rel="stylesheet">
    <!-- подключение шрифтов -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- мои стили -->
    <link href="css/style.css?<?php $date_css=date('YmdHis'); echo $date_css; // мои стили шаблона ВСЕГДА ОБНОВЛЯЮТСЯ?>" rel="stylesheet">
</head>

<body>
    <!-- Шапка сайта -->
    <header class="header">
        <!-- верхняя полоска -->
        <div class="top-line">
            <div class="w1000">
                <!-- вход/регистрация -->
                <div class="user-reg">
                    <span class="top-line-img"><a class="user-reg-in" href="#">Вход</a></span>
                    <a href="#">Регистрация</a>
                </div>
            </div>
        </div>
        <!-- шапка сайта -->
        <div class="w1000">
        <div class="header-1">
            <div class="header-1-1 clearfix">
                <!-- блок лого -->
                <a href="#" class="logo-a">
                    <div class="logo-div">
                        <img src="img/index/logo-img.png" class="logo-img">
                        <div class="logo-text">
                            <p class="logo-name">Портал недвижимости</p>
                            <p class="logo-title">Ювелирная работа с недвижимостью</p>
                        </div>
                    </div>
                </a>
                <!-- .блок лого -->
                <!-- изображение города вверху -->
                <div class="header-1-1-baner">
                    <img src="img/index/header-baner.png">                    
                </div>
                <!-- .изображение города вверху -->
            </div>            
            <!-- .header-1-1 -->
            <!-- header-1-2 -->
            <div class="header-1-2">
            <div class="w1000">
                <!-- верхнее меню -->
                <ul class="menu-top">
                    <li><a href="#">О проекте</a></li>
                    <li><a href="#">Аренда помещений</a></li>
                    <li><a href="#">Продажа помещений</a></li>
                    <li><a href="#">Бизнес центры</a></li>
                    <li><a href="#">Торговый центы</a></li>
                </ul>
                <!-- .верхнее меню -->
                <div class="add">
                    <a href="#">Добавить объект</a>
                    <a href="#">+</a>
                </div>
            </div>
            </div>
            <!-- .header-1-2 -->
        </div>
        </div>
<!-- .верхняя полоска -->
    </header>
    <!-- .header-->
    <main class="content">            
    </main>
    <!-- .content -->
    <footer class="footer">
    </footer>        
    <!-- .footer -->
</body>

</html>