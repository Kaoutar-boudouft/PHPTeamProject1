<?php
include_once '../../../../Traitement/dbFunctions.php';

 $filliere="";
 $numC="";
 $codeC="";
if (isset($_GET['codeC'])){
    $codeC=$_GET['codeC'];
    supprimerClasse($_GET['codeC']);
    $res=aficherClassesCode($codeC);
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
    <h2>Supprimer Classe <?php echo $codeC;?></h2>
    <hr>
    <form action="./afficherClasses.php" method="post">
        <div class='overflow-x-auto w-full text-center d-flex flex-column justify-content-between align-items-center' style="height:100px" >
            <label class="form-label text-warning h3"> Voullez-vous vraiment supprimer cette classe! </label>
            <input type="submit" value="Accepter" name="submit" class="btn btn-primary w-25">
        </div>
    </form>
</div>

</body>