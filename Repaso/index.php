<?php
session_start();
$metodo = $_SERVER["REQUEST_METHOD"];
if($metodo == "GET"){
    if(isset($_GET["logout"]) && $_GET["logout"] == 1){
        session_destroy();
        header("Location: index.php");
    }else{
        require_once("Vista/form.php");
    }
}