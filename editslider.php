<?php require('header.php') ?>
  <div class="content-wrapper" style="min-height: 1345.31px;">
  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6">
  <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Slider Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM sliders WHERE id = '$id'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $blogid = $row['blogs_id'];
                $img = $row['img'];
                $order = $row['order_id'];
                $status = $row['status'];
              ?>
              <form class="form-horizontal" method="POST" action="slidermanagement/edit.php" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group row">
                    <input hidden value="<?php echo $id; ?>" name="id">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Blog Id</label>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Blog</label>
                        <select name="blog_id" class="form-control">
                          <option value="-1">Select</option>
                          <?php
                            $sql = "SELECT * FROM blogs";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)){
                              $selected = '';
                              if($blogid == $row['id']){
                                $selected = 'selected';
                              }
                              echo '<option '.$selected.' value="'.$row['id'].'">'.$row['title'].'</option>';
                            }
                          ?>
                        </select>
                      </div>
                    
                   
                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $img?>" name="img" class="form-control" id="inputEmail3" placeholder="Url">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Order</label>
                    <div class="col-sm-10">
                      <input type="number" value="<?php echo $order?>" name="order" class="form-control" placeholder="1,2,3.....">
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
                  <button type="submit" name="submit" class="btn btn-info">Edit Slider</button>
                  
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
  </div>


<?php require('footer.php')?>