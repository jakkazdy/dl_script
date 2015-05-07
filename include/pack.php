<?php

if($U->status==2){
    
    if($_GET['url']=='pack_send'){
        if($_POST['send']=='pack_send'){
            
            include('include/class/pack_send.php');
            $view = (new PackSend)->send($U->id);

            if($view['info']==1){
                include('templates/pack_send.php');

                include('include/class/pack_info.php');
                if(empty($_GET['u'])){$u=1;}else{$u=$_GET['u'];}

                $packinfo = (new PackInfo)->view($u, $U->id);

                include('templates/pack_info.php');
            }elseif($view['info']==2){
                include('templates/pack_no_send.php');
                
                include('templates/pack_add.php');
            }

        }else{
            include('templates/pack_add.php');
        }
    }elseif($_GET['url']=='pack_info'){

        include('include/class/pack_info.php');
        if(empty($_GET['u'])){$u=1;}else{$u=$_GET['u'];}
        
        $packinfo = (new PackInfo)->view($u, $U->id);

        
        include('templates/pack_info.php');

    }elseif($_GET['url']=='pack_search'){
        include('include/class/pack_info.php');
        if($_POST['send']=='pack_search'){
        $packview=(new PackInfo)->view($_POST['id_pack']);
            include('templates/pack_search_view.php');
        }else{
            include('templates/pack_search.php');  
        }
    }

}else{
    include('templates/404.php');
}
?>