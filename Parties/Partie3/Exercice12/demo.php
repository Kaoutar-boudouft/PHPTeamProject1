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
/**************************Code fonction chargerFichier2 utiliser*************************/
/*
  function chargerFichier2(){
        $file = fopen('../documents/info.txt', "r");
        if (!$file){
            echo "error";
            return array(0,"L'ouverture de fichier info.txt a été echoué !");
        }
        $associativeArrayClients=array();
        while (!feof($file)) {
            $line = fgets($file);
            if($line!="") {
                $clientInformations = explode("     ", $line);
                $clientNameAndCity=array();
                array_push($clientNameAndCity,$clientInformations[1]);
                array_push($clientNameAndCity,$clientInformations[count($clientInformations) - 1]);
                $associativeArrayClients[$clientInformations[0]]=$clientNameAndCity;
            }
        }
        fclose($file);
        return $associativeArrayClients;
    }
 */
?>
<div class="container">
    <div class="row pt-4">
        <div class="col-12">
            <?php
            $content=afficherFichier("info");
            echo "<pre>$content</pre>";
            ?>
        </div>
        <div class="col-12">
            <form action="" method="post">
                <input type="submit" value="Convertir" name="submit" class="btn btn-primary mt-3"><br><br>
            </form>
        </div>
        <div class="col-12">
            <?php
            if (isset($_POST['submit'])){
                $result=chargerFichier2();
                print_r($result);
            }
            ?>
        </div>
    </div>
</div>


</body>

</html>