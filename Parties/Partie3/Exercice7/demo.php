<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <form  method="post" enctype="multipart/form-data">
            <h1>Exercice 7</h1><hr>
            <div class="row"> <label>Choisir un fichier</label> <br><input type="file" name="File" accept=".txt" class="form-control w-50"></div>
            <input type="submit" value="submit" name="submit" class="btn btn-primary mt-4"><br></div>
        </form>
    </body>
</html>
<?php 
include_once(dirname(__FILE__) . '../../../../Traitement/fonctions.php');
/**************************Code fonction Calculer3 utiliser*************************/
/*
    
    function Calculer3($ch)
    {
        $nombreLignes=0;
        $file=fopen($ch,'r');
        $res=Calculer2($ch);
        while (!feof($file)) {
            fgets($file);
            $nombreLignes++;
        }
        
        fclose($file);
        if($nombreLignes>=$res['nChar'] && $nombreLignes>=$res['nNumbers']){
            if($res['nChar']>=$res['nNumbers']){
                file_put_contents('Resultat',"Nombres des lignes trouvées: ".$nombreLignes."<br>Nombres des lettres trouvées: ".$res['nChar']."<br>Nombres des chiffres trouvés: ".$res['nNumbers']);
            }else{
                file_put_contents('Resultat',"Nombres des lignes trouvées: ".$nombreLignes."<br>Nombres des chiffres trouvés: ".$res['nNumbers']."<br>Nombres des lettres trouvées: ".$res['nChar']);

            }
        } else if($res['nChar']>=$nombreLignes&&$res['nChar']>=$res['nNumbers']){
            if($nombreLignes>=$res['nNumbers']){
                file_put_contents('Resultat',"Nombres des lettres trouvées: ".$res['nChar']."<br>Nombres des lignes trouvées: ".$nombreLignes."<br>Nombres des chiffres trouvés: ".$res['nNumbers']);
            }else{
                file_put_contents('Resultat',"Nombres des lettres trouvées: ".$res['nChar']."<br>Nombres des chiffres trouvés: ".$res['nNumbers']."<br>Nombres des lignes trouvées: ".$nombreLignes);

            }
        }
        else{
            if($nombreLignes>=$res['nNumbers']){
                file_put_contents('Resultat',"Nombres des chiffres trouvés: ".$res['nNumbers']."<br>Nombres des lignes trouvées: ".$nombreLignes."<br>Nombres des lettres trouvées: ".$res['nChar']);
            }else{
                file_put_contents('Resultat',"Nombres des chiffres trouvés: ".$res['nNumbers']."<br>Nombres des lettres trouvées: ".$res['nChar']."<br>Nombres des lignes trouvées: ".$nombreLignes);

            }
        }
        return file_get_contents('Resultat');
    }
    */
    $res='';
    
    if(isset($_POST['submit'])!=NULL){
        $file=$_FILES['File']['name'];
        $filesize=$_FILES['File']['size'];
        $fileExtension=pathinfo($file, PATHINFO_EXTENSION);
        
        if($fileExtension=="txt"&& $filesize<10000){
            if(!empty($file)){
                move_uploaded_file($_FILES["File"]["tmp_name"], dirname(__FILE__) . '../../documents/' . $file);
                //copy($_FILES["File"]["tmp_name"], "uploads/" . $file);
                    $res=Calculer3(dirname(__FILE__) . '../../documents/' . $file);
                    echo "<p>".$res[0]."</p>";
                }
        }else {
            echo "<label class='form-label'>Veuillez verifiez votre fichier!!</label>";
        }
    }
?>