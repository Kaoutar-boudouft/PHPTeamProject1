<!DOCTYPE HTML>
<html>

<head>
    <title> WELCOME</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
<?php
include_once(dirname(__FILE__) . '../../../../Traitement/fonctions.php');
/**************************Code fonction chachercherCode utiliser*************************/
/*
 function chercherCode($code){
        $file = fopen('../documents/info.txt', "r");
        if (!$file){
            return array(0,"L'ouverture de fichier info.txt a été echoué !") ;
        }
        while (!feof($file)) {
            $line = fgets($file);
            if($line!="") {
                $clientInformations = explode("     ", $line);
                if ($clientInformations[0] == $code) {
                    return array(1,$clientInformations[0],$clientInformations[1],$clientInformations[count($clientInformations)-1]) ;
                }
            }
        }
        fclose($file);
        return array(0,"Client avec l'id ".$code." n'exist pas!");

    }
 */
$code="";
$result1="";
if (isset($_POST['submit'])) {
    $code=$_POST['code_client'];
    $result = chercherCode($code);
    if ($result[0]==1){
        $result1= "<table class='table table-hover table-responsive table-striped'><tr><td>Id</td><td>Nom</td><td>Ville</td></tr><tr><td>$result[1]</td><td>$result[2]</td><td>$result[3]</td></tr></table>";
    }
    else{
        $result1=$result[1];
    }
}

?>

    <div class="exe1">
        <h2>Exercice 11</h2>
        <hr>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label class="form-label"> Code Client: </label>
            <input type="number" placeholder="Code Client" name="code_client" class="form-control w-50" required value="<?= $code ?>"/>
            <br>
            <input type="submit" value="Chercher" name="submit" class="btn btn-primary mt-3"><br><br>
        </form>
        <?php
        echo $result1;
        ?>
    </div>
</body>

</html>