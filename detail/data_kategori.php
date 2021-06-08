<?php
	include 'koneksi.php'
?>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>


<section class="content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">List Data artikel</h3> 
            <div class="box-tools text-right mb-3">
              <a href="../admin/data.php?page=tambahartikel" class="btn btn-primary" ></i> Tambah artikel</a>
            </div>
          </div>
          <div class="box-body">

            <div class="table-responsive22">
              <table id="example" class="display table table-bordered table-striped" >
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Id Artikel</th>
                    <th>Judul</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                      $no = 1;
                      $queryview = mysqli_query($con, "SELECT * FROM artikel");
                      while ($row = mysqli_fetch_assoc($queryview)) {
                      $id_artikel = $row ['id_artikel']
                    ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $row['id_artikel'];?></td>
                      <td><?php echo $row['judul'];?></td>
                      <td>
                        <!--<a href="form_editartikel.php?id=<?php echo $row['id_artikel']?>" class="btn btn-primary btn-flat btn-xs"><i class="fa fa-pencil"></i> Edit</a>-->
                        <a href="#" class="btn btn-primary btn-flat btn-xs" data-toggle="modal" data-target="#updateartikel<?php echo $no; ?>"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-danger btn-flat btn-xs" data-toggle="modal" data-target="#deleteartikel<?php echo $no; ?>"><i class="fa fa-trash"></i> Delete</a>
                        <?php
                      }
                      ?>
                  </tbody>
              </table>
          </div>
      </div>
    </div>
  </div>
</section><!-- /.content -->
</div>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>