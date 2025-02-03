<?php
include 'connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $conn->query("DELETE FROM items WHERE id=$id");

    echo "<script>
        alert('Delete successfully! Redirect back to view page.');
        window.location.href = 'view.php';
    </script>";
    exit;
}
$result = $conn->query("SELECT * FROM items");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Items</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav>
        <a class="button" href="index.html">Home</a>
    </nav>

    <div class="container">
        <h1>Delete an Item</h1>
        <form method="POST">
            <div class="form-group">
                <label for="id">Select Item:</label>
                <select id="id" name="id" class="input-field">
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                    <?php } ?>
                </select>

            </div>

            <button type="submit" class="button">Delete Item</button>
        </form>
    </div>

</body>

</html>