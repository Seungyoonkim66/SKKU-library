<?php
    $host = 'localhost';
    $user = 'root';
    $pw = '';
    $dbName = 'book';
    $mysqli = new mysqli($host, $user, $pw, $dbName);



$bid = $_POST['BOOK_ID'];
$rid = $_POST['REVIEWER_ID'];
$dpt = $_POST['DESCRIPTION'];

$sql = "insert into review (book_id, reviewer_id, content) values ($bid, $rid, '$dpt')";
$mysqli->query($sql);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <style>
     .form{ width: 970px; padding-bottom: 10px; height: auto; background-color: #1E90FF}
     .form h1{color: white; font-family:sans-serif; margin-left: 10px; padding: 30px; text-shadow: 4px 2px gray; }
     .form h4{color: white; font-family:sans-serif; }
     .form fieldset{width:870px; margin-left: 20px; margin-bottom: 20px; padding: 10px;}
     .form td{color: white; font-family:sans-serif;};
     </style>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="form" action="reviewdb.php" method="post">
       <h1>BOOK REVIEW</h1>
       <div class="add">
         <fieldset>
           <table>
             <tr>
               <td>BOOK_ID</td>
               <td> <input type="text" name="BOOK_ID" size="35" placeholder="BOOK_ID"> </td>
             </tr>
             <tr>
               <td>REVIEWER_ID</td>
               <td> <input type="text" name="REVIEWER_ID" size="35" placeholder="REVIEWER_ID"> </td>
             </tr>
             <tr>
               <td>DESCRIPTION</td>
               <td><input type="text" name="DESCRIPTION" size="120" placeholder="Write about the book."></td>
             </tr>
           </table>
           <br>
           <input type="submit" name="SUBMIT" value="SUBMIT" class="submitbtn">
         </fieldset>
       </div>

     </form>

   </body>
 </html>

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

   $sql = "select * from review";
   $result = $mysqli->query($sql);

   while($row=mysqli_fetch_array($result)){
     echo '<tr><td>' . $row['book_id'] . '</td><td>'. $row['reviewer_id'] . '</td><td>' . $row['content'] . '</td></tr>';
   }
    ?>
 </tbody>
 </table>
     </div>
 <input type="button" value="back" onclick="location.href='http://localhost/indexfor1.php'">

   </body>
 </html>
