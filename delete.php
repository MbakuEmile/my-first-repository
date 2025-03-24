<?php
$dataFile = "data.json";
$data = [];

if (file_exists($dataFile)) {
    $data = json_decode(file_get_contents($dataFile), true);
}

$id = $_GET['id'] ?? null;

if ($id) {
    $data = array_filter($data, function ($entry) use ($id) {
        return $entry['id'] !== $id;
    });

    file_put_contents($dataFile, json_encode(array_values($data), JSON_PRETTY_PRINT));
}

header("Location: display.php");
exit;
?>
