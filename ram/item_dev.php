<?php
include "libs/load.php";
if(isset($_SESSION["order"])){
    
    Console::log("destroyed");
    $destroyed = "1";
    Session::destroy();
}

if(isset($_POST['seat_number']))
    $movie_id = $_POST['movie_name'];
    $movie_time = $_POST['movie_time'];
    $s_number  = $_POST['seat_number'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@800&family=Inter&family=Kaushan+Script&family=Merienda:wght@400;700&family=Oswald:wght@600&family=Poppins:wght@300&family=Roboto+Condensed:wght@300&family=Signika:wght@300;500&family=Tajawal&family=Teko:wght@300&display=swap" rel="stylesheet">
       
    <title>Eflav</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
 <style>
    .card {
        background: rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(1.5px);
        -webkit-backdrop-filter: blur(1.5px);
        border: 1px solid rgba(255, 255, 255, 0.41);
    }

    @media screen and (min-width:992px) {
        body {
            display: none;
        }
    }

    @media screen and (max-width:991px) {
        .lap-nav {
            display: none;
        }
    }

    @media screen and (min-width:992px) {
        #snacks {
            margin-top: 90px;
        }
    }

    @media screen and (max-width:991px) {
        #snacks {
            margin-top: 40px;
        }
    }

    .card_img {
        height: 120px;
        width: 120px;
        border-radius: 10px;
    }

    .navbar-brand {
        margin-left: 10px;
        color: white;
        font-weight: bold;
    }

    .navbar {
        background-color: #ff2c2c
    }

    .nav-img {
        border-radius: 50%;
        border: 2px solid #ff2c2c;
        height: 55px;
        width: 55px;
    }

    .nav-text {
        text-align: center;
        color: white;
    }

    .nav-body {
        text-align: center;
    }

    .card-title {
        color: white;
        font-weight: bold;
    }

    .cart {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #ff2c2c;
        width: 50px;
        height: 50px;
        right: 5px;
        margin-top: 5px;
        color: white;
        border: none;
        outline: none;
        border-radius: 50%;
    }

    .icon-cart__badge {
        position: absolute;
        top: 3px;
        right: 4px;
        width: 17px;
        height: 17px;
        background: white;
        color: #ff2c2c;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
    }
    .counter{
        float:right;
        color: white;
        margin-top:14px;
        background-color:#ff2c2c;
        padding:2px;
        border-radius:5px;
        /* padding:3px; */
    }
    .minus{
        background-color:#ff2c2c;
        border:none;
        font-size:21px;
        font-weight:bold;
    }
    .plus{
        background-color:#ff2c2c;
        border:none;
        font-size:21px;
        font-weight:bold;
        padding:5px;

    }
    .result{
        font-weight:bold;
        font-size:18px;
        color:white !important;
        background-color:#ff2c2c;
        padding:1.5px;
        border-radius:7px;
        margin-bottom: 2px;
    }

    </style>
</head>
<body style="background-color:#1a1a1a;font-family: 'Poppins', sans-serif;">
    <div class="mob-nav">
        <nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a href="item_dev.php
                " class="navbar-brand">Eflav</a>
                <!-- <p class="text-white mt-2">HEllo</p> -->

                <a href="cart_dev.php">
                    <button type="button" class="cart">
                        <span><i class="bi bi-cart-fill" style="font-size:25px;color:white;margin-right:8px;"></i></span>
                        <span id="cart_value" class="icon-cart__badge" style="padding:10px;font-weight:bold;font-size:14px">0</span>
                    </button>
                </a>

        </nav>



        <nav <?php
                // console::log($_SERVER['PHP_SELF']);
                if ($_SERVER['PHP_SELF'] ==  "/cart.php") {
                ?> style="display:none" <?php } ?> class="nav scrollmenu" style="margin-top: 80px;">
            <div class="nav-body">
                <a class="nav-link text-white" onclick="show_combo()"><img class="nav-img" src="./images/bevarages.jpg"></a>
                <span class="nav-text">Combo</span>
            </div>
            <div class="nav-body">
                <a class="nav-link text-white" onclick="show_bevarges()"><img class="nav-img" src="./images/bevarages.jpg"></a>
                <span class="nav-text">Bevarages</span>
            </div>
            <div class="nav-body">
                <a onclick="show_snacks()" class="nav-link text-white "><img class="nav-img" src="./images/snacks.jpg"></a>
                <span class="nav-text">Snacks</span>
            </div>
            <div class="nav-body">
                <a onclick="show_popcorn()" class="nav-link text-white"><img class="nav-img" src="./images/popcorn.jpg"></a>
                <span class="nav-text">Popcorns</span>
            </div>
        </nav>
        <span style="color:rgba(255, 255, 255, 2);font-size:10px;">
            <hr />
        </span>


    </div>
   <?php 
   
   
   include("category/combo.php");
//    include("category/beverages_final.php");
   include("category/beverages.php");
   include("category/popcorn.php");
   include("category/snacks.php");
   include("_template/_scripts.php");

   ?>
 