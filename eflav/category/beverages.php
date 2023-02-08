<?php
$db = new Unique("food","-");
$beverages = $db->getTotalBased("cat_id", "3");
foreach ($beverages as $key => $value) {
    ?>
<div class="col">
    <div class="card shadow-sm zoom car1">
        <div class="card-body mt-2" style="height:160px;width:100%">
            <img src="<?= $value['image_url']?>" class="img-fluid ml-5 card_img">
            <?php
                  
                    $price = explode(",",$value['price'])
                    ?>

            <h3 class="mr-5" style="float:right;font-weight:bold;font-size:25px;color:white;margin-top:10px;">
                <?=$value['name']?></h3>
            <br>
            <h6 class="" style="float:right;opacity:1;color:white;margin-top:-75px;"><s>Rs:<?=$price[0]?>/</s>
                <bold>&nbsp;&nbsp;Rs:<?=$price[1]?>/-</bold> <br>
                <button type="button" class="btn mr-1"
                    style="float:right;background-color:#ff2c2c;color: white;margin-top:18px;">Add +</button>

        </div>
    </div>
</div>
<?
}
?>