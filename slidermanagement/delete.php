<?php

require('../connection/config.php');
if (isset($_GET['id'])) {
  $id=$_GET['id'];
  $query="delete from sliders where id=$id";
  $result=mysqli_query($conn,$query);
  if($result){
    echo $result;
    header("Location:../manageuser.php");
  }
  else{
    echo "Error";
  }
}
?>