<?php
require('../connection/config.php');

                                        if(isset($_POST['submit'])) 
                                        {
                                            $name = $_POST['name'];
                                            $email = $_POST['email'];
                                            //md5 hashing
                                            $password = md5($_POST['password']);
                                            // $confirm_password = md5($_POST['confirm_password']);

                                            if($name!="" && $email!="" && $password !="")
                                            {
                                                // if($password==$confirm_password)
                                                // {
                                                    $signup_query = "INSERT INTO users(name, email, password) VALUES('$name','$email','$password')";
                                                    $signup_result = mysqli_query($conn, $signup_query);
                                                    if($signup_result)
                                                    {
                                                      echo header('Location:../manageuser.php');
                                                        
                                                    }
                                                    else 
                                                    {
                                                        echo header('Location:../manageuser.php');
                                                    }
                                                // }
                                                // else 
                                                // {
                                                //     echo "Confirmation Password doesn't match.";
                                                // }
                                            }
                                            else 
                                            {
                                                echo "All fields are necessary.";
                                            }
                                        }
                                    ?>