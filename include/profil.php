<?php

if($U->status==2){
    
    if($_GET['url']=='ustawienia'){
        include('include/class/profil.php');
        $view_user_money=$U->view_user_wallet();
        $user_date=(new Profil)->info($U->email);

        include('templates/profil.php');

    }elseif($_GET['url']=='ustawienia_e'){
        
        include('include/class/profil.php');

        if(!isset($_POST['send'])){
            
            $user_date=(new Profil)->info($U->email);
            include('templates/profil_e.php');
            
            
        }elseif($_POST['send']=='edit_profil'){
            $profil_e=(new Profil)->edit($_POST,$U->email,$_SESSION);
            
            if($profil_e==1){
                $user_date=(new Profil)->info($U->email);
                include('templates/profil_e_yes.php');
                include('templates/profil.php');
            }else{
                include('templates/profil_e_no.php');
                include('templates/profil_e.php');
            }
        }else{
            include('templates/404.php');
        }
        
    }elseif($_GET['url']=='ustawienia_h'){
        
        
        include('include/class/profil.php');
        
        if(!isset($_POST['send'])){
            
            include('templates/profil_h.php');
            
        }elseif($_POST['send']=='ph'){
            $profil_h=(new Profil)->nh($_POST,$U->email,$active);
            if($profil_h==1){
                $adress=(new Profil)->info($U->email);
                include('templates/profil_h_yes.php');
                include('templates/profil.php');
            }else{
                include('templates/profil_h_no.php');
                include('templates/profil_h.php');
            }
        }else{
            include('templates/404.php');
        }
        
    }else{
        include('templates/404.php');
    }
    
}else{
    include('templates/404.php');
}

