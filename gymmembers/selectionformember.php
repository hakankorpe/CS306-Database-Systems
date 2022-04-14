<?php

include "config.php";

if (!empty($_POST['age'])){
    $age = $_POST['age'];

    $sql_statement = "SELECT membership_id, name FROM Members WHERE age > $age";
    $list = array();

    $result = mysqli_query($db, $sql_statement);
    while ($row = mysqli_fetch_assoc($result)) {
      array_push($list, $row["name"]);
      //echo "Selected gym names are: " . $row["gym_name"];
}
    echo "Selected members that their age is bigger than" . $age . " are: ";
    $size_of_criteria = sizeof($list);
    echo " " . $size_of_criteria;
    while ($size_of_criteria > 0){
      while ($size_of_criteria > 1){

        echo " " . $list[$size_of_criteria-1] . ",";
        $size_of_criteria = $size_of_criteria - 1;
    }
      echo " " . $list[$size_of_criteria-1];
      $size_of_criteria = $size_of_criteria - 1;
  }
}

else
{
    echo "You did not enter any selection criteria.";
}

?>
