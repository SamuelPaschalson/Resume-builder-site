<?php
$id = $_GET['template_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>XENOK - Resume Builder</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body class="light-version">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area fadeInDown" data-wow-delay="0.2s">
        <div class="classy-nav-container light breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar light justify-content-between" id="dreamNav">

                    <!-- Logo -->
                    <a class="nav-brand light" style="color: #e58411;" href="#"><img src="img/favicon.png" alt="logo"> XENOK </a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler demo">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>

                            <!-- Button -->
                            <img src="img/logo.png" class="mr-im" style="margin-left: 70px;width: 50px;height: 50px;cursor: pointer;" alt="">
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Welcome Area Start ##### -->
    <div class="breadcumb-area clearfix dzsparallaxer auto-init" data-options='{direction: "normal"}'>
        <div class="divimage dzsparallaxer--target" style="width: 101%; height: 130%; background-image: url(img/bg-2.jpg)"></div>
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">Template Preview</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="templates?template_id=<?php echo $id;?>">Templates</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Template Preview</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area section-padding-100-0">
        <div class="container">

            <div class="row">
                <div class="col-12 col-md-8">
                    <div >
                        <!-- Post Thumbnail -->
                        <?php
                            $output = "";
                            if($id == 'demo1b5639b25669af9cec79358f6cda2f1d6641b5bf5eeb5e8.33385816')
                            {
                                $output .= '<div class="blog_thumbnail">
                                    <img src="img/demo1.png" class="temp-img" alt="">
                                </div>';
                            } else if($id == 'demo2b5639b25669af9cec79358f6cda2f1d6641b5bf5eeb5e8.33385816')
                            {
                                $output .= '<div class="blog_thumbnail">
                                    <img src="img/demo2.png" class="temp-img" alt="">
                                </div>';
                            } else if($_GET['template_id'] == 'demo3b5639b25669af9cec79358f6cda2f1d6641b5bf5eeb5e8.33385816')
                            {
                                $output .= '<div class="blog_thumbnail">
                                    <img src="img/demo3.png" class="temp-img" alt="">
                                </div>';
                            } else if($_GET['template_id'] == 'demo4b5639b25669af9cec79358f6cda2f1d6641b5bf5eeb5e8.33385816')
                            {
                                $output .= '<div class="blog_thumbnail">
                                    <img src="img/demo2.png" class="temp-img" alt="">
                                </div>';
                            } else if($_GET['template_id'] == 'demo5b5639b25669af9cec79358f6cda2f1d6641b5bf5eeb5e8.33385816')
                            {
                                $output .= '<div class="blog_thumbnail">
                                    <img src="img/demo3.png" class="temp-img" alt="">
                                </div>';
                            }
                            else if($_GET['template_id'] == 'demo6b5639b25669af9cec79358f6cda2f1d6641b5bf5eeb5e8.33385816')
                            {
                                $output .= '<div class="blog_thumbnail">
                                    <img src="img/demo3.png" class="temp-img" alt="">
                                </div>';
                            }
                            echo $output;
                        ?>
                    </div>

                </div>

                <div class="col-12 col-md-4">
                    <div class="sidebar-area">
                        <div class="temp-summary">
                            <p>Lorem ipsum dolor sit amet, elit, sed do eiusmod
                            tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                            <a class="btn dream-btn width-100" href="edit?template_id=<?php echo $_GET['template_id'];?>">Try This Template</a>
                        </div>   
                        

                        <!-- Subscribe Widget -->
                        <div class="subscribe-widget mt-50">
                            <div class="widget-title">
                                <h5>subscribe</h5>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="email" name="email" id="subs_email" placeholder="Your Email">
                                    <button type="submit" class="btn">subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->

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