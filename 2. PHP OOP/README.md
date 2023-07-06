# Class And Objects

- A class is a template for objects, and an object is an instance of class.
- ================================================
- Define a Class
- A class is defined by using the class keyword,
- followed by the name of the class and a pair of curly braces ({}).
- All its properties and methods go inside the braces.
- ==================================================
- Define Objects
- Classes are nothing without objects! We can create multiple objects from a class.
- Each object has all the properties and methods defined in the class,
- but they will have different property values.
- Objects of a class are created using the new keyword.
- ==================================================
- The $this Keyword
- The $this keyword refers to the current object,
- and is only available inside methods.
- ==================================================
- instanceof
- You can use the instanceof keyword to check
- if an object belongs to a specific class.

# Constructor and Destructor

- The \_\_construct Function
  - A constructor allows you to initialize an object's properties
  - upon creation of the object.
  - If you create a \_\_construct() function, PHP will automatically call this function
  - when you create an object from a class.
  - Notice that the construct function starts with two underscores (\_\_)!
- The \_\_destruct Function
  - A destructor is called when the object is destructed or
  - the script is stopped or exited.
  - If you create a \_\_destruct() function, PHP will automatically call this function
  - at the end of the script.
  - Notice that the destruct function starts with two underscores (\_\_)!
  # Access Modifier
  \*========= Access Modifiers ===============

* Properties and methods can have access modifiers which control
* where they can be accessed.
* There are three access modifiers:
  - public - the property or method can be accessed from everywhere. This is default
  - protected - the property or method can be accessed within the class and
  - by classes derived from that class (Inheritance)
  - private - the property or method can ONLY be accessed within the class

# Inheritance

- What is Inheritance?
- Inheritance in OOP = When a class derives from another class.
  - The child class will inherit all the public and protected properties and methods
  - from the parent class. In addition, it can have its own properties and methods.
  - An inherited class is defined by using the extends keyword.
- Overriding Inherited Methods
  _ Inherited methods can be overridden by redefining the methods
  _ (use the same name) in the child class.
  - The final Keyword
  - The final keyword can be used to prevent class inheritance
  - or to prevent method overriding.

# Abstract Class

- eder kono body thakben na, bt edr jara extend korbe,
- oi abstract method gula oboshoi implement korte hobe

# Interface

- =========What are Interfaces? =============
- Interfaces allow you to specify what methods a class should implement.
- Interfaces make it easy to use a variety of different classes in the same way.
- When one or more classes use the same interface, it is referred to as "polymorphism".
- Interfaces are declared with the (interface) keyword
  \*/

/\*
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

_/
/_
=========== Using Interfaces =======
To implement an interface, a class must use the (implements) keyword.
A class that implements an interface must implement all of the interface's methods.

# Traits

What are Traits?

- PHP only supports single inheritance: a child class can inherit
  only from one single parent.
- So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
- Traits are used to declare methods that can be used in multiple classes.
- Traits can have methods and abstract methods that can be used in multiple classes,
  and the methods can have any access modifier (public, private, or protected).
- Traits are declared with the trait keyword.
- To use a trait in a class, use the (use) keyword.

# Static Properties

- Static Methods
- Static methods can be called directly - without creating an instance of the class first.

- Static methods are declared with the (static) keyword
- To access a static method use the class name, (double colon) (::), and the method name.

# Static Methods

Static Properties

- Static properties can be called directly - without creating an instance of a class.

- Static properties are declared with the static keyword.
- To access a static property use the class name, double colon (::), and the property name.
- A class can have both static and non-static properties. A static property can be accessed from a method in the same class using the self keyword and double colon (::):
- To call a static property from a child class, use the parent keyword inside the child class.

# NameSpaces

- Grouping , thinking about filename
