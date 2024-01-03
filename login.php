<?php

require 'config.php';

if ( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM adminnn WHERE username = '$username' ");
    $row = mysqli_fetch_assoc($result);
    $username = $row["username"];

    if ( mysqli_num_rows($result) === 1 ) {

        if ( $password === $row["password"]) {

            header("Location: dashboard.php?username=$username");
            exit;
        }

    }

    $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/bootstrap.css">
    <style>
        form #password, #username {
            width: 100%;
            border-radius: 13px;
            margin-bottom: 15px;
            padding: 5px 15px;
        }
        form label {
            text-align: left;
            margin-left: 13px;
        }
        .amikom-clr-2 {
            color: #FFAC00;
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
        .typing {
            color: #FFAC00;
            font-weight: 600;
        }
        .regis{
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            
        }
    </style>
</head>
<body>
    <div style="height: 100vh;" class="container-fluid align-content-center d-grid">
        <div class="row justify-content-evenly">
            <div style=" border-radius: 50px; background: #ffffff;box-shadow:  20px -20px 60px #d9d9d9, -20px 20px 60px #ffffff;" class="col-xl-3 col-sm-6 bg-white text-center px-5 py-4 rounded-5">
                <h3 class="mb-4 amikom-clr">Masuk</h3>
                <form action="" method="post" class="d-grid" >
                    <?php if ( isset($error)) : ?>
                        <p style="color: red;"><i>password atau username salah</i></p>

                    <?php endif ?>


                    <label for="username">Username</label>
                    <input class="mb-4" type="text" name="username" id="username" required>

                    <label for="password">Password</label>
                    <input class="mb-2" type="password" name="password" id="password" required>

                    <label for="remember"><input type="checkbox" name="remember" id="remember"> Simpan Password</label>
                    
                    <button style="width: 70px;" class="mx-auto mt-5 rounded-4 btn btn-sm amikom-btn" type="submit" name="login">Login</button>
                   
                    <p class="text-center" style="mb-4; margin-top: 15px; margin-bottom: 30px;">Belum punya akun?
                    <a href="registrasi.php" style="color:#4A1B9D;">Daftar Sekarang!</a></p>

                </form>
            </div>
        </div>
    </div>

    <script src="src/bootstrap.js" ></script>

</body>
</html>