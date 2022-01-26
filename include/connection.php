<?php

$con = mysqli_connect('https://localhost', 'root', '', 'db_ref'); 

if(!$con)
{
	die('Error querying database' . mysqli_error($con)); 
	
}

?>
