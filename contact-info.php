<?php
session_start();
$_SESSION['id'] = $_GET['id'];
if (!isset($_SESSION['id'])) {
  header("location: login.php");
}
$id = $_SESSION['id'];
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
  
  <script src="js/index.js"></script>
    <title>Contact Info - XenOK</title>
  </head>
  <body>
    <nav class="fixed-top">
      <label class="logo"><a class="navbar-brand" href=" ">Xen<b>OK</b></a></label>
      <ul>
        <li class="num-active"><h6>1 <i class="ri-record-circle-line num-1"></i>Contact-info</h6>
        </li>

        <li class="">Heading</li>
        <li class="num">7</li>
        <li class="">Heading</li>
      </ul>
    </nav>
    <header class="">
      <div class="heading-tag">
        <div class="heading-text">
          <a href="login.php"><i class="ri-arrow-left-line"></i></a>
          <h4 class="🤩">Contact Info</h4>
          <div class="spinner-wrapper">
            <div class="spinner">
                <i class="fas fa-circle active"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
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
          <h3 class="h4">What's the best way employer's can contact you?</h3>
          <p>We suggest you add a working email and phone number.</p>
        </div>
        <div class="contact-info-body">
          <form enctype="multipart/form-data" class="" action="code.php" method="post">
            <input type="hidden" name="id" value="<?php echo($id);?>">
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label class="form-control-label" for="">FirstName</label>
                <input type="text" name="fname" id="" class="form-control form-control-user" placeholder="e.g. John" value="" />
              </div>
              <div class="col-sm-6">
                <label class="form-control-label" for="">LastName</label>
                <input type="text" name="lname" id="" class="form-control" placeholder="e.g. Doe" value="" />
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label class="form-control-label" for="">Age</label>
                <input type="text" name="age" id="" class="form-control form-control-user" placeholder="e.g. Age" value="" />
              </div>
            </div>
            <div class="form-group">
              <label class="form-control-label" for="">Profession</label>
              <input type="text" name="profession" class="form-control form-control-user" id="" placeholder="e.g. Consultant" value="" />
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
                <label class="form-control-label" for="">Country</label>
                <input type="text" name="country" id="" class="form-control form-control-user" placeholder="e.g. USA" value="" />
              </div>
              <div class="col-sm-6">
                <label class="form-control-label" for="">Postal Code</label>
                <input type="text" name="postal" id="" class="form-control" placeholder="e.g. 1234" value="" />
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label class="form-control-label" for="">Phone</label>
                <input type="text" name="phone" id="" class="form-control form-control-user" placeholder="e.g. +12 34 567 8901" value="" />
              </div>
              <div class="col-sm-6">
                <label class="form-control-label" for="">Email</label>
                <input type="text" name="email" id="" class="form-control" placeholder="e.g. abc@abc.com" value="" />
              </div>
            </div>
            <div class="form-group">
              <label class="form-control-label" for="">Profile Image</label>
              <input onchange="return Checkfiles();" type="file" id="filename" name="image" class="form-control form-control-user" value="" />
            </div>
              <div class="social-icons">
              <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0 facebook">
              <label class="form-control-label" for=""><i class="fab fa-facebook"></i></label>
              <input type="text" name="facebook" class="form-control form-control-user" id="" placeholder="e.g. John Doe" value="" />
            </div>
              <div class="col-sm-6 facebook">
              <label class="form-control-label" for=""><i class="fab fa-instagram"></i></label>
              <input type="text" name="instagram" class="form-control form-control-user" id="" placeholder="e.g. @John_Doe" value="" />
            </div>
            </div>
              <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0 facebook">
              <label class="form-control-label" for=""><i class="fab fa-github"></i></label>
              <input type="text" name="github" class="form-control form-control-user" id="" placeholder="e.g. github/JohnDoe" value="" />
            </div>
              <div class="col-sm-6 facebook">
              <label class="form-control-label" for=""><i class="fab fa-linkedin"></i></label>
              <input type="text" name="linkedin" class="form-control form-control-user" id="" placeholder="e.g. John Doe" value="" />
              </div>
              </div>
            
            </div>
          <div class="social-text">
            <div class="social">
              <i class="fas fa-plus"></i>
              <h5 class="h6" onclick="loadSocial()">Add Social Icons</h5>
            </div>
            <script type="text/javascript" charset="utf-8">
