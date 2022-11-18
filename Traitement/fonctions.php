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

//Exercice 5 Partie 2
function CodageRLE($TXT){
    $indice=0;
    $NewTxt="";
    while ($indice<strlen($TXT)){
        $repetition=Rpetition($TXT,$indice);
        $NewTxt=$NewTxt.$repetition.$TXT[$indice];
        $indice=$indice+$repetition;
    }
    return $NewTxt;

}

//Exercice 6 Partie 2
function DecodageRLE($TXT){
        $indice=0;
        $NewTxt="";
        while ($indice<strlen($TXT)){
            $res=Entier($TXT,$indice);
            for ($i=0;$i<$res[1];$i++){
                $NewTxt.=$TXT[$indice+$res[0]];
            }
            $indice=$indice+$res[0]+1;
        }
        return $NewTxt;
    }

?>
