<section class="content-wrapper">
<form action="" method="post" role="form" enctype="multipart/form-data">
                    <input type="text" id="judul" name="judul">
                    <label class=newbtn>
                        <input id="pic" name="audio" class='pis mt-2' onchange="readURL(this);" type="file" >
                    </label>
                    <input type="submit" name="submit" value="submit" class="btn btn-primary mt-2">
        </form>
        <?php
        if(isset($_POST['submit'])){
            include 'koneksi.php';
            $judul = $_POST['judul'];

            $fileName = $_FILES['audio']['name'];
            $fileTmpName = $_FILES['audio']['tmp_name'];
            $fileSize = $_FILES['audio']['size'];
            $fileError = $_FILES['audio']['error'];
            $fileType = $_FILES['audio']['type'];
            

            
            
            // if (in_array($fileActualExt, $allowed)){
            //     $fileNameNew = uniqid('',true).'.'.$fileActualExt;
            //     $fileDestination = '../assets/img/thumbnail'.$fileNameNew;
            //     move_uploaded_file($fileTmpName,$fileDestination);        
            //     if ($fileError === 0) {
            //         if ($fileSize < 10000){
            //             $fileExt = explode('.',$fileName);
            //             $fileActualExt = strtolower(end($fileExt));
            //             $allowed = array('jpg','jpeg','png');
            //             $sql = mysql_query($con,"INSERT INTO rekomendasi(audio) VALUES ('$fileNameNew')");
            //             header("Location: ");
            //         }  else {
            //             echo "Berhasil !";
            //         }                 
            //     } else {
            //         echo "Terdapat kesalahan dengan audio kamu !";
            //     }
            // } else {
            //     echo "You cannot upload files of this type!";
            // }
            if($fileError === 0) {
                if ($fileSize > 100000000000000000) {
                    echo "<script>alert('Sorry, Your file is too large')</script>";
                }else {
                    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
                    $fileActualExt = strtolower($fileExt);
                    $allowed = array("mp3");

                    if (in_array($fileActualExt,$allowed)) {
                        $fileNameNew = uniqid("MP3-", true).'.'.$fileActualExt;
                        $fileDestination = '../assets/audio/'.$fileNameNew;
                        move_uploaded_file($fileTmpName,$fileDestination);
                        $sql = mysqli_query($con,"INSERT INTO audio(judul,audio) VALUES ('$judul','$fileNameNew')");
                        // header("Location: ../admin/data.php?page=rekomendasi");
                        echo "<script>alert('berhasil')</script>";
                    }else{ 
                        // $em = "You can't upload files of this type";
                        // header("Location: ../admin/data.php?page=tambahrekomendasi?error=$em");
                        echo "<script>alert('gagal')</script>";
                    }
                }
            }else {
                // $em = "Unknown error occured";
                // header("Location: ../admin/data.php?page=tambahrekomendasi?error=$em");
                echo "<script>alert('error')</script>";
            }
        
        
        // Kategori
        // $sql_kat = mysqli_query($con,"INSERT INTO kategori(nama_kategori)VALUES('$kategori')");
        
         }
       
        ?>
        </section>