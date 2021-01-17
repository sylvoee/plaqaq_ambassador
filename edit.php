<?php
include('include/header.php');
include('include/connection.php');

// This helps to get the id from a url
$userid = $_GET['edit_id'];

// This will fetch out all records with unique user ID
$query_result = "SELECT * FROM tbl_customer where id = '$userid'";
$result = mysqli_query($con, $query_result);
$row = mysqli_fetch_array($result);
$ig_handle = $row['ig_handle'];


?> 

<?php
echo $userid ;
?>
<div id = "wrapper">
<h3 style = "color:green; text-align:center">Edit Profile</h3>
<hr>

   <div>
    <form  method = "POST" action = "edit.php">
        <div class="form-group col-sm-6 offset-5">
        <label for="Name">First Name</label>
        <div class="form-control">
        <input name = "first_name" type="text" value = <?php echo $row['first_name'] ?>>
        </div>
   </div>


   <div>
        <div class="form-group col-sm-6 offset-5">
        <label for="Name">Last Name</label>
        <div class="form-control">
        <input name= "last_name" type="text" value = <?php echo $row['last_name'] ?>>
        </div>
   </div>

   <div>
        <div class="form-group col-sm-6 offset-5">
        <label for="Age">Age</label>
        <div class="form-control">
        <input name= "age" type="text" value = <?php echo $row['age'] ?>>
        </div>
   </div>

   <div>
        <div class="form-group col-sm-6 offset-5">
        <label course="Age">Course</label>
        <div class="form-control">
        <input name = "course" type="text" value = <?php echo $row['course'] ?>>
        </div>
   </div>

   <div>
        <div class="form-group col-sm-6 offset-5">
        <label for="University">University</label>
        <div class="form-control">
        <input name = "university" type="text" value = <?php echo $row['university'] ?>>
        </div>
   </div>

   <div>
        <div class="form-group col-sm-6 offset-5">
        <label for="fb_handle">Facebook Handle</label>
        <div class="form-control">
        <input name = "fb_handle" type="text" value = <?php echo $row['fb_handle'] ?>>
        </div>
   </div>

   <div>
        <div class="form-group col-sm-6 offset-5">
        <label for="fb_handle">Twitter Handle</label>
        <div class="form-control">
        <input name = "twitter_handle" type="text" value = <?php echo $row['twitter_handle'] ?>>
        </div>
   </div>

   <div>
        <div class="form-group col-sm-6 offset-5">
        <label for="fb_handle">Number of Twitter Followers</label>
        <div class="form-control">
        <input name = "no_of_twitter_followers" type="text" value = <?php echo $row['no_of_twitter_followers'] ?>>
        </div>
   </div>

   <div>
        <div class="form-group col-sm-6 offset-5">
        <label for="fb_handle">Number of Youtube Subscribers</label>
        <div class="form-control">
        <input name = "no_of_youtube_sub" type="text" value = <?php echo $row['no_of_youtube_sub'] ?>>
        </div>
   </div>

   <div>
        <div class="form-group col-sm-6 offset-5">
        <label for="fb_handle">How Did You Hear About Us</label>
        <div class="form-control">
        <input name = "info" type="text" value = <?php echo $row['info'] ?>>
        </div>
   </div>


   <div>
        <div class="form-group col-sm-6 offset-5">
        <label for="fb_handle">How Did You Hear About Us</label>
        <div class="form-control">
        <input name = "id" type="number" hidden>
        </div>
   </div>

   
  <hr>
   <div>
        <div>
        <div class="form-control">
        <button class = "btn btn-info" name = "edit">Edit</button>
        </div>
   </div>
   </form>
   </div>
   </div>


   <?php
   //Edit processing

   if(isset($_POST['edit'])){
      
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $university = $_POST['university']; 
     $course = $_POST['course'];
     $age = $_POST['age'];
     $fb_handle = $_POST['fb_handle'];
     $twitter_handle = $_POST['twitter_handle'];
     $no_of_twitter_followers = $_POST['no_of_twitter_followers'];
     $no_of_youtube_sub = $_POST['no_of_youtube_sub'];
     $info = $_POST['info'];
     $id = $_POST['id'];
  
   include('include/connection.php');

   $edit_query = "UPDATE tbl_customer  SET 
   first_name = '$first_name',last_name = '$last_name', 
   university = '$university',
   course = '$course', 
   age = '$age' , 
   fb_handle = ' $fb_handle',
   twitter_handle = '$twitter_handle ',
   no_of_twitter_followers = '$no_of_twitter_followers', 
   no_of_youtube_sub = '$no_of_youtube_sub',
   info = '$info'
   WHERE id = '$id'";

    $edit_result = mysqli_query($con , $edit_query);

    if($edit_result){
     echo '<script>
     document.getElementById("wrapper").innerHTML = "<h3>SUCCESS</h3>"
     </script>' ;
    }
   
   

   }

   ?>