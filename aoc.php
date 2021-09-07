<?php

class Animal {
  public $name;
  public $legs = 4;
  public $has_fur = "yes";
  protected $communication;
  private $owner_name = "Tyler";

  public function description() {
    return "Name: " . $this->name . "<br>" . "Legs: " . $this->legs . "<br>" . "Has Fur: " .  $this->has_fur . "<br>" . "How they communicate: " . $this->communication ."<br>";
  }

  //getter function
  public function owner() {
    return $this->owner_name;
  }

  //setter function
  public function set_owner_name($value) {
    $this->owner_name = $value;
  }
}

class Dog extends Animal {
  protected $communication = 'Bark';
}

class Cat extends Animal {
  protected $communication = 'Meow';
}

class Rabbit extends Animal {
  public $legs = 2;
  protected $communication = 'Crunch Crunch';
}

$d = new Dog;
$d->name = 'Elsa';
$d->set_owner_name('Mechelle');

$c = new Cat;
$c->name = 'Kitty';
$c->set_owner_name('Brionnah');

$r = new Rabbit;
$r->name = 'Thumper';
$r->set_owner_name('Rose');

echo $d->description();
echo "The owner of Elsa is: " . $d->owner() . "<br>";
echo "<hr>";

echo $c->description();
echo "The owner of Kitty is: " . $c->owner() . "<br>";
echo "<hr>";

echo $r->description();
echo "The owner of Thumper is: " . $r->owner() . "<br>";
echo "<hr>";

echo get_parent_class($d) . " is a parent class of dog" . "<br>";
echo get_parent_class($c) . " is a parent class of cat" .  "<br>";
echo get_parent_class($r) . " is a parent class of rabbit" .  "<br>";

//you can use a name or an instance 
//but more common to use an instance
if(is_subclass_of($d, 'Animal')) {
  echo "Elsa is a instance of Dog and a subclass of Animal. <br>";
}
if(is_subclass_of($c, 'Animal')) {
  echo "Kitty is a instance of Cat and a subclass of Animal. <br>";
}
if(is_subclass_of($r, 'Animal')) {
  echo "Thumper is a instance of Rabbit and a subclass of Animal. <br>";
}

// $parents = class_parents($d); 
// echo implode(', ', $parents) . "<br>";

// $parents = class_parents($c); 
// echo implode(', ', $parents) . "<br>";

// $parents = class_parents($r); 
// echo implode(', ', $parents) . "<br>";