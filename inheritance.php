<?php

class Animal {
  var $name;
  var $legs = 4;
  var $has_fur = "yes";
  var $communication;

  function description() {
    return "Name: " . $this->name . "<br>" . "Legs: " . $this->legs . "<br>" . "Has Fur: " .  $this->has_fur . "<br>" . "How they communicate: " . $this->communication ."<br>";
  }
}

class Dog extends Animal {
  var $communication = 'Bark';
}

class Cat extends Animal {
  var $communication = 'Meow';
}

class Rabbit extends Animal {
  var $legs = 2;
  var $communication = 'Crunch Crunch';
}

$d = new Dog;
$d->name = 'Elsa';

$c = new Cat;
$c->name = 'Kitty';

$r = new Rabbit;
$r->name = 'Thumper';

echo $d->description() . "<br>";
echo $c->description() . "<br>";
echo $r->description() . "<br>";

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