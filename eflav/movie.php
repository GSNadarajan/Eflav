<?php

include "libs/load.php";
include "_template/_header.php";

// get the name and number 

if (Session::isset("number") && Session::isset("name")) {
    $name = Filter::input($_POST['name']);
    $number = Filter::input($_POST['number']);
    Session::set("name", $name);
    Session::set("number", $number);
}

?>

<body>

    <main>
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.svg" alt="Bootstrap" width="50" height="50">
                </a>
            </div>
        </nav>

        <div class="mt-5 card outer-card text-center">
            <form action="item.php" method="post" style="margin: 0px;">
                <!-- <h1 class="display-4 fw-bold">Centered screenshot</h1> -->
                <!-- <div class="overflow-hidden" style="max-height: 30vh;"> -->
                <div class="container px-4">
                    <div class="mb-1">

                        <label for="exampleInputEmail1" class="form-label text-white mt-3">Select movie</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select movie</option>
                            <option value="varisu">Varisu</option>
                            <option value="thunivu">Thunivu</option>
                            <option value="KGF">KGF</option>
                        </select>
                    </div>
                </div>
                <div class="container px-4">
                    <div class="">


                        <div class="mb-1">
                            <label for="exampleInputEmail1" class="form-label text-white mt-3">Enter movie time</label>
                            <input type="text" class="form-control" name="movie_time" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white mt-3">Enter sear number</label>
                            <input type="text" class="form-control" name="seat_number" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text note-text text-white"> NOTE : Kindly be there in the exact seat number to help us deliver foods on time.</div>
                        </div>

                        <button type="submit" class="btn mb-4 order-btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor" viewBox="0 0 16 16">
                                <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z" />
                            </svg> Continue to order </button>

                    </div>

                    <!-- </div> -->
                </div>
            </form>
        </div>





    </main>

    <?= include("_template/_scripts.php") ?>

</body>

</html>