<?php
include_once(dirname(__FILE__) . '../../../../Traitement/fonctions.php');
/**************************Code fonction Nomcomplet utiliser*************************/
/*function Nomcomplet($nom, $prenom)
{
    return $nom . ' ' . $prenom;
}*/
?>
<!DOCTYPE HTML>
<html>

<head>
    <title> WELCOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <?php
    $nomComplet = '';
    if (isset($_POST['submit'])) {
        $nomComplet = Nomcomplet($_POST['nom'], $_POST['prenom']);
    }
    ?>
    <div class="exe3">
        <h2>Exercice 1</h2>
        <hr>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label class="form-label"> Nom: </label>
            <input type="text" name="nom" class="form-control w-50" value="<?= $_POST['nom']??'' ?>"/>
            <label class="form-label"> Prenom:</label>
            <input type="text" name="prenom" class="form-control w-50" value="<?= $_POST['prenom']??'' ?>"/>
            <input type="submit" value="submit" name="submit" class="btn btn-primary mt-4"><br><br>
            <label class="form-label"><b>Nom Complet : </b> </label>
            <label type="text" class="form-label"><?php echo $nomComplet; ?></label>
        </form>
    </div>
</body>

</html>