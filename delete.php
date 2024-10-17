<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM users WHERE id=$id";
    $result = $conn->query($query);

    if ($result) {
        echo "Record deleted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "No ID provided.";
}
