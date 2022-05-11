<?php
require('../connection/config.php');
if (isset($_GET['id'])) {
  $id=$_GET['id'];
  $query="update `blogs_category` set `deleted_at`=null where id=$id";
  $result=mysqli_query($conn,$query);
  if($result){
    echo $result;
    header("Location:../managecategory.php");
  }
  else{
    echo "Error";
  }
}
?>