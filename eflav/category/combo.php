<?php
$db = new Unique("food", "-");
$combo = $db->getTotalBased("cat_id", "4");
foreach ($combo as $key => $value) {
?>

    <div class="col">
        <div class="card shadow-sm zoom car1" data-aos="zoom-in">
            <div class="card-body mt-2" style="height:230px;width:100%">
                <div style="text-align: center;padding:10px">

                    <?php
                    $images = explode(",",$value['image_url']);
                    $price = explode(",",$value['price'])
                    ?>
                    <img src="<?=$images[0]?>" class="img-fluid ml-5 card_img">
                    <span style="color:white;padding:5px;"> + </span>
                    <img src="<?=$images[1]?>" class="img-fluid ml-5 card_img">
                </div>

                <div style="text-align:left;">
                    <h3 class="mr-5 " style="font-weight:bold;font-size:25px;color:white;margin-top:10px;"><?=ucfirst($value['name'])?></h3>
                    <br>
                    <h6 class="" style="color:white;margin-top:-30px;"><s>Rs:<?=$price[0]?>/</s>
                        <bold>&nbsp;&nbsp;Rs:<?=$price[1]?>/-</bold>
                    </h6>
                    <br>

                </div>
                <button type="button" class="btn mr-1" style="float:right;background-color:#ff2c2c;color:white;margin-top:-68px;">Add +</button>

            </div>
        </div>
    </div>

<?php
}
?>