<?php require("header.php");  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About Page</h1>
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
   

  <table class="table">
        <thead>
                    <tr>
                      <th>Description Lift</th>
                      <th>Description Right</th>
                      <th>Update</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach($data as $a): ?>
                    <tr>
                      <td><?=$a['description_one']; ?></td>
                      <td><?=$a['description_two']; ?></td>
                      <td><a href="update/<?=$a['id']; ?>" class="btn btn-default">Update</a></td>
                    </tr>
                        <?php endforeach; ?>
                  </tbody>
    </table>


  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    Footer
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

    <?php require("footer.php");  ?>