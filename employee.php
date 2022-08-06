<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<?php
    require 'SessionHeader.php';
        $supervisor=$_SESSION['usrid'];
?>

<body>
    <center>

        <h1>Register a new employee</h1>
        <form action="added.php" method="get">
            <div class="form-group">
                <input type="hidden" name="supervisor" id="name" placeholder="Enter the name of your Supervisor" value=<?php echo "{$supervisor}";?>>
            </div>
        <?php
            include 'FormHeader.php';
        ?>
            <div>
                <input type="submit" value="Register">
            </div>
        </form>
    </center>
</body>

</html>