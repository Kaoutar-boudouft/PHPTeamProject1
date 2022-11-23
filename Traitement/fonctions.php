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


    //Calculer 3 Temporaire
    function Calculer3($ch){
        if ( !file_exists('../documents/'.$ch.'.txt') ) {
            return array(0,"The file :  ".$ch." not found");
        }
        $file = fopen('../documents/'.$ch.'.txt', "r");
        if (!$file){
            return array(0,'File '.$ch.' opening filed !');
        }
        $lettreCount=0;
        $chiffreCount=0;
        $ligneCount=0;
        while (!feof($file)) {
            $ligneCount++;
            $line = fgets($file);
            if($line!="") {
                $index = 0;
                while ($index < strlen($line)) {
                    if (preg_match('/[a-zA-Z]/', $line[$index])){
                        $lettreCount++;
                    }
                    elseif (preg_match('/[0-9]/', $line[$index])){
                        $chiffreCount++;
                    }
                    $index++;
                }
            }
        }
        fclose($file);
        return array($lettreCount,$chiffreCount,$ligneCount);
    }

    //afficherFichie Temporaire
    function afficherFichier($filename){
        if ( !file_exists('../documents/'.$filename.'.txt') ) {
            return 'File not exist !';
        }
        $file = fopen('../documents/'.$filename.'.txt', "r");
        if (!$file){
            return 'File Creation filed !';
        }

        $content="";
        while (!feof($file)) {
            $line = fgets($file);
            $content=$content.$line."<br>";
        }
        fclose($file);

        return $content;
    }

     //Exercice 10 Partie 3
    function chargerFichier1($nom,$ville){
        $nom=trim($nom);
        $ville=trim($ville);
        $file = fopen('../documents/info.txt', "a");
        if (!$file){
            return array(0,"L'ouverture de fichier info.txt a été echoué !");
        }
        $sizeOnByte=filesize('../documents/info.txt');
        $sizeOnKoctet=$sizeOnByte/1024;
        if ($sizeOnKoctet<100){
            $calcule=Calculer3("info");
            $nbrLigne=$calcule[2];
            $spaces="";
            if (strlen($nom)<15){
                for ($i=0;$i<=(15-strlen($nom));$i++){
                    $spaces.=" ";
                }
            }
            fwrite($file,($nbrLigne)."     ".ucfirst($nom).$spaces."     ".ucfirst($ville));
            fwrite($file,"\r\n" );
            $newSize=filesize('../documents/info.txt')/1024;
            fclose($file);
            return array(1,"Les données ont bien enregistreé !",$newSize);
        }
        else{
            fclose($file);
            return array(0,"la taille de fichier depassee 100ko !",$sizeOnKoctet);
        }

    }

    //Exercice 11 partie 3

    function chercherCode($code){
        $file = fopen('../documents/info.txt', "r");
        if (!$file){
            return array(0,"L'ouverture de fichier info.txt a été echoué !") ;
        }
        while (!feof($file)) {
            $line = fgets($file);
            if($line!="") {
                $clientInformations = explode("     ", $line);
                if ($clientInformations[0] == $code) {
                    return array(1,$clientInformations[0],$clientInformations[1],$clientInformations[count($clientInformations)-1]) ;
                }
            }
        }
        fclose($file);
        return array(0,"Client avec l'id ".$code." n'exist pas!");

    }

    //Exercice 12 parie 3

    function chargerFichier2(){
        $file = fopen('../documents/info.txt', "r");
        if (!$file){
            echo "error";
            return array(0,"L'ouverture de fichier info.txt a été echoué !");
        }
        $associativeArrayClients=array();
        while (!feof($file)) {
            $line = fgets($file);
            if($line!="") {
                $clientInformations = explode("     ", $line);
                $clientNameAndCity=array();
                array_push($clientNameAndCity,$clientInformations[1]);
                array_push($clientNameAndCity,$clientInformations[count($clientInformations) - 1]);
                $associativeArrayClients[$clientInformations[0]]=$clientNameAndCity;
            }
        }
        fclose($file);
        return $associativeArrayClients;
    }

    //Exercice 13 partie 3
    function compterVille($V,$Info){
        $count=0;
        foreach ($Info as $key=>$value){
            $ville=trim($Info[$key][1]);
            if ($ville==ucfirst(strtolower($V))){
                $count++;
            }
        }
        return $count;
    }

    //Exercice 14 partie 4
    function distrubuerVille($Info){
        foreach ($Info as $key=>$value){
            $file = fopen('../documents/'.trim($Info[$key][1]).'.txt', "a");
            if (!$file){
                echo "error";
                return array(0,"L'ouverture de fichier ".trim($Info[$key][1])." a été echoué !");
            }
            $spaces="";
            if (strlen($Info[$key][0])<15){
                for ($i=0;$i<=(15-strlen($Info[$key][0]));$i++){
                    $spaces.=" ";
                }
            }
            fwrite($file,$key."     ".$Info[$key][0].$spaces.ucfirst(strtolower($Info[$key][1])));
            fclose($file);
        }
        return array(1,"les informations des produits de chaque ville dans un fichier à part !");
    }


?>
