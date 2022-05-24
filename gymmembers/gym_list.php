<!DOCTYPE html>
<html>
<head>
<title>GYMs</title>
<link rel="stylesheet" href="styles.css">
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

td, th {
border: 1px solid #dddddd;
    text-align: left;
padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
a {
            color: #05ff05;
            text-decoration: none;
        }
</style>

</head>
<body>

<div align="center">
  <h1>GYM List</h1>
  <br>
  <br>
  <h2>Here is the GYM Lists in our database:</h2>
  <br>
  <br>
<table>

<tr> <th> NAME </th> <th> RATING </th> <th>ADDRESS</th> <th> AVAILABILITY </th> <th> CAPACITY </th </tr>

<?php

include "config.php";

$sql_statement = "SELECT * FROM GYM";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
    $gym_name = $row['gym_name'];
    $rating = $row['rating'];
    $gym_address = $row['gym_address'];
    $availability = ($row['availability'] == 1) ? "Available" : "Not Available";
    $capacity = $row['capacity'];




    echo "<tr>" . "<th>" . $gym_name . "</th>" . "<th>" . $rating . "</th>" . "<th>" . $gym_address . "</th>" . "<th>" . $availability . "</th>" . "<th>" . $capacity . "</th>" . "</tr>";
}



?>

</table>
</div>
<html>
<body>
  </div>
  <br>
<a href="http://localhost/gymmembers/gym_insertion.html">
<button>Add a gym</button>
</a>
</body>
</html>
</body>
</html>
