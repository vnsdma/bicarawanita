<?php
include 'koneksi.php';
// $blogs = mysqli_query($con, "SELECT * FROM artikel ORDER BY id_artikel DESC");
?>
<link rel="stylesheet" href="../ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/style/styles.css">
<section class="content-wrapper">
<div class="container">
    <div class="row">
        <div class="col-lg-8">
        <form action="" method="post" role="form" enctype="multipart/form-data">
			<input type="text" name="judul" placeholder="Judul" class="in mt-3">
			<br><br>
			<textarea name="isi" class="ckeditor" id="ckeditor"></textarea>
			<br/>
		
        </div>
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4>Masukkan gambar</h4>
                    <label class=newbtn>
                    <img id="blah" src="http://placehold.it/120x120" >
                    <input id="pic" name="my_images" class='pis mt-2' onchange="readURL(this);" type="file" >
                    </label>

                    <h4>Kategori</h4>
                    <select class="custom-select" id="kategori" name="kategori">
                    <option value="">Pilih Kategori</option>
                    <?php
                        $queryview = mysqli_query($con, "SELECT * FROM kategori");
                        while ($row = mysqli_fetch_assoc($queryview)) {
                    ?>
                    
                        
                        <option value="<?php echo $row['nama_kategori'] ?>"><?php echo $row['nama_kategori'] ?></option>
                    
                    <?php } ?>
                    </select>
                <input type="submit" name="submit" value="submit" class="btn btn-primary mt-2">
                </div>
            </div>
        </div>
        </form>
        <?php
        if(isset($_POST['submit'])){
            include 'koneksi.php';

            echo "<pre>";
            print_r($_FILES['my_images']);
            echo "<pre>";
            $judul = $_POST['judul'];
            $isi = $_POST['isi'];
            // $file = $_FILES['my_images'];
            $kategori = $_POST['kategori'];

            $fileName = $_FILES['my_images']['name'];
            $fileTmpName = $_FILES['my_images']['tmp_name'];
            $fileSize = $_FILES['my_images']['size'];
            $fileError = $_FILES['my_images']['error'];
            $fileType = $_FILES['my_images']['type'];
            

            
            
            // if (in_array($fileActualExt, $allowed)){
            //     $fileNameNew = uniqid('',true).'.'.$fileActualExt;
            //     $fileDestination = '../assets/img/thumbnail'.$fileNameNew;
            //     move_uploaded_file($fileTmpName,$fileDestination);        
            //     if ($fileError === 0) {
            //         if ($fileSize < 10000){
            //             $fileExt = explode('.',$fileName);
            //             $fileActualExt = strtolower(end($fileExt));
            //             $allowed = array('jpg','jpeg','png');
            //             $sql = mysql_query($con,"INSERT INTO artikel(gambar) VALUES ('$fileNameNew')");
            //             header("Location: ");
            //         }  else {
            //             echo "Berhasil !";
            //         }                 
            //     } else {
            //         echo "Terdapat kesalahan dengan gambar kamu !";
            //     }
            // } else {
            //     echo "You cannot upload files of this type!";
            // }
            if($fileError === 0) {
                if ($fileSize > 125000) {
                    echo "<script>alert('Sorry, Your file is too large')</script>";
                }else {
                    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
                    $fileActualExt = strtolower($fileExt);
                    $allowed = array("jpg","png","jpeg");

                    if (in_array($fileActualExt,$allowed)) {
                        $fileNameNew = uniqid("IMG-", true).'.'.$fileActualExt;
                        $fileDestination = '../assets/img/thumbnail/'.$fileNameNew;
                        move_uploaded_file($fileTmpName,$fileDestination);
                        $sql = mysqli_query($con,"INSERT INTO artikel(judul,isi,gambar,nama_kategori) VALUES ('$judul','$isi','$fileNameNew','$kategori')");
                        // header("Location: ../admin/data.php?page=artikel");
                        echo "<script>alert('berhasil')</script>";
                    }else{ 
                        // $em = "You can't upload files of this type";
                        // header("Location: ../admin/data.php?page=tambahartikel?error=$em");
                        echo "<script>alert('gagal')</script>";
                    }
                }
            }else {
                // $em = "Unknown error occured";
                // header("Location: ../admin/data.php?page=tambahartikel?error=$em");
                echo "<script>alert('error')</script>";
            }
        
        
        // Kategori
        // $sql_kat = mysqli_query($con,"INSERT INTO kategori(nama_kategori)VALUES('$kategori')");
        
         }
       
        ?>
        <!-- //kode pesan error dan sukses -->
        <?php if(isset($_GET["error"])){ ?>
            <div id="error" class="wow swing">
                <h1>Jangan Kosong !!</h1>
            </div>
        <?php }else if(isset($_GET["sukses"])){?>
            <div id="sukses" class="wow swing">
                <h1>Sukses Di buat</h1>
            </div>		
        <?php } ?>

        <!-- //kode untuk menampilkan data dari database mysql -->
        
        
    </div>
</div>
</section>



<!-- <script src=”https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js”></script> -->
<script>
// new WOW().init();
// CKEDITOR.replace('ckeditor', {
//         filebrowserUploadUrl: 'ckeditor/ck_upload.php',
//         filebrowserUploadMethod: 'form',
//         extraPlugins = 'filebrowser';
//     });
// CKEDITOR.editorConfig = function( config )
// {
// config.enterMode = CKEDITOR.ENTER_BR;
// config.shiftEnterMode = CKEDITOR.ENTER_BR;

// };
$('.newbtn').bind("click" , function () {
        $('#pic').click();
 });
 
  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        };
        
</script>