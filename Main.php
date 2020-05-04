<html>
<body>
<h1>This is the main page
</h1>
<p>this is a test paragraph of the main page
</p>

</body>
</html>


<?php
$page1 = "this is page one variable from main page".'<br><br>';

function for_loop()
{

for($counter = 1;$counter<=10;$counter++)
{
	echo "for loop is running".$counter.'<br><br>';
}
}
?>