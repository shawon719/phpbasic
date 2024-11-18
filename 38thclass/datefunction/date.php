<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date</title>
</head>
<body>
    <?php 
        $d1=date_create("28-03-2024");
        $d2=date_create("28-06-2024");
        $diff=date_diff($d1,$d2);
        echo $diff->format("%R%a days");
        echo "<br>";
        date("d-m-y");
        echo date('l');

        echo "<br>";
        echo date('h i sa');
        echo "<br>";

        $t=time();
        echo date('h i sa',$t+3600);
        echo "<br>";
        $g=time();
        echo date('h i sa',$g);
    ?>
</body>
</html>