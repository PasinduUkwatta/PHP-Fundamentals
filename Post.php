<?php

$name =$_POST["user_name"];
$password =$_POST["user_password"];

if(($name=="pasindu") && ($password==123)){
	
	echo "user login is succesfull";
}

else{
	echo "user login unsuccessful";
}



?>
