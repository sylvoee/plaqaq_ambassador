<?php 

// this is to select database to insure that a 
//user does not register twice with the same ig_handle
include('include/connection.php');
$query_check = "SELECT * FROM tbl_customer ";
$check_result = mysqli_query($con, $query_check);
$check_row = mysqli_fetch_assoc($check_result);
$check_row['ig_handle'];
?>

   <?php
   
    

if(isset($_POST['submit'])){

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$university = $_POST['university']; 
    $course = $_POST['course'];
    $phone_number = $_POST['phone_number'];
    $age = $_POST['age'];
    $ig_handle = $_POST['ig_handle'];
    $fb_handle = $_POST['fb_handle'];
    // $mobile = $_POST['mobile'];
    $email = $_POST['email'];
	$ref_code = $_POST['ref_code'];
	$twitter_handle = $_POST['twitter_handle'];
	$no_of_twitter_followers = $_POST['no_of_twitter_followers'];
	$youtube_page = $_POST['youtube_page'];
	$no_of_youtube_sub = $_POST['no_of_youtube_sub'];
	$info = $_POST['info'];

	
	if($ig_handle !== $check_row['ig_handle']){
    include('include/connection.php');

	
	$query = "INSERT INTO tbl_customer VALUES('', '$first_name', '$last_name',  '$university', '$course' , '$phone_number', 
    ' $age ', '$ig_handle', '$fb_handle','','$email','$ref_code','$twitter_handle', '$no_of_twitter_followers','$youtube_page', '$no_of_youtube_sub', '$info',Now(), '')";
	
	$result = mysqli_query($con, $query); 
	
	if($result){

		$update_count = "UPDATE tbl_customer SET `count` = count + 1 WHERE `ig_handle` = '$ref_code'";
		$result_update = mysqli_query($con, $update_count);
		
		echo "<script>alert('Thanks for being a plaqad ambassador.You are on a track of making money. Please share the link along with your reference code (Instagram handle)');</script>";
		
		$first_name = $last_name = $email_name = $mobile = $fb_handle = $ig_handle   = $age = $twitter_handle = ""; 
		 
	}
}
	else {
	
		
		echo "<script>alert('Instagram handle has already been used ');</script>";
	}
	
}

// header('Location:resultchecking.php');

?>


