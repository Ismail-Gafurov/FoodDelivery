<div id="block-parameter">
	<p class="header-title">����� �� ����������</p>
    <p class="title-filter">���������</p>
    <form method="GET" action="search-filter.php">
    	<div id="block-input-price">
        	<ul>
            	<li><p>��</p></li>
                <li><input type="text" id="start-price" name="start_price" value="100"/></li>
                <li><p>��</p></li>
                <li><input type="text" id="end-price" name="start_price" value="7000"/></li>
                <li><p>���</p></li>
            </ul>
        </div>
        <div id="blocktrackbar"></div>
        <p class="title-filter">�����</p>
        <ul class="checkbox-brand">
        	<li>
            	<input type="checkbox" id="checkbrend1"/>
                <label for="checkbrend1">����� 1</label>
           	</li>
            <li>
            	<input type="checkbox" id="checkbrend2"/>
                <label for="checkbrend2">����� 2</label>
           	</li>
            <li>
            	<input type="checkbox" id="checkbrend3"/>
                <label for="checkbrend3">����� 3</label>
           	</li>
        </ul>
        <!--� ���� value �� ���� ������ ���� �����, ���� ���-�� �� ��� �� ������ ������� ������ ����-->
        <center><input type="submit" name="submit" id="button-param-search" value="�����"/></center>
    </form>
    
</div>