<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
    .form{ width: 600px; padding-bottom: 10px; height: auto; background-color: #1E90FF}
    .form h1{color: white; font-family:sans-serif; margin-left: 10px; padding: 30px; text-shadow: 4px 2px gray; }
    .form h4{color: white; font-family:sans-serif; }
    .form fieldset{width:500px; margin-left: 20px; margin-bottom: 20px; padding: 10px;}
    .form td{color: white; font-family:sans-serif;}
    </style>
    <meta charset="utf-8">
    <title>login</title>
  </head>
  <body>
    <form class="form" action="welcome2.php" method="post">
      <h1>LOGIN</h1>
      <fieldset>
        <table>
          <tr>
            <td>ID</td>
            <td> <input type="text" name="ID" size="35" placeholder="ID"> </td>
          </tr>
          <tr>
            <td>PASSWORD</td>
            <td> <input type="text" name="PASSWORD" size="35" placeholder="PASSWORD"> </td>
          </tr>
        </table>
        <br>
        <input type="submit" name="LOGIN" value="LOGIN" >
      </fieldset>
    </form>

  </body>
</html>
