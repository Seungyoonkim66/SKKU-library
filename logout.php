<?php
session_start();
$result=session_destroy();
if($result){
  header('location:http://localhost/index.php');
}
 ?>
