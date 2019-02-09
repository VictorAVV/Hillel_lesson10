<?php
/* Создать класс User, который будет выводить количество своих объектов. */

class User
{
    private static $countOfCreatedObjects = 0;
    private static $countOfExistsObjects = 0;
  
    public function __construct()
    {
        self::$countOfCreatedObjects++;
        self::$countOfExistsObjects++;
    }
    public function __destruct()
    {   
        self::$countOfExistsObjects--;
    }
    public static function getCountOfCratedObjects()
    {
        echo 'Number of created objects of class "' . __CLASS__ . '" : ' . self::$countOfCreatedObjects . '<br>';
    }
    public static function getCountOfExistsObjects()
    {
        echo 'Number of exists objects of class "' . __CLASS__ . '" : ' . self::$countOfExistsObjects . '<br>';
    }
}

$user1 = new User;
$user2 = new User;
$user3 = new User;
$user4 = new User;
unset($user2);
unset($user3);
$user5 = new User;

User::getCountOfCratedObjects();
User::getCountOfExistsObjects();
