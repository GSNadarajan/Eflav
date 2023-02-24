<?= include("_template/_header.php") ?>

<body>

    <main>
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="https://eflav.in/ramcinemas/assets/img/logo.png" alt="Bootstrap" width="50" height="50">
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
                            <input type="text" class="form-control" onkeyup="check_name()" name="name" id="username" aria-describedby="emailHelp" required>
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white mt-3">Enter mobile number</label>
                            <input type="number" class="form-control" onkeyup="check_number()" name="number" id="number" aria-describedby="emailHelp" required>
                            <div id="msg" class="form-text note-text text-white"> NOTE : We'll never share the number with anyone.</div>
                            <div style="display:none" id="msg_number" class="form-text note-text text-white"> NOTE : Number must be 10 digit.</div>
                        </div>

                        <button type="submit" class="btn mb-4 order-btn btn-primary">Submit</button>
                    </form>
                </div>

                <!-- </div> -->
            </div>

        </div>

    </main>

    <?= include("_template/_scripts.php") ?>

    <script>
        function check_number() {

            var number = $("#number").val();
            var num_length = $("#number").val().length;
            //alert(register_number);

            if (num_length > 10) {
                $("#msg").hide()
                $("#msg_number").show()
                $(':input[type="submit"]').prop('disabled', true);
            } else {
                $("#msg_number").hide()
                $("#msg").show()
                $(':input[type="submit"]').prop('disabled', false);
            }
        }

        function check_name() {

            var value = $("#username").val();
            var arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
            for (j = 0; j < value.length; j++) {
                //console.log(value[j]);
                for (k = 0; k < arr.length; k++) {
                    if (value[j] != 0) {
                        if (arr[k] == value[j]) {  
                            alert("Name must be in text")
                        } 
                    }

                }
            }

        }
    </script>
</body>

</html>