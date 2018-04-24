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
            }
        ?>
        
        
         

    </body>
</html>