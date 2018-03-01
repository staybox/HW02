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
                echo $s += $nums;
            }
            break;
        case "-":
            $s=$num[0];
            unset($num[0]);
            foreach($num as $nums){
                echo $s -= $nums;
            }
            break;
        case "*":
            $s=$num[0];
            unset($num[0]);
            foreach($num as $nums){
                echo $s *= $nums;
            }
            break;
        case "/":
            $s=$num[0];
            unset($num[0]);
            foreach($num as $nums){
                if($nums == 0){
                    echo "В массиве есть значение $nums. Деление на $nums запрещено.";
                    break;
                }else {
                    echo $s /= $nums;
                    echo "\n";
                }
            }
            break;
        case null:
            echo "Не введен второй аргумент. Допустимые аргменты: +,-,*,/.";
            break;
        default:
            echo "Неправильный второй аргумент, можно использовать только: +,-,*,/. Попробуйте изменить значение аргумента и попробовать снова.";
    }

}

