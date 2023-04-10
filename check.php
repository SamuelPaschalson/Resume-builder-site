<?php
session_start();
$_SESSION['id'] = $_GET['id'];
if (!isset($_SESSION['id'])) {
  header("location: login.php");
}
$id = $_SESSION['id'];
$ids = $_GET['ids'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>XENOK - Check</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Responsive Stylesheet -->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

</head>
<body class="light-version">

    <!-- ##### Navbar Area Start ##### -->
    <nav class="fixed-top">
        <input type="checkbox" name="check" id="check" />
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a class="nav-brand" href="" style="color: #e58411;"><img src="img/favicon.png" alt="logo"> XENOK.</a>
        <ul>
            <a href="http://" target="_blank" rel="noopener noreferrer"></a>
            <li><a href="index2">Home</a></li>
            <li><a href="about-us2">About Us</a></li>
            <li><a href="contact2">Contact Us</a></li>
        </ul>
    </nav>
    <!-- ##### Navbar Area End ##### -->
    <section class="section-info">
        <div class="contact-info-text">
            <div class="info-text">
                <h3 class="h4">Do you have another Work History and Details?</h3>
                <p>We suggest you add all your work details and histories.</p>
            </div>
            <div class="contact-info-body">
                <form class="" action="code.php" method="post">
                    <input type="hidden" name="id" value="<?php echo($id);?>">
                    <input type="hidden" name="ids" value="<?php echo($ids);?>">
                    <div class="form-group">
                        <label class="form-control-label" for="">Add New Work History And Details</label>
                        <select name="check1" class="form-control form-select" aria-label="Default select example">
                        <option selected>Select one Answer</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                        </select>
                    </div>
                    <div class="buttons">
                        <div class="nav-btns">
                            <a class="btn btn-outline-primary" href="work-details.php">BACK</a>
                        </div>
                        <div class="nav-btn">
                            <button name="check" class="btn btn-outline-warning" type="submit">NEXT: DETAILS</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>