<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Perpus Web</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- costum css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="container-fluid mb-4">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4">
                <?php
                require 'koneksi.php';
                if (isset($_POST['simpan'])) {
                    $nama      = mysqli_real_escape_string($mysqli, $_POST['nama_pengguna']);
                    $email     = mysqli_real_escape_string($mysqli, $_POST['email_pengguna']);
                    $username  = mysqli_real_escape_string($mysqli, $_POST['user_pengguna']);
                    $password  = mysqli_real_escape_string($mysqli, $_POST['pw_pengguna']);
                    $foto    = mysqli_real_escape_string($mysqli, $_FILES['foto_pengguna']['name']);

                    $mysqli->query("INSERT INTO pengguna
                                    VALUES('', '$nama','$username','$password','$email','$foto')");
                    move_uploaded_file($_FILES['foto_pengguna']['tmp_name'], 'img/' . $foto);
                    echo "<div class='alert alert-danger'>Registrasi Berhasil</div>";
                    echo "<meta http-equiv='refresh' content='1;url=login_pengguna.php'>";
                }
                ?>
                <form class="form-container" action="register_pengguna.php" method="POST" enctype="multipart/form-data">
                    <h4 class="text-center font-weight-bold"> Sign-Up </h4>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="nama_pengguna" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Alamat Email</label>
                        <input type="email" class="form-control" id="InputEmail" name="email_pengguna" aria-describeby="emailHelp" placeholder="Masukkan email">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="user_pengguna" placeholder="Masukkan username">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="InputPassword" name="pw_pengguna" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload File</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto_pengguna">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-primary btn-block">register_pengguna</button>
                    <div class="form-footer mt-2">
                        <p> Sudah punya account? <a href="login_pengguna.php">Login</a></p>
                    </div>
                </form>
            </section>
        </section>
    </section>

    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>