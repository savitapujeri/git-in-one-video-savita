<?php

session_start();

?>
<!DOCTYPE html>
 <html lang="en">
  <title>
	
	 </title>
   
	 <?php include "css/style.css" ?>
	 
		
	
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
		 
		 		
<?php
include 'connection.php';
include 'css/style.css';
       if(isset($_POST['submit'])) {
	  
	
	$name = mysqli_real_escape_string( $con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$pass =  mysqli_real_escape_string($con, $_POST['pass']);
    $cpassword=mysqli_real_escape_string($con, $_POST['cpassword']);
    $degree=mysqli_real_escape_string($con, $_POST['degree']);
	$mobile =mysqli_real_escape_string($con, $_POST['mobile']);
	

	
		   
 $pass= password_hash($pass, PASSWORD_BCRYPT);
$cpassword = password_hash($cpassword, PASSWORD_BCRYPT);
		// $token =bin2hex(random_bytes(15));
		   
		  
		$emailquery = " select * from ragist where email= '$email' ";
		   $query = mysqli_query($con, $emailquery);
	
		   $emailcount = mysqli_num_rows($query);
		 
		   
		   //$insertquery = "insert into ragist`( name, email, pass, cpassword, degree, mobile, language) values ('$name','$email', '$pass' , '$cpassword', '$degree', '$mobile','$language') ";
	
	
//$query= mysqli_query($con, $insertquery);
	
	if($emailcount>0){


		echo "email already existed";
	}else{
		if($pass === $cpassword) { 
            
            
		$insertquery = "insert into ragist( name, email, pass, cpassword, degree, mobile, language) values('$name','$email', '$pass','$cpassword',' $degree','$mobile','$language')"; 
		

	 
	
		$iquery= mysqli_query($con, $insertquery);
			             if($iquery){
                        ?>

                       <script>
                         alert('inserted');
                                    </script>

                         <?php

                             }else{

	                        die("not inserted");
	
                            }
       }else{
              ?>
         <script>
        alert('password are not matching');
         </script>
					
                
								
        
         <?php
									}


								}  
						  }

								
		 ?>  

		

	 
		 <div class="border-box:2px solid blue">
			 
	 <div class="container" >
		 <h1>aplication to apply here</h1>
		 <a href="ragistar.php" class="btn btn-warning"> <space><i class="fa fa-google" aria-hidden="true" style="color:;"></i>   login via Gmail</space></a> <br>
		 
		 <a href="ragistar.php" class="btn btn-primary"><space><i class="fa fa-facebook" aria-hidden="true" style="color:"  ></i>     login via facebook</space></a>
	 <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" >
		 
		 <h6><i class="fa fa-user-o" aria-hidden="true" style="border:2px solid black;"></i>
<input type="text" name="name" value=""  placeholder="enter your name"></h6>	
		
		 
<h6 ><i class="fa fa-envelope" aria-hidden="true" style="border:2px solid black;"></i>
	<input type="email" name="email"  value=""
		 placeholder="enter your email" required /></h6> 
				
<h6>
	<i class="fa fa-lock" aria-hidden="true" style="border:2px solid black;"></i>
	<input type="password" name="pass" value="" placeholder="enter your password" required /></h6> 
		 
		 		 
<h6><i class="fa fa-lock" aria-hidden="true" style="border:2px solid black;"></i>
	<input type="cpassword" name="cpassword"  value=""  placeholder="enter yourcpassword" required /> </h6>
		
		 
		<h6><i class="fa fa-graduation-cap" aria-hidden="true" style="border:2px solid black;"></i> 
			<input type="text" name="degree" value=""  placeholder="degree"></h6>	
		 
		
		 <h6><i class="fa fa-phone" aria-hidden="true" style="border:2px solid black;"></i>
			 <input type="mobile" name="mobile"  value="" placeholder="enter your mobile" required /></h6> 
		 
		 
		 
		 
 <input type="submit" name="submit" class ="btn btn-primary" value="Create Account" /> 
		 <br><br> <p>have an account 
         <a href="login.php">log in</a></p>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
		 
		 </form>
	 
		 </div>  
		 </div>
	 </body>
		
		
		
</html>
