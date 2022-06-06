<?php

session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body>

     <h2>Hello, <?php echo $_SESSION['username']; ?></h2>
     <a href="logout.php"><button>Logout</button></a>
     <a href="http://localhost/gymmembers/index.php">
     <button>Main Page</button>
     </a>


</body>

</html>

<?php

}else{

     header("Location: login.php");

     exit();

}

 ?>
