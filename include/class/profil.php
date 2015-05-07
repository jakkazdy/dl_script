<?php

class Profil{
    
    function info($email){
        $returnPDO = (new PDO_Connect)->query("SELECT * FROM user WHERE email='$email'"); 

        if($returnPDO->rowCount()== 1){

            return $returnPDO->fetch();
        
        }else{
            return 'error';
            
        }

    }
    function edit($p,$e,$active){
        
        $postcode=addslashes(basename(strip_tags($p['postcode'])));
        $city=addslashes(strip_tags($p['city']));
        $street=addslashes(strip_tags($p['street']));
        $nr_kom=addslashes(basename(strip_tags($p['nr_kom'])));
        
        $sql = "UPDATE user 
                     SET postcode=?, city=?, street=?, nr_kom=?
                     WHERE  email=? AND active_key=? AND log_time=?";
        $q = (new PDO_Connect)->prepare($sql);
        if($q->execute(array($postcode, $city, $street, $nr_kom,$e,$active['active_key'],$active['login_time']))){
            $r=1;
        }else{
            $r=2;
        }
        return $r;
    }
    function nh($p,$e,$active){
        
        $p0=addslashes(strip_tags($p['p']));
        $p1=addslashes(strip_tags($p['p1']));
        $p2=addslashes(strip_tags($p['p2']));
        
        if(($p1==$p2) AND ($p!==$p1)){
            $p_h=md5($p0);
            $p1_h=md5($p1);
            $zapytanie=(new PDO_Connect)->query("SELECT * FROM user
             WHERE email='$e' AND pass='$p_h'");
            

            if($zapytanie->rowCount()== 1){
                
                $sql = "UPDATE user 
                         SET pass=?
                         WHERE  email=? AND active_key=? AND log_time=? AND pass=?";
                $q = (new PDO_Connect)->prepare($sql);
                $zap=$q->execute(array($p1_h, $e,$active['active_key'],$active['login_time'], $p_h));
                if($zap){
                    $r=1;
                }else{
                    $r=2;
                }
            }else{
                $r=2;
            }
            
        }else{
            $r=2;
        }
        
        return $r;
    }
}