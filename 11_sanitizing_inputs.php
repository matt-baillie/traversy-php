<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/
if (isset($_POST['submit'])) {

  // Multiple ways of sanitizing inputs**
  // htmlspecialchars(variable)
  // $name = htmlspecialchars($_POST['name']);
  // $age = htmlspecialchars($_POST['age']);

  // *** Preferred: filter_input(request-type, input-name, sanitation-rule)
  // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

  // filter_var(variable, sanitation-rule)
  $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
  $age = filter_var($_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS);
  echo $name . ' ' . $age;
}
?>


<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
  <div>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
  </div>
  <div>
    <label for="age">Age:</label>
    <input type="text" id="age" name="age">
  </div>
  <input type="submit" value="Submit" name="submit">


</form>