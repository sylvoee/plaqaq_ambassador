<?php

$con = mysqli_connect('https://github.com/sylvoee/plaqaq_ambassador', '', '', 'db_ref'); 

if(!$con)
{
	die('Error querying database' . mysqli_error($con)); 
	
}

?>
