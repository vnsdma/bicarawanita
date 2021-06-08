<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="/js/jquery.jplayer.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="assets/style/style.css">
    <!-- Font CSS -->
    <link rel="stylesheet" href="assets/skin/pink.flag/css/jplayer.pink.flag.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
.modal-login {
	width: 350px;
}
.modal-login .modal-content {
	border-radius: 1px;
	border: none;
}
.modal-login .modal-header {
	position: relative;
	justify-content: center;
	background: #f2f2f2;
}
.modal-login .modal-body {
	padding: 30px;
}
.modal-login .modal-footer {
	background: #f2f2f2;
}
.modal-login h4 {
	text-align: center;
	font-size: 26px;
}
.modal-login label {
	font-weight: normal;
	font-size: 13px;
}
.modal-login .form-control, .modal-login .btn {
	min-height: 38px;
	border-radius: 2px; 
}
.modal-login .hint-text {
	text-align: center;
}
.modal-login .close {
	position: absolute;
	top: 15px;
	right: 15px;
}
.modal-login .checkbox-inline {
	margin-top: 12px;
}
.modal-login input[type="checkbox"] {
	position: relative;
	top: 1px;
}
.modal-login .btn {
	min-width: 100px;
	border: none;
	line-height: normal;
}
.modal-login .btn:hover, .modal-login .btn:focus {
	background: #248bd0;
}
.modal-login .hint-text a {
	color: #999;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
html {
  scroll-behavior: smooth;
}
.btn-primary1 {
    background-color:#E94924;
    
}


      </style>
    
    <title>Bicara Wanita</title>
  </head>
  <body>

    <!-- Navbar -->

<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand pr-5" href="index.php">
            <img src="assets/img/logo.png" width="90">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="detail/womanspotlite.php">Woman Spotlite</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="detail/healthissue.php">Health Issue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="detail/podcast.php">Podcast</a>
                </li>
                <li>
                    <a class="nav-link" href="#myModal" class="trigger-btn" data-toggle="modal">.</a>
                </li>
        </div>
    </div>
</nav>
    <!-- Akhir Navbar -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <form action="detail/cek-login.php" method="post">
                    <div class="modal-header">				
                        <h4 class="modal-title">Login</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">				
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" required="required" name="username">
                        </div>
                        <div class="form-group">
                            <div class="clearfix">
                                <label>Password</label>
                                <a href="#" class="float-right text-muted"><small>Forgot?</small></a>
                            </div>
                            <input type="password" class="form-control" required="required" name="password">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <label class="form-check-label"><input type="checkbox"> Remember me</label>
                        <a href="detail/register.php"><button type="button" class="btn btn-light" value="register" >Register</button></a>
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jumbotron -->
<section class="banner">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pt-5">
                    <h1 style="color: white; font-family: 'Poppins', sans-serif; font-weight: bold; font-size: 60px;" class="pt-5 mt-5" id="font-hero">SEPERTI APA SIH <br> WANITA ITU ?</h1>
                    <br>
                    <a href="#podcast" class="buttons"><img src="assets/img/play 1.png" class="mr-2">Putar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pb-2">
                    <div class="card bg-dark text-white">
                        <img src="assets/img/womanspotlite.png" class="card-img" alt="...">
                        <div class="bottom-left">
                        <a href="detail/womanspotlite.php" class="button btn-primary1">Woman Spotlite</a>
                        </div>
                    </div>
            </div>
            <div class="col-lg-6 ml-auto">
                <div class="row">
                    <div class="col-lg-12" id="kategori-2">
                        <div class="card bg-dark text-white" style="height: 230px;">
                            <img src="assets/img/healthissue.png" class="card-img" style="height: 230px;">
                            <div class="bottom-left">
                            <a href="detail/healthissue.php" class="button btn-primary1">Health Issue</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 pt-2" id="kategori-3">
                        <a href="detail/podcast.php">
                        <div class="card bg-dark text-white" style="height: 230px;">
                            <img src="assets/img/podcast.png" class="card-img" style="height: 230px;">
                                <div class="bottom-left">
                                <a href="detail/podcast.php" class="button btn-primary1">Podcast</a>
                                </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section>
<?php 
?>
    <div class="artikel container pt-5">
        <div class="row">
             <!-- Awal Terbaru -->
             <div class="col-lg-7">
                <h1>Berita Terbaru</h1>
                <div class="row">
                <?php
                    include 'detail/koneksi.php';
                    $query = mysqli_query($con,"SELECT * FROM artikel ORDER BY tanggal DESC LIMIT 6");
                    while($row= mysqli_fetch_assoc($query)){  
                ?>
                    <div class="col-md-12 pt-4" id="artikel">
                        <a href="detail/artikel-2.php?id=<?php echo $row['id_artikel'];?>" style="color: black; text-decoration: none;">
                            <div class="row">
                                <div class="col-md-6">
                                <!-- <img src="assets/img/thumbnail/<?=$row['gambar']?>" class="" id="gambar"> -->
                                    <img src="assets/img/thumbnail/<?php echo $row['gambar']?>" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-6 ">
                                    <h4><?php echo $row['judul']; ?></h4>
                                    <span class="badge badge-primary"><?php echo $row['nama_kategori'];?></span>
                                    <p class="mt-5 pt-3"><?php echo $row['tanggal']?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?> 
                </div>   
             </div>
             <!-- Akhir Terbaru -->
             <!-- Awal Program -->
             <div class="col-lg-5">
                <div class="row">
                        <h1 class="pb-3">Program</h1>
                    <?php
                    include 'detail/koneksi.php';
                    $query = mysqli_query($con,"SELECT * FROM program");
                    while($row= mysqli_fetch_assoc($query)){  
                ?>
                    <div class="col-md-12 pb-3">
                        <div class="container3">
                            <img src="assets/img/program/<?php echo $row['gambar'];?>" alt="Notebook" style="width: 350px;">
                            <div class="overlay">
                              <h1><?php echo $row['judul'];?></h1>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                </div>
             </div>
             <!-- Akhir Program -->
        </div>
            
    </div>
</section>

<section id="podcast">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="color:#E94924;">Podcast</h1>
                <div class="row">
                    <?php
                        include 'detail/koneksi.php';
                        $query = mysqli_query($con,"SELECT * FROM audio LIMIT 4");
                        while($row= mysqli_fetch_assoc($query)){  
                    ?>
                        <div class="col-md-3 pb-3">
                            <div class="row">
                                <div class= "container3 col-lg-12">
                                <h6><?php echo $row['judul'];?></p>
                                    <img src="assets/img/hero1.png" style="width:280px;">
                                    <div class="overlay">
                                    <audio controls class="w-75">
                                            <source src="assets/audio/<?php echo $row ['audio'];?>" type="audio/mpeg">
                                        </audio>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>           
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="col-lg-7">
                <div class="row">
                <?php
                    include 'detail/koneksi.php';
                    $query = mysqli_query($con,"SELECT * FROM artikel ORDER BY tanggal DESC LIMIT 6");
                    while($row= mysqli_fetch_assoc($query)){  
                ?>
                    <div class="col-md-12 pt-4" id="artikel">
                        <a href="detail/artikel-1.html" style="color: black; text-decoration: none;">
                            <div class="row">
                                <div class="col-md-6">
                                <!-- <img src="assets/img/thumbnail/<?=$row['gambar']?>" class="" id="gambar"> -->
                                    <img src="assets/img/thumbnail/<?php echo $row['gambar']?>" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-6 ">
                                    <h4><?php echo $row['judul']; ?></h4>
                                    <span class="badge badge-primary"><?php echo $row['nama_kategori'];?></span>
                                    <p class="mt-5 pt-3"><?php echo $row['tanggal']?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
        <footer style="background-color:#E94924;">
            <div class="container"> 
                <div class="row" >
                    <div class="col-lg-4">
                        <h2 style="color:white;">About US</h2>
                        <p style="color:white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur cupiditate incidunt in commodi perferendis, corporis repudiandae cum porro ab? Dolorum excepturi itaque quisquam quam laboriosam earum? Iure a ab iusto?</p>
                    </div>
                    <div class="col-lg-4">
                        <h2 style="color:white;">Recent Posts</h2>
                    </div>
                    <div class="col-lg-4">
                        <h2 style="color:white;">Kategori</h2>
                        <ul style="text-decoration:none;">
                            <a href="detail/healthissue.php" style="text-decoration:none;"><li>
                               <p>Health Issue</p> 
                            </li></a>
                            <a href="detail/Woman Spotlite.php" style="text-decoration:none;"><li>
                               <p>Woman Spotlite</p> 
                            </li></a>
                            <a href="detail/podcast.php" style="text-decoration:none;"><li>
                               <p>Podcast</p> 
                            </li></a>
                        </ul>
                    </div>
                </div>
                </div>
        </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script> 
var Aud = document.getElementsByClassName("myaudio"); 

function togglePlay() {
//   return audio.paused ? audio.play() : audio.pause();
};
</script>
    <script>
        $(document).ready(function(){
  $("#jquery_jplayer_1-<?php echo $key.'-'.$j; ?>").jPlayer({
    ready: function () {
      $(this).jPlayer("setMedia", {
        <?php echo $info['extension'];?>: "<?php echo "AudioFiles/".$a; ?>"
      });
    },
    solution:"flash,html",
    swfPath: "jquery",
    supplied: "<?php echo $info['extension'];?>"
  });
}); 
    </script>
  </body>
</html>