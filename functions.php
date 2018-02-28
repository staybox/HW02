<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 28.02.2018
 * Time: 17:14
 */

function task1($data, $true = false)
{

    if ($true == false) {
        for ($i = 0; $i < count($data); $i++) {
            echo "<p>$data[$i]</p>\n";
        }
    } elseif ($true == true) {
        $ret = $data[0] . $data[1];
    }
    return $ret;
}



