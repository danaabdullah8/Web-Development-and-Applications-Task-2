<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];

    $sql = "INSERT INTO users (name, age, status)
            VALUES ('$name', '$age', 0)";
    $conn->query($sql);
}

$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>User Management</h2>

<form method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="number" name="age" placeholder="Age" required>
    <button type="submit" name="submit">Submit</button>
</form>

<br>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Status</th>
        <th>Action</th>
    </tr>

    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['name']; ?></td>
        <td><?= $row['age']; ?></td>
        <td><?= $row['status']; ?></td>
        <td>
            <a href="toggle.php?id=<?= $row['id']; ?>">
                Toggle
            </a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>