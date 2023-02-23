<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            overflow: hidden !important;
        }
    div.scrollmenu {
        /* background-color: #333; */
        overflow: auto;
        white-space: nowrap;
        
    }

    div.scrollmenu .nav-body{
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px;
        text-decoration: none;
    }

    div.scrollmenu a:hover {
        background-color: #777;
    }
    .nav-img{
        height: 50px;
        width:50px;
        border-radius: 25px;
    }
    </style>
</head>

<body>
    <div class="scrollmenu">
        <div class="nav-body">
            <a class="nav-link text-white" onclick="show_combo()"><img class="nav-img" src="./images/bevarages.jpg" ></a>
            <br>
            <span class="nav-text text-center">Combo</span>
        </div>
        <div class="nav-body">
            <a class="nav-link text-white" onclick="show_bevarges()"><img class="nav-img"
                    src="./images/bevarages.jpg"></a>
            <br>

            <span class="nav-text">Bevarages</span>
        </div>
        <div class="nav-body">
            <a onclick="show_snacks()" class="nav-link text-white "><img class="nav-img" src="./images/snacks.jpg"></a>
            <br>

            <span class="nav-text">Snacks</span>

        </div>
        <div class="nav-body">
            <a onclick="show_snacks()" class="nav-link text-white "><img class="nav-img" src="./images/snacks.jpg"></a>
            <br>

            <span class="nav-text">Snacks</span>

        </div>
        <div class="nav-body">
            <a onclick="show_snacks()" class="nav-link text-white "><img class="nav-img" src="./images/snacks.jpg"></a>
            <br>

            <span class="nav-text">Snacks</span>

        </div>
        <div class="nav-body">
            <a onclick="show_snacks()" class="nav-link text-white "><img class="nav-img" src="./images/snacks.jpg"></a>
            <br>

            <span class="nav-text">Snacks</span>

        </div>
        <div class="nav-body">
            <a onclick="show_popcorn()" class="nav-link text-white"><img class="nav-img" src="./images/popcorn.jpg"></a>
            <br>

            <span class="nav-text">Popcorns</span>
        </div>
        <div class="nav-body">
            <a onclick="show_popcorn()" class="nav-link text-white"><img class="nav-img" src="./images/popcorn.jpg"></a>
            <br>

            <span class="nav-text">Popcorns</span>
        </div>

    </div>

</body>

</html>