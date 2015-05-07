<?php

if($U->status==1){ //gość
    if($_POST['send']=='login'){
        include('include/class/login.php');
        $p_post = (new Login)->send();
        if($p_post['status']==1){
            $U->ResetObject();
        }
    }elseif($_POST['send']=='register'){
        include('include/class/register.php');
        $p_post = (new Register)->send();
        
    }

}elseif($U->status==2){ //zalogowany
    if($_GET['url']=='logout'){
        session_destroy();
        $U->Logout();
        $p_post['status']=1;
    }
}

if($U->level>3){ //moderator
    
}




