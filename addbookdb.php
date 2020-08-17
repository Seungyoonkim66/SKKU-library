<?php
      $host = 'localhost';
      $user = 'root';
      $pw = '';
      $dbName = 'book';
      $mysqli = new mysqli($host, $user, $pw, $dbName);



  $bid = $_POST['BOOK_ID'];
  $title = $_POST['TITLE'];
  $author = $_POST['AUTHOR'];
  $location = $_POST['LOCATION'];

  $sql = "insert into book (book_id, title, author, location) values ($bid, '$title', '$author', $location)";
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
       <form class="form" action="addbook.php" method="post">
         <h1>ADD BOOK</h1>
         <div class="add">
           <fieldset>
             <table>
               <tr>
                 <td>BOOK_ID</td>
                 <td> <input type="text" name="BOOK_ID" size="35" placeholder="BOOK_ID"> </td>
               </tr>
               <tr>
                 <td>TITLE</td>
                 <td> <input type="text" name="TITLE" size="35" placeholder="TITLE"> </td>
               </tr>
               <tr>
                 <td>AUTHOR</td>
                 <td><input type="text" name="AUTHOR" size="35" placeholder="AUTHOR"></td>
               </tr>
               <tr>
                 <td>LOCATION</td>
                 <td><input type="text" name="LOCATION" size="35" placeholder="LOCATION"></td>
               </tr>
             </table>
             <br>
             <input type="submit" name="ADD" value="ADD">
           </fieldset>
         </div>

       </form>

     </body>
   </html>

   <!DOCTYPE html>
   <html lang="en" dir="ltr">
     <head>
       <style>
       .list{font-family: sans-serif; font-size: 12px; padding: 5px;}
       .list input {font-family: sans-serif; font-size: 12px;}
       .list table{width: 970px;}
       .list td {text-align: center; padding: 10px; border-bottom: 1px solid #dadada;}
       </style>
       <meta charset="utf-8">
       <title></title>
     </head>
     <body>
       <div class="list">
   <table>
   <thead>
     <tr>
       <th>book_id</th>
       <th>title</th>
       <th>author</th>
       <th>location</th>
     </tr>
   </thead>

   <tbody>
     <?php
     $host = 'localhost';
     $user = 'root';
     $pw = '';
     $dbName = 'book';
     $mysqli = new mysqli($host, $user, $pw, $dbName);

     $sql = "select book_id, title, author, location from book";
     $result = $mysqli->query($sql);

     while($row=mysqli_fetch_array($result)){
       echo '<tr><td>' . $row['book_id'] . '</td><td>'. $row['title'] . '</td><td>' . $row['author'] . '</td><td>' . $row['location'] . '</td></tr>';
     }
      ?>

   </tbody>
   </table>
       </div>

     </body>
   </html>
