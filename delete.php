<?php
include 'connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $conn->query("DELETE FROM products WHERE id=$id");

    echo "<script>
        alert('Successfully deleted!');
        window.location.href = 'view.php';
    </script>";
    exit;
}
$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav>
        <a class="button" href="index.html">Home</a>
    </nav>

    <div class="container">
        <h1>Delete Product</h1>
        <form method="POST">
            <div class="form-group">
                <label for="id">Select Product:</label>
                <select id="id" name="id" class="input-field">
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                    <?php } ?>
                </select>

            </div>

            <button type="submit" class="button">Delete Product</button>
        </form>
    </div>

</body>

</html>
