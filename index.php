<?php
// Get the current date and time
$currentDate = date('l, F j, Y h:i:s A');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Web Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #4CAF50;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        form {
            margin-top: 20px;
        }
        input[type="text"], input[type="submit"] {
            padding: 10px;
            margin: 10px 0;
            width: 100%;
            max-width: 300px;
        }
        .response {
            margin-top: 20px;
            padding: 10px;
            background-color: #e7f7e7;
            border: 1px solid #d0e7d0;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to My PHP Web Page!</h1>

    <p>Current Date and Time: <strong><?php echo $currentDate; ?></strong></p>

    <h2>Submit Your Name</h2>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Enter your name" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = htmlspecialchars($_POST['username']);
        echo "<div class='response'><strong>Hello, $username! Thank you for visiting our page.</strong></div>";
    }
    ?>

</div>

</body>
</html>
