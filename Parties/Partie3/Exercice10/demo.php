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
include_once(dirname(__FILE__) . './MoroccoCities.php');
/**************************Code fonction chargerFichier1 utiliser*************************/
/*
 function chargerFichier1($nom,$ville){
        $nom=trim($nom);
        $ville=trim($ville);
        $file = fopen('../documents/info.txt', "a");
        if (!$file){
            return array(0,"L'ouverture de fichier info.txt a été echoué !");
        }
        $sizeOnByte=filesize('../documents/info.txt');
        $sizeOnKoctet=$sizeOnByte/1024;
        if ($sizeOnKoctet<100){
            $calcule=Calculer3("info");
            $nbrLigne=$calcule[2];
            $spaces="";
            if (strlen($nom)<15){
                for ($i=0;$i<=(15-strlen($nom));$i++){
                    $spaces.=" ";
                }
            }
            fwrite($file,($nbrLigne)."     ".ucfirst($nom).$spaces.ucfirst($ville));
            fwrite($file,"\r\n" );
            $newSize=filesize('../documents/info.txt')/1024;
            fclose($file);
            return array(1,"Les données ont bien enregistreé !",$newSize);
        }
        else{
            fclose($file);
            return array(0,"la taille de fichier depassee 100ko !",$sizeOnKoctet);
        }

    }
 */
?>

    <div class="exe1">
        <h2>Exercice 10</h2>
        <hr>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label class="form-label"> Nom Client: </label>
            <input type="text" placeholder="Nom Client" name="nom_client" class="form-control w-50" required />
            <br>
            <label class="form-label"> Ville Client: </label><br>
            <input list="villes" name="ville_client" type="text" class="form-control w-50" required>
            <datalist id="villes">
                <?php
                foreach ($cities as $city)
                {
                    echo ("<option value='".$city['name']."'>".$city['name']."</option>");
                }
                ?>
            </datalist>
            <br>
            <input type="submit" value="Ajouter" name="submit" class="btn btn-primary mt-3"><br><br>
        </form>
        <?php
        if (isset($_POST['submit'])){
            $result=chargerFichier1($_POST['nom_client'],$_POST['ville_client']);
            echo $result[1]." , la taille de fichier en ko est : ".$result[2];
        }
        ?>
    </div>
</body>

</html>