<?php

class PackSend{
    public function send($id_u){
         
         $DA['name']=addslashes(strip_tags($_POST['DAname']));
         $DA['postcode']=addslashes(basename(strip_tags($_POST['DApostcode'])));
         $DA['street']=addslashes(strip_tags($_POST['DAstreet']));
         $DA['nr_kom']=addslashes(basename(strip_tags($_POST['DAnr_kom'])));
         $PACK['size']=addslashes(basename(strip_tags($_POST['PACKsize'])));
         $PACK['weight']=addslashes(basename(strip_tags($_POST['PACKweight'])));
         $PACK['date']=addslashes(basename(strip_tags($_POST['PACKdate'])));
         $PACK['time']=addslashes(basename(strip_tags($_POST['PACKtime'])));
         //#dodaj harmonogram zamiast date & time

        $pdoPS=new PDO_Connect;
        if(isset($_POST['submit']) AND !isset($_POST['submit2'])){
            $submit=1;
        }elseif(!isset($_POST['submit']) AND isset($_POST['submit2'])){
            $submit=2;
        }else{
            $submit=9;
        }
        $error=0;
        if(empty($DA['name'])   OR
                empty($DA['postcode'])   OR
                empty($DA['street'])   OR
                empty($DA['nr_kom'])
                ){
            $error=1;
        }
        /*$sql = "INSERT INTO pack_send SET 
                    id_u=?, 
                    name=?, 
                    surname=?, 
                    city=?, 
                    postcode=?, 
                    street=?, 
                    nr_home=?, 
                    size=?, 
                    weight=?, 
                    date=?, 
                    time=?, 
                    send=?
                    ";
        $q = $pdo->prepare($sql);
        $q->execute(array($active_key,$time,$login,$login,$haslo_hashed,$haslo));
*/
        if($error==0){
        $send=$pdoPS->exec("INSERT INTO pack_send SET 
                    id_u='$id_u', 
                    name='$DA[name]', 
                    postcode='$DA[postcode]', 
                    street='$DA[street]', 
                    nr_kom='$DA[nr_kom]', 
                    size='$PACK[size]', 
                    weight='$PACK[weight]', 
                    date='$PACK[date]', 
                    time='$PACK[time]', 
                    status='$submit';
                    SELECT LAST_INSERT_ID() INTO @mysql_variable_here;
                    UPDATE user_stat SET in_progress = in_progress + 1 WHERE id_u='$id_u';
                    UPDATE user_wallet SET credits = (money-money_block-20), money_block=money_block+20+(money-money_block-20) WHERE money<money_block+20  AND id_u='$id_u';
                    UPDATE user_wallet SET money_block = money_block + 20 WHERE money>=money_block+20  AND id_u='$id_u';
                    INSERT INTO user_wallet_raport SET 
                    id_u='$id_u', id_pack=@mysql_variable_here, money='20', pack_stat='2', money_stat='2';
                    "); 
        
        /*
         * $send=$pdoPS->exec("INSERT INTO pack_send SET 
                    id_u='$id_u', 
                    name='$DA[name]', 
                    postcode='$DA[postcode]', 
                    street='$DA[street]', 
                    nr_kom='$DA[nr_kom]', 
                    size='$PACK[size]', 
                    weight='$PACK[weight]', 
                    date='$PACK[date]', 
                    time='$PACK[time]', 
                    status='$submit';
                    SELECT LAST_INSERT_ID() INTO @lastInsertId;
                    UPDATE user_stat SET in_progress = in_progress + 1 WHERE id_u='$id_u';
                    UPDATE user_wallet SET money_block = money_block + 20 WHERE id_u='$id_u';
                    INSERT INTO user_wallet_raport SET 
                    id_u='$id_u', id_pack=@lastInsertId, money='20', pack_stat='2', money_stat='2';
                    "); 
         * */
         
        //user_money_raport 
        //pack_stat=1-zaplanowane,2-oczekuje,3-dostarczone.
        //money_stat=1-zablokowane,2-pobrane,3-credits
        
               // #dodaj harmonogram wysyłek.
                
                
                if($send>0){

                    $info =1;
                    
                }else{
                    
                    $info =2;
                    
                }
        }else{
                    
                    $info =2;
                    
                }
             



      $view['submit']=$submit;
      $view['info']=$info;
      return $view;
    }
}