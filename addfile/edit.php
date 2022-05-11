<?php require('../connection/config.php'); 
      if(isset($_POST['submit']))
      {
          $title = $_POST['title'];
          $status = $_POST['radio1'];
          $oldtitle = $_POST['oldtitle'];
          $oldlink = $_POST['oldlink'];
          if(isset($_FILES['image']) && $_FILES['image']['name']!=""){
          $dataFile = $_FILES['image']['name'];
            $filesize=$_FILES['image']['size'];
            $explode_values=explode('.', $dataFile);
            $name=$explode_values[0];
            $fname= str_replace(' ', '', $name);
            $finalname= strtolower($fname.time());
            $extention=strtolower($explode_values[1]);
            $finalfile= $finalname.".".$extention;

            if($filesize<20000000)
            {
                if($extention=="jpg" || $extention == "png" || $extention=="jpeg")
                {
                    unlink('../uploads/'.$oldlink);
                    if(move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/".$finalfile))
                    {
                        $query = "Update filemanager set title='$title',link='$finalfile',ext='$extention',status='$status' where title='$oldtitle'";
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
      else{
        $query = "Update filemanager set title='$title',status='$status' where title='$oldtitle'";
        $result = mysqli_query($conn,$query);
        if($result)
        {
            echo header("Location: ../managefile.php?msg=success");
        }
        else 
        {
            echo "File couldn't be edited successfully.";
        }
      }
    }
      ?>
      