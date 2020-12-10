<?php

class page{
    public function get_all(){
        $db = new database(HOST,USER,PASS,NAME);
        $result = $db->get_all_db();

        return $result;
    }
}




?>