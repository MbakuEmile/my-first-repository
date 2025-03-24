<?php
$dataFile = "data.json";
$data = [];

if (file_exists($dataFile)) {
    $data = json_decode(file_get_contents($dataFile), true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Stored Data</h2>
    <div class="card-container">
        <?php foreach ($data as $entry): ?>
            <div class="card">
                <h3><?php echo htmlspecialchars($entry["title"]); ?></h3>
                <p><strong>Name:</strong> <?php echo htmlspecialchars($entry["name"]); ?></p>
                <p><?php echo nl2br(htmlspecialchars($entry["description"])); ?></p>
                <a href="edit.php?id=<?php echo $entry['id']; ?>" class="edit-btn">Edit</a>
                <a href="delete.php?id=<?php echo $entry['id']; ?>" class="delete-btn" onclick="return confirm('Are you sure?');">Delete</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>

