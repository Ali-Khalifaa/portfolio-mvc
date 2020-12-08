<?php require("header.php");  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update About Page</h1>
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
       

            <form action="<?= PATH;?>adminabout/postupdate" method="post">
                <div class="card-body">
                  <div class="form-group">
                        <label>Description Lift</label>
                        <input type="text" name="description_one" value="<?=$data->description_one;?>" class="form-control" placeholder="Description Lift">
                  </div>
                  <div class="form-group">
                        <label>Description Right</label>
                        <input type="text" name="description_two" value="<?=$data->description_two;?>" class="form-control" placeholder="Description Right">
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