<?php
/*Есть класс 
<?php
class Geometry	
{
    private static $pi = 3.14; // вынесем Пи в свойство
    public static function getCircleSquare($radius)
    {
        return self::$pi * $radius * $radius;
    }
    public static function getCircleСircuit($radius)
    {
        return 2 * self::$pi * $radius;
    }
}
?> 
Добавьте в наш класс Geometry метод, который будет находить объем шара по радиусу. 
С помощью этого метода выведите на экран объем шара с радиусом 10.*/

class Geometry	
{
    private static $pi = 3.14; 
    public static function getCircleSquare($radius)
    {
        return self::$pi * $radius * $radius;
    }
    public static function getCircleСircuit($radius)
    {
        return 2 * self::$pi * $radius;
    }

    public static function getSphereVolume($radius)
    {
        //return round(self::$pi * $radius * $radius * $radius * 4 / 3, 2);
        return round(self::getCircleSquare($radius) * $radius * 4 / 3, 2);

    }
}

echo "When radius = 10, volume of sphere = " . Geometry::getSphereVolume(10);
