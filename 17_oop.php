<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/
class User
{
  // Properties are just variables that belong to a class.
  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes

  public $name;
  public $email;
  public $password;
  // The constructor is called whenever an object is created from the class.
  // We pass in properties to the constructor from the outside.
  public function __construct($name, $email, $password)
  {
    // We assign the properties passed in from the outside to the properties we created inside the class.
    $this->name  = $name;
    $this->email  = $email;
    $this->password  = $password;
  }

  // Methods are functions that belong to a class.
  function set_name($name)
  {
    $this->name = $name;
  }
  function get_name()
  {
    return $this->name;
  }
}

// Instantiate a new user
$user1 = new User("Matt", "mbaillie@gmail.com", "adadf");
$user2 = new User('Mandy', 'ae@gmail.com', 'sadfa');
// $user1->set_name('Matt');
// $user2->set_name('Mandy');
// $user1->name = "Matt";


// echo $user1->get_name();

// echo $user2->get_name();

/* ----------- Inheritence ---------- */

/*
  Inheritence is the ability to create a new class from an existing class.
  It is achieved by creating a new class that extends an existing class.
*/
class Employee extends User
{
  public function __construct($name, $email, $password, $title)
  {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function get_title()
  {
    return $this->title;
  }
}

$employee1 = new Employee('Sarah', "efg@gmail.com", "adsf", "CEO");
echo $employee1->get_title();
