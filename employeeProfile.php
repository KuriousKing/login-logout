<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
</head>
<?php
        require 'phpSession.php';
        $name=$_SESSION['usrid'];
    $conn=mysqli_connect("localhost","root","","staff");
    if($conn===false){
        die("ERROR: Could not connect to the database"
            .mysqli_connect_error());
    }
?>
<body>
    <?php
        $data=mysqli_query($conn, "SELECT * FROM Developers WHERE email='{$name}'");
        echo "<h1>Profile of {$name}</h1>";
        echo "<table border='3'>
            <tr>
            <th>ID</th>
            <th>Supervisor</th>
            <th>Name</th>
            <th>Email</th>
            </tr>";
        while($row= mysqli_fetch_array($data)){
            echo "<tr>";
            echo "<td>". $row['id'] ."</td>";
            echo "<td>". $row['supervisor'] ."</td>";
            echo "<td>". $row['name']."</td>";
            echo "<td>". $row['email'] ." </td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "\n<a href=\"logout.php\"><button>Log Out</button></a>";                
                ?>

</body>

</html>