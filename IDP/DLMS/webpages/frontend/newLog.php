<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- References -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
    <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/64d58efce2.js"crossorigin="anonymous"></script>


    <title>Log In DLMS</title>
  </head>
  <body>

    <header>
      <div class="container">
        <img src="assets/DLMS-logo.png" alt="logo" class="logo">

        <nav>
          <ul>
            <li> <a href="home.php" > Home </a> </li>
            <li> <a href="logIn.php" style="color: #000"> Log in </a> </li>
            <li> <a href="help.php"> help </a> </li>
            <li> <a href="about.php"> About </a> </li>
          </ul>
        </nav>

      </div>
    </header>

    <div class="cont">
      <div class="forms-container">
        <div class="signin-signup">

          <form class="sign-up-form" action="" method="post">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" placeholder="Email" name="email">
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass">
            </div>
            <input type="submit" value="Log in" class="btn solid">
          </form>
          <form class="" action="home.php" method="">
          <button class="btn solid" id="back">Home</button>
        </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel right-panel">
          <div class="content">
            <h3>Dont have any?</h3>
            <p>Lets make a new one</p>
            <form class="" action="register.php" method="">
            <button class="btn transperant" id="sign-in-btn">Register</button>
          </form>
          </div>
        </div>
      </div>
    </div>










  </body>
</html>
