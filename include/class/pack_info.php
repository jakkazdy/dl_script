<?php

class PackInfo{
    function view($i, $id_u){
        
        if($i==1){
            $sql="SELECT * FROM pack_send WHERE id_u='$id_u' ORDER BY id DESC";
        }elseif($i==2){
            $sql="SELECT * FROM pack_send WHERE id_u='$id_u' AND status='0' ORDER BY id DESC";
        }elseif($i==3){
            $sql="SELECT * FROM pack_send WHERE id_u='$id_u' AND status='1' ORDER BY id DESC";
        }
        
        $view=(new PDO_Connect)->query($sql);
        
        return $view;
        
    }
}

