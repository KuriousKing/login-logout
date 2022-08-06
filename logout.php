<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged Out</title>
</head>
<body>
    <?php
        session_start();
        unset($_SESSION['usrid']);
        session_destroy();
    ?>
    <h2>You have successfully logged out</h2>
    <a href="index.php"><button>Go Back Home</button></a>
</body>
</html>