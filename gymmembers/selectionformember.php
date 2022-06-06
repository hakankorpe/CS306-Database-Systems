<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title> Members that are selected</title>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
    width: 100%;
    }
    .space {
      width: 4px;
      height: auto;
      display: inline-block;
    }
    body {
    background-color: #f2f2f2;
    margin: 0;
    text-align: center;
    font-family: 'Merriweather', serif;
    }

    td, th {
    border: 1px solid #dddddd;
        text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    a {
                color: #6A5ACD;
                text-decoration: none;
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
    <div align="center">
        <br>
        <h2>Here is the filtered members in our database:</h2>
        <br>
        <br>
    <table>

    <tr> <th> NAME </th> <th> AGE </th> <th>PHONE NUMBER</th> <th> DATE </th> <th> MEMBER TYPE </th> </tr>
    <?php

    include "config.php";
    echo "<div id='selection_rating_output'>";

    if (!empty($_POST['age'])){
        $age = $_POST['age'];

        $sql_statement = "SELECT * FROM Members WHERE age > $age";
        $result = mysqli_query($db, $sql_statement);
        while($row = mysqli_fetch_assoc($result))
        {
            $m_id = $row['membership_id'];
            $name = $row['name'];
            $age = $row['age'];
            $phone_number = $row['phone_number'];
            $until = $row['until'];
            $price = $row['price'];

            $type = ($price > 200) ? "Premium" : 'Standard';


            $personal_trainer = ($price % 2 == 1) ? "Angela Merkel" : "Boris Johnson";

            $pool_use = ($price > 500) ? 1 : 0;

            $time_limit = ($price > 100) ? 6 : 1;



            echo "<tr>" . "<th>" . $name . "</th>" . "<th>" . $age . "</th>" . "<th>" . $phone_number . "</th>" . "<th>" . $until . "</th>" . "<th>" . $type . "</th>" . "</tr>";
        }
      }
        /* $sql_statement = "SELECT membership_id, name FROM Members WHERE age > $age";
        $list = array();

        $result = mysqli_query($db, $sql_statement);
        while ($row = mysqli_fetch_assoc($result)) {
          array_push($list, $row["membership_id"]);
          //echo "Selected gym names are: " . $row["gym_name"];
    }
        echo "Selected members that their age is bigger than $age are: ";
        echo "</br>";

        #echo "Selected members that their age is bigger than " . $age . " are: ";
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
    */

    else
    {
        echo "You did not enter any selection criteria.";
    }
    echo "</div>";
    ?>

  </body>
</table>
<br>
<INPUT TYPE="button" VALUE="Go Back" onClick="history.go(-1);">
</div>
</html>
