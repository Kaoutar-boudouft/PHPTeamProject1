<?php
include_once '../../../../Traitement/dbFunctions.php';

/* ------------------- Fonction Modifier Etudiant -----------------------
    function ModifierEtudiant($CNE, $nom, $codeClasse)
    {
        $req = "update etudiants set nom='$nom' , codeClasse='$codeClasse' where CNE=$CNE  ";
        return miseajour($req);
    }

    ------------------ Fonction Modifier Etudiant -----------------------


*/
$cne = $_GET["CNE"];
$nom = $_GET["nom"];
$codeclasse = $_GET["codeClasse"];
if (isset($_POST["submit"]) && isset($_POST['cne']) && isset($_POST['nom']) && isset($_POST['codeclasse'])) {
    $CNE = $_POST["cne"];
    $NOM = $_POST["nom"];
    $CODECLASSE = $_POST["codeclasse"];
    ModifierEtudiant($CNE, $NOM, $CODECLASSE);
    header("location: afficherEtudiants.php");
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title> WELCOME </title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


<div class="exe2">
    <h2>Modifier Etudiant Numero : <?php echo $cne;?></h2>
    <hr>
    <form action="" method="post">
        <label class="form-label"> CNE : </label> <input type="text" readonly  placeholder="CNE" name="cne" class="form-control w-50" value="<?= $cne ?>"/>
        <label class="form-label"> Nom : </label> <input type="text" placeholder="Nom" name="nom" class="form-control w-50" value="<?= $nom ?>"/>
        <label class="form-label"> Code classe : </label> <input type="text" placeholder="Code Classe" name="codeclasse" class="form-control w-50" value="<?= $codeclasse ?>"/>
        <input type="submit" value="Modifier" name="submit" class="btn btn-primary mt-3"><br><br>
    </form>
    <a href="codesource.php?page=modifierEtudiant.php" class="btn btn-link">Voir le code source ici</a>
</div>

</body>