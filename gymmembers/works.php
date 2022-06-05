<?php

include "config.php";

if (!empty($_POST['membership_id']) && !empty($_POST['gym_id'])){
    $membership_id = $_POST['membership_id'];
    $gym_id = $_POST['gym_id'];
    $role = $_POST['role'];
    $wage = $_POST['wage'];

    $sql_statement = "INSERT INTO provides(membership_id, gym_id, role, wage)
    VALUES ($membership_id, $gym_id, '$role', $wage)";



    // echo gettype($year)."\n";
    /*
    $sql_statement_2 = ($type == "Premium") ?
    "INSERT INTO premium_members(name, age, phone_number, price, until, personal_trainer, pool_use)
    VALUES ('$name', $age, '$phone_number', $price, '$until', '$personal_trainer', $pool_use) " :
    "INSERT INTO standard_members(name, age, phone_number, price, until, time_limit)
    VALUES ('$name', $age, '$phone_number', $price, '$until', $time_limit)";

    $member_type = mysqli_query($db, $sql_statement_2); */

      $result = mysqli_query($db, $sql_statement);
      if($result == 1){
        echo "You have successfully signed up.";
      }
      else{
        echo "Your input is not valid!";
      }


}
else
{
    echo "You did not enter the Membership ID or the GYM ID.";
}

?>
