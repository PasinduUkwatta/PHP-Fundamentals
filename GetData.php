<?php
 
 require 'connect.php';
 
 $query ="SELECT * FROM `students details`";
 
 if($is_query_run==mysqli_query($query))
 {
	 echo "query executed";
	 
	 while($query_execute =mysqli_result($is_query_run))
	 {
		 echo '<table><tr>.$query_execute['name']. 
		 <td></td>
		 <td>$query_execute['surename'].</td>
		 <td>$query_execute[age].</td>
		 				</tr></table>';
		
	 }
	 
 }
 else
 {
	echo "query not executed"; 
 }
 
 
 


 


?>