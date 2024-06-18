<?php

//establish the connection to database, and start the session
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.


?>

<!--Specifies document type is html-->
<!DOCTYPE html>
<!--Specifies the language as English-->
<html lang="en">
    <head>
        <!--instructs browser on how to control the page's dimensions and scaling-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title of index page-->
        <title>Welcome | GMS</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/stylee.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container"> 
                    <center>
                        <div id="banner_content">
                            <h1>Experience The Care.</h1>
                            <p>Flat 40% OFF on Spare of Maruti Suzuki </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="book.php" >
                            <div class="thumbnail">
                                <img src="img/001.jpg" alt="">
                                <div class="caption">
                                    <h3>Book a Service</h3>
                                    <p>We treat your car as like our car.</p>
                                    <p>So Trust us with your car</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="getquotee.php" >
                            <div class="thumbnail">
                                <img src="img/005.jpg" alt="">
                                <div class="caption">
                                    <h3>Get A Quote</h3>
                                    <p>Facing a problem ? We gotch'u</p>
                                    <p>Report your problem we will estimate your expense</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php" >
                            <div class="thumbnail">
                                <img src="img/006.jpg" alt="">
                                <div class="caption">
                                    <h3>Spares Section</h3>
                                    <p>We got all geniune spares direct from manufacturer to you at discounted rate</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>