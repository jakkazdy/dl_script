<?php

if($U->status==1){
   
    include('templates/index_1.php');
}elseif($U->status==2){
    $view_user_stat=$U->view_user_stat();
    $view_user_money=$U->view_user_wallet();
    include('templates/index_2.php');
}
