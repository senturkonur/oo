<?php
class Ship
{
    public $name;
    public $weaponPower = 0;
    public $jediFactor = 0;
    public $strength = 0;
    public function sayHello()
    {
        echo 'Hello!';
    }

    public function getName()
    {
        return $this->name;
    }
}

$myShip = new Ship();
$myShip->name = 'TIE Fighter';

echo 'Ship Name: '.$myShip->name;
echo '<hr/>';
$myShip->sayHello();
echo '<hr/>';
echo 'Ship Name: '.$myShip->getName();
$myShip->weaponPower = 10;
var_dump($myShip->weaponPower);