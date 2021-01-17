<?php
include('include/connection.php');
$query_result = "SELECT * FROM tbl_customer";
$result = mysqli_query($con, $query_result);
$row = mysqli_fetch_array($result);
while($row = mysqli_fetch_array($result)){

    $first_name =$row['first_name'];
	$last_name =$row['last_name'];
	$university =$row['university']; 
    $course =$row['course'];
    $sex =$row['sex'];
    $age =$row['age'];
    $ig_handle =$row['ig_handle'];
    $fb_handle =$row['fb_handle'];
    $phone_no =$row['phone_no'];
    $email =$row['email'];
    $ref_code =$row['ref_code'];
    echo $ref_code;
    
}


?>
