<div id="block-parameter">
	<p class="header-title">Поиск по параметрам</p>
    <p class="title-filter">Стоимость</p>
    <form method="GET" action="search-filter.php">
    	<div id="block-input-price">
        	<ul>
            	<li><p>от</p></li>
                <li><input type="text" id="start-price" name="start_price" value="100"/></li>
                <li><p>до</p></li>
                <li><input type="text" id="end-price" name="start_price" value="7000"/></li>
                <li><p>руб</p></li>
            </ul>
        </div>
        <div id="blocktrackbar"></div>
        <p class="title-filter">Блюда</p>
        <ul class="checkbox-brand">
        	<li>
            	<input type="checkbox" id="checkbrend1"/>
                <label for="checkbrend1">Блюдо 1</label>
           	</li>
            <li>
            	<input type="checkbox" id="checkbrend2"/>
                <label for="checkbrend2">Блюдо 2</label>
           	</li>
            <li>
            	<input type="checkbox" id="checkbrend3"/>
                <label for="checkbrend3">Блюдо 3</label>
           	</li>
        </ul>
        <!--В теге value по идее должно быть пусто, если что-то не так то убрать надпить внутри тега-->
        <center><input type="submit" name="submit" id="button-param-search" value="Найти"/></center>
    </form>
    
</div>