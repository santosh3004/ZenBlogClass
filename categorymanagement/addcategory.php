<?php
require('../connection/config.php');
                                        if(isset($_POST['submit'])) 
                                        {
                                            $title = $_POST['title'];
                                            $slug = $_POST['slug'];
                                           

                                            if($title!="" && $slug!="")
                                            {
                                                // if($password==$confirm_password)
                                                // {
                                                    $category_query = "INSERT INTO blogs_category(title, slug) VALUES('$title','$slug')";
                                                    $category_result = mysqli_query($conn, $category_query);
                                                    if($category_result)
                                                    {
                                                        echo header('Location:../managecategory.php');
                                                    }
                                                    else 
                                                    {
                                                        
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