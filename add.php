<?php
include 'connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $conn->query("INSERT INTO products (name) VALUES ('$name')");
    echo "<script>
        alert('Successfully added!');
        window.location.href = 'view.php';
    </script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav>
        <a class="button" href="index.html">Home</a>
    </nav>

    <div class="container">
        <h1>Add New Product</h1>
        <form method="POST">
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" id="name" name="name" class="input-field" required>
            </div>
            <button type="submit" class="button">Add Product</button>
        </form>
    </div>

</body>

</html>
