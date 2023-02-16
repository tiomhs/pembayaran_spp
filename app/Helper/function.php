<?php 

function redirect($path){
    header('location:'.BASEURL.$path);
    exit;
}