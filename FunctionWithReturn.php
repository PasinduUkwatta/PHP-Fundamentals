<?php

function add_value($num1,$num2)
{
	$sum =$num1+$num2;
	return $sum;
}

$add1 =add_value(10,20);
echo "first addition :".$add1.'<br><br>';

 
$add2 =add_value(25,35);
echo "second addition :".$add2.'<br><br>'; 

$add3=$add1+$add2;
echo "Full Addition : ".$add3.'<br><br>';


?>