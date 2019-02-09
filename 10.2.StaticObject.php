<?php
/*Сделайте класс Num, у которого будут два приватных статических свойства: 
num1 и num2.
Сделайте в классе Num метод getSum, 
который будет выводить на экран сумму значений свойств num1 и num2.*/

class Num
{
    private static $num1 = 0;
    private static $num2 = 0;

    static function getSumOf($number1, $number2)
    {   
        self::$num1 = $number1;
        self::$num2 = $number2;
        echo "num1 + num2 = " . (self::$num1 + self::$num2);
    }
    static function getSum()
    {   
        echo "num1 + num2 = " . (self::$num1 + self::$num2);
    }
    static function setNum1($number)
    {
        self::$num1 = $number;
    }
    static function setNum2($number)
    {
        self::$num2 = $number;
    }
}

Num::getSumOf(10, 20);
echo '<br>';
Num::setNum1(123);
Num::setNum2(23);
Num::getSum();
