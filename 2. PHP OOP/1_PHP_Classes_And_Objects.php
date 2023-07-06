<?php
/**
 * A class is a template for objects, and an object is an instance of class.
 * ================================================
 * Define a Class
 * A class is defined by using the class keyword, 
 * followed by the name of the class and a pair of curly braces ({}). 
 * All its properties and methods go inside the braces.
 * ==================================================
 * Define Objects
 * Classes are nothing without objects! We can create multiple objects from a class. 
 * Each object has all the properties and methods defined in the class, 
 * but they will have different property values.
 * Objects of a class are created using the new keyword.
 * ==================================================
 * The $this Keyword
 * The $this keyword refers to the current object, 
 * and is only available inside methods.
 * ==================================================
 * instanceof
 * You can use the instanceof keyword to check 
 * if an object belongs to a specific class.
 */

 class Fruit {
    public $name;
    function set_name($name) {
      $this->name = $name;
    }
  }
  $apple = new Fruit();
  $apple->set_name("Apple");
  
  echo $apple->name;