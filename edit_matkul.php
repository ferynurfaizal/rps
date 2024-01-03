<?php 

require 'config.php';

$username = $_GET['username'];
$code = $_GET['code'];

$result = mysqli_query($conn,"SELECT * FROM matkull WHERE code = '$code' ");
$row = mysqli_fetch_assoc($result);

if( isset($_POST["edit_matkul"]) ) {
   
    if (edit_matkul($_POST) > 0 ) {
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
    <title>Edit Dosen</title>
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
            <div class="col-10 p-4 px-5">

                <div style="width: 100%; height: 2px; background-color: #4A1B9D; margin: auto;" ></div>
                
                <h5 class="my-3">Edit Mata Kuliah</h5>

                <form action="" method="post">
                <table class="table table-borderless w-75">
                <tbody>
                    <tr>
                        <td style="width: 15%;"><label for="code">Code Matkul</label></td>
                        <td style="width: 45%;"><input type="text" name="code" id="code" value="<?= $row["code"] ?>"></td>
                        <td rowspan="5"><img src="src/amikom.svg" width="160" alt=""></td>
                    </tr>
                    <tr>
                        <td><label for="matkul">Mata Kuliah</label></td>
                        <td><input type="text" name="matkul" id="matkul" value="<?= $row["matkul"] ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="nm_dos">Nama</label></td>
                        <td><input type="text" name="nm_dos" id="nm_dos" value="<?= $row["nm_dos"] ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="alamat">Alamat</label></td>
                        <td><textarea name="alamat" id="alamat" rows="3"><?= $row["alamat"] ?></textarea></td>
                    </tr>
                   
    
                </tbody>
                </table>

                <button type="submit" name="edit_matkul" class="mx-auto mt-4 rounded-4 py-1 px-3 btn btn amikom-btn">
                    Simpan
                </button>
                <a href="list_matkul.php?username=<?= $username ?>" type="submit" name="cancel" class="mx-auto mt-4 rounded-4 py-1 px-3 btn btn amikom-btn">
                    Cancel
                </a>

                </form>
            </div>
        </div>
    </div>

    <script src="src/bootstrap.js" ></script>

</body>
</html>