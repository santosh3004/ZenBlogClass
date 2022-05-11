<?php

require('../connection/config.php');
if (isset($_GET['id'])) {
  $id=$_GET['id'];
  $query="update `sliders` set `deleted_at`=SYSDATE() where id=$id";
  $result=mysqli_query($conn,$query);
  if($result){
    echo $result;
    header("Location:../manageslider.php");
  }
  else{
    echo "Error";
  }
}
?>