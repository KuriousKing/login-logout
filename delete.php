 <!DOCTYPE html>

<html>
<head><title> Delete your data </title><head>

<body>
    <center>
    <?php
    require 'SessionHeader.php';
        $name=$_SESSION['usrid'];
        $con=mysqli_connect("localhost", "root" , "", "staff");
        if ($con === false){
            die("ERROR: Could not connect to the server."
                . mysqli_connect());
        }
        $user=$_REQUEST['usr'];

        $sql = "DELETE FROM register WHERE name='{$user}'";
        if(mysqli_query($con, $sql)){
            echo "<h3>The data of $user has been deleted from the database</h3>"
                . "<a href='dashboard.php'><button>Go back to Dashboard</button></a>";
        }else{
            echo "ERROR: Could not delete the data, please try again"
                . mysqli_error($con);
        }
        mysqli_close($con);
    ?>
    </center>
</body>
</html>