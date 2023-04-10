<!-- <input type="hidden" name="id" id="" value="<?php echo(uniqid(md5(time()), mt_rand(1,1000))); ?>"> -->
<?php
require("login.class1.php");
require("register.class1.php");
if (!isset($_POST['email'])) {
    # code...
    if (isset($_POST['submit'])) {
        $user = new LoginUser($_POST['username'], $_POST['password']);
    }
}
if (isset($_POST['email'])) {
    # code...
    if (isset($_POST['submit'])) {
        if ($_POST['password'] == $_POST['cpassword']) {
            $user = new RegisterUser(uniqid(md5(time()), mt_rand(1,1000)), $_POST['username'], $_POST['email'], $_POST['password']);
        }
    
    }
}

if (isset($_POST['contact-info'])) {
  $ids = $_POST['id'];
    header("location: contact-info?id=".$ids."");
}

if (isset($_POST['work-d'])) {
  $ids = $_POST['id'];
    header("location: work-details?id=".$ids."");
}

if (isset($_POST['work-d1'])) {
  $ids = $_POST['id'];
    header("location: work-details1?id=".$ids."");
}

if (isset($_POST['work-d2'])) {
  $ids = $_POST['id'];
    header("location: work-details2?id=".$ids."");
}

if (isset($_POST['work-d3'])) {
  $ids = $_POST['id'];
    header("location: work-details3?id=".$ids."");
}

if (isset($_POST['work-d4'])) {
  $ids = $_POST['id'];
    header("location: work-details4?id=".$ids."");
}

if (isset($_POST['edu-d'])) {
  $ids = $_POST['id'];
    header("location: education?id=".$ids."");
}

if (isset($_POST['edu-1'])) {
  $ids = $_POST['id'];
    header("location: education1?id=".$ids."");
}

if (isset($_POST['edu-2'])) {
  $ids = $_POST['id'];
    header("location: education2?id=".$ids."");
}

if (isset($_POST['edu-3'])) {
  $ids = $_POST['id'];
    header("location: education3?id=".$ids."");
}

if (isset($_POST['edu-4'])) {
  $ids = $_POST['id'];
    header("location: education4?id=".$ids."");
}

if (isset($_POST['cert'])) {
  $ids = $_POST['id'];
    header("location: certification?id=".$ids."");
}

