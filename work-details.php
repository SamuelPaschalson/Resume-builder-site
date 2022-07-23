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
    <meta charset="utf-8">
    <title>Work Details - XenOK</title>

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/richtext.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.richtext.js"></script>
</head>
<body>
    
        <form class="text-center" action="code.php" method="post">
        <input type="hidden" name="id" value="<?php echo($id);?>">
        <div class="page-wrapper box-content">
          <textarea class="content text" name="example"></textarea>
          <div class="buttons">
            <div class="nav-btns">
              <a class="btn btn-outline-primary" href="work-history.php?id="<?php $id; ?>"">BACK</a>
            </div>
            <div class="nav-btn">
              <button name="workd" class="btn btn-outline-warning" type="submit">NEXT:EDUCATION</button>
            </div>
          </div>
          </form>

<script>
    $(document).ready(function() {
      $('.content').richText({

  // text alignment
  leftAlign: false,
  centerAlign: false,
  rightAlign: false,
  justify: false,

  // lists
  ol: false,

  // title
  heading: false,

  // colors
  colors: false,

  // dropdowns
  fileHTML: '',
  imageHTML: '',

  // preview
  preview: false,

  // placeholder
  placeholder: '',
  
  imageUpload: false,
  fileUpload: false,

  // media
  videoEmbed: false,
heading: false,

  // fonts
  fonts: false,
  fontColor: false,
  fontSize: false,
  // link
  urls: false,

  // tables
  table: false,

  // code
  removeStyles: false,
  code: false,
  // developer settings
  useSingleQuotes: false,
  height: 0,
  heightPercentage: 0,
  adaptiveHeight: false,
  id: "",
  class: "text-text",
  useParagraph: false,
  maxlength: 0,
  callback: undefined,
  useTabForNext: false
});
        
    });

</script>

</body>
</html>