<?php
session_start();
$_SESSION['id'] = $_GET['id'];
if (!isset($_SESSION['id'])) {
  header("location: ../../login.php?id=$id");
}
$id = $_GET['id'];
$contact = file_get_contents('../../contactdata.json');
$contact_data = json_decode($contact,true);
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
$flags = false;
$flags1 = false;
$flags2 = false;
$flags3 = false;
$flags4 = false;
$flags5 = false;
$flage = false;
$flage1 = false;
$flage2 = false;
$flage3 = false;
$flage4 = false;
$flage5 = false;
$flage6 = false;
$flage7 = false;
$flage8 = false;
$flage9 = false;
$flage10 = false;

foreach ($contact_data as $key => $value )
  {
    if ($value['id'] == $id) 
      {

                $flag = true;
                break;
            }
        }

if ($flag) {

//  print_r($value['firstname']);

?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Right Resume</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    </noscript>
    <link media="all" href="css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link media="all" href="css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="css/aos.css?ver=1.2.0" rel="stylesheet">
    <link href="css/main.css?ver=1.2.0" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
    <header class="d-print-none">
      <div class="container text-center text-lg-left">
        <div class="py-3 clearfix">
          <h1 class="site-title mb-0"><?php print_r($value['firstname']); print_r(" "); print_r($value['lastname']);?></h1>
 
          <div class="site-nav">
            <nav role="navigation">
              <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="https://twitter.com/templateflip" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/templateflip" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/templateflip" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://github.com/templateflip" title="Github"><i class="fab fa-github"></i><span class="menu-title sr-only">Github</span></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <div class="page-content">
      <div class="container">
<div class="cover shadow-lg bg-white">
  <div class="cover-bg p-3 p-lg-4 text-white">
    <div class="row">
      <div class="col-lg-4 col-md-5">
        <div class="avatar hover-effect bg-white shadow-sm p-1"><img src="../../images/contact-data/<?php print_r($value['image']);?>" width="200" height="200"/>

        </div>
      </div>
      <div class="col-lg-8 col-md-7 text-center text-md-start">
        <h2 class="h1 mt-2" ><?php print_r($value['firstname']); print_r(" "); print_r($value['lastname']);?></h2>
        <p><?php print_r($value['profession']);?></p>
        <div class="d-print-none" ><a class="btn btn-success shadow-sm mt-1" href="" onclick="myprint()">Download Resume</a></div>
        <script type="text/javascript" charset="utf-8">
function myprint() {
    window.print();
  }
        </script>
      </div>
    </div>
  </div>
  <div class="about-section pt-4 px-3 px-lg-4 mt-1">
    <div class="row">
      <?php
foreach ($about_data as $key10 => $value10 )
  {
    if ($value10['id'] == $id) 
      {

                $flage10 = true;
                break;
            }
        }

if ($flage10) {
?>
      <div class="col-md-6">
        <h2 class="h3 mb-3">About Me</h2>
        <p>
<?php print_r($value10['desc']);?>
.</p>
      </div>
      <?php
}
?>
      <div class="col-md-5 offset-md-1">
        <div class="row mt-2">
          <div class="col-sm-4">
            <div class="pb-1">Age</div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary"><?php print_r($value['age']);?></div>
          </div>
          <div class="col-sm-4">
            <div class="pb-1">Email</div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary"><?php print_r($value['email']);?>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="pb-1">Phone</div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary"><?php print_r($value['phone']);?></div>
          </div>
          <div class="col-sm-4">
            <div class="pb-1">Address</div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary"><?php print_r($value['city']); print_r(', '); print_r($value['state']); print_r(', '); print_r($value['country']); print_r('.');  ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="d-print-block"/>
  <div class="skills-section px-3 px-lg-4">
    <h2 class="h3 mb-3">Professional Skills</h2>
    <div class="row">
      <div class="col-md-6">
        <?php
foreach ($skill_data as $keys => $values )
  {
    if ($values['id'] == $id && $values['idd'] == 0) 
      {
        
                $flags = true;
                break;
            }
        }

if ($flags) {
?>

        <div class="mb-2"><span><?php print_r($values['name']);?></span>
          <div class="progress my-1">
            <div class="progress-bar bg-primary" role="progressbar" style="width: <?php print_r($values['percent']);?>%" aria-valuenow="<?php print_r($values['percent']);?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
          <?php
        }
        ?>
        <?php
foreach ($skill_data as $keys1 => $values1 )
  {
    if ($values1['id'] == $id && $values1['idd'] == 1) 
      {
        
                $flags1 = true;
                break;
            }
        }

if ($flags1) {
?>

        <div class="mb-2"><span><?php print_r($values1['name']);?></span>
          <div class="progress my-1">
            <div class="progress-bar bg-primary" role="progressbar" style="width: <?php print_r($values1['percent']);?>%" aria-valuenow="<?php print_r($values1['percent']);?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
          <?php
        }
        ?>
        <?php
foreach ($skill_data as $keys2 => $values2 )
  {
    if ($values2['id'] == $id && $values2['idd'] == 2) 
      {
        
                $flags2 = true;
                break;
            }
        }

if ($flags2) {
?>

        <div class="mb-2"><span><?php print_r($values2['name']);?></span>
          <div class="progress my-1">
            <div class="progress-bar bg-primary" role="progressbar" style="width: <?php print_r($values2['percent']);?>%" aria-valuenow="<?php print_r($values2['percent']);?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
          <?php
        }
        ?>
      </div>
      <div class="col-md-6">
        <?php
foreach ($skill_data as $keys3 => $values3 )
  {
    if ($values3['id'] == $id && $values3['idd'] == 3) 
      {
        
                $flags3 = true;
                break;
            }
        }

if ($flags3) {
?>

        <div class="mb-2"><span><?php print_r($values3['name']);?></span>
          <div class="progress my-1">
            <div class="progress-bar bg-primary" role="progressbar" style="width: <?php print_r($values3['percent']);?>%" aria-valuenow="<?php print_r($values3['percent']);?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
          <?php
        }
        ?>
        <?php
foreach ($skill_data as $keys4 => $values4 )
  {
    if ($values4['id'] == $id && $values4['idd'] == 4) 
      {
        
                $flags4 = true;
                break;
            }
        }

if ($flags4) {
?>

        <div class="mb-2"><span><?php print_r($values4['name']);?></span>
          <div class="progress my-1">
            <div class="progress-bar bg-primary" role="progressbar" style="width: <?php print_r($values4['percent']);?>%" aria-valuenow="<?php print_r($values4['percent']);?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
          <?php
        }
        ?>
        <?php
foreach ($skill_data as $keys5 => $values5 )
  {
    if ($values5['id'] == $id && $values5['idd'] == 5) 
      {
        
                $flags5 = true;
                break;
            }
        }

if ($flags5) {
?>

        <div class="mb-2"><span><?php print_r($values5['name']);?></span>
          <div class="progress my-1">
            <div class="progress-bar bg-primary" role="progressbar" style="width: <?php print_r($values5['percent']);?>%" aria-valuenow="<?php print_r($values5['percent']);?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
          <?php
        }
        ?>

      </div>
    </div>
  </div>
  <hr class=""/>
  <div class="work-experience-section px-3 px-lg-4">
    <h2 class="h3 mb-4">Work Experience</h2>
    <div class="timeline">
      <?php
foreach ($workd_data as $keye => $valuee )
  {
    if ($valuee['id'] == $id && $valuee['ids'] == 1) 
      {
        
                $flage = true;
                break;
            }
        }

if ($flage) {
?>
<?php
foreach ($workh_data as $keye1 => $valuee1 )
  {
    if ($valuee1['id'] == $id && $valuee1['ids'] == 1) 
      {
        
                $flage1 = true;
                break;
            }
        }

if ($flage1) {
?>
      <div class="timeline-card timeline-card-primary card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1"><?php print_r($valuee1['position']);?> <span class="text-muted h6">at <?php print_r($valuee1['company']);?></span></div>
          <div class="text-muted text-small mb-2"><?php print_r($valuee1['sdate']);?>   - Present</div>
          <div>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</div>
        </div>
      </div>
<?php
}
}
?>

      <?php
foreach ($workd_data as $keye3 => $valuee3 )
  {
    if ($valuee3['id'] == $id && $valuee3['ids'] == 2) 
      {
        
                $flage3 = true;
                break;
            }
        }

if ($flage3) {
?>
<?php
foreach ($workh_data as $keye2 => $valuee2 )
  {
    if ($valuee2['id'] == $id && $valuee2['ids'] == 2) 
      {
        
                $flage2 = true;
                break;
            }
        }

if ($flage2) {
?>
      <div class="timeline-card timeline-card-primary card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1"><?php print_r($valuee2['position']);?> <span class="text-muted h6">at <?php print_r($valuee2['company']);?></span></div>
          <div class="text-muted text-small mb-2"><?php print_r($valuee2['sdate']);?>   - Present</div>
          <div>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</div>
        </div>
      </div>
<?php
}
}
?>
<?php
foreach ( $workh_data as $key1 => $value1 )
  {
    if ($value1['id'] == $id && $value1['ids'] == 3) 
      {
                $flag1 = true;
                break;
            }
        }

if ($flag1) {
  
foreach ( $workd_data as $keye4 => $valuee4 )
  {
    if ($valuee4['id'] == $id && $valuee4['ids'] == 3) 
      {
                $flage4 = true;
                break;
            }
        }
if ($flage4) {
?>
      <div class="timeline-card timeline-card-primary card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1"><?php print_r($value1['position']);?> <span class="text-muted h6">at <?php print_r($value1['company']);?></span></div>
          <div class="text-muted text-small mb-2">Jan, 2011 - May, 2013</div>
          <div>User generated content in real-time will have multiple touchpoints for offshoring. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</div>
        </div>
      </div>
      <?php
        }
      }?>
<?php
foreach ( $workh_data as $keye5 => $valuee5 )
  {
    if ($valuee5['id'] == $id && $valuee5['ids'] == 4) 
      {
                $flage5 = true;
                break;
            }
        }

if ($flage5) {
  
foreach ( $workd_data as $keye6 => $valuee6 )
  {
    if ($valuee6['id'] == $id && $valuee6['ids'] == 4) 
      {
                $flage6 = true;
                break;
            }
        }
if ($flage6) {
?>
      <div class="timeline-card timeline-card-primary card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1"><?php print_r($valuee5['position']);?> <span class="text-muted h6">at <?php print_r($valuee5['company']);?></span></div>
          <div class="text-muted text-small mb-2"><?php print_r($valuee5['sdate']);?> - <?php print_r($valuee5['edate']);?></div>
          <div>User generated content in real-time will have multiple touchpoints for offshoring. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</div>
        </div>
      </div>
      <?php
        }
      }?>
    </div>
  </div>
  <hr class="d-print-none"/>
  <div class="page-break"></div>
  <div class="education-section px-3 px-lg-4 pb-4">
    <h2 class="h3 mb-4">Education</h2>
    <div class="timeline">
<?php
foreach ( $edu_data as $keye7 => $valuee7 )
  {
    if ($valuee7['id'] == $id && $valuee7['ids'] == 1) 
      {
                $flage7 = true;
                break;
            }
        }

if ($flage7) {
?>
      <div class="timeline-card timeline-card-success card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1"><?php print_r($valuee7['ledu']);?> <span class="text-muted h6">from <?php print_r($valuee7['nschool']);?></span></div>
          <div class="text-muted text-small mb-2"><?php print_r($valuee7['sdate']);?> - <?php print_r($valuee7['sdate']);?></div>
          <div><?php print_r($valuee7['desc']);?></div>
        </div>
      </div>
      <?php
      }?>
      <?php
  
foreach ( $edu_data as $keye8 => $valuee8 )
  {
    if ($valuee8['id'] == $id && $valuee8['ids'] == 2) 
      {
                $flage8 = true;
                break;
            }
        }
if ($flage8) {
?>
      <div class="timeline-card timeline-card-success card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1"><?php print_r($valuee8['ledu']);?> <span class="text-muted h6">from <?php print_r($valuee8['nschool']);?></span></div>
          <div class="text-muted text-small mb-2"><?php print_r($valuee8['sdate']);?> - <?php print_r($valuee8['edate']);?></div>
          <div><?php print_r($valuee8['desc']);?>.</div>
        </div>
      </div>
      <?php
}?>
<?php
  
foreach ( $edu_data as $keye9 => $valuee9 )
  {
    if ($valuee9['id'] == $id && $valuee9['ids'] == 3) 
      {
                $flage9 = true;
                break;
            }
        }
if ($flage9) {
  ?>
      <div class="timeline-card timeline-card-success card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1"><?php print_r($valuee9['ledu']);?> <span class="text-muted h6">from <?php print_r($valuee9['nschool']);?></span></div>
          <div class="text-muted text-small mb-2"><?php print_r($valuee9['sdate']);?> - <?php print_r($valuee9['edate']);?></div>
          <div><?php print_r($valuee9['nschool']);?>.</div>
        </div>
      </div>
      <?php
}
?>

    </div>
  </div>
  <hr class="d-print-none"/>
  <div class="contant-section px-3 px-lg-4 pb-4" id="contact">
    <h2 class="h3 text mb-3">Reference</h2>
    <div class="row">

      <div class="col">
        <div class="mt-2">
          <h3 class="h6">Reference</h3>
          <div class="pb-2 text-secondary">Available upon request.</div>
        </div>
      </div>

    </div>
  </div>
</div></div>
    </div>
    <footer class="pt-4 pb-4 text-muted text-center d-print-none">

    </footer>
    <script src="scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="scripts/aos.js?ver=1.2.0"></script>
    <script src="scripts/main1.js?ver=1.2.0"></script>
  </body>
</html>
<?php
}

?>