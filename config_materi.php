<?php

$conn = mysqli_connect("localhost", "root", "", "user");


function add_materi($data) {

    global $conn;
    
    $pertemuan = htmlspecialchars($data["pertemuan"]);
    $judul = htmlspecialchars($data["judul"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    
  

    $query = "INSERT INTO materi VALUES 
    ('$pertemuan', '$judul', '$deskripsi')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



function edit_materi($data) {

    global $conn;

    $pertemuan = htmlspecialchars($data["pertemuan"]);
    $judul = htmlspecialchars($data["judul"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    

    $query = "UPDATE materi SET 
    pertemuan = '$pertemuan',pertemuan = '$pertemuan', judul = '$judul', deskripsi = '$deskripsi' WHERE pertemuan = '$pertemuan' ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus_materi($pertemuan) {
    global $conn;

    $hapus = "DELETE FROM materi WHERE pertemuan = '$pertemuan' ";
    mysqli_query($conn, $hapus);

    return mysqli_affected_rows($conn);
}
?>