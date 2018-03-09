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


echo $task1 = task1($data,true);

// Конец первого задания

// Второе задание

$num = [1,2,3,4,5];

task2 ($num, "&");


// Третье задание
task3("/",1,2,4,5.2);

// Четвертое задание
task4(2,2);

// Пятое задание
echo task5("assa");
echo OutputTask5("assa");

// Шестое задание
echo date('Y-m-d H:i:s');
echo $UnixTime = strtotime('2016-02-24 00:00:00'); //24.02.2016 00:00:00

// Седьмое задание

$task7 = "Карл у Клары украл Кораллы";
echo $replace = str_replace("К", "", $task7);

// Восьмое задание

$file = "test.txt";
echo task8($file);

// Девятое задание
$TextToFile = "Hello again!";

// открываем файл, если файл не существует,
//делается попытка создать его
$fp = fopen("file.txt", "w");

// записываем в файл текст
fwrite($fp, $TextToFile);

// закрываем
fclose($fp);
