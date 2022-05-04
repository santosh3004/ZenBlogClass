<?php
require('../connection/config.php');
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $useremail=$_POST['useremail'];
  $email=$_POST['email'];
  $password=md5(addslashes($_POST['password']));
  $status=$_POST['radio1'];
  $query="update users set name='$name',email='$email',password='$password',status=$status where email='$useremail'";
  $result=mysqli_query($conn,$query);
  if($result){  
  header("Location:../manageuser.php");
  }
  else{
    echo "Error"; 
  }}

?>