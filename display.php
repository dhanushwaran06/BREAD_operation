
<?php

error_reporting(E_ALL);
ini_set('display_errors','On');
include 'db_connect.php';
$conn = connectToDB();

include './lib/lib.php';
include './data/booking/form.php';


$details = fetchData($conn, $f);
$cardContent = displayDetails($details);


$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/UserDetails.css">
    <title>User Details</title>
</head>

<body>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">User Details</h5>
            <?php

            echo $cardContent;

            ?>

        </div>
    </div>
</body>

</html>