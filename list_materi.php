<?php 

require 'config_materi.php';

$username = $_GET['username'];

$result = mysqli_query($conn,'SELECT * FROM materi');
$row = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b91f07c834.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="src/bootstrap.css">
    <title>List Dosen</title>
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
                <p style="font-size: 13px; margin-bottom: 0; text-align: center;">D3 Teknik Ika</p>

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
                
                <h5 class="my-3">List Materi Perkuliahan</h5>

                <a href="add_materi.php?username=<?= $username ?> "class="btn btn-warning mb-4" style="float: left; font-size: 13px;"><i
                class="fa-solid fa-plus" style="margin-right: 10px;"></i>Tambah Materi</a>

                <a href="list_matkul.php?username=<?= $username ?> "class="btn mb-4" style="float: left; font-size: 13px; background-color : #de1738; margin-left: 10px;"><i
                class="fa-solid fa-rotate-left" style="margin-right: 10px;"></i>Back</a>

                <table class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        
                       
                        <th scope="col" style="width: 5%;">Pertemuan</th>
                        <th scope="col">Judul Materi Kuliah</th>
                        <th style="col" scope="col">Deskripsi</th>
                        <th scope="col" style="width: 10%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                
                <?php foreach($result as $dos): ?>
                    <tr>
                        
                        
                        <td class="text-center"><?= $dos["pertemuan"] ?></td>
                        <td class="text-center"><?= $dos["judul"] ?></td>
                        <td class="text-center"><?= $dos["deskripsi"] ?></td>
                        <td class="text-center">
                            <a href="edit_materi.php?username=<?= $username ?>&pertemuan=<?= $dos["pertemuan"] ?>"><i class="fa-solid fa-pen fa-xs"></i> Edit</a> <br>
                            <a href="hapus_materi.php?username=<?= $username ?>&pertemuan=<?= $dos["pertemuan"] ?>"><i class="fa-solid fa-trash fa-xs"></i> Hapus</a>
                        </td>
                    </tr>
                
                <?php endforeach ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="src/bootstrap.js" ></script>

</body>
</html>