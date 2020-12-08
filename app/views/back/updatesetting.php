<?php require("header.php");  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Setting Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <!-- Main content -->
 <section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Title</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
    </div>
    <div class="card-body">
       

            <form action="<?= PATH;?>adminsetting/postupdate" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="<?=$data->name;?>" class="form-control" placeholder="Enter Name Category">
                  </div>
                  <div class="form-group">
                    <label>About</label>
                    <input type="text" name="about" value="<?=$data->about;?>" class="form-control" placeholder="About">
                  </div>
                  <div class="form-group">
                    <label>address</label>
                    <input type="text" name="address" value="<?=$data->address;?>" class="form-control" placeholder="Enter address Category">
                  </div>
                  <div class="form-group">
                    <label>facebook</label>
                    <input type="text" name="facebook" value="<?=$data->facebook;?>" class="form-control" placeholder="facebook">
                  </div>
                  <div class="form-group">
                    <label>github</label>
                    <input type="text" name="github" value="<?=$data->github;?>" class="form-control" placeholder="Enter github Category">
                  </div>
                  <div class="form-group">
                    <label>linkedin</label>
                    <input type="text" name="linkedin" value="<?=$data->linkedin;?>" class="form-control" placeholder="linkedin">
                  </div>
                  <div class="form-group">
                    <label>netlife</label>
                    <input type="text" name="netlife" value="<?=$data->netlife;?>" class="form-control" placeholder="Enter netlife Category">
                  </div>
                  <div class="form-group">
                    <label>gmail</label>
                    <input type="text" name="gmail" value="<?=$data->gmail;?>" class="form-control" placeholder="gmail">
                  </div>
                  <div class="form-group">
                    <label>phone</label>
                    <input type="text" name="phone" value="<?=$data->phone;?>" class="form-control" placeholder="phone">
                  </div>
                  <div class="form-group">
                    <label>C.V</label>
                    <input type="text" name="cv" value="<?=$data->cv;?>" class="form-control" placeholder="C.V">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Img input</label>
                    <img src="<?= PATH.'img/'.$data->img;?>" alt="" width="100px" height="100px">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img" value="<?=$data->img;?>" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->
                <input type="hidden" name="id" value="<?= $data->id; ?>">
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>


    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        
    </div>
    <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php require("footer.php");  ?>