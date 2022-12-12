<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/
if (isset($_POST['submit'])) {


  // *** Preferred: filter_input(request-type, input-name, sanitation-rule)
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

  $password = $_POST['password'];

  if ($username == 'john' && $password == 'password') {
    $_SESSION['username'] = $username;
    header('Location: /traversy-php/extras/dashboard.php');
  } else {
    echo "Not a valid username or password";
  };
}
?>


<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
  <div>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
  </div>
  <div>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
  </div>
  <input type="submit" value="Submit" name="submit">


</form>