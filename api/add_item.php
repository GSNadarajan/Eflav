<?php
include "../libs/load.php";

if(isset($_POST['name'])){
    $data = $_POST['name'];
    $item_count = $_POST['count'];
    session::set("item_count_".$data,$item_count);
    $count = 1;

    if(isset($_SESSION["$data"])){
        Session::set("add",1);
        $count = Session::get($data) + 1;
        Session::set($data,$count);
        Session::set("count",$count);
    }

    Session::set("add",TRUE);
    Session::set($data,$count);
    Session::set("count",$count);

    $json['success'] = true;
    $json['name'] = $data;
    $json['item_count'] = $item_count;
    $json['count'] = Session::get($data);

    echo json_encode($json);
}

if(isset($_POST['remove'])){
    $data = $_POST['remove'];
    $item_count = $_POST['count'];

    if($item_count == 0){
        Session::delete($data);
    }


    session::set("item_count_".$data,$item_count);

    if(isset($_SESSION["$data"])){
        Session::set("add",1);
        $count = Session::get($data) - 1;
        Session::set($data,$count);
        Session::set("count",$count);
    }

    $json['success'] = true;
    $json['name'] = $data;
    $json['item_count'] = $item_count;
    $json['count'] = Session::get($data);

    echo json_encode($json);
}