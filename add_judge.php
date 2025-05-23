<?php
require '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $display_name = $_POST['display_name'];
    $stmt = $pdo->prepare("INSERT INTO judges (username, display_name) VALUES (?, ?)");
    $stmt->execute([$username, $display_name]);
    echo "Judge added successfully.";
}
?>
<form method="POST">
    <h2>Add Judge</h2>
    Username: <input type="text" name="username" required><br>
    Display Name: <input type="text" name="display_name" required><br>
    <button type="submit">Add Judge</button>
</form>