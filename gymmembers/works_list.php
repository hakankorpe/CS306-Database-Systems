<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
<title>Works Table</title>

<style>
body {
background-color: #f2f2f2;
margin: 0;
text-align: center;
font-family: 'Merriweather', serif;
}
input[type=text], select {
  width: 23rem;
  padding: 12px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 23rem;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.button2 {
  width: 23rem;
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  } /* Blue */

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
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
  <div align="center">
  <h1>Works Table List</h1>
  <br>
  <br>
  <h2>Here is the works table in our database:</h2>
  <br>
  <br>
<table>

<tr> <th> NAME </th> <th> ROLE </th> <th>WAGE</th> <th> GYM_ID </th> <th> MEMBERSHIP ID </th> </tr>

<?php

include "config.php";

$sql_statement = "SELECT * FROM works";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
    $gym_id = $row['gym_id'];
    $membership_id = $row['membership_id'];
    $role = $row['role'];
    $wage = $row['wage'];



    $sql_statement = "SELECT M.name FROM Members as M WHERE M.membership_id = (SELECT W.membership_id FROM works as W)";

    $result = mysqli_query($db, $sql_statement);

    while($row = mysqli_fetch_assoc($result)){
    $name = $row['name'];



      echo "<tr>" . "<th>" . $name . "</th>" . "<th>" . $role . "</th>" . "<th>" . $wage . "</th>" . "<th>" . $gym_id . "</th>" . "<th>" . $membership_id . " hours" . "</th>" . "</tr>";
    }

}



?>

</table>
</div>
<html>
<body>
  <a href="http://localhost/gymmembers/index.php">
 <button>Go to main page</button>
</a>
</html>
</body>
</html>
