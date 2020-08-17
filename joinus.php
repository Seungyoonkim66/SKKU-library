<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
    .form{ width: 600px; padding-bottom: 10px; height: auto; background-color: #1E90FF}
    .form h1{color: white; font-family:sans-serif; margin-left: 10px; padding: 30px; text-shadow: 4px 2px gray; }
    .form h4{color: white; font-family:sans-serif; }
    .form fieldset{width:500px; margin-left: 20px; margin-bottom: 20px; padding: 10px;}
    .form td{color: white; font-family:sans-serif;};
    </style>
    <meta charset="utf-8">
    <title>join us</title>
  </head>
  <body>
    <form class="form" action="welcome.php" method="post">
      <h1>Please fill out the form to JOIN US</h1>
      <fieldset>
        <legend> <h4>FORM</h4> </legend>
        <table>
          <tr>
            <td>ID</td>
            <td> <input type="text" name="ID" size="35" placeholder="ID"> </td>
          </tr>
          <tr>
            <td>PASSWORD</td>
            <td> <input type="text" name="PASSWORD" size="35" placeholder="PASSWORD"> </td>
          </tr>
          <tr>
            <td>NAME</td>
            <td> <input type="text" name="NAME" size="35" placeholder="NAME"> </td>
          </tr>
          <tr>
            <td>STUDENT ID</td>
            <td> <input type="text" name="STUDENT_ID" size="35" placeholder="STUDENT_ID"> </td>
          </tr>
        </table>
        <br>
        <input type="submit" name="SUBMIT" value="SUBMIT" class="submitbtn">
      </fieldset>

    </form>

  </body>
</html>
