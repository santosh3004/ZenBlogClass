<?php require('header.php') ?>
<div class="content-wrapper" style="min-height: 1345.31px;">
  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6">
  <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Update Blog Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              <?php
              if(isset($_GET['id'])){
                $id = $_GET['id'];
                $sql = "SELECT * FROM blogs WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $title = $row['title'];
                $slug = $row['slug'];
                $img = $row['img'];
                $content = $row['content'];
                $status = $row['status'];
              }else{
                header("Location:manageblog.php");
              }
                ?>
              <form class="form-horizontal" method="POST" action="blogmanagement/edit.php" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group row">
                  <input hidden type="text" name="id" value="<?php echo $id ?>">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                      <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" id="name" placeholder="Blog Title">
                    </div>
                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Slug</label>
                    <div class="col-sm-10">
                      <input type="text" name="slug" value="<?php echo $slug; ?>" class="form-control" id="inputEmail3" placeholder="Slug Text">
                    </div>
                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                      <input type="text" name="img" value="<?php echo $img; ?>" class="form-control" id="inputEmail3" placeholder="Image Link">
                    </div>
                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                      <input type="textarea" value="<?php echo $content; ?>" name="content" class="form-control" id="inputEmail3" placeholder="Content">
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
                  <button type="submit" name="submit" class="btn btn-info">Update Blog</button>
                  
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