

<?php



    $x = 10;
    $y = 8;
    $z = 14;
    $p = 9;

    $larnum = ($x>$y && $x>$z && $x>$p? "$x largest number" : ($y>$x && $y>$z && $y>$p? "$y largest number": ($z>$x && $z>$y && $z>$p ? "$z largest number" :"$p largest number")));

     echo $larnum;
     echo "<br>";



?>