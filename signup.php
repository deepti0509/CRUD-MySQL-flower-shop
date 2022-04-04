<!DOCTYPE html>
<html>
<meta charset="utf-8">
<?php include('templates/header.php'); ?>

<body>
  <?php
  require('config/db_connect.php');

  // If form submitted, insert values into the database.
  if (isset($_REQUEST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($conn, $username);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $created_at = date("Y-m-d H:i:s");
    $query = "INSERT into `users` (username, password, email, created_at)
VALUES ('$username', '" . md5($password) . "', '$email', '$created_at')";
    $result = mysqli_query($conn, $query);
    if ($result) {
      echo "<div class='form container'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='signin.php'>Login</a></div>";
    }
  } else {
  ?>

    <section class="container grey-text">
      <h4 class="center">Sign Up</h4>
      <form class="white" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="input-field row s6">
          <input required class="validate" id="username" type="text" name="username">
          <label class="active" for="username">Username</label>
        </div>
        <div class="input-field row s6">
          <input required class="validate" id="email" type="text" name="email">
          <label class="active" for="email">Email</label>
        </div>
        <div class="input-field row s6">
          <input required class="validate" id="password" type="password" name="password">
          <label class="active" for="password">Password</label>
        </div>
        <button class="btn brand z-depth-0"> Sign Up </submit>
      </form>

    </section>


  <?php } ?>
</body>

</html>