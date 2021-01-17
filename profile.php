

<?php
include('include/header.php');
include('include/connection.php');

// This helps to get the id from a url
$userid = $_GET['userid'];

$query_result = "SELECT * FROM tbl_customer where id = '$userid'";
$result = mysqli_query($con, $query_result);
$row = mysqli_fetch_array($result);
$ig_handle = $row['ig_handle'];


?> 


             
 
     <div>
     <div class = "col-sm-4 sm-4-offset-4">
     <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="ava.png" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                             <h2>Ambassador Information</h2>
                             <hr>
                                    <h6>
                                    <b>Name</b><div><?php echo $row['first_name'] . ' ' .$row['last_name'];?></div>
                                    </h6>
                                    <h6>
                                    <b>course</b><div><?php echo $row['course'];?></div>
                                    </h6>

                                    <h6>
                                    <b>Institution</b><div><?php echo $row['university'];?></div>
                                    </h6>
                                     
                                    <h6>
                                    <b>Instagram Handle</b><div><?php echo $row['ig_handle'];?></div>
                                    </h6>

                                    <h6>
                                    <b>People registered under your reference code</b><div><?php echo $row['count'];?></div>
                                    </h6>
                                

                                    <h6>
                                    <b>Age</b><div><?php echo $row['age'];?></div>
                                    </h6>
                                    <h6>

                                    <b>Reference Code</b><div><?php echo $row['ref_code'];?></div>
                                    </h6>

                                    <h6>
                                    <b>Email</b><div><?php echo $row['email'];?></div>
                                    </h6>

                                    <h6>
                                    <b>Phone Number</b><div><?php echo $row['phone_number'];?></div>
                                    </h6>

                                    <h6>
                                    <b>Email</b><div><?php echo $row['email'];?></div>
                                    </h6>

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">More</a>
                                
                                
                                <!-- <li><a href = "edit.php? edit_id=<?php echo $userid ?>">Edit Profile</a></li> -->
                            </ul>

                           

                        </div>
                    </div>
                    <div class="col-md-2">


                        <input type="submit" class=" btn btn-success" name="btnAddMore" value=" <?php echo "registered on " .$row['time']?>  "/>
                        
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Social Media  </label>
                                            </div>
                                            <div class="col-md-6">
                                            <a href="#"><i class="fa fa-twitter"></i></a>  
                                     <a href="#"><i class="fa fa-linkedin"></i></a>  
                                    <a href="#"><i class="fa fa-facebook"></i></a> 
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>How did you discover the Plaqad?  </label>
                                            </div>
                                            <div class="col-md-6">
                                            <h6><?php echo $row['info']?> </h6>  
                                    
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>When did you Register?  </label>
                                            </div>
                                            <div class="col-md-6">
                                            </h6><?php echo $row['time']?>  </h6>
                                    
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Number of twitter followers  </label>
                                            </div>
                                            <div class="col-md-6">
                                            <h6><?php echo $row['no_of_twitter_followers']?></h6>  
                                    
                                            </div>
                                        </div>
                                        
                        </div>
                    </div>
                </div>
            </form>           

     
     </div> -->
   
     <?php
include('include/footer.php');
?>

 <?php   




?>






</body>
</html>
