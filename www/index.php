<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/reset.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jQuery.1.8.2.js"></script>
<script type="text/javascript" src="js/jcarousellite.js"></script>
<script type="text/javascript" src="js/shop-script.js"></script>
<title>��������-������ �������� ���</title>
</head>

<body>
<div id="block-body">
	<?php /* ����������� ����� */
        include ("include/block-header.php");
    ?>
    <div id="block-right">
        <?php /* ����������� ����� */
            include ("include/block-category.php");
			include ("include/block-parameter.php");
			include ("include/block-news.php");
        ?>
    </div>

	<div id="block-content">
    	<div id="block-sorting">
        	<p id="nav-breadcrumbs"><a href="index.php">������� ��������</a> \ <span>��� �����</span></p>
            <ul id="options-list">
            	<li>���: </li>
                <li><img id="style-grid" src="/www/images/grid3.png" /></li>
                <li><img id="style-list" src="/www/images/grid.png" /></li>
                <li>�����������:</li>
                <li><a id="select-sort">��� ����������</a>
                	<ul id="sorting-list">
                    	<li><a href="">�� ������� � �������</a></li>
                        <li><a href="">�� ������� � �������</a></li>
                        <li><a href="">����������</a></li>
                        <li><a href="">�������</a></li>
                        <li><a href="">�� � �� �</a></li>
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