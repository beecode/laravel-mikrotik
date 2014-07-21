<?php


/**
 * 
 * @param type $data
 * @param type $detail
 */
function printlog($data, $detail=false){
    if ($detail==true){
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    } else {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}


