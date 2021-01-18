
<!DOCTYPE html>
 <html lang="en">
  <title>
	 
	 
	 
	 </title>
   
    <head>
    <script src="https://kit.fontawesome.com/a076d05399.js">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://kit.fontawesome.com/a076d05399.js">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-----hello----->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://kit.fontawesome.com/yourcode.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		
			 </head>
	 
	
		<body>	
		 
		 <div class="border-box:2px solid blue">
			 
	 <div class="container" >
		 <h1>aplication to apply here</h1>
		 <a href="ragister.php" class="btn btn-warning"> 
			 <space><i class="fa fa-google" aria-hidden="true" style="color:;"></i>     login via Gmail</space></a> <br>
		 
		 <a href="ragistar.php" class="btn btn-primary">
			 <space><i class="fa fa-facebook" aria-hidden="true" style="color:"  ></i>     login via facebook</space></a>
	 <form action="" method="POST" >
		 
	
		 
<h6 ><i class="fa fa-envelope" aria-hidden="true" style="border:2px solid black;"></i>
	<input type="email" name="email"  value=""
		 placeholder="enter your email" required /></h6> 
				 
<h6>
	<i class="fa fa-lock" aria-hidden="true" style="border:2px solid black;"></i>
	<input type="password" name="pass" value="" placeholder="enter your password" required /></h6> 
		 
		 		 
<h6><i class="fa fa-lock" aria-hidden="true" style="border:2px solid black;"></i>
	<input type="cpassword" name="cpassword"  value=""  placeholder="enter your cpassword" required /> </h6>
		
		 
		
			
		
		 
<input type="submit" name="submit" class ="btn btn-primary"
	        href="home.php"  value="login now"> 
		
		
		 <a href=""  class ="" >sign up</a>
		 
		 
		 
			
		 </form>
	 
		 </div>  
		 </div>
	 </body>
		
		
		
</html>
	 
		 		
<?php
include 'connection.php';

       if(isset($_POST['submit'])) {
	  
	
	$email =  $_POST['email'];
	$pass =  $_POST['pass'];
  
	$cpassword = $_POST['cpassword'];
		   
		  
		
		   $email_search = " select *from ragist where email = '$email' ";
		   $query = mysqli_query($con, $email_search);
	
		   $email_count = mysqli_num_rows($query);
		 
		  
	if( $email_count){
		
		$email_pass= mysqli_fetch_assoc($query);
		$db_pass = $email_pass['pass'];
		
		//$_SESSION['name'] = $email_pass['name'];
		
		$pass_decode = password_verify($pass, $db_pass);

			if($pass_decode){
				echo "login successful";
                header('location.home.php')
				?>

						<script> location.replace("home.php");</script>

                <?php
						}else {

							echo "password incorrect";


						   }
         }else{
		
		   echo "invalid EMAIL";
	
	   }
	  
	 }

?>
