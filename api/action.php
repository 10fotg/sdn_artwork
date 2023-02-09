<?php
  require_once('./db.php');
$input = filter_input_array(INPUT_POST);

$name=mysqli_real_escape_string($stmt,$input['name']);
$img=mysqli_real_escape_string($stmt,$input['img']);
$description=mysqli_real_escape_string($stmt,$input['description']);
$type=mysqli_real_escape_string($stmt,$input['type']);
$filezip=mysqli_real_escape_string($stmt,$input['filezip']);

if($input["action"]=='edit'){
  $query="update sp_product set name='".$name."' , img='".$img."' , description='".$description."', type='".$type."', filezip='".$filezip."' where id='".$input['id']."'";
  mysqli_query($stmt,$query);
}
if($input["action"]=='delete'){
  $query="delete from sp_product where id='".$input['id']."'";
  mysqli_query($stmt,$query);
}
echo json_encode($input);
?>
