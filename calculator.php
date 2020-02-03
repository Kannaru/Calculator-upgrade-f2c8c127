<?php
echo("Welke operatie wil je uitvoeren? (+, -, %) ");

$som = readline();

if ($som == "+"){
    echo("getal nummer 1? ");
    $getal1 = readline();
    if (!is_numeric($getal1)){
        exit($getal1." is geen getal");
    }
    echo("en getal nummer 2? ");
    $getal2 = readline();
    if (!is_numeric($getal2)){
        exit($getal2." is geen getal");
    }
    echo (int) ($getal1+$getal2);
} 
else if ($som == "-"){
    echo ("getal nummer 1? ");
    $getal3 = readline();
    if (!is_numeric($getal3)){
        exit($getal3." is geen getal");
    }
    echo("en getal nummer 2? ");
    $getal4 = readline();
    if (!is_numeric($getal4)){
        exit($getal4." is geen getal");
    }
    echo (int) ($getal3-$getal4);
}
else if  ($som == "%"){
    echo("getal nummer 1? ");
    $getal5 = readline();
    if (!is_numeric($getal5)){
        exit($getal5." is geen getal");
    }
    echo("en getal nummer 2? ");
    $getal6 = readline();
    if (!is_numeric($getal6)){
        exit($getal6." is geen getal");
    }
    echo (int) ($getal5%$getal6);
}
else {
    echo($som." is geen operatie");
}

?>

