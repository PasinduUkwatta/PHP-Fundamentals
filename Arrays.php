<?php
//printing the elements in the array
$names =array('mac','john','amal','kamla');
$marks =array(34,68,93,46);

echo $names[0]."<br><br>";
echo $names[1]."<br><br>";
echo $names[2]."<br><br>";
echo $names[3]."<br><br>";
echo $marks[0]."<br><br>";
echo $marks[1]."<br><br>";
echo $marks[2]."<br><br>";
echo $marks[3]."<br><br>";

//adding the elements
$names[4] ='pasindu';
echo $names[4]."<br><br>";

//this is inbuilt method to print the elements in the array
print_r($names);
print_r($marks);

?>