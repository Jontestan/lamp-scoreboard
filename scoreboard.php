<?php
require '../includes/db.php';

$stmt = $pdo->query("
    SELECT users.name, COALESCE(SUM(scores.score), 0) AS total_score
    FROM users
    LEFT JOIN scores ON users.id = scores.user_id
    GROUP BY users.id
    ORDER BY total_score DESC
");
$results = $stmt->fetchAll();
?>
<html>
<head>
    <meta http-equiv="refresh" content="10">
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
<h1>Live Scoreboard</h1>
<table>
    <tr><th>Participant</th><th>Total Score</th></tr>
    <?php foreach ($results as $row): ?>
        <tr>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= $row['total_score'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>