<?php
/*1. Сделайте класс User, в котором будут следующие свойства: 
name (имя), surname (фамилия), birthday, age. 
Начальные значения этих свойств должны устанавливаться в конструкторе. 
Сделайте также геттеры этих свойств. 
Сделайте так, чтобы третьим параметром в конструктор передавалась 
дата рождения работника в формате год-месяц-день. 
Запишите ее в свойство birthday. Сделайте геттер для этого свойства. 
Сделайте приватный метод calculateAge, который параметром будет принимать дату рождения, а возвращать возраст. 
Сделайте так, чтобы метод calculateAge вызывался в конструкторе объекта, 
рассчитывал возраст пользователя и записывал его в приватное свойство age. Сделайте геттер для этого свойства.
*/

class User
{
    public $name;
    public $surname;
    public $birthday;
    private $age;

    public function __construct($name, $surname, $birthday)
    {   
        if ($this->validateDate($birthday)) {
            $this->birthday = $birthday;
            $this->age = $this->calculateAge($birthday);
        } else {
            echo "$birthday : Birthday is invalid and not set! Format for birthday 'yyyy-mm-dd'";
        }
        $this->name = $name;
        $this->surname = $surname;
    }

    private function validateDate($date, $format = 'Y-m-d')
    {
        //http://php.net/manual/en/function.checkdate.php#113205
        //With DateTime you can make the shortest date&time validator for all formats.
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }
    private function calculateAge($date)
    {
        return date_diff(date_create($date), date_create('now'))->y;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getSurname()
    {
        return $this->surname;
    }
    public function getBirthday()
    {
        return $this->birthday;
    }
    public function getAge()
    {
        return $this->age;
    }
}

$user1 = new User('Jhon', 'Jhonson', '1990-02-15');

echo "Hello {$user1->getName()}. Your age is {$user1->getAge()}";
