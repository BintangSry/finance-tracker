<?php
include 'db.php';

$description = $_POST['description'];
$amount = $_POST['amount'];
$type = $_POST['type'];
$date = $_POST['date'];

$sql = "INSERT INTO transactions (description, amount, type, date)
        VALUES ('$description', '$amount', '$type', '$date')";

if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
