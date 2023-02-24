<?php
session_start();
session_destroy();
?>
<?=include "_template/_header.php";?>
<body class="text-center">

    <main class="form-signin w-100 m-auto">
            <img class="mb-4" src="https://eflav.in/ramcinemas/assets/img/logo.png" alt="" width="200" height="200">
            <h1 class="h1 mb-3 fw-normal text-white"> EFLAV</h1>

            <button class="w-100 order-btn btn btn-lg btn-primary" onclick="redirect()" type="submit">Tap to order</button>
    </main>

    <?=include("_template/_scripts.php")?>
</body>

</html>