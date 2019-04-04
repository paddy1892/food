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
        
        <header class="sticky">
            <a href="index.php" class="logo">Admin Home</a>
        </header>
        
        
        <?php
        include("../password.php");
        include("../connect.php");
        
        $id = $_GET["mydataid"];
        
        $deletequery = "DELETE FROM foodmenu WHERE id= $id ";
        $result = mysqli_query($conn, $deletequery);
        
        echo "<p>congrats book id #$id deleted from system.</p>";
        
        ?>



    </body>
</html>
