<?php

        //array merge
        $a=array("a","b","c");
        $b=array("d","e","g");
        print_r (array_merge($a,$b));
        echo "<br>";
?>

<?php

        //array push
    $c=array("a","b","c");
    $d=array_push($c,"d");
    print_r($c);
    echo "<br>";
    echo $d;
    echo "<br>";
?>

<?php
        //array pop
        $a=array("a","b","c","d","e");
        $b=array_pop($a);
        print_r($b);
        echo $b;
        echo $b;
        echo "<br>";
        print_r($a);
        echo "<br>";
?>

<?php
    $a=array("a","b","c","d","e");
    $b=array_slice($a,2);
    echo "<br>";
    print_r($b);
    echo "<br>";echo "<br>";
?>

<?php

        $a=array("a","b","c","d","e");
        $c=array("f","g","h");
        $b=array_splice($a,3,3,$c);
        print_r($a);
        echo "<br>";

        // $f=array("a","b","c","d","e");
        // $e=array("f","g","h");

        $d=array_splice($a,3,0,$c);
        print_r($a);
?>

<?php

 echo "<br>";
        $f=array("a","b","c","d","e");
        $e=array("f","g","h");

        $d=array_splice($f,3,0,$e);
        print_r($f);

?>