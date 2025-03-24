 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $title = trim($_POST["title"]);
    $description = trim($_POST["description"]);

    if (!empty($name) && !empty($title) && !empty($description)) {
        $dataFile = "data.json";
        $data = [];

        if (file_exists($dataFile)) {
            $data = json_decode(file_get_contents($dataFile), true);
        }

        $newEntry = [
            "id" => uniqid(),
            "name" => $name,
            "title" => $title,
            "description" => $description
        ];

        $data[] = $newEntry;
        file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT));

        header("Location: display.php");
        exit;
    } else {
        echo "All fields are required.";
    }
}


/*echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["username"]) && !empty($_POST["Title"]) && !empty($_POST["description"])) {
        $username = htmlspecialchars($_POST["username"]);
         $Title = htmlspecialchars($_POST["Title"]);
         $description = htmlspecialchars($_POST["description"]);
        
    
        $input_data = [];
        $input_data['id'] = count($data)+1;
        $input_data = array_merge($input_data, $_POST);
        print_r($input_data);

        echo $input_data['id'];
        echo $input_data['username'];
        echo $input_data['description'];
        return;

        echo "Hello, " . $username . "<br>";
         echo "the title is, " . $Title . "<br>";
          echo "the description is, " . $description;

    } else {
        echo "Your name, Title and description are all required!";
    }
}*/
?> 