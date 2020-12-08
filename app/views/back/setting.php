<?php require("header.php");  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Setting Page</h1>
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
    <?php foreach($data as $c): ?>
      <h3 class="card-title"><a href="update/<?=$c['id']; ?>" class="btn btn-default">Update</a></h3>
    <?php endforeach; ?>

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
                      <th>Name</th>
                      <th>Img</th>
                      <th>About</th>
                      <th>address</th>
                      <th>facebook</th>
                      <th>github</th>
                      <th>linkedin</th>
                      <th>netlife</th>
                      <th>gmail</th>
                      <th>phone</th>
                      <th>C.V</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach($data as $c): ?>
                      <tr>
                        <td><?=$c['name']; ?></td>
                        <td><img src="<?= PATH;?>img/<?=$c['img']; ?>" alt="" width="100px" height="100px"></td>
                        <td><?=$c['about']; ?></td>
                        <td><?=$c['address']; ?></td>
                        <td><?=$c['facebook']; ?></td>
                        <td><?=$c['github']; ?></td>
                        <td><?=$c['linkedin']; ?></td>
                        <td><?=$c['netlife']; ?></td>
                        <td><?=$c['gmail']; ?></td>
                        <td><?=$c['phone']; ?></td>
                        <td><?=$c['cv']; ?></td>
                      </tr>
                    
                        <?php endforeach; ?>
                  </tbody>
                </table>


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