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

	<div id="block-content"></div>
	<?php
    	include ("include/block-footer.php");
    ?>
</div>
</body>
</html>