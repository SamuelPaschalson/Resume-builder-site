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
<html>
<head>
    <meta charset="utf-8">
    <title>Work Details - XenOK</title>

    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/richtext.min.css">
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
        <form class="text-center" action="code.php" method="post">
        <input type="hidden" name="id" value="<?php echo($id);?>">
        <input type="hidden" name="ids" value="<?php echo($ids);?>">
        <div class="page-wrapper box-content">
          <textarea class="content text" name="example"></textarea>
          <div class="buttons">
            <div class="nav-btns">
              <a class="btn btn-outline-primary" href="work-history.php?id=<?php echo $id; ?>&ids=<?php echo $ids; ?>">BACK</a>
            </div>
            <div class="nav-btn">
              <button name="workd" class="btn btn-outline-warning" type="submit">NEXT:EDUCATION</button>
            </div>
          </div>
          </form>

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.richtext.js"></script>
        <script src="js/index.js"></script>
<!-- <script>
    $(document).ready(function() {
      $('.content').richText({

        // text alignment
        leftAlign: true,
        centerAlign: true,
        rightAlign: true,
        justify: true,

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
        fonts: true,
        fontColor: false,
        fontSize: true,
        // link
        urls: true,

        // tables
        table: false,

        // code
        removeStyles: false,
        code: true,
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

</script> -->

</body>
</html>