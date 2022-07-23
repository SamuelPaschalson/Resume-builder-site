<?php
require("login.class.php");
require("register.class.php");
?>

<?php
if (isset($_POST['submit'])) {
    $user = new LoginUser($_POST['username'], $_POST['password']);
 
}

if (isset($_POST['submit'])) {
  $user = new RegisterUser($_POST['id'], $_POST['username'], $_POST['password']);

}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <title>Log in | XenOK</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Samuel Chinomso Paschalson(Iyasara)">
        <meta name="company" content="XenOK">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="date" content="May 26"> 

      <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->

        <!-- App favicon -->
            <link rel="shortcut icon" href="images/favico.ico">

        <!-- Login Css -->
            <link rel="stylesheet" href="css/login.css">
        
        <!-- Bootstrap Css -->
            <link rel="stylesheet" href="css/bootstrap.min (1).css">
            <link rel="stylesheet" href="css/fontawesome.min.css">
            <link rel="stylesheet" href="css/all.min.css">

        
    </head>
    <body>

        <div class="main-wrapper login-body">
            <div class="login-wrapper">
                <div class="container">
                    <h3 class="img-fluid logo-dark mb-2 ml-3" alt="Logo">XenOK</h3>
<p class="text-white bg-danger"><?php echo @$user->error; ?></p>
<p class="text-white bg-primary"><?php echo @$user->success; ?></p>
                    <div class="loginbox">
                        <div class="login-right">
                            <div class="login-right-wrap">
                                <h1>Login</h1>
                                <p class="account-subtitle">Login to your Account</p>

                                <form action="" method="post">
       <input name="id" type="hidden" class="form-control pass-input" value="<?php echo(uniqid(md5(time()), mt_rand(1,1000))); ?>">
                                    <div class="form-group">
                                        <label class="form-control-label">Username</label>
                                        <input name="username" type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Password</label>
                                        <div class="pass-group">
                                            <input name="password" type="password" class="form-control pass-input">
                                            <span class="fas fa-eye toggle-password"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cb1">
                                                    <label class="custom-control-label" for="cb1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="col-6 text-end">
                                                <a class="forgot-link" href="auth-recoverpw">Forgot Password ?</a>
                                            </div>
                                        </div>
                                    </div>
                                        <button name="submit" class="btn btn-lg btn-block btn-primary w-100" type="submit">Login</button>
                                    <!--div class="login-or">
                                        <span class="or-line"></span>
                                        <span class="span-or">or</span>
                                    </div>

                                <div class="social-login">
                                    <span>Register with</span>
                                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
                                </div-->


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/feather.min.js"></script>
        <script src="js/index.js"></script>
    </body>
</html>