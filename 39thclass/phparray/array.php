<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    
        <?php

                echo "<h1>indexed array</h1>";
                    $fruits = ["apple", "banana", "cherry"];
                    echo $fruits[0], "<br>";  // Output: apple

                    $name= array("a","b","c");
                    var_dump($name[0]);
                    echo "<br>";
                    echo $name[0];


                    echo "<h1>multidimensional array.</h1>";
                    $b = array(
                        array(01,"f",1678),
                        array(02,"g",1678),
                        array(03,"i",1678),
                        array(04,"j",1678),
                    );
                    echo $b,"<br>";
                    
                    var_dump($b);
                    echo "<br>";
                    print_r($b);
        ?>
</body>
</html>