<?php


//http://localhost:8080/Tutorial/DAY%203/GetVariables.php?stu_name=pasindu
//this will show the output in the screen

echo "STUDENT DETAILS".'<br><br>';


if(isset($_GET["stu_name"])&&isset($_GET["stu_age"])&&isset(GET["stu_weight"]))
{
	$name =$_GET["stu_name"];
	$age =$_GET["stu_age"];
	$weight =$_GET["stu_weight"];
	if(!empty($name)&&!empty($age)&&!empty($weight)){
	
	echo "NAME :".$_GET["stu_name"].'<br><br>';
	echo "AGE :".$_GET["stu_age"].'<br><br>';
	echo "WEIGHT :".$_GET["stu_weight"].'<br><br>';

	}
	}

	
	else{

	echo "please submit the fields";

	}



?>