<html>

    <head>
        <title>Gather Information Here</title>
    </head>

    <body>
        <?php
            $x = "Hawa is a silly girl!!!";
            echo $x;
        
        $bestFriends = array();
    array_push($bestFriends, "Rares");
    array_push($bestFriends, "Cedric");
    array_push($bestFriends, "Svetlin");
    array_push($bestFriends, "Mom");
    array_push($bestFriends, "Isatou");
    print count($bestFriends);
        
        
        $the_array = array("mango", "banana", "coconut", "avocado");
    sort($the_array);
    print join(",", $the_array);    
        ?>
       <?php
	// Reverse sort your array and print the joined elements to the screen
    rsort($the_array);
    print join(" ", $the_array);
        
        $familyFriends = array("rares", "cedric", "svetlin", "mom", "isatou", "dad", "musa", "muhammad", "isatou", "maate", "mamasa", "leptu", "bileh", "hawa", "mark", "vicki", "nemi", "michael");
	// Sort the list
    sort($familyFriends);
	// Randomly select a winner!
    $length = count($familyFriends);
    $randNum = rand(0, $length-1);
	// Print the winner's name in ALL CAPS
	print strtoupper($familyFriends[$randNum]);
	?>
	
    <?php 
            class Person {
                public $isAlive = true;
                public $firstname;
                public $lastname;
                public $age;
                
                public function __construct($firstname, $lastname, $age) {
                    $this->firstname = $firstname;
                    $this->lastname = $lastname;
                    $this->age = $age;
                }
                public function greet() {
                    return "Hello, my name is ". $this->firstname . " " . $this->lastname.". ". "Nice to meet you! :-)";
                }
            }
            
            
            $teacher = new Person("boring", "12345", 12345);
            $student = new Person("Ceesay", "Fofana", 26);
            echo $teacher->isAlive;
            echo $student->age;
            echo $teacher->greet();
            echo $student->greet();
        
        class Dog{
                public $numLegs = 4;
                public $name;
                
                public function __construct($name) {
                    $this->name = $name;
                }
             public function bark() {
                    return "Woof!";   
                }
                public function greet()      {
                    return "Hello ". $this->name.", how are you today?";   
                }
            }
        
            $dog1 = new Dog("Barker");
            $dog2 =  new Dog("Amigo");
            echo $dog1->bark();
            echo $dog2->greet();
        
        // inheritance of property
            class Shape {
                public $hasSides = true;
            }
            class Square extends Shape {
                
            }
            $square = new Square();
            if(property_exists($square, "hasSides")) {
                echo "I have sides!!!";
            }
        
        // override method of parent
        class Vehicle {
          public function honk() {
            return "HONK HONK!";
          }
        }
        // use final public function honk(){ return "HONK HONK!";}
        // to prevent overriding of parent methods
        class Bicycle extends Vehicle {
            public function honk() {
             return "Beep beep!";   
            }
        }
        
        $bicycle = new Bicycle();
        echo $bicycle->honk();
        
        // using const variables
        class Person {
          
      }
      class Ninja extends Person {
        // Add your code here...
        const stealth = "MAXIMUM";
      }
         echo Ninja::stealth;
        
        // using static functions and variables
        class King {
          // Modify the code on line 10...
          public static function proclaim() {
            echo "A kingly proclamation!";
          }
        }
        // ...and call the method below!
        echo King::proclaim();
        ?>
        
        
         

    </body>
</html>