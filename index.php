<?php
//test
session_start();
include('include/config/setting.php');
$S = new Config;
if($S->site_error==1){
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}
$U = new User;

include('include/_post.php');

if($U->status==9){
    include('include/error_login.php');
}
if($S->site_status==1){

    if($U->status==2){
        include('templates/header.php');
    }else{
        include('templates/header_quest.php');
    }
    echo '<div class="consite">';
if(!isset($_SESSION['reg'])){  
    
    switch ($_GET['url']){
        case 'index':
            include('include/index.php');
            break;
        case 'login':
            include('include/login.php');
            break;
        case 'register':
            if($S->ver('register_status', 1)==1){
                include('include/register.php');
            }else{
                include('templates/404.php');   
            }
            break;
        case 'np2':
            include('include/register.php');
            break;
        case 'logout':
            include('include/logout.php');
            break;
        case 'business':
        case 'business_rcuriers':
        case 'business_rshop':
            include('include/business.php');
            break;
        //user zarzadzanie paczkami
        case 'pack_send':
        case 'pack_info': 
        case 'pack_close':
        case 'pack_search':
            include('include/pack.php');
            break;
        case 'ustawienia':
        case 'ustawienia_e':
        case 'ustawienia_h':
            include('include/profil.php');
            break;
        case 'o_nas':
        case 'wspolpraca':
            include('include/quest.php');
            break;
        case 'ustawienia_dostaw':
            include('include/b_u_dostawa.php');
            break;
        default:
            include('include/index.php');
            break;
    }
    

    
}elseif(isset($_SESSION['reg'])){  

    switch ($_GET['url']){
        case 'register':
            include('include/register.php');
            break;
        case 'np2':
            include('include/register.php');
            break;
        case 'logout':
            include('include/logout.php');
            break;
        default:
            include('include/logout.php');
            break;
    }

}
 
}

if($S->site_error==1){
    echo'Config:</br>';
    print_r($S);
    echo'</br>User:</br>';
    print_r($U);
    include('manual-link.php');
    include('info.php');
}


     if($U->status==2){
        include('templates/footer.php');
    }else{
        include('templates/footer_quest.php');
    }  
?>