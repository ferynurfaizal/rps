<?php 

require 'config.php';

$username = $_GET['username'];

$result = mysqli_query($conn,"SELECT * FROM adminnn WHERE username = '$username' ");
$row = mysqli_fetch_assoc($result);

$fullname = $row["fullname"];
$prodi = $row["prodi"];
$nim = $row["nim"]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b91f07c834.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="src/bootstrap.css">
    <title>Dashbaord</title>
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

                <p style="font-size: 16px; margin: 10px 0 0 0; text-align: center;"><?= $fullname ?></p>
                <p style="font-size: 13px; margin-bottom: 0; text-align: center;"><?= $prodi ?></p>

                <a class="btn aktif amikom-btn-2 w-100 py-2 rounded-4 mt-5" href="dashboard.php?username=<?= $username ?>">
                     Dashboard
                </a>

                <a class="btn amikom-btn-2 w-100 py-2 rounded-4 mt-3" href="list_matkul.php?username=<?= $username ?>">
                     Mata Kuliah
                </a>

                

             
                <a class="btn amikom-btn-2 w-100 py-2 rounded-4 mt-3" href="logout.php">
                     Logout
                </a> 
                
            </div>
            
            <div class="col-10 p-4 px-5" >
                
                <h2 class="text-center">Selamat Datang, <br>
                <span class="amikom-clr"><?= $fullname ?></span>
                </h2>
                <h4 class="text-center amikom-clr-2 mb-4"><?= $nim ?></h4>
                <div style="width: 100%; height: 2px; background-color: #4A1B9D; margin: auto;" ></div>
                
                <div style="width: 100%; display: grid; place-items: center; padding: 190px 0">
                    <img src="src/d3.svg" style="width: 70%;" alt="">
                </div>

            </div>
        </div>
    </div>

    <script src="src/bootstrap.js" ></script>

</body>
</html>