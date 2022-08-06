<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Status</title>
</head>
<body>
    <center>
        <?php
            $conn = mysqli_connect("localhost", "root", "","staff");
            if($conn===false){
                die("ERROR: Could not connect to the database"
                    . mysqli_connect_error());
            }
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $passwd = $_REQUEST['passwd'];

            $sql="INSERT INTO register (name, email, password) VALUES('$name', '$email', '$passwd')";
            if(mysqli_query($conn,$sql)){
                echo "<h3>Registration completed successfully!!</h3>";
                echo "<h5>You can continue with login</h5>";
                echo "<a href='login.html'><button>Login</button></a>";
            }
        ?>
    </center>
</body>
</html>