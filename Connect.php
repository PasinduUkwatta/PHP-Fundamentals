<?php

$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password =1234;

//in this code use mysqli in the latest versions
//@sign will help only see the meassage without the errors
@mysqli_connect($mysql_host,$mysql_user,$mysql_password);

//connecting to the database



if(!@mysqli_connect($mysql_host,$mysql_user,$mysql_password))
{
		die('cannot create a connection ');	
}
else
{
	if(!@mysqli_select_db('students details'))
	{
		echo 'connect successfully';
	}
	else
	{
		echo 'cannot connect to the data base';
	}
	
	
}




?>