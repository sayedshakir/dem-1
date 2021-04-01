<?php

	$num1=$_GET['num1'];
	$num2=$_GET['num2'];
	echo $num1+$num2;

?>
<form method="get">
	<input type="textbox" name="num1" placeholder="Num1"/><br/><br/>
	<input type="textbox" name="num2" placeholder="Num2"/><br/><br/>
	<input type="submit" name="submit"/>
</form>
