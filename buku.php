<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'koneksi.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<?php include("header.php"); ?>

<body>
    <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

    <!-- BEGIN Navbar -->
    <?php include("navbar.php"); ?>
    <!-- END Navbar -->

    <!-- BEGIN Container -->
    <div class="container-fluid" id="main-container">
        <!-- BEGIN Sidebar -->
        <?php include("sidebar.php"); ?>
        <!-- END Sidebar -->

        <!-- BEGIN Content -->
        <div id="main-content">
            <!-- BEGIN Page Title -->
            <div class="page-title">
                <div>
                    <h1><i class="icon-reorder"></i> Data</h1>
                    <h4>Overview, stats, chat and more</h4>
                </div>
            </div>
            <!-- END Page Title -->

            <!-- BEGIN Breadcrumb -->
            <div id="breadcrumbs">
                <ul class="breadcrumb">
                    <li class="active"><i class="icon-home"></i> Home</li>
                </ul>
            </div>
            <!-- END Breadcrumb -->

            <!-- BEGIN Main Content -->
            <div class="row-fluid">
                <div class="span12">
                    <div class="box">
                        <div class="box-title">
                            <h3><i class="icon-table"></i>buku</h3>
                            <div class="box-tool">
                                <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                <a data-action="close" href="#"><i class="icon-remove"></i></a>
                            </div>
                        </div>
                        <div class="box-content">
                            <form target="#" method="GET" class="search-form">
                                <span class="search-pan">
                                    <button type="submit">
                                        <i class="icon-search"></i>
                                    </button>
                                    <input type="text" name="search" placeholder="Search ..." autocomplete="off" />
                                </span>
                            </form>
                            <div class="btn-toolbar pull-right clearfix">
                                <div class="btn-group">
                                    <a action="tambah_buku.php" class="btn btn-circle show-tooltip" title="Add new record" href="tambah_buku.php"><i class="icon-plus"></i></a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <table class="table table-advance" id="table1">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Genre</th>
                                        <th>Penerbit</th>
                                        <th>Pengarang</th>
                                        <th>Tanggal Rilis</th>
                                        <th class="text-center">Hapus</th>
                                        <th class="text-center">Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = "SELECT * FROM buku";
                                    $hasil = mysqli_query($conn, $query);
                                    foreach ($hasil as $x) {
                                    ?>

                                        <tr>
                                            <td><a href="file/pdf/<?php echo $x['data_buku'] ?>" target="_blank">
                                                    <?php echo $x['judul_buku'] ?></a></td>
                                            <td><?php echo $x['genre'] ?></td>
                                            <td><?php echo $x['penerbit_buku'] ?></td>
                                            <td><?php echo $x['pengarang_buku'] ?></td>
                                            <td><?php echo $x['tanggal_rilis'] ?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-small btn-danger show-tooltip" title="Delete" href="delete_barang.php?delete=<?php echo $x['kode_obat']; ?>"><i class="icon-trash"></i></a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-magenta" title="Delete" href="delete_barang.php?delete=<?php echo $x['kode_obat']; ?>" download="download"><i class="icon-download-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- END Main Content -->
                            <a id="btn-scrollup" class="btn btn-circle btn-large" href="#"><i class="icon-chevron-up"></i></a>
                        </div>
                        <!-- END Content -->
                    </div>
                    <!-- END Container -->


                    <!--basic scripts-->
                    <?php include("jsscript.php"); ?>
</body>

</html>