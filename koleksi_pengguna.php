<!DOCTYPE html>
<html lang="en">

<head>
  <title>Perpustakaan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link href="./fontawesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css" />
</head>

<?php
include 'konek.php';
?>

<body>

  <!-- bagian navbar -->
  <div class="container">
    <div class="row">
      <div class="col-8">


        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
          <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
              <div class="row no-gutters">
                <ul class="nav nav-pills nav-fill">
                  <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fab fa-accusoft"></i></a>
                  </li>
                  <li>
                    <class class="nav-item active">
                      <a class="nav-link" href="home.php"><b>BOOK4U</b><span class="sr-only"></span></a>
                    </class>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="home.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="koleksi.php">Book selection</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="home.php">Contact</a>
                  </li>
                </ul>
              </div>
            </div>


            <div class="row no-gutters">
              <div class="daftar col-auto">
                <ul>
                  <li class="nav-item">
                    <a class="nav-link" href="">Sign in</a>
                  </li>
                  <!-- 
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Alexander</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Profile</a>
                          <a class="dropdown-item" href="#">Premium</a>
                          <a class="dropdown-item" href="#">Wishlist</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Logout</a>
                        </div>
                      </li>
                     -->
                </ul>
              </div>
              <!-- <div class="login col-auto">
                  <ul>
                    <li class="nav-item">
                      <img src="ktp/<?php echo $data["ktp"] ?>" width ="50px" height="50px" >
                    </li>
                  </ul>
                </div> 
                -->
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>

  <!-- bagian list -->
  <br><br><br><br><br><br>
  <div class="koleksi1">
    <h1>Koleksi buku</h1>
    <p>Daftar buku</p>
    <br>
    <div class="list">
      <table>
        <thead>
          <tr>
            <th>Judul buku</th>
            <th>Penerbit</th>
            <th>Pengarang</th>
            <th>Genre</th>
            <th>Tanggal rilis</th>
            <th>Link</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $nomor = 1;
          $query = 'select * from buku';
          $hasil = mysqli_query($conn, $query);
          foreach ($hasil as $hs) {
          ?>
            <tr>
              <td><?php echo $hs['judul_buku'] ?></td>
              <td><?php echo $hs['penerbit_buku'] ?></td>
              <td><?php echo $hs['pengarang_buku'] ?></td>
              <td><?php echo $hs['genre'] ?></td>
              <td><?php echo $hs['tanggal_rilis'] ?></td>
              <td><a href="file/pdf/<?php echo $hs['data_buku'] ?>">Link</a></td>
            </tr>
          <?php
          }
          ?>
        </tbody>

        <!-- <tr>
                <th>Tanggal rilis</th>
                <th>Judul buku</th>
                <th>Genre</th>
                <th>Link</th>
            </tr>
            <tr>
                <td>2021/12/12</td>
                <td>Charlie Wade</td>
                <td>Slice Of Life</td>
                <td><a href="#" class="btn btn-primary">Unduh</a></td>
            </tr>
            <tr>
                <td>2021/12/12</td>
                <td>Charlie Wade</td>
                <td>Slice Of Life</td>
                <td><a href="#" class="btn btn-primary">Unduh</a></td>
            </tr>
            <tr>
                <td>2021/12/12</td>
                <td>Charlie Wade</td>
                <td>Slice Of Life</td>
                <td><a href="#" class="btn btn-primary">Unduh</a></td>
            </tr>
            <tr>
                <td>2021/12/12</td>
                <td>Charlie Wade</td>
                <td>Slice Of Life</td>
                <td><a href="#" class="btn btn-primary">Unduh</a></td>
            </tr>
            <tr>
                <td>2021/12/12</td>
                <td>Charlie Wade</td>
                <td>Slice Of Life</td>
                <td><a href="#" class="btn btn-primary">Unduh</a></td>
            </tr>
            <tr>
              <td>2021/12/12</td>
              <td>Charlie Wade</td>
              <td>Slice Of Life</td>
              <td><a href="#" class="btn btn-primary">Unduh</a></td>
          </tr>
          <tr>
              <td>2021/12/12</td>
              <td>Charlie Wade</td>
              <td>Slice Of Life</td>
              <td><a href="#" class="btn btn-primary">Unduh</a></td>
          </tr>
          <tr>
              <td>2021/12/12</td>
              <td>Charlie Wade</td>
              <td>Slice Of Life</td>
              <td><a href="#" class="btn btn-primary">Unduh</a></td>
          </tr>
          <tr>
            <td>2021/12/12</td>
            <td>Charlie Wade</td>
            <td>Slice Of Life</td>
            <td><a href="#" class="btn btn-primary">Unduh</a></td>
        </tr>
        <tr>
            <td>2021/12/12</td>
            <td>Charlie Wade</td>
            <td>Slice Of Life</td>
            <td><a href="#" class="btn btn-primary">Unduh</a></td>
        </tr>
        <tr>
            <td>2021/12/12</td>
            <td>Charlie Wade</td>
            <td>Slice Of Life</td>
            <td><a href="#" class="btn btn-primary">Unduh</a></td>
        </tr>
        <tr>
          <td>2021/12/12</td>
          <td>Charlie Wade</td>
          <td>Slice Of Life</td>
          <td><a href="#" class="btn btn-primary">Unduh</a></td>
      </tr>
      <tr>
          <td>2021/12/12</td>
          <td>Charlie Wade</td>
          <td>Slice Of Life</td>
          <td><a href="#" class="btn btn-primary">Unduh</a></td>
      </tr>
      <tr>
          <td>2021/12/12</td>
          <td>Charlie Wade</td>
          <td>Slice Of Life</td>
          <td><a href="#" class="btn btn-primary">Unduh</a></td>
      </tr> -->
      </table>
    </div>
  </div>
  <br>
  <br>

  <section id="footer">
    <div class="foot bg-dark text-center pb-2">
      <p><a href="https://www.instagram.com/novan.75/" class="text-white fw-bold">Copyright 2021 | @Perpustakaan</a></p>
    </div>
  </section>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

</html>