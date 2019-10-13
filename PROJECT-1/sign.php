<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fullname']; 
    $pass = $_POST['password'];
    $email= $_POST['email'];

    

$con=mysqli_connect('localhost','root','','');
$query="INSERT INTO user ( name, pass) VALUES ('$name','$pass',$email)";


$run=mysqli_query($con,$query);
 echo "hi ",$name ;
 if ($run==TRUE) {

  echo "\n your data is inserted successfully now you able to LOGIN";
}
else
{
  echo" wrong!!!!!!!!!!!! \n please enter password and username ";
  
}
}

?>