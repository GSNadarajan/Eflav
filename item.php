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
    </style>
</head>

   <?php 
   
   include "_template/_nav.php";
   include("category/combo.php");
   include("category/snacks.php");
   include("category/beverages.php");
   include("category/popcorn.php");
   include("_template/_scripts.php");

   ?>
 
  
