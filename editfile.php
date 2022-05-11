<?php require('header.php') ?>
<div class="content-wrapper" style="min-height: 1345.31px;">
  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6">
  <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
                $title="";
                $link="";
                $status=1;
                if(isset($_GET['id'])){
                  $id=$_GET['id'];
                  $sql="SELECT * FROM filemanager WHERE id=$id";
                  $result=mysqli_query($conn,$sql);
                  if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                      $title=$row['title'];
                      $link=$row['link'];
                      $status=$row['status'];
                    }
                  }
                }

                
              ?>
              <form class="form-horizontal" method="POST" action="addfile/edit.php" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group row">
                    <input hidden name="oldtitle" value="<?php echo $title; ?>">
                    <input hidden name="oldlink" value="<?php echo $link; ?>">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $title; ?>" name="title" class="form-control" id="name" placeholder="File Title">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Old Image</label>
                    <div class="col-sm-10">
                      <img src="uploads/<?php echo $link?>"style="height:80px;width:100px;" alt="Image File" srcset="">
                    </div>
                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">File</label>
                    <div class="col-sm-10">
                      <input type="file" name="image" class="form-control" id="inputEmail3" placeholder="Image">
                    </div>
                  </div>
                  <div class="col-sm-6">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value=1 <?php if($status==1){echo "checked"; } ?> name="radio1">
                          <label class="form-check-label">Show</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value=0 <?php if($status==0){echo "checked"; } ?> name="radio1">
                          <label class="form-check-label">Hide</label>
                        </div>
                      </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-info">Update</button>
                  
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
  </div>
<?php require('footer.php') ?>