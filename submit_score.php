<?php
require '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $judge_id = $_POST['judge_id'];
    $user_id = $_POST['user_id'];
    $score = $_POST['score'];

    $stmt = $pdo->prepare("INSERT INTO scores (judge_id, user_id, score) VALUES (?, ?, ?)");
    $stmt->execute([$judge_id, $user_id, $score]);
    echo "Score submitted successfully.";
}
?>
<a href="select_user.php">Back</a>