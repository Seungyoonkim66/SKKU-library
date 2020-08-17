

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>book search</title>
     <style>
  body {
    font-family: Consolas, monospace;
    font-family: 12px;
  }
  table {
    width: 100%;
  }
  th, td {
    text-align: center;
    padding: 10px;
    border-bottom: 1px solid #dadada;
  }
</style>
   </head>
   <body>
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

    $key = $_POST['wanted'];
    $sql = "select * from book where title = '$key' or author = '$key'";
    $result = $mysqli->query($sql);

    while($row=mysqli_fetch_array($result)){
      echo '<tr><td>' . $row['book_id'] . '</td><td>'. $row['title'] . '</td><td>' . $row['author'] . '</td><td>' . $row['status'] . '</td><td>'. $row['location'] . '</td></tr>';
    }
     ?>
  </tbody>
</table>


   </body>
 </html>
