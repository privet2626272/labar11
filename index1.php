<?php
abstract class Figure{
    private $square, $color, $num;
    abstract public function infoAbout();
}
interface Count{
    public function getArea();
}
class Rectangle extends Figure implements Count{ 
    private $a, $b;
    private $num = 4;
    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }    
    public function getArea(){
        return $this->a * $this->b;
    }
    public function infoAbout()
    {
        return "Это класс прямоугольника. У него " . $this->num . " стороны";
    } 
}
$rectangle1 = new Rectangle(5, 5);
echo "Площадь первого прямоугольника равна " . $rectangle1->getArea() . "см2" . "<br>";
$rectangle2 = new Rectangle(2, 21);
echo "Площадь второго прямоугольника равна " . $rectangle2->getArea() . "см2" . "<br>";
