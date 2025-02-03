<?php
include 'connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $conn->query("INSERT INTO items (name) VALUES ('$name')");
    echo "<script>
        alert('Added successfully! Redirect back to view page.');
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
    <title>Add Items</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav>
        <a class="button" href="index.html">Home</a>
    </nav>

    <div class="container">
        <h1>Add a New Item</h1>
        <form method="POST">
            <div class="form-group">
                <label for="name">Item Name:</label>
                <input type="text" id="name" name="name" class="input-field" required>
            </div>
            <button type="submit" class="button">Add Item</button>
        </form>
    </div>

</body>

</html>