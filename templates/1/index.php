<?php
session_start();
$_SESSION['id'] = $_GET['id'];
if (!isset($_SESSION['id'])) {
  header("location: ../../index");
}

$id = $_GET['id'];
$contact = file_get_contents('../../contactdata.json');
$contact_data = json_decode($contact,true);
$social = file_get_contents('../../social.json');
$social_data = json_decode($social,true);
$workh = file_get_contents('../../workhistory.json');
$workh_data = json_decode($workh,true);
$workd = file_get_contents('../../workdetails.json');
$workd_data= json_decode($workd,true);
$edu = file_get_contents('../../edudata.json');
$edu_data= json_decode($edu,true);
$cert = file_get_contents('../../cert.json');
$cert_data= json_decode($cert,true);
$skill = file_get_contents('../../skill.json');
$skill_data= json_decode($skill,true);
$about = file_get_contents('../../about.json');
$about_data= json_decode($about,true);

$flag = false;
$flag1 = false;
$flag2 = false;
$flag3 = false;
$flag4 = false;
$flag5 = false;
$flag6 = false;
$flag7 = false;
$flag8 = false;
$flag9 = false;
$flag10 = false;
// $flage3 = false;
// $flage4 = false;
// $flage5 = false;
// $flage6 = false;
// $flage7 = false;
// $flage8 = false;
// $flage9 = false;
// $flage10 = false;

foreach ($contact_data as $key => $value )
  {
    if ($value['id'] == $id) 
      {

                $flag = true;
                break;
            }
        }
        foreach ($social_data as $key1 => $value1 )
        {
          if ($value1['id'] == $id) 
            {
      
                      $flag1 = true;
                      break;
                  }
              }
