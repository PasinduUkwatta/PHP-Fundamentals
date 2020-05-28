<?php

require "C:\Users\Pasindu Thiwanka\.vscode\extensions\felixfbecker.php-intellisense-2.3.14\autoload.php";
use MongoDB\Driver\Manager;

//Manager

$mngr = new Manager("mongodb://localhost:27017");

//command

$cmd =new Command(["listDtabases"=>1]);

//execute command

$cursor =$mngr->executeCommand("admin",$cmd);

//var_dump($cursor);

foreach ($cursor as $result){
    foreach ($result->databases as $dbname) {
        echo " -", $dbname->name, "\n";
    }
}
?>
