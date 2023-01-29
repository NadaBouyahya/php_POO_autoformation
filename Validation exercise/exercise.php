<?php

abstract class Animal
{
    protected $name;
    protected $color;


    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;

    }

    abstract function show();
}
// wild animals class
class Wild extends Animal
{

    function show()
    {
        return "name : " . $this->name ."<br>" . "color : " . $this->color  ;
    }
}

// pets class
class Pet extends Animal
{
    function show()
    {
        return "name : " . $this->name ."<br>" . "color : " . $this->color  ;

    }
}

interface AnimalInterface
{
    public static function add($animal);
    public static function delete($animal);
}


class manageWildAnimal implements AnimalInterface
{
    public static $count = 0;
    public static $list;

    public static function add($animal)
    {
        Self::$list[] = $animal;
        Self::$count++;

        return ['count' => self::$count, 'list' => Self::$list];
    }

    public static function delete($animal)
    {
        $key = array_search($animal->show(), self::$list);

        unset(Self::$list[$key]);
        Self::$count--;

        return ['count' => self::$count, 'list' => Self::$list];
    }


}

echo "<pre>";

$cat = new Pet("cat", "orange");
// echo $cat->show();

echo "<br>";

$animal = new Wild("tiger", "yellow");
$animal2 = new Wild("lion", "brown");



// echo $tiger->show();

print_r (manageWildAnimal::add($animal->show()));
echo "<br>";
echo "<br>";
print_r (manageWildAnimal::add($animal2->show()));
echo "<br>";
echo "<br>";
print_r(manageWildAnimal::delete($animal2));

echo "</pre>";