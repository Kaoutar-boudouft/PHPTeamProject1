<?php
include_once(dirname(__FILE__) . '../../../../Traitement/fonctions.php');

$ch = "";
$contenu = "";
$lire = "";

if (isset($_POST["submit1"])) {
    $nom = $_FILES['file']['name'];
    $type = $_FILES['file']['type'];
    // explode : string ===> array
    if ($nom != "") {
        $extension = explode(".", $nom);
        if ($extension[1] == "txt") {
            move_uploaded_file($_FILES["file"]["tmp_name"], dirname(__FILE__) . '../../documents/' . $nom);
            $lire = afficherFichier($nom);
        } else
            echo "extension invalide";
    }

    /**************************Code fonction chargerFichier1 utiliser*************************/
    /*
function afficherFichier1($ch)
{
    if (file_exists($ch)) {
        $file = fopen($ch, "r");
        if (filesize($ch) > 0)
            $lire = fread($file, filesize($ch));
        else
            $lire = "";
        fclose($file);
        return $lire;
    }
    return "";
}

*/
}
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('folder-opener').addEventListener('change', function(event) {
            // Selected folder's absolute path:
            console.log(event.target.files[0].path);
        });
    </script>
</body>
<div class="row">
    <div class="col">
        <h3>Exercice 2</h3>
        <hr>
        <form action="" method="post" enctype="multipart/form-data">

            <div class="row">

                <input type="file" name="file" id="folder-opener" class="form-control w-50" accept=".txt" capture="C">
                <div class="col-9"><input type="submit" value="Afficher" name="submit1" class="btn btn-primary"></div>
            </div>
            <label class="form-label">Contenu :</label>
            <textarea name="contenu1" id="" readonly class="form-control w-50" cols="10" rows="3"><?php echo $lire ?></textarea>

        </form>
    </div>
</div>

</html>