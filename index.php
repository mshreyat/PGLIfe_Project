<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | PG Life</title>
    <link href="css/index.css" rel="stylesheet" />
    <?php
    include "includes/head_links.php";
    ?>
</head>
<body>

    <?php
    include "includes/header.php";
    ?>

        <div id="loading"></div>

        <div class="container-banner">
            <h3 class="white pb-3">Happiness per Square Foot</h3>
            <form class="search-form" action="property_list.php" method="GET">
            <div class="input-group city-search">
                <input type="text" class="form-control search-input" id="city" name="city" placeholder="Enter your city to search for PGS">
                <div class="input-group-append">
                    <button class=" btn-secondary" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            </form>
        </div> 
        <div class="page-container">
            <h2 class="city-names">
            Major Cities
            </h2>
            <div class="row">
            <div class="card-container col-md ">
                <a href="property_list.php?city=delhi">
                    <div  class="city-card rounded-circle ">
                    <img src="img\delhi.png" class="city-img">
                    </div>
            </div>
            <div class="card-container col-md ">
                <a href="property_list.php?city=hyderabad">
                    <div  class="city-card rounded-circle">
                    <img src="img\hyderabad.png" class="city-img">
                    </div>
            </div>
            <div class="card-container col-md ">
                <a href="property_list.php?city=mumbai">
                    <div  class="city-card rounded-circle">
                    <img src="img/mumbai.png" class="city-img">
                    </div>
            </div>
            <div class="card-container col-md ">
                <a href="property_list.php?city=bangalore">
                    <div  class="city-card rounded-circle">
                    <img src="img/chennai.png" class="city-img ">
                    </div>
            </div>
        </div> 
        </div>


        <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>