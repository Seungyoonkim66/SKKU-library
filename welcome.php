<?php
    $host = 'localhost';
    $user = 'root';
    $pw = '';
    $dbName = 'user';
    $mysqli = new mysqli($host, $user, $pw, $dbName);



$id = $_POST['ID'];
$password = $_POST['PASSWORD'];
$name = $_POST['NAME'];
$s_id = $_POST['STUDENT_ID'];

$sql = "insert into users (user_id, password, name, s_id) values ($id, $password, '$name', $s_id) ";
$mysqli->query($sql);
 ?>

<meta charset="utf-8"/>
<script type="text/javascript">
  alert('Complete');
</script>
<html>
<style media="screen">
.container{width: 500px; padding-bottom: 10px; height: 500px;; background-color: #1E90FF}
.container input {margin: 180px; padding: 10px 30px; background-color:white; color: #00BFFF; font-family:sans-serif;}
</style>
<div class="container">
  <input type="button" onClick="location.href = 'http://localhost/login.php';" value="Go to login">
</div>
</html>
