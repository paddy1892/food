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
        include("../password.php");
        include("../connect.php");
        
        $editname2 = $_POST["startername"];
        $editdescription2 = $_POST["startername"];
        $editprice2 = $_POST["starterprice"];
        $rowid2 = $_POST["starterid"];
        
        echo $editname2;
        echo $editdescription2;
        echo $editprice2;
        echo $rowid2;
        
        $updatequery2 = "UPDATE foodstarters SET name='$editname2', description='$editdescription2', price='$editprice2' WHERE id= $rowid2";
        
        $result = mysqli_query($conn, $updatequery2) or die(mysqli_error($conn));
        
        ?>
    </body>
</html>
