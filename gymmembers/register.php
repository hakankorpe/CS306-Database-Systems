<?php

include "config.php";

if ((!empty($_POST['username'])) && (!empty($_POST['password']))){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_statement = "INSERT INTO login_data(username, password)
    VALUES ('$username','$password')";



    /*
    $sql_statement_2 = ($type == "Premium") ?
    "INSERT INTO premium_members(name, age, phone_number, price, until, personal_trainer, pool_use)
    VALUES ('$name', $age, '$phone_number', $price, '$until', '$personal_trainer', $pool_use) " :
    "INSERT INTO standard_members(name, age, phone_number, price, until, time_limit)
    VALUES ('$name', $age, '$phone_number', $price, '$until', $time_limit)";

    $member_type = mysqli_query($db, $sql_statement_2); */

    $result = mysqli_query($db, $sql_statement);
    echo "You have successfully registered.";


}
else
{
    echo "You did not enter your username or password.";
}

?>
