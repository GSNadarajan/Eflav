<?php
include "libs/load.php";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
$data = new Unique("orders",56);
print_r(unserialize($data->getDetails()));