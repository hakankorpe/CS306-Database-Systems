<?php

include "config.php";

if (!empty($_POST['membership_id']) && !empty($_POST['gym_id'])){
    $membership_id = $_POST['membership_id'];
    $gym_id = $_POST['gym_id'];
    $since = $_POST['since'];

    $sql_statement = "INSERT INTO joined(membership_id, gym_id, since)
    VALUES ($membership_id, $gym_id, '$since')";

    $year = explode("-",$since)[0];
    $month = isset(explode("-",$since)[1]) ? explode("-",$since)[1] : null;
    $day = isset(explode("-",$since)[2]) ? explode("-",$since)[2] : null;

    if (strlen($year) == 4 and strlen($month) == 2 and strlen($day) == 2){
      $checked_date = checkdate ($month, $day, $year);
    }
    else{
      $checked_date = 0;
    }


    // echo gettype($year)."\n";
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
      if($result == 1){
        echo "You have successfully signed up.";
      }
      else{
        echo "Your input is not valid!";
      }
  }

}
else
{
    echo "You did not enter the Membership ID or the GYM ID.";
}

?>
