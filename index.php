<!-- <!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>



<div id="form">
<form action="process.php" method="post">
    <div class="name">
        <label>Name</label>
        <input type="text" name="username">
    </div>
    <div class="title">
    <label>Title</label>
    <input type="text" name="Title">
    </div> 
    <div class="description">
        <label for="description">description</label>
        <input type="text" name="description">
    </div>
    <div>
    <button>submit</button>
    </div>
    </form>
</div>

</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Enter Details</h2>
    <form id="dataForm" action="save_data.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <span id="nameError" class="error"></span>

        <label for="title">Title:</label>
        <input type="text" id="title" name="title">
        <span id="titleError" class="error"></span>

        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
        <span id="descError" class="error"></span>

        <button type="submit">Submit</button>
    </form>
    <script src="script.js"></script>
</body>
</html>
