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
    $x = 5; // this is a global variable

    function myTest() {
        // get x value in function
        global $x;

        // i will use x value in myTest function
        echo "<p>I current serial number is $x</p>";
    }

    myTest();


    function localTest() {
        $y = 10;  // this is a local variable
        echo "<p>this y value is in a local scope of a function called $y</p>";
    }

    localTest();


    ?>
</body>
</html>