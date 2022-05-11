<?php
require('../connection/config.php');
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $img = $_POST['img'];
    $content = $_POST['content'];
    $status=$_POST['radio1'];
    $id = $_POST['id'];
    if($title!="" && $slug!=""&& $img!=""&& $content!=""){
        $blog_query = "UPDATE blogs SET title='$title', slug='$slug',img='$img',content='$content',status=$status WHERE id='$id'";
        $blog_result = mysqli_query($conn, $blog_query);

  if($blog_result){  
  header("Location:../manageblog.php");
  }
  else{
    header("Location:../manageblog.php");
  }}}
