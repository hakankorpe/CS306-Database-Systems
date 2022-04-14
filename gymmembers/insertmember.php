<?php

include "config.php";

if (!empty($_POST['name'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone_number = $_POST['phone_number'];
    $price = $_POST['price'];
    $until = $_POST['until'];

    $sql_statement = "INSERT INTO Members(name, age, phone_number, price, until)
    VALUES ('$name', $age, '$phone_number', $price, '$until')";

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
}
else
{
    echo "You did not enter your name.";
}

?>
