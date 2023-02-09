<?php

include "libs/load.php";

echo "<pre>";
if(isset($_GET['delete'])){
    Session::destroy();
}
print_r($_SESSION);
echo "</pre>";