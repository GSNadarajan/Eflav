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

<?php

include "_template/_nav.php";

if (isset($_GET['order_placed'])) {

    $name = Session::get("name");
    $number = Session::get("number");
    $details = serialize($_SESSION);
    $total_amount = Session::get("total_amount");
    // session::destroy();

    $insert_data = [
        "customer_name" => $name,
        "customer_contact" => $number,
        "details" => $details,
        "total" => $total_amount
    ];

    $db = new Unique("orders", "0");
    $result = $db->insert_data($insert_data);
    if ($result) {
        session::destroy();
        echo ' <div class="alert alert-success m-3" role="alert">
        Order placed successfully!
     </div>';
    } else {
        echo ' <div class="alert alert-danger m-3" role="alert">
        Error in database!
     </div>';
    }
} else {
?>
    <div class="container">
        <div class="row" style="margin: 34px;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S.no</th>
                        <th scope="col">Category</th>
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
                            $split = explode("_", $key);
                            $item_id = $split[1];

                            $db = new Unique("food", $item_id);
                            $rate = $db->getPrice();
                            $split_rate = explode(",", $rate);
                            $total = $value * $split_rate[1];
                    ?>

                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $split[0] ?></td>
                                <td><?= $value ?>(<?= $split_rate[1] ?>)</td>
                                <td><?= $total ?></td>
                            </tr>

                    <?php
                            $final_amount[] = $total;
                            $i = $i + 1;
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
            <a href="cart.php?order_placed">


                <button type="submit" class="btn mb-4 order-btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor" viewBox="0 0 16 16">
                        <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z" />
                    </svg> Confirm order </button> </a>
        </center>
    </div>

<?php
}
include "_template/_scripts.php";
