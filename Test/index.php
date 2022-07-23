<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Bold Underline Italic</title>
    <script src="../js/jquery.min.js"></script>
  </head>
  <body>
    <input type="text" id="contentDiv">
<br>
 <input type="button" value="Bold" id="font-button"></input>​
 <input type="button" value="Italic" id="ital-button"></input>​
 
<script>
jQuery("#font-button").on("click",function(){

   var button = $(this);
   var contentDiv= $("#contentDiv");

  if(button.val() == "Bold"){

    contentDiv.css("font-weight","bold");
    button.val("UnBold");

  }else{

      contentDiv.css("font-weight","normal");
       button.val("Bold");
 }
});

jQuery("#ital-button").on("click",function(){

   var button = $(this);
   var contentDiv= $("#contentDiv");

  if(button.val() == "Italic"){

    contentDiv.css("list-style-type","disc");
    button.val("UnItalic");

  }else{

      contentDiv.css("list-style-type","none");
       button.val("Italic");
 }
});
</script>
  </body>
</html>