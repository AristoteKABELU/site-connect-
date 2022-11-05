<?php
require_once('src/controllers/homepage.php');

try{
    if( isset($_GET['action']) && $_GET['action'] !== '' ){
        if($_GET['action'] === 'inscription'){
        echo 'lol';
        }
    }else{
        homepage();
    }
}catch(Exception $e)
{
    echo $e;
}