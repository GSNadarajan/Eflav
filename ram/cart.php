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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Eflav</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
        .mt-5 {
            margin-top: 10rem !important;
        }

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

        .table {
            --bs-table-color: #929292;
        }
    </style>
</head>

<body style="background-color:#1a1a1a;font-family: cursive;">
    <div class="mob-nav">
        <nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <?php
                if (isset($_GET['order_success'])) {
                ?>
                    <div>
                        <a href="index.php" style="text-decoration:none;color:white;font-size:25px;"><i class="bi bi-arrow-left-circle-fill"></i></a>
                        <a href="index.php " style="color:white !important" class="navbar-brand">Eflav</a>
                    </div>
                <?php
                } else {
                ?>
                    <div>
                        <a href="item.php" style="text-decoration:none;color:white;font-size:25px;"><i class="bi bi-arrow-left-circle-fill"></i></a>
                        <a href="item.php " style="color:white !important" class="navbar-brand">Eflav</a>
                    </div>
                <?php
                }
                ?>
                <a href="cart.php">
                    <button type="button" class="cart">
                        <span><i class="bi bi-cart-fill" style="font-size:25px;color:white;margin-right:8px;"></i></span>
                        <span id="cart_value" class="icon-cart__badge">0</span>
                    </button>
                </a>

            </div>
        </nav>

    </div>
    <?php


    if (isset($_GET['order_success'])) {


    ?>

        <script>
            localStorage.clear()
        </script>
        <?php

        if (Session::isset("order")) {
            Console::log("order already done");
            echo ' <div class="alert alert-secondary mt-5 m-3" role="alert">
        Already Order placed successfully!
     </div>';
        } else {
            Console::log("order is here");
            $name = Session::get("name");
            $number = Session::get("number");
            $movie_nd_time = Session::get("movie_nd_time");
            $total_amount = Session::get("total_amount");
            $seat_number = Session::get("seat_number");
            // session::destroy();
            Session::delete("name");
            Session::delete("number");
            Session::delete("add");
            Session::delete("count");
            Session::delete("total_amount");
            Session::delete("seat_number");
            Session::delete("movie_nd_time");

            $details = serialize($_SESSION);

            $insert_data = [
                "customer_name" => $name,
                "customer_contact" => $number,
                "movie_nd_time" => $movie_nd_time,
                "seat_number" => $seat_number,
                "details" => $details,
                "total" => $total_amount
            ];

            $db = new Unique("orders", "0");
            $result = $db->insert_data($insert_data);
            if ($result) {
                
                // session::destroy();
                Session::set("order", "done");
                echo ' <div class="alert alert-success mt-5 m-3" role="alert">
        Order placed successfully!
     </div>';
            } else {
                echo ' <div class="alert alert-danger mt-5 m-3" role="alert">
        Error in database!
     </div>';
            }
        }
    } else {
        if (Session::isset("add")) {
        ?>
            <div class="container mt-5">
                <div class="row" style="margin: 34px;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">S.no</th>
                                <th scope="col">Name</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $final_amount = [];
                            $data = $_SESSION;
                            $i = 1;
                            foreach ($data as $key => $value) {
                                if ($key != "number" && $key != "name") {
                                    if ($key != "total_amount" && $key != "add" && $key != "count" && !stristr($key, "item_count_") && $key != "seat_number"  && $key != "movie_nd_time") {
                                        $split = explode("_", $key);
                                        $item_id = $split[1];

                                        $db = new Unique("food", $item_id);
                                        $rate = $db->getPrice();
                                        $name = $db->getName();
                                        $split_rate = explode(",", $rate);
                                        $total = $value * $split_rate[1];
                            ?>

                                        <tr>
                                            <th scope="row"><?= $i ?></th>
                                            <td><?= $name ?></td>
                                            <td><?= $value ?>(<?= $split_rate[1] ?>)</td>
                                            <td><?= $total ?></td>
                                        </tr>

                            <?php
                                        $final_amount[] = $total;
                                        $i = $i + 1;
                                    }
                                }
                            }
                            ?>


                            <tr>
                                <th scope="row"></th>
                                <td colspan="2">Total amount</td>
                                <td><?php
                                    Session::set("total_amount", array_sum($final_amount));
                                    echo array_sum($final_amount);

                                    ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <center>
                    <a href="#">
                        <?php
                        if (Session::get("total_amount") == 0) {
                        ?>
                            <button disabled type="submit" class="btn mb-4 order-btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor" viewBox="0 0 16 16">
                                    <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z" />
                                </svg> Confirm order </button> </a>
                <?php
                        } else {

                ?>

                    <a href="cart.php?order_success">

                        <button type="submit" class="btn mb-4 order-btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor" viewBox="0 0 16 16">
                                <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z" />
                            </svg> Confirm order </button> </a>
                <?php
                        }
                ?>
                </center>

            </div>

        <?php
        } else {
        ?>
            <div class="" style="margin-top:40vh">
                <center>
                    <img src="https://nattu.me/ram/images/oops.gif" alt="Girl in a jacket" width="100" height="100">

                </center>
                <h3 class="mr-5" style="font-weight:bold;font-size:25px;color:white;text-align:center;margin-top:40px"> Go back to
                    order</h3>
            </div>
    <?php

        }
    }
    include "_template/_scripts.php";
