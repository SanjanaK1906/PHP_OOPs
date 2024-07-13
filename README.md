PHP_OOPs
# OOP stands for Object-Oriented Programming.
# class is a template for objects, and an object is an instance of a class.
# encapsulation -object-oriented programming to bundle data and methods into easy-to-use units. eg. methods and variables in class
# __construct() - function, PHP will automatically call this function when you create an object from a class.
# __destruct() - function, PHP will automatically call this function at the end of the script.
# Access Modifiers -
public - the property or method can be accessed from everywhere. This is default
protected - the property or method can be accessed within the class and by classes derived from that class
private - the property or method can ONLY be accessed within the class
# Inheritance in OOP = When a class derives from another class.
The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
An inherited class is defined by using the extends keyword.
# const
A class constant is declared inside a class with the const keyword. A constant cannot be changed once it is declared.
We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name
we can access a constant from inside the class by using the self keyword followed by the scope resolution operator (::) followed by the constant name
