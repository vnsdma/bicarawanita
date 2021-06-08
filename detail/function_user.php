<?php
include 'koneksi.php';

if($_GET['act']== 'tambahuser'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_user = $_POST['nama_user'];
    $role = $_POST['role'];

    //query
    $querytambah =  mysqli_query($con, "INSERT INTO user VALUES('','$username','$password' , '$nama_user' , '$role')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:../admin/data.php?page=data_editor");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($con);
    }
}
elseif($_GET['act']=='updateuser'){
    $id_user = $_POST['id_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    //query update
    $queryupdate = mysqli_query($con, "UPDATE user SET username='$username' , password='$password' , role='$role' WHERE id_user='$id_user' ");

    if ($queryupdate) {
        # credirect ke page index
        header("location:../admin/data.php?page=data_editor");    
    }
    else{
        echo "ERROR, data gagal diupdate". mysqli_error($con);
    }
}
elseif ($_GET['act'] == 'deleteuser'){
    $id_user = $_GET['id'];

    //query hapus
    $querydelete = mysqli_query($con, "DELETE FROM user WHERE id_user = '$id_user'");

    if ($querydelete) {
        # redirect ke index.php
        header("location:../admin/data.php?page=data_editor");
    }
    else{
        echo "ERROR, data gagal dihapus". mysqli_error($con);
    }

    mysqli_close($con);
}
?>