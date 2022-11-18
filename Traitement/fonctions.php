<?php
// Exercice 1 partie 2
function Nomcomplet($nom, $prenom)
{
    return $nom . ' ' . $prenom;
}
//Exercice 3 partie 2
function Rpetition($txt, $i)
{
    $c = 0;
    for ($j = $i; $j < strlen($txt); $j++) {
        if ($txt[$j] == $txt[$i]) {
            $c++;
        } else
            break;
    }
    return $c;
}

//Exercie 4 Partie 3
function Entier($txt, $i)
{
    $c = 0;
    $ch = "";
    for ($j = $i; $j < strlen($txt); $j++) {
        if (is_numeric($txt[$j])) {
            $c += 1;
            $ch = $ch . $txt[$j];
        } else
            break;
    }
    if ($ch == "")
        $ch = "0";
    return [$c, $ch];
}
