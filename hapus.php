<?php

require 'config.php';

$code = $_GET["code"];
$username = $_GET["username"];

if( hapus($code) > 0 ) {
    echo "
        <script>
            alert('success');
            document.location.href = 'list_matkul.php?username=$username';
        </script>
        ";
} else {
    echo "
        <script>
            alert('failed');
            document.location.href = 'list_matkul.php?username=$username';
        </script>
        ";
}

?>