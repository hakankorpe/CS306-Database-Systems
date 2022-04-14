<?php

include "config.php";

if (!empty($_POST['gym_name'])){
    if(isset($_POST['availability'])) {
        $availability = $_POST['availability'];
      } else { // seçilmemişse bu değer sayfaya hiç gönderilmiyor
    $availability = "Not available";
    }

    $gym_name = $_POST['gym_name'];
    $rating = $_POST['rating'];
    $gym_address = $_POST['gym_address'];
    $capacity = $_POST['capacity'];


    $sql_statement = "INSERT INTO GYM(gym_name, rating, gym_address, availability, capacity)
    VALUES ('$gym_name', $rating, '$gym_address', '$availability', $capacity)";

    $result = mysqli_query($db, $sql_statement);
    echo "You have successfully added gym to database, its availability is: " . $availability;
}
else
{
    echo "You did not enter the gym name.";
}

?>
