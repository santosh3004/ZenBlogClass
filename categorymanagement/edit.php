<?php
require('../connection/config.php');
if(isset($_POST['submit'])){
  $title=$_POST['title'];
  $oldtitle=$_POST['oldtitle'];
  $slug=$_POST['slug'];
  $status=$_POST['radio1'];
  $query="update blogs_category set title='$title',slug='$slug',status=$status where title='$oldtitle'";
  $result=mysqli_query($conn,$query);
  if($result){  
  header("Location:../managecategory.php");
  }
  else{
    echo "Error"; 
  }}

?>