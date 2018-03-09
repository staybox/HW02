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
        return $data[0] . $data[1];
    }
    return null;
}

function task2 ($num,$operation=null) {

    switch ($operation){

        case "+":
            $s=$num[0];
            unset($num[0]);
            foreach($num as $nums){
                $s += $nums;
            }
            echo $s;
            break;
        case "-":
            $s=$num[0];
            unset($num[0]);
            foreach($num as $nums){
                $s -= $nums;
            }
            echo $s;
            break;
        case "*":
            $s=$num[0];
            unset($num[0]);
            foreach($num as $nums){
                $s *= $nums;
            }
            echo $s;
            break;
        case "/":
            $s=$num[0];
            unset($num[0]);
            $output = "";
            foreach($num as $nums){
                if($nums == 0){
                    echo $output = "В массиве есть значение $nums. Деление на $nums запрещено.";
                    break;
                }else {
                    $s /= $nums;
                }
            }
            if ($output != "В массиве есть значение $nums. Деление на $nums запрещено."){
                echo $s;
                echo "\n";
            }
            break;
        case null:
            echo "Не введен второй аргумент. Допустимые аргменты: +,-,*,/.";
            break;
        default:
            echo "Неправильный второй аргумент, можно использовать только: +,-,*,/. Попробуйте изменить значение аргумента и попробовать снова.";
    }

}

/*
function task3(string $operator, ...$data)
{
    task2($data, $operator);
}*/

function task3(){

    $operator = func_get_arg(0);

    $array = [];
    for ($i = 1; $i < func_num_args(); $i++) {
         array_push ($array,func_get_arg($i));
    }

    task2($array, $operator);
}


function task4 (int $perem1, int $perem2){

    echo "<table border =\"1\" style='border-collapse: collapse'>";
    for ($row=1; $row <= $perem1; $row++) {
        echo "<tr> \n";
        for ($col=1; $col <= $perem2; $col++) {
            $p = $col * $row;
            if ($p%2 == 0) {
                echo "<td>($p)</td> \n";
            }elseif ($p%2 == 1) {
                echo "<td>[$p]</td> \n";
            }else {
                echo "<td>$p</td> \n";
            }
        }
        echo "</tr>";
    }
    echo "</table>";

    if ($perem1 > 0 and $perem2 > 0) {

        task4(--$perem1, --$perem2);
    }
}


function task5 (string $str) {

    //str_replace(' ', '', $str);
    strtolower($str);
    preg_replace('/[^A-Za-z0-9\-]/', '', $str);
    if ($str == strrev($str)) {
        return true;
    }else {
        return false;
    }
}

function OutputTask5 (string $str) {
    if (task5($str) == true) {
        return "Это палиндром";
    }else {
        return "Это не палиндром";
    }
}

function task8 ($file) {
    return $section = file_get_contents("$file");
}

