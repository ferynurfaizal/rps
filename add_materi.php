<?php 

require 'config_materi.php';

$username = $_GET['username'];

if( isset($_POST["add_materi"]) ) {
   
    if (add_materi($_POST) > 0 ) {
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

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b91f07c834.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="src/bootstrap.css">
    <title>Add Dosen</title>
    <style>
        #pp {
            margin: 20px auto 0 auto;
            width: 110px;
            height: 110px;
            background-image: url(src/fery.jpg);
            background-position: top;
            background-size: cover;
            background-repeat: none;
            border-radius: 50%;
        }
        form #nik_dos, #nama_dos, select, textarea {
            width: 80%;
            border-radius: 10px;
            padding: 2px 10px;
        }
        .amikom-clr-2 {
            color: #FFAC00;
        }
        .amikom-bg {
            background-color: #4A1B9D;
        }
        .amikom-clr {
            color: #4A1B9D;
        }
        .amikom-btn {
            background-color: #4A1B9D;
            color: white;
        }
        .amikom-btn:hover {
            background-color: #5d2eae;
            color: white;
        }
        .amikom-btn-2 {
            letter-spacing: 2px;
            background-color: #5d2eae;
            color: white;
        }
        .amikom-btn-2:hover {
            background-color: #3b0e88;
            color: white;
        }
        table a {
            text-decoration: none;
            color: black;
        }
        table a:hover {
            color: #4A1B9D;
        }

        .aktif {
            background-color: #3b0e88;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div style="height: 100vh;" class="row">
            <div class="col-2 amikom-bg p-4 text-white">
                
                <div id="pp"></div>

                <p style="font-size: 16px; margin: 10px 0 0 0; text-align: center;">Fery Nur Faizal</p>
                <p style="font-size: 13px; margin-bottom: 0; text-align: center;">D3 Teknik Informatika</p>

                <a class="btn amikom-btn-2 w-100 py-2 rounded-4 mt-5" href="dashboard.php?username=<?= $username ?>">
                     Dashboard
                </a>

                <a class="btn amikom-btn-2 w-100 py-2 rounded-4 mt-3" href="list_matkul.php?username=<?= $username ?>">
                     Mata Kuliah
                </a>

                
                

                <a class="btn amikom-btn-2 w-100 py-2 rounded-4 mt-3" href="logout.php">
                     Logout
                </a> 

            </div>
            <div class="col-10 p-4 px-5">

                <div style="width: 100%; height: 2px; background-color: #4A1B9D; margin: auto;" ></div>
                
                <h5 class="my-3">Form Tambah Materi Kuliah</h5>

                <form action="" method="post">
                <table class="table table-borderless w-75">
                <tbody>
                    <tr>
                        <td><label for="pertemuan">Pertemuan</label></td>
                        <td><input type="text" name="pertemuan" id="pertemuan" placeholder="" required></td>
                        <td rowspan="5"><img src="src/amikom.svg" width="160" alt=""></td>
                    </tr>
                    <tr>
                        <td><label for="judul">Judul Materi</label></td>
                        <td><input type="text" name="judul" id="judul" placeholder="" required></td>
                    </tr>
                    <tr>
                        <td><label for="deskripsi">Deskripsi Materi</label></td>
                        <td><textarea name="deskripsi" id="deskripsi" rows="3"></textarea></td>
                    </tr>
                    
                </tbody>
                </table>

                <button type="submit" name="add_materi" class="mx-auto mt-4 rounded-4 py-1 px-3 btn btn amikom-btn">
                    Tambah
                </button>
                <a href="list_materi.php?username=<?= $username ?>" name="cancel" class="mx-auto mt-4 rounded-4 py-1 px-3 btn btn amikom-btn">
                    Cancel
                </a>

                </form>
            </div>
        </div>
    </div>

    <script src="src/bootstrap.js" ></script>

</body>
</html>