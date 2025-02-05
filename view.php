<?php
include 'connection.php';
$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav>
        <a class="button" href="index.html">Home</a>
    </nav>

    <div class="container">
        <h1>View Product List</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>
