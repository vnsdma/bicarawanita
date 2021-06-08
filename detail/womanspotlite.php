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
    <style>
        .second-txt {
            position: absolute;
            bottom: 50px;
            left: 50px;
            color: white;
        }
    </style>
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

<br><br><br>
<section>
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-8">
                <h1 class="">Woman Spotlite</h1>
                <div class="row">
                    <div class="col-md-12 pt-4" id="artikel">
                        <img src="../assets/img/womanspotliteatas.png">
                            <h3 class="second-txt">
                            Perilaku Laku laki-laki yang membuat wanita bangga
                            </h3>
                    </div>
                    <div class="col-md-12 pt-4" id="artikel">
                        <div class="row">
                        <?php
                        include 'koneksi.php';
                        $query = mysqli_query($con,"SELECT * FROM artikel WHERE nama_kategori='Woman Spotlite' ORDER BY nama_kategori DESC LIMIT 6");
                        while($row= mysqli_fetch_assoc($query)){  
                        ?>
                            <div class="col-md-4">
                                <img src="../assets/img/thumbnail/<?php echo $row['gambar'];?>" alt="..." class="w-100 mb-4">
                            </div>
                            <div class="col-md-8">
                                <h4 class="card-title"><?php echo $row ['judul'];?></h4>
                                <p><?php echo $row ['isi'];?></p>
                                <span class="badge badge-primary"><?php echo $row['nama_kategori'];?></span>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-12 pt-4" id="artikel">
                        <img  src="../assets/img/womanspotliteatas.png">
                        <h3 class="second-txt">
                        Perilaku Laku laki-laki yang membuat wanita bangga
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 w-100">
            <h1 class="pb-4">Program</h1>
                        <div class="row">
                            
                            <?php
                            include 'koneksi.php';
                            $query = mysqli_query($con,"SELECT * FROM program");
                            while($row= mysqli_fetch_assoc($query)){  
                            ?>
                                <div class="col-md-12 pb-3">
                                    <div class="container3">
                                        <img src="../assets/img/program/<?php echo $row['gambar'];?>" alt="Notebook" style="width: 350px;">
                                        <div class="overlay">
                                        <h1><?php echo $row['judul'];?></h1>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="col-lg-12">
                            <h2 class="pt-5 ml-4"> Rekomendasi </h2>
                                <div class="row">
                                    <?php
                                    include 'koneksi.php';
                                    $query = mysqli_query($con,"SELECT * FROM artikel ORDER BY tanggal DESC");
                                    while($row= mysqli_fetch_assoc($query)){  
                                    ?>
                                        <div class="col-lg-4 pb-3 ml-4">
                                            <img src="../assets/img/thumbnail/<?php echo $row['gambar'];?>" style="width:103px; height:120px;">
                                        </div>
                                        <div class="col-lg-7">
                                            <a href="detail/artikel-1.html" style="color: black; text-decoration: none;">
                                            <h5 class="ml-2"><?php echo $row['judul'];?></h5>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div> 
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</section>







<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>