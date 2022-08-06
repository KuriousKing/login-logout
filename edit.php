<!DOCTYPE html>
<html>
    <head><title>editing form</title></head>
    <?php
        require 'SessionHeader.php';
        $conn= mysqli_connect("localhost","root","","staff");
        $edit= $_REQUEST['usr'];
        $result = mysqli_query($conn, "SELECT * FROM register WHERE name='{$edit}' ") or die(mysqli_error());
        $arr= mysqli_fetch_assoc($result);

    ?>
    <body>
        <form action="edited.php" method="get">
            <div class="form-group">
                <input type="hidden" for="name" name="id"id="name" value="<?php echo $edit; ?>">
            <div class="form-group">
            <?php
            include 'FormHeader.php';
            ?>
            <div class="form-group">
                <input type="submit" value="Submit" class="btn formBtn">
            </div>

            </form>
    </body>
</html>