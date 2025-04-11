<?php
    $n = $_POST['num'];
    $num = rand(1,10);
    $j = 0;
    $i = 0;

    echo "O número ".$n." foi subtraído pelo número ".$num."<br><br>"; 

    do 
    {
        $n -= $num;
        $j++;
        echo $n."<br>";
    }   while ($n > 0);

    echo "<br>Teve que contar ".$j." vezes para chegar até 0";
?>