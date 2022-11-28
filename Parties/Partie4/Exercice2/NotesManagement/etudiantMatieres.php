<?php
include_once '../../../../Traitement/dbFunctions.php';
if (isset($_POST["cne"])) {
    $cne = $_POST["cne"];

    $cursor = getMatierParCNE($cne);
    echo json_encode($cursor->fetchAll(PDO::FETCH_ASSOC));
    // while ($row = $cursor->fetchAll()) {
    // }
}

?>