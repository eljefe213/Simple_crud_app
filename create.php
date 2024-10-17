<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $query = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    $result = $conn->query($query);

    if ($result) {
        echo "Record added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<form method="post" action="">
    Name: <input type="text" name="name" required>
    Email: <input type="email" name="email" required>
    <button type="submit" name="submit">Submit</button>
</form>