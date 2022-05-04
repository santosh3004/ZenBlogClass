<?php require('../connection/config.php'); 
      if(isset($_POST['submit']))
      {
          $title = $_POST['title'];
          $dataFile = $_FILES['image']['name'];
            $filesize=$_FILES['image'] ['size'];
            $explode_values=explode('.', $dataFile);
            $name=$explode_values[0];
            $fname= str_replace(' ', '', $name);
            $finalname= strtolower($fname.time());
            $extention=strtolower($explode_values[1]);
            $finalfile= $finalname.".".$extention;

            if($filesize<200000)
            {
                if($extention=="jpg" || $extention == "png" || $extention=="jpeg")
                {
                    if(move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/".$finalfile))
                    {
                        $query = "INSERT INTO filemanager(title,link,ext) VALUES('$title','$finalfile','$extention')";
                        $result = mysqli_query($conn,$query);
                        if($result)
                        {
                            echo header("Location: ../managefile.php?msg=success");
                        }
                        else 
                        {
                            echo "File couldn't be added successfully.";
                        }
                    }
                    else 
                    {
                        echo "File couldn't be uploaded successfully.";
                    }
                }
                else 
                {
                    echo "File type not supported.";
                }
            }
            else 
            {
                echo "File size exceeded.";
            }
      }
      ?>
      