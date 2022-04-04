<?php

session_start();

$name = $_SESSION['username'] ?? 'Guest';


?>

<head>
  <title>Metanoia Flowers</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <link rel="stylesheet" href="./styles.css">

</head>

<body class="grey lighten-4">
  <nav class="white z-depth-0">
    <div class="container">
      <a href="index.php" class="brand-logo brand-text">FLOWERS!!</a>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li class="grey-text">Hello <?php echo htmlspecialchars($name); ?></li>


        <?php if (isset($_SESSION['username'])) { ?>
          <li><a href="add.php" class="btn brand z-depth-0">Add a Flower</a></li>
          <li><a href="signout.php" class="btn brand z-depth-0">Sign out</a></li>
        <?php } else { ?>
          <li><a href="signin.php" class="btn brand z-depth-0">Sign in</a></li>
          <li><a href="signup.php" class="btn brand z-depth-0">Sign up</a></li>
        <?php } ?>

      </ul>
    </div>
  </nav>