<?php
include_once '../../../../Traitement/dbFunctions.php';
/**************************Code fonction getMatiereByCodeMat utiliser*************************/
/*
 function getMatiereByCodeMat($codeMat){
    $req="select * from matiere where codeMat='$codeMat'";
    $designation="";
    $cursor=selection($req);
    while ($row=$cursor->fetch()){
        $designation=$row[1];
    }
    $cursor->closeCursor();
    return $designation;
}
 */
 $designation="";
 $codeMat="";
if (isset($_GET['codeMat'])){
    $codeMat=$_GET['codeMat'];
    $designation=getMatiereByCodeMat($codeMat);
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
    <h2>Modifier la matiere avec le code <?php echo $codeMat;?></h2>
    <hr>
    <form action="./showAll.php" method="post">
        <label class="form-label"> Code Matiere : </label> <input type="text" readonly  placeholder="Txt" name="codeMatM" class="form-control w-50" value="<?= $codeMat ?>"/>
        <label class="form-label"> Designation : </label> <input type="text" placeholder="X" name="designationM" class="form-control w-50" value="<?= $designation ?>"/>
        <input type="submit" value="Modifier" name="submit" class="btn btn-primary mt-3"><br><br>
    </form>
    <a href="codesource.php?page=modifierMatiere.php" class="btn btn-link">Voir le code source ici</a>

</div>

</body>

</html>