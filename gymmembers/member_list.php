<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Members</title>
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

<table>

<tr> <th> NAME </th> <th> AGE </th> <th>PHONE NUMBER</th> <th> DATE </th> <th> MEMBER TYPE </th> </tr>

<?php

include "config.php";

$sql_statement = "SELECT * FROM Members";

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

    $sql_statement = ($type == "Premium") ?
    "INSERT INTO premium_members(name, age, phone_number, price, until, premium_id, personal_trainer, pool_use)
    VALUES ('$name', $age, '$phone_number', $price, '$until', $m_id, '$personal_trainer', $pool_use)" :
    "INSERT INTO standard_members(name, age, phone_number, price, until, standard_id, time_limit)
    VALUES ('$name', $age, '$phone_number', $price, '$until', $m_id, $time_limit)";

    $member_type = mysqli_query($db, $sql_statement);



    echo "<tr>" . "<th>" . $name . "</th>" . "<th>" . $age . "</th>" . "<th>" . $phone_number . "</th>" . "<th>" . $until . "</th>" . "<th>" . $type . "</th>" . "</tr>";
}



?>

</table>
</div>

<?php


if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {

 ?>

  <a href="logout.php"><button>Logout</button></a>
  <div class="space">
    </div>
    <a href="http://localhost/gymmembers/member_insertion.html">
   <button>Add a member</button>
  </a>
  <div class="space">
    </div>
  <a href="http://localhost/gymmembers/gym_insertion.html">
  <button>Add a gym</button>
  </a>
  <div class="space">
    </div>
    <?php
}
?>
  <a href="http://localhost/gymmembers/premium_member_list.php">
  <button>Premium members</button>
  </a>
  <div class="space">
    </div>
  <a href="http://localhost/gymmembers/standard_member_list.php">
  <button>Standard members</button>
  </a>
  <div class="space">
    </div>
  <a href="http://localhost/gymmembers/gym_list.php">
  <button> GO TO GYM LIST</button>
  </a>
  </body>
  </html>
