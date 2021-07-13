<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
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
                    <h1><i class="icon-file-alt"></i> Data</h1>
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
                            <h3><i class="icon-reorder"></i> Tambah Buku</h3>
                            <div class="box-tool">
                                <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                <a data-action="close" href="#"><i class="icon-remove"></i></a>
                            </div>
                        </div>
                        <div class="box-content">
                            <form action="hubungan_tambah_buku.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                <div class="control-group">
                                    <div class="controls">
                                        <input type="hidden" class="span6" name="id_buku" value="" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Nama File</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="judul_buku" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Genre</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="genre" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Penerbit</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="penerbit_buku" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Pengarang</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="pengarang_buku" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Tanggal Rilis</label>
                                    <div class="controls">
                                        <input type="date" class="span6" name="tanggal_rilis" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">File</label>
                                    <div class="controls">
                                        <input type="file" class="default" name="data_buku" />
                                    </div>
                                </div>

                                <button class="btn" name="yes" value="yes">Tambah</button>
                                <a button class="btn btn-danger" href="buku.php">Batal</button>
                                </a>
                            </form>
                        </div>
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