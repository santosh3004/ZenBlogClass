<?php
require('../connection/config.php');

                                        if(isset($_POST['submit'])) 
                                        {
                                            $title = $_POST['title'];
                                            $url = $_POST['url'];
                                            $order = $_POST['order'];
                                            

                                            if($title!="" && $url!="" && $order !="")
                                            {
                                          
                                              
                                                    $menu_query = "INSERT INTO menus(title, url, order_id) VALUES('$title','$url','$order')";
                                                    $menu_result = mysqli_query($conn, $menu_query);
                                                    if($menu_result)
                                                    {
                                                      echo header('Location:../managemenu.php');
                                                        
                                                    }
                                                    else 
                                                    {
                                                        echo header('Location:../managemenu.php');
                                                    }
                                            }
                                            else 
                                            {
                                                echo "All fields are necessary.";
                                            }
                                        }
                                    ?>