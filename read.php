<?php
include 'config.php';

$query = "SELECT * FROM users";
$result = $conn->query($query);

while ($row = $result->fetch_assoc()) {
    echo $row['name'] . ' - ' . $row['email'] . '<br>';
}
