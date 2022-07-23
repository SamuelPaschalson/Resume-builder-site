<?php
 if(isset($_POST['temp1'])) {
   $id = $_POST['id'];
  header("location: templates/right-resume/?id=$id");
}

 if(isset($_POST['temp2'])) {
   $id = $_POST['id'];
  header("location: templates/creative-cv_free_1-1-0/?id=$id");
}