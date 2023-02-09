<!DOCTYPE html>
<?php
$stmt = mysqli_connect("localhost", "root", "", "sdn_artwork");
$query = "SELECT * FROM sp_product ORDER BY id asc";
$result = mysqli_query($stmt, $query);
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Tabledit-JQuery PHP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="jquery.tabledit.js"></script>
  </head>
  <body>
    <br/><br/>
      <div class="container">
        <h2 >SDN/Artwork</h2>
        <table id="edit_table" class="table table-bordered">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Img</th>
                  <th>Description</th>
                  <th>Type</th>
                  <th>File</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  while ($row=mysqli_fetch_array($result)) {
                    echo '<tr>
                              <td>'.$row['id'].'</td>
                              <td>'.$row['name'].'</td>
                              <td>'.$row['img'].'</td>
                              <td>'.$row['description'].'</td>
                              <td>'.$row['type'].'</td>
                              <td>'.$row['filezip'].'</td>
                          </tr>';
                  }
                ?>
              </tbody>
        </table>
  </div>

  <script type="text/javascript">
        $(document).ready(function(){
            $('#edit_table').Tabledit({
                  url:'../api/action.php',
                  columns:{
                    identifier:[0,"id"],
                    editable:[[1,'name'],[2,'img'],[3,'description'],[4,'type'],[5,'filezip']]
                  },
                  onSuccess:function(data,textStatus,jqXHR){
                    if(data.action=='delete'){
                      $('#'+data.student_id).remove();
                    }
                  }
                });
          });
  </script>
  </body>
</html>
