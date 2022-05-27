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

    $year = explode("-",$until)[0];
    $month = isset(explode("-",$until)[1]) ? explode("-",$until)[1] : null;
    $day = isset(explode("-",$until)[2]) ? explode("-",$until)[2] : null;

    if (strlen($year) == 4 and strlen($month) == 2 and strlen($day) == 2){
      $checked_date = checkdate ($month, $day, $year);
    }
    else{
      $checked_date = 0;
    }


    // echo gettype($year)."\n";

    $personal_trainer = ($price % 2 == 1) ? "Angela Merkel" : "Boris Johnson";

    $pool_use = ($price > 500) ? True : False;

    $time_limit = ($price > 100) ? 6 : 1;

    /*
    $sql_statement_2 = ($type == "Premium") ?
    "INSERT INTO premium_members(name, age, phone_number, price, until, personal_trainer, pool_use)
    VALUES ('$name', $age, '$phone_number', $price, '$until', '$personal_trainer', $pool_use) " :
    "INSERT INTO standard_members(name, age, phone_number, price, until, time_limit)
    VALUES ('$name', $age, '$phone_number', $price, '$until', $time_limit)";

    $member_type = mysqli_query($db, $sql_statement_2); */
    if ($checked_date == 0){
      echo "You did not enter proper date.";

    }
    else{
      $result = mysqli_query($db, $sql_statement);
      echo "You have successfully signed up.";
  }

}
else
{
    echo "You did not enter your name.";
}

?>
