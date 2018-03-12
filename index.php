<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 28.02.2018
 * Time: 17:36
 */
require_once 'functions.php';

// Первое задание

$data = [

    "Строка1", "Строка2"];


echo $task1 = task1($data, true);

// Конец первого задания

// Второе задание

$num = [1, 2, 3, 4, 5];

task2($num, "&");


// Третье задание
task3("/", 1, 2, 4, 5.2);

// Четвертое задание
task4(2, 2);

// Пятое задание
echo task5("assa");
echo OutputTask5("assa");

// Шестое задание
task6();

// Седьмое задание
echo task7("Карл у Клары украл Кораллы");

// Восьмое задание

$file = "test.txt";
echo task8($file);

// Вторая реализация (происходит проверка и удаление любой заглавной буквы в строке)
echo SecondRealizationTask8("Карл у Клары украл Кораллы");

// Девятое задание
task9("Hello again!");

