<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String function</title>
</head>
<body>
    <h1>string function</h1>
    <?php
        function name(){
            return strlen("sharmony hashem <br>");
        }
        echo name() ,"<br>";

        function nam(){
            return substr("sharmony hashem",5);
        }
        echo nam(),"<br>";
        function nam1(){
            return strtoupper("sharmony hashem shawon");
        }
        echo nam1(),"<br>";

        function nam2(){
            return strtolower("SHARmoNY HASHEM sHaWoN");
        }
        echo nam2(),"<br>";

    ?>
</body>
</html>