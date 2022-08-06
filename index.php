<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<?php
    session_start();
?>

<body>
    <center>

        <h1>Registeration for supervisor with email id</h1>
        <form action="register.php" method="get">
            <?php include 'registrationForm.php'; ?>
            <div>
                <input type="submit" value="Register as Supervisor">
            </div>
        </form>
        <a href="employeeLogin.php"><button>Login as Employee</button></a>
        <a href="loginForm.php"><button>Log in as Supervisor</button></a>
    </center>
</body>

</html>