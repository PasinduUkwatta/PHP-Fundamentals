<?php

$name = 'pasindu'.'<br><br>';

echo $name;

function show_name()
{
	global $name;
	echo "calling the function :".$name.'<br><br>';
}

show_name();

?>