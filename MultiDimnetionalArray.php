<?php

/*

printing this table in the multi dimensional array

name      subject   marks

amal       english	78
kamal	   maths	65
nimal	   ict		89
sunil	   science	90


*/

echo "<b>MARKS TABLE OF THE STUDENTS</b><br><br><br>";

$students =array(array('amal','english',78),
				 array('kamal','maths',65),
				 array('nimal','ict',89),
				 array('sunil','science',90));
//in two dim array first num is row ,second number is column				 
echo $students[0][0].'  ';echo $students[0][1].'  ';echo $students[0][2].'<br><br>';
echo $students[1][0].'  ';echo $students[1][1].'  ';echo $students[1][2].'<br><br>';
echo $students[2][0].'  ';echo $students[2][1].'  ';echo $students[2][2].'<br><br>';
echo $students[3][0].'  ';echo $students[3][1].'  ';echo $students[3][2].'<br><br>';

?>