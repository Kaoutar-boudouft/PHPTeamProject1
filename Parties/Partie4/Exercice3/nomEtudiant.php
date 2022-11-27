<?php
include_once '../../../Traitement/dbFunctions.php';
if (isset($_POST["cne"])) {
    //echo "kkegkry";
    $cne = $_POST["cne"];
    $cursor = getAllEtudiantParCNE($cne);
    $cursor1 = getBulletin($cne);
    echo json_encode($cursor->fetchAll(PDO::FETCH_ASSOC)) . "#" . json_encode($cursor1->fetchAll(PDO::FETCH_ASSOC));
    // while ($row = $cursor->fetchAll()) {
    // }
}
