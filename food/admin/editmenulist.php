<?php
session_start();

if(!isset($_SESSION["food_40155617"]))
{
    header("Location: login.php");
}

//connect to DB
include("../password.php");
include("../connect.php");


$query = "SELECT * FROM foodmenu";
$query2 = "SELECT * FROM foodstarters";

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$result2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));
?>
<!DOCTYPE html> 
<html> 
    <head> 
        <title>Café Ormo Admin</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 

        <link rel="stylesheet" href="https://gitcdn.link/repo/Chalarangelo/mini.css/master/dist/mini-default.min.css">
        <link rel="stylesheet" href="../assets/main.css">
    </head>

    <body>	

        <header class="sticky">
            <a href="index.php" class="logo">Admin Home</a>
        </header>
        <div class="container">

            <div class="col-sm-12 col-md-12  col-lg-12 ">
                <div class="section">

                    <h1>Admin -  Edit the Menu</h1>

                    <div class="row">
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {

                            $namedata = $row["name"];
                            $descriptiondata = $row["description"];
                            $pricedata = $row["price"];
                            $myid = $row["id"];

                            echo "
                <div class='col-sm-12 col-md-12  col-lg-12 changebk'>
    			<a href='editmenu.php?mydataid=$myid'>
                        <div class='section'>
                            <h3>$namedata</h3>
                            <p>Description: $descriptiondata</p>
                            <p>Price: $pricedata</p>
    			</div>
                        </a>
  		</div>";
                        }
                        ?>

                         <header>
                            <h1>Starters</h1>
                        </header>


                        <?php
                        while ($row2 = mysqli_fetch_assoc($result2)) {
                            //looped code
                            $namedata2 = $row2["name"];
                            $pricedata2 = $row2["price"];
                            $descriptiondata2 = $row2["description"];
                            $myid2 = $row2["id"];

                            echo "
                <div class='col-sm-12 col-md-12  col-lg-12 changebk'>
    			<a href='editstarter.php?mydataid=$myid2'>
                        <div class='section'>
                            <h3>$namedata2</h3>
                            <p>Description: $descriptiondata2</p>
                            <p>Price: $pricedata2</p>
    			</div>
                        </a>
  		</div>";
                        }
                        ?>



                    </div>
                </div>
            </div>
        </div>
    </body>

</html>