<?php
session_start();
$_SESSION['id'] = $_GET['id'];
if (!isset($_SESSION['id'])) {
  header("location: index");
}
$id = $_SESSION['id'];
$ids = $_GET['ids'];
//$row['unique_id'] = $_SESSION['id'];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="RemixIcon-master/fonts/remixicon.css"/>
  <script src="js/index.js"></script>
  <link rel="icon" href="img/favicon.png">
 
    <title>Work History - XenOK</title>
  </head>
  <body>
  <nav class="fixed-top">
            <input type="checkbox" name="check" id="check" />
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <a class="nav-brand" style="color: #e58411;text-decoration: none;cursor: pointer;"><img src="img/favicon.png" alt="logo"> XENOK.</a>
            <ul>
              <li><a target="_blank" rel="noopener noreferrer">Heading</a></li>
              <li><a target="_blank" rel="noopener noreferrer">Heading</a></li>
              <li><a target="_blank" rel="noopener noreferrer">Heading</a></li>
              <li><a target="_blank" rel="noopener noreferrer">Heading</a></li>
            </ul>
        </nav>
    <section class="section-info">
      <div class="contact-info-text">
        <div class="info-text">
          <h3 class="h4">Tell us about your most recent jobs.</h3>
          <p>We will start there and work backwards.</p>
        </div>
        <div class="contact-info-body work">
          <form method="post" action="code.php" >
            <input type="hidden" name="id" value="<?php echo($id);?>">
            <input type="hidden" name="ids" value="<?php echo($ids);?>">
            <div id="dynamic_field">
              <div class="form-group">
              <label class="form-control-label" for="">Company Name</label>
              <input type="text" name="company" class="form-control sam form-control-user" id="job-t" placeholder="e.g. Amazon" value="" />
            </div>
              <div class="form-group">
              <label class="form-control-label" for="">Position</label>
              <input type="text" name="position" class="form-control form-control-user" id="" placeholder="e.g. Consultant" value="" />
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
                <input pattern="Month-yyyy" type="month" name="sdate" id="" class="form-control form-control-user" placeholder="e.g. 06-02-2020" value="" />
              </div>
              <div class="col-sm-6">
                <label class="form-control-label" for="">End Date</label>
                <input pattern="mm yyyy"  type="month" name="edate" id="" class="form-control" placeholder="e.g. 08-07-2022" value="" />
              </div>
            </div>
              <div class="form-group">
                      <div class="small">
                        <input type="checkbox" value="Current" name="current" class="small-input" id="customCheck">
                 <label class="form-control-label mr-4" for="customCheck">Present</label>
                      </div>
                    </div>
            </div>
          <div class="buttons">
            <div class="nav-btns">
              <a class="btn btn-outline-primary" href="contact-info.php?id=<?php echo $id; ?>">BACK</a>
            </div>
            <div class="nav-btn">
              <button id="submit" name="workh" class="btn btn-outline-warning" type="submit">NEXT:ADD WORK DETAILS</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </section>
    <section class="section-info-small">
      <div class="contact-info-text-small">
        <div class="info-text-small">
          <h3 class="h4-small">Tell us about your most recent jobs.</h3>
          <p>We will start there and work backwards.</p>
        </div>
        <div class="contact-info-bod-small">
          <form method="post" action="code.php" >
            <input type="hidden" name="id" value="<?php echo($id);?>">
            <input type="hidden" name="ids" value="<?php echo($ids);?>">
            <div id="dynamic_field">
              <div class="form-group">
              <label class="form-control-label" for="">Company Name</label>
              <input type="text" name="company" class="form-control sam form-control-user" id="job-t" placeholder="e.g. Amazon" value="" />
            </div>
              <div class="form-group">
              <label class="form-control-label" for="">Position</label>
              <input type="text" name="position" class="form-control form-control-user" id="" placeholder="e.g. Consultant" value="" />
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
                <input pattern="Month-yyyy" type="month" name="sdate" id="" class="form-control form-control-user" placeholder="e.g. 06-02-2020" value="" />
              </div>
              <div class="col-sm-6">
                <label class="form-control-label" for="">End Date</label>
                <input pattern="mm yyyy"  type="month" name="edate" id="" class="form-control" placeholder="e.g. 08-07-2022" value="" />
              </div>
            </div>
              <div class="form-group">
                      <div class="small">
                        <input type="checkbox" value="Current" name="current" class="small-input" id="customCheck">
                 <label class="form-control-label mr-4" for="customCheck">Present</label>
                      </div>
                    </div>
            </div>
          <div class="buttons">
            <div class="nav-btn">
              <button id="submit" name="workh" class="btn btn-outline-warning" type="submit">NEXT:ADD WORK DETAILS</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>