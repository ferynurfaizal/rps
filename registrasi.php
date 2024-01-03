
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/bootstrap.css">
    <style>
        form #password, #username, #id, #fullname, #prodi, #nim {
            width: 100%;
            border-radius: 13px;
            margin-bottom: 15px;
            padding: 5px 15px;
        }
        form label {
            text-align: left;
            margin-left: 19px;
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
    </style>
</head>
<body>
    <div style="height: 100vh;" class="container-fluid align-content-center d-grid">
        <div class="row justify-content-evenly">
            <div style=" border-radius: 50px; background: #ffffff;box-shadow:  20px -20px 60px #d9d9d9, -20px 20px 60px #ffffff;" class="col-xl-3 col-sm-6 bg-white text-center px-5 py-4 rounded-5">
                <h3 class="mb-4 amikom-clr">Register</h3>

                <form action="controller_register.php" method="post" class="d-grid" >
                    
                <?php if ( isset($error)) : ?>
                        <p style="color: red;"><i>password atau username salah</i></p>

                    <?php endif ?>

                    <label for="id">ID</label>
                    <input class="mb-4" type="text" name="id" id="id" required>

                    <label for="fullname">Nama Lengkap</label>
                    <input class="mb-4" type="text" name="fullname" id="fullname" required>

                    <label for="nim">NIM</label>
                    <input class="mb-4" type="text" name="nim" id="nim" required>

                    <label for="prodi">Prodi</label>
                    <input class="mb-4" type="text" name="prodi" id="prodi" required>

                    <label for="username">Username</label>
                    <input class="mb-4" type="text" name="username" id="username" required>

                    <label for="password">Password</label>
                    <input class="mb-2" type="password" name="password" id="password" required>

                    <label for="remember"><input type="checkbox" name="remember" id="remember"> Simpan Password</label>
                    

                    <button style="width: 90px;" class="mx-auto mt-5 rounded-4 btn btn-sm amikom-btn" type="submit" name="registrasi">Submit</button>

                    <p class="text-center" style="mb-4; margin-top: 15px; margin-bottom: 30px;">Punya akun?
                    <a href="login.php" style="color:#4A1B9D;">Login Disini!</a></p>

                </form>
            </div>
        </div>
    </div>

    <script src="src/bootstrap.js" ></script>

</body>
</html>