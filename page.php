<!DOCTYPE html>
<?php
$stmt = mysqli_connect("localhost", "root", "", "sdn_artwork");
$query = "SELECT * FROM sp_product ORDER BY id asc";



$result = mysqli_query($stmt, $query);
$tab_menu = '';
$tab_content = '';
$i = 0;
while($row = mysqli_fetch_array($result))
{
 if($i == 0)
 {
  $tab_menu .= '
   <li class="active"><a href="#'.$row["id"].'" data-toggle="tab">'.$row["name"].'</a></li>
  ';
  $tab_content .= '
   <div id="'.$row["id"].'" class="tab-pane fade in active">
  ';
 }else{
  $tab_menu .= '
   <li><a href="#'.$row["id"].'" data-toggle="tab">'.$row["name"].'</a></li>
  ';
  $tab_content .= '
   <div id="'.$row["id"].'" class="tab-pane fade">
  ';
 }
 $product_query = "SELECT * FROM sp_product WHERE id = '".$row["img"]."'";
 $product_result = mysqli_query($stmt, $query);
 while($row = mysqli_fetch_array($result))
 {
  $tab_content .= '
  <div class="col-md-4">
   <img src=".imgs/'.$row["img"].'" width="300px" height="250px" class="img-responsive img-thumbnail" />
   <h4>'.$row["name"].'</h4>
  </div>
  ';
 }
 $tab_content .= '<div style="clear:both"></div></div>';
 $i++;
}

?>
<html>
 <head>
  <title>Dynamic Product</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">
       <h2 align="center">Dynamic Tab - Dynamic Product</a></h2>
       <br />
       <ul class="nav nav-tabs">
         <?php  echo $tab_menu; ?>
       </ul>
       <div class="tab-content">
       <br />
       <?php  echo $tab_content; ?>
       </div>
      </div>
 </body>
</html>
