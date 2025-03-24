<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["username"])){
    $name = htmlspecialchars($_POST["username"]);
    echo "Hello, " . $name;
    }else{
        echo "your name is required";
    }
}
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Title = htmlspecialchars($_POST["Title"]);
    echo "the title is, " . $Title;
}
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = htmlspecialchars($_POST["description"]);
    echo "the description is, " . $description;
}
?>
