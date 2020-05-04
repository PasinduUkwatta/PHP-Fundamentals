<?php
//normal function without any parameter
function add_num()
{
	$sum =0;
	$sum  =100+200;
	echo "addition is : ".$sum.'<br><br>';
  
}


//function with single parameter
function mul($num1)
{
 echo "multiplication is : ".($num1*7).'<br><br>';
  
}

//function with double parameter
function sub($num1,$num2)
{
	$sub=0;
	$sub  =$num2-$num1;
	echo "subtraction is : ".$sub.'<br><br>';
  
}

//no parameter is passed 
function name()
{
	
	echo "<b>php programming<b/>".'<br><br>';
  
}

//function with two string parameters
function full_name($name1,$name2)
{
	
	echo "<b>Full name is :</b>".$name1.' '.$name2.'<br><br>';
  
}

add_num();
mul(7);
sub(9,7);

name();
full_name('pasindu','thiwanka');

?>