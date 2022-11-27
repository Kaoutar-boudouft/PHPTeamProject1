<?php
include_once '../../../../Traitement/dbFunctions.php';

if (isset($_POST["submit"])) {
    $code = $_POST["CodeMat"];
    $note = $_POST["note"];
    $cne = $_POST["cne"];
    $res = AjouterNote($code, $cne, $note);
    header("location: Afficher.php");
}
/****Code fonction AjouterNote utiliser 
  
function AjouterNote($codeMat, $cne, $note)
{
    $req = "insert into notes values('$codeMat','$cne',$note)";
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
    <script src="../../jquery-3.6.0.js"></script>
</head>

<body>

    <h2>Ajouter Notes</h2>
    <hr>
    <form method="POST">
        CNE:
        <select name="cne" id="cne" class="form-control w-50">
            <option value="" selected disabled>CNE</option>
            <?php
            $cursor = getAllEtudiants();
            while ($row = $cursor->fetch()) {
                echo '<option value="' . $row[0] . '">' . $row[0] . '</option>';
            }
            ?>
        </select>
        <br>
        CodeMat :
        <select name="CodeMat" id="codeM" class="form-control w-50">
        </select>
        <script>
            $(document).ready(function() {
                $("#cne").change(function() {
                    var cne = $("#cne").val();
                    $.ajax({
                        url: 'test.php',
                        method: 'post',
                        data: 'cne=' + cne
                    }).done(function(response) {
                        console.log(response);
                        rep = JSON.parse(response);
                        $("#codeM").html("");
                        for (let i = 0; i < rep.length; i++) {
                            console.log(rep[i].codeMat);
                            $("#codeM").append("<option value=" + rep[i].codeMat + "> " + rep[i].codeMat + " </option>");
                        }

                    })
                })
            })
        </script>


        <br>

        Note: <input type="text" name="note" id="" class="form-control w-50">
        <input type="submit" name="submit" value="Envoyer" class="btn btn-primary mt-3">
    </form>
    <a href="codesource.php?page=Ajouter.php">Voir le code source ici</a>

</body>

</html>