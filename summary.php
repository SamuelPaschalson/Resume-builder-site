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
    <link rel="icon" href="img/favicon.png">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all" /> -->
    <link rel="stylesheet" href="css/index.css" type="text/css" media="all" />
    
    <title>Summary - XenOK</title>
  </head>
  <body class="light-version">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
        <nav class="fixed-top">
            <input type="checkbox" name="check" id="check" />
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <a class="nav-brand" href="" style="color: #e58411;"><img src="img/favicon.png" alt="logo"> XENOK.</a>
            <ul>
                <li><a href="index2">Home</a></li>
                <li><a href="about-us2">About Us</a></li>
                <li><a href="contact">Contact Us</a></li>
            </ul>
        </nav>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Welcome Area Start ##### -->
    <div class="breadcumb-area clearfix">
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <header aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title">Our Templates</h2>
                        </header>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Area End ##### -->

    <section class="demo section-padding-100-0">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="bold">Our Creative Templates</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="demo-item">
                    <?php $ids = 'demo1'.uniqid(md5(time()), mt_rand(1,1000));?>
                        <a href="templates/1/?id=<?php echo $id;?>"><img src="img/demo1.png" alt="demo" class="img-responsive"></a>
                        <div class="preview-btn-wrapper text-center">
                            <a href="templates/1/?id=<?php echo $id;?>" class="preview-demo v2">Use template <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="demo-item">
                        <a href="templates/2/?id=<?php echo $id;?>"><img src="img/demo2.png" alt="demo" class="img-responsive"></a>
                        <div class="preview-btn-wrapper text-center">
                            <a href="templates/2/?id=<?php echo $id;?>" class="preview-demo v2">Use template <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="demo-item">
                        <a href="templates/3/?id=<?php echo $id;?>"><img src="img/demo3.png" alt="demo" class="img-responsive"></a>
                        <div class="preview-btn-wrapper text-center">
                            <a href="templates/3/?id=<?php echo $id;?>" class="preview-demo v2">Use template <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="demo-item">
                        <a href="templates/4/?id=<?php echo $id;?>"><img src="img/demo4.png" alt="demo" class="img-responsive"></a>
                        <div class="preview-btn-wrapper text-center">
                            <a href="templates/4/?id=<?php echo $id;?>" class="preview-demo v2">Use template <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="demo-item">
                        <a href="templates/5/?id=<?php echo $id;?>"><img src="img/demo5.png" alt="demo" class="img-responsive"></a>
                        <div class="preview-btn-wrapper text-center">
                            <a href="templates/5/?id=<?php echo $id;?>" class="preview-demo v2">Use template <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="demo-item">
                        <a href="templates/5/?id=<?php echo $id;?>"><img src="img/demo6.png" alt="demo" class="img-responsive"></a>
                        <div class="preview-btn-wrapper text-center">
                            <a href="templates/5/?id=<?php echo $id;?>" class="preview-demo v2">Use template <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img">

        <div class="footer-content-area spec">
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-lg-4 col-md-6">
                        <div class="footer-copywrite-info">
                            <!-- Copywrite -->
                            <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                                <div class="footer-logo">
                                    <a href="" style="color: #e58411;"><img src="img/favicon.png" alt="logo"> XENOK. </a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ducimus voluptatibus neque illo id repellat quisquam? Autem expedita earum quae laborum ipsum ad.</p>
                            </div>
                            <!-- Social Icon -->
                            <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                                <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fab fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                                <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">
                                <h5>PRIVACY & TOS</h5>
                                <a href=""><p>Advertiser Agreement</p></a>
                                <a href=""><p>Acceptable Use Policy</p></a>
                                <a href=""><p>Privacy Policy</p></a>
                                <a href=""><p>Technology Privacy</p></a>
                                <a href=""><p>Developer Agreement</p></a>
                            </div>
                        </div>
                    </div>
                      
                    <div class="col-12 col-lg-2 col-md-6 ">
                        <!-- Content Info -->
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                                <h5>NAVIGATE</h5>
                                <a href=""><p>Advertisers</p></a>
                                <a href=""><p>Developers</p></a>
                                <a href=""><p>Resources</p></a>
                                <a href=""><p>Company</p></a>
                                <a href=""><p>Connect</p></a>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-12 col-lg-3 col-md-6 ">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                                <h5>CONTACT US</h5>
                                <p>Mailing Address:xx00 E. Union Ave</p>
                                <p>Suite 1100. Denver, CO 80237</p>
                                <p>+999 90932 627</p>
                                <p>support@yourdomain.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Parallax js -->
    <script src="js/dzsparallaxer.js"></script>
    <!-- Active js -->
    <script src="js/script.js"></script>

</body>


</html>