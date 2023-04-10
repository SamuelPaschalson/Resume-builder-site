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
  <link rel="icon" href="img/favicon.png">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="RemixIcon-master/fonts/remixicon.css"/>
  <script src="js/index.js"></script>
    <title>Education - XenOK</title>
  </head>
  <body>
  <nav class="fixed-top">
            <input type="checkbox" name="check" id="check" />
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <a class="nav-brand" href="" style="color: #e58411;"><img src="img/favicon.png" alt="logo"> XENOK.</a>
        </nav>
    <header class="">
      <div class="heading-tag">
        <div class="heading-text">
          <form class="" action="code" method="post" accept-charset="utf-8">
            <input type="hidden" name="id" id="id" value="<?php echo ($_SESSION['id']); ?>" />
          <button name="edu-d" class="btn ri-arrow-left-line" type="submit"></button>
          </form>
          <h4 class="🤩">Education</h4>
          <div class="spinner-wrapper">
            <div class="spinner">
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle active"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
              </div>
          </div>
        </div>
      </div>
    </header>
    <section class="section-info">
      <div class="contact-info-text">
        <div class="info-text">
          <h3 class="h4">Your level of education?</h3>
          <p>We suggest you add all levels of education attained.</p>
        </div>
        <div class="contact-info-body">
          <form class="" action="code.php" method="post">
            <input type="hidden" name="id" value="<?php echo($id);?>">
            <div class="form-group">
              <label class="form-control-label" for="">Level of Education</label>
              <select name="ledu" class="form-control form-select" aria-label="Default select example">
                <option selected>Select one Degree</option>
                 <option value="High School Diploma">High School Diploma</option>
                 <option value="Bachelor's Degree">Bachelor's Degree</option>
                 <option value="Master's Degree">Master's Degree</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-control-label" for="">Name of School</label>
              <input type="text" name="nschool" class="form-control form-control-user" id="" placeholder="e.g. Charles Dale Memorial School" value="" />
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label class="form-control-label" for="">City</label>
                <input type="text" name="city" id="" class="form-control form-control-user" placeholder="e.g. Grand Parire" value="" />
              </div>
              <div class="col-sm-6">
                <label class="form-control-label" for="">State</label>
                <input type="text" name="state" id="" class="form-control" placeholder="e.g. Texas" value="" />
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label class="form-control-label" for="">Start Date</label>
                <input type="month" name="sdate" id="" class="form-control form-control-user" placeholder="e.g. USA" value="" />
              </div>
              <div class="col-sm-6">
                <label class="form-control-label" for="">End Date</label>
                <input type="month" name="edate" id="" class="form-control" placeholder="e.g. 1234" value="" />
              </div>
            </div>
            <div class="form-group">
              <label class="form-control-label" for="">Description</label>
              <textarea type="text" name="desc" class="form-control form-control-user" id="" placeholder="e.g. I was the senior prefect, during my time." value="" ></textarea>
            </div>
          <div class="buttons">
            <div class="nav-btns">
              <a class="btn btn-outline-primary" href="education.php">BACK</a>
            </div>
            <div class="nav-btn">
              <button name="edu1" class="btn btn-outline-warning" type="submit">NEXT:EDUCATION</button>
            </div>
          </div>
          </form>

        </div>
      </div>
    </section>
     <section class="section-info-small">
      <div class="contact-info-text-small">
        <div class="info-text-small">
          <h3 class="h4-small">What's your level of education?</h3>
          <p>We suggest you add all levels of education attained.</p>
        </div>
        <div class="contact-info-body-small">
          <form class="" action="code.php" method="post">
            <input type="hidden" name="id" value="<?php echo($id);?>">
            <div class="form-group">
              <label class="form-control-label" for="">Level of Education</label>
              <select name="ledu" class="form-control form-select" aria-label="Default select example">
                <option selected>Select one Degree</option>
                 <option value="High School Diploma">High School Diploma</option>
                 <option value="Bachelor's Degree">Bachelor's Degree</option>
                 <option value="Master's Degree">Master's Degree</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-control-label" for="">Name of School</label>
              <input type="text" name="nschool" class="form-control form-control-user" id="" placeholder="e.g. Charles Dale Memorial School" value="" />
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label class="form-control-label" for="">City</label>
                <input type="text" name="city" id="" class="form-control form-control-user" placeholder="e.g. Grand Parire" value="" />
              </div>
              <div class="col-sm-6">
                <label class="form-control-label" for="">State</label>
                <input type="text" name="state" id="" class="form-control" placeholder="e.g. Texas" value="" />
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label class="form-control-label" for="">Start Date</label>
                <input type="month" name="sdate" id="" class="form-control form-control-user" placeholder="e.g. USA" value="" />
              </div>
              <div class="col-sm-6">
                <label class="form-control-label" for="">End Date</label>
                <input type="month" name="edate" id="" class="form-control" placeholder="e.g. 1234" value="" />
              </div>
            </div>
            <div class="form-group">
              <label class="form-control-label" for="">Description</label>
              <textarea type="text" name="desc" class="form-control form-control-user" id="" placeholder="e.g. I was the senior prefect, during my time." value="" ></textarea>
            </div>
          <div class="buttons">
            <div class="nav-btn">
              <button name="edu1" class="btn btn-outline-warning" type="submit">NEXT: EDUCATION</button>
            </div>
          </div>
          </form>
        </div>
      </div>
     </section>
  </body>
</html>