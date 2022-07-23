<?php
if (isset($_POST['reset'])) {
$id = $_POST['id'];
  $data = file_get_contents('cert.json');

// decode json to associative array
$json_arr = json_decode($data, true);

// get array index to delete
$arr_index = array();
foreach ($json_arr as $key => $value)
{
    if ($value['id'] == $id)
    {
        $arr_index[] = $key;
    }
}

// delete data
foreach ($arr_index as $i)
{
    unset($json_arr[$i]);
}

// rebase array
$json_arr = array_values($json_arr);

// encode array to json and save to file
file_put_contents('cert.json', json_encode($json_arr));
   $ids['uniqid'] = $id;
         header("location: certification.php?id=".$ids['uniqid']."");
}

if (isset($_POST['submit'])) {
$id = $_POST['id'];
$cert = count($_POST['cert']);

$contact = file_get_contents('cert.json');
$contact_arr = json_decode($contact,true);
$contact1 = file_get_contents('cert.json');
$contact_arr1 = json_decode($contact1,true);
$flag = false;
echo("Ok");
foreach ($contact_arr as $key => $value )
  {
    if ($value['id'] == $id) 
      {
                $flag = true;
                break;
            }echo('Kkkk');
  }



  if (!$flag) {

if ($cert > 1) {
  for ($i = 0; $i < $cert; $i++) {
  
    if (trim($_POST['cert'][$i]) != '') {
        $contact_arr1[] = array('id'=>$id, 'cert'=>$_POST["cert"][$i], 'cert'=>$_POST["cert"][$i], 'idd'=>$i);
      print_r($_POST["cert"][$i]);
      print_r($cert);
    }
  
  }
}
   $ids['uniqid'] = $id;
file_put_contents('cert.json', json_encode($contact_arr1, JSON_PRETTY_PRINT));
         header("location: skills.php?id=".$ids['uniqid']."");
}
}