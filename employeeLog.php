<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Status</title>
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "staff");
        if($conn===false){
            die("ERROR: Could not connect to the database"
            .mysqli_connect_error());
        }
        $email=$_REQUEST['email'];
        $pswd=$_REQUEST['passwd'];
        $sql=mysqli_query($conn, "SELECT * FROM Developers WHERE email='{$email}'") or die(mysqli_connect_error());
        if(mysqli_num_rows($sql)){
            $data=mysqli_fetch_assoc($sql);
            
            if($data['email']==$email && $data['password']==$pswd){
                session_start();
                $_SESSION['usrid']=$_REQUEST['email'];
                header("Location: employeeProfile.php");
            }else{
                mysqli_close($conn);
                echo '<h2>Your email address or password is invalid, please try again</h2>';
                echo '<a href="employeeLogin.html"><button>Go Back</button></a>';
                exit();
            }
        }
        echo '<h2>Your email address is invalid, please contact your supervisor</h2>';
        mysqli_close($conn);
    ?>
</body>
</html>