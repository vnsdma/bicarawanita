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
<br><br><br><br><br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pb-5">
                <div class="row">
                    <?php
                    include 'koneksi.php';
                    $query = mysqli_query($con,"SELECT * FROM audio");
                    while($row= mysqli_fetch_assoc($query)){  
                    ?>
                        <div class="col-md-3 pb-3">
                            <div class="container3">
                                <img src="../assets/img/bannerpodcast1.png" alt="Notebook" style="width: 256px;">
                                <div class="overlay1">
                                <p><?php echo $row['judul'];?></p>
                                    <audio controls class="w-25 text-center">
                                        <source src="../assets/audio/<?php echo $row['audio'];?>" type="audio/mpeg">
                                    </audio>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <div class="col-lg-12 pb-5">
                    <img src="../assets/img/bannerpodcast.png" style="width:69em;" alt="">
                </div>
            </div>
            <div class="row">
                <?php
                    include 'koneksi.php';
                    $query = mysqli_query($con,"SELECT * FROM audio");
                    while($row= mysqli_fetch_assoc($query)){  
                ?>
                    <div class="col-lg-3 pb-2">
                        <img src="../assets/img/artikel-podcast.png" alt="">
                    </div>
                    <div class="col-lg-3 mr-5">
                    <h2><?php echo $row['judul'];?></h2><br><br><br><br>
                    <audio controls>
                        <source src="../assets/audio/<?php echo $row['audio'];?>" type="audio/mpeg">
                    </audio>
                    </div>
                    <div class="col-lg-4 w-50">
                    <h5><?php echo $row['judul'];?></h5>
                    <audio controls class="">
                        <source src="../assets/audio/<?php echo $row['audio'];?>" type="audio/mpeg">
                    </audio>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script>
        var audio1 = new Audio("../assets/audio/<?php echo $row['audio'];?>");
        audio.oncanplaythrough = function(){}
        audio.onended = function(){}
    </script>
    <script>
        var Aud = document.getElementsByClassName("myaudio"); 

function togglePlay() {
//   return Aud.paused ? Aud.play() : Aud.pause();
};
    </script>
  </body>
</html>