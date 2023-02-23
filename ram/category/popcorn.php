<section id="popcorn">
    <div class="container mt-2" style="margin-top:30px !important;margin-bottom:74px;">
        <h3 class="card-title">Popcorns</h3>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-3 mt-3">
            <?php
                $db = new Unique("food", "-");
                $popcorn = $db->getTotalBased("type_id", "2");
                foreach ($popcorn as $key => $value) {
            ?>

            <div class="col">
                <div class="card shadow-sm zoom car1" >
                    <div class="card-body mt-2" style="height:160px;width:100%">
                    <img src="<?= $value['image_url'] ?>" class="img-fluid ml-5 card_img">
                            <?php

                            $price = explode(",", $value['price'])
                            ?>

                            <h3 class="mr-5" style="float:right;font-weight:bold;font-size:14px;color:white;margin-top:10px;">
                                <?= $value['name'] ?></h3>
                            <br>
                            <h6 class="" style="float:right;opacity:1;color:white;margin-top:-75px;">
                                <s>Rs:<?= $price[0] ?>/</s>
                                <bold>&nbsp;&nbsp;Rs:<?= $price[1] ?>/-</bold> <br>

                        <div class="counter"style="">

                            <button onclick="totalclick(-1,2,<?=$value['id']?>)"class="minus">-</button>
                            <span id="totalclicks_2_<?=$value['id']?>" class="result"><?php
                            if($destroyed != 1){
                                $item_id = $value['id'];
                                $session_key = "2_$item_id";
                                if(isset($_SESSION["$session_key"])){
                                    Console::log($session_key);
                                    echo Session::get($session_key);
                                }else{
                                    echo "0";
                                }
                            }else{
                                echo "0";
                            }
                            


                            ?></span>
                            <button onclick="totalclick(1,2,<?=$value['id']?>)" class="plus">+</button>

                        </div>

                        <!-- <button type="button" onclick="add_item('1',<?=$value['id']?>)" class="btn mr-1" style="float:right;background-color:#ff2c2c;color:white;margin-top:-68px;">Add +</button> -->

                    </div>
                </div>
            </div>

            <?php
            }
            ?>
        </div>
    </div>
</section>