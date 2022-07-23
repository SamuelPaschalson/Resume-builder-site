<?php
session_start();
$_SESSION['id'] = $_GET['id'];
if (!isset($_SESSION['id'])) {
  header("location: login");
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

    <title>Skills - XenOK</title>
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
          <button name="cert" class="btn ri-arrow-left-line" type="submit"></button>
          </form>
          <h4 class="🤩">Skills</h4>
          <div class="spinner-wrapper skill">
            <div class="spinner">
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle active"></i>
                <i class="fas fa-circle"></i>
              </div>
          </div>
        </div>
      </div>
    </header>
<!--div class="container">
  <span id="rateMe1"></span>
</div-->

    <section class="section-info">
      <div class="contact-info-text">
        <div class="info-text">
          <h3 class="h4">What skills would you like to highlight?</h3>
          <p>Employer's know your strength and weaknesses, helping them place you in a better position.</p>
        </div>
        <div class="contact-info-body">
          <form class="kkk" method="POST" action="skills_id.php">
            <div id="dynamic_field">
              <input type="hidden" name="id" value="<?php echo($id);?>">
              <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label class="form-control-label" for="">Percentage</label>
              <input type="tel" name="percent[]" class="form-control form-control-user" id="percent" placeholder="e.g. 80%" value="" />
                </div>
              <div class="col-sm-6">
                <label class="form-control-label" for="">Skill</label>
              <input type="text" name="name[]" class="form-control form-control-user" id="name" placeholder="e.g. Enter your Skill" value="" />
              </div>
            </div>
            </div>
          <p>*Note if you are trying to update your skills, first delete your skills then insert new skills, this is to help us serve you better.*</p>
          <div class="social-text">
            <div class="social" id="add" name="add">
              <i class="fas fa-plus"></i>
              <h5 class="h6">Add New Skill</h5>
            </div>
          </div>
          <div class="social-text text-left">
            <div class="social">
              <button type="submit" name="reset" class="btn btn-outline-danger h6">Delete Skills</button>
            </div>
          </div>
          <div class="buttons">
            <div class="nav-btns">
              <a class="btn btn-outline-primary" href="education.php">BACK</a>
            </div>
            <div class="nav-btn">
              <button name="submit" class="btn btn-outline-warning" type="submit">NEXT:SKILLS</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </section>
     <section class="section-info-small">
      <div class="contact-info-text-small">
        <div class="info-text-small">
          <h3 class="h4-small">Have any Skill?</h3>
          <p>This gives you an edge over others, employer's know your qualifications.</p>
        </div>
        <div class="contact-info-body-small">
          <form class="kkb" method="POST" action="skills_id.php">
            <div id="dynamic_fields">
              <input type="hidden" name="id" value="<?php echo($id);?>">
              <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label class="form-control-label" for="">Percentage</label>
              <input type="tel" name="percent[]" class="form-control form-control-user" id="percent" placeholder="e.g. 80%" value="" />
                </div>
              <div class="col-sm-6">
                <label class="form-control-label" for="">Skill</label>
              <input type="text" name="name[]" class="form-control form-control-user" id="name" placeholder="e.g. Enter your Skill" value="" />
              </div>
            </div>
            </div>
          <p>*Note if you are trying to update your skills, first delete your skills then insert new skills, this is to help us serve you better.*</p>
          <div class="social-text">
            <div class="social" id="adder" name="adder">
              <i class="fas fa-plus"></i>
              <h5 class="h6">Add New Skill</h5>
            </div>
          </div>
          <div class="social-text text-left">
            <div class="social">
              <button type="submit" name="reset" class="btn btn-outline-danger h6">Delete Skills</button>
            </div>
          </div>
          <div class="buttons">
            <div class="nav-btn">
              <button name="submit" class="btn btn-outline-warning" type="submit">NEXT: SUMMARY</button>
            </div>
          </div>
          </form>
        </div>
      </div>
     </section>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/theme.js"></script>
<script src="js/star-rating.js"></script>
<script>
  var i = 1;
  var s = 1;
  $('#add').click(function() {
    i++;
    s++;
    $('#dynamic_field').append('<div class="form-group row"><div class="col-sm-6 mb-3 mb-sm-0'+s+'"><label class="form-control-label" for="">Percentage</label><input type="tel" name="percent[]" class="form-control form-control-user" id="percent" placeholder="e.g. 80%" value="" /></div><div class="col-sm-6'+i+'"><label class="form-control-label" for="">Skill</label><input type="text" name="name[]" class="form-control form-control-user" id="name" placeholder="e.g. Enter your Skill" value="" /></div></div>');
  });
  $('.btn-outline-warning').click(function() {
    $('.kkk').serialize();
  });
  
  var p = 1;
  var q = 1;
  $('#adder').click(function() {
    p++;
    q++;
    $('#dynamic_fields').append('<div class="form-group row"><div class="col-sm-6 mb-3 mb-sm-0'+q+'"><label class="form-control-label" for="">Percentage</label><input type="tel" name="percent[]" class="form-control form-control-user" id="percent" placeholder="e.g. 80%" value="" /></div><div class="col-sm-6'+p+'"><label class="form-control-label" for="">Skill</label><input type="text" name="name[]" class="form-control form-control-user" id="name" placeholder="e.g. Enter your Skill" value="" /></div></div>');
  });
  $('.btn-outline-warning').click(function() {
    $('.kkb').serialize();
  });
</script>
  </body>
</html>