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
?>
<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    <button type="submit" name="delete">Delete</button>
</form>