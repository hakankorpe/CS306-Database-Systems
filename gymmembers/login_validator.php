<?php

session_start();

include "config.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $username = validate($_POST['username']);

    $pass = validate($_POST['password']);

    if (empty($username)) {

        header("Location: login.php?error=Username is required");

        exit();

    }else if(empty($pass)){

        header("Location: login.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM login_data WHERE username='$username' AND password='$pass'";

        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);


            if ($row['username'] === $username && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['user_id'] = $row['user_id'];

                header("Location: home.php");

                exit();

            }else{

                header("Location: login.php?error=Incorrect Username or password");

                exit();

            }

        }else{

            header("Location: login.php?error=Incorrect Username or password");

            exit();

        }

    }

}else{

    header("Location: login_validator.php");

    exit();

}
