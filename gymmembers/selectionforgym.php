<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title> GYMs that are selected</title>
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
        <h2>Here is the filtered GYMs in our database:</h2>
        <br>
        <br>
    <table>

    <tr> <th> NAME </th> <th> RATING </th> <th>ADDRESS</th> <th> AVAILABILITY </th> <th> CAPACITY </th </tr>
    <?php

    include "config.php";
    echo "<div id='selection_rating_output'>";
    if (!empty($_POST['rating'])){
        $rating = $_POST['rating'];

        $sql_statement = "SELECT * FROM GYM WHERE rating > $rating";

        $result = mysqli_query($db, $sql_statement);

        while($row = mysqli_fetch_assoc($result))
        {
            $gym_name = $row['gym_name'];
            $rating = $row['rating'];
            $gym_address = $row['gym_address'];
            $availability = $row['availability'];
            $capacity = $row['capacity'];


            echo "<tr>" . "<th>" . $gym_name . "</th>" . "<th>" . $rating . "</th>" . "<th>" . $gym_address . "</th>" . "<th>" . $availability . "</th>" . "<th>" . $capacity . "</th>" . "</tr>";
        }
      }

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
