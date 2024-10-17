<?php

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $query = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    $result = $conn->query($query);

    if ($result) {
        echo "Record updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    Name: <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
    Email: <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
    <button type="submit" name="update">Update</button>
</form>