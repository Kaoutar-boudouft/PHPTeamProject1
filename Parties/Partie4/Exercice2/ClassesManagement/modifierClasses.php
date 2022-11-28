<?php
include_once '../../../../Traitement/dbFunctions.php';

 $filliere="";
 $numC="";
 $codeC="";
if (isset($_GET['codeC'])){
    $codeC=$_GET['codeC'];   
    $res=aficherClassesCode($codeC);
    $filiere=$res[0];
    $numC=$res[1];
}
if(isset($_POST['codeC']) && isset($_POST['filiere']) && isset($_POST['numC'])){
    echo('dsds');
    modifierClasse($_POST['codeC'],$_POST['filiere'],$_POST['numC']);
    header("location: ./afficherClasses.php");

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
    <h2>Modifier Classe <?php echo $codeC;?></h2>
    <hr>
    <form action="" method="post">
        <label class="form-label"> Code Classe : </label> <input type="text" readonly  placeholder="Code classe" name="codeC" class="form-control w-50" value="<?= $codeC ?>"/>
        <label class="form-label"> Filiere : </label> <input type="text" placeholder="filiere" name="filiere" class="form-control w-50" value="<?= $filiere ?>"/>
        <label class="form-label"> Numero classe : </label> <input type="text" placeholder="Numero classe" name="numC" class="form-control w-50" value="<?= $numC ?>"/>
        <input type="submit" value="Modifier" name="submit" class="btn btn-primary mt-3"><br><br>
    </form>
    <a href="codesource.php?page=modifierClasses.php" class="btn btn-link">Voir le code source ici</a>
</div>

</body>