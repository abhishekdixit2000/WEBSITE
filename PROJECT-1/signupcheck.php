<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // collect value of input field
    $name=$_POST['fullname']; 
    $email=$_POST['email'];
    $pass=$_POST['password'];

    $con=mysqli_connect('localhost','root','','saksham');
//$query="INSERT INTO users (`name`, `email`, `password`) VALUES ('$name',$email,'$pass')";
    $query="INSERT INTO users (name,email,password) VALUES ('$name','$email','$pass')";
    


$run=mysqli_query($con,$query);
 echo "hi ",$name ;
 if($run==TRUE) 
 {

  header("location: http://localhost/PROJECT-1/index.php");
}
else
{
  echo" wrong!!!!!!!!!!!! \n please enter password and username ";
  
}
}

?>