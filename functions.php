<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 28.02.2018
 * Time: 17:14
 */

function task1 ($data,$true=NULL) {

    if(!isset($true)) {
        for ($i = 0; $i < count($data); $i++) {
            echo "<p>$data[$i]</p>\n";
        }
    }else {
        for ($i = 0; $i < count($data); $i++) {
            echo "$data[$i]";
        }
    }
}


