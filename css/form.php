<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
$greeting = "Hello PHP";
echo $greeting;
?>
 <form action="processor.php" method="post">
        <label>Enter your name:</label>
        <input type="text" name="username">
        <input type="submit" value="Submit">
    </form>

    <?php

    $fruits = ['banana','orange', 'pear', 'mango'];


    
    echo "<br>";
    $ip = $_SERVER['REMOTE_ADDR'];
echo "Your IP Address is: " . $ip;
     echo "<br>";
     $numbers = array(1, 2, 3, 4, 5);
$reversed = array_reverse($numbers);
print_r($reversed);

echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['SCRIPT_FILE NAME'];
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];

    ?>
    <br>
    <br>
    <form method="post">
        <input type="number" name="num1" placeholder="First Number" required>
        <input type="number" name="num2" placeholder="Second Number" required>
        <select name="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = 0;

        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                $result = ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero";
                break;
            default:
                $result = "Invalid Operation";
        }
        echo "Result: " . $result;
    }
    ?>
    <br>
    <br>
    <?php
$str = "i am";
$reversed = "";

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $reversed .= $str[$i];
}

echo $reversed;

?>
<?php

?>
<br>
<br>
<?php
$str = "PHP is a great scripting language";
$wordCount = str_word_count($str);
echo "Number of words: " . $wordCount;
?>
<br>
<br>

<form action="process.php" method="post">
        <label>Enter your name:</label>
        <input type="text" name="username" required>
        
        <label>Select colors:</label><br>
        <input type="checkbox" name="colors[]" value="Red"> Red <br>
        <input type="checkbox" name="colors[]" value="Blue"> Blue <br>
        <input type="checkbox" name="colors[]" value="Green"> Green <br>
        <input type="checkbox" name="colors[]" value="Yellow"> Yellow <br>
        
        <input type="submit" value="Submit">
    </form>


</body>
</html>