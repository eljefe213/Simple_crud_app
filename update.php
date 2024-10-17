<?php
include 'config.php';

// Vérifier si un ID d'utilisateur est passé dans l'URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Récupérer les informations de l'utilisateur à partir de la base de données
    $query = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Extraire les données de l'utilisateur
        $user = $result->fetch_assoc();
    } else {
        echo "No user found with this ID.";
        exit();
    }
} else {
    echo "No ID provided.";
    exit();
}

// Vérifier si le formulaire de mise à jour a été soumis
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Mettre à jour les informations de l'utilisateur
    $query = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    $result = $conn->query($query);

    if ($result) {
        echo "Record updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!-- Formulaire de mise à jour -->
<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    Name: <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
    Email: <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
    <button type="submit" name="update">Update</button>
</form>