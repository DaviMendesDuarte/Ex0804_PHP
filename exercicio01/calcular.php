<?php
    $v = $_POST['val'];
    $i = 0;

    $cem = $v;
    $cin = $v;
    $vin = $v;
    $dez = $v;
    $cinco = $v;
    $dos = $v;
    $um = $v;

    echo "Foi necessário tantas cédulas para compor: <br><br>"; 

    // 100
    do 
    {
        $cem -= 100;
        $i++;
    }   while ($cem >= 100);

    echo "R$ 100,00: ".$i;

    // 50
    $i = 0;

    do 
    {
        $cin -= 50;
        $i++;
    }   while ($cin >= 50);

    echo "<br>R$ 50,00: ".$i;

    // 20
    $i = 0;

    do 
    {
        $vin -= 20;
        $i++;
    }   while ($vin >= 20);

    echo "<br>R$ 20,00: ".$i;

    // 10
    $i = 0;

    do 
    {
        $dez -= 10;
        $i++;
    }   while ($dez >= 10);

    echo "<br>R$ 10,00: ".$i;
    
    // 5
    $i = 0;

    do 
    {
        $cinco -= 5;
        $i++;
    }   while ($cinco >= 5);

    echo "<br>R$ 5,00: ".$i;

    // 2
    $i = 0;

    do 
    {
        $dos -= 2;
        $i++;
    }   while ($dos >= 2);

    echo "<br>R$ 2,00: ".$i;

    // 1
    $i = 0;

    do 
    {
        $um -= 1;
        $i++;
    }   while ($um > 0);

    echo "<br>R$ 1,00: ".$i;
?>
