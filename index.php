<?php

include "config.php";
include "class/db.php";
include "class/page.php";


$page = new page();

$text = $page->get_all();

foreach($text as $value){
    echo $value['id'].'-';
    echo $value['title'].'<br>';
    echo $value['description'];
    echo '<br>';

}

?>