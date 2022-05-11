<?php
require('../connection/config.php');

                                        if(isset($_POST['submit'])) 
                                        {
                                            $blogid = $_POST['blogid'];
                                            $img = $_POST['url'];
                                            $order = $_POST['order'];
                                            

                                            if($blogid>0 && $img!="" && $order !="")
                                            {
                                          
                                              try {
                                                $slider_query = "INSERT INTO sliders(blogs_id, img, order_id) VALUES('$blogid','$img','$order')";
                                                    $result = mysqli_query($conn, $slider_query);
                                                    if($result)
                                                    {
                                                      echo header('Location:../manageslider.php');
                                                        
                                                    }
                                                    else 
                                                    {
                                                        echo header('Location:../manageslider.php');
                                                    }
                                              } catch (\Throwable $th) {
                                                echo header('Location:../manageslider.php');
                                              }
                                                    
                                            }
                                            else 
                                            {
                                                echo "All fields are necessary.";
                                            }
                                        }
                                    ?>