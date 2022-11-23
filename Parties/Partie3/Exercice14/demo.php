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
/**************************Code fonction distrubuerVille utiliser*************************/
/*
 function distrubuerVille($Info){
        foreach ($Info as $key=>$value){
            $file = fopen('../documents/'.trim($Info[$key][1]).'.txt', "a");
            if (!$file){
                echo "error";
                return array(0,"L'ouverture de fichier ".trim($Info[$key][1])." a été echoué !");
            }
            $spaces="";
            if (strlen($Info[$key][0])<15){
                for ($i=0;$i<=(15-strlen($Info[$key][0]));$i++){
                    $spaces.=" ";
                }
            }
            fwrite($file,$key."     ".$Info[$key][0].$spaces.ucfirst(strtolower($Info[$key][1])));
            fclose($file);
        }
        return array(1,"les informations des produits de chaque ville dans un fichier à part !");
    }
 */
?>
<form action="" method="post">
    <input type="submit" value="Distribuer" name="submit" class="btn btn-primary mt-3"><br><br>
</form>
<?php
if (isset($_POST['submit'])){
    $Info=chargerFichier2();
    $result=distrubuerVille($Info);
    echo $result[1];
}

?>
</body>

</html>