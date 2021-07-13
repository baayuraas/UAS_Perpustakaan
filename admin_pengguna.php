<?php 
session_start();
require 'koneksi.php';
if(!isset($_SESSION['username'])){
  echo "<script>alert('Silahkan login terlebih dahulu')</script>";
  echo "<meta http-equiv='refresh' content='0; url=index.php'>";
} else {

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Perpus Web</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Perpus Web</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Halaman Admin</a></li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <a href="logout.php">Logout</a>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        
        <!-- Product section-->
        <section class="py-5">
            
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <h3 class="display-5 fw-bolder">Welcome : <?php echo $_SESSION['nama']; ?></h3>
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="img/<?php echo $_SESSION['gambar']; ?>"  height="250" alt="..." /></div>
                    <div class="col-md-6">
                        <h3 class="display-5 fw-bolder">Data Pendaftar</h3>
                        <div class="small mb-1">Nama : <?php echo $_SESSION['nama']; ?></div>
                        <div class="small mb-1">Username :<?php echo $_SESSION['username']; ?></div>
                        <div class="small mb-1">E-Mali : <?php echo $_SESSION['email']; ?></div>
                        <div class="small mb-1">Password : *******</div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Perpustakaan 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php } ?>
