  <?php
    include_once '../../../Traitement/DataAccess.php';
    if (isset($_POST["codeC"])) {
        $codeC = $_POST["codeC"];
        $req = "select * from etudiants where codeClasse='$codeC'";
        $cursor = selection($req);
        echo json_encode($cursor->fetchAll(PDO::FETCH_ASSOC));
    }

    ?>