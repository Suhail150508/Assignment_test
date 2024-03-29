
-- **Task 1: Class Inheritance** --


<?php

namespace App\Shapes;

class Shape
{
  public function area()
  {
    throw new \Exception('Area calculation not implemented for base Shape');
  }
}

class Circle extends Shape
{
  private $radius;

  public function __construct(float $radius)
  {
    $this->radius = $radius;
  }

  public function area()
  {
    return 3.14 * $this->radius * $this->radius;
  }
}

class Rectangle extends Shape
{
  private $width;
  private $height;

  public function __construct(float $width, float $height)
  {
    $this->width = $width;
    $this->height = $height;
  }

  public function area()
  {
    return $this->width * $this->height;
  }
}

// Example
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

echo "Circle Area: " . $circle->area();
echo "Rectangle Area: " . $rectangle->area();


