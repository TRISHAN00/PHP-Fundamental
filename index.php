<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // $age = 25;
         
      
        // function myAge() {
        //    global $age;
        //     echo "<p>My age is in function <h1>$age</h1></p>";
        // };
        
        // myAge();
        // echo "<p>My age is local <h2>$age</h2></p>";

        

        // Variable with global scope:
    $x = 5; // this is a global Variable
    $y = 10;

    

    function myTest() {
        // get x value in function
        global $x;

        // i will use x value in myTest function
        echo "<p>I current serial number is $x</p>";
    }

    // myTest();


    function localTest() {
        $y = 10;  // this is a local variable
        echo "<p>this y value is in a local scope of a function called $y</p>";
    }

    // localTest();


    $name = "Trishan";
    $age = 12;
    $country = "Bangladesh";
    $language = "Bangla";
    $job = "Wordpress Developer Intern";
    $company_name = "Dcastalia";
    function myDetails() {
        global $name, $age, $country, $language, $job, $company_name;
        echo "<p>My name is $name and age is $age. I am from $country. I work at a company name is $company_name as a $job. </p>";
    }
    // myDetails();

    
    // global value in a array
    function scopeArray() {
       echo $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    // scopeArray();


    // Static Functions
    function funcStatic() {
        static $a = 66;
        echo $a;
        $a++;
    }



//    funcStatic();

//    funcStatic();
//    funcStatic();
//    funcStatic();
//    funcStatic();



    print "<p>this is from print</p>";
    print "<h1>this number is $x</h1>";


    print "<h2> hello " . $x . "</h2>";


    $number = 11;
    var_dump($number); //Integer


    $numberFloat = 13.4;
    echo "</br>";
    var_dump($numberFloat); //Floating Number


    $q = true;
    $r = false; // both are bolean value


    echo "<br>";

    $student_names = array('trishan', 'rishan', 'salam');

    var_dump ($student_names);


    // Object
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }
        public function message() {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }
 



    $myCar = new Car("Black", "10a");

    echo "<br/>";
    echo $myCar -> message();

    echo "<br/>";
    $mySecondCar = new Car("White", "BMW");
    echo "<br/>";
    echo $mySecondCar -> message();


    //mobile class
    class Mobile {
        public $brand;
        public $model;
        public function __construct($brand, $model) {
            $this->brand = $brand;
            $this->model = $model;
        }
        public function message() {
            return "My choice of phone brand name is " . $this->brand . " " . $this->model;
        }
    }

    $myMobile = new Mobile('MI', 'note 7');
    echo $myMobile->message();


    // Home color
    class Home {
        public $color;
        public $location;
        public function __construct($color, $location) {
            $this->color = $color;
            $this->location = $location;
        }

        public function message() {
            return 'My home location is ' . $this->location . ' house color is ' . $this->color;
        }
    }

    echo "</br>";

    $homeOne = new Home('red', 'green road');
    // echo $homeOne->message(); 

    $str = "Hello PHP Lovely Language";
    echo strlen($str);
    echo "<br/>";
    echo str_word_count($str);

    ?>
</body>
</html>