function Checkfiles()
    {
        var fup = document.getElementById('filename');
        var fileName = fup.value;
        var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

    if(ext =="jpg" || ext=="png" || ext == "jpeg")
    {
    //    alert("Upload successful");
        return true;
    }
    else
    {
       // alert("Upload Images only");
        fileName = '';
        return false;
    }
    }
    
              function loadSocial(){
                var elements = document.getElementsByClassName("facebook");
      
      // let's access each selected element
      for(let i = 0; i < elements.length; i++) {
         // let's style each selected element
         elements[i].style.display = "block";
        // elements[i].style.color = "green";
      }
var data = document.getElementsByClassName("h6");
      for(let i = 0; i < data.length; i++) {
         // let's style each selected element
         data[i].style.display = "none";
        // elements[i].style.color = "green";
      }
              }
            </script>
          </div>
          <div class="buttons">
            <div class="nav-btns">
              <a class="btn btn-outline-primary" href="login.php">BACK</a>
            </div>
            <div class="nav-btn">
              <button name="work_next" class="btn btn-outline-warning" type="submit">NEXT:WORK HISTORY</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </section>
     <section class="section-info-small">
      <div class="contact-info-text-small">
        <div class="info-text-small">
          <h3 class="h4-small">What's the best way employer's can contact you?</h3>
          <p>We suggest you add a working email and phone number.</p>
        </div>
        <div class="contact-info-body-small">
          <form enctype="multipart/form-data" class="" action="code.php" method="post">
            <input type="hidden" name="id" value="<?php echo($id);?>">
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label class="form-control-label" for="">FirstName</label>
                <input type="text" name="fname" id="" class="form-control form-control-user" placeholder="e.g. John" value="" />
              </div>
              <div class="col-sm-6">
                <label class="form-control-label" for="">LastName</label>
                <input type="text" name="lname" id="" class="form-control" placeholder="e.g. Doe" value="" />
              </div>
            </div>
            <div class="form-group">
              <label class="form-control-label" for="">Age</label>
              <input type="tel" name="age" class="form-control form-control-user" id="" placeholder="e.g. Age" value="" />
            </div>
            <div class="form-group">
              <label class="form-control-label" for="">Profession</label>
              <input type="text" name="profession" class="form-control form-control-user" id="" placeholder="e.g. Consultant" value="" />
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
                <label class="form-control-label" for="">Country</label>
                <input type="text" name="country" id="" class="form-control form-control-user" placeholder="e.g. USA" value="" />
              </div>
              <div class="col-sm-6">
                <label class="form-control-label" for="">Postal Code</label>
                <input type="text" name="postal" id="" class="form-control" placeholder="e.g. 1234" value="" />
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label class="form-control-label" for="">Phone</label>
                <input type="text" name="phone" id="" class="form-control form-control-user" placeholder="e.g. +12 34 567 8901" value="" />
              </div>
              <div class="col-sm-6">
                <label class="form-control-label" for="">Email</label>
                <input type="email" name="email" id="" class="form-control" placeholder="e.g. abc@abc.com" value="" />
              </div>
            </div>
            <div class="form-group">
              <label class="form-control-label" for="">Profile Image</label>
              <input onchange="return Checkfile();" type="file" id="filenames" name="image" class="form-control form-control-user" />
            </div>
            <div class="social-icons">
              <div class="form-group facebook">
              <label class="form-control-label" for=""><i class="fab fa-facebook"></i></label>
              <input type="text" name="facebook" class="form-control form-control-user" id="" placeholder="e.g. John Doe" value="" />
            </div>
              <div class="form-group facebook">
              <label class="form-control-label" for=""><i class="fab fa-instagram"></i></label>
              <input type="text" name="instagram" class="form-control form-control-user" id="" placeholder="e.g. @John_Doe" value="" />
            </div>
              <div class="form-group facebook">
              <label class="form-control-label" for=""><i class="fab fa-github"></i></label>
              <input type="text" name="github" class="form-control form-control-user" id="" placeholder="e.g. github/JohnDoe" value="" />
            </div>
              <div class="form-group facebook">
              <label class="form-control-label" for=""><i class="fab fa-linkedin"></i></label>
              <input type="text" name="linkedin" class="form-control form-control-user" id="" placeholder="e.g. John Doe" value="" />
            
              </div>

            </div>
          <div class="social-text">
            <div class="social">
              <i class="fas fa-plus"></i>
              <h5 class="h6" onclick="loadSocial()">Add Social Icons</h5>
            </div>
          </div>
          <div class="buttons">
            <div class="nav-btn">
              <button name="work_next" class="btn btn-outline-warning" type="submit">NEXT:WORK HISTORY</button>
            </div>
          </div>
          </form>
        </div>
      </div>
     </section>
            <script type="text/javascript" charset="utf-8">
function Checkfile()
    {
        var fups = document.getElementById('filenames');
        var fileNames = fups.value;
        var exts = fileNames.substring(fileNames.lastIndexOf('.') + 1);

    if(exts =="jpg" || exts == "png" || exts == "jpeg")
    {
      //  alert("Upload successful");
        return true;
    }
    else
    {
        alert("Upload Images only");
        fups.value = '';
        return false;
    }
    }
    
              function loadSocial(){
                var elements = document.getElementsByClassName("facebook");
      
      // let's access each selected element
      for(let i = 0; i < elements.length; i++) {
         // let's style each selected element
         elements[i].style.display = "block";
        // elements[i].style.color = "green";
      }
var data = document.getElementsByClassName("social");
      for(let i = 0; i < data.length; i++) {
         // let's style each selected element
         data[i].style.display = "none";
        // elements[i].style.color = "green";
      }
              }
            </script>
   
  </body>
</html>