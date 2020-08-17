<?php
    $host = 'localhost';
    $user = 'root';
    $pw = '';
    $dbName = 'user';
    $mysqli = new mysqli($host, $user, $pw, $dbName);


    $rnum = $_POST['ROOM_NUM'];
    $rid = $_POST['RESERVER_ID'];


    $sql = "insert into sr_reserve (room_num, reserver_id) values ($rnum, $rid)";
    $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
    .revlist{font-family: sans-serif; font-size: 12px; padding: 5px;}
    .revlist input {font-family: sans-serif; font-size: 12px;}
    .revlist table{width: 970px;}
    .revlist td {text-align: center; padding: 10px; border-bottom: 1px solid #dadada;}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="revlist">
<table>
<thead>
  <tr>
    <th>room_num</th>
    <th>reserver_id</th>
  </tr>
</thead>

<tbody>

  <?php
  $host = 'localhost';
  $user = 'root';
  $pw = '';
  $dbName = 'user';
  $mysqli = new mysqli($host, $user, $pw, $dbName);

  $sql = "select * from sr_reserve";
  $result = $mysqli->query($sql);

  while($row=mysqli_fetch_array($result)){
    echo '<tr><td>' . $row['room_num'] . '</td><td>'. $row['reserver_id'] . '</td></tr>';
  }
   ?>
</tbody>
</table>
    </div>

  </body>
</html>
