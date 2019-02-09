<?php
/*Сделайте класс Num, у которого будут два публичных статических свойства: 
num1 и num2. 
Запишите в первое свойство число 2, а во второе - число 3. 
Выведите сумму квадратов значений свойств на экран. */

class Num
{
    public static $num1;
    public static $num2;

    public static function getSumOfSquareNum1Num2()
    {
        return self::$num1 * self::$num1 + self::$num2 * self::$num2;
    }
}

Num::$num1 = 2;
Num::$num2 = 3;
echo 'square(' . Num::$num1 . ') + square(' . Num::$num2 . ') = '; 
echo Num::$num1 * Num::$num1 + Num::$num2 * Num::$num2;

echo '<br>';

Num::$num1 = 5;
Num::$num2 = 7;
echo 'square(' . Num::$num1 . ') + square(' . Num::$num2 . ') = ';
echo Num::getSumOfSquareNum1Num2();
