<?php    

    $number= $_GET['nm'];  
	
	if ($number % 2 == 0)
	{
		echo "Number is Even ".$number;
	}
	else
	{
		echo "Number is Odd ".$number;
	}		
?>