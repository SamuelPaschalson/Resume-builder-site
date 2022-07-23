<?php
if (isset($_POST['reset'])) {
$id = $_POST['id'];
  $data = file_get_contents('skill.json');

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
file_put_contents('skill.json', json_encode($json_arr));
   $ids['uniqid'] = $id;
         header("location: skills?id=".$ids['uniqid']."");
}

if (isset($_POST['submit'])) {
$id = $_POST['id'];
$number = count($_POST['name']);
$percent = count($_POST['percent']);

$contact = file_get_contents('skill.json');
$contact_arr = json_decode($contact,true);
$contact1 = file_get_contents('skill.json');
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

if ($number > 1) {
  for ($i = 0; $i < $number; $i++) {
  
    if (trim($_POST['name'][$i]) != '') {
        $contact_arr1[] = array('id'=>$id, 'name'=>$_POST["name"][$i], 'percent'=>$_POST["percent"][$i], 'idd'=>$i);
      print_r($_POST["name"][$i]);
      print_r($number);
    }
  
  }
}
file_put_contents('skill.json', json_encode($contact_arr1, JSON_PRETTY_PRINT));
   $ids['uniqid'] = $id;
         header("location: About?id=".$ids['uniqid']."");
}
}