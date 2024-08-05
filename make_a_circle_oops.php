<?php
class Circle {
    const PI = 3.14;
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return self::PI * $this->radius * $this->radius;
    }

    public function getPerimeter() {
        return 2 * self::PI * $this->radius;
    }
}

// Example usage
$circle = new Circle(2.14);
echo "Area: " . $circle->getArea() . "\n";
echo "Perimeter: " . $circle->getPerimeter() . "\n";
?>
