<?php 
require('header.php');
?>
  <div class="content-wrapper" style="min-height: 1345.31px;">
  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit User</h3>
              </div>
              <!-- /.card-header -->
              <?php
                $title="";
                $slug="";
                $status=1;
                if (isset($_GET['id'])) {
                  $getquery="select * from blogs_category where id=".$_GET['id'];
                  $result=mysqli_query($conn,$getquery);
                  $category=mysqli_fetch_assoc($result);
                  $title=$category['title'];
                  $slug=$category['slug'];
                  $status=$category['status'];
                }

                
              ?>
              <!-- form start -->
              <form action="categorymanagement/edit.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" hidden name="oldtitle" value="<?php echo $title;?>">
                    <input type="text" required value="<?php echo $title;?>" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slug</label>
                    <input type="text" required value="<?php echo $slug;?>" name="slug" class="form-control" id="exampleInputEmail1" placeholder="Enter Slug Text">
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
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
 </section>
  </div>


<?php require('footer.php') ?>