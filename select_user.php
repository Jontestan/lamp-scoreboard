<?php
require '../includes/db.php';
$users = $pdo->query("SELECT * FROM users")->fetchAll();
$judges = $pdo->query("SELECT * FROM judges")->fetchAll();
?>
<form action="submit_score.php" method="POST">
    <h2>Submit Score</h2>
    Select Judge:
    <select name="judge_id">
        <?php foreach ($judges as $judge): ?>
            <option value="<?= $judge['id'] ?>"><?= htmlspecialchars($judge['display_name']) ?></option>
        <?php endforeach; ?>
    </select><br><br>
    Select User:
    <select name="user_id">
        <?php foreach ($users as $user): ?>
            <option value="<?= $user['id'] ?>"><?= htmlspecialchars($user['name']) ?></option>
        <?php endforeach; ?>
    </select><br><br>
    Score (1–100): <input type="number" name="score" min="1" max="100" required><br>
    <button type="submit">Submit</button>
</form>