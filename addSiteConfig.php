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
             
              <form class="form-horizontal" method="POST" action="siteconfigmanagement/add.php" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Site Key</label>
                    <div class="col-sm-10">
                      <input type="text" name="sitekey" class="form-control" id="name" placeholder="Category Title">
                    </div>
                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Site Value</label>
                    <div class="col-sm-10">
                      <input type="text" name="sitevalue" class="form-control" id="inputEmail3" placeholder="Slug Text">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-info">Add Site Config</button>
                  
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