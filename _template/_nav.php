<body style="background-color:#1a1a1a;font-family: cursive;">
    <div class="mob-nav">
        <nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a href="item.php
                " class="navbar-brand">Eflavv</a>
                <!-- <p class="text-white mt-2">HEllo</p> -->

                <a href="cart.php">
                    <button type="button" class="cart">
                        <span><i class="bi bi-cart-fill" style="font-size:25px;color:white;margin-right:8px;"></i></span>
                        <span id="cart_value" class="icon-cart__badge">0</span>
                    </button>
                </a>

            </div>
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