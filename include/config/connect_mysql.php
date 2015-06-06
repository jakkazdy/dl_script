<?php

class PDO_Send extends PDO {

    function __construct() {
		$mysql_host = 'mysql03int.az.pl'; //lub jakiĹ adres: np sql.nazwa_bazy.nazwa.pl
		$port = '3306'; //domyĹlnie jest to port 3306
		$username = 'u1058462_dl';
		$password = 'g}]r3El1BA1'; //Spokojnie zmieniłem sobie hasło :)
		$database = 'db1058462_dl'; //'produkty'
        parent::__construct('mysql:host='.$mysql_host.';dbname='.$database.';port='.$port, $username, $password );
                parent::exec("SET NAMES utf8");
        
    }

    
}
class PDO_Down extends PDO {

    function __construct() {
		$mysql_host = 'mysql03int.az.pl'; //lub jakiĹ adres: np sql.nazwa_bazy.nazwa.pl
		$port = '3306'; //domyĹlnie jest to port 3306
		$username = 'u1058462_dl';
		$password = 'g}]r3El1BA1';
		$database = 'db1058462_dl'; //'produkty'
        parent::__construct('mysql:host='.$mysql_host.';dbname='.$database.';port='.$port, $username, $password );

        
    }
}
class PDO_Connect extends PDO {

    function __construct() {
		$mysql_host = 'mysql03int.az.pl'; //lub jakiĹ adres: np sql.nazwa_bazy.nazwa.pl
		$port = '3306'; //domyĹlnie jest to port 3306
		$username = 'u1058462_dl';
		$password = 'g}]r3El1BA1';
		$database = 'db1058462_dl'; //'produkty'
        parent::__construct('mysql:host='.$mysql_host.';dbname='.$database.';port='.$port, $username, $password );

        parent::exec("SET NAMES utf8");
    }

    
}

?>