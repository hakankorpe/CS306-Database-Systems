<?php

include "config.php";

if(!empty($_POST['ids']))
{
    $membership_id= $_POST['ids'];
    $sql_statement = "DELETE FROM Members WHERE membership_id = $membership_id";
    $result = mysqli_query($db, $sql_statement);
    if($result == 1){
      echo "Your have successfully deleted the member. ";
    }
    else{
      echo "Your attempt deleting the member is failed. ";
    }
}

if(!empty($_POST['gym_ids']))
{
    $gym_id= $_POST['gym_ids'];
    $sql_statement = "DELETE FROM GYM WHERE gym_id = $gym_id";
    $result = mysqli_query($db, $sql_statement);
    if($result == 1){
      echo "Your have successfully deleted the GYM. ";
    }
    else{
      echo "Your attempt deleting the GYM is failed. ";
    }
}

?>
