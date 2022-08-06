<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Edit Status</title>
</head>
<body>
    <center>
        <?php
        require 'phpSession.php';
        $name=$_SESSION['usrid'];
            $conn=mysqli_connect("localhost", "root", "", "staff");

            if($conn===false){
                die("ERROR: Could not connect to the database"
                    . mysqli_connect_error());
            }
            $id=$_REQUEST['id'];
            $user=$_REQUEST['name'];
            $email=$_REQUEST['email'];
            $pswd=$_REQUEST['pswd'];

            $sql="UPDATE Developers SET name ='{$user}', email ='{$email}', password ='{$pswd}' WHERE name='{$id}'";
            if(mysqli_query($conn,$sql)){
                echo "<h3>Data was updated successfully.</h3>";
                echo "browse to dashboard to see the updated database \n";
                echo "<a href='dashboard.php'><button>Dashboard</button></a>";
            }else{
                echo "ERROR: Could not update the data $sql."
                    . mysqli_error($conn);
            }
            mysqli_close($conn);
        ?>
    </center>
</body>
</html>