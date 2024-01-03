<?php

require 'config_materi.php';

$pertemuan = $_GET["pertemuan"];
$username = $_GET["username"];

if( hapus_materi($pertemuan) > 0 ) {
    echo "
        <script>
            alert('success');
            document.location.href = 'list_materi.php?username=$username';
        </script>
        ";
} else {
    echo "
        <script>
            alert('failed');
            document.location.href = 'list_materi.php?username=$username';
        </script>
        ";
}

?>