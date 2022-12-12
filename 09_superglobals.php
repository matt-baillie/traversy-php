<?php
/* ---------- Superglobals ---------- */
/*
  Built in variables that are always available in all scopes
*/

/*
  $GLOBALS - A superglobal variable that holds information about any variables in global scope.
  $_GET - Contains information about variables passed through a URL or a form.

  $_POST -  Contains information about variables passed through a form.
  $_COOKIE - Contains information about variables passed through a cookie.
  $_SESSION - Contains information about variables passed through a session.
  $_SERVER - Contains information about the server environment.
  $_ENV - Contains information about the environment variables.
  $_FILES -  Contains information about files uploaded to the script.
  $_REQUEST - Contains information about variables passed through the form or URL.
*/
// var_dump($_SERVER);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>$_SERVER</h2>
  <?php
  foreach ($_SERVER as $key => $value) {
    echo "<li>
    ${key} - ${value} <br>
    </li>";
  }
  ?>

</body>

</html>