<section id="beverages">
    <div class="container mt-5" style="margin-top:40px !important;">
        <h3 class="card-title">Bevarages</h3>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-3 mt-4">
            <?php
$db = new Unique("food","-");
$beverages = $db->getTotalBased("type_id", "3");

foreach ($beverages as $key => $value) {
    ?>


            <div class="col">
                <div class="card shadow-sm zoom car1">
                    <div class="card-body mt-2" style="height:160px;width:100%">
                        <img src="<?= $value['image_url']?>" class="img-fluid ml-5 card_img">
                        <?php
                  
                    $price = explode(",",$value['price'])
                    ?>

                        <h3 class="mr-5"
                            style="float:right;font-weight:bold;font-size:17px;color:white;margin-top:10px;">
                            <?=$value['name']?></h3>
                        <br>
                        <h6 class="" style="float:right;opacity:1;color:white;margin-top:-75px;">
                            <s>Rs:<?=$price[0]?>/</s>
                            <bold>&nbsp;&nbsp;Rs:<?=$price[1]?>/-</bold> <br>



                            <div style="float:right;color: white;margin-top:20px !important;">
                                <div id="show2_<?=$value['id']?>" class="hide" style="display:none;">
                                    <button onclick="revert()" onclick="totalclick(-1)">-</button>
                                    <span id="totalclicks">0</span>
                                    <button onclick="totalclick(1)">+</button>
                                    <br>
                                </div>


                                <div onclick="localStorage.setItem('count','10')" class="show">
                                
                                    <button type="button" onclick="show_btn()" onclick="add_item('2',<?=$value['id']?>)"
                                        class="btn mr-1"
                                        style="float:right;background-color:#ff2c2c;color: white;margin-top:10px;">Add
                                        +</button>
                                </div>
                            </div>



                    </div>
                </div>
            </div>
            <script>
            function show_btn() {
                $(".show").css("display", "none");
                $(".hide").css("display", "block");
            }

            function revert() {
                var result = $("#totalclicks").text();
                // console.log("working");
                if (result == 0) {
                    $(".show").css("display", "block");
                    $(".hide").css("display", "none");
                }

            }
            </script>
            <?
}

?>

        </div>
    </div>
</section>
<script>
function totalclick(click) {
    const totalclicks = document.getElementById('totalclicks');
    const sumvalue = parseInt(totalclicks.innerText) + click;
    totalclicks.innerText = sumvalue;

    if (sumvalue < 0) {
        totalclicks.innerText = 0;
    }
}
</script>