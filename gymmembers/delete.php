<?php

include "config.php";

if(!empty($_POST['ids']))
{
    $membership_id= $_POST['ids'];
    $sql_statement = "DELETE FROM Members WHERE membership_id = $membership_id";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

if(!empty($_POST['gym_ids']))
{
    $gym_id= $_POST['gym_ids'];
    $sql_statement = "DELETE FROM GYM WHERE gym_id = $gym_id";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>
