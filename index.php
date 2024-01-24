
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
    <h1>Generatore di Password Sicure</h1>

    <form action="index.php" method="GET">
        <label for="password_length">Lunghezza della password:</label>
        <input type="number" id="password_length" name="password_length" min="1" required>
        <button type="submit">Genera</button>
    </form>

    <?php
    
    if (isset($_GET['password_length'])) {
        $password_length = $_GET['password_length'];

        
        require_once __DIR__ . '/functions.php';

       
        $generated_password = generate_password($password_length);

        // Mostra la password generata
        echo '<p>Password generata: ' . $generated_password . '</p>';
    }
    ?>
</section>
</body>
</html>