<?php
include_once '../../../../Traitement/dbFunctions.php';

/* ---------------------- Fonction Ajouter Etudiant ------------------------------
    function AjouterEtudiant($CNE, $nom, $codeClasse)
    {
        $req = "insert into etudiants values('$CNE','$nom',$codeClasse)";
        return miseajour($req);
    }
*/

if(isset($_POST['cne']) && isset($_POST['nom']) && isset($_POST['codeclasse'])){
    AjouterEtudiant($_POST['cne'],$_POST['nom'],$_POST['codeclasse']);
    header("location: ./afficherEtudiants.php");
}

?>

<!DOCTYPE HTML>
<html>

<head>
    <title> WELCOME</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


<div class="exe2">
    <h2>Ajouter Etudiant :</h2>
    <hr>
    <form action="" method="post">
        <label class="form-label"> CNE : </label> <input type="text"   name="cne" class="form-control w-50" value=""/>
        <label class="form-label"> Nom : </label> <input type="text"  name="nom" class="form-control w-50" value=""/>
        <label class="form-label"> Code Classe : </label>         
        <select name="codeclasse" id="codeclasse" class="form-control w-50">
            <option value="" selected disabled>CNE</option>
            <?php
            $cursor = aficherClasses();
            while ($row = $cursor->fetch()) {
                echo '<option value="' . $row[0] . '">' . $row[0] . '</option>';
            }
            ?>
        </select>
        <input type="submit" value="Ajouter" name="submit" class="btn btn-primary mt-3"><br><br>
    </form>
    <a href="codesource.php?page=ajouterEtudiant.php" class="btn btn-link">Voir le code source ici</a>
</div>

</body>

</html>