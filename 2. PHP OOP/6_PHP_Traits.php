 <?php
 /*
What are Traits?
* PHP only supports single inheritance: a child class can inherit 
only from one single parent.
* So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
* Traits are used to declare methods that can be used in multiple classes. 
* Traits can have methods and abstract methods that can be used in multiple classes, 
and the methods can have any access modifier (public, private, or protected).
* Traits are declared with the trait keyword.

* To use a trait in a class, use the (use) keyword.
 */
trait message1 {
    public function msg1() {
      echo "OOP is fun! "; 
    }
  }
  
  trait message2 {
    public function msg2() {
      echo "OOP reduces code duplication!"; 
    }
  }
  
  class Welcome {
    use message1;
  }
  
  class Welcome2 {
    use message1, message2;
  }
  
  $obj = new Welcome();
  $obj->msg1();
  echo "\n";
  
  
  $obj2 = new Welcome2();
  $obj2->msg1();
  $obj2->msg2(); 
  

// On interface

  /*
  interface message1 {
     function msg1();
  }
  
  interface message2 {
     function msg2();
  }
  
  class Welcome implements message1 {
    function msg1(){
        echo "From Message1 \n";
    }
  }
  
  class Welcome2 implements message1,message2 {
    function msg1(){
        echo "From Message1 \n";
    }
    function msg2(){
        echo "From Message2 \n";
    }
  }
  
  $obj = new Welcome();
  $obj->msg1();
  echo "\n";
  
  
  $obj2 = new Welcome2();
  $obj2->msg1();
  $obj2->msg2();
  */