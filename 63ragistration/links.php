

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
    
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
				
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>



<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>			
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://kit.fontawesome.com/yourcode.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="style.css">
			
		
	 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://kit.fontawesome.com/yourcode.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		
			 </head>
	 
	 <body>
		 
		 
		 <div class="border-box:2px solid blue">
			 
	 <div class="container" >
		 <h1>aplication to apply here</h1>
	 <form action="" method="POST" >
		 
 <input type="text" name="name" value=""  placeholder="enter your name"><br>
		 
<input type="email" name="email"  value="" placeholder="enter your email" required /> <br>
		 
		  <input type="password" name="pass" value=""  placeholder="password">	<br>
		   <input type="degree" name="degree" value=""  placeholder="degree">	<br>
		  <input type="mobile" name="mobile" value=""  placeholder="mobile">	<br>
	   <input type="language" name="language" value=""  placeholder="language">	<br>
		 
		 
		 
		 
 <input type="submit" name="submit" class ="btn btn-primary" value="register" /> 
		 <a href="display.php"  class="btn btn-primary">CHECK FORM</a>
		 <a href="select.php"  class="btn btn-primary">CHECK </a>
		 </form>
	 
		 </div>  
		
		 </div></body>
		
		
		
</html>
		
<?php
include 'connection.php';

       if(isset($_POST['submit'])) {
	
	
	$name =mysqli_real_escape_string($con, $_POST['name']);
	$email =mysqli_real_escape_string ( $con, $_POST['email']);
	
	$pass =mysqli_real_escape_string ( $con, $_POST['pass']);
		$degree = mysqli_real_escape_string($con, $_POST ['degree']);
		    $mobile =mysqli_real_escape_string ( $con, $_POST['mobile']);
	
		    $language =mysqli_real_escape_string ( $con, $_POST['language']);
	
		    	    
		$insertquery = "insert into ragist( name, email, pass, degree, mobile, language) values ('$name', '$email', '$pass', '$degree', '$mobile', '$language')";
	
	
		  
		   
	
$res= mysqli_query($con , $insertquery);
	
	if($res){
		
?>
<script>

alert("data insert properly");
	

</script>
<?php
	}else{
?>	

<script>
alert("data  not insert ");

</script>
	

<?php
	
	
}  

}

		
	?>	
		
	
		