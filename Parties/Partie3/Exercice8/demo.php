<?php
include_once(dirname(__FILE__) . '../../../../Traitement/fonctions.php');
/**************************Code fonction chercherMot($ch, $mot)  utiliser*************************/
/*
    function chercherMot($ch, $mot)
    {
        $contenu = afficherFichier1($ch);
        $m = explode(' ', $contenu);
        $c = 0;
        foreach ($m as $key => $value){
            if ($value == $mot) {
                $c++;
            }
        }
        return $c;
    }
*/
    $c = "";
    $mot = "";
    if (isset($_POST["submit"])) {
        $ch = $_POST["fichier"];
        $mot = $_POST["mot"];
        $c = chercherMot($ch , $mot);
    }

?>

 <!DOCTYPE html>
 <html lang="en">

 <head>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

 </head>

<body>

<div class="row">
        <div class="col">
            <h3>Exercice 8</h3>
            <hr>
            <form action="" method="post">

                <input type="file" name="fichier" id="folder-opener" class="form-control w-50" accept=".txt" capture="C"></br>
                <label class="form-label" for="">Mot :</label>
                <input type=" text" name="mot" id="" class="form-control w-50"><br>
                <input type="submit" value="Chercher" name="submit" class="btn btn-primary mt-3">
                <p><?php echo "le nombre d’occurrences d’un mot $mot est $c" ?></p>

            </form>
        </div>
    </div>

</body>

 </html>



