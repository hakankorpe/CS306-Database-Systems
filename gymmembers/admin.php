<?php

include "config.php";

?>

<form action="delete.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT membership_id, name, age, price, phone_number, until FROM Members";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $membership_id = $id_rows['membership_id'];
        $name = $id_rows['name'];
        $age = $id_rows['age'];
        $price = $id_rows['price'];
        $phone_number = $id_rows['phone_number'];
        $until = $id_rows['until'];

        echo "<option value=$membership_id>". $name . " - " . $age . " - " . $price . " - " . $phone_number . " - " . $until . "</option>";
    }

?>
</select>
<button>DELETE</button>
</form>

<form action="delete.php" method="POST">
<select name="gym_ids">
<?php



$sql_command = "SELECT gym_id, gym_name, gym_address, rating, availability, capacity FROM GYM";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $gym_id = $id_rows['gym_id'];
        $gym_name = $id_rows['gym_name'];
        $capacity = $id_rows['capacity'];
        $rating = $id_rows['rating'];
        $availability = $id_rows['availability'];
        $gym_address = $id_rows['gym_address'];


        echo "<option value=$gym_id>". $gym_name . " - " . $rating . " - " . $capacity . " - " . $gym_address . " - " . $availability . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>
