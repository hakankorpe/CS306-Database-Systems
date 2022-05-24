<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title>
    </title>
    <style>
    body {
      color: #40514E;
      margin: 0;
      text-align: center;
      font-family: 'Merriweather', serif;
      background-color: white;
    }
    #selection_rating_output {
      color: #11999E;
      font-size: 1.5rem;
      align: center;
      margin: 0;
      padding: 0;
      font-family: 'Montserrat', serif;
    }
    </style>
  </head>
  <body>
    <?php

    include "config.php";
    echo "<div id='selection_rating_output'>";
    if (!empty($_POST['rating'])){
        $rating = $_POST['rating'];

        $sql_statement = "SELECT gym_id, gym_name FROM GYM WHERE rating > $rating";
        $list = array();

        $result = mysqli_query($db, $sql_statement);
        while ($row = mysqli_fetch_assoc($result)) {
          array_push($list, $row["gym_name"]);
          //echo "Selected gym names are: " . $row["gym_name"];
    }
    echo "Selected gyms that their rating is bigger than $rating are: ";
    echo "</br>";
    #echo "Selected gyms that their rating is bigger than " . $rating . " are: ";
    $size_of_criteria = sizeof($list);
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
    echo "</div>";

    ?>
    <br>
    <INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);">
  </body>
</html>
