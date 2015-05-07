<?php

if($U->status==1){

    if($p_post['status']==1){
        include('templates/login.php');
    }elseif($p_post['status']==2){
        include('templates/login_no.php');
        include('templates/login.php');
    }else{
        include('templates/login.php');
    }

}elseif($U->status==2){
    if($p_post['status']==1){
        include('templates/login_yes.php');
    }else{
        include('templates/404.php');
    }
}else{
    include('templates/404.php');
}

