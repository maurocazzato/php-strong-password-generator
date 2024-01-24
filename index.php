<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>

    <!-- link css -->
    <link rel="stylesheet" href="css/style.css">

</head>



<body>
    <section>
    <h1>Password Generator</h1>
    <form action="index.php" method="GET">
        <label for="password-length"> Lunghezza Password:</label>
        <input type="number" id="password-length" name="password_length" min="8" max="32" required>
        <button type="submit">Genera</button>
    </form>

    <?php
 
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
       
        include 'functions.php';

        
        $password_length = isset($_GET['password_length']) ? (int)$_GET['password_length'] : 8;

        // genera passw 
        $password = generatePassword($password_length);
        echo "<p>La tua password: <strong>$password</strong></p>";
    }
    ?>
    </section>
</body>
</html>