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

    $type = ($price > 200) ? "Premium" : 'Standard';

    $personal_trainer = ($price % 2 == 1) ? "Angela Merkel" : "Boris Johnson";

    $pool_use = ($price > 500) ? True : False;

    $time_limit = ($price > 100) ? 6 : 1;

    $result = mysqli_query($db, $sql_statement);
    /*
    $sql_statement_2 = ($type == "Premium") ?
    "INSERT INTO premium_members(name, age, phone_number, price, until, personal_trainer, pool_use)
    VALUES ('$name', $age, '$phone_number', $price, '$until', '$personal_trainer', $pool_use) " :
    "INSERT INTO standard_members(name, age, phone_number, price, until, time_limit)
    VALUES ('$name', $age, '$phone_number', $price, '$until', $time_limit)";

    $member_type = mysqli_query($db, $sql_statement_2); */
    echo "You have successfully signed up.";

}
else
{
    echo "You did not enter your name.";
}

?>
