<?php
/*
* Static Methods
* Static methods can be called directly - without creating an instance of the class first.

* Static methods are declared with the (static) keyword
* To access a static method use the class name, (double colon) (::), and the method name.
*/

class A {
    public static function welcome() {
      echo "Hello World!";
    }
  }
  
  class B {
    public function message() {
      A::welcome();
    }
  }
  
  $obj = new B();
  echo $obj -> message();

  /*

  Static Properties
* Static properties can be called directly - without creating an instance of a class.

* Static properties are declared with the static keyword.
* To access a static property use the class name, double colon (::), and the property name.
* A class can have both static and non-static properties. A static property can be accessed from a method in the same class using the self keyword and double colon (::):
* To call a static property from a child class, use the parent keyword inside the child class.
  */

  class pi {
    public static $value = 3.14159;
  }
  
  // Get static property
  echo pi::$value;

  class pi {
    public static $value=3.14159;
    public function staticValue() {
      return self::$value;
    }
  }
  
  $pi = new pi();
  echo $pi->staticValue();

  class pi {
    public static $value=3.14159;
  }
  
  class x extends pi {
    public function xStatic() {
      return parent::$value;
    }
  }
  
  // Get value of static property directly via child class
  echo x::$value;
  
  // or get value of static property via xStatic() method
  $x = new x();
  echo $x->xStatic();