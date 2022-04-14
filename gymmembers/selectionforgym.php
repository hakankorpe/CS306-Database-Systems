<?php

include "config.php";

if (!empty($_POST['rating'])){
    $rating = $_POST['rating'];

    $sql_statement = "SELECT gym_id, gym_name FROM GYM WHERE rating > $rating";
    $list = array();

    $result = mysqli_query($db, $sql_statement);
    while ($row = mysqli_fetch_assoc($result)) {
      array_push($list, $row["gym_name"]);
      //echo "Selected gym names are: " . $row["gym_name"];
}
    echo "Selected gym names are: ";
    $size_of_criteria = sizeof($list);
    echo " " . $size_of_criteria;
    while ($size_of_criteria > 0){
      echo " " . $list[$size_of_criteria-1];
      $size_of_criteria = $size_of_criteria - 1;
  }
}
else
{
    echo "You did not enter any selection criteria.";
}

?>
