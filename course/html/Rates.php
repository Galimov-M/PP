<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>BABYTRON</title>
</head>
    <body>
        <div class="wrapper">
            <header>
                <div class="hamburger-menu">

                    <input id="menu__toggle" type="checkbox" />
                    <label class="menu__btn" for="menu__toggle">
                        <span></span>
                    </label>
    
                    <ul class="menu__box">
                        <li>
                            <a class="menu__item" href="calculate.html">Рассчитать</a>
                        </li>
                        <li>
                            <a class="menu__item" href="Tracking.html">Отследить</a>
                        </li>
                        <li>
                            <a class="menu__item" href="Rates.php">Тарифы</a>
                        </li>
                        <li>
                            <a class="menu__item" href="enter2.html">Регистрация</a>
                        </li>
                        <li>
                            <a class="menu__item" href="enter1.html">Вход  </a>
                        </li>
                    </ul>
                </div>
                <div class="navigation">
                    <div class="logo">
                        <ul class="nav_list">
                            <li class="nav__item nav__item--current">
                                <a class="nav__link" href="index.html">BABYTRON</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav">
                        <ul class="nav__list">
                            <li class="nav__item">
                                <a class="nav__link" href="calculate.html">Рассчитать</a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__link" href="Tracking.html">Отследить</a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__link" href="Rates.php">Тарифы</a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__link" href="enter2.html">Регистрация</a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__link" href="enter1.html">Вход  </a>
                            </li>
                        </ul>
                    </div>
                </div class="navigation">
            </header>


            <main class="main">
                <div class="wrap_content">
                    <div class="calculate_title">
                        <h1>Тарифы для частных лиц</h1>
                    </div>


                    <?php 
                        include "../group.php";
                    ?>

                    <!-- <div class="ratest_blok">
                        <div class="ratest_title">
                            <p> <span class="style"> Посылочка </span> <br>
                                Экономичная наземная доставка для частных лиц</p>
                        </div>
                        <div class="ratest_title">
                            <p>До 12 кг</p>
                        </div>
                        <div class="ratest_title">
                            <p>От 2 дней </p>
                        </div>
                        <div class="ratest_title">
                            <p>Россия, Беларусь, Казахстан, Киргизия</p>
                        </div>
                    </div>
                    <div class="ratest_blok">
                        <div class="ratest_title">
                            <p> <span class="style"> Экспресс-лайт </span> <br>  
                                Экспресс дсотавка документов и мелких грузов</p>
                        </div>
                        <div class="ratest_title">
                            <p>До 29 кг</p>
                        </div>
                        <div class="ratest_title">
                            <p>От 1 дня </p>
                        </div>
                        <div class="ratest_title">
                            <p>Россия, Беларусь, Казахстан, Киргизия</p>
                        </div>
                    </div>
                    <div class="ratest_blok">
                        <div class="ratest_title">
                            <p> <span class="style"> Экспресс-тежеловесы </span> <br>
                                Экспресс доставка грузов</p>
                        </div>
                        <div class="ratest_title">
                            <p>До 30 кг</p>
                        </div>
                        <div class="ratest_title">
                            <p>От 1 дня</p>
                        </div>
                        <div class="ratest_title">
                            <p>Россия, Беларусь, Казахстан, Киргизия</p>
                        </div>
                    </div>
                    <div class="ratest_blok">
                        <div class="ratest_title">
                            <p> <span class="style"> Супер-экспресс </span> <br>
                                Срочная доставка к определенному часу документов и мелких грузов</p>
                        </div>
                        <div class="ratest_title">
                            <p>До 1 кг</p>
                        </div>
                        <div class="ratest_title">
                            <p>От 1-2 дня </p>
                        </div>
                        <div class="ratest_title">
                            <p>Россия, Беларусь, Казахстан, Киргизия</p>
                        </div>
                    </div>
                    <div class="ratest_blok">
                        <div class="ratest_title">
                            <p> <span class="style"> Блиц-экспресс </span> <br>
                                Срочная доставка в течение суток</p>
                        </div>
                        <div class="ratest_title">
                            <p>До 5 кг</p>
                        </div>
                        <div class="ratest_title">
                            <p>1 сутки </p>
                        </div>
                        <div class="ratest_title">
                            <p>Россия</p>
                        </div>
                    </div> -->
                </div>
            </main>



            <footer class="footer">
                <div class="footer_info">
                    <div class="footer_info_blok">
                        <h4>О нас</h4>
                        <p>О компании</p>
                        <p>Новости</p>
                        <p>Полезная информация</p>
                        <p>Стоимость</p>
                        <p>Контакты</p>
                        <p>Политика обработки персональных данных</p>
                    </div>
                    <div class="footer_info_blok">
                        <h4>О доставке</h4>
                        <p>Калькулятор</p>
                        <p>Отслеживание</p>
                        <p>Доставка по россии</p>
                        <p>Международная доставка</p>
                        <p>Дополнительные услуги</p>
                        <p>Таможенное декларирование</p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>