<?php
include_once(dirname(__FILE__) . '../../../../Traitement/fonctions.php');
/**************************Code fonction inverserFichier($ch1,$ch2)  utiliser*************************/
/*
    function inverserFichier($ch1,$ch2)
    {
        $file = file($ch1); # kay3tini un tableau de ligne 
        $contenu = "";
        for ($ligne = count($file)-1; $ligne >= 0 ; $ligne--) # ghdi nmchi bl3ks ghdi nbda b ligne 10 w an habta 7ta L 0
        { 
            $tableau = explode(" ",$file[$ligne]); # je decompose dak les (lignes) en un tableau de mots

            for ($mot = count($tableau)-1; $mot >= 0 ; $mot--) # ghdi nakhd akhir mot kayn f ligne 10 w mn b3d le mot li 9bl lkhr 7ta nwsl ligne 0
            { 
                $contenu .= $tableau[$mot]." "; 
            }
            
            $contenu .= "\n";
        }
        file_put_contents($ch2,$contenu);
    }
*/

    if (isset($_POST["submit"])) {
        $fch1 = $_FILES['fch1']['name'];
        $fch2 = $_FILES['fch2']['name'];
        if ($fch1 != "" && $fch2 != "") {
            $extension1 = explode(".", $fch1);
            $extension2 = explode(".", $fch2);
    
            if ($extension1[1] == "txt" && $extension2[1] == "txt") {
                move_uploaded_file($_FILES["fch1"]["tmp_name"], dirname(__FILE__) . '../../documents/' . $fch1);
                move_uploaded_file($_FILES["fch1"]["tmp_name"], dirname(__FILE__) . '../../documents/' . $fch2);
                inverserFichier(dirname(__FILE__) . '../../documents/' . $fch1,dirname(__FILE__) . '../../documents/' . $fch2);
            } else
                echo "extension invalide";
        }
    }
    
?>
    <!DOCTYPE HTML>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    
    <body>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    </body>
    <div class="row">
        <div class="col">
            <h3>Exercice 9</h3>
            <hr>
            <form action="" method="post" enctype="multipart/form-data">
    
                <input type="file" name="fch1" id="folder-opener" class="form-control w-50" accept=".txt" capture="C"></br>
                <input type="file" name="fch2" id="folder-opener" class="form-control w-50" accept=".txt" capture="C">
                <input type="submit" value="Copier" name="submit" class="btn btn-primary mt-3">
    
            </form>
        </div>
    </div>
    
    </html>




