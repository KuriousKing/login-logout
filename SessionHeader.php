<?php
session_start();
        if(!isset($_SESSION['usrid']))
        {
                header("location: index.html");
        }
    ?>