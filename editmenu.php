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
                <h3 class="card-title">Edit Menu</h3>
              </div>
              <!-- /.card-header -->
              <?php
                $title="";
                $url="";
                $order="";
                $status=1;
                if (isset($_GET['id'])) {
                  $getquery="select * from menus where id=".$_GET['id'];
                  $result=mysqli_query($conn,$getquery);
                  $menu=mysqli_fetch_assoc($result);
                  $id=$menu['id'];
                  $title=$menu['title'];
                  $url=$menu['url'];
                  $order=$menu['order_id'];
                  $status=$menu['status'];
                }

                
              ?>
              <!-- form start -->
              <form action="menumanagement/edit.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" hidden name="id" value="<?php echo $id;?>">
                    <input type="text" required value="<?php echo $title;?>" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Url</label>
                    <input type="text" required value="<?php echo $url;?>" name="url" class="form-control" id="exampleInputEmail1" placeholder="Enter Url">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Order</label>
                    <input type="number" required value="<?php echo $order;?>" name="order" class="form-control" id="exampleInputPassword1" placeholder="Enter Order">
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