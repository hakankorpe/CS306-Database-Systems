
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title>LOGIN</title>
    <style>
    body {
    background-color: #f2f2f2;
    margin: 0;
    text-align: center;
    font-family: 'Merriweather', serif;
    }
    input[type=text], select {
      font-family: 'Merriweather', serif;
      width: 23rem;
      padding: 12px 20px;
      margin: 0.1rem 0;
      display: inline-block;
      border: 1px solid #ccc;
      text-align:center;
      background-color: #66BFBF;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 100%;
      background-color: #66BFBF;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #66BFBF;
    }
    h3 {
  color: #6A5ACD;
  font-family: 'Montserrat', sans-serif;
}
h4 {
  display:inline-block;
color: #11999E;
font-family: 'Montserrat', sans-serif;
}
    .button2 {
      background-color: #66BFBF;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      font-family: 'Montserrat', sans-serif;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 15px 2px;
      cursor: pointer;
      } /* Blue */
      .btn {
  background: #11cdd4;
  background-image: -webkit-linear-gradient(top, #11cdd4, #11999e);
  background-image: -moz-linear-gradient(top, #11cdd4, #11999e);
  background-image: -ms-linear-gradient(top, #11cdd4, #11999e);
  background-image: -o-linear-gradient(top, #11cdd4, #11999e);
  background-image: linear-gradient(to bottom, #11cdd4, #11999e);
  -webkit-border-radius: 8;
  -moz-border-radius: 8;
  border-radius: 8px;
  font-family: 'Montserrat', sans-serif;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.button2:hover {
  background: #6A5ACD;
  background-image: -webkit-linear-gradient(top, #6A5ACD, #2F4F4F);
  background-image: -moz-linear-gradient(top, #6A5ACD, #2F4F4F);
  background-image: -ms-linear-gradient(top, #6A5ACD, #2F4F4F);
  background-image: -o-linear-gradient(top, #6A5ACD, #2F4F4F);
  background-image: linear-gradient(to bottom, #6A5ACD, #2F4F4F);
  text-decoration: none;
}

    div {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
    .inserting-member {
      background-color: #E4F9F5;
      text-align: center;

  }
    </style>
  </head>
  <body>
    <div class="login">
        <form action="login_validator.php" method="POST">
          <h2>LOGIN</h2>

          <?php if (isset($_GET['error'])) { ?>

              <p class="error"><?php echo $_GET['error']; ?></p>

          <?php } ?>
            <h3>Username:</h3>
            <input type="text" id="username" name="username"> <br>
            <h3>Password:</h3>
            <input type="password" id="password" name="password"> <br>
            <button class="button2">SUBMIT</button>

        </form>
    </form>
    </div>
    <a href="http://localhost/gymmembers/index.php">
   <button>Go to main page</button>
  </a>
  </body>
</html>
