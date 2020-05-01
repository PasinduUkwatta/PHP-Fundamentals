<?php

/*
from using the a href we can include he link to the php code 
when we using the href code we should us single '' before the <> symbols


*/
echo "This is a link to the Google";
echo '<a href = "https://www.google.com">Google<br><br></a>';


echo "This is a link to the Facebook";
echo '<a href = "https://www.Facebook.com">Facebook<br><br></a>';

echo "This is a link to the Whatapp";
echo '<a href = "https://www.whatapp.com">whatapp<br><br></a>';

//this is a link created by using the variable
$google ="Google";

echo "This is a link created by using the variable";
echo '<a href ="https://www.google.com">'.$google.'</a><br><br>';

//printing with the double quotes

echo "\"hello world\"<br><br>";

echo 'it\'s a nice day';

?>