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
                $name="";
                $email="";
                $password="";
                $status=1;
                if (isset($_GET['id'])) {
                  $getquery="select * from users where id=".$_GET['id'];
                  $result=mysqli_query($conn,$getquery);
                  $user=mysqli_fetch_assoc($result);
                  $name=$user['name'];
                  $email=$user['email'];
                  $password=$user['password'];
                  $status=$user['status'];
                }

                
              ?>
              <!-- form start -->
              <form action="usermanagement/edituser.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" hidden name="useremail" value="<?php echo $email;?>">
                    <input type="text" required value="<?php echo $name;?>" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" required value="<?php echo $email;?>" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" required value="<?php echo $password;?>" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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