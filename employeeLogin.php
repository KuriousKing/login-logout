<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    if(isset($_SESSION['usrid'])){
                   header('location: employeeProfile.php');
                }?>
    <form action="employeeLog.php" method="get">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Enter your Email" require>
        </div>
        <div class="form-group">
            <label for="passwd">Password:</label>
            <input type="password" name="passwd" id="passwd" placeholder="Enter your Password" require>
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>

</body>

</html>