<?php


function check_session($check_role){
    if($check_role == 1){
        if(!isset($_SESSION['username']) || !isset($_SESSION['role']) || $_SESSION['role'] != "administrator") {
            Header('Location:login.php');
        }
    }
    else{
        if(!isset($_SESSION['username'])){
            Header('Location:login.php');
        }
    }
}