<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require 'phpSession.php';
        $conn=mysqli_connect("localhost", "root", "", "staff");
        $supervisor=$_REQUEST['supervisor'];
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $pswd=$_REQUEST['passwd'];
        $sql="INSERT INTO Developers (supervisor,name, email, password) VALUES('$supervisor','$name', '$email', '$pswd')";
            if(mysqli_query($conn,$sql)){
                echo "<h3>Registration completed successfully!!</h3>";
                echo "<a href='dashboard.php'><button>Go back to dashboard</button></a>";
            }
    ?>
</body>
</html>