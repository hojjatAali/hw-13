<?php


function view($name){

    require  './src/views/'. $name .'.php';

}

function login(array $user){


    $_SESSION[$user['token']] = $user['token'];
    setcookie('token', $user['token']);

}

function logout(){
    $_SESSION[$_COOKIE['token']] = null;
    $_COOKIE['token'] = null;
}

function redirect($name){
    header("Location:{$name}");
}