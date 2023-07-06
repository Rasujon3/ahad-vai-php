<?php
/**
 * The __construct Function
    * A constructor allows you to initialize an object's properties 
    * upon creation of the object.
    * If you create a __construct() function, PHP will automatically call this function 
    * when you create an object from a class.
    * Notice that the construct function starts with two underscores (__)!
 * 
 */

 class Fruit {
    public $name;
    public $color;
  
    function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    function get_name() {
      return $this->name;
    }
    function get_color() {
      return $this->color;
    }
  }
  
  $apple = new Fruit("Apple", "red");
  echo $apple->get_name();
  echo "\n";
  echo $apple->get_color();

  /**
   * The __destruct Function
   * A destructor is called when the object is destructed or 
   * the script is stopped or exited.
   * If you create a __destruct() function, PHP will automatically call this function 
   * at the end of the script.
   * Notice that the destruct function starts with two underscores (__)!
   */

   class Fruits {
    public $name;
    public $color;
  
    function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    function __destruct() {
      echo "The fruit is {$this->name} and the color is {$this->color}.\n";
    }
  }
  
  $apple = new Fruits("Apple", "red");