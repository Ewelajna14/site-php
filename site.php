<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
     
    <?php
    //strings

    echo "<h1>My site</h1>";
    $name = "John";
    $age = 35;
    strlen($name); // return length of the string
    str_replace("John", "Sarah", $name); //replace string in phrase
    substr($name, 1,2); //create substring from existing string, start from index 1 and cut 2 elements => will return "oh"
    echo "<p> Hello my name is $name and I am $age old. </p>";

    //numbers
     abs(-100); //return absolute value => will return 100
     pow(2,4); // will raise 2 to power of 4 => will return 16
     max(2, 10); //return bigger number
     round(3.2); //regular round => will return 3
     ceil(3.3);//round up => will return 4
     floor(3.8) //round down => will return 3

     //getting input from user
    ?>
    <form avtion="site.php" method="get">
     Name: <input type="text" name="name">
    </form>

        
        <script src="" async defer></script>
    </body>
</html>