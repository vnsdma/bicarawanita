  <?php
	include 'koneksi.php'
?>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.csss">  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>


<section class="content-wrapper">
  <div class="container">
  <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id Artikel</th>
                <th>Judul</th>
                <th>Isi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'koneksi.php';
            $artikel = mysqli_query($con, "select * from artikel");
            while($row = mysqli_fetch_array($artikel))
            {
                echo "<tr>
                <td>".$row['id_artikel']."<td>
                <td>".$row['judul']."<td>
                <td>".$row['isi']."<td>
                </tr>";
            }
        ?>
        </tbody>
    </table>
  </div>
</section><!-- /.content -->
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>