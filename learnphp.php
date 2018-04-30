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
        
        <?php
        
        // using both static and const keywords
      class Person {
        public static function say() {
         echo "Here are my thoughts!";   
        }
      }
      
      class Blogger extends Person {
           const cats = 50;
      }
      Blogger::say();
      echo Blogger::cats;
        
        
        // use maps/associative arrays
        $car = array(2012, 'blue', 5, 'BMW');

        // This is an associative array.
        // Add the make => 'BMW' key/value pair!
        $assocCar = array('year' => 2012,
                   'colour' => 'blue',
                   'doors' => 5,
                   'make' => 'BMW');
            
     
        echo $car[3];
        echo '<br />';
            
        // using keys to access array values
        echo $assocCar['make'];
        echo "My car was made in ". $myArray[0]. ", its color is ". $myAssocArray['colour'] . ", it has ". $myArray[2] ." doors and the make is " . $myAssocArray['make']. ".";
      ?>
        <?php    
        $food = array('pizza', 'salad', 'burger');
        $salad = array('lettuce' => 'with',
                   'tomato' => 'without',
                   'onions' => 'with');
        $pizza = array('cheese' => 'without',
                        'pepper' => 'with',
                        'chicken' => 'with');
        $burger = array('lettuce' => 'with',
                        'meat' => 'with',
                        'barbecue sauce' => 'without');
    
      // Looping through an array using "for".
      // First, let's get the length of the array!
      $length = count($food);
      $lengthPizza = count($pizza);
      $lengthBurger = count($burger);
    
      // Remember, arrays in PHP are zero-based:
      for ($i = 0; $i < $length; $i++) {
        echo $food[$i] . '<br />';
      }
    
      echo '<br /><br />I want my salad:<br />';
    
      // Loop through an associative array using "foreach":
      foreach ($salad as $ingredient=>$include) {
        echo $include . ' ' . $ingredient . '<br />';
      }
    
      echo '<br />';
    
      // Create your own array here and loop
      // through it using foreach!
    echo 'I  want my pizza:<br />';
    foreach ($pizza as $ingredient=>$include) {
        echo $include . " " . $ingredient . "<br />";
    }
    echo '<br />';
    echo 'I want my burger: <br />';
    foreach($burger as $ingredient=>$include) {
        echo $include . " " . $ingredient . '<br />';
    }
        
        $deck = array(array('2 of Diamonds', 2),
                      array('5 of Diamonds', 5),
                      array('7 of Diamonds', 7),
                      array('9 of Diamonds', 9));
        
      // Imagine the first chosen card was the 7 of Diamonds.
      // This is how we would show the user what they have:
      echo 'You have the ' . $deck[2][0] . '!';

      ?>
        
        <?php
      // On the line below, create your own associative array:
        // created a multidimensional associative array and then
        // used a for loop to output each key, value pair
    $myArray = array(array('clark kent', 10),
                    array('thor', 9),
                    array('captain america', 8));

      // On the line below, output one of the values to the page:
     echo "My favorite superhero " . $myArray[0][0];
          
      // On the line below, loop through the array and output
      // *all* of the values to the page:
      $length = count($myArray);
      echo '<br />';
     for($i=0; $i < $length; $i++) {
        for($j=0; $j < count($myArray[$i]); $j++) {
            echo " " . $myArray[$i][$j];
        }
        echo '<br />';
     }
     
      ?>
         

    </body>
</html>