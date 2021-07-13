<?php
    session_start();
    if (isset($_SESSION["login"])) {
        header("Location: buku.php");
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

<head>
    <?php include("header.php"); ?>
</head>

<body class="login-page">
    <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

    <!-- BEGIN Main Content -->
    <div class="login-wrapper">
        <!-- BEGIN Login Form -->
        <form id="form-login" action="cek_login.php" method="POST" enctype="multipart/form-data">
            <h3>Login to your account</h3>
            <hr />
            <?php if (isset($error)) : ?>
                <p style="color:red; font-style:italic; ">username / password salah</p>
            <?php endif; ?>
            <div class="control-group">
                <div class="controls">
                    <input type="text" placeholder="Username" name="user_admin" class="input-block-level" />
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="password" placeholder="Password" name="pass_admin" class="input-block-level" />
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox" value="remember" /> Remember me
                    </label>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" name="login" class="btn btn-primary input-block-level">Sign In</button>
                </div>
            </div>
            <hr />
            <p class="clearfix">
                <a href="#" class="goto-forgot pull-left">Forgot Password?</a>
                <a href="#" class="goto-register pull-right">Sign up now</a>
            </p>
        </form>
        <!-- END Login Form -->

        <!-- BEGIN Forgot Password Form -->
        <form id="form-forgot" action="" method="POST" class="hide" enctype="multipart/form-data">
            <h3>POST back your password</h3>
            <hr />
            <div class="control-group">
                <div class="controls">
                    <input type="text" placeholder="Email" class="input-block-level" />
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-primary input-block-level">Recover</button>
                </div>
            </div>
            <hr />
            <p class="clearfix">
                <a href="#" class="goto-login pull-left">← Back to login form</a>
            </p>
        </form>
        <!-- END Forgot Password Form -->

        <!-- BEGIN Register Form -->
        <form id="form-register" action="cek_regis.php" method="POST" class="hide" enctype="multipart/form-data">
            <h3>Sign up</h3>
            <hr />
            <div class="control-group">
                <div class="controls">
                    <input type="text" placeholder="Email" name="email_admin" class="input-block-level" />
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="text" placeholder="Username" name="user_admin" class="input-block-level" />
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="password" placeholder="Password" name="pass_admin" class="input-block-level" />
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="password" placeholder="Repeat Password" name="rpass_admin" class="input-block-level" />
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="file" class="default" name="foto_admin" />
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" name="regis" class="btn btn-primary input-block-level">Sign up</button>
                </div>
            </div>
            <hr />
            <p class="clearfix">
                <a href="#" class="goto-login pull-left">← Back to login form</a>
            </p>
        </form>
        <!-- END Register Form -->
    </div>
    <!-- END Main Content -->

    <!--basic scripts-->
    <?php include("jsscript.php"); ?>
</body>

</html>