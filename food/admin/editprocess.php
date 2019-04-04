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

        //menu 
        $editname = $_POST["menuname"];
        $editprice = $_POST["menuprice"];
        $editdescription = $_POST["menudescription"];
        $rowid = $_POST["menuid"];
        
  
        
        echo $editname;
        echo $editprice;
        echo $editdescription;
        echo $rowid;
        
        
        
        $updatequery = "UPDATE foodmenu SET name='$editname', description='$editdescription', price='$editprice' WHERE id= $rowid ";

        $result = mysqli_query($conn, $updatequery) or die(mysqli_error($conn));
        ?>



    </body>
</html>
