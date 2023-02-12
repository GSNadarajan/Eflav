<?= include("_template/_header.php") ?>

<body>

    <main>
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.svg" alt="Bootstrap" width="50" height="50">
                </a>
            </div>
        </nav>

        <div class="mt-2 card outer-card text-center">
            <!-- <h1 class="display-4 fw-bold">Centered screenshot</h1> -->
            <!-- <div class="overflow-hidden" style="max-height: 30vh;"> -->
            <div class="container px-4">
                <img src="assets/img/ram.png" class="img-fluid border rounded-3 shadow-lg mt-5 mb- 4" alt="Example image" width="250" height="60" loading="lazy">
            </div>
            <div class="container px-4">
                <div class="">

                    <form action="movie.php" method="post" style="margin: 0px;">
                        <div class="mb-1">
                            <label for="exampleInputEmail1" class="form-label text-white mt-3">Enter customer name</label>
                            <input type="phone" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white mt-3">Enter mobile number</label>
                            <input type="phone" class="form-control" name="number" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            <div id="emailHelp" class="form-text note-text text-white"> NOTE : We'll never share the number with anyone.</div>
                        </div>

                        <button type="submit" class="btn mb-4 order-btn btn-primary">Submit</button>
                    </form>
                </div>

                <!-- </div> -->
            </div>

        </div>

    </main>

    <?= include("_template/_scripts.php") ?>

</body>

</html>