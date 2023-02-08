<?php
include "libs/load.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet" href="dist/css/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
    </style>
</head>

<body style="background-color:#1a1a1a;">

    <!--Mobile navbar-->
    <div class="mob-nav">
        <nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand">Eflav</a>
                <!-- <p class="text-white mt-2">HEllo</p> -->

                <button type="button" class="cart">
                    <span><i class="bi bi-cart-fill" style="font-size:25px;color:white;margin-right:8px;"></i></span>
                    <span class="icon-cart__badge">2</span>
                </button>
            </div>
        </nav>

        <nav class="nav scrollmenu" style="margin-top: 80px;">
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


    <section id="combo">
        <div class="container mt-2" style="margin-top:30px !important;">
            <h3 class="card-title">Combo</h3>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-3 mt-3">

                <?=include("category/combo.php")?>

            </div>

        </div>

    </section>

    <section id="snacks">
        <div class="container mt-2" style="margin-top:50px !important;">
            <h3 class="card-title">Snacks</h3>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-3 mt-3">


                <div class="col">
                    <div class="card shadow-sm zoom">
                        <div class="card-body mt-2" style="height:160px;width:100%">
                            <img src="./images/popcorn.jpg" class="img-fluid ml-5 card_img">


                            <h3 class="mr-5" style="float:right;font-weight:bold;font-size:25px;color:white;margin-top:10px;">Popcorn</h3>
                            <br>
                            <p class="mr-5" style="float:right;opacity:0.5;color:white;margin-top:-80px;">Price: 50rs</p>
                            <br>
                            <button type="button" class="btn mr-1" style="float:right;background-color:#ff2c2c;color: white;margin-top:-68px;">Add +</button>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section id="beverages">

        <div class="container mt-5" style="margin-top:40px !important;">
            <h3 class="card-title">Bevarages</h3>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-3 mt-4">

                <!-- first colomn -->

              <?=include("category/beverages.php");?>
            
            </div>

        </div>

    </section>
    <section id="popcorn">
        <div class="container mt-2" style="margin-top:40px !important;">
            <h3 class="card-title">Popcorns</h3>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-3 mt-3">

                <div class="col">
                    <div class="card shadow-sm zoom car1">
                        <div class="card-body mt-2" style="height:160px;width:100%">
                            <img src="./images/popcorn.jpg" class="img-fluid ml-5 card_img">


                            <h3 class="mr-5" style="float:right;font-weight:bold;font-size:25px;color:white;margin-top:10px;">Popcorn</h3>
                            <br>
                            <p class="mr-5" style="float:right;opacity:0.5;color:white;margin-top:-80px;">Price: 50rs</p>
                            <br>
                            <button type="button" class="btn mr-1" style="float:right;background-color:#ff2c2c;color:white;margin-top:-68px;">Add +</button>

                        </div>
                    </div>
                </div>


            </div>

        </div>

    </section>



    <script>
        function show_snacks() {
            $("#snacks").show();
            $("#beverages").hide();
            $("#popcorn").hide();
            $("#combo").hide();
        }

        function show_popcorn() {
            $("#popcorn").show();
            $("#snacks").hide();
            $("#beverages").hide();
            $("#combo").hide();
        }

        function show_bevarges() {
            $("#beverages").show();
            $("#snacks").hide();
            $("#combo").hide();
            $("#popcorn").hide();
        }

        function show_combo() {
            $("#combo").show();
            $("#popcorn").hide();
            $("#snacks").hide();
            $("#beverages").hide();
        }
    </script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- <script src="http://localhost:3002/dist/aos.js"></script> -->

    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });
    </script>

    <script>
        hljs.initHighlightingOnLoad();

        $('.hero__scroll').on('click', function(e) {
            $('html, body').animate({
                scrollTop: $(window).height()
            }, 1200);
        });
    </script>
</body>


</html>