<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        // put your code here
        session_start();
        unset($_SESSION['userid']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['mobile']);
        unset($_SESSION['Theatre_Name']);
        session_destroy();
        header("location:index.php");
        ?>
    </body>
</html>
