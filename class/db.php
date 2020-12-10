<?php

class database{

    public $db;

    public  function __construct($host,$user,$pass,$name){
        $this->db = mysqli_connect($host,$user,$pass);

        if($this->db){
            exit('baza bilan aloqa yoq');
        }
        if(!$this->db){
            exit('tabitsa yoq');
        }

        
       return $this->db;
    }

    public function get_all_db(){
        $sql = "SELECT * FROM post LIMIT 10";

        $res = mysqli_query($sql,$this->db);

        for($i=0;$i<mysqli_fetch_row($res);$i++){
            $row[] = mysqli_fetch_array($res,MYSQLI_ASSOC);
        }
        return $row;
    }

    

}



?>