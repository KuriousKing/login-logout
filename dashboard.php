<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
</head>
<?php
        require 'SessionHeader.php';
        $name=$_SESSION['usrid'];
    $conn=mysqli_connect("localhost","root","","staff");
    if($conn===false){
        die("ERROR: Could not connect to the database"
            .mysqli_connect_error());
    }
?>
<body>
    <?php
        $data=mysqli_query($conn, "SELECT * FROM register WHERE email='{$name}'");
        echo "<h1>Employees under the supervisor: {$name}</h1>";
        echo "<table border='3'>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            </tr>";
        while($row= mysqli_fetch_array($data)){
            echo "<tr>";
            echo "<td>". $row['id'] ."</td>";
            echo "<td>". $row['name']."</td>";
            echo "<td>". $row['email'] ." </td>";
            echo "</tr>";
        }
        echo "</table>";
        
        echo "<a href=\"employee.php\"><button>Add Employee</button></a>
        <a href=\"edit.html\"><button>Edit Your Data</button></a>
        <a href=\"delete.html\"><button>Delete Your Data</button></a>
        <a href=\"editEmployee.html\"><button>Edit Employee Data</button></a>
        <a href=\"deleteEmployee.html\"><button>Delete Employee Data</button></a>
        <a href=\"logout.php\"><button>Log Out</button></a>";
        echo "<h2> Here are your employees:\n";
        $employees=mysqli_query($conn, "SELECT * FROM Developers WHERE supervisor='{$name}'");
        echo "<table border='2'>
        <tr>
        <th>ID</th>
        <th>SUPERVISOR</th>
        <th>NAME</th>
                <th>EMAIL</th>
                </tr>";
                while($row=mysqli_fetch_array($employees)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['supervisor']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "</tr>";
                }
                echo "</table>";
                
                ?>

</body>

</html>