<!--Основной верхний блок-->
<div id="block-header">
<!--Верхний блок с навигацией-->
    <div id="header-top-block">
        <!--Список с навигацией-->
        <ul id="header-top-menu">
            <li>Ваш город - <span>Москва</span></li>
            <li><a href="o-nas.php">О нас</a></li>
            <li><a href="magaziny.php">Магазины</a></li>
            <li><a href="contacts.php">Контакты</a></li>
        </ul>
        <!--Вход и регистрация-->
        <p id="reg-auth-title" align="right">
            <a class="top-auth">Вход</a>
            <a href="registration.php">Регистрация</a>
        </p>
    </div>
    <!-- линия разделения сверху -->
    <hr class="top-line">
    <!--Логотип-->
    <img id="img-logo" src="/www/images/logo.png"/>
    <!--Информационный блок-->
    <div id="personal-info">
        <p align="right">Звонок бесплатный.</p>
        <h3 align="right">8 (800) 100-12-34</h3>
        <img src="/www/images/tel.jpg"  width="30" height="30"/>
        <p align="right">Режим работы:</p>
        <p align="right">Будние дни: с 9:00 до 18:00</p>
        <p align="right">Суббота, Воскресенье - выходные</p>
        <img src="/www/images/time.png"  width="30" height="30"/>
    </div>
    <!--Блок поиска-->
    <div id="block-search">
        <form method="GET" action="search.php?q=">
        	<span></span>
            <input type="text" id="input-search" name="q" placeholder="Поиск блюд"/>
            <input type="submit" id="button-search" value="Поиск"/>
        </form>
    </div>
</div>	
<!--Меню под логотипом-->
<div id="top-menu">
	<ul>
        <li><img src="/www/images/home.png"/><a href="index.php">Главная</a></li>
        <li><img src="/www/images/new.png"/><a href="">Новинки</a></li>
        <li><img src="/www/images/bp.png"/><a href="">Лидеры продаж</a></li>
        <li><img src="/www/images/sale.png"/><a href="">Распродажа</a></li>
    </ul>
    <p align="right" id="block-basket"><img src="/www/images/cart.png"/><a href="">Корзина пуста</a></p>
</div>
<!-- линия разделения по середине -->
<hr class="nav-line">