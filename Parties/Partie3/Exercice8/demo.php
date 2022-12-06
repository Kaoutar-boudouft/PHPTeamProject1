<?php
include_once(dirname(__FILE__) . '../../../../Traitement/fonctions.php');
/**************************Code fonction chercherMot($ch, $mot)  utiliser*************************/
/*
   function chercherMot($ch,$mot){
    $file = fopen($ch, "r");
    if (!$file){
        echo "error";
        return array(0,'File '.$ch.' opening filed !');
    }
    $delimiters=array(",",";","!","?","-","_");
    $count=0;
    while (!feof($file)) {
        $line = fgets($file);
        if($line!="") {
            $newLine=str_replace($delimiters, " ", $line);
            $words=explode(" ", $newLine);
            foreach ($words as $word){
                if (trim($word)==trim($mot)){
                    $count++;
                }
            }
        }
    }
    fclose($file);
    return $count;
}
*/
    $c = "";
    $mot = "";
    if (isset($_POST["submit"])) {
        $file=$_FILES['File']['name'];
        move_uploaded_file($_FILES["File"]["tmp_name"], dirname(__FILE__) . '../../documents/' . $file);
        $mot = $_POST["mot"];
        $c = chercherMot(dirname(__FILE__) . '../../documents/' . $file , $mot);
    }

?>

 <!DOCTYPE html>
 <html lang="en">

 <head>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

 </head>

<body>

<div class="row">
        <div class="col">
            <h3>Exercice 8</h3>
            <hr>
            <form action="" method="post" enctype="multipart/form-data">

                <input type="file" name="File" id="folder-opener" class="form-control w-50" accept=".txt" capture="C"></br>
                <label class="form-label" for="">Mot :</label>
                <input type=" text" name="mot" id="" class="form-control w-50"><br>
                <input type="submit" value="Chercher" name="submit" class="btn btn-primary mt-3">
                <?php
                if ($mot != ""){
                echo "<p>le nombre d’occurrences de mot $mot est $c</p>" ;
                }
                ?>
            </form>
        </div>
    </div>

</body>

 </html>



