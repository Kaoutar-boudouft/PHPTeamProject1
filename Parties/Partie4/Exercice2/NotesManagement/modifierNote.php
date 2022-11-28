<?php
include_once '../../../../Traitement/dbFunctions.php';
$code = $_GET["codeMat"];
$note = $_GET["note"];
$cne = $_GET["cne"];
if (isset($_POST["submit"])) {
    $code = $_POST["code"];
    $note = $_POST["note"];
    $cne = $_POST["cne"];
    $res = ModifierNote($code, $cne, $note);
    header("location: afficherNotes.php");
}

/****Code fonction ModifierNote utiliser 
  function ModifierNote($codeMat, $cne, $note)
{
    $req = "update notes set note=$note where codeMat='$codeMat' and CNE='$cne'";
    return miseajour($req);
}
 
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <h2>Modifier Note </h2>
    <hr>
    <form method="POST">
        CodeMat : <input type="text" name="code" readonly id="" class="form-control w-50" value="<?php echo $code; ?>">
        CNE: <input type="text" name="cne" readonly id="" class="form-control w-50" value="<?php echo $cne; ?>">
        Note: <input type="text" name="note" id="" class="form-control w-50" value="<?php echo $note; ?>">
        <br>
        <input type="submit" name="submit" value="Envoyer" class="btn btn-primary">
    </form>
    <a href="codesource.php?page=modifierNote.php">Voir le code source ici</a>
</body>

</html>