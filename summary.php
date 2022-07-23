<?php
session_start();
$_SESSION['id'] = $_GET['id'];
if (!isset($_SESSION['id'])) {
  header("location: login.php");
}
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/contact.css" type="text/css" media="all" />
    
    <title>Summary - XenOK</title>
  </head>
  <body>
    <div class="container">
      <h2 class="row text-center">CHOOSE YOUR RESUME TEMPLATE</h2>
      <h5 class="text-center">Remember, you can always change your template later on.</h5>
      <div class="row temps">
        <div class="">
          <form class="" action="temp.php" method="post" accept-charset="utf-8">
            <input type="hidden" name="id" value="<?php echo($id);?>">
            <button name="temp1" class="btn" type="submit">
              <img class="" src="images/right-resume.png" alt="" />
            </button>
          </form>
        </div>
        <div class="temps mt-3">
          <form class="" action="temp.php" method="post" accept-charset="utf-8">
              <input type="hidden" name="id" value="<?php echo($id);?>">
            <button name="temp2" class="btn" type="submit">
              <img class="img-temp" src="images/creative-cv.png" alt="" />
            </button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>