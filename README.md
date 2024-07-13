PHP_OOPs
# OOP 
-stands for Object-Oriented Programming.
# class
-is a template for objects, and an object is an instance of a class.
# encapsulation 
-object-oriented programming to bundle data and methods into easy-to-use units. eg. methods and variables in class
# __construct() 
-function, PHP will automatically call this function when you create an object from a class.
# __destruct() 
-function, PHP will automatically call this function at the end of the script.
# Access Modifiers
-public - the property or method can be accessed from everywhere. This is default
-protected - the property or method can be accessed within the class and by classes derived from that class
-private - the property or method can ONLY be accessed within the class
# Inheritance in OOP = When a class derives from another class.
-The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
-An inherited class is defined by using the extends keyword.
# const
-A class constant is declared inside a class with the const keyword. A constant cannot be changed once it is declared.
-We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name
-we can access a constant from inside the class by using the self keyword followed by the scope resolution operator (::) followed by the constant name
# Abstraction 
-Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
-when a child class is inherited from an abstract class, we have the following rules:
-The child class method must be defined with the same name and it redeclares the parent abstract method
-The child class method must be defined with the same or a less restricted access modifier
-The number of required arguments must be the same. However, the child class may have optional arguments in addition
# Interfaces
-Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".
-Interfaces cannot have properties, while abstract classes can
-All interface methods must be public, while abstract class methods is public or protected
-All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
-Classes can implement an interface while inheriting from another class at the same time
-To implement an interface, a class must use the implements keyword.
# Traits
-PHP only supports single inheritance: a child class can inherit only from one single parent.
-Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).
-Traits are declared with the trait keyword
