<?php

class Login{
    public function send(){

         $pdoLogin=new PDO_Connect;
         $email=addslashes(basename(strip_tags($_POST['email'])));
         $haslo=addslashes(basename(strip_tags($_POST['pass'])));


         $haslo_hashed = md5($haslo); 
         $zapytanie=$pdoLogin->query("SELECT email, pass FROM user
             WHERE email='$email' AND pass='$haslo_hashed'");


         if($zapytanie->rowCount()== 1){
             $_SESSION['active']='1';
             $_SESSION['login']=$email;
             $time=time();
             $active_key=md5($login.''.$time.''.$password);

             $sql = "UPDATE user 
                     SET active_key=?, log_time=?
                     WHERE  email=? AND pass=?";
             $q = $pdoLogin->prepare($sql);
             $q->execute(array($active_key,$time,$email,$haslo_hashed));

             $_SESSION['active_key']=$active_key;
             $_SESSION['login_time']=$time;
             $info=1;

         }else{
             $_SESSION['active']='0';
             $info=2;
         }

      $view['post']=1;
      $view['login']=$login;
      $view['status']=$info;
      return $view;
    }
}