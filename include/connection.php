<?php

$con = mysqli_connect('localhost', 'root', '', 'db_ref'); 

if(!$con)
{
	die('Error querying database' . mysqli_error($con)); 
	
}

?>