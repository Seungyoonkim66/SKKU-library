<?php
    $host = 'localhost';
    $user = 'root';
    $pw = '';
    $dbName = 'book';
    $mysqli = new mysqli($host, $user, $pw, $dbName);


    $bid = $_POST['BOOK_ID'];
    $rid = $_POST['USER_ID'];


    $sql = "insert into reserve (book_id, reserver_id) values ($bid, $rid)";
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
    <th>book_id</th>
    <th>reviewer_id</th>
    <th>despription</th>
  </tr>
</thead>

<tbody>

  <?php
  $host = 'localhost';
  $user = 'root';
  $pw = '';
  $dbName = 'book';
  $mysqli = new mysqli($host, $user, $pw, $dbName);

  $sql = "select * from reserve";
  $result = $mysqli->query($sql);

  while($row=mysqli_fetch_array($result)){
    echo '<tr><td>' . $row['rev_num'] . '</td><td>'. $row['book_id'] . '</td><td>' . $row['reserver_id'] . '</td></tr>';
  }
   ?>
</tbody>
</table>
    </div>

  </body>
</html>
