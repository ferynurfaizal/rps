<?php

$conn = mysqli_connect("localhost", "root", "", "user");


function add_matkul($data) {

    global $conn;
    
    $code = htmlspecialchars($data["code"]);
    $matkul = htmlspecialchars($data["matkul"]);
    $nm_dos = htmlspecialchars($data["nm_dos"]);
    $alamat = htmlspecialchars($data["alamat"]);
  

    $query = "INSERT INTO matkull VALUES 
    ('$code', '$matkul', '$nm_dos', '$alamat')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



function edit_matkul($data) {

    global $conn;

    $code = htmlspecialchars($data["code"]);
    $matkul = htmlspecialchars($data["matkul"]);
    $nm_dos = htmlspecialchars($data["nm_dos"]);
    $alamat = htmlspecialchars($data["alamat"]);


    $query = "UPDATE matkull SET 
    code = '$code', matkul = '$matkul', nm_dos = '$nm_dos', alamat = '$alamat' WHERE code = '$code' ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($code) {
    global $conn;

    $hapus = "DELETE FROM matkull WHERE code = '$code' ";
    mysqli_query($conn, $hapus);

    return mysqli_affected_rows($conn);
}
?>