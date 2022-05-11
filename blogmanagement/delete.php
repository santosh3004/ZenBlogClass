<?php

require('../connection/config.php');
if (isset($_GET['id'])) {
  $id=$_GET['id'];
  $query="delete from `blogs` where id=$id";
  $result=mysqli_query($conn,$query);
  if($result){
    echo $result;
    header("Location:../manageblog.php");
  }
  else{
    echo "Error";
  }
}
?>