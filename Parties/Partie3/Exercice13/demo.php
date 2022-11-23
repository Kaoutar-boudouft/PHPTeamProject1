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
/**************************Code fonction compterVille utiliser*************************/
/*
 function compterVille($V,$Info){
        $count=0;
        foreach ($Info as $key=>$value){
            $ville=trim($Info[$key][1]);
            if ($ville==ucfirst(strtolower($V))){
                $count++;
            }
        }
        echo $count;
    }
 */
?>

    <div class="exe1">
        <h2>Exercice 13</h2>
        <hr>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label class="form-label"> Ville: </label>
            <input type="text" placeholder="Ville" name="ville" class="form-control w-50" required />
            <br>
            <input type="submit" value="Compter" name="submit" class="btn btn-primary mt-3"><br><br>
        </form>
        <?php
        if (isset($_POST['submit'])){
            $Info=chargerFichier2();
            $count=compterVille($_POST['ville'],$Info);
            echo "Le nombre  d’articles destinés à être distribuer dans la ville de ".$_POST['ville']." est : ".$count;
        }
        ?>
    </div>
</body>

</html>