if ($flag || $flag1) {


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template 1</title>
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" media="all" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" media="all">
    <!-- <link rel="stylesheet" href="css/main.css"> -->
</head>
<body>
    <div class="page-content">
        <a class="d-print-none" href="" onclick="myprint()">Download CV</a>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="page-container">
                        <div class="page-left">
                            <div class="one">
                                <h2 class="info"><?php print_r($value['firstname']); print_r(" "); print_r($value['lastname']);?></h2>
                                <p class="info"><?php print_r($value['profession']);?></p>
                            </div>
                            <div class="two">
                                <h2 class="info active">Personal Info</h2>
                                <h4 class="info">Address</h4>
                                <h6 class="info">135 RightWard Way <br> Portland MCC. 123456</h6>
                                <h4 class="info">Phone</h4>
                                <h6 class="info">+<?php print_r($value['phone']);?></h6>
                                <h4 class="info">E-mail</h4>
                                <h6 class="info"><?php print_r($value['email']);?></h6>
                                <h4 class="info">LinkedIn</h4>
                                <h6 class="info"><?php print_r($value1['linkedin']);?></h6>
                                <h4 class="info">Github</h4>
                                <h6 class="info"><?php print_r($value1['github']);?></h6>
                                <h4 class="info">FaceBook</h4>
                                <h6 class="info"><?php print_r($value1['facebook']);?></h6>
                                <h4 class="info">Instagram</h4>
                                <h6 class="info"><?php print_r($value1['instagram']);?></h6>
                            </div>
                            <?php
                        }

                            ?>
                            <div class="three">
                                <h2 class="info active">Skills</h2>
                                <h6 class="info">Business Implementation</h6>
                                <h6 class="info">Business Implementation</h6>
                                <h6 class="info">Business Implementation</h6>
                                <h6 class="info">Sales Analysis</h6>
                                <h6 class="info">Sales Analysis</h6>
                                <h6 class="info">Sales Analysis</h6>
                            </div>
                            <?php
                                                     foreach ($skill_data as $key2 => $value2 )
                                                     {
                                                       if ($value2['id'] == $id) 
                                                         {
                                                   
                                                                   $flag2 = true;
                                                                   break;
                                                               }
                                                           }
                                             if ($flag2) {
                                             
                            ?>
                            <div class="three-five">
                                <h2 class="info active">Software</h2>
                                <div class="four">
                                    <span class="info"><?php print_r($value2['name']);?></span>
                                    <div class="progress my-1">
                                        <div class="progress-bar bg-light" role="progressbar" style="width: <?php print_r($value2['percent']);?>%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="right-sm">Excellent</span>
                                </div>
                                <div class="four">
                                    <span class="info">HTML</span>
                                    <div class="progress my-1">
                                        <div class="progress-bar bg-light" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="right-sm">Excellent</span>
                                </div>
                                <div class="four">
                                    <span class="info">HTML</span>
                                    <div class="progress my-1">
                                        <div class="progress-bar bg-light" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="right-sm">Excellent</span>
                                </div>
                                <div class="four">
                                    <span class="info">HTML</span>
                                    <div class="progress my-1">
                                        <div class="progress-bar bg-light" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="right-sm">Excellent</span>
                                </div>
                            </div>
                            <?php
                                    }
                            ?>
                            <div class="five">
                                <h2 class="info active">Languages</h2>
                                <div class="four">
                                    <span class="info">English</span>
                                    <div class="progress my-1">
                                        <div class="progress-bar bg-light" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="right-sm">Excellent</span>
                                </div>
                                <div class="four">
                                    <span class="info">HTML</span>
                                    <div class="progress my-1">
                                        <div class="progress-bar bg-light" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="right-sm">Excellent</span>
                                </div>
                            </div>
                        </div>
                        <div class="page-right">
                            <div class="top">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque eaque inventore assumenda dolores id, odio sapiente quis sint aliquam quisquam. Eum quasi numquam doloremque consequuntur iusto, cum obcaecati aliquam consequatur.</p>
                            </div>
                            <div class="t-one">
                                <div class="one">
                                    <h2 class="info active">Experience</h2>
                                    <div class="div-one">
                                        <div class="one-left">
                                            <h6 class="infos">2006-12 - Present</h6>
                                        </div>
                                        <div class="one-right">
                                            <h4 class="main">Senior Project Manager</h4>
                                            <p>SEON Hospital, ME</p>
                                            <div>
                                                <ul>
                                                    <li>This is it szjd ucxjcb scx sux sugx usx jxuh ughd</li>
                                                    <li>This is it szjd ucxjcb scx sux sugx usx jxuh ughd</li>
                                                    <li>This is it szjd ucxjcb scx sux sugx usx jxuh ughd</li>
                                                    <li>This is it szjd ucxjcb scx sux sugx usx jxuh ughd</li>
                                                    <li>This is it szjd ucxjcb scx sux sugx usx jxuh ughd</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div-one">
                                        <div class="one-left">
                                            <h6 class="infos">2006-12 - Present</h6>
                                        </div>
                                        <div class="one-right">
                                            <h4 class="main">Senior Project Manager</h4>
                                            <p>SEON Hospital, ME</p>
                                            <div>
                                                <ul>
                                                    <li>This is it szjd ucxjcb scx sux sugx usx jxuh ughd</li>
                                                    <li>This is it szjd ucxjcb scx sux sugx usx jxuh ughd</li>
                                                    <li>This is it szjd ucxjcb scx sux sugx usx jxuh ughd</li>
                                                    <li>This is it szjd ucxjcb scx sux sugx usx jxuh ughd</li>
                                                    <li>This is it szjd ucxjcb scx sux sugx usx jxuh ughd</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div-one">
                                        <div class="one-left">
                                            <h6 class="infos">2006-12 - Present</h6>
                                        </div>
                                        <div class="one-right">
                                            <h4 class="main">Senior Project Manager</h4>
                                            <p>SEON Hospital, ME</p>
                                            <div>
                                                <ul>
                                                    <li>This is it szjd ucxjcb scx sux sugx usx jxuh ughd</li>
                                                    <li>This is it szjd ucxjcb scx sux sugx usx jxuh ughd</li>
                                                    <li>This is it szjd ucxjcb scx sux sugx usx jxuh ughd</li>
                                                    <li>This is it szjd ucxjcb scx sux sugx usx jxuh ughd</li>
                                                    <li>This is it szjd ucxjcb scx sux sugx usx jxuh ughd</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="t-two">
                                <div class="one">
                                    <h2 class="info active">Eduaction</h2>
                                    <div class="div-one">
                                        <div class="one-left">
                                            <h6 class="infos">2006-12 - Present</h6>
                                        </div>
                                        <div class="one-right">
                                            <h4 class="main">Senior Project Manager</h4>
                                            <p>SEON Hospital, ME</p>
                                            <div>
                                                <ul>
                                                    <li>This is it szjd ucxjcb scx sux sugx usx jxuh ughd</li>
                                                    <li>This is it szjd ucxjcb scx sux sugx usx jxuh ughd</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div-one">
                                        <div class="one-left">
                                            <h6 class="infos">2006-12 - Present</h6>
                                        </div>
                                        <div class="one-right">
                                            <h4 class="main">Senior Project Manager</h4>
                                            <p>SEON Hospital, ME</p>
                                            <div>
                                                <ul>
                                                    <li>This is it szjd ucxjcb scx sux sugx usx jxuh ughd</li>
                                                    <li>This is it szjd ucxjcb scx sux sugx usx jxuh ughd</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="one">
                                <h2 class="info active">Certifications</h2>
                                <div class="div-one">
                                    <div class="one-left">
                                        <h6 class="infos">2006-12</h6>
                                    </div>
                                    <div class="one-right">
                                        <h5 class="main">Senior Project Manager</h5>
                                    </div>
                                </div>
                                <div class="div-one">
                                    <div class="one-left">
                                        <h6 class="infos">2006-12</h6>
                                    </div>
                                    <div class="one-right">
                                        <h5 class="main">Senior Project Manager</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" charset="utf-8" src="js/main.js"></script>
</body>
</html>