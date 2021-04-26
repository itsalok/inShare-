<!doctype html>
<html lang="en">

<head>
  <title>inShare - A file sharing website</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Assets/css/signup.css">
</head>

<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top">
      <a class="navbar-brand" href="#">
        <img src="Assets/image/logo.png" width="170" height="60" class="d-inline-block align-top" alt="">
      </a>
    </nav>
    <section>
      <div class="container mt-5">
        <div class="user signinBx">
          <div class="imgBx"><img src="Assets/image/a0cd4b6aa3a8c007cc2c2f52d80d8921.png" alt="" /></div>
          <div class="formBx">
            <form action="signup.php" method="post">
              <h2>Sign In</h2>
              <input type="email" name="email" placeholder="Email Address" />
              <input type="password" name="password" placeholder="Password" />
              <input type="submit" name="login" value="Login" />
              <p class="signup">
                Don't have an account ?
                <a href="#" onclick="toggleForm();">Sign Up.</a>
              </p>
            </form>
          </div>
        </div>
        <div class="user signupBx">
          <div class="formBx">
            <form action="signup.php" method="post">
              <h2>Create an account</h2>
              <input type="text" name="username" placeholder="Username" required />
              <input type="email" name="user-email" placeholder="Email Address" required />
              <input type="password" name="password" placeholder="Create Password" required />
              <input type="password" name="conn-password" placeholder="Confirm Password" required />
              <input type="submit" name="submit" value="Sign Up" />
              <p class="signup">
                Already have an account ?
                <a href="#" onclick="toggleForm();">Sign in.</a>
              </p>
            </form>
          </div>
          <div class="imgBx"><img src="Assets/image/de910eba39f3d84c2face5d2f501ce0b.png" alt="" /></div>
        </div>
      </div>
    </section>
  </div>
  <!-- Optional JavaScript -->
  <script>
    const toggleForm = () => {
      const container = document.querySelector('.container');
      container.classList.toggle('active');
    };
  </script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>





<!--------PHP SIGNUP QUERY------->
<?php require_once "database.php" ?>
<?php
if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $email = $_POST["user-email"];
  $password = $_POST["password"];
  $conf_password = $_POST["conn-password"];

  if ($password == $conf_password) {
    $re_enter = "SELECT * from user_signup where email='$email'";
    $result = mysqli_query($con, $re_enter);
    if (mysqli_fetch_assoc($result)) {
      print "<script>
                                        Swal.fire(
                                            'Ops!',
                                            'Wrong Password!',
                                            'error'
                                          )
                                        </script>";
    } else {
      $sql = "INSERT into user_signup(username,email,password) values('$username','$email','$password')";
      mysqli_query($con, $sql);
      print "<script>
                                        Swal.fire(
                                            'Thank You!',
                                            'You have Registered with us!',
                                            'success'
                                          )
                                        </script>";
    }
  } else {
    echo "<script>alert('Password doesn't match')</script>";
  }
}

?>

<!-----PHP LOGIN QUERY-------->

<?php
if (isset($_POST["login"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  if ($con == true) {
    $check = "SELECT * from user_signup where email='$email' AND password='$password'";
    $result = mysqli_query($con, $check);
    if (mysqli_fetch_assoc($result)) {
      session_start();
      $_SESSION["uname"] = $email;
      header('location:welcome.php');
    } else {
      print "<script>
                                        Swal.fire(
                                            'Ops!',
                                            'Email or Password wrong!',
                                            'error'
                                          )
                                        </script>";
    }
  } else {
    mysqli_connect_error();
  }
}


?>