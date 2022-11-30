<?php
include_once '../../../../Traitement/dbFunctions.php';
/**************************Code fonction afficherMatieres utiliser*************************/
/*
function afficherMatieres(){
    $req="select * from matieres";
    return selection($req);
}
 */
/**************************Code fonction ajouterMatiere utiliser*************************/
/*
function ajouterMatiere($codeMat, $designation)
{
    $req = "insert into matieres values('$codeMat','$designation')";
    return miseajour($req);
}
 */
/**************************Code fonction modifierMatiere utiliser*************************/
/*
function modifierMatiere($codeMat, $newDesignation)
{
    $req = "update matieres set designation='$newDesignation' where codeMat='$codeMat'";
    return miseajour($req);
}
 */

?>
<!DOCTYPE HTML>
<html>

<head>
    <title> WELCOME</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        tr,
        td {
            width: 100px;
        }
    </style>
</head>

<body>
    <div class="exe3">
        <a href="codesource.php?page=afficherMatieres.php" class="btn btn-link">Voir le code source ici</a>
        <div style="width: 80%" class="mx-auto">
            <div class="col-12">
                <?php
                if (isset($_POST['codeMatA'])) {
                    $res = ajouterMatiere($_POST['codeMatA'], $_POST['designationA']);
                    if ($res==1){
                        echo "<p class='pb-1'>Matiere avec le code ".$_POST['codeMatA']." a été bien ajouter !</p><br>";
                    }
                    else{
                        echo "<p class='pb-1'>Matiere avec le code ".$_POST['codeMatA']." a été deja ajouter!</p><br>";
                    }
                }
                if (isset($_POST['codeMatM'])) {
                    $res = modifierMatiere($_POST['codeMatM'], $_POST['designationM']);
                    if ($res==1){
                        echo "<p class='pb-1'>Matiere avec le code ".$_POST['codeMatM']." a été bien modifier !</p><br>";
                    }
                    else{
                        echo "<p class='pb-1'>probleme a lhors de modification svp ressayer dans qq minutes</p><br>";
                    }
                }
                ?>
            </div>
            <div class='overflow-x-auto w-full'>
                <table class='table table-responsive mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden table-hover table-striped'>
                    <thead class="bg-light">
                        <tr class="text-dark text-left">
                            <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Code Matiere </th>
                            <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Designation </th>
                            <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Actions </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <?php
                        $cursor = afficherMatieres();
                        while ($row = $cursor->fetch()) {
                            echo (' <tr>
                    <td class="px-6 py-4 mx-auto text-center">                 
                                ' . $row[0] . '                      
                    </td>
                    <td class="px-6 py-4 text-center mx-auto text-center"> ' . $row[1] . ' </td>
                        <td class="pt-2 text-center" > <span class="badge badge-primary text-white  bg-primary font-semibold px-2 rounded-full w-100"> <a style="text-decoration: none;color: white" href="./modifierMatiere.php?codeMat=' . $row[0] . '" >Modifier</a><br>
                        </span><br><span class="badge badge-secondary text-white text-sm w-1/3 pb-1 bg-secondary font-semibold px-2 rounded-full w-100">
                        <a style="text-decoration: none;color: white"  href="suppMat.php?codeMat=' . $row[0] . '" >Supprimer</a></span>  </td>
                </tr>');
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>