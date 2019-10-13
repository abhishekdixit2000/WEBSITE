<?php
$con=mysqli_connect('localhost','root','','saksham');
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
   $email = $_POST['email']; 
    $pass = $_POST['password'];
    
    
    $sql = "SELECT * FROM users WHERE email = '$email' and password = '$pass'";
    $result = mysqli_query($con,$sql);
    $count = mysqli_num_rows($result);
    echo $count;

    if($count != 0){
    	echo "true";
      header("location: http://localhost/PROJECT-1/aboutus.php");
    }
    else{
    	echo "wrong!!!!!!!!!!!! go back to login page";

    }
    





 }     
?>