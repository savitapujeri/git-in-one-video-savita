 <?php  


$server = "localhost";
$user = "root";
$password ="";
$db = "curddb";
	

$con = mysqli_connect($server, $user,$password,$db);

$db = mysqli_select_db($con, $db );


?>
<?php

 if($con){
	//echo"connectiondone";
	
?>

  <script>
   alert('connection sucessfuly');
  </script>

<?php

 }else{

	die("no connection");// .mysqli_connect_error());
	
}


?>

