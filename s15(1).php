<?php
	
	$num1 = $_GET['fn'];
	$num2 = $_GET['sn'];
	$num3 = $_GET['tn'];
	
	if($num1 > $num2)
	{
		echo "First Number is Max  ".$num1;
	}
	else if ($num2 > $num3)
	{
		echo "Second Number is Max  ".$num2;
	}
	else
	{
		echo "Third Number is Max  ".$num3;
	}
?>