<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
    .book_list{font-family: sans-serif; font-size: 12px; padding: 5px;}
    .book_list input {font-family: sans-serif; font-size: 12px;}
    .book_list table{width: 970px;}
    .book_list td {text-align: center; padding: 10px; border-bottom: 1px solid #dadada;}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="book_list">
<table>
<thead>
  <tr>
    <th>book_id</th>
    <th>title</th>
    <th>author</th>
    <th>status</th>
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

  $sql = "select * from book";
  $result = $mysqli->query($sql);

  while($row=mysqli_fetch_array($result)){
    echo '<tr><td>' . $row['book_id'] . '</td><td>'. $row['title'] . '</td><td>' . $row['author'] . '</td><td>' . $row['status'] . '</td><td>'. $row['location'] . '</td></tr>';
  }
   ?>
</tbody>
</table>
<p>*status = 1 means book available, 0 means book unavailable</p>
    </div>
<input type="button" value="back" onclick="location.href='http://localhost/indexfor1.php'">
<input type="button" value="add" onclick="location.href='http://localhost/addbook.php'">
  </body>
</html>
