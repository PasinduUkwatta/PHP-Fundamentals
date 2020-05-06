<?php

$password ="pass";

//md5 will help to convert the string to the hash value
//so anyone who have the access to the database cannot see the password
//only see the hash value
echo md5($password);

if(isset($_POST['password'])&&(!empty('password')))
{
	$new_password =$_POST['password'];
	if(md5($new_password) == md5($password))
	{
		echo "pass ok";
	}
	else
	{
		echo "pass not okey";
	}
}

?>

//1a1dc91c907325c69271ddf0c944bc72

<form action= "md5.php" method = "post">

<input type = "text" name ="password"><br><br>
<input type ="submit" >

</form>

