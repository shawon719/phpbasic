<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php2</title>
</head>
<body>
    <!-- <?php
    $marks=69;
    if($marks>=80){
        echo "Grade is 'A+' ";
    }
    else if($marks>=70){
        echo "Grade is 'B' ";
    }
    else{
        echo "fail";
    }

?> -->


<?php
 $a=23;
 if($a>20){
    echo "Print this value <br>";
 }else{
    echo "not print";
 }

?>

<?php
    $marks=79;
    if($marks>=80){
        echo "Grade is 'A+' <br>";
    }
    else if($marks>=70){
        echo "Grade is 'B'<br> ";
    }
    else{
        echo "fail";
    }

?>


<form method="post">
    Enter the Number:<br>
    <input type="number" name="number" id="number">
    <input type="submit" name="submit" id="Submit">
</form>

<?php 
if($_POST){
    $fact=1;

    $number = $_POST['number'];
    echo "Factorial of $number:<br><br>";
    for($i=1;$i<=$number;$i++){
        $fact= $fact * $i;
    }
    echo $fact . "<br>";
}
?>
</body>
</html>