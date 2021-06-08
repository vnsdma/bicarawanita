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
            <h3 class="box-title">List Data User</h3> 
            <div class="box-tools text-right mb-3">
              <a href="#tambahuser" class="btn btn-primary" data-toggle="modal" data-target="#tambahuser"><i class="fa fa-male"></i> Tambah User</a>
            </div>
          </div>
          <div class="box-body">

          <div class="table-responsive22">
              <table id="example" class="display table table-bordered table-striped" >
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>User Role</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                      $no = 1;
                      $queryview = mysqli_query($con, "SELECT * FROM user");
                      while ($row = mysqli_fetch_assoc($queryview)) {
                      $id_user = $row ['id_user']
                    ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $row['username'];?></td>
                      <td><?php echo $row['role']; ?></td>
                      <td>
                        <!--<a href="form_edituser.php?id=<?php echo $row['id_user']?>" class="btn btn-primary btn-flat btn-xs"><i class="fa fa-pencil"></i> Edit</a>-->
                        <a href="#" class="btn btn-primary btn-flat btn-xs" data-toggle="modal" data-target="#updateuser<?php echo $no; ?>"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-danger btn-flat btn-xs" data-toggle="modal" data-target="#deleteuser<?php echo $no; ?>"><i class="fa fa-trash"></i> Delete</a>
                        
                        <!-- modal delete -->
                        <div class="example-modal">
                          <div id="deleteuser<?php echo $no; ?>" class="modal fade" role="dialog" style="display:none;">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h3 class="modal-title">Konfirmasi Delete Data User</h3>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                  <h4 align="center" >Apakah anda yakin ingin menghapus <?php echo $row['username'];?><strong><span class="grt"></span></strong> ?</h4>
                                </div> 
                                <div class="modal-footer">
                                  <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancle</button>
                                  <a href="../detail/function_user.php?act=deleteuser&id=<?php echo $row['id_user']; ?>" class="btn btn-primary">Delete</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div><!-- modal delete -->

                        <!-- modal update user -->
                        <div class="example-modal">
                          <div id="updateuser<?php echo $no; ?>" class="modal fade" role="dialog" style="display:none;">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h3 class="modal-title">Edit Data User</h3>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                  <form action="function_user.php?act=updateuser" method="post" role="form">
                                    <?php
                                    $id_user = $row['id_user'];
                                    $query = "SELECT * FROM user WHERE id_user='$id_user'";
                                    $result = mysqli_query($con, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <div class="form-group">
                                      <div class="row">
                                        <label class="col-sm-3 control-label text-right">Id User <span class="text-red">*</span></label>         
                                        <div class="col-sm-8"><input type="text" class="form-control" name="id_user" placeholder="Id User" value="<?php echo $row['id_user']; ?>"></div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="row">
                                        <label class="col-sm-3 control-label text-right">Username <span class="text-red">*</span></label>
                                        <div class="col-sm-8"><input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $row['username']; ?>"></div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="row">
                                        <label class="col-sm-3 control-label text-right">Password <span class="text-red">*</span></label>
                                        <div class="col-sm-8"><input type="password" class="form-control" name="password" placeholder="Password" id="myPassword" value="<?php echo $row['password']; ?>">
                                          <input type="checkbox" onclick="myFunction()"> Lihat Password
                                            <script>
                                            function myFunction() {
                                              var x = document.getElementById("myPassword");
                                              if (x.type === "password") {
                                                x.type = "text";
                                              } else {
                                                x.type = "password";
                                              }
                                            }
                                            </script>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="row">
                                        <label class="col-sm-3 control-label text-right">User Role <span class="text-red">*</span></label>
                                          <div class="col-sm-8"><select name="role" class="form-control select2" value="" style="width: 100%;">
                                            <option value="editor" selected="selected">Editor</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button id="noedit" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                                      <input type="submit" name="submit" class="btn btn-primary" value="Update">
                                    </div>
                                    <?php
                                    }
                                    ?>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div><!-- modal update user -->
                      </td>
                    </tr>
                    <?php
                      }
                    ?>
                </tbody>
              </table>
            </div> 
          </div>

          <!-- modal insert -->
          <div class="example-modal">
            <div id="tambahuser" class="modal fade" role="dialog" style="display:none;">
              <div class="modal-dialog"> 
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title">Registrasi User Baru</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                    <form action="../detail/function_user.php?act=tambahuser" method="post" role="form">
                      <div class="form-group">
                        <div class="row">
                        <label class="col-sm-3 control-label text-right">Nama User<span class="text-red">*</span></label>         
                        <div class="col-sm-8"><input type="text" class="form-control" name="nama_user" placeholder="nama user" value=""></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                        <label class="col-sm-3 control-label text-right">Username <span class="text-red">*</span></label>
                        <div class="col-sm-8"><input type="text" class="form-control" name="username" placeholder="Username" value=""></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                        <label class="col-sm-3 control-label text-right">Password <span class="text-red">*</span></label>
                        <div class="col-sm-8"><input type="password" class="form-control" name="password" placeholder="Password" id="myPassword" value="">
                        <input type="checkbox" onclick="myFunction()"> Lihat Password
                        <script>
                        function myFunction() {
                          var x = document.getElementById("myPassword");
                          if (x.type === "password") {
                              x.type = "text";
                          } else {
                              x.type = "password";
                          }
                        }
                        </script>
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                        <label class="col-sm-3 control-label text-right">User Role <span class="text-red">*</span></label>
                          <div class="col-sm-8"><select name="role" class="form-control select2" style="width: 100%;">
                            <option value="editor" selected="selected">Editor</option>
                          </select>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button id="nosave" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                      </div>
                      <!--<div class="box-footer">
                        <a href="data_user.php" class="btn btn-danger"><i class="fa fa-close"></i> Batal</a>
                        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                      </div> /.box-footer -->
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- modal insert close -->
        </div>
      </div>
    </div>
  </div>
</section><!-- /.content -->
</div>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script>
  $(document).ready(function() {
    $('#editor').DataTable();
} );
</script>