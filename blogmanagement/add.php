<?php
require('../connection/config.php');
                                        if(isset($_POST['submit'])) 
                                        {
                                          session_start();
                                            $title = $_POST['title'];
                                            $slug = $_POST['slug'];
                                            $img = $_POST['img'];
                                            $content = $_POST['content'];
                                            $userid=$_SESSION['userid'];
                                           

                                            if($title!="" && $slug!=""&& $img!=""&& $content!="")
                                            {
                                                
                                                    $blog_query = "INSERT INTO blogs(title, slug,img,content) VALUES('$title','$slug','$img','$content')";
                                                    $blog_result = mysqli_query($conn, $blog_query);
                                                    if($blog_result)
                                                    {
                                                        echo header('Location:../manageblog.php');
                                                    }
                                                    else{
                                                        echo "Error";
                                                    }
                                                    
                                                        
                                               
                                            }
                                            else 
                                            {
                                                echo "All fields are necessary.";
                                            }
                                        }
                                    ?>