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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="RemixIcon-master/fonts/remixicon.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/theme.css">
<link rel="stylesheet" href="css/star-rating.css">

<link rel="stylesheet" href="css/style.css">

    <title>Summary - XenOK</title>
  </head>
 <body>
    <nav class="fixed-top">
      <label class="logo"><a class="navbar-brand" href=" ">Xen<b>OK</b></a></label>
      <ul>
        <li class="num">1</li>
        <li class="">Heading</li>
        <li class="num">2</li>
        <li class="">Heading</li>
      </ul>
    </nav>
    <header class="">
      <div class="heading-tag">
        <div class="heading-text">
          <form class="" action="code" method="post" accept-charset="utf-8">
            <input type="hidden" name="id" id="id" value="<?php echo ($_SESSION['id']); ?>" />
          <button name="skills" class="btn ri-arrow-left-line" type="submit"></button>
          </form>
          <h4 class="🤩">About</h4>
          <div class="spinner-wrapper">
            <div class="spinner">
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle active"></i>
              </div>
          </div>
        </div>
      </div>
    </header>
    <section class="section-info">
      <div class="contact-info-text">
        <div class="info-text">
          <h3 class="h4">Tell us about yourself?</h3>
          <p>We suggest you add all levels of education attained.</p>
        </div>
        <div class="contact-info-body">
          <form class="" action="code.php" method="post">
            <input type="hidden" name="id" value="<?php echo($id);?>">
            <div class="form-group">
              <label class="form-control-label" for="">About Yourself</label>
              <textarea type="text" name="desc" class="form-control form-control-user" id="" placeholder="e.g. I was the senior prefect, during my time." value="" ></textarea>
            </div>
          <div class="buttons">
            <div class="nav-btns">
              <a class="btn btn-outline-primary" href="work-details.php">BACK</a>
            </div>
            <div class="nav-btn">
              <button name="temp" class="btn btn-outline-warning" type="submit">NEXT: TEMPLATES</button>
            </div>
          </div>
          </form>

        </div>
      </div>
    </section>
     <section class="section-info-small">
      <div class="contact-info-text-small">
        <div class="info-text-small">
          <h3 class="h4-small">Tell us about yourself?</h3>
          <p>We suggest you be concise and straight to the point.</p>
        </div>
        <div class="contact-info-body-small">
          <form class="" action="code.php" method="post">
            <input type="hidden" name="id" value="<?php echo($id);?>">
            <div class="form-group">
              <label class="form-control-label" for="">About Yourself</label>
              <textarea type="text" name="desc" class="form-control form-control-user" id="" placeholder="e.g. I was the senior prefect, during my time." value="" ></textarea>
            </div>
          <div class="buttons">
            <div class="nav-btn">
              <button name="temp" class="btn btn-outline-warning" type="submit">NEXT: TEMPLATES</button>
            </div>
          </div>
          </form>
        </div>
      </div>
     </section>
  </body>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>

</html>