<?php
/**
* =========What are Interfaces? =============
* Interfaces allow you to specify what methods a class should implement.
* Interfaces make it easy to use a variety of different classes in the same way. 
* When one or more classes use the same interface, it is referred to as "polymorphism".
* Interfaces are declared with the (interface) keyword
*/

/*
 ========Interfaces vs. Abstract Classes =========
Interface are similar to abstract classes. 
The difference between interfaces and abstract classes are:

1. Interfaces cannot have properties, while abstract classes can
2. All interface methods must be public, 
while abstract class methods is public or protected
3. All methods in an interface are abstract, 
so they cannot be implemented in code and the abstract keyword is not necessary
4. Classes can implement an interface while inheriting from 
another class at the same time

==========================================
1. interface can only contain abstract method
2. interface can no contain constructor
3. interface all functions must be public
4. interface can support multiple interitance
5. interface can not define variable
 
 */
/*
 =========== Using Interfaces =======
To implement an interface, a class must use the (implements) keyword.
A class that implements an interface must implement all of the interface's methods.
*/

interface Animal {
    public function makeSound();
  }
  
  class Cat implements Animal {
    public function makeSound() {
      echo "Meow";
    }
  }
  
  $animal = new Cat();
  $animal->makeSound();