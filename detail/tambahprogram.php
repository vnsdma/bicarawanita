<form action="" method="post" role="form" enctype="multipart/form-data">
                    <input type="text" id="judul" name="judul">
                    <label class=newbtn>
                        <img id="blah" src="http://placehold.it/120x120" >
                        <input id="pic" name="my_images" class='pis mt-2' onchange="readURL(this);" type="file" >
                    </label>
                    <input type="submit" name="submit" value="submit" class="btn btn-primary mt-2">
        </form>
        <?php
        if(isset($_POST['submit'])){
            include 'koneksi.php';
            $judul = $_POST['judul'];

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
            //             $sql = mysql_query($con,"INSERT INTO program(gambar) VALUES ('$fileNameNew')");
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
                if ($fileSize > 12500000) {
                    echo "<script>alert('Sorry, Your file is too large')</script>";
                }else {
                    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
                    $fileActualExt = strtolower($fileExt);
                    $allowed = array("jpg","png","jpeg");

                    if (in_array($fileActualExt,$allowed)) {
                        $fileNameNew = uniqid("IMG-", true).'.'.$fileActualExt;
                        $fileDestination = '../assets/img/program/'.$fileNameNew;
                        move_uploaded_file($fileTmpName,$fileDestination);
                        $sql = mysqli_query($con,"INSERT INTO program(judul,gambar) VALUES ('$judul','$fileNameNew')");
                        // header("Location: ../admin/data.php?page=program");
                        echo "<script>alert('berhasil')</script>";
                    }else{ 
                        // $em = "You can't upload files of this type";
                        // header("Location: ../admin/data.php?page=tambahprogram?error=$em");
                        echo "<script>alert('gagal')</script>";
                    }
                }
            }else {
                // $em = "Unknown error occured";
                // header("Location: ../admin/data.php?page=tambahprogram?error=$em");
                echo "<script>alert('error')</script>";
            }
        
        
        // Kategori
        // $sql_kat = mysqli_query($con,"INSERT INTO kategori(nama_kategori)VALUES('$kategori')");
        
         }
       
        ?>