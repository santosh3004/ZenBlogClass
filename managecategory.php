<?php require('header.php') ?>

<div class="content-wrapper" style="min-height: 1302.4px;">
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Categories</h1>
          </div>
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
      <div class="row">
        <div class="col-12">
        <div class="card">
          
              <div class="card-header d-flex justify-content-end">
              <div>
              <a href="addCategory.php"><button type="button"class="btn btn-primary">Add</button></a>
              <a href="managecategoryrecycle.php"><button type="button"class="btn btn-info"><i class="fa-solid fa-recycle"></i></button></a>
              </div>
                <!-- <h3 class="card-title">Categories</h3> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-responsive table-hover dataTable dtr-inline" aria-describedby="example2_info">
                  <thead>
                  <tr>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Title</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Slug</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Status</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Actions</th>
                </tr>
                  </thead>
                  <tbody>
                  <?php
           $blogcatquery="Select * from blogs_category where deleted_at is null";
           $result=mysqli_query($conn,$blogcatquery);
           
           while ($blogcats=mysqli_fetch_array($result)) {
             
          ?>
                  <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0"><?php echo $blogcats['title']; ?></td>
                    <td><?php echo $blogcats['slug']; ?></td>
                    <td><?php echo $blogcats['status']; ?></td>
                    <td>
                    <div class="modal fade" id="modal-danger" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Danger Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body…</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
             <a href="categorymanagement/softdelete.php?id=<?php echo $blogcats['id']; ?>"> <button type="button" class="btn btn-outline-light">Delete</button></a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-danger">
                  Delete
                </button>
                      <a href="editcategory.php?id=<?php echo $blogcats['id']; ?>"><button type="button"class="btn btn-info">Edit</button></a>
                      <a href="categorymanagement/softdelete.php?id=<?php echo $blogcats['id']; ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                  </td>
                  </tr>
                  <?php } ?>
                </tbody>
                  
                <!-- </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
              </div> -->
              <!-- /.card-body -->
            </div>
        </div>
      </div>
      </div>
    </section>
  </div>
  </div>



<?php require('footer.php') ?>