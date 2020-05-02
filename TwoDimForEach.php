<?php

$students = array(array('name'=>'maths',
						'id'=>2),
						
				  array('name'=>'english',
						'id'=>3),
				  array('name'=>'history',
						'id'=>1));

foreach($students as $student =>$newArray)
{
	echo "elements are :".$student.'<br><br>';
	foreach($newArray as $item)
	{
		echo "subjects :".$item.'<br><br>';
	}
	
}


?>