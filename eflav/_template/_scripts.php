<script src="assets/js/main.js"></script>
<script src="assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>



<script>
    //jquery hide and show for navbar
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