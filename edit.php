<?php
$dataFile = "data.json";
$data = [];

if (file_exists($dataFile)) {
    $data = json_decode(file_get_contents($dataFile), true);
}

$id = $_GET['id'] ?? null;
$entry = null;

foreach ($data as $item) {
    if ($item['id'] === $id) {
        $entry = $item;
        break;
    }
}

if (!$entry) {
    die("Entry not found.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($data as &$item) {
        if ($item['id'] === $id) {
            $item['name'] = trim($_POST['name']);
            $item['title'] = trim($_POST['title']);
            $item['description'] = trim($_POST['description']);
            break;
        }
    }

    file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT));
    header("Location: display.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Entry</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Edit Entry</h2>
    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($entry['name']); ?>" required>

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($entry['title']); ?>" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required><?php echo htmlspecialchars($entry['description']); ?></textarea>

        <button type="submit">Update</button>
    </form>
</body>
</html>
