<?php

use MongoDB\Driver\Manager;
use MongoDB\Driver\Command;
use MongoDB\Database;

$mngr = new Manager("mongodb://localhost:27017");

$db =new Database($mngr,"Northwind");

$col =$db->catagories;

$curs =$col->find();

foreach ($curs as $doc){
    echo $doc["CategoryID"],"\n";
}


?>
