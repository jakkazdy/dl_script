<?php

class Register{
    public function send(){
        $errorLog=0;
         $pdoLogin=new PDO_Connect;
         $name=addslashes(strip_tags($_POST['name']));
         $email=addslashes(basename(strip_tags($_POST['email'])));
         $postcode=addslashes(basename(strip_tags($_POST['postcode'])));
         //$postcode=str_replace('-', '', $postcode);
         //$haslo_hashed = md5($haslo); 
         $zapytanie=$pdoLogin->query("SELECT email FROM user
             WHERE (email='$email')");

         if(empty($name) OR empty($email) or empty($postcode)){
             $errorLog=1;
         }
         if(($errorLog==0) AND ($zapytanie->rowCount()!== 1)){
            $pdo=new PDO_Connect;
            if(isset($_POST['submitb2b'])){
                $classUser=2;
            }elseif(isset($_POST['submit'])){
                $classUser=1;
            }
            $sqlQuery = "INSERT INTO user(name,email,postcode,class) VALUES(?,?,?,?)"; 
            $statement = $pdo->prepare($sqlQuery);
            $statement->execute(array($name,$email,$postcode,$classUser)); 
            $lastInsertId=$pdo->lastInsertId();

                $send2=$pdo->exec("INSERT INTO user_stat SET 
                    id_u='$lastInsertId';
                        INSERT INTO user_wallet SET 
                    id_u='$lastInsertId'
                    ");

                
                if($send2>0){
                    
                    if($classUser==1){
                        $info['status']=1;
                    }elseif($classUser==2){
                        $info['status']=4;
                    }
                    
                    $_SESSION['active']='1';
                    $_SESSION['name']=$name;
                    $_SESSION['email']=$email;
                    $_SESSION['reg']=1;
                    $time=time();
                    $active_key=md5($email.''.$time.''.$name);

                    $sql = "UPDATE user 
                            SET active_key=?, log_time=?
                            WHERE email=?";
                    $q = $pdoLogin->prepare($sql);
                    $q->execute(array($active_key,$time,$email));

                    $_SESSION['active_key']=$active_key;
                    $_SESSION['login_time']=$time;
                    if($classUser==1){
                        $info['redirect']='new_password2';
                    }elseif($classUser==2){
                        $info['redirect']='register_b2b';
                    }

                    
                }else{
                    
                    $info['status']=2;
                    
                }
                
             

         }else{
             $info['status']=3;
         }

      $view['post']=1;
      $view['login']=$name;
      $view['status']=$info['status'];
      return $view;
    }
    
    public function np2(){

         $pdoLogin=new PDO_Connect;
         if($_POST['send']=='new_password2_b2b'){
             
            $name=addslashes(basename(strip_tags($_POST['nameb2b'])));
            $nip=addslashes(basename(strip_tags($_POST['nipb2b'])));
         }
         $p1=addslashes(basename(strip_tags($_POST['p1'])));
         $p2=addslashes(basename(strip_tags($_POST['p2'])));
         if($p1==$p2){
             $haslo_hashed = md5($p1); 
         }
         if(isset($_SESSION['reg']) AND ($_SESSION['reg']==1)){

                $pdo=new PDO_Connect;
                if($_POST['send']=='new_password2_b2b'){
                    $sql = "UPDATE user 
                            SET pass=?, nameb2b=?, nipb2b=?
                            WHERE email=? AND active_key=?";
                    $q = $pdoLogin->prepare($sql);
                    $q->execute(array($haslo_hashed,$name,$nip,$_SESSION['email'],$_SESSION['active_key']));
                    unset($_SESSION['reg']);
                    $info['status']=1;
                }else{
                  $sql = "UPDATE user 
                        SET pass=?
                        WHERE email=? AND active_key=?";
                    $q = $pdoLogin->prepare($sql);
                    $q->execute(array($haslo_hashed,$_SESSION['email'],$_SESSION['active_key']));
                    unset($_SESSION['reg']);
                    $info['status']=1;  
                }
         }else{
             $info['status']=2;
         }

      $view['post']=1;
      $view['login']=$name;
      $view['posti']=$info['status'];
      return $view;
    }
}