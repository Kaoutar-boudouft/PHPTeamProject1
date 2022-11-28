<?php
include_once '../../../../Traitement/dbFunctions.php';
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
    <h2>Ajouter Matiere</h2>
    <hr>
    <form action="./afficherMatieres.php" method="post">
        <label class="form-label"> Code Matiere : </label> <input type="text"   name="codeMatA" class="form-control w-50" value=""/>
        <label class="form-label"> Designation : </label> <input type="text"  name="designationA" class="form-control w-50" value=""/>
        <input type="submit" value="Ajouter" name="submit" class="btn btn-primary mt-3"><br><br>
    </form>
    <br>
    <a href="codesource.php?page=ajouterMatiere.php" class="btn btn-link">Voir le code source ici</a>
</div>

</body>

</html>