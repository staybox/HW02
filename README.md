Домашнее задание №2

Задание выполняется в двух файлах. Файл functions.php содержит все 10 функций.
Функции именуются task1, task2, task3, с маленькой буквы, слитно. Файл с именем
index.php содержит require(‘functions.php’); и вызов всех функций.

Задание #1
1. Функция должна принимать массив строк и выводить каждую строку в
отдельном параграфе (тег <p>)
2. Если в функцию передан второй параметр true, то возвращать (через return)
результат в виде одной объединенной строки.

Задание #2
1. Функция должна принимать 2 параметра:
a. массив чисел;
b. строку, обозначающую арифметическое действие, которое нужно
выполнить со всеми элементами массива.
2. Функция должна вывести результат на экран.
3. Функция должна обрабатывать любой ввод, в том числе некорректный и
выдавать сообщения об этом

Задание #3
1. Функция должна принимать переменное число аргументов.
2. Первым аргументом обязательно должна быть строка, обозначающая
арифметическое действие, которое необходимо выполнить со всеми
передаваемыми аргументами.
3. Остальные аргументы это целые и/или вещественные числа.
Пример вызова: calcEverything(‘+’, 1, 2, 3, 5.2);
Результат: 1 + 2 + 3 + 5.2 = 11.2

Задание #4
1. Функция должна принимать два параметра – целые числа.
2. Если в функцию передали 2 целых числа, то функция должна отобразить
таблицу умножения размером со значения параметров, переданных в функцию.
(Например если передано 8 и 8, то нарисовать от 1х1 до 8х8). Таблица должна
быть выполнена с использованием тега <table>
3. В остальных случаях выдавать корректную ошибку.

Задание #5
1. Написать две функции.
2. Функция №1 принимает 1 строковый параметр и возвращает true​, если строка
является палиндромом*, false​в противном случае. Пробелы и регистр не
должны учитываться.
3. Функция №2 выводит сообщение в котором на русском языке оговаривается
результат из функции №1
* Палиндром – строка, одинаково читающаяся в обоих направлениях.

Задание #6 (выполняется после вебинара “​ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
1. Выведите информацию о текущей дате в формате 31.12.2016 23:59
2. Выведите unixtime время соответствующее 24.02.2016 00:00:00.

Задание #7 (выполняется после вебинара “​ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
1. Дана строка: “Карл у Клары украл Кораллы”. удалить из этой строки все
заглавные буквы “К”.
2. Дана строка “Две бутылки лимонада”. Заменить “Две”, на “Три”. По желанию
дополнить задание.

Задание #8 (выполняется после вебинара “​ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
1. Создайте средствами ОС (в ручную) файл test.txt и поместите в него текст
“Hello, world”
2. Напишите функцию, которая будет принимать имя файла, открывать файл и
выводить содержимое на экран.

Задание #9 (выполняется после вебинара “​ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
1. Создайте файл anothertest.txt средствами PHP. Поместите в него текст - “Hello
again!
