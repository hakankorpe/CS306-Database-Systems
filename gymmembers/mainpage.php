<!DOCTYPE html>
<html>
<head>
	<title>MAIN PAGE</title>

<style>
.dumb-img-right{

		position: absolute;
    right: 10px;
    top: 10px;
		width: 150px;
		transform: rotate(45deg);
}
.dumb-img-left{

    position:absolute;
    left: 10px;
    top: 10px;
		width: 150px;
		transform: rotate(-45deg);
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
</style>


</head>
<body>


<div align="center">
<h1>Member List</h1>
<br>
<br>
<h2>Here is the our members in our database:</h2>
<br>
<br>

<?php
include "member_list.php";
?>

<?php
include "selection.html";
?>

<img class="dumb-img-right" src="dumb.png" alt="Dumbbell image">
<img class="dumb-img-left" src="dumb.png" alt="Dumbbell image">
</div>
</body>
</html>


<?php
/*
include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM Members";

$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $name = $row['name'];
    $until = $row['until'];
    $age = $row['age'];
    $phone_number = $row['phone_number'];
    $membership_id = $row['membership_id'];
    $price = $row['price'];
    echo $membership_id . " " . $name . " " . $age . " " . $until . " " . $phone_number . " " . $price . "<br>";
}
*/
?>
