<?php
include_once '../../../../Traitement/dbFunctions.php';

if(isset($_POST['codeC']) && isset($_POST['filiere']) && isset($_POST['numC'])){
    ajouterClasse($_POST['codeC'],$_POST['filiere'],$_POST['numC']);
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
    <h2>Ajouter Classe</h2>
    <hr>
    <form action="" method="post">
        <label class="form-label"> Code Classe : </label> <input type="text"   name="codeC" class="form-control w-50" value=""/>
        <label class="form-label"> Filliere : </label> <input type="text"  name="filiere" class="form-control w-50" value=""/>
        <label class="form-label"> Numero classe : </label> <input type="text" name="numC" class="form-control w-50" value=""/>
        <input type="submit" value="Ajouter" name="submit" class="btn btn-primary mt-3"><br><br>
    </form>
</div>

</body>

</html>