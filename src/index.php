<?php include 'db_config.php'; 

if (!$pdo) {
    die("Error de conexión a la base de datos.");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Ingreso</title>
</head>
<body>
    <h1>Ingrese sus datos</h1>
    <form method="post" action="index.php">
        <label for="name">Nombre:</label>
        <input type="text" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <input type="submit" name="submit" value="Guardar">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $query = "INSERT INTO users (name, email) VALUES (:name, :email)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);

        if ($stmt->execute()) {
            echo "<p>Datos guardados con éxito.</p>";
        } else {
            echo "<p>Error al guardar los datos.</p>";
        }
    }
    ?>
</body>
</html>
