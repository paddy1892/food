<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include("../password.php");
        include("../connect.php");
        
        $id = $_GET["mydataid"];
        
        $deletequery = "DELETE FROM foodstarters WHERE id= $id ";
        $result = mysqli_query($conn, $deletequery);
        
        echo "<p>congrats book id #$id deleted from system.</p>";
        
        ?>



    </body>
</html>

