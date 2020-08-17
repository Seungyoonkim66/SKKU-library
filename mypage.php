<?php
$host = 'localhost';
$user = 'root';
$pw = '';
$dbName = 'user';
$mysqli = new mysqli($host, $user, $pw, $dbName);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    .info{font-family: sans-serif; font-size: 12px; padding: 5px;}
    .info input {font-family: sans-serif; font-size: 12px;}
    .info table{width: 970px;}
    .info td {text-align: center; padding: 10px; border-bottom: 1px solid #dadada;}
    </style>
  </head>
  <body>
    <table>
 <thead>
   <tr>
     <th>user_id</th>
     <th>password</th>
     <th>name</th>
     <th>student_id</th>
   </tr>
 </thead>
 <tbody>

   <?php
   $host = 'localhost';
   $user = 'root';
   $pw = '';
   $dbName = 'user';
   $mysqli = new mysqli($host, $user, $pw, $dbName);

   $key = $_POST['wanted'];
   $sql = "select * from users where user_id = ";
   $result = $mysqli->query($sql);

   while($row=mysqli_fetch_array($result)){
     echo '<tr><td>' . $row['user_id'] . '</td><td>'. $row['password'] . '</td><td>' . $row['name'] . '</td><td>' . $row['s_id'] . '</td></tr>';
   }
    ?>
 </tbody>
</table>

  </body>
</html>
