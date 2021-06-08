<?php
    $id_artikel= $_GET['id'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/style/style.css">
    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
    <title>Bicara Wanita</title>
  </head>
  <body>

    <!-- Navbar -->

<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand pr-5" href="../index.php">
            <img src="../assets/img/logo.png" width="90">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="womanspotlite.php">Woman Spotlite</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="healthissue.php">Health Issue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="podcast.php">Podcast</a>
                </li>
        </div>
    </div>
</nav>
    <!-- Akhir Navbar -->

<section>
    <div class="container pt-5 mt-5">
        <div class="row">
        <?php
            include 'koneksi.php';
            $query = mysqli_query($con,"SELECT * FROM artikel where id_artikel='$id_artikel'");
            while($row= mysqli_fetch_assoc($query)){  
        ?>
            <div class="col-lg-12 text-center">
                <h1 style="text-align: left;" class="ml-3 pl-5"><?php echo $row ['judul'];?></h1>
                <img src="../assets/img/thumbnail/<?php echo $row['gambar'];?>" alt="" class="img-fluid">
                <p style="text-align: left;" class="text-left"><br><br><?php echo $row ['isi'];?></p>
            </div>
            <div class="row pl-5 ml-2">
                <div class="col-lg-2" style="width: 100px;">
                    <span class="badge badge-pill badge-primary"><?php echo $row['nama_kategori'];?></span>
                </div>
            </div>
        </div>
        <hr>
        <div class="row pl-5 ml-2">
            <div class="col-lg-3">
                <div class="rounded.circle text-center">
                    <img src="../assets/img/foto-penulis.png" alt="">
                </div>
            </div>
            <div class="col-lg-9">
                <h2>Naufal Faris Fadhil</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident id, in omnis natus ab aperiam iusto nisi rerum qui accusamus quia repudiandae cupiditate hic tempora voluptatibus, ratione recusandae. Explicabo, sint!</p>
            </div>
        </div>
        <?php } ?>
        <div class="row pt-5">
            <div class="col-lg-12">
            <h1>Artikel Rekomendasi</h1>
            </div>
        </div>
        <div class="row mt-5">
        <?php
            include 'koneksi.php';
            $query = mysqli_query($con,"SELECT * FROM artikel ORDER BY tanggal DESC LIMIT 6");
            while($row= mysqli_fetch_assoc($query)){  
        ?>
            <div class="col-lg-4">
            <img src="../assets/img/thumbnail/<?php echo $row['gambar'];?>" alt="">
                <h4><?php echo $row['judul'];?></h4>
            </div>
            <?php } ?>
        </div>
    </div>
</section>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>