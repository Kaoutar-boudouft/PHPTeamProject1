<?php
include_once(dirname(__FILE__) . '../../../../Traitement/fonctions.php');
/**************************Code fonction CodageRLE utiliser*************************/
/*
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
 */
$TXT="";
$RLE="";
if (isset($_POST['result'])) {
    $TXT = $_POST['TXT'];
    $RLE=CodageRLE($TXT);
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title> WELCOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
<h1>Exercice 5</h1>
<hr>
<form action="" method="POST" >
    <div>
        <label>Chaine de caractére</label>
        <br>
        <input type="text" name="TXT" id="TXT" value="<?=$TXT; ?>">
    </div>
    <input class="btn btn-primary mt-4" type="submit" value="Resultat" name="result">
    <br>
    <br>
    <div>
        <label>Codage RLE</label>
        <br>
        <input readonly type="text" name="rle" id="rle" value="<?=$RLE; ?>">
    </div>
    <br>
</form>
</body>

</html>