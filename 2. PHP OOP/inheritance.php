<?php
/**
 * What is Inheritance?
 * Inheritance in OOP = When a class derives from another class.
    * The child class will inherit all the public and protected properties and methods 
    * from the parent class. In addition, it can have its own properties and methods.
    * An inherited class is defined by using the extends keyword.
 */

 class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color; 
    }
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}."; 
    }
  }
  
  // Strawberry is inherited from Fruit
  class Strawberry extends Fruit {
    public function message() {
      echo "Am I a fruit or a berry? "; 
    }
  }
  
  $strawberry = new Strawberry("Strawberry", "red");
  $strawberry->message();
  $strawberry->intro();

  /**
   * Overriding Inherited Methods
        * Inherited methods can be overridden by redefining the methods 
        * (use the same name) in the child class.
        
   */
echo "\n Override \n";
//   final class Fruits {
   class Fruits {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
//    final public function intro() {
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  }
  
  class Strawberrys extends Fruits {
    public $weight;
    public function __construct($name, $color, $weight) {
      $this->name = $name;
      $this->color = $color;
      $this->weight = $weight;
    }
    public function intro() {
      echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    }
  }
  
  $strawberry = new Strawberrys("Strawberry", "red", 50);
  $strawberry->intro();

  /**
   * The final Keyword
   * The final keyword can be used to prevent class inheritance 
   * or to prevent method overriding.
   */