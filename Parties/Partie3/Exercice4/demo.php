<?php
include_once(dirname(__FILE__) . '../../../../Traitement/fonctions.php');
/**************************Code fonction monFichier2 (Copier) utiliser*************************/
/*
    function monFichier2($ch1,$ch2)
    {
        copy($ch1,$ch2);

    }
*/

if (isset($_POST["submit"])) {
    $fch1 = $_FILES['fch1']['name'];
    $fch2 = $_FILES['fch2']['name'];
    if ($fch1 != "" && $fch2 != "") {
        $extension1 = explode(".", $fch1);
        $extension2 = explode(".", $fch2);

        if ($extension1[1] == "txt" && $extension2[1] == "txt") {
            move_uploaded_file($_FILES["fch1"]["tmp_name"], dirname(__FILE__) . '../../documents/' . $fch1);
            move_uploaded_file($_FILES["fch1"]["tmp_name"], dirname(__FILE__) . '../../documents/' . $fch2);
           monFichier2(dirname(__FILE__) . '../../documents/' . $fch1,dirname(__FILE__) . '../../documents/' . $fch2);
        } else
            echo "extension invalide";
    }
}

?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
<div class="row">
    <div class="col">
        <h3>Exercice 4</h3>
        <hr>
        <form action="" method="post" enctype="multipart/form-data">

            <input type="file" name="fch1" id="folder-opener" class="form-control w-50" accept=".txt" capture="C"></br>
            <input type="file" name="fch2" id="folder-opener" class="form-control w-50" accept=".txt" capture="C">
            <input type="submit" value="Copier" name="submit" class="btn btn-primary mt-3">

        </form>
    </div>
</div>

</html>