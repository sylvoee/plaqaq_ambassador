<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
<form method="post" action="search.php">
	  
      <div class="form-group ">
     <input type="text" name="ref_code" class = "form-control" placeholder ="Search for Client Register under your Id" required>
     </div>

     <div>
     <input type="reset" value="Reset" name = "reset" class = "btn btn-info"> 
     <input type="submit" value="Create" name="search" class = "btn btn-success">
     </div>

</form>        
</div>

<?php
include('include/connection.php');

// This helps to get the id from a url
$userid = $_GET['userid'];

$query_result = "SELECT * FROM tbl_customer where id = $userid";
$result = mysqli_query($con, $query_result);
$row = mysqli_fetch_array($result);



?> 
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      
    <div><?php echo $row['first_name'];?></div>
     <div><?php echo $userid;?></div>
     <div><?php echo $row['id'];?></div>
     <div><?php echo $row['last_name'];?></div>
     <div><?php echo $row['university'];?></div>
     <div><?php echo $row['course'];?></div>
     <div><?php echo $row['sex'];?></div>
     <div><?php echo $row['age'];?></div>
     <div><?php echo $row['ig_handle'];?></div>
     <div><?php echo $row['fb_handle'];?></div>
     <div><?php echo $row['phone_no'];?></div>
     <div><?php echo $row['email'];?></div>
     <div><?php echo $row['ref_code'];?></div>


    </div>
    </div>
    <?php   




?>

<?php
include('include/footer.php');
?>
  </div>


</body>
</html>
