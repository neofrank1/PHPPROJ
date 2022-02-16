<?php
session_start();
?>

<!DOCTYPE html>

<?php

include("config.php");

if (isset($_POST['login'])) {
    $user_name = $_POST['username'];
    $user_pass = $_POST['password'];
    $user_admin = "admin";
    $admin_pass = "admin";

    $password = hash('sha1',$user_pass);

    $sql = "SELECT * FROM ADOPTER WHERE ado_user = '$user_name' AND ado_pass = '$password'";
    $result = mysqli_query($conn,$sql);
    $sql2 = "SELECT * FROM STAFF WHERE staff_user = '$user_name' AND staff_pass = '$password'";
    $result2 = mysqli_query($conn,$sql2);
   
    if ($user_name == $user_admin && $user_pass == $admin_pass)
    {
      echo "<script>alert('Welcome Admin')</script>";
      $_SESSION['username'] = $user_name;
      header("Location: adminhome.php");
    }
    else if (mysqli_num_rows($result))
    {
      echo "<script>alert('Welcome User')</script>";
      $_SESSION['username'] = $user_name;
      header("Location: home.php");
    }
    else if (mysqli_num_rows($result2))
    {
        echo "<script>alert('Welcome Staff')</script>";
        $_SESSION['username'] = $user_name;
        header("Location: staff.php");
    }
    else
    {
        echo '<div class="alert alert-warning" role="alert"><em>Incorrect Username or Password</em></div>';
    }
}

?>

<html>

<head>
  <!-------- BOOTSTRAP FRAMEWORK ------->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
  <style>
    body {
      font-family: "Open Sans", sans-serif;
    }
  </style>

  <!-----------BOOTSTRAP JAVA SCRIPT---------------------->
  <script src="js/bootstrap.bundle.js"></script>
  <title>Login</title>
</head>

<body style="background-color: aquamarine;">
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <form action="login.php" method="POST" class="border shadow p-3 rounded bg-light">
      <div class="row justify-content-center">
        <h1 class="text-center p-3">LOGIN</h1>
        <div class="col mb-3">
          <label for="Username" class="form-label text-dark">Username</label>
          <input class="form-control" type="text" name="username" id="username">
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col mb-3">
          <label for="Username" class="form-label text-dark">Password</label>
          <input class="form-control" type="password" name="password" id="password">
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col mb-3">
          <p>No Account Yet? <a href="signup.php">Sign Up</a></p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col mb-3">
          <button class="btn btn-success" name="login">Login</button>
          <a href="index.php" id="back" class="btn btn-danger">Back</a>
        </div>
      </div>
    </form>
  </div>
</body>

</html>