<?php

$name =$_POST["emp_name"];
$age =$_POST["emp_age"];
$password =$_POST["emp_password"];

if(($name=="pasindu")&&($password==123)){
	echo "login successfully";
	
}
else{

echo "login is not successful";	
}




?>