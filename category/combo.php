<section id="combo">
    <div class="container mt-2" style="margin-top:30px !important;">
        <h3 class="card-title">Combo</h3>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-3 mt-3">
            <?php
            $db = new Unique("food", "-");
            $combo = $db->getTotalBased("type_id", "1");
            foreach ($combo as $key => $value) {
            ?>

                <div class="col">
                    <div class="card shadow-sm zoom car1" data-aos="zoom-in">
                        <div class="card-body mt-2" style="height:230px;width:100%">
                            <div style="text-align: center;padding:10px">

                                <?php
                                $images = explode(",", $value['image_url']);
                                $price = explode(",", $value['price'])
                                ?>
                                <img src="<?= $images[0] ?>" class="img-fluid ml-5 card_img">
                                <span style="color:white;padding:5px;"> + </span>
                                <img src="<?= $images[1] ?>" class="img-fluid ml-5 card_img">
                            </div>

                            <div style="text-align:left;">
                                <h3 class="mr-5 " style="font-weight:bold;font-size:25px;color:white;margin-top:10px;">
                                    <?= ucfirst($value['name']) ?></h3>
                                <br>
                                <h6 class="" style="color:white;margin-top:-30px;"><s>Rs:<?= $price[0] ?>/</s>
                                    <bold>&nbsp;&nbsp;Rs:<?= $price[1] ?>/-</bold>
                                </h6>
                                <br>

                            </div>
                            <button type="button" onclick="add_item('1',<?=$value['id']?>)" class="btn mr-1" style="float:right;background-color:#ff2c2c;color:white;margin-top:-68px;">Add +</button>

                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
</section>