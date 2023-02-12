<?php
include "../libs/load.php";

if(isset($_POST['name'])){
    $data = $_POST['name'];
    
    $count = 1;

    if(isset($_SESSION["$data"])){
        Session::set("add",1);
        $count = Session::get($data) + 1;
        Session::set($data,$count);
    }

    Session::set("add",1);
    Session::set($data,$count);

    $json['success'] = true;
    $json['name'] = $data;
    $json['count'] = Session::get($data);

    echo json_encode($json);
}