if (isset($_POST['skills'])) {
  $ids = $_POST['id'];
    header("location: skills?id=".$ids."");
}

 if(isset($_POST['work_next'])) {
   $id = $_POST['id'];
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $age = $_POST['age'];
   $profession = $_POST['profession'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['country'];
   $postal = $_POST['postal'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $img = $_FILES["image"]['name'];
   $fb = $_POST['facebook'];
   $ig = $_POST['instagram'];
   $git = $_POST['github'];
   $link = $_POST['linkedin'];
$contact = file_get_contents('contactdata.json');
$contact_arr = json_decode($contact,true);
$contact1 = file_get_contents('contactdata.json');
$contact_arr1 = json_decode($contact1,true);
$flag = false;
echo("Ok");
foreach ($contact_arr as $key => $value )
  {
    if ($value['id'] == $id) 
      {
                $flag = true;
                break;
            }
  }
  if (!$flag) {
if ($_FILES["image"]['name'] == null){
        $contact_arr1[] = array('id'=>$id, 'firstname'=>$fname, 'lastname'=>$lname, 'age'=>$age, 'profession'=>$profession, 'city'=>$city, 'state'=>$state, 'country'=>$country, 'postal'=>$postal, 'phone'=>$phone, 'email'=>$email, 'image'=>null, 'facebook'=>$fb, 'instagram'=>$ig, 'github'=>$git, 'linkedin'=>$link);
     } else{
  move_uploaded_file($_FILES["image"]["tmp_name"], "images/contact-data/".$_FILES["image"]['name']);
$images = "images/contact-data/".$_FILES["image"]['name'];
  $contact_arr1[] = array('id'=>$id, 'firstname'=>$fname, 'lastname'=>$lname, 'age'=>$age, 'profession'=>$profession, 'city'=>$city, 'state'=>$state, 'country'=>$country, 'postal'=>$postal, 'phone'=>$phone, 'email'=>$email, 'image'=>$img, 'facebook'=>$fb, 'instagram'=>$ig, 'github'=>$git, 'linkedin'=>$link);
      }
file_put_contents('contactdata.json', json_encode($contact_arr1, JSON_PRETTY_PRINT));
   $ids['uniqid'] = $id;
         header("location: work-history?id=".$ids['uniqid']."");
  }
  if ($flag) {
if ($_FILES["image"]['name'] == null){
  $img == null;
     } else{
  move_uploaded_file($_FILES["image"]["tmp_name"], "images/contact-data/".$_FILES["image"]['name']);
$images = "images/contact-data/".$_FILES["image"]['name'];
      }
    $contact_arr[$key]["id"] = $id;
    $contact_arr[$key]["firstname"] = $fname;
    $contact_arr[$key]["lastname"] = $lname;
    $contact_arr[$key]["age"] = $age;
    $contact_arr[$key]["profession"] = $profession;
    $contact_arr[$key]["city"] = $city;
    $contact_arr[$key]["state"] = $state;
    $contact_arr[$key]["country"] = $country;
    $contact_arr[$key]["postal"] = $postal;
    $contact_arr[$key]["phone"] = $phone;
    $contact_arr[$key]["email"] = $email;
    $contact_arr[$key]["image"] = $img;
    $contact_arr[$key]["facebook"] = $fb;
    $contact_arr[$key]["instagram"] = $ig;
    $contact_arr[$key]["github"] = $git;
    $contact_arr[$key]["linkedin"] = $link;
   $ids['uniqid'] = $id;
    $arry = json_encode($contact_arr, JSON_PRETTY_PRINT);
    file_put_contents('contactdata.json', $arry);
         header("location: work-history?id=".$ids['uniqid']."");
  }

}

 if(isset($_POST['workh'])) {
   $id = $_POST['id'];
   $idd = 1;
   $fname = $_POST['company'];
   $lname = $_POST['position'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['sdate'];
   $postal = $_POST['edate'];
   $phone = $_POST['current'];
   $phone1 = $_POST['desc'];
$workh = file_get_contents('workhistory.json');
$workh_arr = json_decode($workh,true);
$workh1 = file_get_contents('workhistory.json');
$workh_arr1 = json_decode($workh1,true);
$flag = false;
echo("Ok");
foreach ($workh_arr as $key => $value )
  {
    if ($value['ids'] == $idd && $value['id'] == $id) 
      {
                $flag = true;
                break;
            }
  }
  if (!$flag) {
   $workh_arr1[] = array('id'=>$id, 'ids'=>$idd, 'company'=>$fname, 'position'=>$lname, 'city'=>$city, 'state'=>$state, 'sdate'=>$country, 'edate'=>$postal, 'current'=>$phone);
   
file_put_contents('workhistory.json', json_encode($workh_arr1, JSON_PRETTY_PRINT));
   $ids['uniqid'] = $id;
         header("location: work-details?id=".$ids['uniqid']."");
  }
  if ($flag) {
    $workh_arr[$key]["id"] = $id;
    $workh_arr[$key]["ids"] = $idd;
    $workh_arr[$key]["company"] = $fname;
    $workh_arr[$key]["position"] = $lname;
    $workh_arr[$key]["city"] = $city;
    $workh_arr[$key]["state"] = $state;
    $workh_arr[$key]["sdate"] = $country;
    $workh_arr[$key]["edate"] = $postal;
    $workh_arr[$key]["current"] = $phone;
   $ids['uniqid'] = $id;
    $arry = json_encode($workh_arr, JSON_PRETTY_PRINT);
    file_put_contents('workhistory.json', $arry);
         header("location: work-details?id=".$ids['uniqid']."");
  }

}

 if(isset($_POST['workh1'])) {
   $id = $_POST['id'];
   $idd = 2;
   $fname = $_POST['company'];
   $lname = $_POST['position'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['sdate'];
   $postal = $_POST['edate'];
   $phone = $_POST['current'];
   $phone1 = $_POST['desc'];
$workh = file_get_contents('workhistory.json');
$workh_arr = json_decode($workh,true);
$workh1 = file_get_contents('workhistory.json');
$workh_arr1 = json_decode($workh1,true);
$flag = false;
echo("Ok");
foreach ($workh_arr as $key => $value )
  {
    if ($value['ids'] == $idd && $value['id'] == $id) 
      {
                $flag = true;
                break;
            }
  }
  if (!$flag) {
   $workh_arr1[] = array('id'=>$id, 'ids'=>$idd, 'company'=>$fname, 'position'=>$lname, 'city'=>$city, 'state'=>$state, 'sdate'=>$country, 'edate'=>$postal, 'current'=>$phone);
   
file_put_contents('workhistory.json', json_encode($workh_arr1, JSON_PRETTY_PRINT));
   $ids['uniqid'] = $id;
         header("location: work-details1?id=".$ids['uniqid']."");
  }
  if ($flag) {
    $workh_arr[$key]["id"] = $id;
    $workh_arr[$key]["ids"] = $idd;
    $workh_arr[$key]["company"] = $fname;
    $workh_arr[$key]["position"] = $lname;
    $workh_arr[$key]["city"] = $city;
    $workh_arr[$key]["state"] = $state;
    $workh_arr[$key]["sdate"] = $country;
    $workh_arr[$key]["edate"] = $postal;
    $workh_arr[$key]["current"] = $phone;
   $ids['uniqid'] = $id;
    $arry = json_encode($workh_arr, JSON_PRETTY_PRINT);
    file_put_contents('workhistory.json', $arry);
         header("location: work-details1?id=".$ids['uniqid']."");
  }

}

 if(isset($_POST['workh2'])) {
   $id = $_POST['id'];
   $idd = 3;
   $fname = $_POST['company'];
   $lname = $_POST['position'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['sdate'];
   $postal = $_POST['edate'];
   $phone = $_POST['current'];
   $phone1 = $_POST['desc'];
$workh = file_get_contents('workhistory.json');
$workh_arr = json_decode($workh,true);
$workh1 = file_get_contents('workhistory.json');
$workh_arr1 = json_decode($workh1,true);
$flag = false;
echo("Ok");
foreach ($workh_arr as $key => $value )
  {
    if ($value['ids'] == $idd && $value['id'] == $id) 
      {
                $flag = true;
                break;
            }
  }
  if (!$flag) {
   $workh_arr1[] = array('id'=>$id, 'ids'=>$idd, 'company'=>$fname, 'position'=>$lname, 'city'=>$city, 'state'=>$state, 'sdate'=>$country, 'edate'=>$postal, 'current'=>$phone);
   
file_put_contents('workhistory.json', json_encode($workh_arr1, JSON_PRETTY_PRINT));
   $ids['uniqid'] = $id;
         header("location: work-details2?id=".$ids['uniqid']."");
  }
  if ($flag) {
    $workh_arr[$key]["id"] = $id;
    $workh_arr[$key]["ids"] = $idd;
    $workh_arr[$key]["company"] = $fname;
    $workh_arr[$key]["position"] = $lname;
    $workh_arr[$key]["city"] = $city;
    $workh_arr[$key]["state"] = $state;
    $workh_arr[$key]["sdate"] = $country;
    $workh_arr[$key]["edate"] = $postal;
    $workh_arr[$key]["current"] = $phone;
   $ids['uniqid'] = $id;
    $arry = json_encode($workh_arr, JSON_PRETTY_PRINT);
    file_put_contents('workhistory.json', $arry);
         header("location: work-details2?id=".$ids['uniqid']."");
  }

}

 if(isset($_POST['workh3'])) {
   $id = $_POST['id'];
   $idd = 4;
   $fname = $_POST['company'];
   $lname = $_POST['position'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['sdate'];
   $postal = $_POST['edate'];
   $phone = $_POST['current'];
   $phone1 = $_POST['desc'];
$workh = file_get_contents('workhistory.json');
$workh_arr = json_decode($workh,true);
$workh1 = file_get_contents('workhistory.json');
$workh_arr1 = json_decode($workh1,true);
$flag = false;
echo("Ok");
foreach ($workh_arr as $key => $value )
  {
    if ($value['ids'] == $idd && $value['id'] == $id) 
      {
                $flag = true;
                break;
            }
  }
  if (!$flag) {
   $workh_arr1[] = array('id'=>$id, 'ids'=>$idd, 'company'=>$fname, 'position'=>$lname, 'city'=>$city, 'state'=>$state, 'sdate'=>$country, 'edate'=>$postal, 'current'=>$phone);
   
file_put_contents('workhistory.json', json_encode($workh_arr1, JSON_PRETTY_PRINT));
   $ids['uniqid'] = $id;
         header("location: work-details3?id=".$ids['uniqid']."");
  }
  if ($flag) {
    $workh_arr[$key]["id"] = $id;
    $workh_arr[$key]["ids"] = $idd;
    $workh_arr[$key]["company"] = $fname;
    $workh_arr[$key]["position"] = $lname;
    $workh_arr[$key]["city"] = $city;
    $workh_arr[$key]["state"] = $state;
    $workh_arr[$key]["sdate"] = $country;
    $workh_arr[$key]["edate"] = $postal;
    $workh_arr[$key]["current"] = $phone;
   $ids['uniqid'] = $id;
    $arry = json_encode($workh_arr, JSON_PRETTY_PRINT);
    file_put_contents('workhistory.json', $arry);
         header("location: work-details3?id=".$ids['uniqid']."");
  }

}

 if(isset($_POST['workh4'])) {
   $id = $_POST['id'];
   $idd = 5;
   $fname = $_POST['company'];
   $lname = $_POST['position'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['sdate'];
   $postal = $_POST['edate'];
   $phone = $_POST['current'];
   $phone1 = $_POST['desc'];
$workh = file_get_contents('workhistory.json');
$workh_arr = json_decode($workh,true);
$workh1 = file_get_contents('workhistory.json');
$workh_arr1 = json_decode($workh1,true);
$flag = false;
echo("Ok");
foreach ($workh_arr as $key => $value )
  {
    if ($value['ids'] == $idd && $value['id'] == $id) 
      {
                $flag = true;
                break;
            }
  }
  if (!$flag) {
   $workh_arr1[] = array('id'=>$id, 'ids'=>$idd, 'company'=>$fname, 'position'=>$lname, 'city'=>$city, 'state'=>$state, 'sdate'=>$country, 'edate'=>$postal, 'current'=>$phone);
   
file_put_contents('workhistory.json', json_encode($workh_arr1, JSON_PRETTY_PRINT));
   $ids['uniqid'] = $id;
         header("location: work-details4?id=".$ids['uniqid']."");
  }
  if ($flag) {
    $workh_arr[$key]["id"] = $id;
    $workh_arr[$key]["ids"] = $idd;
    $workh_arr[$key]["company"] = $fname;
    $workh_arr[$key]["position"] = $lname;
    $workh_arr[$key]["city"] = $city;
    $workh_arr[$key]["state"] = $state;
    $workh_arr[$key]["sdate"] = $country;
    $workh_arr[$key]["edate"] = $postal;
    $workh_arr[$key]["current"] = $phone;
   $ids['uniqid'] = $id;
    $arry = json_encode($workh_arr, JSON_PRETTY_PRINT);
    file_put_contents('workhistory.json', $arry);
         header("location: work-details4?id=".$ids['uniqid']."");
  }

}


 if(isset($_POST['workd'])) {
   $id = $_POST['id'];
   $idd = 0;
   $fname = $_POST['example'];
$workh = file_get_contents('workdetails.json');
$workh_arr = json_decode($workh,true);
$workh1 = file_get_contents('workdetails.json');
$workh_arr1 = json_decode($workh1,true);
$flag = false;
echo("Ok");
foreach ($workh_arr as $key => $value )
  {
    if ($value['ids'] == $idd && $value['id'] == $id) 
      {
                $flag = true;
                break;
            }
  }
  if (!$flag) {
   $workh_arr1[] = array('id'=>$id, 'ids'=>$idd, 'text'=>$fname);
   
file_put_contents('workdetails.json', json_encode($workh_arr1, JSON_PRETTY_PRINT));
   $ids['uniqid'] = $id;
         header("location: work-history1?id=".$ids['uniqid']."");
  }
  if ($flag) {
    $workh_arr[$key]["id"] = $id;
    $workh_arr[$key]["ids"] = $idd;
    $workh_arr[$key]["text"] = $fname;
   $ids['uniqid'] = $id;
    $arry = json_encode($workh_arr, JSON_PRETTY_PRINT);
    file_put_contents('workdetails.json', $arry);
         header("location: work-history1?id=".$ids['uniqid']."");
  }

}

 if(isset($_POST['workd1'])) {
   $id = $_POST['id'];
   $idd = 1;
   $fname = $_POST['example'];
$workh = file_get_contents('workdetails.json');
$workh_arr = json_decode($workh,true);
$workh1 = file_get_contents('workdetails.json');
$workh_arr1 = json_decode($workh1,true);
$flag = false;
echo("Ok");
foreach ($workh_arr as $key => $value )
  {
    if ($value['ids'] == $idd && $value['id'] == $id) 
      {
                $flag = true;
                break;
            }
  }
  if (!$flag) {
   $workh_arr1[] = array('id'=>$id, 'ids'=>$idd, 'text'=>$fname);
   
file_put_contents('workdetails.json', json_encode($workh_arr1, JSON_PRETTY_PRINT));
   $ids['uniqid'] = $id;
         header("location: work-history2?id=".$ids['uniqid']."");
  }
  if ($flag) {
    $workh_arr[$key]["id"] = $id;
    $workh_arr[$key]["ids"] = $idd;
    $workh_arr[$key]["text"] = $fname;
   $ids['uniqid'] = $id;
    $arry = json_encode($workh_arr, JSON_PRETTY_PRINT);
    file_put_contents('workdetails.json', $arry);
         header("location: work-history2?id=".$ids['uniqid']."");
  }

}

 if(isset($_POST['workd2'])) {
   $id = $_POST['id'];
   $idd = 2;
   $fname = $_POST['example'];
$workh = file_get_contents('workdetails.json');
$workh_arr = json_decode($workh,true);
$workh1 = file_get_contents('workdetails.json');
$workh_arr1 = json_decode($workh1,true);
$flag = false;
echo("Ok");
foreach ($workh_arr as $key => $value )
  {
    if ($value['ids'] == $idd && $value['id'] == $id) 
      {
                $flag = true;
                break;
            }
  }
  if (!$flag) {
   $workh_arr1[] = array('id'=>$id, 'ids'=>$idd, 'text'=>$fname);
   
file_put_contents('workdetails.json', json_encode($workh_arr1, JSON_PRETTY_PRINT));
   $ids['uniqid'] = $id;
         header("location: work-history3?id=".$ids['uniqid']."");
  }
  if ($flag) {
    $workh_arr[$key]["id"] = $id;
    $workh_arr[$key]["ids"] = $idd;
    $workh_arr[$key]["text"] = $fname;
   $ids['uniqid'] = $id;
    $arry = json_encode($workh_arr, JSON_PRETTY_PRINT);
    file_put_contents('workdetails.json', $arry);
         header("location: work-history3?id=".$ids['uniqid']."");
  }

}

 if(isset($_POST['workd3'])) {
   $id = $_POST['id'];
   $idd = 3;
   $fname = $_POST['example'];
$workh = file_get_contents('workdetails.json');
$workh_arr = json_decode($workh,true);
$workh1 = file_get_contents('workdetails.json');
$workh_arr1 = json_decode($workh1,true);
$flag = false;
echo("Ok");
foreach ($workh_arr as $key => $value )
  {
    if ($value['ids'] == $idd && $value['id'] == $id) 
      {
                $flag = true;
                break;
            }
  }
  if (!$flag) {
   $workh_arr1[] = array('id'=>$id, 'ids'=>$idd, 'text'=>$fname);
   
file_put_contents('workdetails.json', json_encode($workh_arr1, JSON_PRETTY_PRINT));
   $ids['uniqid'] = $id;
         header("location: work-history4?id=".$ids['uniqid']."");
  }
  if ($flag) {
    $workh_arr[$key]["id"] = $id;
    $workh_arr[$key]["ids"] = $idd;
    $workh_arr[$key]["text"] = $fname;
   $ids['uniqid'] = $id;
    $arry = json_encode($workh_arr, JSON_PRETTY_PRINT);
    file_put_contents('workdetails.json', $arry);
         header("location: work-history4?id=".$ids['uniqid']."");
  }

}

 if(isset($_POST['workd4'])) {
   $id = $_POST['id'];
   $idd = 4;
   $fname = $_POST['example'];
$workh = file_get_contents('workdetails.json');
$workh_arr = json_decode($workh,true);
$workh1 = file_get_contents('workdetails.json');
$workh_arr1 = json_decode($workh1,true);
$flag = false;
echo("Ok");
foreach ($workh_arr as $key => $value )
  {
    if ($value['ids'] == $idd && $value['id'] == $id) 
      {
                $flag = true;
                break;
            }
  }
  if (!$flag) {
   $workh_arr1[] = array('id'=>$id, 'ids'=>$idd, 'text'=>$fname);
   
file_put_contents('workdetails.json', json_encode($workh_arr1, JSON_PRETTY_PRINT));
   $ids['uniqid'] = $id;
         header("location: education?id=".$ids['uniqid']."");
  }
  if ($flag) {
    $workh_arr[$key]["id"] = $id;
    $workh_arr[$key]["ids"] = $idd;
    $workh_arr[$key]["text"] = $fname;
   $ids['uniqid'] = $id;
    $arry = json_encode($workh_arr, JSON_PRETTY_PRINT);
    file_put_contents('workdetails.json', $arry);
         header("location: education?id=".$ids['uniqid']."");
  }

}

 if(isset($_POST['edu'])) {
   $id = $_POST['id'];
   $idd = 1;
   $fname = $_POST['ledu'];
   $lname = $_POST['nschool'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['sdate'];
   $postal = $_POST['edate'];
   $desc = $_POST['desc'];
$workh = file_get_contents('edudata.json');
$workh_arr = json_decode($workh,true);
$workh1 = file_get_contents('edudata.json');
$workh_arr1 = json_decode($workh1,true);
$flag = false;
echo("Ok");
foreach ($workh_arr as $key => $value )
  {
    if ($value['ids'] == $idd && $value['id'] == $id) 
      {
                $flag = true;
                break;
            }
  }
  if (!$flag) {
   $workh_arr1[] = array('id'=>$id, 'ids'=>$idd, 'ledu'=>$fname, 'nschool'=>$lname, 'city'=>$city, 'state'=>$state, 'sdate'=>$country, 'edate'=>$postal, 'desc'=>$desc);
   
file_put_contents('edudata.json', json_encode($workh_arr1, JSON_PRETTY_PRINT));
   $ids['uniqid'] = $id;
         header("location: education1?id=".$ids['uniqid']."");
  }
  if ($flag) {
    $workh_arr[$key]["id"] = $id;
    $workh_arr[$key]["ids"] = $idd;
    $workh_arr[$key]["ledu"] = $fname;
    $workh_arr[$key]["nschool"] = $lname;
    $workh_arr[$key]["city"] = $city;
    $workh_arr[$key]["state"] = $state;
    $workh_arr[$key]["sdate"] = $country;
    $workh_arr[$key]["desc"] = $desc;
   $ids['uniqid'] = $id;
    $arry = json_encode($workh_arr, JSON_PRETTY_PRINT);
    file_put_contents('edudata.json', $arry);
         header("location: education1?id=".$ids['uniqid']."");
  }

}

 if(isset($_POST['edu1'])) {
   $id = $_POST['id'];
   $idd = 2;
   $fname = $_POST['ledu'];
   $lname = $_POST['nschool'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['sdate'];
   $postal = $_POST['edate'];
   $desc = $_POST['desc'];
$workh = file_get_contents('edudata.json');
$workh_arr = json_decode($workh,true);
$workh1 = file_get_contents('edudata.json');
$workh_arr1 = json_decode($workh1,true);
$flag = false;
echo("Ok");
foreach ($workh_arr as $key => $value )
  {
    if ($value['ids'] == $idd && $value['id'] == $id) 
      {
                $flag = true;
                break;
            }
  }
  if (!$flag) {
   $workh_arr1[] = array('id'=>$id, 'ids'=>$idd, 'ledu'=>$fname, 'nschool'=>$lname, 'city'=>$city, 'state'=>$state, 'sdate'=>$country, 'edate'=>$postal, 'desc'=>$desc);
   
file_put_contents('edudata.json', json_encode($workh_arr1, JSON_PRETTY_PRINT));
   $ids['uniqid'] = $id;
         header("location: education2?id=".$ids['uniqid']."");
  }
  if ($flag) {
    $workh_arr[$key]["id"] = $id;
    $workh_arr[$key]["ids"] = $idd;
    $workh_arr[$key]["ledu"] = $fname;
    $workh_arr[$key]["nschool"] = $lname;
    $workh_arr[$key]["city"] = $city;
    $workh_arr[$key]["state"] = $state;
    $workh_arr[$key]["sdate"] = $country;
    $workh_arr[$key]["desc"] = $desc;
   $ids['uniqid'] = $id;
    $arry = json_encode($workh_arr, JSON_PRETTY_PRINT);
    file_put_contents('edudata.json', $arry);
         header("location: education2?id=".$ids['uniqid']."");
  }

}

 if(isset($_POST['edu2'])) {
   $id = $_POST['id'];
   $idd = 3;
   $fname = $_POST['ledu'];
   $lname = $_POST['nschool'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['sdate'];
   $postal = $_POST['edate'];
   $desc = $_POST['desc'];
$workh = file_get_contents('edudata.json');
$workh_arr = json_decode($workh,true);
$workh1 = file_get_contents('edudata.json');
$workh_arr1 = json_decode($workh1,true);
$flag = false;
echo("Ok");
foreach ($workh_arr as $key => $value )
  {
    if ($value['ids'] == $idd && $value['id'] == $id) 
      {
                $flag = true;
                break;
            }
  }
  if (!$flag) {
   $workh_arr1[] = array('id'=>$id, 'ids'=>$idd, 'ledu'=>$fname, 'nschool'=>$lname, 'city'=>$city, 'state'=>$state, 'sdate'=>$country, 'edate'=>$postal, 'desc'=>$desc);
   
file_put_contents('edudata.json', json_encode($workh_arr1, JSON_PRETTY_PRINT));
   $ids['uniqid'] = $id;
         header("location: education3?id=".$ids['uniqid']."");
  }
  if ($flag) {
    $workh_arr[$key]["id"] = $id;
    $workh_arr[$key]["ids"] = $idd;
    $workh_arr[$key]["ledu"] = $fname;
    $workh_arr[$key]["nschool"] = $lname;
    $workh_arr[$key]["city"] = $city;
    $workh_arr[$key]["state"] = $state;
    $workh_arr[$key]["sdate"] = $country;
    $workh_arr[$key]["desc"] = $desc;
   $ids['uniqid'] = $id;
    $arry = json_encode($workh_arr, JSON_PRETTY_PRINT);
    file_put_contents('edudata.json', $arry);
         header("location: education3?id=".$ids['uniqid']."");
  }

}

 if(isset($_POST['edu3'])) {
   $id = $_POST['id'];
   $idd = 4;
   $fname = $_POST['ledu'];
   $lname = $_POST['nschool'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['sdate'];
   $postal = $_POST['edate'];
   $desc = $_POST['desc'];
$workh = file_get_contents('edudata.json');
$workh_arr = json_decode($workh,true);
$workh1 = file_get_contents('edudata.json');
$workh_arr1 = json_decode($workh1,true);
$flag = false;
echo("Ok");
foreach ($workh_arr as $key => $value )
  {
    if ($value['ids'] == $idd && $value['id'] == $id) 
      {
                $flag = true;
                break;
            }
  }
  if (!$flag) {
   $workh_arr1[] = array('id'=>$id, 'ids'=>$idd, 'ledu'=>$fname, 'nschool'=>$lname, 'city'=>$city, 'state'=>$state, 'sdate'=>$country, 'edate'=>$postal, 'desc'=>$desc);
   
file_put_contents('edudata.json', json_encode($workh_arr1, JSON_PRETTY_PRINT));
   $ids['uniqid'] = $id;
         header("location: education4?id=".$ids['uniqid']."");
  }
  if ($flag) {
    $workh_arr[$key]["id"] = $id;
    $workh_arr[$key]["ids"] = $idd;
    $workh_arr[$key]["ledu"] = $fname;
    $workh_arr[$key]["nschool"] = $lname;
    $workh_arr[$key]["city"] = $city;
    $workh_arr[$key]["state"] = $state;
    $workh_arr[$key]["sdate"] = $country;
    $workh_arr[$key]["desc"] = $desc;
   $ids['uniqid'] = $id;
    $arry = json_encode($workh_arr, JSON_PRETTY_PRINT);
    file_put_contents('edudata.json', $arry);
         header("location: education4?id=".$ids['uniqid']."");
  }

}

 if(isset($_POST['edu4'])) {
   $id = $_POST['id'];
   $idd = 5;
   $fname = $_POST['ledu'];
   $lname = $_POST['nschool'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['sdate'];
   $postal = $_POST['edate'];
   $desc = $_POST['desc'];
$workh = file_get_contents('edudata.json');
$workh_arr = json_decode($workh,true);
$workh1 = file_get_contents('edudata.json');
$workh_arr1 = json_decode($workh1,true);
$flag = false;
echo("Ok");
foreach ($workh_arr as $key => $value )
  {
    if ($value['ids'] == $idd && $value['id'] == $id) 
      {
                $flag = true;
                break;
            }
  }
  if (!$flag) {
   $workh_arr1[] = array('id'=>$id, 'ids'=>$idd, 'ledu'=>$fname, 'nschool'=>$lname, 'city'=>$city, 'state'=>$state, 'sdate'=>$country, 'edate'=>$postal, 'desc'=>$desc);
   
file_put_contents('edudata.json', json_encode($workh_arr1, JSON_PRETTY_PRINT));
   $ids['uniqid'] = $id;
         header("location: certification?id=".$ids['uniqid']."");
  }
  if ($flag) {
    $workh_arr[$key]["id"] = $id;
    $workh_arr[$key]["ids"] = $idd;
    $workh_arr[$key]["ledu"] = $fname;
    $workh_arr[$key]["nschool"] = $lname;
    $workh_arr[$key]["city"] = $city;
    $workh_arr[$key]["state"] = $state;
    $workh_arr[$key]["sdate"] = $country;
    $workh_arr[$key]["desc"] = $desc;
   $ids['uniqid'] = $id;
    $arry = json_encode($workh_arr, JSON_PRETTY_PRINT);
    file_put_contents('edudata.json', $arry);
         header("location: certification?id=".$ids['uniqid']."");
  }

}

if (isset($_POST['temp'])) {
  $id = $_POST['id'];
  $about = $_POST['desc'];
  
$workh = file_get_contents('about.json');
$workh_arr = json_decode($workh,true);
$workh1 = file_get_contents('about.json');
$workh_arr1 = json_decode($workh1,true);
$flag = false;
echo("Ok");
foreach ($workh_arr as $key => $value )
  {
    if ($value['id'] == $id) 
      {
                $flag = true;
                break;
            }
  }
  if (!$flag) {
   $workh_arr1[] = array('id'=>$id, 'desc'=>$about);
   
file_put_contents('about.json', json_encode($workh_arr1, JSON_PRETTY_PRINT));
   $ids['uniqid'] = $id;
         header("location: summary?id=".$ids['uniqid']."");
  }
  if ($flag) {
    $workh_arr[$key]["id"] = $id;
    $workh_arr[$key]["desc"] = $about;
   $ids['uniqid'] = $id;
    $arry = json_encode($workh_arr, JSON_PRETTY_PRINT);
    file_put_contents('about.json', $arry);
         header("location: summary?id=".$ids['uniqid']."");
  }
}


?>
<?php echo @$user->error; ?>
