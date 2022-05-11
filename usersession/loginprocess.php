<?php 
require('../connection/config.php');

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $login_result = mysqli_query($conn,$login_query);

    $count_rows = mysqli_num_rows($login_result);

    if($count_rows==1)
    {
        $login_rows = $login_result->fetch_assoc();
        session_start();
        $_SESSION['userid'] = $login_rows['id'];
        $_SESSION['name'] = $login_rows['name'];
        $_SESSION['email'] = $login_rows['email'];
        header('Location: ../adduser.php?msg=loginsuccess');
    }
    else 
    {
        header('Location: ../index.php?msg=loginfailed');
    }
}
?>