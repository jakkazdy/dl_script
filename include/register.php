<?php

if($U->status==1){
    if($_POST['send']=='register'){
        if($p_post['status']==1){
            include('templates/register_yes.php');
        }elseif($p_post['status']==4){
            include('templates/register_b2b.php');
        }else{
            include('templates/register_no.php'); 
            include('templates/register.php');
        }
    }else{
        include('templates/register.php');
    }
    
}elseif($U->status==2){

    if(($_POST['send']=='new_password2') OR ($_POST['send']=='new_password2_b2b')){
        
            include('include/class/register.php');
            $view = (new Register)->np2();
                if($view['posti']==1){
            if($_POST['send']=='new_password2_b2b'){
                include('templates/register_yes2.php');
            }else{
                include('templates/register_yes2_1.php');
            }
        }else{

            include('templates/register_no.php'); 
            include('templates/register.php');
        }
    }else{
        include('templates/404.php');
    }
    
}else{
    include('templates/404.php');
}
