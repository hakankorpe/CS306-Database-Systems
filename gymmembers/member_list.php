<!DOCTYPE html>
<html>
<head>
<title>Members</title>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
width: 100%;
}

td, th {
border: 1px solid #dddddd;
    text-align: left;
padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

</head>
<body>

<div align="center">

<table>

<tr> <th> NAME </th> <th> AGE </th> <th>PHONE NUMBER</th> <th> DATE </th> <th> PRICE </th </tr>

<?php

include "config.php";

$sql_statement = "SELECT * FROM Members";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
    $name = $row['name'];
    $age = $row['age'];
    $phone_number = $row['phone_number'];
    $until = $row['until'];
    $price = $row['price'];

    echo "<tr>" . "<th>" . $name . "</th>" . "<th>" . $age . "</th>" . "<th>" . $phone_number . "</th>" . "<th>" . $until . "</th>" . "<th>" . $price . "</th>" . "</tr>";
}

?>

</table>
</div>

</body>
</html>
