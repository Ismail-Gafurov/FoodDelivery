<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/reset.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jQuery.1.8.2.js"></script>
<script type="text/javascript" src="js/jcarousellite.js"></script>
<script type="text/javascript" src="js/shop-script.js"></script>
<title>Интернет-Сервис Доставки Еды</title>
</head>

<body>
<div id="block-body">
	<?php /* подключение файла */
        include ("include/block-header.php");
    ?>
    <div id="block-right">
        <?php /* подключение файла */
            include ("include/block-category.php");
			include ("include/block-parameter.php");
			include ("include/block-news.php");
        ?>
    </div>

	<div id="block-content">
    	<div id="block-sorting">
        	<p id="nav-breadcrumbs"><a href="index.php">Главная страница</a> \ <span>Все блюда</span></p>
            <ul id="options-list">
            	<li>Вид: </li>
                <li><img id="style-grid" src="/www/images/grid3.png" /></li>
                <li><img id="style-list" src="/www/images/grid.png" /></li>
                <li>Сортировать:</li>
                <li><a id="select-sort">Без сортировки</a>
                	<ul id="sorting-list">
                    	<li><a href="">От дешовых к дорогим</a></li>
                        <li><a href="">От дорогих к дешовым</a></li>
                        <li><a href="">Популярное</a></li>
                        <li><a href="">Новинки</a></li>
                        <li><a href="">От А до Я</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
	<?php
    	include ("include/block-footer.php");
    ?>
</div>
</body>
</html>