<?php

include_once(dirname(__FILE__) . '../../../../Traitement/fonctions.php');
$ch = "";
$contenu = "";
$lire = "";

if (isset($_POST["submit"])) {
    $ch = $_POST["nom"];
    $contenu = $_POST["contenu"];
    creerFichier($ch . ".txt");
}
/**************************Code fonction chargerFichier1 utiliser*************************/
/*
function creerFichier($ch)
{
    $contenu = $_POST["contenu"];
    $file = fopen($ch, 'w');
    fwrite($file, $contenu);
    fclose($file);
}

*/
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
<div class="row">
    <div class="col">
        <h3>Exercice 1</h3>
        <hr>
        <form action="" method="post">
            <label class="form-label" for="">Nom du fichier :</label>
            <input type=" text" name="nom" id="" class="form-control w-50" value="">
            <label class="form-label">Contenu :</label>
            <textarea name="contenu" id="" class="form-control w-50" cols="10" rows="3"></textarea>
            <input type="submit" value="Envoyer" name="submit" class="btn btn-primary mt-3">
        </form>
    </div>
</div>

</html>