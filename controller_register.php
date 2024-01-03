<?php
include("config.php");

    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $username = $_POST['username'];
    $password = ($_POST['password']);


    $sql = "INSERT INTO adminnn VALUES 
    ('$id', '$fullname','$nim','$prodi', '$username','$password')";

    $query = mysqli_query($conn, $sql);

    if($query){
        header("location:login.php?status=sukses");
        exit;
        
    }else{
        echo "Gagal Mendaftar";
        exit;
    }

?>