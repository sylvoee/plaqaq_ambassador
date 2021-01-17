
<?php
include('include/header.php');
?>
<body>

<div class="wrapper">
<div class="jumbotron text-center">
<form method="post" action="search.php">
	  
      <div class="form-group col-sm-10">
     <input type="text" name="ref_code" class = "form-control" placeholder ="Search for client who registered under your Id eg sylvoee" required>
     </div>
     <div class="form-group col-sm-2 glyphicon glyphicon-search">
     <input type="submit" value="Search" name="search" class = "btn btn-success">
     </div>


     
</form>        

</div>

<?php
if(isset($_POST['search'])){

    $ref_code = $_POST['ref_code'];



    include('include/connection.php');
$query_result = "SELECT * FROM tbl_customer WHERE ref_code ='$ref_code' ";
$result = mysqli_query($con, $query_result);
$row = mysqli_fetch_assoc($result);
$count = 0;
while($row = mysqli_fetch_assoc($result)){
$id = $row['id'];
  $count ++;
  
    ?>
     <div class = "col-sm-4">

     <div class="card">
  <img src="ava.png" alt="img" style="width:30%">
  <h1><?php echo $row['first_name'] . ' ' . $row['last_name'];?></h1>
  <p class="title"><?php echo $row['course'];?></p>
  <p><?php echo $row['university'];?></p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button> <a href = "profile.php?userid=<?php echo $id?>">View Profile </button></p>
  </a>
</div>
  
     </a>
     </div>


 <?php   
}
  ?>
<?php echo "Total members is " . ($count + 1); ?>

  <?php 
}

?>


</div>

<?php
include('include/footer.php');
?>

</body>
</html>