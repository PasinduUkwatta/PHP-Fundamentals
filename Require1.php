<?php
/*

the difference between include and require is require is more security
if we didn't find the needed file . them require terminate the whole page loading
but include didn't do that
it can run other features in the code without including the files.

*/


require 'Main.php';

echo $page1;

for_loop();

?>