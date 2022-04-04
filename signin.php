<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Login</title>
<?php include('templates/header.php'); ?>

<body>
  <?php
  require('config/db_connect.php');
  if (isset($_POST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    //Checking is user existing in the database or not
    $query = "SELECT * FROM `users` WHERE username='$username' and password='" . md5($password) . "'";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
      $_SESSION['username'] = $username;
      $user = mysqli_fetch_assoc($result);
      $_SESSION['userId'] = $user["id"];
      mysqli_free_result($result);
      // Redirect user to index.php
      header("Location: index.php");
    } else {
      $incorrect_password = 1;
    }
  }
  ?>
  <section class="container grey-text">
    <h4 class="center">Login</h4>
    <form class="white" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
      <div class="input-field row s6">
        <input required class="validate" id="username" type="text" name="username">
        <label class="active" for="username">Username</label>
      </div>
      <div class="input-field row s6">
        <input required class="validate" id="password" type="password" name="password">
        <label class="active" for="password">Password</label>
      </div>
      <div class="red-text"><?php if (isset($incorrect_password)) echo "Incorrect username or password" ?></div>
      <button class="btn brand z-depth-0"> Sign in </submit>
    </form>

</body>

</html>