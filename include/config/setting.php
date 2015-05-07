<?php
include('connect_mysql.php');

class Config{
    public $site_status;    //int
    public $site_name;      //varchar
    public $site_url;       //varchar
    public $site_error;
    
    public $status;         //tablica
    
    function __construct() {
        $mysql=(new PDO_Connect)->query("SELECT name, value_v, value FROM config");
        if($mysql->rowCount()>=1){
            $mysql_view=$mysql->fetchAll(PDO::FETCH_ASSOC|PDO::FETCH_GROUP);

            $this->site_status=$mysql_view['site_status'][0]['value'];
            $this->site_name=$mysql_view['site_name'][0]['value_v'];
            $this->site_url=$mysql_view['site_url'][0]['value_v'];
            $this->site_error=$mysql_view['site_error'][0]['value'];
        }
    }
    function ver($name, $values){
        $mysql=(new PDO_Connect)->query("SELECT name, value_v, value FROM config WHERE name='$name' LIMIT 1");
        $name=$mysql->fetch();
        if($values==1){
            $value=$name['value'];
        }elseif($values==2){
            $value=$name['value_v'];
        }
        return $value;
    }
    
}
class User{
    public $status; //1-gość,2user
    public $id;
    public $email;
    public $activekey;
    public $level;
    
    function __construct(){
        $active=$_SESSION;
        if(($active['active']==1) AND (isset($active['active']))){
            $activePDO = (new PDO_Connect)->query("SELECT id, name, surname, postcode, email, class FROM user WHERE active_key = '".$active['active_key']."' AND log_time='".$active['login_time']."'"); 
            if($activePDO->rowCount()== 1){
                $this->status=2;
                $mysql_user_view=$activePDO->fetch();
                $this->email=$mysql_user_view['email'];
                $this->id=$mysql_user_view['id'];
                $this->activekey=$_SESSION['active_key'];
                $this->level=$mysql_user_view['class'];
            }else{
                $this->status=1;
                session_destroy();
            }
        }else{
            $this->status=1;
        }
    }
    function view_user_stat(){
        $mysql_user_stat=(new PDO_Connect)->query("SELECT * FROM user_stat WHERE id_u = '".$this->id."'"); 
        return $mysql_user_stat->fetch();
    }
    function view_user_wallet(){
        $mysql_user_stat=(new PDO_Connect)->query("SELECT * FROM user_wallet WHERE id_u = '".$this->id."'"); 
        return $mysql_user_stat->fetch();
    }
    
    function Logout(){
        $pdoLogout=new PDO_Connect;
         $sql = "UPDATE user 
                            SET active_key=?, log_time=?
                            WHERE email=?";
                    $q = $pdoLogout->prepare($sql);
                    $q->execute(array('','',$this->email));
                    self::ResetObject();
    }
    
    function ResetObject(){
        $active=$_SESSION;
        if(($active['active']==1) AND (isset($active['active']))){
            $activePDO = (new PDO_Connect)->query("SELECT id, name, surname, postcode, email, class FROM user WHERE active_key = '".$active['active_key']."' AND log_time='".$active['login_time']."'"); 
            if($activePDO->rowCount()== 1){
                $this->status=2;
                $mysql_user_view=$activePDO->fetch();
                 $this->email=$mysql_user_view['email'];
                $this->id=$mysql_user_view['id'];
                $this->activekey=$_SESSION['active_key'];
                $this->level=$mysql_user_view['class'];
            }else{
                $this->status=1;
                session_destroy();
            }
        }
    }
}

function seo_url($array_url){
    $ile=$array_url['int'];
    $url=$array_url['url'];
    if($ile>1){
        for($i=1;$i<$ile;$i++){
            $url.=$array_url[$i];
        }
    }
    $url.='.html';
    return $url;
}

$site['on']=1;

 //1 gosc 2 użytkownik 3 firma
$site['manual']=1;