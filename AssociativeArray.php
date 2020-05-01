<?php

/*

printing this table in the multi dimensional array

name      subject   marks

amal       english	78
kamal	   maths	65
nimal	   ict		89
sunil	   science	90


*/

$students = array(array('name'=>'amal',
						'subject'=>'english',
						'marks'=>78),
						
				  array('name'=>'kamal',
						'subject'=>'maths',
						'marks'=>65),
						
				  array('name'=>'nimal',
						'subject'=>'ict',
						'marks'=>89),
						
				  array('name'=>'sunil',
						'subject'=>'science',
						'marks'=>90));


echo "<b>STUDENTS MARKS TABLE</b><br><br><br><br>";
						
						
echo $students[0]['name'].'  ';echo $students[0]['subject'].'  ';echo $students[0]['marks'].'<br><br>';
echo $students[1]['name'].'  ';echo $students[1]['subject'].'  ';echo $students[1]['marks'].'<br><br>';
echo $students[2]['name'].'  ';echo $students[2]['subject'].'  ';echo $students[2]['marks'].'<br><br>';
echo $students[3]['name'].'  ';echo $students[3]['subject'].'  ';echo $students[3]['marks'].'<br><br>';










?>