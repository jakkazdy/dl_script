<?php

class postcode_b2b{
    public $array_postcode;
    public $id_b2b;
    
    
    function __construct($id_b2b) {
        $this->id_b2b=$id_b2b;
        $this->array_postcode=[1=>$this->level(1),2=>$this->level(2),3=>$this->level(3)];
    }
    
    function level($level){
        $sql_send=(new PDO_Connect)->query("SELECT * FROM postcode_b2b WHERE id_b2b='$this->id_b2b' AND level='$level'");
        $many=$sql_send->rowCount();
        $array_postcode=$sql_send->fetchAll();
        return ['many'=>$many, 'array_postcode'=>$array_postcode];
    }
}
