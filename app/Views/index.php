<?php

include_once "layout/header.php";
include_once "layout/navbar.php";

if(isset($data['viewContent']) && file_exists("../app/Views/".$data['viewContent'].".php")){
    include_once $data['viewContent'].".php";
}else{
    include_once "errors/viewNotFound.php";
}

include_once "layout/footer.php";