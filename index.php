<?php
require_once('src/controllers/homepage.php');
require_once('src/controllers/inscription.php');

try{
    if( isset($_GET['action']) && $_GET['action'] !== '' ){
        if($_GET['action'] === 'inscription'){
            inscription();
        }
    }else{
        homepage();
    }
}catch(Exception $e)
{
    echo $e;
}