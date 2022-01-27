

<?php
include('include/header.php');
?>

<div id="register" class ="container offset-2">
<h2>Become a Plaqad Campus Ambassador</h2>
<p>
The Plaqad Campus Ambassador Program (Plaqad CAP) is an exclusive <br>
 community of 
young, smart, and influential students in all<br>
 leading university and polytechnic
 campuses across Nigeria.

The Plaqad campus ambassadorship offers <br>
 successful students immense opportunities and 
benefits including:
<ul>
<li>Earn up to N150, 000 ($500) monthly
<li>Gift pack with Plaqad branded collateral
<li>Networking and collaboration with other ambassadors from campuses across Nigeria
<li>Career advisory, mentorship, and interaction with managers in Plaqad
<li>Free tickets to Plaqad events
<li>Learn about Plaqad culture and career opportunities
<li>Inclusion of Plaqad campus ambassador experience in their resume Awards
</ul>
</p>
	
	<form method="post" action="ref.php">
	  
         <div class="form-group col-sm-6">
		<input type="text" name="first_name" class = "form-control" placeholder ="Enter Name" required>
        </div>

		<div class="form-group col-sm-6">
		<input type="text" name="last_name" class = "form-control" placeholder ="Enter Last Name" required>
		</div>
	    
		<div class="form-group col-sm-6">
		<input type="text" name="university" class = "form-control" placeholder ="Name of University" required>
	</div>

	<div class="form-group col-sm-6">
		<input type="text" name="course" class = "form-control" placeholder ="Course of Study" required>
	</div>
		
	<div class="form-group col-sm-6">
	 <label for="text"></label>
		<td><input type="number" name="phone_number" class = "form-control" placeholder = "Phone number"  required></td>
		</div>
	
        <div class="form-group col-sm-6">
	 <label for="text"></label>
		<td><input type="number" name="age" class = "form-control" placeholder = "age"></td>
		</div>

        <div class="form-group col-sm-6">
	 <label for="text"></label>
		<td><input type="text" name="ig_handle" class = "form-control" placeholder = "Instagram Handle (NOTE:This is your Reference code)"  required></td>
		</div>

        <div class="form-group col-sm-6">
	 <label for="text"></label>
		<td><input type="text" name="fb_handle" class = "form-control" placeholder = "Facebook Handle"  required></td>
		</div>
		

        <div class="form-group col-sm-6">
	 <label for="text"></label>
		<td><input type="email" name="email" class = "form-control" placeholder = "Email"  required></td>
		</div>

        <div class="form-group col-sm-6">
	 <label for="text"></label>
		<td><input type="text" name="ref_code" class = "form-control" placeholder = "Who referred you? Pls ensure you state their correct Instagram handles."  required></td>
		</div>
       
		<div class="form-group col-sm-6">
	 <label for="text"></label>
		<td><input type="text" name="twitter_handle" class = "form-control" placeholder = "Twitter Handle" ></td>
		</div>

		<div class="form-group col-sm-6">
	 <label for="Number of Twitter followers"></label>
		<td><input type="Number" name="no_of_twitter_followers" class = "form-control" ></td>
		</div>

		<div class="form-group col-sm-6">
	 <label for="text"></label>
		<td><input type="text" name="youtube_page" class = "form-control" placeholder = "Youtube Subscriber" ></td>
		</div>

		<div class="form-group col-sm-6">
	 <label for="text"></label>
		<td><input type="text" name="no_of_youtube_sub" class = "form-control" placeholder = "No of Youtube Subscribers" ></td>
		</div>
      
		<div class="form-group col-sm-6">
	 <label for="text">How did you discover the Plaqad Ambassador Ambassador Program?</label>
		<select name="info" id="">
		<option value="SMS">SMS</option>
		<option value="Youtube">Youtube</option>
		<option value="">Email Newsletter</option>
		<option value="Email Newsletter">Facebook</option>
		<option value="Twitter">Twitter</option>
		<option value="Google">Google</option>
		<option value="Friend">Friend</option>
		</select>
		</div>
    
		
		
		<div class ="col-sm-6">
		<input type="submit" value="Submit" name="submit" class = "btn btn-success">
		<input type="reset" value="Reset" name = "reset" class = "btn btn-info"> 
		
		</div>
		
	</form>
</div> 

</body>

</html>


<?php
include('include/form_process.php');
?>
